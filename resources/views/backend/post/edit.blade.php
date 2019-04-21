
@extends('backend.master')
@section('content')
@section('controller','Bài viết')
@section('action','Sửa')
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      @yield('controller')
      <small>@yield('action')</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="backend"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
      <li><a href="javascript:">@yield('controller')</a></li>
      <li class="active">@yield('action')</li>
   </ol>
</section>
<!-- Main content -->
<section class="content">
   <div class="box">
      @include('backend.messages_error')
      <div class="box-body">
         <form method="post" name="frmEditProduct" action="backend/new/edit?id={{$data->id}}" enctype="multipart/form-data">
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
                           <div class="form-group">
                              <label for="ten">Tiêu đề</label>
                              <input type="text" name="txtName" id="txtName" value="{{ $data->title }}"  class="form-control" />
                             
                           </div>
                           <div class="form-group @if ($errors->first('txtAlias')!='') has-error @endif">
                              <label for="alias">Đường dẫn tĩnh</label>
                              <input type="text" name="txtAlias" id="txtAlias" value="{{ $data->slug }}"  class="form-control" />
                              @if ($errors->first('txtAlias')!='')
                              <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtAlias'); !!}</label>
                              @endif
                           </div>
                           <!---------------------->
                           <div class="form-group">
                              <label for="desc">Mô tả</label>
                              <textarea name="shortdes" rows="5" class="form-control">{{ $data->shortdescription }}</textarea>
                           </div>
                           <div class="box box-info">
                              <div class="box-header">
                                 <h3 class="box-title">Thông tin chi tiết</h3>
                                 <div class="pull-right box-tools">
                                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                 </div>
                              </div>
                              <div class="box-body pad">
                                 <textarea name="txtContent" id="Text_min" cols="50" rows="5">{{ $data->content }}</textarea>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" name="txtTitle" value="{{ $data->titleseo }}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="keyword">Keyword</label>
                              <textarea name="txtKeyword" rows="5" class="form-control">{{ $data->keywordseo }}</textarea>
                           </div>
                           <div class="form-group">
                              <label for="description">Description</label>
                              <textarea name="txtDescription" rows="5" class="form-control">{{ $data->descriptionseo }}</textarea>
                           </div>
                        </div>
                        <!---------------- right ------------>
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
                                       <a><span><input type="checkbox" name="status" {!! (!isset($data->status) || $data->status==1)?'checked="checked"':'' !!} /> Hiển thị</span></a>
                                    </li>
                                    <div style="clear: both;"></div>
                                    <li><a href="{{ url('backend/new')}}"><i class="fa fa-trash-o"></i> Thoát</a></li>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                           <!-- /. box -->
                           <div class="box box-solid">
                              <div class="box-header with-border">
                                 <h3 class="box-title">Danh mục</h3>
                                 <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                 </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    <div id="li-cate-admin">
                                       <!----------------------------------------->
                                          <li id="nhan-menu" >
                                             <select name="txtProductCate" id="" class="form-control">
                                                @foreach ($listCate as $row)
                                                   <option value="{{ $row->id }} " 
                                                       @if ($row->id == $data->id_catepost)
                                                          selected 
                                                       @endif>
                                                      {{ $row->name }}
                                                   </option>
                                                @endforeach
                                             </select>
                                          </li>   
                                       <!----------------------------------------->
                                    </div>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                           <!-- /.box -->
                           <div class="box box-solid ">
                              <div class="box-header with-border">
                                 <h3 class="box-title">Hình ảnh</h3>
                                 <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                 </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    <li id="right-col-li" >
                                       <img src="{{ asset('upload/hinhanh/post/new/'.$data->photo) }}" id="output" />
                                       <input class="max-with" name="fImages" type="file"  onchange="loadFile(event)"/>
                                       <input name="old_Images" type="hidden" value="{{ $data->photo }}" />
                                    </li>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                           <div class="box box-solid">
                              <div class="box-header with-border">
                                 <h3 class="box-title">Banner đầu trang</h3>
                                 <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                 </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    <li id="right-col-li" >
                                       <img id="output" />
                                       <img src="{{ asset('upload/hinhanh/post/new/'.$data->bannertop) }}" id="output" />
                                       <input class="max-with" name="fImagesbn" type="file"/>
                                    </li>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                        </div>
                        <!---------------- end right -------->
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <!------- ngôn ngữ tiếng anh ------------->
                  <div class="tab-pane" id="tab_2">
                     <div class="row">
                        <div class="col-md-12 col-xs-12">
                           <div class="form-group">
                              <label for="ten">Tiêu đề(English)</label>
                              <input type="text"  name="txtName_eg" value="<?=$data->titleeg ?>"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="desc">Mô tả (English)</label>
                              <textarea name="shortdes_eg" rows="5" class="form-control">{{ $data->shortdescriptioneg }}</textarea>
                           </div>
                           <div class="box box-info">
                              <div class="box-header">
                                 <h3 class="box-title">Nội dung(English)</h3>
                                 <div class="pull-right box-tools">
                                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                 </div>
                              </div>
                              <div class="box-body pad">
                                 <textarea name="txtContent_eg" id="Text_min0" cols="50" rows="5"><?=$data->contenteg?></textarea>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                            <div class="form-group">
                              <label for="title">Title(English)</label>
                              <input type="text" name="txtTitle_eg" value="{{ $data->titleseoeg }}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="keyword">Keyword(English)</label>
                              <textarea name="txtKeyword_eg" rows="5" class="form-control">{{ $data->keywordseoeg }}</textarea>
                           </div>
                           <div class="form-group">
                              <label for="description">Description(English)</label>
                              <textarea name="txtDescription_eg" rows="5" class="form-control">{{ $data->descriptionseoeg }}</textarea>
                           </div>
                        </div>
                      
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <!------- End ngôn ngữ tiếng anh --------->
                  <!-- /.tab-pane -->
                 
                  <!-- /.tab-pane -->
               </div>
               <!-- /.tab-content -->
            </div>
            <div class="clearfix"></div>
            <div class="col-md-6">
            </div>
            <div class="clearfix"></div>
            <div class="box-footer">
               <div class="row">
                  <div class="col-md-6">
                     <button type="submit" class="btn btn-primary">Cập nhật</button>
                     <button type="button" class="btn btn-danger" onclick="javascript:window.location='backend/product'">Thoát</button>
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