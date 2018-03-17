<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@lang('Administration')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. -->
  <link rel="stylesheet" href="{{ asset('adminlte/css/skins/skin-blue.min.css') }}">
  {{--dropzone--}}
  <link rel="stylesheet" href="{{ asset('adminlte/css/dropzone.min.css') }}">

  @yield('css')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{ route('admin') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><span class="fa fa-fw fa-dashboard"></span></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>@lang('Dashboard')</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li {{ currentRouteBootstrap('admin') }}>
          <a href="{{ route('admin') }}"><i class="fa fa-fw fa-dashboard"></i> <span>@lang('Dashboard')</span></a>
        </li>

        <li><a href="{{ route('categories.index') }}"><i class="fa fa-list"></i> <span>@lang('Categories')</span></a></li>
        <li><a href="{{ route('products.index') }}"><i class="fa fa-list"></i> <span>@lang('Products')</span></a></li>

        <li><a href="{{ route('medias.index') }}"><i class="fa fa-image"></i> <span>@lang('Medias')</span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>@yield('title', '')</h1>
      {{--<h1>--}}
        {{--{{ $title }}--}}
        {{--@yield('button')--}}
      {{--</h1>--}}
      <ol class="breadcrumb">
        @foreach ($breadcrumbs as $item)
          <li @if ($loop->last && $item['url'] === '#') class="active" @endif>
            @if ($item['url'] !== '#')
              <a href="{{ $item['url'] }}">
            @endif
            @isset($item['icon'])
              <span class="fa fa-{{ $item['icon'] }}"></span>
            @endisset
            {{ $item['name'] }}
            @if ($item['url'] !== '#')
              </a>
            @endif
          </li>
        @endforeach
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @yield('main')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">@lang('My nice Company')</a>.</strong> @lang('All rights reserved').
  </footer>

</div>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3.2.0 -->
<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Sweet Alert -->
<script src="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.js"></script>

@yield('js')

<!-- AdminLTE App -->

<script src="{{ asset('js/admin.js') }}"></script>

<!-- Commom -->
{{--<script src="/adminlte/js/common.js"></script>--}}

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->

<script>
    $(function() {
        $('#logout').click(function(e) {
            e.preventDefault();
            $('#logout-form').submit()
        })
    })
</script>
<script src="{{ asset('adminlte/js/app.min.js') }}"></script>
</body>
</html>