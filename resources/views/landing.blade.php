<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>qrev.tech</title>

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            'pusherKey' => config('broadcasting.connections.pusher.key'),
        ]) !!};
        </script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
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

            .hidden {
                display: none !important;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <div class="flex-center position-ref full-height">
                <div class="top-left links">
                    <a href="{{ url('/') }}">QREV<small>.tech</small></a>
                </div>
                <div class="top-right links">
                    <a href="#">How To</a>
                </div>
                <div class="content">
                    <div class="title">
                        <div class="{{ $share ? 'hidden' : '' }} ">
                            <session session="{{ $session }}" password="{{ $key }}" />
                        </div>
                        @if ($share) <wait/> @endif
                    </div>
                    <div class="links">
                        @if ($share)
                            <a>shared session: waiting for host action.</a>
                        @else
                            <a href="{{ url('/', ['ident' => $session.$key]) }}">Share this session</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
