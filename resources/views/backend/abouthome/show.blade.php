@extends('backend.master')
@section('content')
@section('controller','Setting')
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
         <form method="post" action="backend/abouthome" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="nav-tabs-custom">
               <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                     <div class="row">
                        <div class="col-md-8 col-xs-12">
                           <div class="clearfix"></div>
                           <div class="form-group">
                              <label for="ten">Mô tả</label>
                              <textarea rows="10" id="Text_min" name="content" class="form-control">
                                 {!! $content[0]->decs !!}
                              </textarea>
                           </div>
                           <div class="form-group">
                              <label for="ten">Mô tả (EG)</label>
                              <textarea rows="5" id="Text_min1" name="content_eg" class="form-control" >
                                 {!! $content[1]->decs !!}
                              </textarea>
                           </div>
                           
                        </div>
                        <div class="col-md-3 col-xs-12" >
                           <button type="submit" class="btn btn-primary btn-block margin-bottom">Lưu</button>
                           <div class="box box-solid">
                              <div class="box-header with-border">
                                 <h3 class="box-title">Thêm Mới</h3>
                                 
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    <button type="button" class="btn btn-primary margin-bottom" onclick="javascript:window.location='backend/abouthome/video/add?id=1'">Thêm Mới Video VI</button>
                                    <button type="button" class="btn btn-primary" onclick="javascript:window.location='backend/abouthome/video/add?id=2'">Thêm Mới Video EN</button>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>

                           <div class="box box-solid">
                              <div class="box-header with-border">
                                 <h3 class="box-title">Video VI</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    @foreach ($videovi as $item)
                                       <div class="row">
                                          <div class="col-sm-9">
                                             <div class="img-thumbnail">
                                                <img src="{{ asset('upload/hinhanh/video') }}/{{ $item->photo }}" alt="" style="width: 100%">
                                             </div>
                                          </div>
                                          <div class="col-sm-3">
                                             <a  class="btn btn-primary margin-bottom" onclick="javascript:window.location='backend/abouthome/video/edit?id={{ $item->id }}'">Sửa</a>
                                             <a  class="btn btn-danger" onclick="if(!confirm('Xác nhận xóa')) return false;" href="backend/abouthome/video/delete?id={{ $item->id }}">Xóa</a>
                                          </div>
                                       </div>
                                    @endforeach
                                 </ul>
                              </div>
                              
                           </div>

                           <div class="box box-solid">
                              <div class="box-header with-border">
                                 <h3 class="box-title">Video EN</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    @foreach ($videoen as $item)
                                       <div class="row">
                                          <div class="col-sm-9">
                                             <div class="img-thumbnail">
                                                <img src="{{ asset('upload/hinhanh/video') }}/{{ $item->photo }}" alt="" style="width: 100%">
                                             </div>
                                          </div>
                                          <div class="col-sm-3">
                                             <a  class="btn btn-primary margin-bottom" onclick="javascript:window.location='backend/abouthome/video/edit?id={{ $item->id }}'">Sửa</a>
                                             <a  class="btn btn-danger" onclick="if(!confirm('Xác nhận xóa')) return false;" href="backend/abouthome/video/delete?id={{ $item->id }}">Xóa</a>
                                          </div>
                                       </div>
                                    @endforeach
                                 </ul>
                              </div>
                              
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