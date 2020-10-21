@extends('back.layout')
@section('main')
           <!-- general form elements -->
           <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ajouter Sous Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form"method="POST" action="{{ route('souscategory.store',$souscategory->id) }}">

                {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group">
                  <label for="addcat">Label Sous category</label>
                  <input type="text" name='nom' class="form-control" id="addcat" value="" placeholder="Enter Sous categ">
                </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-success">Ajouter Sous Category</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
@endsection
