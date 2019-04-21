
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
         <form method="post" name="frmEditProduct" action="backend/post/edit?id={{$data[0]->id}}" enctype="multipart/form-data">
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
                              <input type="text" name="txtName" id="txtName" value="{{ $data[0]->name }}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Tiêu đề hiển thị trang chủ ( chèn thêm kí tự || để xuống dòng)</label>
                              <input type="text" name="txtNameHome"  class="form-control" value="{{ $data[0]->titlehome }}" />
                           </div>
                           <div class="form-group @if ($errors->first('txtAlias')!='') has-error @endif">
                              <label for="alias">Đường dẫn tĩnh</label>
                              <input type="text" name="txtAlias" id="txtAlias" value="{{ $data[0]->slug }}"  class="form-control" />
                              @if ($errors->first('txtAlias')!='')
                              <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtAlias'); !!}</label>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="desc">Mô tả ngắn</label>
                              <textarea name="shortdes" rows="5" class="form-control" id="Text_min3">
                                 {!! $data[0]->shortdes !!}
                              </textarea>
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
                                 <textarea name="txtContent" id="Text_min" cols="50" rows="5">{{ $data[0]->content }}</textarea>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" name="txtTitle" value="{{ $data[0]->titleseo }}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="keyword">Keyword</label>
                              <textarea name="txtKeyword" rows="5" class="form-control">{{ $data[0]->metakeyword }}</textarea>
                           </div>
                           <div class="form-group">
                              <label for="description">Description</label>
                              <textarea name="txtDescription" rows="5" class="form-control">{{ $data[0]->metadescription }}</textarea>
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
                                       <a><span><input type="checkbox" name="status" {!! (!isset($data[0]->displayhome) || $data[0]->displayhome==1)?'checked="checked"':'' !!} /> Hiển thị trang chủ</span></a>
                                    </li>
                                    <li style="display: none;">
                                       <a style="line-height: 35px;"><input type="number" min="1" name="stt" value="{!! isset($data[0]->status) ? $data[0]->stt : (count($product)+1) !!}" class="form-control" style="width: 100px;margin-right: 10px;float: left;margin-bottom: 10px;"/> Số thứ tự</a>
                                       <div style="clear: both;"></div>
                                    </li>
                                    <div style="clear: both;"></div>
                                    <li><a href="{{ url('backend/post')}}"><i class="fa fa-trash-o"></i> Thoát</a></li>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                           <!-- /. box -->
                           
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
                                       <img src="{{ asset('upload/hinhanh/post/'.$data[0]->img) }}" id="output" />
                                       <input class="max-with" name="fImages" type="file"  onchange="loadFile(event)"/>
                                    </li>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    <h4>Thư viện ảnh</h4>
                                    @foreach ($listImages as $item)
                                       <div class="row">
                                          <div class="col-sm-9">
                                             <div class="img-thumbnail">
                                                <img src="{{ asset('upload/hinhanh/post/lib') }}/{{ $item->name }}" alt="" style="width: 100%">
                                             </div>
                                          </div>
                                          <div class="col-sm-3">
                                             <a  class="btn btn-danger" onclick="if(!confirm('Xác nhận xóa')) return false;" href="backend/post/imgdelete?id={{ $item->id }}">Xóa</a>

                                          </div>
                                       </div>
                                    @endforeach
                                    <input class="max-with" name="moreImages[]" type="file" multiple/>
                                 </ul>
                              </div>

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
                              <input type="text"  name="txtName_eg" value="<?=$data[0]->nameeg?>"  class="form-control" />
                           </div>
                            <div class="form-group">
                              <label for="desc">Mô tả (English)</label>
                              <textarea id="Text_min2" name="shortdes_eg" rows="5" class="form-control">
                                 {!! $data[0]->shortdeseg !!}
                              </textarea>
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
                                 <textarea name="txtContent_eg" id="Text_min0" cols="50" rows="5">
                                    {!! $data[0]->shortdeseg !!}
                                 </textarea>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                            <div class="form-group">
                              <label for="title">Title(English)</label>
                              <input type="text" name="txtTitle_eg" value="{{ $data[0]->titleseoeg }}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="keyword">Keyword(English)</label>
                              <textarea name="txtKeyword_eg" rows="5" class="form-control">{{ $data[0]->metakeywordeg }}</textarea>
                           </div>
                           <div class="form-group">
                              <label for="description">Description(English)</label>
                              <textarea name="txtDescription_eg" rows="5" class="form-control">{{ $data[0]->metadescriptioneg }}</textarea>
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
                     <button type="button" class="btn btn-danger" onclick="javascript:window.location='backend/post'">Thoát</button>
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