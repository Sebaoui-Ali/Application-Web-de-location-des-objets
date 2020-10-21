
<!DOCTYPE html>
<html lang="en">
<head>
    @include('annonces.header')
    <title>Verification</title>
</head>
<body class="product-v2 hidden-sn white-skin animated">
    @include('annonces.nav')
    <br><br><br><br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="btn btn-outline-danger" >{{ __('Vérifiez votre adresse e-mail !') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                            </div>
                        @endif
                        <div align='center' >
                        <svg class="bi bi-envelope-fill" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                          </svg>

                          <br>
                        {{ __('Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.') }} <br>
                        {{ __('Si vous n avez pas reçu l e-mail') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-warning p-0 m-0 align-baseline">{{ __('cliquez ici pour en demander un autre') }}</button>.
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <br><br>
    @include('annonces.footer')
    @include('annonces.script')
</body>
</html>



