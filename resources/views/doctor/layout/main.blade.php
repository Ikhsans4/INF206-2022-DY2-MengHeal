<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menheal | {{ $title }}</title>

    <!-- icon page -->
    <link rel="shortcut icon" href="{{ url('assets/icon/icon.ico') }}" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

</head>

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">


        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light-primary bg-light elevation-1">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item d-none d-sm-inline-block">

                    <form action="{{ url('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="nav-link btn"><i class="fas fa-sign-out-alt"></i> Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-2 ">
            <!-- Brand Logo -->
            <a href="{{ url('/admin') }}" class="brand-link">
                <img src="{{ url('assets/img/icon.png') }}" alt="Menheal Logo" class="brand-image">
                <span class="brand-text font-weight-bold text-primary">MenHeal</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="{{ url('/doctor') }}"
                                class="nav-link @if ($title === 'Dashboard') active @endif">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/doctor/konsul') }}"
                                class="nav-link @if ($title === 'Online Consultation') active @endif">
                                <i class="nav-icon fas fa-comment"></i>
                                <p>
                                    Online Consultation
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/doctor/patients') }}"
                                class="nav-link @if ($title === 'Patients') active @endif">
                                <i class="nav-icon fas fa-procedures"></i>
                                <p>
                                    Patients
                                </p>
                            </a>
                        </li>

                        <!-- user login -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="image">
                                <img src="{{ url('assets/icon/icon.ico') }}" class="img-circle elevation-2"
                                    alt="User Image">
                            </div>
                            <div class="info">
                                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                            </div>
                        </div>

                        <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title-page')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">{{ $title }}</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('mainContent')
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="#">MenHeal</a>.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 2.0.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ url('plugins/jquery/jquery.min.j') }}s"></script>
    <!-- Bootstrap -->
    <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('dist/js/adminlte.js') }}"></script>
    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ url('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ url('plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ url('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ url('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ url('plugins/chart.js/Chart.min.js') }}"></script>
    @yield('script')
</body>

</html>
