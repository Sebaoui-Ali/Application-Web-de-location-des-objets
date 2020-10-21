
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Modifier Annonce</title>
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
<header>
    @include('annonces.nav')
</header>
<br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color:white; text-align: center; font-size:30px; background: linear-gradient(to right, #df0031, #8B0000);">{{ __('Modifier Annonce ') }}</div>

                <div class="card-body">
                    <form action="{{ route('updateannonce', $annonce->id) }}" method="POST">
                        @method('PUT')
                            {{ csrf_field() }}

                        <div>
                            <h4>Décrivez vos biens</h4> <br><br>
                        </div>

                        <div class="form-group row">
                            <label for="categorie" class="col-md-4 col-form-label text-md-right">{{ __(' ') }}</label>

                            <div class="col-md-6">

                                <select class="mdb-select md-form" name="categorie">
                                    <option value="" disabled selected>Choose your category</option>
                                    @php
                                        $categories = DB::table('categories')->get();
                                    @endphp
                                    @foreach ($categories as $category)
                                        @php
                                            $cat =DB::table('sous_categories')->where('category_id','like',$category->id)->get();
                                        @endphp
                                    <option value="{{$category->nom}}" disabled >---- {{$category->nom}} ----</option>
                                        @foreach ($cat as $sous_category)
                                        <option value="{{ $sous_category->nom}}" {{ $annonce->categorie == $sous_category->nom ? 'selected' : ''}} >
                                            {{ $sous_category->nom}}
                                        </option>
                                        @endforeach
                                    @endforeach
                                </select>
                                {{-- <label class="mdb-main-label">Categorie</label> --}}
                        </div>
                    </div>



                        <div class="form-group row">
                            <label for="titre" class="col-md-4 col-form-label text-md-right">{{ __('Titre de votre annonce') }}</label>

                            <div class="col-md-6">
                                <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{ $annonce->titre }}" required  autocomplete="titre" autofocus>

                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="etat_annonce" class="col-md-4 col-form-label text-md-right">{{ __('Etat du neuf ') }}</label>

                            <div class="col-md-6">
                                <!-- Material inline 1 -->
                                {{-- @if ($annonce->etat_annonce == 'Neuf') --}}
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="materialInline1" name="etat_annonce" checked value="Neuf" {{ $annonce->etat_annonce == 'Neuf' ? 'checked' : ''}} required autocomplete="etat_annonce">
                                    <label class="form-check-label" for="materialInline1">Neuf</label>
                                </div>

                                <!-- Material inline 2 -->
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="materialInline2" name="etat_annonce" value="Bon" {{ $annonce->etat_annonce == 'Bon' ? 'checked' : ''}} required autocomplete="etat_annonce">
                                    <label class="form-check-label" for="materialInline2">Bon</label>
                                </div>

                                <!-- Material inline 3 -->
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="materialInline3" name="etat_annonce" value="Moyen" {{ $annonce->etat_annonce == 'Moyen' ? 'checked' : ''}} required autocomplete="etat_annonce">
                                    <label class="form-check-label" for="materialInline3">Moyen</label>
                                </div>
                                {{-- @elseif($annonce->etat_annonce == 'Bon')
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="materialInline1" name="etat_annonce" value="{{ old('etat_annonce') }} Neuf" required autocomplete="etat_annonce">
                                    <label class="form-check-label" for="materialInline1">Neuf</label>
                                </div>

                                <!-- Material inline 2 -->
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="materialInline2" name="etat_annonce" checked value="{{ old('etat_annonce') }} Bon" required autocomplete="etat_annonce">
                                    <label class="form-check-label" for="materialInline2">Bon</label>
                                </div>

                                <!-- Material inline 3 -->
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="materialInline3" name="etat_annonce" value="{{ old('etat_annonce') }} Moyen" required autocomplete="etat_annonce">
                                    <label class="form-check-label" for="materialInline3">Moyen</label>
                                </div>
                                @else
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="materialInline1" name="etat_annonce" value="{{ old('etat_annonce') }} Neuf" required autocomplete="etat_annonce">
                                    <label class="form-check-label" for="materialInline1">Neuf</label>
                                </div>

                                <!-- Material inline 2 -->
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="materialInline2" name="etat_annonce" value="{{ old('etat_annonce') }} Bon" required autocomplete="etat_annonce">
                                    <label class="form-check-label" for="materialInline2">Bon</label>
                                </div>

                                <!-- Material inline 3 -->
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="materialInline3" name="etat_annonce" checked value="{{ old('etat_annonce') }} Moyen" required autocomplete="etat_annonce">
                                    <label class="form-check-label" for="materialInline3">Moyen</label>
                                </div> --}}
                                {{-- @endif --}}
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $annonce->description }}" required autocomplete="description" autofocus>{{$annonce->description}}</textarea>

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
                                    <option value="" disabled selected>Choisir votre ville</option>

                                    <option value="" disabled >---- Tout Le Maroc ----</option>


                                    <option value="Tetouan" {{ $annonce->Ville == 'Tetouan' ? 'selected' : ''}}> Tetouan</option>
                                    <option value="Casablanca" {{ $annonce->Ville == 'Casablanca' ? 'selected' : '' }}> Casablanca</option>
                                    <option value="Agadir" {{ $annonce->Ville == 'Agadir' ? 'selected' : '' }}> Agadir</option>
                                    <option value="Al Hoceima" {{ $annonce->Ville == 'Al Hoceima' ? 'selected' : '' }}> Al Hoceima</option>
                                    <option value="Béni Mellal" {{ $annonce->Ville == 'Béni Mellal' ? 'selected' : '' }}> Béni Mellal</option>
                                    <option value="Errachidia" {{ $annonce->Ville == 'Errachidia' ? 'selected' : '' }}> El Jadida</option>
                                    <option value="Errachidia" {{ $annonce->Ville == 'Errachidia' ? 'selected' : '' }}> Errachidia</option>
                                    <option value="Fès" {{ $annonce->Ville == 'Fès' ? 'selected' : '' }}> Fès</option>
                                    <option value="Kénitra" {{ $annonce->Ville == 'Kénitra' ? 'selected' : '' }}> Kénitra</option>
                                    <option value="Khénifra" {{ $annonce->Ville == 'Khénifra' ? 'selected' : '' }}> Khénifra</option>
                                    <option value="Khouribga" {{ $annonce->Ville == 'Khouribga' ? 'selected' : '' }}> Khouribga</option>
                                    <option value="Larache" {{ $annonce->Ville == 'Larache' ? 'selected' : '' }}> Larache</option>
                                    <option value="Marrakech" {{ $annonce->Ville == 'Marrakech' ? 'selected' : '' }}> Marrakech</option>
                                    <option value="Meknès" {{ $annonce->Ville == 'Meknès' ? 'selected' : '' }}> Meknès</option>
                                    <option value="Nador" {{ $annonce->Ville == 'Nador' ? 'selected' : '' }}> Nador</option>
                                    <option value="Ouarzazate" {{ $annonce->Ville == 'Ouarzazate' ? 'selected' : '' }}> Ouarzazate</option>
                                    <option value="Oujda" {{ $annonce->Ville == 'Oujda' ? 'selected' : '' }}> Oujda</option>
                                    <option value="Rabat" {{ $annonce->Ville == 'Rabat' ? 'selected' : '' }}> Rabat</option>
                                    <option value="Safi" {{ $annonce->Ville == 'Safi' ? 'selected' : '' }}> Safi</option>
                                    <option value="Settat" {{ $annonce->Ville == 'Settat' ? 'selected' : '' }}> Settat</option>
                                    <option value="Salé" {{ $annonce->Ville == 'Salé' ? 'selected' : '' }}> Salé</option>
                                    <option value="Tanger" {{ $annonce->Ville == 'Tanger' ? 'selected' : '' }}> Tanger</option>
                                    <option value="Taza" {{ $annonce->Ville == 'Taza' ? 'selected' : '' }}> Taza</option>
                                    <option value="Tétouan" {{ $annonce->Ville == 'Tétouan' ? 'selected' : '' }}> Tétouan</option>

                                </select>

                            </div>
                        </div>
                        <br><br>


                        <h4> Le prix</h4>

                       <br>
                        <div class="form-group row">
                            <label for="prix" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label> <br>
                            <div class="col-md-6">

                                <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ $annonce->prix }}" required autocomplete="prix" autofocus>

                                @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="caution" class="col-md-4 col-form-label text-md-right">{{ __('Caution') }}</label>

                            <div class="col-md-6">
                                <input id="caution" type="text" class="form-control @error('caution') is-invalid @enderror" name="caution" value="{{ $annonce->caution }}" required autocomplete="caution" autofocus>

                                @error('caution')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br><br>
                        <h4> Disponibilite</h4>
                        <br>

                        <div class="form-group row">
                            <label for="debut" class="col-md-4 col-form-label text-md-right">{{ __('Debut') }}</label> <br>
                            <div class="col-md-6">
                                <input id="debut" type="date" class="form-control @error('debut') is-invalid @enderror" name="debut" value="{{ $annonce->debut }}" required autocomplete="debut" autofocus>

                                @error('debut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><br><br>
                            <label for="fin" class="col-md-4 col-form-label text-md-right">{{ __('Fin') }}</label> <br>
                            <div class="col-md-6">
                                <input id="fin" type="date" class="form-control @error('fin') is-invalid @enderror" name="fin" value="{{ $annonce->fin }}" required autocomplete="fin" autofocus>

                                @error('fin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><br>

                        </div><br><br>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modifier Annonce') }}
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




