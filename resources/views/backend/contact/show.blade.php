@extends('backend.master')

@section('content')

 

       

       

 <!----------------------------------------------------------------------------------->

<!-- Content Header (Page header) -->

<section class="content-header">

  <h1>

  Quản lý

    <small> </small>

  </h1>

  <ol class="breadcrumb">

    <li><a href="backend"><i class="fa fa-dashboard"></i> Trang chủ</a></li>

    <li><a href="javascript:">Chi tiết</a></li>

    

  </ol>

</section>

<!-- Main content -->

<!-- Main content -->

<section class="content">

  <div class="row">

    <div class="col-xs-12">

      <div class="box">

      

        <!--<div class="box-header">

          <h3 class="box-title">Data Table With Full Features</h3>

        </div>-->

        <div class="box-body">

         

            <tbody>

             <form method="Get"  action="" enctype="multipart/form-data">

                      <input type="hidden" name="_token" value="{!! csrf_token() !!}" />			                         

                        <div class="table-responsive">

                		  	<table class="table user_tbl">
                                <h3>Thông tin Liên Hệ</h3>
                                <tr>
                                    <td width="200px">Họ tên: </td>
                                    <td><b>{{ $data->name }}</b></td>
                                </tr>
                                <tr>
                                    <td width="200px">Số điện thoại: </td>
                                    <td><a href="tel:{{ $data->phone }}"><b>{{ $data->phone }}</b></a></td>
                                </tr>
                                <tr>
                                    <td width="200px">Email: </td>
                                    <td><a href="mailto: {{ $data->email }}"><b>{{ $data->email }}</b></a></td>
                                </tr>
                                <tr>
                                    <td width="200px">Tiêu đề: </td>
                                    <td><b>{{ $data->title }}</b></td>
                                </tr>
                                <tr>
                                    <td width="200px">Nội dung: </td>
                                    <td><b>{{ $data->content }}</b></td>
                                </tr>
                                <tr>
                                    <td width="200px">Ngày giờ gửi: </td>
                                    <td><b>{{ date( 'd/m/Y H:i', strtotime($data->created_at) ) }}</b></td>
                                </tr>
                                
                                
                            </tbody>

                            <div style="clear: both;"></div>  
                		  	</table>
                             <hr/>
                             <p class="text-center edit_p">
                                <button type="button" class="btn edit_frm-btn">Xử lý</button>
                                <a href="{{ asset('backend/contact') }}" class="btn edit_frm-btn btn-danger">Quay lại</a>
                             </p>


                			</div>

                       </form>  

            </tbody>

       

        </div><!-- /.box-body -->

      

      </div><!-- /.box -->

    </div><!-- /.col -->

  </div><!-- /.row -->

</section><!-- /.content -->

      

@endsection