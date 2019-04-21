@extends('backend.master')

@section('content')

@section('controller','Ngôn ngữ')

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

        @if (session('status'))

        <div class="box-header">

            <h3 class="box-title alert_thongbao text-green">{{ session('status') }}</h3>

        </div>

        @endif

        <!--<div class="box-header">

          <h3 class="box-title">Data Table With Full Features</h3>

        </div>-->

        <div class="box-body">

          <table id="example1" class="table table-bordered table-hover">

            <thead>

              <tr>

                <th style="width: 20px;"><input type="checkbox" name="chonhet" class="minimal" id="chonhet" /></th>

                <th class="text-center with_dieuhuong">Stt</th>

                <!-- <th>Biến langs</th> -->

                <th>Tên tiếng việt</th>

                <th>Tên tiếng Anh</th>

                <th class="text-center with_dieuhuong">Sửa</th>

          
              </tr>

            </thead>

            <tbody>

              @foreach($data as $k=>$item)

              <tr>

                <td><input type="checkbox" name="chon" id="chon" value="{{$item->id}}" class="chon" /></td>

                <td class="text-center with_dieuhuong">{{$k+1}}</td>

                <!-- <td>{{$item->alias}}</td> -->

                <td>{{$item->name_vi}}</td>

                <td>{{$item->name_en}}</td>

         

                <td class="text-center with_dieuhuong">

                  <i class="fa fa-pencil fa-fw"></i><a href="backend/langs/edit?id={{$item->id}}&type={{ @$_GET['type'] }}">Edit</a>

                </td>

   

              </tr>

              @endforeach

            </tbody>

          </table>

        </div><!-- /.box-body -->

      </div><!-- /.box -->

    </div><!-- /.col -->

  </div><!-- /.row -->

</section><!-- /.content -->

@endsection()

