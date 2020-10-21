<!DOCTYPE html>
<html lang="en">
<head>
    <title>Deposer Annonce</title>
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
<body class="category-v1 hidden-sn white-skin animated">
<header>
    @include('annonces.nav')
</header>
<br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color:white; text-align: center; font-size:30px; background: linear-gradient(to right, #df0031, #8B0000);">{{ __('Deposer votre annonce ') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('annonces.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex align-items-center mt-2"><svg class="av-icon" height="32" width="32" style="fill:#B32E3F;stroke:#B32E3F;stroke-width:0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-labelledby="ErrorOutlineTitleID"><title id="ErrorOutlineTitleID">ErrorOutline Icon</title><path d="M11 15h2v2h-2v-2zm0-8h2v6h-2V7zm.99-5C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path></svg><p class="ml-2 m-0">les champs avec (<span class="req">*</span>) sont obligatoires</p></div><br>
                        <div>
                            <h4>Décrivez vos biens</h4> <br><br>
                        </div>

                        <div class="form-group row">
                            <label for="categorie" class="col-md-4 col-form-label text-md-right">{{ __(' ') }}</label>

                            <div class="col-md-6">

                                <select class="mdb-select md-form" name="categorie">
                                    <option value="" disabled selected>Choose your category <span class="req">*</span></option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->nom}}" disabled >---- {{$category->nom}} ----</option>
                                        @foreach ($category->sous_categories as $sous_category)
                                        <option value="{{ $sous_category->nom}}" {{ old('categorie') == $sous_category->nom ? 'selected' : ''}}>
                                            {{ $sous_category->nom}}
                                        </option>
                                        @endforeach
                                    @endforeach
                                </select>
                        </div>
                    </div>



                        <div class="form-group row">
                            <label for="titre" class="col-md-4 col-form-label text-md-right">{{ __('Titre de votre annonce') }}</label><span class="req">*</span>

                            <div class="col-md-6">
                                <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{ old('titre') }}" required  autocomplete="titre" autofocus>

                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="etat_annonce" class="col-md-4 col-form-label text-md-right">{{ __('Etat du neuf ') }}</label><span class="req">*</span>

                            <div class="col-md-6">
                                <!-- Material inline 1 -->
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="materialInline1" name="etat_annonce" value="Neuf" {{ old('etat_annonce') == 'Neuf' ? 'checked' : ''}}  required autocomplete="etat_annonce">
                                    <label class="form-check-label" for="materialInline1">Neuf</label>
                                </div>

                                <!-- Material inline 2 -->
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="materialInline2" name="etat_annonce" value="Bon"  {{ old('etat_annonce') == 'Bon' ? 'checked' : ''}} required autocomplete="etat_annonce">
                                    <label class="form-check-label" for="materialInline2">Bon</label>
                                </div>

                                <!-- Material inline 3 -->
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="materialInline3" name="etat_annonce" value="Moyen" {{ old('etat_annonce') == 'Moyen' ? 'checked' : ''}}  required autocomplete="etat_annonce">
                                    <label class="form-check-label" for="materialInline3">Moyen</label>
                                </div>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label><span class="req">*</span>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> <br><br>

                        <div class="form-group row">
                            <label for="Ville" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <div class="col-md-6">
                                <select class="mdb-select md-form" name="Ville">
                                    <option value="" disabled selected>Choisir votre ville <span class="req">*</span></option>

                                    <option value="" disabled >---- Tout Le Maroc ----</option>


                                    <option value="Tetouan" {{ old('Ville') == 'Tetouan' ? 'selected' : ''}}> Tetouan</option>
                                    <option value="Casablanca" {{ old('Ville') == 'Casablanca' ? 'selected' : '' }}> Casablanca</option>
                                    <option value="Agadir" {{ old('Ville') == 'Agadir' ? 'selected' : '' }}> Agadir</option>
                                    <option value="Al Hoceima" {{ old('Ville') == 'Al Hoceima' ? 'selected' : '' }}> Al Hoceima</option>
                                    <option value="Béni Mellal" {{ old('Ville') == 'Béni Mellal' ? 'selected' : '' }}> Béni Mellal</option>
                                    <option value="Errachidia" {{ old('Ville') == 'Errachidia' ? 'selected' : '' }}> El Jadida</option>
                                    <option value="Errachidia" {{ old('Ville') == 'Errachidia' ? 'selected' : '' }}> Errachidia</option>
                                    <option value="Fès" {{ old('Ville') == 'Fès' ? 'selected' : '' }}> Fès</option>
                                    <option value="Kénitra" {{ old('Ville') == 'Kénitra' ? 'selected' : '' }}> Kénitra</option>
                                    <option value="Khénifra" {{ old('Ville') == 'Khénifra' ? 'selected' : '' }}> Khénifra</option>
                                    <option value="Khouribga" {{ old('Ville') == 'Khouribga' ? 'selected' : '' }}> Khouribga</option>
                                    <option value="Larache" {{ old('Ville') == 'Larache' ? 'selected' : '' }}> Larache</option>
                                    <option value="Marrakech" {{ old('Ville') == 'Marrakech' ? 'selected' : '' }}> Marrakech</option>
                                    <option value="Meknès" {{ old('Ville') == 'Meknès' ? 'selected' : '' }}> Meknès</option>
                                    <option value="Nador" {{ old('Ville') == 'Nador' ? 'selected' : '' }}> Nador</option>
                                    <option value="Ouarzazate" {{ old('Ville') == 'Ouarzazate' ? 'selected' : '' }}> Ouarzazate</option>
                                    <option value="Oujda" {{ old('Ville') == 'Oujda' ? 'selected' : '' }}> Oujda</option>
                                    <option value="Rabat" {{ old('Ville') == 'Rabat' ? 'selected' : '' }}> Rabat</option>
                                    <option value="Safi" {{ old('Ville') == 'Safi' ? 'selected' : '' }}> Safi</option>
                                    <option value="Settat" {{ old('Ville') == 'Settat' ? 'selected' : '' }}> Settat</option>
                                    <option value="Salé" {{ old('Ville') == 'Salé' ? 'selected' : '' }}> Salé</option>
                                    <option value="Tanger" {{ old('Ville') == 'Tanger' ? 'selected' : '' }}> Tanger</option>
                                    <option value="Taza" {{ old('Ville') == 'Taza' ? 'selected' : '' }}> Taza</option>
                                    <option value="Tétouan" {{ old('Ville') == 'Tétouan' ? 'selected' : '' }}> Tétouan</option>

                                </select>

                            </div>
                        </div>
                        <br><br>

                        <h4> Le prix</h4>

                       <br>
                        <div class="form-group row">
                            <label for="prix" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label><span class="req">*</span> <br>
                            <div class="col-md-6">
                                <div class="input-group mb-2 mr-sm-2">


                                <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" required autocomplete="prix" autofocus>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Dhs / J</div>
                                  </div>
                            </div>
                                @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="caution" class="col-md-4 col-form-label text-md-right">{{ __('Caution') }}</label><span class="req">*</span>

                            <div class="col-md-6">
                                <div class="input-group mb-2 mr-sm-2">
                                <input id="caution" type="text" class="form-control @error('caution') is-invalid @enderror" name="caution" value="{{ old('caution') }}" required autocomplete="caution" autofocus>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Dhs </div>
                                  </div>
                                </div>
                                @error('caution')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br><br>

                        <div class="form-group row">
                            <label for="debut" class="col-md-4 col-form-label text-md-right">{{ __('Debut') }}</label><span class="req">*</span> <br>
                            <div class="col-md-6">
                                <input id="debut" type="date" class="form-control @error('debut') is-invalid @enderror" name="debut" value="{{ old('debut') }}" required autocomplete="debut" autofocus>

                                @error('debut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><br><br>
                            <label for="fin" class="col-md-4 col-form-label text-md-right">{{ __('Fin') }}</label><span class="req">*</span> <br>
                            <div class="col-md-6">
                                <input id="fin" type="date" class="form-control @error('fin') is-invalid @enderror" name="fin" value="{{ old('fin') }}" required autocomplete="fin" autofocus>

                                @error('fin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><br>

                        </div><br><br>

                        <div>
                            <h4> Option annonce <span class="req">*</span></h4>
                        </div>
                        <br><br>


                        <div class="form-group row">


                            <div class="col-md-6" style="padding-left: 60px">

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="materialGroupExample1" name="cas_premium" value="gratuit" {{ old('cas_premium') == 'gratuit' ? 'checked' : ''}} required autocomplete="cas_premium" >
                                    <label class="form-check-label" for="materialGroupExample1" style="padding-left:40px ;">Gratuit</label>
                                </div><br><br>

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="materialGroupExample2" name="cas_premium" value="semaine" {{ old('cas_premium') == 'semaine' ? 'checked' : ''}} required autocomplete="cas_premium"  >
                                    <label class="form-check-label" for="materialGroupExample2" style="padding-left:40px; ">Premium / une semaine</label>
                                </div><br><br>

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="materialGroupExample3" name="cas_premium" value="15j" {{ old('cas_premium') == '15j' ? 'checked' : ''}} required autocomplete="cas_premium" >
                                    <label class="form-check-label" for="materialGroupExample3" style="padding-left:40px; ">Premium / 15 jours</label>
                                </div><br><br>

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="materialGroupExample4" name="cas_premium" value="mois" {{ old('cas_premium') == 'mois' ? 'checked' : ''}} required autocomplete="cas_premium" >
                                    <label class="form-check-label" for="materialGroupExample4" style="padding-left:40px; ">Premium / un mois</label>
                                </div><br><br>

                            </div>
                        </div>

                        <div>
                            <h4> Images </h4>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="container">
                                <div class="row">
                                  <div class="col">

                            <label for="image1" class="col-md-4 col-form-label text-md-right">{{ __('Image 1') }}</label><span class="req">*</span>
                              <input type="file" name="image1"  onchange="document.getElementById('image1').src = window.URL.createObjectURL(this.files[0])">
                                <img id="image1"  class="ml-4" required width="90" height="90" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) ;"/>
                                <div class="container">
                                    <p class="ml-3" style="color:rgba(40, 29, 194, 0.493)"><em>Photo principale</em> </p>
                                </div>
                            </div>
                            <div class="col">

                            <label for="image2" class="col-md-4 col-form-label text-md-right">{{ __(' Image 2') }}</label><span class="req">*</span>

                            <input type="file" name="image2" required onchange="document.getElementById('image2').src = window.URL.createObjectURL(this.files[0])">
                                <img  id="image2"  class="ml-4" width="90" height="90" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) ;"/>
                              </div>
                                </div>
                        </div>
                        </div>

                        <div class="form-group row">
                            <div class="container">
                            <div class="row">
                                <div class="col">

                            <label for="image3" class="col-md-4 col-form-label text-md-right">{{ __(' Image 3') }}</label>
                            <input type="file" name="image3" onchange="document.getElementById('image3').src = window.URL.createObjectURL(this.files[0])">
                            <img id="image3"   class="ml-4" width="90" height="90" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) ;"/>

                                </div>

                                <div class="col">

                            <label for="image4" class="col-md-4 col-form-label text-md-right">{{ __('Image 4') }}</label>
                            <input type="file" name="image4" onchange="document.getElementById('image4').src = window.URL.createObjectURL(this.files[0])" >
                            <img id="image4" width="90" height="90" class="ml-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) ;"/>


                        </div>
                        </div>
                    </div>
                  </div>
<br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Deposer Annonce') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br>
@include('annonces.footer')
@include('annonces.script')
</body>

</html>

