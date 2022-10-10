<div class="
            w-screen
            h-[250vh]
            box-border
            flex
            flex-col
            xl:h-screen
        ">
    <div class=" w-full h-[10%] flex justify-center items-center">
        <h2 class="font-serif text-2xl">Últimas Noticias</h2>
    </div>
    <div class="
                w-full
                h-4/5
                flex
                flex-col
                z-20

                xl:flex-wrap
                xl:flex-row
            ">

        @foreach ($insights as $insight)
        <div onclick="window.location='{{ url('insight/'.$insight->id.'') }}'" class="w-1/2 h-1/2 flex items-center justify-center">
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
    <div class=" w-full h-[10%] flex items-center justify-center">
        <a href="/insights-list" class="font-bold text-xs">Ver todas nuestras noticias</a>
    </div>
</div>

