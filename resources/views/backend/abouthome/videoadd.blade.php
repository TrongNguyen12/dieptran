@extends('backend.master')
@section('content')
@section('controller','Quản lý Video')
@section('action','Add')
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
         <form name="frmAdd" method="post" action="{!! url('backend/abouthome/video/add?id='.$id) !!}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="col-md-8 col-xs-12">
               <div class="form-group col-md-12 @if ($errors->first('fImages')!='') has-error @endif">
                  <img id="output" />
                  <input class="max-with" name="fImages" type="file"  onchange="loadFile(event)"/>
               </div>
               <div class="form-group col-md-12 hidden" >
                  <label for="file">File icon</label>
                  <input type="file" id="file" name="fImages2" >
                  <p class="help-block">Width:61px - Height: 61px</p>
                  @if ($errors->first('fImages2')!='')
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages2'); !!}</label>
                  @endif
               </div>
               <div class="clearfix"></div>
               <div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
                  <label for="ten">Tiêu đề</label>
                  <input type="text" id="txtName" name="txtName" value=""  class="form-control" />
                  @if ($errors->first('txtName')!='')
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
                  @endif
               </div>
               <div class="form-group">
                  <label for="alias">Link liên kết</label>
                  <input type="text" name="txtLink" id="txtLink" value=""  class="form-control" />
               </div>
            </div>
            <div class="col-md-6 col-xs-12 hidden">
               <div class="box box-info">
                  <div class="box-header">
                     <h3 class="box-title">Nội dung</h3>
                     <div class="pull-right box-tools">
                        <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                     </div>
                  </div>
                  <div class="box-body pad">
                     <textarea name="txtContent" id="txtContent" cols="50" rows="5"></textarea>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <button type="submit" class="btn btn-primary btn-block margin-bottom">Lưu</button>
               <button type="button" class="btn btn-danger" onclick="javascript:window.location='backend'">Thoát</button>
               <!-- /. box -->
               <!------------------------------->
            </div>
            <div class="clearfix"></div>
         </form>
      </div>
      <!-- /.box-body -->
   </div>
   <!-- /.box -->
</section>
<!-- /.content -->
@endsection()