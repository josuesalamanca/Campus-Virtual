@extends('layouts.app')

@section('content')

<div class="w-full h-screen xl:bg-[url('/images/fondos/fondo-1.png')] bg-cover">
    <div class="w-full h-2/12  flex flex-row">
        <div class="w-1/2 h-full flex flex-row bg-black-doc justify-center items-center rounded-br-lg ">
            <img class="w-auto h-auto" src="{{ URL('images\landing\icono-1.png') }}" alt="">
            <h2 class="font-poppins font-bold text-5xl text-white ml-5 ">Oferta Académica</h2>
        </div>
        <div class="w-1/2 h-full flex justify-center items-center">
            <a href="/"><img  src="{{ URL('icons\boton-inicio.png') }}" alt=""></a>
        </div>

    </div>
    <div class="w-9/12 h-10/12  block overflow-auto">

        <div class="w-11/12 h-5/12 flex items-center justify-center">
            <img src="{{ URL('images\offer\banner-1.png') }}" alt="">
        </div>

        <div class="w-11/12 h-5/12  flex items-center justify-center">
            <img src="{{ URL('images\offer\banner-2.png') }}" alt="">
        </div>

        <div class="w-11/12 h-5/12  flex items-center justify-center">
            <img src="{{ URL('images\offer\banner-3.png') }}" alt="">
        </div>

    </div>
</div>

@endsection
