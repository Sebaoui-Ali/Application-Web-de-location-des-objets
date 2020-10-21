<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Administration</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
  @yield('css')
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{ asset('calendar/jquery.calendar.css') }}">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="{{ asset('calendar/jquery.calendar.js') }}"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Accueil_Kriobjet</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">

      <a class="nav-link" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" href="{{ route('logout') }}"> Deconnexion</a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </li>

    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          @php
              $nbr = DB::table('contacts')->where('status',1)->count();
              $contacts= DB::table('contacts')->orderbydesc('created_at')->get();
          @endphp



          <span class="badge badge-danger navbar-badge">{{$nbr}}</span>
        </a>
        @foreach ($contacts as $c)
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{ route('listemsg') }}"" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('/images/users/default.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  {{$c->nom}}
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">{{$c->message}}</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{$c->created_at}}</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          @endforeach

          <div class="dropdown-divider"></div>
          <a href="{{ route('listemsg') }}" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="/images/logoo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dashbord Kriobjet</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset(Auth::user()->image) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->username}}</a>
        </div>
      </div>
     <!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview">
      <a href="{{ route('Userlist') }}" class="nav-link">
        <i class="nav-icon fas fa-user-alt"></i>
        <p>
          Users
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('Annonceliste') }}" class="nav-link">
        <i class="nav-icon fas fa-shopping-basket"></i>
        <p>Annonces</p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class=" nav-icon fa fa-list" aria-hidden="true"></i>
        <p>
          Category
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('Addcat') }}" class="nav-link">
            <i class="fas fa-plus"></i>
            <p>Ajouter-Category</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('listecat') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Liste des categories</p>
          </a>
        </li>

      </ul>
    </li>
    <li class="nav-item ">
        <a href=" {{ route('listesouscat') }}" class="nav-link">
          <i class=" nav-icon fa fa-list" ></i>
          <p>
            Sous Category
          </p>
        </a>
      </li>
      <li class="nav-item ">
        <a href=" {{ route('listelocation') }}" class="nav-link">
            <i class="nav-icon fas fa-cart-arrow-down"></i>
          <p>
            Locations
          </p>
        </a>
      </li>
      <li class="nav-item ">
        <a href=" {{ route('listemsg') }}" class="nav-link">
          <i class=" nav-icon fas fa-comments" ></i>
          <p>
            List des Messages
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0 text-dark">Starter Page</h1> --}}
          </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('main')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
@yield('js')

</body>
</html>
