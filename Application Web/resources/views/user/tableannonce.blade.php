
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Annonces</title>
    @include('user.header')
</head>
<body class="category-v1 hidden-sn white-skin animated">
    <header>
        @include('annonces.nav')
    </header>
<br><br><br><br><br><br>
<div class="container" >

<div class="card" style="width: 99%;" >
    <div class="header" style="padding: 20px;"
        <h2>
            MES ANNONCES
        </h2>
    </div>
    <div class="body"  >
        <div class="table-responsive"  >
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable"  >
            <thead>
                <tr>
                    <th>Images</th>
                    <th>Titre</th>
                    <th>Date de creation</th>

                </tr>
                <tbody>
                    @php
                    $annonces =  DB::table('annonces')->where('user_id',Auth::user()->id )->where('deleted_at',NULL)->paginate(10);

                @endphp
                    <tr>
                    @foreach ($annonces as $a)
                    <td >
                        <img src="{{ asset($a->image1) }}" alt="" style="height: 35px;width: 35px; border-radius: 50%; margin-right: 15px;" >
                        <img src="{{ asset($a->image2) }}" alt="" style="height: 35px;width: 35px; border-radius: 50%; margin-right: 15px;" >
                        <img src="{{ asset($a->image3) }}" alt="" style="height: 35px;width: 35px; border-radius: 50%; margin-right: 15px;" >
                        <img src="{{ asset($a->image4) }}" alt="" style="height: 35px;width: 35px; border-radius: 50%; margin-right: 15px;" >
                    </td>

                    <td >{{$a->titre}}</td>
                    <td >{{$a->created_at}}</td>
                    <td >
                    <form  class="form-inline" method="POST" action="{{route('Annonce.delete',$a->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                </td>
                <td>
                <a href="{{ route('annonce', $a->id) }}"> <button class="btn btn-grey" style="color: #ffff;" > Modifier </button></a>
            </td>

                    </tr>

                @endforeach
                </tbody>


            </table>
        </div>
    </div>
</div>
</div><br><br><br>
<div class="row justify-content-center mb-4">
    {{ $annonces->appends(request()->input())->links()}}
</div>
<br><br><br><br><br><br><br><br><br><br>
@include('annonces.footer')
@include('user.script')
</body>
</html>

