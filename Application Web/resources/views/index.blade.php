<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Kriobjet</title>
<link rel="icon" href="{{url('AboutDesign/logoo.png')}}" type="image/png">
<link href="{{url('AboutDesign/css/bootstrap.min.css')}}" rel="stylesheet" >
<link href="{{url('AboutDesign/css/style.css')}}" rel="stylesheet" >
<link href="{{url('AboutDesign/css/font-awesome.css')}}" rel="stylesheet" >
<link href="{{url('AboutDesign/css/animate.css')}}" rel="stylesheet">

</head>
<body>

<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo"><a href="{{ url('/') }}"><img style="width:150px; height:40px;" src="{{url('AboutDesign/img/logo1.png')}}" alt="logo"></a></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li class="active"><a href="/" class="scroll-link">Acceuil</a></li>
			  <li><a href="#aboutUs" class="scroll-link">Qui sommes nous?</a></li>
			  <li><a href="#service" class="scroll-link">Nos Prévilèges</a></li>
			  <li><a href="#clients" class="scroll-link">Nos Partenaires</a></li>
			  <li><a href="#team" class="scroll-link">Equipe</a></li>
			  <li><a href="#contact" class="scroll-link">Contact</a></li>
            <li><a href="{{route('login')}}" class="scroll-link">Connexion</a></li>

			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section-->

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated">

              <h2> Premier Site Marocain de <strong>Location</strong> d'Objets</h2>
              <p>Avez vous des Objets que vous n'utilisez que rarement?
              <br>C'est l'occasion de les mettre en location et gagner de l'argent !
              <br>Vous pouvez également aujourd'hui louer l'objet que vous desirez !</p>
              <a href="#aboutUs" class="read_more2">Lire la suite</a> </div>
          </div>
          <div class="col-lg-7 col-sm-5">
			<img  style="width:400px; height:200px; margin-top:150px; margin-left:50%;" src="{{url('AboutDesign/img/aboutimg.jpg')}}" class="zoomIn wow animated" alt="" />
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section-->

<section id="aboutUs"><!--Aboutus-->
<div class="inner_wrapper">
  <div class="container">
    <h2>Qui sommes nous?</h2>
    <div class="inner_section">
	<div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="{{url('AboutDesign/img/about.jpg')}}" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
        	<div class=" delay-01s animated fadeInDown wow animated">
            <p>Que diriez-vous de louer votre perceuse pour quelques heures ou jours ? Ou d’emprunter un coffre de toit pour une escapade de plusieurs jours ? C’est désormais possible grâce à la plateforme Kriobjet.com  Le principe ? Simple et génial : offrir la possibilité à chacun d’emprunter un objet ou, à l’inverse, de proposer un objet à la location. Le tout pour une durée déterminée, fixée à l’avance.</p>
          <br><p>Kriobjet.com est un site de locations d’objets de tous genres d'objets. Sur la plateforme, chaque membre est libre de fixer le prix et les conditions de location de son bien. Le site est gratuit, et les inscriptions puis la publication d’annonces le sont également. En outre, chaque membre qui a plusieurs biens à louer peut publier sans limites autant d’annonces qu’il veut à condition d’avoir une annonce par produit!</p>
</div>
<div class="work_bottom"> <span> Pour Savoir plus..</span> <a href="#contact" class="contact_btn">Contactez nous !</a> </div>
	   </div>

      </div>


    </div>
  </div>
  </div>
</section>
<!--Aboutus-->


<!--Service-->
<section  id="service">
  <div class="container">
    <h2>Prévilèges</h2>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-lg-4">
          <div class="service_block">
            <div class=" delay-03s animated wow  zoomIn"> <span><img style="width:90px; height:90px;" src="{{url('AboutDesign/img/location5.png')}}"></span> </div>
          <br>  <p class="animated fadeInUp wow">Louer </p>
            <h3 class="animated fadeInDown wow">Prés de chez vous </h3>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">
          <div class="service_block">
            <div class="delay-03s animated wow zoomIn" ><span><img style="width:90px; height:90px;" src="{{url('AboutDesign/img/meney.png')}}" ></span> </div>
            <br>  <p class="animated fadeInUp wow">Louer </p>
            <h3 class="animated fadeInDown wow">Au meilleur prix</h3>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">
          <div class="service_block">
            <div class="delay-03s animated wow zoomIn" ><span><img style="width:83px; height:85px;" src="{{url('AboutDesign/img/verified7.png')}}" ></span> </div>
            <br>  <p class="animated fadeInUp wow">Louer </p>
            <h3 class="animated fadeInDown wow">Tout type de matériel</h3>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>
<!--Service-->




<section class="page_section" id="clients"><!--page_section-->
  <h2>Partenaires</h2>
<!--page_section-->
<div class="client_logos" style="background-color=#605d5d;"><!--client_logos-->
  <div class="container">
    <ul class="fadeInRight animated wow">
      <li><a href="javascript:void(0)"><img style="width:160px; height:160px;" src="{{url('AboutDesign/img/ensa.png')}}" alt=""></a></li>

    </ul>
  </div>
</div>
</section>
<!--client_logos-->
<!--Service-->
<section  id="service">
  <div class="container">
    <h2>Objets loués récement</h2>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-lg-4">
          <div class="service_block">
          <table class="table table-striped" border='2' style="width: 80em;">
            <thead>
              <tr>
                <th>image annonce</th>
                <th>prix de location</th>
                <th>description annonce</th>
                <th>date de creation</th>
              </tr>
            </thead>
            <tbody>@php
                $annonce = DB::table('annonces')->limit(5)->orderByDesc('id')->get();

            @endphp
              @foreach ($annonce as $a)

                <tr>

                <td><img src="{{asset($a->image1)}}" alt="" style="height: 35px;width: 35px; border-radius: 50%; margin-right: 15px;"></td>
                <td>{{$a->prix}}</td>
                <td>{{$a->description}}</td>
                <td>{{$a->created_at}}</td>

                </tr>

              @endforeach
            </tbody>
          </table>
      </div>
    </div>
  </div>
</section>
<!--Service-->


<section class="page_section team" id="team"><!--main-section team-start-->
  <h2>Équipe</h2><br>

  <div class="container" style="display:flex;>
    <div class="team_section clearfix">
      <div class="team_area" >
        <div class="team_box wow fadeInDown delay-09s"  style="width:200px;height:200px;">
          <div class="team_box_shadow" ><a href="javascript:void(0)"></a></div>
          <img src="{{url('AboutDesign/img/team2.jpg')}}" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-09s">Nkhili Brahim </h3>
        <span class="wow fadeInDown delay-09s">email@</span>
      </div>
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-09s" style="width:200px;height:200px;">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="{{url('AboutDesign/img/team2.jpg')}}" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>

          </ul>
        </div>
        <h3 class="wow fadeInDown delay-09s">Sebaoui Ali</h3>
        <span class="wow fadeInDown delay-09s">email@</span>
      </div>
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-03s" >
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div><br><br>

          <img style="width:120px;height:160px;"src="{{url('AboutDesign/img/teamf.png')}}" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>

          </ul>
        </div>
        <h3 class="wow fadeInDown delay-03s" >Foussoul Hanan</h3>
        <span class="wow fadeInDown delay-03s">email@</span>
      </div>
      <div class="team_area">
        <div class="team_box  wow fadeInDown delay-06s" style="width:200px;height:200px;">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="{{url('AboutDesign/img/team2.jpg')}}" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>

          </ul>
        </div>
        <h3 class="wow fadeInDown delay-06s">Kacimi Amine</h3>
        <span class="wow fadeInDown delay-06s">email@</span>
      </div>
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-09s" style="width:200px;height:200px;">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="{{url('AboutDesign/img/team2.jpg')}}" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>

          </ul>
        </div>
        <h3 class="wow fadeInDown delay-09s">Benacer Cherfaoui</h3>
        <span class="wow fadeInDown delay-09s">email@</span>
      </div>
    </div>
  </div>
</section>
<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Contactez Nous</h2>
        <div class="row">
          <div class="col-lg-4">

          </div>
          <div class="col-lg-4">

          </div>
          <div class="col-lg-4">

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft">
		 <div class="contact_info">
            <div class="detail">
                <h4>Tetouan,Maroc</h4>
                <p>Adresse</p>
            </div>
            <div class="detail">
                <h4>Telephone</h4>
                <p>+212 ********</p>
            </div>
            <div class="detail">
                <h4>Email </h4>
                <p>kriObjet@gmail.com</p>
            </div>
        </div>



          <ul class="social_links">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s">
          <form method="POST" action="{{route('contactstore')}}">
            @csrf
          <div class="form">
            <input name="nom" class="input-text" type="text" name="" value="Votre Nom *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <input name="email" class="input-text" type="text" name="" value="Votre E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <textarea name="message" class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Ecrivez vos Message *</textarea>
            <input class="input-btn" type="submit" value="envoyer message">
          </div>
        </form>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2020 </span> </div>
  </div>
</footer>

<script type="text/javascript" src="{{url('AboutDesign/js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{url('AboutDesign/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('AboutDesign/js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{url('AboutDesign/js/jquery.nav.js')}}"></script>
<script type="text/javascript" src="{{url('AboutDesign/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{url('AboutDesign/js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{url('AboutDesign/js/wow.js')}}"></script>
<script type="text/javascript" src="{{url('AboutDesign/js/custom.js')}}"></script>


</body>
</html>
