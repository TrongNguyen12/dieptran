@extends('backend.master')

@section('content')

@section('controller','Thêm ')

@section('action','Add')



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

        	

        	<form name="frmAdd" method="post" action="{!! route('admin.langs.postAdd') !!}" enctype="multipart/form-data">

        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />

	      		

      			<div class="row">

              		<div class="col-md-6 col-xs-12">

				    	<div class="form-group">

					      	<label for="ten">Tên VI</label>

					      	<input type="text" name="txtName_vi"  value=""  class="form-control" />


						</div>

						<div class="form-group">

					      	<label for="ten">Tên EN</label>

					      	<input type="text" name="txtName_en"  value=""  class="form-control" />

						</div>

				
					</div>

				</div>
	    
			    <div class="clearfix"></div>

			    <div class="box-footer">

			    	<div class="row">

						<div class="col-md-6">

					    	<button type="submit" class="btn btn-primary">Lưu</button>

				    	</div>

			    	</div>

			  	</div>

		    </form>

        </div><!-- /.box-body -->

    </div><!-- /.box -->

    

</section><!-- /.content -->

@endsection()

