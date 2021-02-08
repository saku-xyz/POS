<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @yield('css')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <!-- Navbar -->
    @include('layouts.partials.navbar')

  <!-- Main Sidebar Container -->
    @include('layouts.partials.sidebar')

  <div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>@yield('content-header')</h1>
            </div>
            <div class="col-sm-6 text-right">
              @yield('content-actions')
            </div><!-- /.col -->
          </div>
        </div><!-- /.container-fluid -->
      </section>

    <section class="content">

     @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  @include('layouts.partials.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- AdminLTE -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('js')
</body>
</html>
