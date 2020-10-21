<!DOCTYPE html>
<html lang="en">
<head>
    @include('annonces.header')
    <title>Reservations</title>
</head>
<body class="category-v1 hidden-sn white-skin animated">
    @include('annonces.nav')
<br><br><br><br><br>

<div class="container" >
    @if (session('message'))
    <div class="alert alert-danger" style="text-align: center">{{ session('message') }}</div>
    @endif

    <a href="{{ url('/listenotiff') }}" class="btn btn-grey" style="color: #ffff;"> Mes demandes </a>

    @php
        $ldate = date('Y-m-d H:i:s');
    @endphp
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Debut de reservation </th>
            <th>Fin de reservation</th>
            <th>date de creation</th>
            <th>Titre de Annonce </th>
            <th> Dernier delai d'annulation</th>
          </tr>
        </thead>
        <tbody>

          @php
              $res =  DB::table('reservations')->where('user_id_client',Auth::user()->id)->where('etat_reserv',1)->orderbydesc('created_at')->paginate(10);
          @endphp
            <tr>
              @foreach ($res as $a)
              <td>{{$a->debut_reserv}}</td>
              <td>{{$a->fin_reserv}}</td>
            <td>{{$a->created_at}}</td>
            @php
                $annonce = DB::table('annonces')->where('id',$a->annonce_id)->first();
            @endphp
            <td>{{$annonce->titre}}</td>
            <td>{{$a->annulation}}</td>
              @if ($ldate > $a->annulation )

              @else
                  <td style="width: 100px; height: 40px;">
                    <a href="{{route('annuler',$a->id)}}" ><button class="btn btn-primary">Annuler la reservation</button></a>
                  </td>
              @endif

              @if ($ldate > $a->fin_reserv )
              <td style="width: 250px; height: 40px;">
                <div class="modal fade" id="dd{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Votre Message</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('note', $a->annonce_id) }}" method="POST">
                            {{ csrf_field() }}
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>

                            <textarea name="message" id="defaultForm-email" class="form-control validate" ></textarea>
                            </div>

                        </div>
                        <div class="modal-body mx-3" >
                            <select class="mdb-select md-form colorful-select dropdown-danger" name="note">
                                <option value="" disabled selected >Choose your note</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>


                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-default" type="submit" >Save</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>

                    <div class="text-center">
                    <a href=""  data-toggle="modal" data-target="#dd{{$a->id}}"> <button class="btn btn-default btn-rounded mb-4" >Notez le partenaire, l'objet</button></a>
                    </div>
              </td>
              @else

              @endif

            </tr>
        </tbody>
        @endforeach
        @php
        $res =  DB::table('reservations')->where('user_id_partenaire',Auth::user()->id)->where('etat_reserv',1)->orderbydesc('created_at')->paginate(10);
    @endphp
      <tr>
        @foreach ($res as $a)
        <td>{{$a->debut_reserv}}</td>
        <td>{{$a->fin_reserv}}</td>
      <td>{{$a->created_at}}</td>
            @php
                $annonce = DB::table('annonces')->where('id',$a->annonce_id)->first();
            @endphp
    <td>{{$annonce->titre}}</td>
      <td>{{$a->annulation}}</td>
        @if ($ldate > $a->fin_reserv )
        <td>
          <div class="modal fade" id="d{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Votre Message</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('notec', ['id' => $a->user_id_client , 'annonce' => $a->annonce_id]) }}" method="POST">
                    {{ csrf_field() }}
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>

                    <textarea name="message" id="defaultForm-email" class="form-control validate" ></textarea>
                    </div>

                </div>
                <div class="modal-body mx-3" >
                    <select class="mdb-select md-form colorful-select dropdown-danger" name="note">
                        <option value="" disabled selected >Choose your note</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default" type="submit" >Save</button>
                </div>
                </form>
                </div>
            </div>
            </div>

            <div class="text-center">
            <a href=""  data-toggle="modal" data-target="#d{{$a->id}}"> <button class="btn btn-default btn-rounded mb-4" >Notez le client</button></a>
            </div>
        </td>
        @else

        @endif
      </tr>
    </tbody>
    @endforeach
      </table>

</div><br><br><br>
<div class="row justify-content-center mb-4">
    {{ $res->appends(request()->input())->links()}}
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>

  @include('annonces.footer')
@include('annonces.script')

</body>
</html>
