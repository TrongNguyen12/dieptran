@extends('backend.master')
@section('content')
@section('controller','Sửa ')
@section('action','Update')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   	@yield('controller')
    <small>@yield('action')</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="gco_admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="javascript:">@yield('controller')</a></li>
    <li class="active">@yield('action')</li>
  </ol>
</section>
<!-- Main content -->
<section class="content"> 
    <div class="box">    
        <div class="box-body">
        	<form method="post" action="backend/langs/edit?id={{$id}}" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
      			<div class="row">
              		<div class="col-md-6 col-xs-12">                    	
    				    	<div class="form-group">
    					      	<label for="ten">Tên tiếng việt</label>
    					      	<input type="text" name="txtName_vi" value="{!! old('txtName_vi', isset($data) ? $data->name_vi : null) !!}"  class="form-control" />
    						</div>

    						<div class="form-group">
    					      	<label for="ten">Tên tiếng Anh</label>
    					      	<input type="text" name="txtName_en" id="txtName_en" value="{!! old('txtName_en', isset($data) ? $data->name_en : null) !!}"  class="form-control" />
    						</div>
    					</div>

				</div>
  			    <div class="box-footer col-md-12 row">
  					<div class="col-md-6">
  				    	<button type="submit" class="btn btn-primary">Cập nhật</button>
  			    	</div>

  			  	</div>

		    </form>

        </div><!-- /.box-body -->

    </div><!-- /box -->

    

</section><!-- /.content -->

@endsection()

