<div
    class="
        w-section-2
        h-screen
        flex
        flex-row
    "
>
    <div class="w-5/12 h-full">
        <img
            class="h-full w-auto"
            src="{{ URL('images\landing\estudiante-cloud.png') }}"
            alt=""
        >
    </div>

    <div class="w-7/12 h-full  flex flex-col justify-end">

        <div class="w-full h-1/12 mb-8 flex flex-row items-center justify-evenly">
            <div class="w-fit h-fit flex flex-row">
                <img class="w-auto h-2/3" src="{{ URL('images\landing\icono-1.png') }}" alt="">
                <h2 class="font-poppins font-bold text-5xl text-white ml-5 ">Noticias Recientes</h2>
            </div>
            <img  src="{{ URL('images\landing\boton-3.png') }}" alt="">
        </div>
        <div class="w-9/12 h-10/12  flex flex-row">
            {{-- <div class="w-2/12 h-full">

            </div> --}}
            <div class="w-10/12 h-full block overflow-auto scrollbar">

                @foreach ($insights as $insight)
                    <h3 class="font-poppins font-bold text-3xl text-white m-5">
                        {{ $insight->title }}
                    </h3>
                    <div id="noticias" onclick="window.location='{{ url('insight/'.$insight->id.'') }}'" class="w-full h-1/2  flex flex-row">
                        <div class="w-3/12 h-2/3 bg-purple-doc rounded-l-2xl flex flex-col justify-center items-center">
                            <h3 class="font-poppins font-bold text-3xl text-white mb-3">{{ \Carbon\Carbon::parse($insight->date)->format('d') }}</h3>
                            <h3 class="font-poppins font-bold text-3xl text-white mb-3">{{ \Carbon\Carbon::parse($insight->date)->format('M') }}</h3>
                            <h3 class="font-poppins font-bold text-3xl text-white mb-3">{{ \Carbon\Carbon::parse($insight->date)->format('Y') }}</h3>
                        </div>
                        <div class="w-9/12 h-11/12 bg-purple-doc rounded-b-2xl rounded-tr-2xl flex items-center justify-center">
                            <img class="w-11/12 h-auto" src="{{ URL(''. $insight->image.'') }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
</div>


