@extends('layouts.app')

@section('content')

<div class="w-full h-screen xl:bg-[url('/images/fondos/fondo-2.png')] bg-cover">
    <div class="w-full h-4/12  flex flex-row">
        <div class="w-3/4 h-full flex flex-row justify-center items-center">
            <img class="w-auto h-auto" src="{{ URL('images\landing\icono-1.png') }}" alt="">
            <div class="w-10/12 h-full flex flex-col justify-end">
                <h2 class="font-poppins font-bold text-5xl text-white ml-5 mb-10">{{ $insight->title }}</h2>
                <p class="text-red-doc-dark font-serif text-2xl pt-7 ml-5"> <b>{{ $insight->date }}</b></p>
            </div>

        </div>
        <div class="w-1/4 h-full flex flex-col justify-center ">
            <a href="/"><img class="mb-3"  src="{{ URL('icons\boton-inicio.png') }}" alt=""></a>
            <a href="/insights-list"><img  src="{{ URL('icons\boton-news.png') }}" alt=""></a>
        </div>
    </div>
    <div class="w-full h-8/12 max-h-fit flex flex-row justify-end items-center">
        <img src="{{ URL('images\text.png') }}" alt="">
    </div>
</div>


{{-- <div class="bg-gray-200 w-screen h-96 relative flex">
    <img class="relative object-cover w-full h-full z-10" src="{{ URL('images\layouts\insight.jpg') }}" alt="">
    <div class="bg-yellow-100 opacity-50 w-full h-full absolute float-left z-20"></div>
    <div class="bg-transparent w-5/6 h-11/12 border-b-4 border-red-800 absolute float-left z-30 ml-32 flex flex-col  ">

        <h1 class="text-white font-serif text-6xl drop-shadow-2xl shadow-black pt-15">{{ $insight->title }}</h1>

        <div class="flex items-center pt-9">
            <img class="h-6 w-auto" src="{{ URL('icons\send.png') }}" alt="">
            <a href="{{ $insight->link }}" class="text-white font-serif text-base pl-2 border-b-2 border-red-800"><b>más información</b> </a>
        </div>
    </div>
</div>
<div class="w-screen min-h-screen max-h-[300vh] flex">
    <div class=" w-1/3 h-full flex justify-center">
        <div class="flex  flex-col pt-20 ">
            <p class="text-3xl font-serif font-semibold">Desarrollo</p>
            <hr class="w-12 h-[3px] mt-2 bg-red-800 border-none">
        </div>
    </div>
    <div class=" w-2/3 min-h-full max-h-[300vh] p-20 pr-52">
        <p class="font-serif text-2xl font-semibold subpixel-antialiased leading-10 text-justify">
            {!! preg_replace( '/\r|\n|"/', "", nl2br($insight->resume)) !!}
        </p>
    </div>
</div> --}}

@endsection
