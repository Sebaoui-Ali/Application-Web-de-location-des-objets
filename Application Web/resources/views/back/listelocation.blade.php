@extends('back.layout')
@section('main')
  <!-- /.row -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" align='center'>
          <h3 class="card-title">Locations </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Titre de Annonce</th>
                <th>Debut de Reservation </th>
                <th>Fin de Reservation </th>
                <th>id-client</th>
                <th>id-partenaire</th>
                <th>Dernier delai d'annulation</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  @php
                      $res = DB::table('reservations')->orderbydesc('created_at')->paginate(10);
                  @endphp
                @foreach ($res as $a)
                @php
                    $annonce = DB::table('annonces')->where('id',$a->annonce_id)->first();
                @endphp

            <td>{{$annonce->titre}}</td>
            <td>{{$a->debut_reserv}}</td>
            <td>{{$a->fin_reserv}}</td>
          <td>{{$a->user_id_client}}</td>
          <td>{{$a->user_id_partenaire}}</td>
          <td>{{$a->annulation}}</td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
  @endsection
