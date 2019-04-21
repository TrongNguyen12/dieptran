@extends('backend.master')
@section('content')
@section('controller','Quản lý '.$trang)
@section('action','Edit')
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
   <div class="box">
      @include('backend.messages_error')
      <div class="box-body">
         <form method="post" action="backend/lienket/edit?id={{$id}}&type={{ @$_GET['type'] }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="row">
               <div class="col-md-8 col-xs-12">
                  <?php if(@$_GET['type'] != 'lien-ket'){?>
                  <div class="form-group @if ($errors->first('fImages')!='') has-error @endif">
                     <img src="{{ asset('upload/hinhanh/'.$data->photo) }}" id="output" />
                     <input class="max-with" name="fImages" type="file"  onchange="loadFile(event)"/>
                  </div>
                  <?php } ?>
                  <div class="clearfix"></div>
                  <div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
                     <label for="ten">Tiêu đề</label>
                     <input type="text" name="txtName" id="txtName" value="{{ $data->name }}"  class="form-control" />
                     @if ($errors->first('txtName')!='')
                     <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
                     @endif
                  </div>
                  <?php if($_GET['type']!='bank' && $_GET['type']!='bank-tra-gop'){?>
                  <div class="form-group">
                     <label for="alias">Link</label>
                     <input type="text" name="txtLink" id="txtLink" value="{{ $data->link }}"  class="form-control" />
                  </div>
                  <?php } ?>    
                  <?php if($_GET['type']=='bank' || $_GET['type']=='bank-tra-gop'){?>
                  <div class="box box-info">
                     <div class="box-header">
                        <h3 class="box-title">Nội dung</h3>
                        <div class="pull-right box-tools">
                           <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                           <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                     </div>
                     <div class="box-body pad">
                        <textarea name="txtDesc" id="Text_min" cols="50" rows="5"><?php echo $data->mota;?></textarea>
                     </div>
                  </div>
                  <?php } ?>    
               </div>
               <div class="col-md-3">
                  <input type="hidden" name="txtCom" value="{{ @$_GET['type'] }}"/>
                  <button type="submit" class="btn btn-primary btn-block margin-bottom">Lưu</button>
                  <div class="box box-solid">
                     <div class="box-header with-border">
                        <h3 class="box-title">Tác vụ</h3>
                        <div class="box-tools">
                           <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                           </button>
                        </div>
                     </div>
                     <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                           <li><a style="font-weight: 400px;"><label><input type="checkbox" name="status" {!! (!isset($data->status) || $data->status==1)?'checked="checked"':'' !!}/> Hiển thị</label></a></li>
                           <li>
                              <a style="line-height: 35px;"><input type="number" min="1" name="stt" value="{!! isset($data->status) ? $data->stt : (count($news)+1) !!}" class="form-control" style="width: 100px;margin-right: 10px;float: left;margin-bottom: 10px;"/> Số thứ tự</a>
                              <div style="clear: both;"></div>
                           </li>
                           <div style="clear: both;"></div>
                           <li><a href="backend/lienket?type={{ @$_GET['type'] }}"><i class="fa fa-trash-o"></i> Thoát</a></li>
                        </ul>
                     </div>
                     <!-- /.box-body -->
                  </div>
                  <!-- /. box -->
                  <?php if($_GET['type']=='bank-tra-gop'){?>
                  <!--------------------------->
                  <div class="box box-success">
                     <div class="box-header with-border">
                        <div class="box-tools pull-right">
                           <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                           </button>
                           <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body no-padding" style="">
                        <!--------------->
                        <?php $data_price=DB::table('banks')->select()->where('cate_id',$data->id)->get();
                           foreach($data_price as  $pri){
                           
                           ?>
                        <div id="row-li">
                           <div id="price1">
                              <div class="cauhinh1">
                                 <div class="col-md-10 col-xs-12">
                                    <input type="hidden" name="id_txt_update[]" value="<?php echo $pri->id?>"  />
                                    <input name="name_txt_update[]"  placeholder="Tiêu đề kỳ hạn" value="<?php echo $pri->name?>" id="maxgin10" class="form-control images-add"  type="text" />
                                    <input name="cent_txt_update[]"  placeholder="Phần trăm trả theo kỳ hạn" id="maxgin10" onkeyup="FormatNumber(this);"  onKeyPress="return isNumberKey(event)" value="{{ $pri->cent }}"  class="form-control images-add"  type="text" />
                                 </div>
                                 <div class="col-md-1 col-xs-12"><a href="backend/lienket/{{$pri->id}}/getDeletebank"><i class="fa fa-trash-o fa-fw"></i> Xóa</a></div>
                                 <div style="clear: both;"></div>
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                        <div class="clearfix"></div>
                        <div id="row-li">
                           <div id="bank">
                              <div class="bank">
                                 <div class="col-md-8 col-xs-12"></div>
                                 <div class="col-md-4 col-xs-12"><input style="margin: 10px 0px;background: aliceblue;" id="bankAdd"  class="form-control add-properties" type="button" value=" Thêm " /></div>
                                 <div style="clear: both;"></div>
                              </div>
                           </div>
                        </div>
                        <!-- /.box-body -->
                     </div>
                     <!---------------------------> 
                  </div>
                  <?php } ?> 
               </div>
            </div>
            <div class="clearfix"></div>
         </form>
      </div>
      <!-- /.box-body -->
   </div>
   <!-- /.box -->
</section>
<!-- /.content -->
<script type="text/javascript">
   $(document).ready(function(){
   
      $("#bankAdd").click(function() {
   
          $("#bank").append('<div class="bank"><div class="col-md-10 col-xs-12"><input placeholder="Tiêu đề kỳ hạn" id="maxgin10" name="name_txt[]" class="form-control images-add"  type="text" /><input name="cent_txt[]"  placeholder="Phần lần trả theo kỳ hạn" id="maxgin10"   class="form-control images-add"  type="number" /></div>' + '<input id="bnt-images-add" type="button" class="form-control btnRemove" value="Xóa"/><div class="clearfix"></div></div>');
   
        });
   
        $('body').on('click','.btnRemove',function() {
   
          $(this).parent('div.bank').remove()
   
        });
   
   })   
   
   
   
</script>
@endsection()