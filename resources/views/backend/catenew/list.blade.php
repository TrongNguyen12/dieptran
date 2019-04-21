@extends('backend.master')
@section('content')
@section('controller','Danh mục bài viết')
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
               <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th class="text-center with_dieuhuong">Stt</th>
                           <th>Tên danh mục</th>
                           <th class="text-center with_dieuhuong">Hiển thị</th>                           
                           <th class="text-center with_dieuhuong">Sửa</th>
                           <th class="text-center with_dieuhuong">Xóa</th>
                           <th class="text-center with_dieuhuong">Id</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($data as $k=>$item)
                        <tr>
                           <td class="text-center with_dieuhuong">{{$k+1}}</td>
                           <td><a>{{$item->name}}</a>
                           </td>
                           <td class="text-center with_dieuhuong">
                              @if($item->status>0)
                                <a href="backend/catenew/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Bật</a>
                              @else
                                <a href="backend/catenew/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Tắt</a>
                              @endif
                           </td>
                           
                           <td class="text-center with_dieuhuong">
                              <i class="fa fa-pencil fa-fw"></i><a href="backend/catenew/edit?id={{$item->id}}">Edit</a>
                           </td>
                           <td class="text-center">
                              <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/catenew/delete?id={{$item->id}}">Delete</a>
                           </td>
                           <td style="text-align: center;">{{$item->id}}</td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
               <!-- /.box-body -->
               <div class="box-footer col-md-12">
                  <div class="col-md-6">
                     <input type="button" onclick="javascript:window.location='backend/catenew/add'" value="Thêm" class="btn btn-primary" />
                     <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />
                  </div>
               </div>
            </div>
            <!-- /.box -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</form>
@endsection()