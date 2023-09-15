<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SMS21 | Dashboard </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css') }}">


    <!-- Bootstrap style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">

            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('profile.edit') }}" class="nav-link">প্রোফাইল</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home') }}" class="nav-link">হোম</a>
            </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item d-none d-sm-inline-block">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="লগআউট">
                </form>
            </li>
        </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('admin-dashboard') }}" class="brand-link">
            <span class="brand-text font-weight-light">Admin Dashboard</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                <div class="info">
                    {{ Auth::user()->name ?? 'No User' }}
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-header">LABELS</li>
                    <li class="nav-item">
                        <a href="{{ url('/banner-dashboard') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p class="text">ব্যানার</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/notice-dashboard') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>নোটিশ বোর্ড</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/academic-dashboard') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-info"></i>
                            <p>একাডেমিক তথ্য</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/about-dashboard') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p class="text">প্রতিষ্ঠান পরিচিতি</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/speech-dashboard') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>বাণী</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('teacher.all') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>শিক্ষক তালিকা</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gallery-dashboard') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>ফটো গ্যালারী</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/academic-dashboard') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>একাডেমিক তথ্য</p>
                        </a>
                    </li>
                </ul>
            </nav>
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
                        <h1 class="m-0"></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        @yield('content')

    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('dashboard/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dashboard/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('dashboard/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('dashboard/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('dashboard/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dashboard/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dashboard/dist/js/pages/dashboard2.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
