@extends('back.layout')
@section('main')
           <!-- general form elements -->
           <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ajouter Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form"method="POST" action="{{ route('category') }}">
                {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group">
                  <label for="addcat">Label category</label>
                  <input type="text" name='nom' class="form-control" id="addcat" placeholder="Enter categ">
                </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
@endsection
