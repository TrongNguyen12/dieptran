<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Quản trị website</title>
      <base href="{{ asset('backend') }}" >
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.5 -->
      <link rel="stylesheet" href="{{ url('public/admin_assets/bootstrap/css/bootstrap.min.css') }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- DataTables -->
      <link rel="stylesheet" href="{{ url('public/admin_assets/plugins/datatables/dataTables.bootstrap.css') }}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ url('public/admin_assets/dist/css/styles.css') }}"/>
      <link rel="stylesheet" href="{{ url('public/admin_assets/dist/css/AdminLTE.min.css') }}"/>
      <link rel="stylesheet" href="{{ url('public/admin_assets/dist/css/nhan.css') }}"/>
      <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="{{ url('public/admin_assets/dist/css/skins/_all-skins.min.css') }}">
      <script type="text/javascript">
         function homeUrl(){
         
             return '{!! url('/') !!}'
      
         } 
      </script>
      <!-- jQuery 2.1.4 -->
      <script src="{{ url('public/admin_assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
      <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
      <!-- CK Editor -->
      <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"> </script>
   
      <script src="{{ url('public/admin_assets/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ url('public/admin_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
      <script src="{{ url('public/admin_assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
      <script src="{{ url('public/admin_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
      <!-- SlimScroll -->
      <script src="{{ url('public/admin_assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
      <!-- FastClick -->
      <script src="{{ url('public/admin_assets/plugins/fastclick/fastclick.min.js') }}"></script>
      <!-- AdminLTE App -->
      <script src="{{ url('public/admin_assets/dist/js/app.min.js') }}"></script>
      <link href="{{ url('public/admin_assets/plugins/multiupload/assets/css/style.css') }}" rel="stylesheet" />
      <script src="{{ url('public/admin_assets/plugins/multiupload/assets/js/jquery.knob.js') }}"></script>
      <script src="{{ url('public/admin_assets/plugins/multiupload/assets/js/jquery.ui.widget.js') }}"></script>
      <script src="{{ url('public/admin_assets/plugins/multiupload/assets/js/jquery.iframe-transport.js') }}"></script>
      <script src="{{ url('public/admin_assets/plugins/multiupload/assets/js/jquery.fileupload.js') }}"></script>
      <script src="{{ url('public/admin_assets/plugins/multiupload/assets/js/script.js') }}"></script>
      <link rel="stylesheet" href="{{ asset('public/admin_assets/dropzone/dropzone.css') }}">
      <script src="{{ asset('public/admin_assets/dropzone/dropzone.min.js') }}"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="{{ url('public/admin_assets/dist/js/demo.js') }}"></script>
      <!-- the main fileinput plugin file -->
      <link href="{{ url('public/admin_assets/dist/js/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css" />
      <script src="{{ url('public/admin_assets/dist/js/fileinput.min.js') }}" type="text/javascript"></script>
      <link rel="stylesheet" href="{{ url('public/admin_assets/dist/css/nhan.css') }}"/>
      <!-- slim tag -->
      <link href="{{ url('public/admin_assets/slimselect/slimselect.min.css') }}" rel="stylesheet" />
      <script src="{{ url('public/admin_assets/slimselect/slimselect.min.js') }}"></script>
      
        <script src="{!! asset('public/tinymce/tinymce.min.js') !!}"></script>        
        <!-- My Script -->
        <script src="{{ url('public/backend/nhan/myscript.js') }}"></script> 
        <script src="{{ url('public/backend/nhan/nhan.js') }}"></script> 
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <!---- thông báo------->
      <link href="{{ url('public/admin_assets/thongbao/toastr.min.css') }}" rel="stylesheet" />
      <script src="{{ url('public/admin_assets/thongbao/toastr.min.js') }}"></script> 
      <script type="text/javascript">
         $(document).ready(function(){         
             toastr.options = {         
                 "closeButton": true,         
                 "debug": false,         
                 "newestOnTop": false,         
                 "progressBar": false,         
                 "positionClass": "toast-top-right",         
                 "preventDuplicates": false,         
                 "onclick": null,         
                 "showDuration": "300",         
                 "hideDuration": "1000",         
                 "timeOut": "5000",         
                 "extendedTimeOut": "1000",         
                 "showEasing": "swing",         
                 "hideEasing": "linear",         
                 "showMethod": "fadeIn",         
                 "hideMethod": "fadeOut"         
             }
         
         });
         
      </script>
      <!------------ scrip o day ----------->
      @if(Session::has('toastr_msg'))
      <script type='text/javascript'>
         toastr["{!! Session::get('toastr_lvl') !!}"]("{!! Session::get('toastr_msg') !!}")
         
      </script>
      @endif
      <div class="wrapper">
         @include('backend.header')
         <!-- Left side column. contains the logo and sidebar -->
         @include('backend.menu')
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         @include('backend.footer')
         <!-- Control Sidebar -->
      </div>
      <!-- ./wrapper -->
   </body>
</html>