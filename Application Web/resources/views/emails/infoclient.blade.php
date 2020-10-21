<link href="{{ asset('MDB/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('MDB/css/mdb.min.css') }}" rel="stylesheet">
@component('mail::message')
<body>
    <div class="p-3 mb-2 bg-info text-white"> <h2 style="text-align: center">  </h2> </div>
    <div class="jumbotron">
        <div class="container">
          <h1 class="display-3" style="color: rgba(255, 0, 0, 0.89)"> KriObjet </h1>
          <svg class="bi bi-cart-check" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
          </svg>
          <p>
            Bonjour/bonsoir cher Partenaire, <br> Suite a acceptation de  reservation, alors voici les informations pour vous mettre on contact avec  le client .. Bonne Location</p>
         </div>
      </div>
    <div class="card m-5 ">
        <div class="card-header text-center">
          <h2>Information de Client </h2>
        </div>
    <div class="table-responsive">
        <table class="table">
          <tbody style="padding-left: 100px;" >
            <tr>
              <td>Nom </td>
              <td style="padding-left: 100px;" >{{$nom }}</td>
            </tr>
            <tr>
                <td>Prenom  </td>
                <td style="padding-left: 100px;" >{{$prenom }}</td>
              </tr>
              <tr>
                <td>Telephone  </td>
                <td style="padding-left: 100px;" >{{$tel }}</td>
              </tr>
              <tr>
                <td>Email  </td>
                <td style="padding-left: 100px;" >{{$email }}</td>
              </tr>
          </tbody>
        </table>
    </div>
    </div>
</body>
@endcomponent
