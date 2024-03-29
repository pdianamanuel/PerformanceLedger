
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SBGFC | Performance Ledger</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet"  href="/css/app.css">
</head> 
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav text-sm">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <div class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">FIELD NOTES - ATTENDANCE & WORK PERFORMANCE LEDGER</a>
      </div><!-- /.col -->
    </ul>

    <ul class="navbar-nav ml-auto ">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      <div class="nav-icon">
        <img src="./img/sb_logo.jpg" alt="Performance Ledger Logo" class="brand-image nav-link">
      </div>
    </ul>

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links (deleted) --> 
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="./img/Ledger.png" alt="Performance Ledger Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <i class="nav-icon fas fa-book-open" style="padding: 8px"></i>
      <span class="brand-text font-weight-light">FIELD NOTES</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="./img/user.png" class="img-circle elevation-2" alt="User Image"> --}}
          <i class="nav-icon fas fa-user white" style="padding: 6px"></i>
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-th purple"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          @can('isEmployee')

          <li class="nav-item">
            {{-- if user --}}
             <router-link to="/ledger_user" class="nav-link">

              <i class="nav-icon fas fa-folder yellow"></i>
              <p>
                Task Scheduler
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          @endcan

          @can('isAdmin')

          <li class="nav-item">
            {{-- if user --}}
             <router-link to="/ledger_admin" class="nav-link">

              <i class="nav-icon fas fa-folder yellow"></i>
              <p>
                Task Scheduler
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          @endcan

          <li class="nav-item">

            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="nav-icon fas fa-power-off red"></i>
              <p>
                {{ __('Logout') }}
              </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
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
    

  <!-- Content Wrapper. Contains page content -->
  
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <router-view></router-view>
        
        <vue-progress-bar></vue-progress-bar>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->


@auth
<script>
  window.user = @json(auth()->user())
</script>
@endauth

<script src="/js/app.js"></script>
</body>
</html>