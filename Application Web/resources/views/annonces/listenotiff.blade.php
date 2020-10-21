<!DOCTYPE html>
<html lang="en">
<head>
    @include('annonces.header')
    <title>Notifications</title>
</head>
@include('annonces.nav')
<body class="category-v1 hidden-sn white-skin animated">
    <br><br><br><br><br>
<div class="container">
    @php
    $ldate = date('Y-m-d H:i:s');
@endphp
<a href="{{ url('/mesreservation') }}" class="btn btn-grey" style="color: #ffff;"> Mes reservations </a>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Debut de reservation </th>
        <th>Fin de reservation</th>
        <th>Titre d'Annonce </th>
        <th> Reponse </th>
        <th>Date de Creation</th>
      </tr>
    </thead>
    <tbody>
        @php
          $demandes =  DB::table('demandes')->orderbydesc('created_at')->where('user_id_partenaire',Auth::user()->id)->paginate(10);
      @endphp

        <tr>
          @foreach ($demandes as $a)
            @php
                $annonce = DB::table('annonces')->where('id',$a->annonce_id)->first();
            @endphp
          <td>{{$a->debut}}</td>
          <td>{{$a->fin}}</td>

        <td>{{$annonce->titre}}</td>
        <td></td>
        <td>{{$a->created_at}}</td>
        @if ($a->status == 2)

    <td>
        @php
            $user = DB::table('users')->where('id',$a->user_id_client)->first();
        @endphp

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#d{{$user->id}}">
        Voir Les informations
        </button>


        <div class="modal fade" id="d{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
            <div class="modal-header" align="center">
                <h5 class="modal-title" id="exampleModalLabel" >Indormations</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" align="center" >
                <div class="table-responsive">
                    <div>
                        <img src="{{ asset($user->image) }}" style="width: 70px; height: 80px;" alt="">
                     </div><br><br>
                    <table class="table">
                      <tbody style="padding-left: 100px;" >
                        <tr>
                          <td>Nom </td>
                          <td style="padding-left: 100px;" >{{$user->nom }}</td>
                        </tr>
                        <tr>
                            <td>Prenom  </td>
                            <td style="padding-left: 100px;" >{{$user->prenom }}</td>
                          </tr>
                          <tr>
                            <td>Telephone  </td>
                            <td style="padding-left: 100px;" >{{$user->tel }}</td>
                          </tr>
                          <tr>
                            <td>Email  </td>
                            <td style="padding-left: 100px;" >{{$user->email }}</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
            </div>
        </div>
        </div>
    </td>

        @elseif(($a->status == 1))
            <td>
                Deja Refuser
            </td>

        @else
        <td style="text-align: center;">

            <form  class="form-inline" method="POST" action="{{route('accept',$a->id)}}">
                @csrf
                @method('PUT')
                <button class="btn btn-danger" type="submit">Accepter</button>
            </form>
        </td>
      <td style="text-align: center;">
        <form  class="form-inline" method="POST" action="{{route('refus',$a->id)}}">
            @csrf
            @method('PUT')
            <button class="btn btn-danger" type="submit">Refuser</button>
        </form>
    </td>
    <td>

    </td>
    @endif
    @if(($ldate > $a->fin))
    <td>

    </td>
    @endif
        </tr>

    </tbody>
    @endforeach

      @php
          $demandes =  DB::table('demandes')->where('status',2)->where('user_id_client',Auth::user()->id)->orderbydesc('created_at')->paginate(10);

      @endphp
        <tr>
          @foreach ($demandes as $a)
          <td>{{$a->debut}}</td>
          <td>{{$a->fin}}</td>
        @php
          $annonce = DB::table('annonces')->where('id',$a->annonce_id)->first();

        @endphp
        <td>{{$annonce->titre}}</td>
        <td> Demande Approuve  {{$annonce->titre}} </td>
        <td>{{$a->created_at}}</td>
    <td>

        @php
            $user = DB::table('users')->where('id',$a->user_id_partenaire)->first();
        @endphp

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#d{{$user->id}}">
        Voir Les informations
        </button>

        <div class="modal fade" id="d{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
            <div class="modal-header" align="center">
                <h5 class="modal-title" id="exampleModalLabel" >Indormations</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" align="center" >
                <div class="table-responsive">
                    <div>
                        <img src="{{ asset($user->image) }}" style="width: 70px; height: 80px;" alt="">
                     </div><br><br>
                    <table class="table">
                      <tbody style="padding-left: 100px;" >
                        <tr>
                          <td>Nom </td>
                          <td style="padding-left: 100px;" >{{$user->nom }}</td>
                        </tr>
                        <tr>
                            <td>Prenom  </td>
                            <td style="padding-left: 100px;" >{{$user->prenom }}</td>
                          </tr>
                          <tr>
                            <td>Telephone  </td>
                            <td style="padding-left: 100px;" >{{$user->tel }}</td>
                          </tr>
                          <tr>
                            <td>Email  </td>
                            <td style="padding-left: 100px;" >{{$user->email }}</td>
                          </tr>
                          <tr>
                      </tbody>
                    </table>
                  </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
            </div>
        </div>
        </div>
    </td>

    <td>

        <form   method="POST" action="{{route('okk',$a->id)}}">
            @csrf
            @method('PUT')
            <button class="btn btn-danger" type="submit" title="Marquer la notification comme déjà lue">OK</button>
        </form>
    </td>

        </tr>
    @endforeach
    @php

          $demandes =  DB::table('demandes')->where('status',1)->orderbydesc('created_at')->where('user_id_client',Auth::user()->id)->paginate(10);

      @endphp
        <tr>
          @foreach ($demandes as $a)
          <td>{{$a->debut}}</td>
          <td>{{$a->fin}}</td>

        @php
          $annonce = DB::table('annonces')->where('id',$a->annonce_id)->first();

        @endphp
        <td>{{$annonce->titre}}</td>
        <td> Demande Refusée de L'annonce {{$annonce->titre}} </td>
        <td>{{$a->created_at}}</td>
        <td style="text-align: center;">

            <form  class="form-inline" method="POST" action="{{route('okk',$a->id)}}">
                @csrf
                @method('PUT')
                <button class="btn btn-danger" type="submit" title="Marquer la notification comme déjà lue" >OK</button>
            </form>
        </td>

        </tr>

    @endforeach
    @php

    $demandes =  DB::table('reservations')->orderbydesc('created_at')->where('etat_reserv',0)->where('user_id_partenaire',Auth::user()->id)->paginate(10);

@endphp
  <tr>
    @foreach ($demandes as $a)
    <td>{{$a->debut_reserv}}</td>
    <td>{{$a->fin_reserv}}</td>

  @php
    $annonce = DB::table('annonces')->where('id',$a->annonce_id)->first();

  @endphp
  <td>{{$annonce->titre}}</td>
  <td> annulation  de L'annonce {{$annonce->titre}} </td>
  <td>{{$a->created_at}}</td>
  <td style="text-align: center;">

    <form  class="form-inline" method="POST" action="{{route('oka',$a->id)}}">
        @csrf
        @method('PUT')
        <button class="btn btn-danger" type="submit">OK</button>
    </form>
</td>
  </tr>


@endforeach


  </table>
</div><br><br><br>
<div class="row justify-content-center mb-4">
    {{ $demandes->appends(request()->input())->links()}}
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>

@include('annonces.footer')

    @include('annonces.script')

</body>
</html>

