@extends('layouts.app')

@section('content')

<div class="w-full h-screen xl:bg-[url('/images/fondos/fondo-2.png')] bg-cover">
    <div class="w-full h-2/12  flex flex-row">
        <div class="w-1/2 h-full flex flex-row justify-center items-center ">
            <img class="w-auto h-auto" src="{{ URL('images\landing\icono-1.png') }}" alt="">
            <h2 class="font-poppins font-bold text-5xl text-white ml-5 ">Nuestras Noticias</h2>
        </div>
        <div class="w-1/2 h-full flex justify-center items-center">
            <a href="/"><img  src="{{ URL('icons\boton-inicio.png') }}" alt=""></a>
        </div>
    </div>
    <div class="w-full h-10/12 max-h-fit flex flex-row flex-wrap">
        @foreach ($insights as $insight)

            <div onclick="window.location='{{ url('insight/'.$insight->id.'') }}'" class="w-4/12 h-5/12 flex flex-row justify-center">

                <div class="w-2/12 h-2/3 bg-purple-doc rounded-l-2xl flex flex-col justify-center items-center">
                    <h3 class="font-poppins font-bold text-3xl text-white mb-3">{{ \Carbon\Carbon::parse($insight->date)->format('d') }}</h3>
                    <h3 class="font-poppins font-bold text-3xl text-white mb-3">{{ \Carbon\Carbon::parse($insight->date)->format('M') }}</h3>
                    <h3 class="font-poppins font-bold text-3xl text-white mb-3">{{ \Carbon\Carbon::parse($insight->date)->format('Y') }}</h3>
                </div>

                <div class="w-8/12 h-11/12 bg-purple-doc rounded-b-2xl rounded-tr-2xl flex items-center justify-center">
                    <img class="w-11/12 h-auto" src="{{ URL(''. $insight->image.'') }}" alt="">
                </div>

            </div>

        @endforeach
    </div>
</div>
@endsection
