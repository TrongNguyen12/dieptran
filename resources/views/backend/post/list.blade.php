<style type="text/css">
    #example2_paginate {
        display: none;
    }
    
    #example2_info {
        display: none;
    }
</style>
@extends('backend.master') @section('content') @section('controller','Bài viết') @section('action','Danh sách')
<!-- Content Header (Page header) -->
<script type="text/javascript">
    $(document).ready(function() {

        $("#chonhet").click(function() {

            var status = this.checked;

            $("input[name='chon']").each(function() {
                this.checked = status;
            })

        });

        $("#xoahet").click(function() {

            var listid = "";

            $("input[name='chon']").each(function() {

                if (this.checked) listid = listid + "," + this.value;

            })

            listid = listid.substr(1); //alert(listid);

            if (listid == "") {
                alert("Bạn chưa chọn mục nào");
                return false;
            }

            hoi = confirm("Bạn có chắc chắn muốn xóa?");

            if (hoi == true) document.location = "backend/new/" + listid + "/deleteList";

        });

    });
</script>
<script type="text/javascript">
    function changepos() {

        document.frm1.action = "backend/post/changepos";

        document.frm1.submit();

    }
</script>
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
<form method="post" name="frm1" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    @include('backend.messages_error')
                    <!--<div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>

                  </div>-->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 20px;">
                                        <input type="checkbox" name="chonhet" class="minimal" id="chonhet" />
                                    </th>
                                    <th class="text-center with_dieuhuong">Stt</th>
                                    <th style="width: 15%;">Danh mục cha</th>
                                    <th>Tiêu đề</th>
                                    <th style="text-align:center;">Ảnh đại diện</a></th>
                                    <th class="text-center with_dieuhuong">Hoạt động</th>
                                    <th class="text-center with_dieuhuong">Sửa</th>
                                    <th class="text-center with_dieuhuong">Xóa</th>
                                    <th class="text-center with_dieuhuong">Id</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $k=>$item)
                                
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="chon" id="chon" value="{{$item->id}}" class="chon" />
                                        </td>
                                        <td class="text-center with_dieuhuong">{{$k+1}}</td>
                                        <td>
                                            <a>{{ $item->Catepost->name }}</a>
                                        </td>
                                        <td><a>{{$item->title}}</a>
                                        </td>
                                        <td style="text-align:center;">
                                            <img src="{{ asset('upload/hinhanh/post/new') }}/{{ $item->photo }}" alt="" class="img-thumbnail" width="100px">
                                        </td>
                                        <td class="text-center with_dieuhuong">
                                            <div class="form-group">
                                                @if($item->status>0)
                                                <a href="backend/new/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Hiển thị</a> @else
                                                <a href="backend/new/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Không Hiển thị</a> @endif
                                            </div>
                                            
                                        </td>
                                        <td class="text-center with_dieuhuong">
                                            <i class="fa fa-pencil fa-fw"></i><a href="backend/new/edit?id={{$item->id}}">Edit</a>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/new/delete?id={{$item->id}}">Delete</a>
                                        </td>
                                        <td style="text-align: center;"><a>{{$item->id}}</a></td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="button" onclick="javascript:window.location='backend/new/add'" value="Thêm" class="btn btn-primary" /> 
								<input type="button" value="Xóa" class="btn btn-danger" id="xoahet">
                                <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</form>
@endsection()