@extends('layouts.app')

        <title>Bienvenido</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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


    @section('contenido')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/inicio') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    UrbanEnvios                    
                </div>

            <div class="container">
                <div class="row">
                        
                    <form method="POST" action="#">
                            <div class="col">
                            <label>Seleccione la Calle</label>
                                    <!--<input type="text" autocomplete="off" placeholder="Buscar ciudad..." id='txt'>-->
                                    <select name="street">
                                    @foreach($calles as $calle)
                                        <option id="{{$calle->id}}">
                                        {{$calle -> nombre}}
                                        </option>       
                                    @endforeach
                                    </select>
                                    <input class="btn btn-success" type="submit" value="Obtener">
                            </div>
                    </form>
                </div>
            </div>

                <!--<div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>-->
            </div>
        </div>
    @endsection
   
