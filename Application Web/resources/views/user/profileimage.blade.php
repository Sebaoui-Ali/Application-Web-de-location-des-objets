<!DOCTYPE html>
<html lang="en">
<head>
    <title>Image Profile </title>
    @include('annonces.header')
</head>
<body class="category-v1 hidden-sn white-skin animated">

    <header>
        @include('annonces.nav')
    </header>
    @php
        $user = DB::table('users')->where('id',Auth::user()->id)->first();
    @endphp
    <br><br><br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="{{ asset($user->image) }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $user->nom }} {{ $user->prenom }} </h2>
                <form enctype="multipart/form-data" action="/image" method="POST">
                    {{ csrf_field() }}
                    <label>Update Profile Image</label>
                    <input type="file" name="image">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
@include('annonces.footer')
@include('annonces.script')
</body>
</html>
