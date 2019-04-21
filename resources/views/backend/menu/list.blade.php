@extends('backend.master')

@section('content')

@section('controller','Menu')

@section('action','List')

<script type="text/javascript">
    function changepos() {
        document.frm1.action = "backend/menu/changepos";
        document.frm1.submit();
    }

    function MM_jumpMenu(targ,selObj,restore){ //v3.0
        eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
        if (restore) selObj.selectedIndex=0;
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

<form method="post" name="frm1"enctype="multipart/form-data">
  	<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
<section class="content">



  <div class="row">

    <div class="col-xs-12">

      <div class="box">

        @if (session('status'))

        <div class="box-header">

            <h3 class="box-title alert_thongbao text-green">{{ session('status') }}</h3>

        </div>

        @endif

        <div class="box-body">

           <table id="example1" class="table table-bordered table-striped"> 

            <thead>

              <tr>

                <th class="text-center with_dieuhuong">Stt</th>
                <th >Danh mục cha</th>
                <th>Tên danh mục</th>
                <th style="text-align:center;"><a onclick="changepos()">Vị trí</a></th>
                <th class="text-center with_dieuhuong">Hiển thị</th>


                <th class="text-center with_dieuhuong">Id</th>

              </tr>

            </thead>

            <tbody>

              @foreach($data as $k=>$item)

              <tr>

              
                <td class="text-center with_dieuhuong">{{$k+1}}</td>

                

                <td>

                <?php  $parent = DB::table('product_categories')->where('id', $item->parent_id)->first();?>

                @if(!empty($parent))

                  {{ $parent->name }}

                @else

                  <a style="color: red;"> Danh mục cấp cao</a> 

                @endif

                </td>

                

                <td><a href="<?php if($item->alias != null){?>{{ asset($item->alias) }} <?php } else { ?>{{ asset(changeTitle($item->name)) }} <?php } ?>">{{$item->name}}</a></td>
                <td style="text-align:center;" >
                    <input class="text-input medium-input" style="text-align:center; width:30% !important;" type="text" value="<?php echo $item->stt?>" name="order[<?php echo $item->id; ?>]" />
                    <input type="hidden"  value="<?php echo $item->id?>" name="idsy[<?php echo $item->id; ?>]" />
                </td>
                <td class="text-center with_dieuhuong">

                  @if($item->status>0)

                    <a href="backend/menu/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Bật</a>

                  @else

                    <a href="backend/menu/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Tắt</a>

                  @endif

                </td>

                <td style="text-align: center;">{{$item->id}}</td>

              </tr>

              @endforeach

            </tbody>

          </table>

        </div><!-- /.box-body -->

      </div><!-- /.box -->

    </div><!-- /.col -->

  </div><!-- /.row -->

</section><!-- /.content -->
</form>
@endsection()

