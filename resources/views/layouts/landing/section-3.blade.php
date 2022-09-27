<div class="w-screen h-screen box-border flex flex-col">
    <div class=" w-full h-[10%] flex justify-center items-center">
        <h2 class="font-serif text-2xl">Últimas Noticias</h2>
    </div>
    <div class="w-full h-4/5 flex flex-row flex-wrap z-20">

        <div onclick="window.location='{{ url('insight/1') }}'" class=" bg-red-500 w-1/2 h-1/2 flex items-center justify-center">
            {{-- <img class="w-3/4 h-auto" src="{{ URL('images\news\new_1.png') }}" alt=""> --}}
            <div class="bg-gray-600 w-3/4 h-11/12 relative">
                <div class="bg-blue-500 w-3/4 h-full right-0 top-0">

                </div>
            </div>
        </div>
        <div class=" w-1/2 h-1/2 flex items-center justify-center">
            <img class="w-3/4 h-auto" src="{{ URL('images\news\new_2.png') }}" alt="">
        </div>
        <div class="bg-green-500 w-1/2 h-1/2 flex items-center justify-center">
            <img class="w-3/4 h-auto" src="{{ URL('images\news\new_3.png') }}" alt="">
        </div>
        <div class=" w-1/2 h-1/2 flex items-center justify-center">
            <img class="w-3/4 h-auto" src="{{ URL('images\news\new_4.png') }}" alt="">
        </div>

    </div>
    <div class=" w-full h-[10%] flex items-center justify-center">
        <a href="#" class="font-bold text-xs">Ver todas nuestras noticias</a>
    </div>
</div>

