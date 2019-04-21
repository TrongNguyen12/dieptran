@extends('backend.master')
@section('content')
@section('controller','Khách hàng')
@section('action','Thêm mới')
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
         <form name="frmAdd" method="post" action="{!! route('backend.news.postAdd') !!}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="nav-tabs-custom">
               <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                     <div class="row">
                        <div class="col-md-6 col-xs-12">
                           <div class="form-group col-md-12 @if ($errors->first('fImages')!='') has-error @endif">
                              <label for="file">File ảnh</label>
                              <input type="file" id="file" name="fImages" >
                              <p class="help-block">Width:225px - Height: 162px</p>
                              @if ($errors->first('fImages')!='')
                              <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages'); !!}</label>
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
                              <label for="ten">Thông tin</label>
                              <textarea rows="5" id="Text_min" name="content" class="form-control"></textarea>
                           </div>
                            
                        </div>
                        <div class="col-md-6 col-xs-12">
                             <div class="form-group">
                              <label for="ten">Tiêu đề(English)</label>
                              <input type="text" name="txtName_eg" class="form-control" />                             
                           </div>
                            <div class="form-group">
                              <label for="ten">Thông tin (English)</label>
                              <textarea rows="5" id="Text_min1" name="content_eg" class="form-control"></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <!-- /.tab-pane -->
               </div>
               <!-- /.tab-content -->
            </div>
            <div class="clearfix"></div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="ten">Số thứ tự</label>
                  <input type="number" min="1" name="stt" value="{!! count($data)+1 !!}" class="form-control" style="width: 100px;">
               </div>
               <div class="form-group">
                  <label>
                  <input type="checkbox" name="status" checked="checked"> Hiển thị
                  </label>
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="box-footer">
               <div class="row">
                  <div class="col-md-6">
                     <button type="submit" class="btn btn-primary">Lưu</button>
                     <button type="button" onclick="javascript:window.location='backend/news?type={{ @$_GET[type] }}'" class="btn btn-danger">Thoát</button>
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