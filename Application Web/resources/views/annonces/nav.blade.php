@isset(Auth::user()->id)
@if(Auth::user()->is_admin == 0 )
<ul id="slide-out" class="side-nav custom-scrollbar">
    <li>
        <div class="logo-wrapper waves-light">
            <a href="/">
                <img src="{{ asset('AboutDesign/img/logo1.png') }}" class="img-fluid flex-center">
            </a>
        </div>
    </li>

    <li>
        <ul class="social">
            <li>
                <a class="fb-ic">
                    <i class="fab fa-facebook-f "> </i>
                </a>
            </li>
            <li>
                <a class="pin-ic">
                    <i class="fab fa-pinterest "> </i>
                </a>
            </li>
            <li>
                <a class="gplus-ic">
                    <i class="fab fa-google-plus-g "> </i>
                </a>
            </li>
            <li>
                <a class="tw-ic">
                    <i class="fab fa-twitter "> </i>
                </a>
            </li>
        </ul>
    </li>

    <li>
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header waves-effect arrow-r">
                    <i class="fas fa-user " style="color:  #e51b23;"></i> Parametres
                    <i class="fas fa-angle-down rotate-icon"></i>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="{{ route('profile', Auth::user()->id) }}" class="waves-effect">Modifier Compte </a>
                        </li>
                        <li>
                            <a href="{{ url('/email/verify') }}" class="waves-effect">Verifier Mon Compte</a>
                        </li>
                        <li>
                            <a href="{{ route('image') }}" class="waves-effect">Modifier Photo de Profil</a>
                        </li>
                        <li>
                            <a href="{{ route('changepas') }}" class="waves-effect">Modifier Mot de passe</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="collapsible-header waves-effect arrow-r">
                    <i class="fas fa-shopping-basket " style="color:  #e51b23;"></i> Annonces
                    <i class="fas fa-angle-down rotate-icon"></i>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="{{ url('/mesannonces', Auth::user()->id) }}" class="waves-effect">Mes annonces</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a class="collapsible-header waves-effect arrow-r">
                    <i class="fas fa-address-book " style="color:  #e51b23;"></i> Demandes
                    <i class="fas fa-angle-down rotate-icon"></i>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="{{ url('/listenotiff') }}" class="waves-effect">Mes demandes </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="collapsible-header waves-effect arrow-r">
                    <i class="fas fa-address-book " style="color:  #e51b23;"></i> Reservations
                    <i class="fas fa-angle-down rotate-icon"></i>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="{{ url('/mesreservation') }}" class="waves-effect">Mes reservations</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{ url('/About/#contact') }}" class="collapsible-header waves-effect">
                    <i class="fas fa-envelope " style="color:  #e51b23;"></i> Contact</a>
            </li>

        </ul>
    </li>
    <div class="sidenav-bg mask-strong"></div>
</ul>
@else

@endif
@endisset

<nav class="navbar fixed-top navbar-expand-lg  navbar-light scrolling-navbar white" >
    <div class="container">
        @isset(Auth::user()->id)
        @if(Auth::user()->is_admin == 0 )
        <div class="float-left mr-2">
            <a href="#" data-activates="slide-out" class="button-collapse">
                <i class="fas fa-bars black-text"></i>
            </a>
        </div>
        @else
        @endif
        @endisset
        <a class="navbar-brand font-weight-bold" href="{{ route('annonces.index') }}"><img src="{{ asset('AboutDesign/img/logo1.png') }}" style="width:150px; height:40px;" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="{{ url('/About/#contact') }}"><i class="fas fa-envelope " style="color:  #e51b23;"></i> Contact <span class="sr-only">(current)</span></a>
                </li>
                @if(isset(Auth::user()->id))
                    @if(Auth::user()->is_admin == 1)
                    @else

                    <li class="nav-item ml-3">
                        <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="{{ route('annonces.create') }}"><i class="fas fa-shopping-cart" style="color:  #e51b23;"></i> Deposer Annonce</a>
                    </li>
                    @endif
                @else
                <li class="nav-item ml-3">
                    <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="{{ route('annonces.create') }}"><i class="fas fa-shopping-cart" style="color:  #e51b23;"></i> Deposer Annonce</a>
                </li>

               @endif
                @guest
                    <li class="nav-item ml-3">
                        <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="{{ route('login') }}"><i class="fas fa-sign-in-alt" style="color:  #e51b23;"></i> Se connecter</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item ml-3">
                        <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="{{ route('register') }}"><i class="fas fa-user" style="color:  #e51b23;"></i> Inscription </a>
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

                        <div class="media" >
                          <img src="{{ asset('/images/users/default.jpg') }}" alt="User Avatar" style="width: 30px; height: 30px;" class="img-size-50 mr-3 img-circle">
                          <div class="media-body">
                            <h5 class="dropdown-item-title">
                              {{$partenaire->nom}}
                            </h5>
                        <span class="text-sm">Reservation Approuvée de {{$annonce->titre }}</span>

                          </div>
                        </div>

                      </a>
                      @endforeach
                        @foreach ($dee as $dem)
                            @php
                            $partenaire = DB::table('users')->where('id',$dem->user_id_partenaire)->first();
                            $annonce = DB::table('annonces')->where('id',$dem->annonce_id)->first();
                            @endphp

                      <a href="/listenotiff" class="dropdown-item">
                        <div class="media">
                          <img src="{{ asset('/images/users/default.jpg') }}" alt="User Avatar" style="width: 30px; height: 30px;" class="img-size-50 mr-3 img-circle">
                          <div class="media-body">
                            <h5 class="dropdown-item-title">
                              {{$partenaire->nom}}
                            </h5>
                        <span class="text-sm">Reservation Refusée de {{$annonce->titre }}</span>

                          </div>
                        </div>

                      </a>
                      @endforeach

                        @foreach ($demande as $c)
                            @php
                                 $client = DB::table('users')->where('id',$c->user_id_client)->first();
                                 $annonce = DB::table('annonces')->where('id',$c->annonce_id)->first();
                            @endphp

                      <a href="/listenotiff" class="dropdown-item">

                        <div class="media">
                          <img src="{{ asset('/images/users/default.jpg') }}" alt="User Avatar" style="width: 30px; height: 30px;" class="img-size-50 mr-3 img-circle">
                          <div class="media-body">
                            <h5 class="dropdown-item-title">
                              {{$client->nom}}
                            </h5>
                        <span class="text-sm">Reservation de {{$annonce->titre }}</span>
                            <span class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{$c->created_at}} </span>
                          </div>
                        </div>

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

                        <div class="media">
                          <img src="{{ asset('/images/users/default.jpg') }}" alt="User Avatar" style="width: 30px; height: 30px;" class="img-size-50 mr-3 img-circle">
                          <div class="media-body">
                            <h5 class="dropdown-item-title">
                              {{$clie->nom}}
                              <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h5>
                        <span class="text-sm">a annulé la Reservation de {{$annonc->titre }}</span>

                          </div>
                        </div>

                      </a>
                      @endforeach


                      <div class="dropdown-divider"></div>
                      <a href="/listenotiff" class="dropdown-item dropdown-footer">Voir Toutes les notifications </a>
                    </div>
                  </li>
                <li class="nav-item dropdown ml-3">
                    <a class="nav-link dropdown-toggle waves-effect waves-light dark-grey-text font-weight-bold" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><img src="{{ asset(Auth::user()->image) }}" alt="" style="height: 35px;width: 35px; border-radius: 50%; margin-right: 15px;" >{{Auth::user()->username}}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item waves-effect waves-light" href="{{ url('/home') }}"><i class="fa fa-user" style="color:  #e51b23;"></i> Mon compte</a>

                        <a class="dropdown-item waves-effect waves-light" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt " style="color:  #e51b23;"></i> Deconnexion</a>

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
