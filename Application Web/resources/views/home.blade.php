
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

    <!--Navigation-->
    <header>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        @include('annonces.nav')
        <!-- /.Navbar -->

    </header><br><br><br><br><br>
    <!--/.Carousel Wrapper-->
    <!-- /.Navigation -->

    <!-- Main Container -->
    @if (session('message'))
    <div class="alert alert-success" style="text-align: center">{{ session('message') }}</div>
@endif
    <div class="container ">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">Dashboard</div> --}}

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h3 style="padding-left: 180px;"> Bienvenue
                            @if (Auth::user()->genre == 'Femme')
                                Mme
                            @else
                            Mr.
                            @endif
                            {{Auth::user()->nom}} {{Auth::user()->prenom}} </h3>
                    </div>
                </div>
            </div>
        </div>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark mt-5 mb-5" style="background-color:  #e51b23;" >

            <!-- Navbar brand -->
            <a class="font-weight-bold white-text mr-4" href="#">Mes annonces</a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">

                </ul>
                <!-- Links -->

                <!-- Search form -->

                    <a class="font-weight-bold white-text mr-4" href="{{ route('annonces.create') }}">Ajouter Une Annonce </a>

            </div>
            <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->


        <div class="row pt-4">

            <div class="col-lg-9">
                <section class="section pt-4" >
                    <div class="row mb-3" >
                        @php
                            $annonces = DB::table('annonces')->where('deleted_at',NULL)->where('user_id',Auth::user()->id)->paginate(8);
                        @endphp
                        @foreach ($annonces as $a)
                        <div class="col-lg-4 col-md-12 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="{{ asset($a->image1) }}" style="width: 400px; height: 220px;" class="img-fluid" alt="">
                                    <a href="{{ route('annonces.show',$a->id) }}">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>


                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">{{$a->titre}}</a></strong></h5>
                                    @if ($a->etat_annonce == "Neuf")
                                    <span class="badge badge-success mb-2">{{$a->etat_annonce}}</span>
                                    @elseif($a->etat_annonce == "Bon")
                                    <span class="badge badge-info mb-2">{{$a->etat_annonce}}</span>
                                    @else
                                    <span class="badge badge-warning mb-2">{{$a->etat_annonce}}</span>
                                    @endif
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li><i class="fas fa-star red-text"></i></li>
                                        <li><i class="fas fa-star red-text"></i></li>
                                        <li><i class="fas fa-star red-text"></i></li>
                                        <li><i class="fas fa-star red-text"></i></li>
                                        <li><i class="fas fa-star red-text"></i></li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-right">
                                            <a class="" href="{{ route('annonces.show',$a->id) }}" data-toggle="tooltip" data-placement="top" title="Details">Consulter</a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                        @endforeach

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row justify-content-center mb-4">
                        {{ $annonces->appends(request()->input())->links()}}
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
