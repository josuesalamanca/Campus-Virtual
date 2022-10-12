<div
    class="
        w-screen
        h-[250vh]
        box-border
        flex
        flex-col
        items-center
        xl:flex-row
        xl:h-screen
        xl:w-[75vw]
    "
>
    <div
        class="
            relative
            w-1/12
            h-full
            flex
            flex-col
            justify-center
            items-center
        "
    >
        <hr class="w-2 h-1/3 border-none bg-yellow-doc">
        <h2 class="writing-mode-vertical-lr m-5 text-3xl font-bold font-serif">
            Noticias Recientes
        </h2>
        <hr class="w-2 h-1/3 border-none bg-yellow-doc">

    </div>
    <div class="
                w-8/12
                h-full
                flex
                flex-col
                z-20
            ">

        @foreach ($insights as $insight)
        <div onclick="window.location='{{ url('insight/'.$insight->id.'') }}'" class="w-full h-1/3 flex items-center justify-center">
            <div class="w-3/4 h-11/12 relative flex">
                <div class="w-full h-full flex items-end justify-end">
                    <div class="bg-black-doc w-3/4 h-10/12 flex items-end flex-row-reverse relative bottom-0 right-0">
                        <div class="w-1/2 h-full flex flex-col items-center justify-evenly">
                            <h2 class="text-white font-serif text-2xl pr-3">
                                {{ $insight->title }}
                            </h2>
                            <div class="w-full h-auto flex items-center justify-evenly">
                                <hr class="w-15 h-[3px] bg-yellow-doc border-none">
                                <p class="text-white font-serif text-base">{{  $insight->date }}</p>
                            </div>
                            <div class="flex items-center">
                                <img class="h-4 w-auto mr-3" src="{{ URL('icons\send.png') }}" alt="">
                                <a href="{{  $insight->link }}  " class="text-white font-serif text-base">leer artículo</a>
                            </div>
                        </div>
                    </div>
                </div>

                <img class="absolute w-7/12 h-auto" src="{{ URL(''. $insight->image.'') }}" alt="">
            </div>
        </div>
        @endforeach

    </div>
    <div
        class="
            relative
            w-2/12
            h-full
            flex
            flex-col
            justify-center
            items-center
        "
    >
        <div
            class="
                absolute
                w-[700px]
                h-4/5
                bg-yellow-doc
            "
        ></div>
        <hr class="w-2 h-4/12 border-none bg-red-doc z-20">
        <h2 class="writing-mode-vertical-lr m-10 text-3xl font-bold font-serif z-20">
            Nuestro Equipo
        </h2>
        <hr class="w-2 h-4/12 border-none bg-red-doc z-20">
    </div>

</div>

