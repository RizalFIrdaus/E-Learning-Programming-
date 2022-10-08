<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN PANEL</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{'/css/admin.min.css'}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" 
        role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="{{url('/')}}" class="d-block">E-Learning Programming</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-header">Materi</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Materi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('materi_html')}}" class="nav-link">
                  <i class="fab fa-html5 nav-icon"></i>
                  <p>HTML</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('materi_css')}}" class="nav-link">
                  <i class="fab fa-css3-alt nav-icon"></i>
                  <p>CSS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('materi_js')}}" class="nav-link">
                  <i class="fab fa-js nav-icon"></i>
                  <p>JS</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('list_materi')}}" class="nav-link">
              <i class="nav-icon fas fa-th-list"></i>
              <p>
                List Materi
              </p>
            </a>
          </li>
          <li class="nav-header">Latihan</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Latihan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('mc_latihan_html')}}" class="nav-link">
                  <i class="fab fa-html5 nav-icon"></i>
                  <p>HTML</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('mc_latihan_css')}}" class="nav-link">
                  <i class="fab fa-css3-alt nav-icon"></i>
                  <p>CSS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('mc_latihan_js')}}" class="nav-link">
                  <i class="fab fa-js nav-icon"></i>
                  <p>JS</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('list_latihan')}}" class="nav-link">
              <i class="nav-icon fas fa-th-list"></i>
              <p>
                List Latihan
              </p>
            </a>
          </li>
          <li class="nav-header">Lainnya</li>
          <li class="nav-item">
            <a href="{{route('tools')}}" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Tools
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('tutor')}}" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Tutor
              </p>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('judul')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>  
</div>
<!-- ./wrapper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('/js/admin.min.js')}}"></script>
</body>
</html>
