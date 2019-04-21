@extends('backend.master')
@section('content')
@section('controller','Thêm tag')
@section('action','Thêm')
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

        	

        	<form name="frmAdd" method="post" action="{!! route('backend.tag.postAdd') !!}" enctype="multipart/form-data">
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
    							        <input name="txtName" class="form-control"  />
    								</div>
							      	<div class="clearfix"></div>
                                     <div class="form-group">
        						      	<label for="title">Title Seo</label>
        						      	<input type="text" name="txtTitle" maxlength="255"  class="form-control" />
        							</div>
                            		<div class="form-group">
        						      	<label for="keyword">Keyword Seo</label>
        						      	<textarea name="txtKeyword" rows="3" maxlength="255" class="form-control"></textarea>
                                        
        							</div>
        							<div class="form-group">
        						      	<label for="description">Description Seo</label>
        						      	<textarea name="txtDescription" rows="5" class="form-control"></textarea>
        							</div>
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
                              
                                        <li >
                                            <a style="font-weight: 400px;"><label><input type="checkbox" name="status" checked="checked"/> Hiển thị</label></a>
                                        </li>
                                        <div style="clear: both;"></div>
                                        <li><a href="{{ url('backend/tag')}}"><i class="fa fa-trash-o"></i> Thoát</a></li>
                                      </ul>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  <!-- /. box -->
                               
                                </div>
                                
                                <!----- ENd right --->    
                              
							</div>
							<div class="clearfix"></div>

	                  	</div><!-- /.tab-pane -->
                
	                </div><!-- /.tab-content -->
	            </div>
	            <div class="clearfix"></div>
		    </form>

        </div><!-- /.box-body -->

    </div><!-- /.box -->

    

</section><!-- /.content -->



 
@endsection()

