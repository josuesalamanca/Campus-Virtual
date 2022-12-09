<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->


        {{-- fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">

    </head>
<body>
    <div class="w-screen h-screen flex">
        @include('layouts.landing.navBar')
        @yield('content')

    </div>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">

        $("#bar").hover(function() {

            document.getElementById("menu").style.display = "flex";
            document.getElementById("icons").style.display = "none";
        });

        $("#bar").mouseleave(function() {

            document.getElementById("menu").style.display = "none";
            document.getElementById("icons").style.display = "flex";

        });

    </script>
</body>
</html>
