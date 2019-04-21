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
         <form method="post" action="backend/setting" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="nav-tabs-custom">
               <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
				  <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Banner Đầu Trang</a></li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                     <div class="row">
                        <div class="col-md-8 col-xs-12">
                           <div class="clearfix"></div>
                           <div class="form-group">
                              <label for="ten">Tiêu đề</label>
                              <input type="text" name="txtName" id="txtName" value="{{ $data->name }}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Tiêu đề(English)</label>
                              <input type="text" name="txtName_eg"  value="{{ $data->nameeg }}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Tên công ty (Tách tên công ty bằng dấu || )</label>
                              <input type="text" name="txtCompany" id="txtName" value="{{ $data->company }}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Tên công ty (English)(Tách tên công ty bằng dấu || )</label>
                              <input type="text" name="txtCompanyEG" id="txtName" value="{{ $data->companyeg }}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Điện thoại</label>
                              <input type="text" name="txtPhone" value="{!! old('txtPhone', isset($data) ? $data->phone : null) !!}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Điện thoại 2</label>
                              <input type="text" name="txtPhone2" value="{!! old('txtPhone', isset($data) ? $data->didong : null) !!}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Email (Phân tách các mail bằng dấu || )</label>
                              <input type="text" name="txtEmail" value="{!! old('txtEmail', isset($data) ? $data->email : null) !!}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Link(Facebook)</label>
                              <input type="text" name="links1" value="{!! old('links1', isset($data) ? $data->links1 : null) !!}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Link(Zalo)</label>
                              <input type="text" name="links2" value="{!! $data->links2 !!}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Link(Skype)</label>
                              <input type="text" name="links3" value="{!! $data->links3 !!}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Link(Youtube)</label>
                              <input type="text" name="links4" value="{!! $data->links4 !!}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Link(G+)</label>
                              <input type="text" name="links5" value="{!! $data->links5 !!}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Thông tin chân trang</label>
                              <textarea rows="5" id="Text_min" name="content" class="form-control"><?php echo $data->content;?></textarea>
                           </div>
                           <div class="form-group">
                              <label for="ten">Thông tin chân trang(English)</label>
                              <textarea rows="5" id="Text_min1" name="content_eg" class="form-control"><?php echo $data->contenteg;?></textarea>
                           </div>
                            <div class="form-group">
                              <label for="ten">Goole Maps</label>
                              <textarea rows="5" id="Text_min" name="maps" class="form-control"><?php echo $data->codemap;?></textarea>
                           </div>
                           <div class="form-group">
                              <label for="ten">Địa chỉ </label>
                              <input type="text" name="adress" value="{!! $data->address !!}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Địa chỉ(English) </label>
                              <input type="text" name="adress_eg" value="{!! $data->addresseg !!}"  class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="ten">Nội dung trang Liên hệ</label>
                              <textarea rows="5" id="Text_min4" name="contentcode" class="form-control"><?php echo $data->contentcode;?></textarea>
                           </div>
                           <div class="form-group">
                              <label for="ten">Nội dung trang liên hệ ( English )</label>
                              <textarea rows="5" id="Text_min5" name="contentcode_eg" class="form-control"><?php echo $data->contentcodeeg;?></textarea>
                           </div>
                           <div class="form-group">
                              <label for="desc">Code bottom</label>
                              <textarea name="txtAnalytics" rows="5" class="form-control">{{ old('txtAnalytics', isset($data) ? $data->analytics : null) }}</textarea>
                           </div>
                           <div class="form-group">
                              <label for="ten">Bản quyền</label>
                              <input type="text" name="copyright" value="{!! $data->copyright !!}"  class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-3 col-xs-12" >
                           <button type="submit" class="btn btn-primary btn-block margin-bottom">Lưu</button>
                           <div class="box box-solid" style="display: none;">
                              <div class="box-header with-border">
                                 <h3 class="box-title">Youtube Home</h3>
                                 <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                 </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    <li id="right-col-li" style="text-align: left;">
                                       <label for="title">Id youtube</label>
                                       <input type="text" name="youtube" value="<?=$data->youtube?>"  class="form-control" />
                                    </li>
                                    <li id="right-col-li" style="text-align: left;">
                                       <label for="title">Id youtube 2</label>
                                       <input type="text" name="youtube2" value="<?=$data->youtube2?>"  class="form-control" />
                                    </li>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                           <div class="box box-solid">
                              <div class="box-header with-border">
                                 <h3 class="box-title">Hình ảnh favicon</h3>
                                 <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                 </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    <li id="right-col-li" >
                                       <?php if(!empty($data->favico)){?> 
                                       <img id="output" src="{{ asset('upload/hinhanh/logo/'.$data->favico) }}" />
                                       <?php } ?>
                                       <input class="max-with" name="fImagesFavico" type="file"  onchange="loadFile(event)"/>
                                    </li>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                           <div class="box box-solid">
                              <div class="box-header with-border">
                                 <h3 class="box-title">Logo</h3>
                                 <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                 </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    <li id="right-col-li" >
                                       <?php if(!empty($data->logo)){?>   
                                       <img style="max-width: 100%;" src="{{ asset('upload/hinhanh/logo/'.$data->logo) }}" />
                                       <?php } ?>   
                                       <input class="max-with" name="fImages" type="file"  />
                                    </li>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                           <div class="box box-solid">
                              <div class="box-header with-border">
                                 <h3 class="box-title">SEO</h3>
                                 <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                 </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    <li id="right-col-li" style="text-align: left;">
                                       <label for="title">Title</label>
                                       <input type="text" name="txtTitle" value="{!! old('txtTitle', isset($data) ? $data->title : null) !!}"  class="form-control" />
                                    </li>
                                    <li id="right-col-li" style="text-align: left;">
                                       <label for="keyword">Keyword</label>
                                       <textarea name="txtKeyword" rows="5" class="form-control">{!! old('txtKeyword', isset($data) ? $data->keyword : null) !!}</textarea>
                                    </li>
                                    <li id="right-col-li" style="text-align: left;">       	
                                       <label for="description">Description</label>
                                       <textarea name="txtDescription" rows="5" class="form-control">{!! old('txtDescription', isset($data) ? $data->description : null) !!}</textarea>
                                    </li>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                           <div class="box box-solid">
                              <div class="box-header with-border">
                                 <h3 class="box-title">SEO (English)</h3>
                                 <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                 </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    <li id="right-col-li" style="text-align: left;">
                                       <label for="title">Title</label>
                                       <input type="text" name="txtTitle_eg" value="<?=$data->titleeg?>"  class="form-control" />
                                    </li>
                                    <li id="right-col-li" style="text-align: left;">
                                       <label for="keyword">Keyword</label>
                                       <textarea name="txtKeyword_eg" rows="5" class="form-control">{!! $data->keywordeg !!}</textarea>
                                    </li>
                                    <li id="right-col-li" style="text-align: left;">       	
                                       <label for="description">Description</label>
                                       <textarea name="txtDescription_eg" rows="5" class="form-control">{!! $data->descriptioneg !!}</textarea>
                                    </li>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <!-- /.tab-pane -->
				  <div class="tab-pane" id="tab_2">
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="box box-solid">
								  <div class="box-header with-border">
									 <h3 class="box-title">Banner đầu trang Dịch Vụ</h3>
									 <div class="box-tools">
										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
										</button>
									 </div>
								  </div>
								  <!-- /.box-header -->
								  <div class="box-body no-padding">
									 <ul class="nav nav-pills nav-stacked">
										<li id="right-col-li" >
										    <img id="output" src="{{ asset('upload/hinhanh/banner/'.$bntrangdv->name) }}" />
										   <input class="max-with" name="bntrangdv" type="file"/>
										</li>
									 </ul>
								  </div>
                             
								</div>
							</div>
							<div class="col-md-12 col-xs-12">
								<div class="box box-solid">
								  <div class="box-header with-border">
									 <h3 class="box-title">Banner đầu trang tin tức</h3>
									 <div class="box-tools">
										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
										</button>
									 </div>
								  </div>
								  <!-- /.box-header -->
								  <div class="box-body no-padding">
									 <ul class="nav nav-pills nav-stacked">
										<li id="right-col-li" >
											<img id="output" src="{{ asset('upload/hinhanh/banner/'.$bntrangnews->name) }}" />
										   <input class="max-with" name="bntrangnews" type="file"/>
										</li>
									 </ul>
								  </div>
                             
								</div>
							</div>
							<div class="col-md-12 col-xs-12">
								<div class="box box-solid">
								  <div class="box-header with-border">
									 <h3 class="box-title">Banner Đầu Trang Tuyển Dụng</h3>
									 <div class="box-tools">
										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
										</button>
									 </div>
								  </div>
								  <!-- /.box-header -->
								  <div class="box-body no-padding">
									 <ul class="nav nav-pills nav-stacked">
										<li id="right-col-li" >
											<img id="output" src="{{ asset('upload/hinhanh/banner/'.$bntrangTT->name) }}" />
											<input class="max-with" name="bntrangTT" type="file"/>
										</li>
									 </ul>
								  </div>
								</div>
							</div>
							<div class="col-md-12 col-xs-12">
								<div class="box box-solid">
								  <div class="box-header with-border">
									 <h3 class="box-title">Banner Đầu Trang Liên Hệ</h3>
									 <div class="box-tools">
										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
										</button>
									 </div>
								  </div>
								  <!-- /.box-header -->
								  <div class="box-body no-padding">
									 <ul class="nav nav-pills nav-stacked">
										<li id="right-col-li" >
										   <img id="output" src="{{ asset('upload/hinhanh/banner/'.$bntrangLH->name) }}" />
										   <input class="max-with" name="bntrangLH" type="file"/>
										</li>
									 </ul>
								  </div>
								</div>
							</div>
						</div>
				  </div>
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