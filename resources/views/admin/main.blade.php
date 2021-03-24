<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Glenbarra Museum</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset ('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset ('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset ('css/style.css') }}">


  @yield('css')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="#" alt="" height="60" width="60">
  </div> -->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i> Demo
        </a>
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
                <h3 class="dropdown-item-title"><i class="fas fa-sign-out-alt"></i> Log Out</h3>
          </a>
        </div>
            <!-- Message End -->
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('images/logo.png')}}" alt="" class="img-fluid">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ Route('admin.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
          <!-- About Menu Starts Here -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                About
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-5">
                <a href="{{ Route('admin.about.add') }}" class="nav-link">
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item  ml-5">
                <a href="{{ Route('admin.about.view') }}" class="nav-link">
                  <p>View</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- About Menu Ends Here -->

          <!-- Event Exhibition Menu Starts Here -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
              Event Exhibition
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-5">
                <a href="{{ Route('admin.event.add') }}" class="nav-link">
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item  ml-5">
                <a href="{{ Route('admin.event.view') }}" class="nav-link">
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item  ml-5">
                <a href="{{ Route('admin.event.displayorder') }}" class="nav-link">
                  <p>Display Order</p>
                </a>
              </li>

            </ul>
          </li>
          <!-- Event Exhibition Menu Ends Here -->          
          
          <!-- Publication Menu Starts Here -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Publication
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-5">
                <a href="{{ Route('admin.publication.add') }}" class="nav-link">
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item  ml-5">
                <a href="{{ Route('admin.publication.view') }}" class="nav-link">
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item  ml-5">
                <a href="{{ Route('admin.publication.displayorder') }}" class="nav-link">
                  <p>Display Order</p>
                </a>
              </li>

            </ul>
          </li>
          <!-- Publication Menu Ends Here -->          

          <!-- Press Menu Starts Here -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
              Press
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-5">
                <a href="{{ Route('admin.press.add') }}" class="nav-link">
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item  ml-5">
                <a href="{{ Route('admin.press.view') }}" class="nav-link">
                  <p>View</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Press Menu Ends Here -->          

          <!-- Gallery Menu Starts Here -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
              Gallery
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-5">
                <a href="{{ Route('admin.gallery.add') }}" class="nav-link">
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item  ml-5">
                <a href="{{ Route('admin.gallery.view') }}" class="nav-link">
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item  ml-5">
                <a href="{{ Route('admin.gallery.displayorder') }}" class="nav-link">
                  <p>Display Order</p>
                </a>
              </li>
              <li class="nav-item  ml-5">
                <a href="{{ Route('admin.gallery.theme') }}" class="nav-link">
                  <p>Theme</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Gallery Menu Ends Here -->          

          <!-- Access & Visit Menu Starts Here -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Acess & Visit
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-5">
                <a href="{{ Route('admin.accessvisit.add') }}" class="nav-link">
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item  ml-5">
                <a href="{{ Route('admin.accessvisit.view') }}" class="nav-link">
                  <p>View</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Access & Visit Menu Ends Here -->          
          


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  <div class="content-wrapper">


      <!-- Content Header (Page header) --> 
      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> @yield('content-header') </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->




    <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
              @yield('content')
        </div>
      </section>


  </div>







</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset ('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset ('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- daterangepicker -->
<script src="{{ asset ('plugins/moment/moment.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset ('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- overlayScrollbars -->
<script src="{{ asset ('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('dist/js/adminlte.js') }}"></script>


@yield('scripts')

</body>
</html>
