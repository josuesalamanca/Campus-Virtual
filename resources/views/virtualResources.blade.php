@extends('layouts.app')

@section('content')

<div class="w-full h-screen xl:bg-[url('/images/fondos/fondo-1.png')] bg-cover">
    <div class="w-full h-2/12  flex flex-row">
        <div class="w-1/2 h-full flex flex-row bg-black-doc justify-center items-center rounded-br-lg ">
            <img class="w-auto h-auto" src="{{ URL('images\landing\icono-1.png') }}" alt="">
            <h2 class="font-poppins font-bold text-5xl text-white ml-5 ">Nuestras Plataformas</h2>
        </div>
        <div class="w-1/2 h-full flex justify-center items-center">
            <a href="/"><img  src="{{ URL('icons\boton-inicio.png') }}" alt=""></a>
        </div>

    </div>
    <div class="w-full h-10/12 flex justify-evenly items-center flex-wrap">

        @foreach ($platforms as $platform)
            <div onclick="window.location='{{ url(''.$platform->link.'') }}'" class="w-3/12 h-[45vh] flex justify-center items-center">
                <div class="bg-gradient-to-r from-red-doc to-red-doc-dark  w-11/12 h-11/12 rounded-3xl border-t-8 border-yellow-doc flex justify-evenly items-center flex-col ">
                    <img class="w-auto h-[200px]" src="{{ URL(''.$platform->image.'') }}" alt="">
                    <h2 class="text-white font-poppins font-medium text-2xl w-full text-center">
                        {{ $platform->title }}
                    </h2>
                </div>
            </div>
        @endforeach

    </div>
</div>



@endsection
