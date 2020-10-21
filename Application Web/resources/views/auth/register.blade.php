

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inscription</title>
    @include('annonces.header')
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">

    <link href="{{asset('frontEnd/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/theme.css') }}">
    <style>
        .req{
            color:#d13649;
        }
    </style>
</head>
<body>
    @include('annonces.nav')
    <br><br><br><br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="color:white; text-align: center; font-size:30px; background: linear-gradient(to right, #df0031, #8B0000);">{{ __('Inscription') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="d-flex align-items-center mt-2"><svg class="av-icon" height="32" width="32" style="fill:#B32E3F;stroke:#B32E3F;stroke-width:0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-labelledby="ErrorOutlineTitleID"><title id="ErrorOutlineTitleID">ErrorOutline Icon</title><path d="M11 15h2v2h-2v-2zm0-8h2v6h-2V7zm.99-5C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path></svg><p class="ml-2 m-0">les champs avec (<span class="req">*</span>) sont obligatoires</p></div><br>
                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label><span class="req">*</span>

                                <div class="col-md-6">
                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label><span class="req">*</span>

                                <div class="col-md-6">
                                    <input id="prenom" type="text" class="form-control @error ('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="genre" class="col-md-4 col-form-label text-md-right">{{ __('Genre') }}</label><span class="req">*</span>

                                <div class="col-md-6">

                                      <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="f" name="genre" value="Femme" {{ old('genre') == 'Femme' ? 'checked' : ''}}>
                                        <label class="form-check-label" for="f">Femme</label>
                                      </div>

                                      <!-- Material inline 3 -->
                                      <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="h" name="genre" value="Homme" {{ old('genre') == 'Homme' ? 'checked' : ''}}>
                                        <label class="form-check-label" for="h">Homme</label>
                                      </div>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label><span class="req">*</span>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Tel') }}</label><span class="req">*</span>
                                <div class="col-md-6">
                                    <input id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>

                                    @error('tel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __(' ') }}</label>

                                <div class="col-md-6">
                                    <select class="mdb-select md-form" name="ville">
                                        <option value="" disabled selected>Choisir votre ville <span class="req">*</span> </option>

                                        <option value="" disabled >---- Tout Le Maroc ----</option>


                                        <option value="Tetouan" {{ old('ville') == 'Tetouan' ? 'selected' : ''}}> Tetouan</option>
                                        <option value="Casablanca" {{ old('ville') == 'Casablanca' ? 'selected' : '' }}> Casablanca</option>
                                        <option value="Agadir" {{ old('ville') == 'Agadir' ? 'selected' : '' }}> Agadir</option>
                                        <option value="Al Hoceima" {{ old('ville') == 'Al Hoceima' ? 'selected' : '' }}> Al Hoceima</option>
                                        <option value="Béni Mellal" {{ old('ville') == 'Béni Mellal' ? 'selected' : '' }}> Béni Mellal</option>
                                        <option value="Errachidia" {{ old('ville') == 'Errachidia' ? 'selected' : '' }}> El Jadida</option>
                                        <option value="Errachidia" {{ old('ville') == 'Errachidia' ? 'selected' : '' }}> Errachidia</option>
                                        <option value="Fès" {{ old('ville') == 'Fès' ? 'selected' : '' }}> Fès</option>
                                        <option value="Kénitra" {{ old('ville') == 'Kénitra' ? 'selected' : '' }}> Kénitra</option>
                                        <option value="Khénifra" {{ old('ville') == 'Khénifra' ? 'selected' : '' }}> Khénifra</option>
                                        <option value="Khouribga" {{ old('ville') == 'Khouribga' ? 'selected' : '' }}> Khouribga</option>
                                        <option value="Larache" {{ old('ville') == 'Larache' ? 'selected' : '' }}> Larache</option>
                                        <option value="Marrakech" {{ old('ville') == 'Marrakech' ? 'selected' : '' }}> Marrakech</option>
                                        <option value="Meknès" {{ old('ville') == 'Meknès' ? 'selected' : '' }}> Meknès</option>
                                        <option value="Nador" {{ old('ville') == 'Nador' ? 'selected' : '' }}> Nador</option>
                                        <option value="Ouarzazate" {{ old('ville') == 'Ouarzazate' ? 'selected' : '' }}> Ouarzazate</option>
                                        <option value="Oujda" {{ old('ville') == 'Oujda' ? 'selected' : '' }}> Oujda</option>
                                        <option value="Rabat" {{ old('ville') == 'Rabat' ? 'selected' : '' }}> Rabat</option>
                                        <option value="Safi" {{ old('ville') == 'Safi' ? 'selected' : '' }}> Safi</option>
                                        <option value="Settat" {{ old('ville') == 'Settat' ? 'selected' : '' }}> Settat</option>
                                        <option value="Salé" {{ old('ville') == 'Salé' ? 'selected' : '' }}> Salé</option>
                                        <option value="Tanger" {{ old('ville') == 'Tanger' ? 'selected' : '' }}> Tanger</option>
                                        <option value="Taza" {{ old('ville') == 'Taza' ? 'selected' : '' }}> Taza</option>
                                        <option value="Tétouan" {{ old('ville') == 'Tétouan' ? 'selected' : '' }}> Tétouan</option>

                                    </select>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="code_postal" class="col-md-4 col-form-label text-md-right">{{ __('Code Postal') }}</label><span class="req">*</span>

                                <div class="col-md-6">
                                    <input id="code_postal" type="text" class="form-control @error('code_postal') is-invalid @enderror" name="code_postal" value="{{ old('code_postal') }}" required autocomplete="code_postal" autofocus>

                                    @error('code_postal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label><span class="req">*</span>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label><span class="req">*</span>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label><span class="req">*</span>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Votre Image de Profile') }}</label>
                                <img id="blah" width="90" height="90"/>
                                <input type="file" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            </div> <br>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Inscription') }}
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
    @include('annonces.script')
</body>
</html>


