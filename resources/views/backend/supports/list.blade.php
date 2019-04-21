@extends('backend.master')

@section('content')

@section('controller','Hỗ trợ trực tuyến')

@section('action','List')

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

  <div class="row">

    <div class="col-xs-12">

      <div class="box">

        @include('backend.messages_error')

        <div class="box-body">

          <table id="example2" class="table table-bordered table-hover">

            <thead>

              <tr>

                 <th class="text-center with_dieuhuong">Stt</th>

                <th>Tiêu đề</th>

              

                <th class="text-center with_dieuhuong">Hoạt động</th>

                <th class="text-center with_dieuhuong">Sửa</th>

                <th class="text-center with_dieuhuong">Xóa</th>

              </tr>

            </thead>

            <tbody>

              @foreach($data as $k=>$item)

              <tr>

                <td class="text-center with_dieuhuong">{{$k+1}}</td>

                <td><a>{{$item->name}}</a></td>

                

                <td class="text-center with_dieuhuong">

                  <div class="form-group"> 

                    @if($item->status>0)

                      <a href="backend/supports/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Hiển thị</a>

                    @else

                      <a href="backend/supports/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Hiển thị</a>

                    @endif

                  </div>

            

                </td>

                <td class="text-center with_dieuhuong">

                  <i class="fa fa-pencil fa-fw"></i><a href="backend/supports/edit?id={{$item->id}}">Edit</a>

                </td>

                <td class="text-center">

                  <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/supports/{{$item->id}}/delete?type={{ @$_GET['type'] }}">Delete</a>

                </td>

              </tr>

              @endforeach

            </tbody>

          </table>

        </div><!-- /.box-body -->

        <div class="box-footer col-md-12">

          <div class="row">

            <div class="col-md-6">

              <input type="button" onclick="javascript:window.location='backend/supports/add'" value="Thêm" class="btn btn-primary" />

              <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />



            </div>

          </div>

        </div>

      </div><!-- /.box -->

    </div><!-- /.col -->

  </div><!-- /.row -->

</section><!-- /.content -->

@endsection()

