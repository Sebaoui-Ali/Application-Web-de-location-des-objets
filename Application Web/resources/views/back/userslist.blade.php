@extends('back.layout')
@section('main')


<div class="service_block">
    @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
    <table class="table table-striped">
      <thead>
        <tr>
            <th>ID</th>
          <th>image </th>
          <th>Nom</th>
          <th>prenom</th>
          <th>date de creation</th>
        </tr>
      </thead>
      <tbody>

        @php
            // $annonces =  DB::table('annonces')->get();

        @endphp
          <tr>
            @foreach ($users as $a)
            <td>{{$a->id}}</td>
            <td>
                <img src="{{ asset($a->image) }}" alt="" style="height: 35px;width: 35px; border-radius: 50%; margin-right: 15px;" >
            </td>

          <td>{{$a->nom}}</td>
          <td>{{$a->prenom}}</td>
          <td>{{$a->created_at}}</td>
          <td>
            <form  class="form-inline" method="POST" action="{{route('User.delete',$a->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Desactiver</button>
            </form>
        </td>

          </tr>

        @endforeach
      </tbody>
    </table>
    <div class="row justify-content-center mb-4">
        {{ $users->appends(request()->input())->links()}}
    </div>
</div>
@endsection
