@extends('back.layout')
@section('main')
<div class="widget-box">
    @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>List Sous Categories</h5>
    </div>
    <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
            <thead>
            <tr>
                <th>id</th>
                <th>Nom Category</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>

              @foreach ($cat as $a)
                    <tr class="gradeC">
                        <td>{{$a->id}}</td>
                        <td>{{$a->nom}}</td>
                        <td style="text-align: center;">{{$a->created_at}}</td>
                        <td>
                            <form  class="form-inline" method="POST" action="{{route('souscategory.delete',$a->id)}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            {{-- <a href="{{route('category.delete',$a->id)}}" rel="{{$a->id}}" rel1="delete-category" class="btn btn-danger btn-mini deleteRecord">Delete</a> --}}
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

