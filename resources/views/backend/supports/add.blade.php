@extends('backend.master')

@section('content')

@section('controller','Thêm mới hỗ trợ trực tuyến')

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

	       <form name="frmAdd" method="post" action="{!! route('backend.supports.postAdd') !!}" enctype="multipart/form-data">

        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />	

      			<div class="nav-tabs-custom">

	                <ul class="nav nav-tabs">

	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>

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
                                     <div class="form-group" >

								      	<label for="ten">Chức vụ</label>

								      	<input type="text"  name="chucvu" class="form-control" />

								   	</div>    
                                    <div class="form-group">

								      	<label for="ten">Email</label>

								      	<input type="text" name="email" value=""  class="form-control" />

								   	</div>
                                    <div class="form-group">

								      	<label for="ten">Phone</label>

								      	<input type="text" name="phone" value=""  class="form-control" />

								   	</div>

									<div class="form-group">

								      	<label for="ten">Tài khoản sky</label>

								      	<input type="text" name="link" value=""  class="form-control" />

								   	</div>

								</div>

                                

                                <!---------------------->
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
                                            <li><a style="line-height: 35px;"><input type="number" min="1" name="stt" value="{!! count($data)+1 !!}" class="form-control" style="width: 100px;margin-right: 10px;float: left;margin-bottom: 10px;"/> Số thứ tự</a><div style="clear: both;"></div></li>
                                            <div style="clear: both;"></div>
                                            <li><a href="{{ url('backend/supports')}}"><i class="fa fa-trash-o"></i> Thoát</a></li>
                                          </ul>
                                        </div>
                                        <!-- /.box-body -->
                                      </div>
                                      <!-- /. box -->
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
                                                <img id="output" style="max-width: 100%;"  />
                                                   
                                                <input class="max-with" name="fImages" type="file"  onchange="loadFile(event)"/>
                                            </li>
                                         
                                          </ul>
                                        </div>
                                        <!-- /.box-body -->
                                      </div>                                      
                                <!------------------------------->
                		
                			    </div>	        
                     

                                <!---------------------->

                                

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

