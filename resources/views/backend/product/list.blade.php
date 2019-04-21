<style type="text/css">
#example2_paginate{
    display: none;
}
#example2_info{
    display: none;
}
</style>
@extends('backend.master')
@section('content')
@section('controller','Sản phẩm')
@section('action','List')
<!-- Content Header (Page header) -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#chonhet").click(function(){
      var status=this.checked;
      $("input[name='chon']").each(function(){this.checked=status;})    });
    $("#xoahet").click(function(){
      var listid="";
      $("input[name='chon']").each(function(){
        if (this.checked) listid = listid+","+this.value;
        })
      listid=listid.substr(1);   //alert(listid);
      if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
      hoi= confirm("Bạn có chắc chắn muốn xóa?");
      if (hoi==true) document.location = homeUrl()+"/backend/product/"+listid+"/deleteList";
    });
  });
</script>
<script type="text/javascript">
    function changepos() {
        document.frm1.action = "backend/product/changepos";
        document.frm1.submit();
    }

</script>
<section class="content-header">
  <h1>
    @yield('controller')
    <small>@yield('action')</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="javascript:">@yield('controller')</a></li>
    <li class="active">@yield('action')</li>
  </ol>
</section>
<!-- Main content -->
<form method="post" name="frm1" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
<section class="content">
  <div class="row">
    <div class="col-xs-12">
     <div class="box">   
          <div class="box-body">
           <table id="example1" class="table table-bordered table-striped"> 
            <thead>
              <tr>

                <th style="width: 20px;"><input type="checkbox" name="chonhet" class="minimal" id="chonhet" /></th>

                <th class="text-center with_dieuhuong" style="width: 20px;">Stt</th>

                <th>Cha</th>

                <th style="width: 25%;">Tiêu đề</th>
                <th style="text-align:center;width: 10%;" ><a class="vitri" onclick="changepos()">Vị trí</a></th>
                <th>Hình ảnh</th>
                <th class="text-center with_dieuhuong">Hoạt động</th>

                <th class="text-center with_dieuhuong">Sửa</th>

                <th class="text-center with_dieuhuong">Xóa</th>

                <th class="text-center with_dieuhuong">Id</th>

              </tr>

            </thead>

            <tbody>

              @foreach($data as $k=>$item)

                <?php @$catpro = DB::table('product_categories')->select('name','id','alias')->where('id',@$item->cate_id)->first();
                   
                ?>

              <tr>
                <td><input type="checkbox" name="chon" id="chon" value="{{$item->id}}" class="chon" /></td>
                <td class="text-center with_dieuhuong">{{$k+1}}</td>
                <td>
                     <?php 
                         $cate_id_min=DB::table('cate_ids')->select()->where('product_id',$item->id)->get();
                            foreach($cate_id_min as $kip){     
                             @$cate = DB::table('product_categories')->select()->where('id',$kip->cate_id)->first();
                                if(!empty($cate->name)){?> 
                             
                                <a style="color: #3c8dbc;"><?php echo $cate->name; ?>, </a> 
                    <?php }}?>
                </td>
                <td>{{$item->name}} <br/>
                
                </td>
                <td style="text-align:center;width: 10%;" >
                    <input class="text-input medium-input" style="text-align:center; width:30% !important;" type="text" value="<?php echo $item->stt?>" name="order[<?php echo $item->id; ?>]" />
                    <input type="hidden"  value="<?php echo $item->id?>" name="idsy[<?php echo $item->id; ?>]" />
                </td>
                <td>
                   <img style="width: 100px;" src="{{ asset('upload/product/'.$item->images) }}" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" style="max-width: 100%;max-height: 200px;"  alt="NO PHOTO" />
                </td>
                 
               <td class="text-center with_dieuhuong">
                  <div class="form-group"> 
                    @if($item->status>0)
                      <a href="backend/product/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Hiển thị</a>
                    @else
                      <a href="backend/product/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> No Hiển thị</a>
                    @endif
                  </div>
                  <div class="form-group" > 
                    @if($item->noibat>0)
                      <a href="backend/product/edit?id={{$item->id}}&noibat={{ time() }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Nổi bật</a>
                    @else
                      <a href="backend/product/edit?id={{$item->id}}&noibat={{ time() }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Nổi bật)</a>
                    @endif
                  </div>
                  

                </td>

                <td class="text-center with_dieuhuong">

                  <i class="fa fa-pencil fa-fw"></i><a href="backend/product/edit?id={{$item->id}}">Edit</a>

                </td>

                <td class="text-center">

                  <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/product/{{$item->id}}/delete">Delete</a>

                </td>

                 <td style="text-align: center;"><a>{{$item->id}}</a></td>

              </tr>

              @endforeach

            </tbody>

          </table>

         {{ $data->links() }}

        </div><!-- /.box-body -->

        <div class="box-footer col-md-12">

          <div class="row">

            <div class="col-md-6">

              <input type="button" onclick="javascript:window.location='backend/product/add'" value="Thêm" class="btn btn-primary" />

              <button type="button" id="xoahet" class="btn btn-success">Xóa</button>

              <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />

            </div>

          </div>

        </div>

      </div><!-- /.box -->

    </div><!-- /.col -->

  </div><!-- /.row -->

</section><!-- /.content -->
</form>



@endsection()

