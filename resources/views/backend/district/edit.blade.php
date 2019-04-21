@extends('backend.master')
@section('content')
@section('controller','Cập nhật Quận/Huyện')
@section('action','Cập nhật')
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
        	<form method="post" action="backend/district/edit?id={{$id}}" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                  <div class="nav-tabs-custom">
	                <ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
                    </ul>
	                <div class="tab-content">
	                  	<div class="tab-pane active" id="tab_1">
	                  		<div class="row">
		                  		<div class="col-md-8 col-xs-12">
						        
							    	<div class="form-group">
								      	<label for="ten">Tiêu đề</label>
								      	<input type="text" name="txtName" id="txtName" value="{!! old('txtName', isset($data) ? $data->name : null) !!}"  class="form-control" />
								      
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
                                                <label>Chọn tỉnh thành </label>
                                                <a style="line-height: 35px;">
                                                    <select name="cate" class="form-control"> 
                                                        <?php
                                                            foreach($cate as $item){
                                                        ?>
                                                        <option <?php if($data->cate_id == $item->id){echo 'selected';}?> value="<?php echo $item->id?>"><?php echo $item->name?></option>
                                                        <?php } ?>
                                                    </select>
                                                </a>
                                            </li>
                                            <li><a style="line-height: 35px;"><input type="number" min="1" name="stt" value="{!! isset($data->status) ? $data->stt : (count($count_stt)+1) !!}" class="form-control" style="width: 100px;margin-right: 10px;float: left;margin-bottom: 10px;"/> Số thứ tự</a><div style="clear: both;"></div></li>
                                            <div style="clear: both;"></div>
                                            <li><a href="{{ url('backend/district')}}"><i class="fa fa-trash-o"></i> Thoát</a></li>
                                          </ul>
                                        </div>
                                        
                                        <!-- /.box-body -->
                                      </div>
                                       <!-- /. box -->
                                   </div>
							</div>
							<div class="clearfix"></div>
	                  	</div><!-- /.tab-pane -->
	                
	                </div><!-- /.tab-content -->

	            </div>

	            <div class="clearfix"></div>

		

			    <div class="clearfix"></div>

			

		    </form>

        </div><!-- /.box-body -->

    </div><!-- /box -->

    

</section><!-- /.content -->

@endsection()

