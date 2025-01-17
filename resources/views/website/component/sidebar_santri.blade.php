<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dashboard Santri</title>
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
  <aside class="main-sidebar elevation-4" style="background:white;">
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
          <img src="{{ asset('storage/uploads/' . Session::get('photo')) }}" class="img-circle" style="height: 50px; width: 50px;" alt="User Image">
        </div>-->
        <div class="info">
          <a href="#" class="d-block" style="color: black; margin-top: 10px; font-size: 18px;">{{ Session::get('nama_santri')}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="/santri" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/santri/profile" class="nav-link">My Profile</a>
          </li>
          <li class="nav-header">PENILAIAN</li>
          <li class="nav-item" >
            <a href="/santri/nilai" class="nav-link">
              <i class="nav-icon ion ion-clipboard"></i>
              <p>
                Nilai Hafalan
              </p>
            </a>
          </li>
          <li class="nav-header">TUGAS</li>
          <li class="nav-item">
            <a href="/santri/tugassantri" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>Tugas Hafalan</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/santri/tugassantri_ramadhan" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>Tugas Ramadhan</p>
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
  <!-- /.content-wrapper
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a>Azzahra Arsy</a>.</strong>
  </footer>-->

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
