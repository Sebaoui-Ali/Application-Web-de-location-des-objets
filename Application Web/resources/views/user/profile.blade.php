
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Modification </title>
    @include('annonces.header')
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">

    <link href="{{asset('frontEnd/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/theme.css') }}">
</head>
<body class="category-v1 hidden-sn white-skin animated">
    @include('annonces.nav')
    <br><br><br><br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @php
                        $user= DB::table('users')->where('id',Auth::user()->id)->first();
                    @endphp
                    <div class="card-header" style="color:white; text-align: center; font-size:30px; background: linear-gradient(to right, #df0031, #8B0000);">{{ __('Mes Informations') }}</div>

                    <div class="card-body">
                        <form action="{{ route('updateuser', Auth::user()->id) }}" method="POST">
                            @method('PUT')
                                {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                <div class="col-md-6">
                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $user->nom }}" required autocomplete="nom" autofocus>

                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                                <div class="col-md-6">
                                    <input id="prenom" type="text" class="form-control @error ('prenom') is-invalid @enderror" name="prenom" value="{{ $user->prenom }}" required autocomplete="prenom" autofocus>

                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="genre" class="col-md-4 col-form-label text-md-right">{{ __('Genre') }}</label>
                                @if($user->genre == "Homme")
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="f" name="genre" value="Femme">
                                        <label class="form-check-label" for="f">Femme</label>
                                      </div>

                                      <!-- Material inline 3 -->
                                      <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="h" name="genre" value="Homme" checked>
                                        <label class="form-check-label" for="h">Homme</label>
                                      </div>
                                </div>
                                @else
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="f" name="genre" value="Femme" checked>
                                        <label class="form-check-label" for="f">Femme</label>
                                      </div>

                                      <!-- Material inline 3 -->
                                      <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="h" name="genre" value="Homme">
                                        <label class="form-check-label" for="h">Homme</label>
                                      </div>
                                </div>
                                @endif
                            </div>



                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Tel') }}</label>
                                <div class="col-md-6">
                                    <input id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{$user->tel }}" required autocomplete="tel" autofocus>

                                    @error('tel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Ville" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                                <div class="col-md-6">
                                    <select class="mdb-select md-form" name="Ville">
                                        <option value="" disabled selected>Choisir votre ville</option>

                                        <option value="" disabled >---- Tout Le Maroc ----</option>


                                        <option value="Tetouan" {{ $user->ville == 'Tetouan' ? 'selected' : ''}}> Tetouan</option>
                                        <option value="Casablanca" {{ $user->ville == 'Casablanca' ? 'selected' : '' }}> Casablanca</option>
                                        <option value="Agadir" {{ $user->ville == 'Agadir' ? 'selected' : '' }}> Agadir</option>
                                        <option value="Al Hoceima" {{ $user->ville == 'Al Hoceima' ? 'selected' : '' }}> Al Hoceima</option>
                                        <option value="Béni Mellal" {{ $user->ville == 'Béni Mellal' ? 'selected' : '' }}> Béni Mellal</option>
                                        <option value="Errachidia" {{ $user->ville == 'Errachidia' ? 'selected' : '' }}> El Jadida</option>
                                        <option value="Errachidia" {{ $user->ville == 'Errachidia' ? 'selected' : '' }}> Errachidia</option>
                                        <option value="Fès" {{ $user->ville == 'Fès' ? 'selected' : '' }}> Fès</option>
                                        <option value="Kénitra" {{ $user->ville == 'Kénitra' ? 'selected' : '' }}> Kénitra</option>
                                        <option value="Khénifra" {{ $user->ville == 'Khénifra' ? 'selected' : '' }}> Khénifra</option>
                                        <option value="Khouribga" {{ $user->ville == 'Khouribga' ? 'selected' : '' }}> Khouribga</option>
                                        <option value="Larache" {{ $user->ville == 'Larache' ? 'selected' : '' }}> Larache</option>
                                        <option value="Marrakech" {{ $user->ville == 'Marrakech' ? 'selected' : '' }}> Marrakech</option>
                                        <option value="Meknès" {{ $user->ville == 'Meknès' ? 'selected' : '' }}> Meknès</option>
                                        <option value="Nador" {{ $user->ville == 'Nador' ? 'selected' : '' }}> Nador</option>
                                        <option value="Ouarzazate" {{ $user->ville == 'Ouarzazate' ? 'selected' : '' }}> Ouarzazate</option>
                                        <option value="Oujda" {{ $user->ville == 'Oujda' ? 'selected' : '' }}> Oujda</option>
                                        <option value="Rabat" {{ $user->ville == 'Rabat' ? 'selected' : '' }}> Rabat</option>
                                        <option value="Safi" {{ $user->ville == 'Safi' ? 'selected' : '' }}> Safi</option>
                                        <option value="Settat" {{ $user->ville == 'Settat' ? 'selected' : '' }}> Settat</option>
                                        <option value="Salé" {{ $user->ville == 'Salé' ? 'selected' : '' }}> Salé</option>
                                        <option value="Tanger" {{ $user->ville == 'Tanger' ? 'selected' : '' }}> Tanger</option>
                                        <option value="Taza" {{ $user->ville == 'Taza' ? 'selected' : '' }}> Taza</option>
                                        <option value="Tétouan" {{ $user->ville == 'Tétouan' ? 'selected' : '' }}> Tétouan</option>

                                    </select>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="code_postal" class="col-md-4 col-form-label text-md-right">{{ __('Code Postal') }}</label>

                                <div class="col-md-6">
                                    <input id="code_postal" type="text" class="form-control @error('code_postal') is-invalid @enderror" name="code_postal" value="{{ $user->code_postal }}" required autocomplete="code_postal" autofocus>

                                    @error('code_postal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-grey" style="color: #ffff;">
                                        {{ __('Modifier Compte ') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    @include('annonces.footer')
    @include('user.script')
</body>
</html>





