@extends('backend.master')
@section('content')
@section('controller','Product Categories')
@section('action','List')
<!-- Content Header (Page header) -->
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
   
   
   
       if (hoi==true) document.location = homeUrl()+"/backend/productcate/"+listid+"/delete_list";
   
   
   
     });
   
   
   
   });
   
   
   
</script>
<script type="text/javascript">
   function changepos() {
   
       document.frm1.action = "backend/productcate/changepos";
   
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
      <small>@yield('action')</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="javascript:">@yield('controller')</a></li>
      <li class="active">@yield('action')</li>
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
               <!--<div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                  
                  
                  
                  </div>-->
               <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th style="width: 20px;"><input type="checkbox" name="chonhet" class="minimal" id="chonhet" /></th>
                           <th class="text-center with_dieuhuong">Stt</th>
                           <th >Danh mục cha</th>
                           <th>Tên danh mục</th>
                           <th style="text-align:center;"><a class="vitri" onclick="changepos()">Vị trí</a></th>
                           <th class="text-center " style="width: 15%;">Trang chủ</th>
                           <th class="text-center ">Sửa</th>
                           <th class="text-center ">Xóa</th>
                           <th class="text-center ">Id</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($data as $k=>$item)
                        <tr>
                           <td><input type="checkbox" name="chon" id="chon" value="{{$item->id}}" class="chon" /></td>
                           <td class="text-center with_dieuhuong">{{$k+1}}</td>
                           <td>
                              <?php  $parent = DB::table('product_categories')->where('id', $item->parent_id)->first();
                                 ?>
                              @if(!empty($parent))
                              {{ $parent->name }}
                              @else
                              <a style="color: red;"> Danh mục cấp cao</a> 
                              @endif
                           </td>
                           <td>
                              {{$item->name}}<br/>
                              <?php
                                if($item->parent_id == 0){
                              ?>
                              <a class="click_f btn btn-default" style="background: none;width: auto;margin-top: 5px" data-toggle="modal" data-id="{{$item->id}}" data-target="#modal-default">Thêm danh mục con</a>
                              <span style="text-align: right;float: right;">
                              @if($item->menu>0)
                              <a href="backend/productcate/edit?id={{$item->id}}&menu={{ time() }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Menu</a>
                              @else
                              <a href="backend/productcate/edit?id={{$item->id}}&menu={{ time() }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Menu</a>
                              @endif
                              </span>
                              <div style="clear: both;"></div>
                              <?php } ?>
                           </td>
                           <td style="text-align:center;" >
                              <input class="text-input medium-input" style="text-align:center; width:30% !important;" type="text" value="<?php if($item->stt <= 0){echo "0";}else{echo $item->stt;} ?>" name="order[<?php echo $item->id; ?>]" />
                              <input type="hidden"  value="<?php echo $item->id?>" name="idsy[<?php echo $item->id; ?>]" />
                           </td>
                           <td class="text-center with_dieuhuong">
                              @if($item->status>0)
                              <a href="backend/productcate/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Bật</a>
                              @else
                              <a href="backend/productcate/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Tắt</a>
                              @endif
                              <br/>
                              @if($item->home>0)
                              <a href="backend/productcate/edit?id={{$item->id}}&home={{ time() }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Home</a>
                              @else
                              <a href="backend/productcate/edit?id={{$item->id}}&home={{ time() }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Home</a>
                              @endif
                           </td>
                           <td class="text-center with_dieuhuong">
                              <i class="fa fa-pencil fa-fw"></i><a href="backend/productcate/edit?id={{$item->id}}">Edit</a>
                           </td>
                           <td class="text-center">
                              <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/productcate/{{$item->id}}/delete">Delete</a>
                           </td>
                           <td style="text-align: center;">{{$item->id}}</td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  <?php echo $data->links()?>     
               </div>
               <!-- /.box-body -->
               <div class="box-footer col-md-12">
                  <div class="col-md-6">
                     <input type="button" onclick="javascript:window.location='backend/productcate/add'" value="Thêm" class="btn btn-primary" />
                     <button type="button" id="xoahet" class="btn btn-success">Xóa</button>
                     <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />
                  </div>
               </div>
            </div>
            <!-- /.box -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="modal fade" id="modal-default" style="display: none;">
         <div class="modal-dialog">
            <div class="modal-content">
               <p>
               <div id="view"></div>
               </p>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <script type="text/javascript">
         $(document).ready(function(){    
         
             $(".click_f").click(function(){
         
                 var id_cat=$(this).attr('data-id');
         
                 $.ajax({
         
                     url: 'backend/productcate/modal',
         
                     type: 'get',
         
                     dataType:"html",
         
                     data: {area_id: id_cat},                  
         
                     success: function (data){
         
                         $("#view").html(data);
         
                     }
         
                 });              
         
             });
         
         }); 
         
      </script>
   </section>
   <!-- /.content -->
</form>
@endsection()