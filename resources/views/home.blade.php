@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div>
              <p>Go to posts <a href="\">Here</a></p>
            <div>

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
                    <label for="post">Post the URL of the space image:</label>
                    <textarea class="form-control"  name="post" rows="1" id="post"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
