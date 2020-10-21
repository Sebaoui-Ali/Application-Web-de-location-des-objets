@extends('back.layout')
@section('main')

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>@php
                $nbr =DB::table('categories')->count();
            @endphp
            {{$nbr}}
            </h3>

            <p>Categories</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="{{ route('listecat') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>


      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">

            <h3>@php
                // $nbrr =DB::table('users')->where('deleted_at','>','NULL')->count();
                $nbrr =DB::table('annonces')->count();
            @endphp
            {{$nbrr}}</h3>

            <p> Annonces </p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{ route('Annonceliste') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>

      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">

            <h3>@php
                $nbrr =DB::table('users')->count();
            @endphp
            {{$nbrr}}</h3>

            <p>Utilisateurs</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{ route('Userlist') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-gradient-gray-dark">
          <div class="inner">

            <h3>@php
                $nbrr =DB::table('reservations')->count();
                // $nbrr =DB::table('annonces')->count();
            @endphp
            {{$nbrr}}</h3>

            <p> Location </p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{ route('listelocation') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

    </div>
  </div>
    </section>


  <!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- daterangepicker -->
<script src="/adminlte/plugins/moment/moment.min.js"></script>
<script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/adminlte/plugins/summernote/summernote-bs4.min.js"></script>




@endsection
