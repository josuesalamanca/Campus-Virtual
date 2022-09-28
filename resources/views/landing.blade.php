<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Campus Virtual Unilibre</title>
    <script src="{{ asset('js/app.js') }}" type="module"></script>
    {{-- <script src="{{ mix src='js/app.js' }}" type="module"></script> --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
</head>
<body class="h-[4000px]">

    <div id="container" class="fixed top-0 left-0 w-[400vw] h-screen flex bg-white">

        @include('layouts.landing.navBar')

        @include('layouts.landing.section-1')
        @include('layouts.landing.section-2')
        @include('layouts.landing.section-3')
        @include('layouts.landing.section-4')
        {{-- <div id="particles-js" class="w-[400vw] fixed z-10"></div> --}}


    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(window).scroll(function(){
            var scroll = $(window).scrollTop(),
                dh = $(document).height(),
                wh = $(window).height();
                value = (scroll / (dh-wh))*100;
            $('#container').css('left', -value * 3 + '%');
        })
    </script>
</body>
</html>
