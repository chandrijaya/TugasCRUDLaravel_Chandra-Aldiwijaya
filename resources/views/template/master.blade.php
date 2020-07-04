<!DOCTYPE html>
<!--Chandra Aldiwijaya-->
<!--chandra.aldiwijaya.694@gmail.com-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Forum</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href= {{ asset("/css/style.css")}}>
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" {{ asset('/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href=" {{ asset('/adminlte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel ="stylesheet" href= {{ asset('/adminlte/jquery.dataTables.min.css')}}>
  {{-- SummerNote --}}
  <link rel="stylesheet" href= {{asset("/summernote-0.8.18-dist/summernote.min.css")}}>
</head>
<body>
  <header>
    <!-- Navbar -->
    @include('template.part.navbar')
    <!-- /.navbar -->
  </header>
  <section>
    @yield('content')
  </section>
<!-- ./wrapper -->
<footer>
  <h5>Contact me at: chandra.aldiwijaya@gmail.com</h5>
</footer>
<!-- jQuery -->
<script src=" {{ asset('/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src=" {{ asset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src=" {{ asset('/adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src=" {{ asset('/adminlte/dist/js/demo.js')}}"></script>
{{-- SummerNote --}}
<script src={{asset("/summernote-0.8.18-dist/summernote.min.js")}}></script>
@stack('scripts')
</body>
</html>
