@extends('backend.master')



@section('content')



@section('controller','Danh mục ')



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



        	



        	<form name="frmAdd" method="post" action="{{-- {!! route('backend.newscate.postAdd') !!} --}}" enctype="multipart/form-data">



        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />



	      		



      			<div class="nav-tabs-custom">



	                <ul class="nav nav-tabs">



	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>



	                  	<li><a href="#tab_2" data-toggle="tab" aria-expanded="true">SEO</a></li>



	                </ul>



	                <div class="tab-content">



	                  	<div class="tab-pane active" id="tab_1">



	                  		<div class="row">



		                  		<div class="col-md-6 col-xs-12">



			                    	<div class="form-group">



								      	<label for="ten">Danh mục cha</label>



								      	<select name="txtNewsCate" class="form-control">







								      		<option value="0">Chọn danh mục</option>



								      		<?php //cate_news_parent($parent); ?>



								      	</select>



									</div>



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



                                   <div class="col-md-6 col-xs-12">



                                    



                                    <div class="form-group" style="display: none;">



                                       



                                        <label for="desc">Mô tả</label>



								      	<textarea name="mota" rows="5" class="form-control"></textarea>



                                 



									</div>



                                    </div>



									<input type="hidden" name="txtCom" value="{{ @$_GET['type'] }}"/>



								</div>



							</div>



							<div class="clearfix"></div>



	                  	</div><!-- /.tab-pane -->



	                  	<div class="tab-pane" id="tab_2">



	                  		<div class="row">



		                    	<div class="col-md-6 col-xs-12">



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



	                    	</div>



	                    	<div class="clearfix"></div>



	                	</div><!-- /.tab-pane -->



	                </div><!-- /.tab-content -->



	            </div>



	            <div class="clearfix"></div>



			    <div class="col-md-6">

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



					    	<button type="button" onclick="javascript:window.location='backend/newscate?type={{ @$_GET[type] }}'" class="btn btn-danger">Thoát</button>



				    	</div>



			    	</div>



			  	</div>



		    </form>



        </div><!-- /.box-body -->



    </div><!-- /.box -->



    



</section><!-- /.content -->



@endsection()



