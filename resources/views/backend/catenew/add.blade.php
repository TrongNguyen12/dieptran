@extends('backend.master')
@section('content')
@section('controller','Thêm mới danh mục bài viết')
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
         <form name="frmAdd" method="post" action="{{-- {!! route('backend.catenew.postAdd') !!} --}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="nav-tabs-custom">
               <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
                  <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Thông tin chung(English)</a></li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                     <div class="row">
                        <div class="col-md-8 col-xs-12">
                           <div class="clearfix"></div>
                           <div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
                              <label for="ten">Tên</label>
                              <input type="text" name="txtName" id="txtName" value=""  class="form-control" />
                              @if ($errors->first('txtName')!='')
                              <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
                              @endif
                           </div>
                           <div class="form-group @if ($errors->first('txtAlias')!='') has-error @endif">
                              <label for="alias">Đường dẫn tĩnh</label>
                              <input type="text" name="txtAlias" id="txtAlias" value=""  class="form-control" />
                              @if ($errors->first('txtAlias')!='')
                              <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtAlias'); !!}</label>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="txtTitle">Title</label>
                              <input type="text" name="txtTitle" value=""  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="keyword">Keyword</label>
                              <textarea name="txtKeyword" rows="5" class="form-control"></textarea>
                           </div>
                           <div class="form-group">
                              <label for="description">Description</label>
                              <textarea name="txtDescription" rows="5" class="form-control"></textarea>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <button type="submit" class="btn btn-primary btn-block margin-bottom">Lưu</button>
                           <div class="box box-solid">
                              <div class="box-header with-border">
                                 <h3 class="box-title">Tác vụ</h3>
                                 <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                 </div>
                              </div>
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    
                                    <li>
                                      <p>Chọn ngôn ngữ</p>
                                      <select name="txtlg" class="form-control">
                                         <option value="vi">Tiếng việt</option>
                                         <option value="eg">Tiếng anh</option>
                                      </select>
                                    </li>
                                    <li >
                                       <a style="font-weight: 400px;"><label><input type="checkbox" name="status" checked="checked"> Hiển thị</label></a>
                                    </li>
                                      
                                    <div style="clear: both;"></div>
                                    <li><a href="{{ url('backend/catenew')}}"><i class="fa fa-trash-o"></i> Thoát</a></li>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                        </div>
                        <!----------------------->   
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="tab-pane" id="tab_2">
                       <div class="form-group">
                          <label for="ten">Tên(English)</label>
                          <input type="text" name="txtName_eg" class="form-control" />
                       </div> 
                       <div class="form-group">
                          <label for="txtTitle">Title(English)</label>
                          <input type="text" name="txtTitle_eg" class="form-control" />
                       </div>
                       <div class="form-group">
                          <label for="keyword">Keyword(English)</label>
                          <textarea name="txtKeyword_eg" rows="5" class="form-control"></textarea>
                       </div>
                       <div class="form-group">
                          <label for="description">Description(English)</label>
                          <textarea name="txtDescription_eg" rows="5" class="form-control"></textarea>
                       </div>
                  </div>
                  <!-- /.tab-pane -->
               </div>
               <!-- /.tab-content -->
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