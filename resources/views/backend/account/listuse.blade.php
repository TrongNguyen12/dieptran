@extends('backend.master')
@section('content')
<!-- Content Header (Page header) -->

<section class="content-header">

  <h1>

  
    <small>Tài khoản</small>

  </h1>

  <ol class="breadcrumb">

    <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>

    <li><a href="javascript:">Tài khoản</a></li>

   
  </ol>

</section>




<!-- Main content -->

<section class="content">

  <div class="row">

    <div class="col-xs-12">

      <div class="box">

        @include('backend.messages_error')

        <!--<div class="box-header">

          <h3 class="box-title">Data Table With Full Features</h3>

        </div>-->

        <div class="box-body">

          <table id="example2" class="table table-bordered table-hover">

            <thead>

              <tr>

                <th class="text-center with_dieuhuong">Stt</th>

                <th>Tài khoản</th>

                <th>Tên</th>

                <th>Trạng tháng</th>
                <th>Hành động</th>

              </tr>

            </thead>

            <tbody>
                     @foreach($data as $k=>$item)
                      
    		      	<tr class="action-number">
    		      		<td class="">{{$k+1}}</td>
    		      	    <td class="text-center">{!! $item->name !!}</td>
    		      		<td class="text-center">{!! $item->email !!}</td>
    		      	    <td class="text-center">
                           @if($item->status>0)
                               <a href="backend/account/edituse?id={{$item->id}}&hienthi={{ time() }}" class="btn admin_status"><i class="fa fa-eye"></i> Tài khoản đang hoạt động</a>
                            @else
                              <a href="backend/account/edituse?id={{$item->id}}&hienthi={{ time() }}" style="background: red;" class="btn admin_status"><i class="fa fa-eye"></i> Đã Khóa tài khoản</a>
                            @endif
                         </td>
    		      		<td class="text-center"><a href="backend/account/edituse?id={{ $item->id}}" class="btn btn_edit">Chi tiết</a>
                           <a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/account/{{$item->id}}/deleteuse" class="btn btn_del">Xóa</button></td>
    		      	</tr>
                   
    		        @endforeach

            </tbody>

          </table>

         {{ $data->links() }}

        </div><!-- /.box-body -->

        <div class="box-footer col-md-12">

          <div class="row">

            <div class="col-md-6">

              <input type="button" onclick="javascript:window.location='backend/account/adduse'" value="Thêm" class="btn btn-primary" />

            
              <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />



            </div>

          </div>

        </div>

      </div><!-- /.box -->

    </div><!-- /.col -->

  </div><!-- /.row -->

</section><!-- /.content -->

<!------------------------------------------------------------------------->  
     
@endsection()