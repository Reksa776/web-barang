<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/lte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/lte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/lte/plugins/summernote/summernote-bs4.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<section >



  <div class="container">
    <h2 class="py-4">User</h2>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            @if (empty(Auth::user()->foto))
            <img src="/image/default.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px; height: 150px;">
              
              @else
              <img src="/image/{{$user->foto}}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px; height: 150px;">
            
            @endif
            <h5 class="my-3">{{$user->full_name}}</h5>
            <p class="text-muted mb-1">{{$user->about}}</p>
            <p class="text-muted mb-4">{{$user->alamat}}</p>
            <div class="d-flex justify-content-center mb-2">
              <a  href="https://wa.me/{{$user->telepon}}" target="_blank" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary ms-1">Message</a>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name User</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->nama}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->email}}</p>
              </div>
            </div>
            
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Telepon</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->telepon}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Alamat</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->alamat}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <a href="/dashboard" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary mb-5">Kembali</a>

</div>
  
</section>

<script src="/lte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/lte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/lte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/lte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/lte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/lte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/lte/plugins/moment/moment.min.js"></script>
<script src="/lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/lte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/lte/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="/lte/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/lte/dist/js/pages/dashboard.js"></script>
@include('sweetalert::alert')
</body>
</html>
