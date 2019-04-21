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
          <div class="row">
            <form class="form-group d-flex align-items-center h-100 search-frm" name="search_header" method="get" action="{!! url('backend/orders/search') !!}">
              <div class="col-md-2 col-sm-2 col-xs-6">
                <div class="form-group">
                    <label for="thongke">Chọn kiểu lọc</label>
                    <select name="kieuloc" class="form-control">
                      <option <?php if($_GET['kieuloc']==1) echo 'selected';?> value="1">Theo tên hoặc mã</option>
                      <option <?php if($_GET['kieuloc']==2) echo 'selected';?> value="2">Theo ngày</option>
                      <option <?php if($_GET['kieuloc']==4) echo 'selected';?> value="4">Thanh toán thường</option>
                      <option <?php if($_GET['kieuloc']==5) echo 'selected';?> value="5">Thanh toán Online</option>
                      <option <?php if($_GET['kieuloc']==3) echo 'selected';?> value="3">Tất cả</option>
                    </select>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="thongke">Lọc theo ngày</label>
                    <input type="text" name="daterange" id="daterange" value="" width="300" class="form-control input_date" />
                    <input type="hidden" name="startDate" value="">
                    <input type="hidden" name="endDate" value="">
                    <script type="text/javascript">
                      $(function() {
                          $('input[name="daterange"]').daterangepicker();
                          $('#daterange').on('apply.daterangepicker', function(ev, picker) {
                            console.log(picker.startDate.format('YYYY-MM-DD'));
                            console.log(picker.endDate.format('YYYY-MM-DD'));
                            //alert(picker.startDate.format('YYYY-MM-DD'));
                            $('input[name="startDate"]').val(picker.startDate.format('YYYY-MM-DD'));
                            $('input[name="endDate"]').val(picker.endDate.format('YYYY-MM-DD'));
                          });
                      });
                    </script>
                </div>
              </div>

              <div class="input_search col-md-3 col-sm-6 col-xs-12">
                  <label for="thongke">Nhập tên hoặc mã đơn hàng</label>
                  <input style="width: 75%;float: left;" name="keyword" id="keyword" type="text" placeholder="Nhập họ tên hoặc mã đơn hàng" class="form-control" value="">
                  <span class="input-group-btn">
                    <button class="btn btn-info btn-flat" type="submit">Search</button>
                  </span>
              </div>
            </form>
          </div>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th style="width: 20px;"><input type="checkbox" name="chonhet" class="minimal" id="chonhet" /></th>
                <th class="text-center with_dieuhuong">Stt</th>
                <th>Mã đơn hàng</th>
                <th>Họ tên</th>
                <th>Ngày tạo</th>
                <th>Tình trạng</th>
                <th class="text-center with_dieuhuong">Sửa</th>
                <th class="text-center with_dieuhuong">Xóa</th>
              </tr>
            </thead>
            <tbody>
              <?php $tongdonhang=0; ?>
              @foreach($data as $k=>$item)
              <?php $tongdonhang+=$item->total; ?>
              <tr>
                <td><input type="checkbox" name="chon" id="chon" value="{{$item->id}}" class="chon" /></td>
                <td class="text-center with_dieuhuong">{{$k+1}}</td>
                <td>{{$item->code}}</td>
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
                <!-- <td class="text-center with_dieuhuong">
                  @if($item->status>0)
                    <a href="backend/orders/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Bật</a>
                  @else
                    <a href="backend/orders/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Tắt</a>
                  @endif
                </td> -->
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
          <div class="col-md-6">
            <!-- <input type="button" onclick="javascript:window.location='backend/orders/add'" value="Thêm" class="btn btn-primary" /> -->
            <button type="button" id="xoahet" class="btn btn-success">Xóa</button>
            <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />

          </div>
          <div class="col-md-6 col-xs-12">
            <label>Tổng giá trị các đơn hàng:</label> <a href="javascript:">{{ number_format($tongdonhang,0,",",".") }}</a> VNĐ
          </div>
        </div>
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->

@endsection()
