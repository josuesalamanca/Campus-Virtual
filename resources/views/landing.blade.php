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
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
</head>
<body id="body" class="xl:h-[400vw] ">

    <div id="container"
        class="
            top-0
            left-0
            h-fit
            w-screen
            flex
            flex-col

            xl:flex-row
            xl:fixed
            xl:w-[400vw]
            xl:h-screen
            "
        >

        @include('layouts.landing.navBar')
        @include('layouts.landing.section-1')
        @include('layouts.landing.section-2')
        @include('layouts.landing.section-3')
        @include('layouts.landing.section-4')
        @include('layouts.landing.section-5')
        {{-- <div id="particles-js" class="w-[400vw] fixed z-10"></div> --}}


    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">

        if($(window).width() >= 1024){

            $(window).scroll(function(){
            var scroll = $(window).scrollTop(),
                dh = $(document).height(),
                wh = $(window).height();
                value = (scroll / (dh-wh))*100;
            $('#container').css('left', -value * 3 + '%');
            })
        }

        var clicks = 0;

        $("#arrow").click(function() {

            clicks++;

            $('#home').animate({
                    width: 'toggle'
                });

            if(clicks%2 == 1){

                $('#arrow').animate(
                    { deg: 180 },
                    {
                    duration: 1200,
                    step: function(now) {
                        $('#arrow').css({ transform: 'rotate(' + now + 'deg)' });
                    }
                    }
                );

                document.getElementById("final").style.display = "flex";
            }else{

                $('#arrow').animate(
                    { deg: 0 },
                    {
                    duration: 1200,
                    step: function(now) {
                        $('#arrow').css({ transform: 'rotate(' + now + 'deg)' });
                    }
                    }
                );

                document.getElementById("final").style.display = "none";
            }
        });
    </script>
</body>
</html>
