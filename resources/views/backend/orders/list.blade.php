@extends('backend.master')

@section('content')

@section('controller','Orders List')

@section('action','List')

<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" /> -->

 

<!-- Include Date Range Picker -->

<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

<!-- Content Header (Page header) -->

<script type="text/javascript">

  $(document).ready(function() {

    $("#chonhet").click(function(){

      var status=this.checked;

      $("input[name='chon']").each(function(){this.checked=status;})

    });

    

    $("#xoahet").click(function(){

      var listid="";

      $("input[name='chon']").each(function(){

        if (this.checked) listid = listid+","+this.value;

        })

      listid=listid.substr(1);   //alert(listid);

      if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}

      hoi= confirm("Bạn có chắc chắn muốn xóa?");

      if (hoi==true) document.location = homeUrl()+"/backend/orders/"+listid+"/delete_list";

    });

  });

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

                <th>Kiểu đơn</th>

           

                <th>Họ tên</th>

                <th>Ngày tạo</th>

                <th>Tình trạng</th>

                <th class="text-center with_dieuhuong">Sửa</th>

                <th class="text-center with_dieuhuong">Xóa</th>

              </tr>

            </thead>

            <tbody>

          @foreach($data as $k=>$item)             

              <tr>

                <td><input type="checkbox" name="chon" id="chon" value="{{$item->id}}" class="chon" /></td>

                <td class="text-center with_dieuhuong">{{$k+1}}</td>

                <td>

                    <?php if($item->type_pay==2){ 
                        echo 'bank';
                        } else{
                          echo 'Đặt hàng thường';  
                        }                  
                     ?>

                </td>

               

                <td>{{$item->name}}</td>

                <td>{{ $item->created_at }}</td>

                <td>

                  <?php if($item->status==1){ 

                    echo 'Chưa xử lý';

                    } elseif($item->status==2){

                      echo 'Đã xử lý';  

                    }                 

                 ?>

                </td>

              

                <td class="text-center with_dieuhuong">

                  <i class="fa fa-pencil fa-fw"></i><a href="backend/orders/edit?id={{$item->id}}">Edit</a>

                </td>

                <td class="text-center">

                  <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/orders/{{$item->id}}/delete">Delete</a>

                </td>

              </tr>

              @endforeach

            </tbody>

          </table>

        </div><!-- /.box-body -->

        <div class="box-footer col-md-12">

          <div class="col-md-6 col-xs-12">

            <!-- <input type="button" onclick="javascript:window.location='backend/orders/add'" value="Thêm" class="btn btn-primary" /> -->

            <button type="button" id="xoahet" class="btn btn-success">Xóa</button>

            <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />



          </div>

          <div class="col-md-6 col-xs-12">

            <label>Tổng giá trị các đơn hàng:</label> <a href="javascript:">{{ number_format($tien,0,",",".") }}</a> VNĐ

          </div>

        </div>

      </div><!-- /.box -->

    </div><!-- /.col -->

  </div><!-- /.row -->

</section><!-- /.content -->



@endsection()

