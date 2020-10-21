<!DOCTYPE html>
<html>
<head>
    @include('annonces.header')
    <title>Login KriObjet</title>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href="{{asset('frontEnd/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('/css/appp.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/theme.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

 .body {
	background: #f3e0e2;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}



/* a {
	color: #333;
	font-size: 18px;
	text-decoration: none;
	margin: 15px 0;
    font-weight: bold;
} */
a{
    font-weight: 16px;
}

button {
	border-radius: 20px;
	border: 1px solid  ;
	background-color: rgb(255, 255, 255);
	color: #000;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.containerr {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
    min-height: 480px;
    margin-left: 400px;
    margin-top: 50px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
}

.log-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}


.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
}


.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #8B0000);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
    width: 50%;

}


.overlay-right {
	right: 0;
}


.social-container {
	margin: 50px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}
    </style>

</head>
        @include('annonces.nav')
<body>
    <br><br><br><br><br><br><br>
    @if (session('message'))
        <div style="padding-left: 400px;"  class="alert alert-danger" role="alert" >
            {{session('message')}}
        </div>
    @endif
	<div class="containerr" id="containerr">

		<div class="form-container log-in-container">

            <form method="POST" action="{{ route('login') }}">
                @csrf
				<h1>Login</h1>
                <br><br>

                <input type="email" placeholder="Email"  id="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  required autocomplete="email" autofocus/>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
				<input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror <br>
				<button type="submit">
                    {{ __('Connexion') }}
                </button><br>
                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                                <hr class="red mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                <a class="" href="{{ route('register') }}">
                                    {{ __('Créer un compte') }}
                                </a>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>KriObjet</h1>
					<p>Se connecter au premier site marocain de location d'objets</p>
				</div>
			</div>
		</div>
    </div><br><br><br><br><br><br><br><br>
    @include('annonces.footer')
    @include('annonces.script')
</body>
</html>
