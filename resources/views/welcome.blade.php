<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CLASS SCHEDULER</title>

        <!-- Fonts -->
        <link type="text/css" href="{{asset('css/bootstrap_css/css/bootstrap.min.css') }}" rel="stylesheet">
	<link type="text/css" href="{{asset('css/bootstrap_css/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link type="text/css" href="{{asset('css/backend_css/theme.css') }}" rel="stylesheet">
	<link type="text/css" href="{{asset('css/images/icons/css/font-awesome.css') }}" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a> 
                    @else
                        <a class="brand" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="brand" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <h1 style="font-family:'Courier New', Courier, monospace;">Bohol Island State University - Candijay Campus</h1>
                    <h3 style="font-family:'Courier New', Courier, monospace">Class Scheduler System</h3>
                        <div class="links">
                            
                            <!--<a style="font-family:'Courier New', Courier, monospace" href="https://laravel.com/docs">Docs</a>
                                <a style="font-family:'Courier New', Courier, monospace" href="https://laracasts.com">Laracasts</a>
                                <a style="font-family:'Courier New', Courier, monospace" href="https://laravel-news.com">News</a>
                                <a style="font-family:'Courier New', Courier, monospace" href="https://blog.laravel.com">Blog</a>
                                <a style="font-family:'Courier New', Courier, monospace" href="https://nova.laravel.com">Nova</a>
                                <a style="font-family:'Courier New', Courier, monospace" href="https://forge.laravel.com">Forge</a>
                                <a style="font-family:'Courier New', Courier, monospace" href="https://github.com/laravel/laravel">GitHub</a> -->
                        </div>
                    
                </div>

                
            </div>
        </div>
    </body>
</html>
