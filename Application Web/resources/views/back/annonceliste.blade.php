@extends('back.layout')
@section('main')


<div class="service_block">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>user_id</th>
          <th>image annonce</th>
          <th>prix de location</th>
          <th>Titre annonce</th>
          <th>date de creation</th>
        </tr>
      </thead>
      <tbody>

        @php
            // $annonces =  DB::table('annonces')->get();

        @endphp
          <tr>
            @foreach ($annonces as $a)
            <td>{{$a->user_id}}</td>
            <td>
                <img src="{{ asset($a->image1) }}" alt="" style="height: 35px;width: 35px; border-radius: 50%; margin-right: 15px;" >
                <img src="{{ asset($a->image2) }}" alt="" style="height: 35px;width: 35px; border-radius: 50%; margin-right: 15px;" >
                <img src="{{ asset($a->image3) }}" alt="" style="height: 35px;width: 35px; border-radius: 50%; margin-right: 15px;" >
                <img src="{{ asset($a->image4) }}" alt="" style="height: 35px;width: 35px; border-radius: 50%; margin-right: 15px;" >
            </td>

          <td>{{$a->prix}}</td>
          <td>{{$a->titre}}</td>
          <td>{{$a->created_at}}</td>
          <td>
            <form  class="form-inline" method="POST" action="{{route('Annonce.delete',$a->id)}}">
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
        {{ $annonces->appends(request()->input())->links()}}
    </div>
    {{-- <p>{{$annonces}}</p> --}}
</div>
@endsection
