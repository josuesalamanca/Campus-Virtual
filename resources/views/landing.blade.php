<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Campus Virtual Unilibre</title>
    <script src="{{ mix('js/app.js') }}" defer></script>
    {{-- <script src="{{ mix src='js/app.js' }}" type="module"></script> --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://use.typekit.net/gka6mhb.css">
</head>
<body id="body" class="xl:h-[400vw]">

    <div id="container"
        class="
            top-0
            left-0
            h-fit
            w-screen
            z-10
            flex
            flex-col
            xl:flex-row
            xl:fixed
            xl:w-full-page
            xl:bg-[url('/images/landing/fondo.png')]
            bg-cover
            xl:h-screen
            "
        >

        @include('layouts.landing.navBar')
        @include('layouts.landing.section-1')
        @include('layouts.landing.section-2')
        @include('layouts.landing.section-3')
        @include('layouts.landing.footer')


    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">

        $("#bar").hover(function() {

            document.getElementById("menu").style.display = "block";
            document.getElementById("icons").style.display = "none";
        });

        $("#bar").mouseleave(function() {

            document.getElementById("menu").style.display = "none";
            document.getElementById("icons").style.display = "flex";

        });


        if($(window).width() >= 1024){

            $(window).scroll(function(){
            var scroll = $(window).scrollTop(),
                dh = $(document).height(),
                wh = $(window).height();
                value = (scroll / (dh-wh))*100;
            $('#container').css('left', -value * 2 + '%');
            })
        }


    </script>
</body>
</html>
