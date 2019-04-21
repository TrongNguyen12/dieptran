@extends('backend.master')
@section('content')

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
      if (hoi==true) document.location = "backend/contact/"+listid+"/deleteList";
    });
  });
</script>
<!----------------------------------------------------------------------------------->
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Quản lý
    <small><?php if(@$_GET['type']=='dang-ky-ban-tin'){echo 'Đăng ký bản tin';}else{echo 'liên hệ';}?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="backend"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    <li><a href="javascript:">Quản lý <?php if(@$_GET['type']=='dang-ky-ban-tin'){echo 'Đăng ký bản tin';}else{echo 'liên hệ';}?></a></li>   
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
		
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th style="width: 20px;"><input type="checkbox" name="chonhet" class="minimal" id="chonhet" /></th>
                <th class="text-center with_dieuhuong">Stt</th>
                <th>Email</th>
                <th>Tên</th>
                <th class="text-center with_dieuhuong">Hiển thị</th>
				<th class="text-center with_dieuhuong">Hiển thị</th>
              </tr>

            </thead>

            <tbody>

              @foreach($data as $k=>$item)
              <tr>
                <td><input type="checkbox" name="chon" id="chon" value="{{$item->id}}" class="chon" /></td>
                <td class="text-center with_dieuhuong">{{$k+1}}</td>
                <td>{{$item->email}}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <?php if($item->status == 1) {?>
	                    <a href="{{ asset('backend/contact/view') }}?id={{ $item->id }}" style="color: red;">Đã xử lý</a> 
                    <?php } else {?>  
                        <a href="{{ asset('backend/contact/view') }}?id={{ $item->id }}">Xử lý</a>
                    <?php } ?> 
                </td>
				<td>
					<a href="{{ asset('backend/contact/delete') }}?id={{ $item->id }}" onclick="return confirm('Bạn có chắc chắn xóa?')">Xóa</a>
				</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- /.box-body -->
		<div class="row">

			<div class="col-md-6">
				<input type="button" value="Xóa" class="btn btn-danger" id="xoahet">
			</div>

		</div>
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
@endsection