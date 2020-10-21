@extends('back.layout')
@section('main')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>List Categories</h5>
    </div>
    <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
            <thead>
            <tr>
                <th>id</th>
                <th>Nom </th>
                <th>E-mail</th>
                <th>Message</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
                @php
                $cat = DB::table('contacts')->paginate(10);
            @endphp
              @foreach ($cat as $a)
                    <tr class="gradeC">
                        <td>{{$a->id}}</td>
                        <td>{{$a->nom}}</td>
                        <td>{{$a->email}}</td>
                        <td style="text-align: center;">{{$a->message}}</td>
                        <td style="text-align: center;">{{$a->created_at}}</td>
                        <td>
                            <form   method="POST" action="{{route('contact',$a->id)}}">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-danger" type="submit" title="Marquer la notification comme déjà lue">OK</button>
                            </form>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row justify-content-center mb-4">
            {{ $cat->appends(request()->input())->links()}}
        </div>
    </div>

</div>
</div>

@endsection
