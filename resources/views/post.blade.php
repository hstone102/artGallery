@extends('layouts.app')

@section('content')

  <form method="post" action="{{ route('posts.store') }}">
    @csrf
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input class="form-control" name="name" id="inputPassword" placeholder="Name">
      </div>
    </div>
    <div class="form-group row">
      <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input class="form-control" name="title" id="titleOfPost" placeholder="Title of Post">
        </div>
    </div>
    <div class="form-group">
      <label for="post">Post:</label>
        <textarea class="form-control"  name="post" rows="5" id="post"></textarea>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
