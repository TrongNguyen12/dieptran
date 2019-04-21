@extends('backend.master')
@section('content')
@section('controller','Tỉnh/Thành phố')

<script type="text/javascript">
  $(document).ready(function() {
    $("#chonhet").click(function(){
      var status=this.checked;
      $("input[name='chon']").each(function(){this.checked=status;})
    });
    $("#xoahet").click(function(){
      var listid="";
      $("input[name='chon']").each(function(){
        if (this.checked) listid = listid+","+this.value;
        })
      listid=listid.substr(1);   //alert(listid);
      if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
      hoi= confirm("Bạn có chắc chắn muốn xóa?");
      if (hoi==true) document.location = homeUrl()+"/backend/city/"+listid+"/delete_list";
    });

  });

</script>
<script type="text/javascript">
    function changepos() {
        document.frm1.action = "backend/city/changepos";
        document.frm1.submit();
    }

    function MM_jumpMenu(targ,selObj,restore){ //v3.0
        eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
        if (restore) selObj.selectedIndex=0;
    }
</script>
<section class="content-header">

  <h1>

    @yield('controller')

    <small>Tỉnh/Thành phố</small>

  </h1>

  <ol class="breadcrumb">

    <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>

    <li><a href="javascript:">@yield('controller')</a></li>

    <li class="active">Tỉnh/Thành phố</li>

  </ol>

</section>

<!-- Main content -->

<form method="post" name="frm1"enctype="multipart/form-data">
  	<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
<section class="content">



  <div class="row">

    <div class="col-xs-12">

      <div class="box">

        @if (session('status'))

        <div class="box-header">

            <h3 class="box-title alert_thongbao text-green">{{ session('status') }}</h3>

        </div>

        @endif

        <div class="box-body">
           <table id="example1" class="table table-bordered table-striped"> 
            <thead>
              <tr>
                <th style="width: 20px;"><input type="checkbox" name="chonhet" class="minimal" id="chonhet" /></th>
                <th class="text-center with_dieuhuong">Stt</th>
               <th>Tiêu đề</th>
                <th style="text-align:center;" class="text-center"><a class="vitri" onclick="changepos()">Vị trí</a></th>
               
                <th class="text-center">Sửa</th>
                <th class="text-center">Xóa</th>
                <th class="text-center">Id</th>
              </tr>

            </thead>

            <tbody>

              @foreach($data as $k=>$item)
              
              <tr>
                <td><input type="checkbox" name="chon" id="chon" value="{{$item->id}}" class="chon" /></td>
                <td class="text-center with_dieuhuong">{{$k+1}}</td>
               
                <td>  <a href="backend/city/edit?id={{$item->id}}">{{$item->name}}</a> 
                   
                <div style="clear: both;"></div>
                </td>
                <td style="text-align:center;" >
                    <input class="text-input medium-input" style="text-align:center; width:30% !important;" type="text" value="<?php echo $item->stt?>" name="order[<?php echo $item->id; ?>]" />
                    <input type="hidden"  value="<?php echo $item->id?>" name="idsy[<?php echo $item->id; ?>]" />
                </td>
              
                <td class="text-center ">

                  <i class="fa fa-pencil fa-fw"></i><a href="backend/city/edit?id={{$item->id}}">Edit</a>

                </td>

                <td class="text-center">

                  <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/city/{{$item->id}}/delete">Delete</a>

                </td>

                <td style="text-align: center;">{{$item->id}}</td>

              </tr>

              @endforeach

            </tbody>

          </table>

        </div><!-- /.box-body -->

        <div class="box-footer col-md-12">
          <div class="col-md-6">
            <input type="button" onclick="javascript:window.location='backend/city/add'" value="Thêm" class="btn btn-primary" />
            <button type="button" id="xoahet" class="btn btn-success">Xóa</button>
            <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />
          </div>
        </div>

      </div><!-- /.box -->

    </div><!-- /.col -->

  </div><!-- /.row -->
   
</section><!-- /.content -->
</form>
@endsection()

