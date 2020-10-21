
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KriObjet') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">

    <link href="{{asset('frontEnd/css/font-awesome.min.css')}}" rel="stylesheet">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/theme.css') }}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    <img style="width:150px; height:40px;" src="{{url('public/img/logo1.png')}}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        <li class="nav-item" style="margin-right: 50px;">
                            <a class="nav-link" href="{{ route('annonces.create') }}"><span style="color: black; font-size: 15px;"  ><i class="fa fa-shopping-cart"></i>{{ __(' Deposer une Annonce     ') }}</span></a>
                        </li>
                        @guest
                            <li class="nav-item" style="margin-right: 50px;" >
                                <a class="nav-link" href="{{ route('login') }}"><span style="color: black; font-size: 15px;" ><i class="fa fa-sign-in"></i>{{ __(' Se connecter') }}</span></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><span style="color: black; font-size: 15px;" ><i class="fa fa-user"></i>{{ __(' Inscription ') }}</span></a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                              <i class="far fa-bell"></i>
                              @php
                                  $nbr = DB::table('demandes')->where('status',0)->where('user_id_partenaire',Auth::user()->id)->count();
                                $demande= DB::table('demandes')->where('status',0)->where('user_id_partenaire',Auth::user()->id)->get();
                                $de= DB::table('demandes')->where('status',2)->where('user_id_client',Auth::user()->id)->get();
                                $nbrr= DB::table('demandes')->where('status',2)->where('etat',1)->where('user_id_client',Auth::user()->id)->count();
                                $dee= DB::table('demandes')->where('status',1)->where('user_id_client',Auth::user()->id)->get();
                                $nbrrr= DB::table('demandes')->where('status',1)->where('etat',1)->where('user_id_client',Auth::user()->id)->count();
                                $reservation= DB::table('reservations')->where('etat_reserv',0)->where('user_id_partenaire',Auth::user()->id)->get();
                                $n= DB::table('reservations')->where('etat_reserv',0)->where('user_id_partenaire',Auth::user()->id)->count();
                              @endphp



                            <span class="badge badge-danger navbar-badge"> {{$nbrr+$nbr+$nbrrr+$n}} </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                @foreach ($de as $d)
                                    @php

                                    $partenaire = DB::table('users')->where('id',$d->user_id_partenaire)->first();
                                    $annonce = DB::table('annonces')->where('id',$d->annonce_id)->first();

                                    @endphp

                              <a href="/listenotiff" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                  <img src="{{ asset('/images/users/default.jpg') }}" alt="User Avatar" style="width: 30px; height: 30px;" class="img-size-50 mr-3 img-circle">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                      {{$partenaire->nom}}
                                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                <p class="text-sm">Reservation Approuve de {{$annonce->titre }}</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{$d->created_at}} </p>
                                  </div>
                                </div>
                                <!-- Message End -->
                              </a>
                              @endforeach

                              {{-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"> --}}
                                @foreach ($dee as $dem)
                                    @php

                                    $partenaire = DB::table('users')->where('id',$dem->user_id_partenaire)->first();
                                    $annonce = DB::table('annonces')->where('id',$dem->annonce_id)->first();

                                    @endphp

                              <a href="/listenotiff" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                  <img src="{{ asset('/images/users/default.jpg') }}" alt="User Avatar" style="width: 30px; height: 30px;" class="img-size-50 mr-3 img-circle">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                      {{$partenaire->nom}}
                                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                <p class="text-sm">Reservation Refuse de {{$annonce->titre }}</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{$dem->created_at}} </p>
                                  </div>
                                </div>
                                <!-- Message End -->
                              </a>
                              @endforeach

                                @foreach ($demande as $c)
                                    @php
                                         $client = DB::table('users')->where('id',$c->user_id_client)->first();
                                         $annonce = DB::table('annonces')->where('id',$c->annonce_id)->first();
                                    @endphp

                              <a href="/listenotiff" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                  <img src="{{ asset('/images/users/default.jpg') }}" alt="User Avatar" style="width: 30px; height: 30px;" class="img-size-50 mr-3 img-circle">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                      {{$client->nom}}
                                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                <p class="text-sm">Reservation de {{$annonce->titre }}</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{$c->created_at}} </p>
                                  </div>
                                </div>
                                <!-- Message End -->
                              </a>
                              @endforeach
                                @php

                                @endphp
                              @foreach ($reservation as $r)
                                    @php
                                         $clie = DB::table('users')->where('id',$r->user_id_client)->first();
                                         $annonc = DB::table('annonces')->where('id',$r->annonce_id)->first();
                                    @endphp

                              <a href="/listenotiff" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                  <img src="{{ asset('/images/users/default.jpg') }}" alt="User Avatar" style="width: 30px; height: 30px;" class="img-size-50 mr-3 img-circle">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                      {{$clie->nom}}
                                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                <p class="text-sm">a Annule la Reservation de {{$annonc->titre }}</p>
                                    {{-- <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{$c->created_at}} </p> --}}
                                  </div>
                                </div>
                                <!-- Message End -->
                              </a>
                              @endforeach


                              <div class="dropdown-divider"></div>
                              <a href="/listenotiff" class="dropdown-item dropdown-footer">See All Messages</a>
                            </div>
                          </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{ asset(Auth::user()->image) }}" alt="" style="height: 35px;width: 35px; border-radius: 50%; margin-right: 15px;" ><span style="color: black; font-size: 15px;" >{{ Auth::user()->username }}</span>  <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/user', Auth::user()->id) }}">
                                        <span style="color: black; font-size: 13px;" ><i class="fa fa-user"></i>{{ __(' Mon Compte') }}</span>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span style="color: black; font-size: 13px;" ><i class="fa fa-sign-out"></i>{{ __(' Deconnexion') }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
