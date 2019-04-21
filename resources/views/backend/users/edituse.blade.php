@extends('backend.master')
@section('content')
@section('controller','Cập nhật tài khoản')
@section('action','Edit')
<!-- Content Header (Page header) -->
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
<section class="content">
   <div class="box">
      @include('backend.messages_error')
      <div class="box-body">
         <form method="post" action="backend/users/postedituse?id={{$thanhvien->id}}" enctype="multipart/form-thanhvien">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="row">
               <div class="col-md-6 col-xs-12">
                  <div class="clearfix"></div>
                  <div class="form-group">
                     <label for="ten">Username</label>
                     <input type="text" disabled value="{{ $thanhvien->username }}"  class="form-control" />
                  </div>
                  <div class="form-group @if ($errors->first('txtPasswordNew')!='') has-error @endif">
                     <label for="ten">Password mới</label>
                     <input type="password" name="txtPasswordNew" value=""  class="form-control" />
                     @if ($errors->first('txtPasswordNew')!='')
                     <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtPasswordNew'); !!}</label>
                     @endif
                  </div>
                  <div class="form-group  @if ($errors->first('txtName')!='') has-error @endif">
                     <label for="ten">Họ tên</label>
                     <input type="text" name="txtName" value="{{ $thanhvien->name }}"  class="form-control" />
                     @if ($errors->first('txtName')!='')
                     <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
                     @endif
                  </div>
                  <div class="form-group">
                     <label for="alias">Email</label>
                     <input type="email" name="txtEmail" id="txtEmail" value="{{ $thanhvien->email }}"  class="form-control" />
                  </div>
                  <div class="form-group">
                     <label for="alias">Điện thoại</label>
                     <input type="text" name="txtPhone" id="txtPhone" value="{{ $thanhvien->phone }}"  class="form-control" />
                  </div>
                  <!------------------------>
                  <!------------------------>
               </div>
               <div class="col-md-6 col-xs-12"></div>
            </div>
            <div class="clearfix"></div>
            <div class="box-footer">
               <div class="row">
                  <div class="col-md-6">
                     <button type="submit" class="btn btn-primary">Cập nhật</button>
                     <button type="button" class="btn btn-danger" onclick="javascript:window.location='backend'">Thoát</button>
                  </div>
               </div>
            </div>
         </form>
      </div>
      <!-- /.box-body -->
   </div>
   <!-- /.box -->
</section>
<!-- /.content -->
@endsection()