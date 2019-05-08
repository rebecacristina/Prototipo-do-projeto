<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Styles -->
        <style>
            html, body {
                 background-image: linear-gradient( 359.3deg,  rgba(27,173,128,1) 0.6%, rgba(0,255,177,1) 101.1% );
                color: white;
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

/*            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
*/
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="btn btn-outline-success" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn-outline-success" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="btn btn-outline-success" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                 <div class="title m-b-md"> 
                    <img src="{{asset('img/logos.png')}}" alt="Logo da página" style="width: 100%;"> 
                </div>

                <div class="links">
                    <nav class="navbar fixed-bottom navbar-expand-lg navbar-dark bg-dark">
                      <a class="navbar-brand btn btn-link" href="#">Monitoramento Estudantil</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                <a class="nav-link btn btn-outline-success mr-2" href="#">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item active">
                                <a class="nav-link btn btn-outline-success mr-2" href="#">Formulário<span class="sr-only">(current)</span></a>
                              </li>
                                <li class="nav-item active">
                                <a class="nav-link btn btn-outline-success mr-2" href="#">Novidades<span class="sr-only">(current)</span></a>
                              </li>
                                <li class="nav-item active">
                                <a class="nav-link btn btn-outline-success mr-2" href="#">IFPE<span class="sr-only">(current)</span></a>
                              </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}" type="text/JavaScript"></script>
    </body>
    </html>