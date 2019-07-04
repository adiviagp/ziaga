<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="{{asset('/assets/css/custom.min.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('/assets/css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet" >
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <!-- include summernote css/js-->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="white" data-image="{{asset('/assets/img/sidebar-2.jpg')}}">
      <div class="logo">
        <a href="{{url('/')}}" class="simple-text logo-normal">
          ZIAGA
        </a>
      </div>

      @if(Auth::user()->role_id == '1')
      <!-- //Sidebar BNPB -->
      @include('dashboard.master.sidebar-BNPB')
      @else
      <!-- //Sidebar Kontributor -->
@include('dashboard.master.sidebar-CT')
      @endif
    </div>
    <div class="main-panel">
      @include('dashboard.master.navbar')
      @yield('content')
      @include('dashboard.master.footer')
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/sweetalert2.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/jquery.validate.min.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/nouislider.min.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/arrive.min.js')}}"></script>
  <script src="{{asset('/assets/js/material-dashboard.js')}}" type="text/javascript"></script>
<script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>


  @yield('custom-js')
  <script>
  $(document).ready(function(){
      $(".@yield('active')").addClass("active");
      $("#post").DataTable();
  });
  </script>




</body>

</html>
