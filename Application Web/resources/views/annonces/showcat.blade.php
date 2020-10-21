<!DOCTYPE html>
<html lang="en">

<head>
    @include('annonces.header')
    <title>KriObjet</title>
    <style type="text/css">
        .multiple-select-dropdown li [type=checkbox]+label {
            height: 1rem;
        }
    </style>

</head>

<body class="category-v1 hidden-sn white-skin animated">

    <header>
        @include('annonces.nav')
    </header>
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view h-100" >
                    <img class="d-block w-lg-100" src="{{ asset('/images/b1.jpg') }}" style="height: 500px;"  alt="First slide">
                </div>
            </div>
            <div class="carousel-item h-100">
                <div class="view h-100">
                    <img class="d-block w-lg-100" src="{{ asset('/images/b2.jpg') }}" style="height: 500px;"  alt="Second slide">
                </div>
            </div>
            <div class="carousel-item">
                <div class="view h-100">
                    <img class="d-block w-lg-100" src="{{ asset('/images/b3.jpg') }}" style="height: 500px;" alt="Third slide">
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

    @if (session('message'))
    <div class="alert alert-success" style="text-align: center">{{ session('message') }}</div>
@endif
    <div class="container ">

        <nav class="navbar navbar-expand-lg navbar-dark  mt-5 mb-5" style="background-color:  #e51b23;" >

            <a class="font-weight-bold white-text mr-4" href="#">Produits</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <ul class="navbar-nav mr-auto"></ul>

                <form class="search-form" role="search" action="/search" method="GET">
                    <div class="form-group md-form my-0 waves-light">
                        <input type="text" class="form-control" placeholder="Recherche" name="search">
                    </div>
                </form>
            </div>

        </nav>


        <div class="row pt-4">

            <div class="col-lg-3">
                <div class="">

                    <div class="row">

                        <div class="col-md-6 col-lg-12 mb-5">
                            <h5 class="font-weight-bold dark-grey-text"><strong>Categories</strong></h3>
                                <div class="divider"></div>
                                <div class="panel-group category-products" id="accordian">
                                    <?php
                                    $cat=DB::table('categories')->get();
                                ?>
                                    @foreach($cat as $category)
                                        <?php
                                            $scat=DB::table('sous_categories')->where('category_id',$category->id)->get();
                                        ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">

                                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear{{$category->id}}">
                                                            <i class="fa fa-plus black-text" aria-hidden="true"></i>
                                                            <h3 style="color: #000000;" class="btn btn-sm" style="color: #c1bdbd;" >{{$category->nom}}</h3>
                                                    </a>

                                                </h4>

                                            </div>
                                                <div id="sportswear{{$category->id}}" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ul>
                                                            @foreach($scat as $sub_category)
                                                                <a href="{{ route('listbycat', $sub_category->nom) }}" ><span class="badge badge-dark">{{$sub_category->nom}}</span> </a>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                        </div>
                                    @endforeach
                                </div>

                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-9">
                <section class="section pt-4">
                    <?php
                    //$at = DB::table('annonces')->orderbydesc('date_fin_premium')->where('categorie',request()->route('nom'))->paginate(6);

             ?>
                    <div class="row mb-3">

                        <!--Grid column-->
                        @foreach ($annonce as $a)
                        <div class="col-lg-4 col-md-12 mb-4">

                            <div class="card card-ecommerce">

                                <div class="view overlay">
                                    <img src="{{ asset($a->image1) }}" style="width: 400px; height: 220px;" class="img-fluid" alt="">
                                    <a href="{{ route('annonces.show',$a->id) }}">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>


                                <div class="card-body">

                                    <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">{{$a->titre}}</a></strong></h5>
                                    @if ($a->etat_annonce == "Neuf")
                                    <span class="badge badge-success mb-2">{{$a->etat_annonce}}</span>
                                    @elseif($a->etat_annonce == "Bon")
                                    <span class="badge badge-info mb-2">{{$a->etat_annonce}}</span>
                                    @else
                                    <span class="badge badge-warning mb-2">{{$a->etat_annonce}}</span>
                                    @endif

                                    <br>
                                    <span> <strong>{{$a->Ville}}</strong></span> <br>
                                    <span class="badge badge-success" style="font-size: 15px;" >{{$a->debut}}</span> à <span style="font-size: 15px;" class="badge badge-success" >{{$a->fin}}</span> </p>

                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left"><strong>{{$a->prix}} DH</strong></span>
                                            <span class="float-right">
                                            <a class="" href="{{ route('annonces.show',$a->id) }}" data-toggle="tooltip" data-placement="top" title="Details"><i class="fas fa-shopping-cart ml-3"></i></a>
                                            </span>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        @endforeach

                    </div>
                    <div class="row justify-content-center mb-4">
                        {{ $annonce->appends(request()->input())->links()}}
                    </div>
                </section>
                <!-- /.Products Grid -->

            </div>
            <!-- /.Content -->

        </div>

    </div>
    <!-- /.Main Container -->
    </main>
    <!--Footer-->
        @include('annonces.footer')
    <!--/.Footer-->

@include('annonces.script')


</body>

</html>
