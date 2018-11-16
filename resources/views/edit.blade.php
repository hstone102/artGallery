@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

            <div>
              <p>Go to posts <a href="\">Here</a></p>
            <div>

                <form form class="" method="post" action="/posts/{{ $post->id }}">
                  @method('PUT')
                  @csrf
                  <div class="form-group row ml-3 mr-2">
                    <label class="col-sm-2 col-form-label">Artists' Name</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="name" value= "{{ $post->name }}"id="inputPassword" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row ml-3 mr-2">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="title" value= "{{ $post->title }}" id="titleOfPost" placeholder="Title of Post">
                    </div>
                  </div>
                  <div class="form-group row ml-3 mr-2">
                    <label for="title" class="col-sm-2 col-form-label">Year Completed</label>
                    <div class="col-sm-10">
                      <input class="form-control col-sm-2" name="year" value= "{{ $post->year }}" id="year" placeholder="year">
                    </div>
                  </div>
                  <div class="form-group ml-3 mr-2">
                    <label for="post">Post the URL of the space image:</label>
                    <textarea class="form-control"  name="post" rows="1" id="post">{{ $post->post}}</textarea>
                  </div>
                  <div class="form-group ml-3 mr-2">
                    <label for="post">Description of the space image:</label>
                    <textarea class="form-control"  name="description" value= "{{ $post->description }}" rows="3" id="description">{{ $post->description}}</textarea>
                  </div>
                  <div class="text-center mb-5">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>

        </div>
    </div>
</div>
@endsection
