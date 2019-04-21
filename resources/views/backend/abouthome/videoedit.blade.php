@extends('backend.master')
@section('content')
@section('controller','Quản lý slider')
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
         <form method="post" action="backend/abouthome/video/edit?id={{$data[0]->id}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="row">
               <div class="col-md-8 col-xs-12">
                  <div class="form-group @if ($errors->first('fImages')!='') has-error @endif">
                     <div class="form-group">
                        <img src="{{ asset('upload/hinhanh/video/'.$data[0]->photo) }}" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" class="img-responsive"  alt="NO PHOTO" />
                        <input type="hidden" name="img_current" value="{!! @$data[0]->photo !!}">
                     </div>
                     <label for="file">Chọn File ảnh</label>
                     <input type="file" id="file" name="fImages" >
                     <p class="help-block">Width:800px - Height: 326px</p>
                     @if ($errors->first('fImages')!='')
                     <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages'); !!}</label>
                     @endif
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
                     <label for="ten">Tiêu đề</label>
                     <input type="text" name="txtName" id="txtName" value="{{ $data[0]->name }}"  class="form-control" />
                     @if ($errors->first('txtName')!='')
                     <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
                     @endif
                  </div>
                  <div class="form-group">
                     <label for="alias">Link liên kết</label>
                     <input type="text" name="txtLink" id="txtLink" value="{{ $data[0]->link }}"  class="form-control" />
                  </div>
               </div>
               <div class="col-md-3">
                  <button type="submit" class="btn btn-primary btn-block margin-bottom">Lưu</button>
               </div>
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