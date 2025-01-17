<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token()}}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dashboard_lte/AdminLTE-3.2.0/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include ('tampilan.component.navbar')

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4"  style="background:white;">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-4 d-flex" style="border-bottom: 0.5px solid #A9A9A9;">
        <div class="info" style="color: black;">
          <a class="d-block" style="font-size:23px; color: black; margin-top:-15px;">Rumah Quran</a>
          <a class="d-block" style="font-size:23px; color: black; margin-top:-10px;">Khairo Assyarifiyah</a>
        </div>
      </div>
      <div class="user-panel pb-3 mb-4 d-flex" style="margin-top:-20px; border-bottom: 0.5px solid #A9A9A9;">
        <!--<div class="image">
          <img src="{{ asset('asset/img/bannerrq.jpeg')}}" class="img-circle" style="height: 50px; width: 50px;" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block" style="color: black; margin-top: 10px;"> DASHBOARD ADMIN</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="/admin" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>
          <li class="nav-header">PROFILE </li>
          <li class="nav-item" >
            <a href="/admin/news" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Event Ramadhan
              </p>
            </a>
          </li>

          <li class="nav-item" >
            <a href="/admin/youtube" class="nav-link">
                <i class="nav-icon fab fa-youtube"></i>
              <p>
                Video Tasmi Youtube
              </p>
            </a>
          </li>
          <li class="nav-header">DATA MASTER</li>
          <li class="nav-item @if(isset($active_home)){{$$active_home}} @endif ">
            <a href="/admin/tbl_santri" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Data Santri</p>
            </a>
            <!--<li class="nav-item">
            <a href="/admin/user" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Data User</p>
            </a>
          </li>-->
          <li class="nav-item">
            <a href="/admin/murabbi" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Data Murabbi</p>
            </a>
          </li>
        </li>
          <li class="nav-item">
            <a href="/admin/kelas" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Data Kelas</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
@yield('content')
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dashboard_lte/AdminLTE-3.2.0/dist/js/pages/dashboard.js') }}"></script>
</body>
</html>
