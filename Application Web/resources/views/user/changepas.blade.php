<!DOCTYPE html>
<html lang="en">
<head>
    @include('annonces.header')
    <title>Mode de passe </title>
</head>
<body class="category-v1 hidden-sn white-skin animated">
    <header>
        @include('annonces.nav')
    </header>
    <br><br><br><br><br><br><br>
    <div class="container">
        @if (session('error'))
        <div style="padding-left: 400px;"  class="alert alert-danger" role="alert" >
            {{session('error')}}
        </div>
    @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Reset Password') }}</div> --}}

                    <div class="card-body">
                        <form method="POST" action="{{ route('change') }}">
                            @csrf



                            <div class="form-group row">
                                <label for="oldpas" class="col-md-4 col-form-label text-md-right">{{ __('Curent Password') }}</label>

                                <div class="col-md-6">
                                    <input id="oldpas" type="password" class="form-control @error('oldpas') is-invalid @enderror" name="oldpas"  required autocomplete="oldpas" autofocus>

                                    @error('oldpas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newpas" class="col-md-4 col-form-label text-md-right">{{ __(' New Password') }}</label>

                                <div class="col-md-6">
                                    <input id="newpas" type="password" class="form-control @error('newpas') is-invalid @enderror" name="newpas" required >

                                    @error('newpas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required >
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Modifier Mot de passe ') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
    @include('annonces.footer')
    <!--/.Footer-->

    @include('annonces.script')
</body>
</html>




