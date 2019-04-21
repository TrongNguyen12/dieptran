@extends('backend.master')
@section('content')
@section('controller','Sản phẩm')
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
      <div class="box-body">
         <form name="frmAdd" method="post" action="{!! route('backend.product.postAdd') !!}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="nav-tabs-custom">
               <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
                  <li><a href="#tab_4" data-toggle="tab" aria-expanded="false">Thông tin chung(English)</a></li>
                  <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Thông số kỹ thuật</a></li>
                  <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Thông số kỹ thuật(English)</a></li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                     <div class="row">
                        <div class="col-md-8 col-xs-12">
                           <div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
                              <label for="ten">Tiêu đề</label>
                              <input type="text" id="txtName" name="txtName" value=""  class="form-control" />
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
                           
                           <!---------------------->
                           <div class="form-group">
                              <label for="desc">Mô tả</label>
                              <textarea name="shortdes" id="Text_min1" rows="5" class="form-control"></textarea>
                           </div>
                           <div class="clearfix"></div>
                           <div class="box box-info">
                              <div class="box-header">
                                 <h3 class="box-title">Nội dung</h3>
                                 <div class="pull-right box-tools">
                                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                 </div>
                              </div>
                              <div class="box-body pad">
                                 <textarea name="txtContent" id="Text_min" cols="50" rows="5"></textarea>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="form-group">
                              <label for="title">Title Seo</label>
                              <input type="text" name="txtTitle" class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="keyword">Meta Keyword</label>
                              <textarea name="txtKeyword" rows="5" class="form-control"></textarea>
                           </div>
                           <div class="form-group">
                              <label for="description">Meta Description</label>
                              <textarea name="txtDescription" rows="5" class="form-control"></textarea>
                           </div>
                           <!---------------------->
                        </div>
                        <!-----right------->
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
                                       <a style="font-weight: 400px;"><label><input type="checkbox" name="status" checked="checked"/> Hiển thị</label></a>
                                    </li>
                                    <li>
                                       <a style="line-height: 35px;"><input type="number" min="1" name="stt" value="{!! count($data)+1 !!}" class="form-control" style="width: 100px;margin-right: 10px;float: left;margin-bottom: 10px;"/> Số thứ tự</a>
                                       <div style="clear: both;"></div>
                                    </li>
                                    <div style="clear: both;"></div>
                                    <li><a href="{{ url('backend/post')}}"><i class="fa fa-trash-o"></i> Thoát</a></li>
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
                                       <?php
                                          $getcate = new App\ProductCate;
                                          
                                          $product_categories = DB::table("product_categories")->select('name','id')->where('parent_id',0)->where('display',1)->orderBy('stt','asc')->get();
                                          
                                          if (count(@$product_categories)>0) {
                                          
                                            // output results from database                                                    
                                          
                                            foreach($product_categories as $obj){
                                          
                                          ?>
                                       <!------------->
                                       <li id="nhan-menu" >
                                          <label class="selectit"><input value="{{ $obj->id }}" type="checkbox" name="txtProductCate[]" /> {{ $obj->name }}</label>
                                          <!------------->   
                                          <?php 
                                             $getcate->getSubmenu($obj->id); 
                                             
                                             ?>
                                       </li>
                                       <?php   } ?>
                                       <?php  }  ?>
                                    </div>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                           <!-- /.box -->
                           <!-- /. box -->
                           <div class="box box-solid" style="display: none;">
                              <div class="box-header with-border">
                                 <h3 class="box-title">Banner slide</h3>
                                 <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                 </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    <li id="right-col-li" >                                               
                                        <input class="max-with" name="fImages2" type="file" />                                            
                                    </li>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                           <!-- /.box -->
                           <div class="box box-solid">
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
                                       <img id="output" />
                                       <input class="max-with" name="fImages" type="file"  onchange="loadFile(event)"/>                                            
                                    </li>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                           <div class="box box-solid">
                              <div class="box-header with-border">
                                 <h3 class="box-title">Hình ảnh chi tiết</h3>
                                 <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                 </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked">
                                    <li id="right-col-li" >
                                       <div class="form-group">
                                          <label class="control-label">Chọn ảnh</label>
                                          <input id="input-2" name="detailImg[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" data-allowed-file-extensions='["jpeg", "jpg", "png", "gif"]'>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                           <!-- /. box -->
                           <div class="box box-solid" style="display: none;">
                              <div class="box-header with-border">
                                 <h3 class="box-title">Tag Hãng</h3>
                                 <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                 </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body no-padding">
                                 <ul class="nav nav-pills nav-stacked" style="padding: 15px;">
                                    <div class="tk-block">
                                       <label>Hãng (*)</label>
                                       <select name="hang_id" id="multiple" multiple>
                                          <?php
                                             foreach($tag as $iteam){
                                             
                                             ?>
                                          <option value="<?= $iteam->id?>"><?= $iteam->name?></option>
                                          <?php } ?>
                                       </select>
                                    </div>
                                 </ul>
                              </div>
                              <!-- /.box-body -->
                           </div>
                           <!-- /.box -->
                        </div>
                        <!----- ENd right --->    
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="tab-pane" id="tab_2">
                      <div id="a">
                            <div class="con">    
                                <div class="col-md-9 col-xs-12"></div>        
                                <div class="col-md-3 col-xs-12"><input   id="btnAdd"  class="form-control add-properties" type="button" value=" Thêm " /></div>        
                                <div style="clear: both;"></div>    
                             </div>
                      </div>
                         
                  </div>
                  <div class="tab-pane" id="tab_3">
                      <div id="aEG">
                            <div class="conEG">    
                                <div class="col-md-9 col-xs-12"></div>        
                                <div class="col-md-3 col-xs-12"><input   id="btnAddEG"  class="form-control add-properties" type="button" value=" Thêm " /></div>        
                                <div style="clear: both;"></div>    
                             </div>
                      </div>
                         
                  </div>
                  <!------ thông tin chung english ------------>
                      <div class="tab-pane" id="tab_4">
                           <div class="form-group">
                              <label for="ten">Tiêu đề (English)</label>
                              <input type="text" name="txtName_eg" class="form-control" />
                           </div>                          
                           <!---------------------->
                           <div class="form-group">
                              <label for="desc">Mô tả (English)</label>
                              <textarea name="shortdes_eg"  rows="5" id="Text_min3" class="form-control"></textarea>
                           </div>
                           <div class="clearfix"></div>
                           <div class="box box-info">
                              <div class="box-header">
                                 <h3 class="box-title">Nội dung (English)</h3>
                                 <div class="pull-right box-tools">
                                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                 </div>
                              </div>
                              <div class="box-body pad">
                                 <textarea name="txtContent_eg" id="Text_min2" cols="50" rows="5"></textarea>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="form-group">
                              <label for="title">Title Seo (English)</label>
                              <input type="text" name="txtTitle_eg" class="form-control" />
                           </div>
                           <div class="form-group">
                              <label for="keyword">Keyword Seo (English)</label>
                              <textarea name="txtKeyword_eg" rows="5" class="form-control"></textarea>
                           </div>
                           <div class="form-group">
                              <label for="description">Description Seo (English)</label>
                              <textarea  name="txtDescription_eg" rows="5" class="form-control"></textarea>
                           </div>
                           <!---------------------->
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
<script type="text/javascript">
     $(document).ready(function() {
          $("#btnAdd").click(function() {
            $("#a").append('<div class="con"><div class="col-md-5 col-xs-12"><input required="" placeholder="Tiêu đề thông số" id="Text1" name="link1[]" class="form-control images-add" type="text" /></div><div class="col-md-5 col-xs-12"><input placeholder="Nội dung thông sô" id="Text1" name="link1Content[]" required="" class="form-control images-add" type="text" /></div>' + '<input id="bnt-images-add" type="button" class="form-control btnRemove" value="Xóa"/><div class="clearfix"></div></div>');
          });
          $('body').on('click','.btnRemove',function() {
            $(this).parent('div.con').remove()
          });
       
          $("#btnAddEG").click(function() {
            $("#aEG").append('<div class="conEG"><div class="col-md-5 col-xs-12"><input required="" placeholder="Tiêu đề thông số (English)" id="Text1" name="link1_eg[]" class="form-control images-add" type="text" /></div><div class="col-md-5 col-xs-12"><input placeholder="Nội dung thông sô(English)" id="Text1" name="link1Content_eg[]" required="" class="form-control images-add" type="text" /></div>' + '<input id="bnt-images-add" type="button" class="form-control btnRemoveEG" value="Xóa"/><div class="clearfix"></div></div>');
          });
          $('body').on('click','.btnRemoveEG',function() {
            $(this).parent('div.conEG').remove()
          });
     });

</script>
@endsection()