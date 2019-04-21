
@extends('backend.master')
@section('content')
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
         <form method="post" action="backend/about?type={{ @$_GET['type'] }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="nav-tabs-custom">
               <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
                  <?php if($_GET['type'] == 'gioi-thieu'){?>
                  <li><a href="#tab_2" data-toggle="tab" aria-expanded="true">SEO</a></li>
                  <?php } ?>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                     <div class="row">
                        <div class="col-md-6 col-xs-12">
                           <?php if($_GET['type'] == 'tam-nhin-su-menh' || $_GET['type'] == 'gioi-thieu' || $_GET['type'] == 'chuyen-gia-toc' || $_GET['type'] == 'san-pham'){?>
                           <div class="form-group">
                              <label for="ten">Tiêu đề trang</label>
                              <input type="text" name="txtName" id="txtName" value="{{ @$data->name }}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Tiêu đề trang (English)</label>
                              <input type="text" name="txtName_eg" value="{{ @$data->nameeg }}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Mô tả ngắn</label>
                              <input type="text" name="txtTitle1" value="{{ @$data->title }}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Mô tả ngắn (English)</label>
                              <input type="text" name="txtTitle1_eg" value="{{ @$data->titleeg }}"  class="form-control" />
                           </div>
                           <?php } ?>     
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 col-xs-12">
                           
                           <?php
                            if($_GET['type'] == 'chuyen-gia-toc' || $_GET['type'] == 'san-pham'){
                           ?>
                               <div class="form-group">
                                  <label for="ten">Link</label>
                                  <input type="text" name="link" value="{{ @$data->link }}"  class="form-control" />
                               </div>
                           <?php } ?>
                            <?php
                              if($_GET['type'] == 'gioi-thieu'){
                            ?>      
{{--                                <div class="box box-info">
                                 <h3 class="box-title">Mô tả</h3>
                                 <div class="box-body pad">
                                    <textarea name="txtMota" id="Text_min3" cols="50" rows="5" style="width: 100%;">{{ @$data->mota }}</textarea>
                                 </div>
                              </div>
                              <div class="box box-info">
                                 <h3 class="box-title">Mô tả(English)</h3>
                                 <div class="box-body pad">
                                    <textarea name="txtMota_eg" id="Text_min4" cols="50" rows="5" style="width: 100%;">{{ @$data->mota_eg }}</textarea>
                                 </div>
                              </div>   --}}

                            <?php } ?>  
                           <div class="box box-info">
                              <h3 class="box-title">Nội dung</h3>
                              <div class="box-body pad">
                                 <textarea name="txtContent" id="Text_min" cols="50" rows="5" style="width: 100%;">{{ @$data->content }}</textarea>
                              </div>
                           </div>
                           <div class="box box-info">
                              <h3 class="box-title">Nội dung(English)</h3>
                              <div class="box-body pad">
                                 <textarea name="txtContent_eg" id="Text_min1" cols="50" rows="5" style="width: 100%;">{{ @$data->contenteg }}</textarea>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="ten">Tiêu đề nội dung 2</label>
                              <input type="text" name="txtTitleContent1" value="{{ @$data->titlecontent1 }}"  class="form-control" />
                           </div>
                           <div class="box box-info">
                              <h3 class="box-title">Nội dung 2</h3>
                              <div class="box-body pad">
                                 <textarea name="txtContent1" id="Text_min3" cols="50" rows="5" style="width: 100%;">{{ @$data->content1 }}</textarea>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="ten">Tiêu đề nội dung 2 (English)</label>
                              <input type="text" name="txtTitleContent1eg" value="{{ @$data->titlecontent1eg }}"  class="form-control" />
                           </div>
                           <div class="box box-info">
                              <h3 class="box-title">Nội dung 2(English)</h3>
                              <div class="box-body pad">
                                 <textarea name="txtContent1eg" id="Text_min4" cols="50" rows="5" style="width: 100%;">{{ @$data->content1eg }}</textarea>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="ten">Tiêu đề nội dung 3</label>
                              <input type="text" name="txtTitleContent2" value="{{ @$data->titlecontent2 }}"  class="form-control" />
                           </div>
                           <div class="box box-info">
                              <h3 class="box-title">Nội dung 3</h3>
                              <div class="box-body pad">
                                 <textarea name="txtContent2" id="Text_min6" cols="50" rows="5" style="width: 100%;">{{ @$data->content2 }}</textarea>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="ten">Tiêu đề nội dung 3 (English)</label>
                              <input type="text" name="txtTitleContent2eg" value="{{ @$data->titlecontent2 }}"  class="form-control" />
                           </div>
                           <div class="box box-info">
                              <h3 class="box-title">Nội dung 3(English)</h3>
                              <div class="box-body pad">
                                 <textarea name="txtContent2eg" id="Text_min5" cols="50" rows="5" style="width: 100%;">{{ @$data->content2eg }}</textarea>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="description">Năm hoạt động</label>
                              <input type="text" name="txtNamHD" value="{!! @$data->namhd !!}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="description">Dự án hoàn thành</label>
                             <input type="text" name="txtDAHT" value="{!! @$data->duanHT !!}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="description">Khách hàng thân thiết</label>
                             <input type="text" name="txtKHTT" value="{!! @$data->khthanthiet !!}"  class="form-control" />
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2" >
                     <div class="row">
                        <div class="col-md-6 col-xs-12">
                           <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" name="txtTitleseo" value="{!! old('txtTitle', isset($data) ? @$data->titleseo : null) !!}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="keyword">Keyword</label>
                              <textarea name="txtKeywordseo" rows="5" class="form-control">{!! old('txtKeyword', isset($data) ? @$data->keywordseo : null) !!}</textarea>
                           </div>
                           <div class="form-group">
                              <label for="description">Description</label>
                              <textarea name="txtDescriptionseo" rows="5" class="form-control">{!! old('txtDescription', isset($data) ? @$data->descriptionseo : null) !!}</textarea>
                           </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                           <div class="form-group">
                              <label for="title">Title(English)</label>
                              <input type="text" name="txtTitleseoeg" value="{!! @$data->titleseoeg !!}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="keyword">Keyword(English)</label>
                              <textarea name="txtKeywordseoeg" rows="5" class="form-control">{!! @$data->keywordseoeg !!}</textarea>
                           </div>
                           <div class="form-group">
                              <label for="description">Description(English)</label>
                              <textarea name="txtDescriptionseoeg" rows="5" class="form-control">{!! @$data->descriptionseoeg !!}</textarea>
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