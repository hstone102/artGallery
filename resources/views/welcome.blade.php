<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #808080;
                color: #483d8b;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #483d8b;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>


            @endif
        </div>

        @guest
            <div class="row flex-center mt-5">
              <div class="col-sm-2">
                <img src="https://img.purch.com/w/660/aHR0cDovL3d3dy5zcGFjZS5jb20vaW1hZ2VzL2kvMDAwLzA0MS82MjAvb3JpZ2luYWwvbmVwdHVuZS12b3lhZ2VyLTIuanBn" alt="W3Schools.com" style="width:250px;height:250px;">
              </div>
            </div>
            <div class="row flex-center full-height">
            <h2>Collection of Space Images</h2>
            </div>
        @endguest





            @auth
            <div class="container">
              <div class="row">
                <div class="col-sm">
                  <p class="mb-5">Click <a href="\home">Here</a> to write another post.  </p>
                </div>
              </div>

            @foreach ($posts as $post)
                <div class="row">
                  <div class="col-sm">
                    <p>Photographer Name: {{ $post->name }}</p>
                    <p>Title of Picture: {{ $post->title }}</p>

                  </div>
                  <div class="col-sm">
                    <p>Year Taken: {{ $post->year }}</p>
                    <p>Description: {{ $post->description }}</p>

                  </div>
                </div>
                <div class="row border-bottom">
                  <div class="col-lg">
                    <p>Image: <img src="{{ $post->post }}" alt="image" width="200" height="160"></p>
                    <p>Click <a href="posts/{{$post->id}}/edit">here to edit.</a>  </p>
                  </div>
                </div>


            @endforeach

            </div>
            @endauth




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
