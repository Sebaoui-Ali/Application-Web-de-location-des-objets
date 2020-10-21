
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Detail </title>

    @include('annonces.header')


</head>

<body class="product-v2 hidden-sn white-skin animated">

    <header>
        @include('annonces.nav')
    </header>

    <div class="container mt-5 pt-3">

        <section id="productDetails" class="pb-5">

            <div class="card mt-5 hoverable">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="row mx-2">

                            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4" data-ride="carousel">

                                <div class="carousel-inner text-center text-md-left" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="{{ asset($annonce->image1) }}"  style="width: 600px; height: 300px;" alt="First slide" class="img-fluid">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset($annonce->image2) }}"  style="width: 600px; height: 300px;" alt="Second slide" class="img-fluid">
                                    </div>
                                    @if($annonce->image3 != NULL )
                                    <div class="carousel-item">
                                        <img src="{{ asset($annonce->image3) }}"  style="width: 600px; height: 300px;" alt="Third slide" class="img-fluid">
                                    </div>
                                    @endif
                                    @if($annonce->image4 != NULL )
                                    <div class="carousel-item">
                                        <img src="{{ asset($annonce->image4) }}"  style="width: 600px; height: 300px;" alt="Third slide" class="img-fluid">
                                    </div>
                                    @endif



                                </div>

                                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                        </div>

                        <div class="row mb-4">

                            <div class="col-md-12">

                                <div id="mdb-lightbox-ui"></div>

                                <div class="mdb-lightbox no-margin">

                                    <figure class="col-md-4">
                                        <a href="{{ asset($annonce->image1) }}" data-size="1600x1067">
                                            <img src="{{ asset($annonce->image1) }}" class="img-fluid" style="width: 300px; height: 100px;">
                                        </a>
                                    </figure>

                                    <figure class="col-md-4">
                                        <a href="{{ asset($annonce->image2) }}" data-size="1600x1067">
                                            <img src="{{ asset($annonce->image2) }}" class="img-fluid" style="width: 300px; height: 100px;">
                                        </a>
                                    </figure>

                                    @if($annonce->image3 != NULL)
                                    <figure class="col-md-4">
                                        <a href="{{ asset($annonce->image3) }}" data-size="1600x1067">
                                            <img src="{{ asset($annonce->image3) }}" class="img-fluid" style="width: 300px; height: 100px;">
                                        </a>
                                    </figure>
                                    @endif

                                    @if($annonce->image4 != NULL)
                                    <figure class="col-md-4">
                                        <a href="{{ asset($annonce->image4) }}" data-size="1600x1067">
                                            <img src="{{ asset($annonce->image4) }}" class="img-fluid" style="width: 300px; height: 100px;">
                                        </a>
                                    </figure>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $use = DB::table('users')->where('id',$annonce->user_id)->first();
                    @endphp
                    <div class="col-lg-5 mr-3 text-center text-md-left">
                        <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                            <strong>{{$annonce->titre}} </strong>
                        </h2><br>
                        <h4 class="h4-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                            Par : {{$use->prenom}} {{$use->nom}}
                        </h4>
                        @if ($annonce->etat_annonce == "Neuf")
                            <span class="badge badge-success product mb-4 ml-xl-0 ml-4">{{$annonce->etat_annonce}}</span>
                        @elseif($annonce->etat_annonce == "Bon")
                            <span class="badge badge-info product mb-4 ml-xl-0 ml-4">{{$annonce->etat_annonce}}</span>
                        @else
                            <span class="badge badge-warning product mb-4 ml-xl-0 ml-4">{{$annonce->etat_annonce}}</span>
                        @endif
                        </strong>
                        </h2>
                        <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                            <span class="red-text font-weight-bold">
                                <strong>{{$annonce->prix}} DH / J</strong>
                            </span>
                        </h3>

                        <p class="ml-xl-0 ml-4">{{$annonce->description}}
                        </p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Ville : </strong>{{$annonce->Ville}} </p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Caution : </strong>{{$annonce->caution}} DH</p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Categorie : </strong>{{$annonce->categorie}}</p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Disponibilite : </strong>Du <span class="badge badge-success" style="font-size: 15px;" >{{$annonce->debut}}</span> a <span style="font-size: 15px;" class="badge badge-success" >{{$annonce->fin}}</span> </p>

                    </div>
                </div>
            </div>

        </section>
        <section id="reviews" class="pb-5 mt-4">

            <hr>
            <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
                <strong>Reservation </strong>
            </h4>
            <hr class="mb-5">
            @isset(Auth::user()->id)
            @if($annonce->user_id == Auth::user()->id || Auth::user()->is_admin==1 )

            @else
            <h3 style="text-align: center"><em> <i class="fas fa-shopping-basket"></i>  Vous pouvez passer votre demande de location ici </em></h3>
        <form method="POST" action="{{ route('demande.store',$annonce->id) }}"  enctype="multipart/form-data" id="userForm">
            @csrf
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fa fa-calendar red-text prefix grey-text"></i>
            <input type="date" name="debut" id="debut" value="{{old('debut')}}" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Date de Debut</label>
            @error('debut') <span class="text-danger">{{ $message }}</span> @enderror
          </div>

          <div class="md-form mb-4">
            <i class="fa fa-calendar red-text prefix grey-text"></i>
            <input type="date" name="fin" id="fin" value="{{old('fin')}}" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Date de Fin</label>
            @error('fin') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="md-form">
            <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror md-textarea" name="description" value="" rows="3" required autocomplete="description" autofocus> {{ old('description') }}</textarea>
            <label for="description">{{ __('Description') }}</label>
                @error('description')
                    <span class="text-danger" >
                        {{ $message }}
                    </span>
                @enderror
            </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-default">Reserver</button>
        </div>
    </form>
            @endif

            @endisset


        </section>
        <section id="reviews" class="pb-5 mt-4">

            <hr>
            <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
                <strong>Evaluation Objet</strong>
            </h4>
            <hr class="mb-5">

            @php
                $comment = DB::table('commentaires')->where('annonce_id',request()->route('id'))->get();
            @endphp
            @foreach ($comment as $c)
            @php
                $user = DB::table('users')->where('id',$c->user_id)->first();
            @endphp
            <div class="comments-list text-center text-md-left">

                <div class="row mb-5">
                    <div class="col-sm-2 col-12 mb-3">
                        <img src="{{ asset($user->image) }}" alt="sample image" class="avatar rounded-circle z-depth-1-half">
                    </div>

                    <div class="col-sm-10 col-12">
                        <a>
                            <h5 class="user-name font-weight-bold">{{$user->prenom}} {{$user->nom}} </h5>
                        </a>
                        <!-- Rating -->
                        <ul class="rating">
                            @if($c->note == 1)
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            @elseif($c->note == 2)
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            @elseif($c->note == 3)
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            @elseif($c->note == 4)
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            @else

                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            @endif
                        </ul>
                        <div class="card-data">
                            <ul class="list-unstyled mb-1">
                                <li class="comment-date font-small grey-text">
                                    <i class="far fa-clock-o"></i> {{$c->created_at}}</li>
                            </ul>
                        </div>
                        <p class="dark-grey-text article">{{$c->message}}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </section>


        <section id="reviews" class="pb-5 mt-4">

            <hr>
            <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
                <strong> Evaluation Client</strong>
            </h4>
            <hr class="mb-5">

            @php
                $commen = DB::table('commentaire_clients')->where('user_id_client',$annonce->user_id)->get();
            @endphp
            @foreach ($commen as $c)
            @php
                $user = DB::table('users')->where('id',$c->user_id)->first();
            @endphp
            <div class="comments-list text-center text-md-left">

                <div class="row mb-5">
                    <div class="col-sm-2 col-12 mb-3" style="padding-left: 50px;">
                        <img src="{{ asset($user->image) }}" alt="sample image" class="avatar rounded-circle z-depth-1-half">
                    </div>
                    <div class="col-sm-10 col-12">
                        <a>
                            <h5 class="user-name font-weight-bold">{{$user->prenom}} {{$user->nom}} </h5>
                        </a>
                        <!-- Rating -->
                        <ul class="rating">
                            @if($c->note == 1)
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            @elseif($c->note == 2)
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            @elseif($c->note == 3)
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            @elseif($c->note == 4)
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            @else

                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fas fa-star blue-text"></i>
                            </li>
                            @endif
                        </ul>
                        <div class="card-data">
                            <ul class="list-unstyled mb-1">
                                <li class="comment-date font-small grey-text">
                                    <i class="far fa-clock-o"></i> {{$c->created_at}}</li>
                            </ul>
                        </div>
                        <p class="dark-grey-text article">{{$c->message}}</p>
                    </div>
                    <!--/.Content column-->
                </div>
                @endforeach
                <!--/.First row-->
            </div>
            <!--/.Main wrapper-->
        </section>
        <!-- /.Product Reviews -->


    </div>

    </div>
    <!-- /.Main Container -->


    <!--Footer-->
    @include('annonces.footer')
    <!--/.Footer-->


    <!-- SCRIPTS -->

    @include('annonces.script')


    <script type="text/javascript">
        /* WOW.js init */
        new WOW().init();

        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });
    </script>
    <script>
        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("../../mdb-addons/mdb-lightbox-ui.html");
        });
    </script>
    <script>
            // SideNav Initialization
            $(".button-collapse").sideNav();
    </script>
</body>

</html>
