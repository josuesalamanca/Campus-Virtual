@extends('layouts.app')

@section('content')

<div class="bg-gray-200 w-screen h-96 relative flex">
    <img class="relative object-cover w-full h-full z-10" src="{{ URL('images\layouts\insight.jpg') }}" alt="">
    <div class="bg-yellow-100 opacity-50 w-full h-full absolute float-left z-20"></div>
    <div class="bg-transparent w-5/6 h-11/12 border-b-4 border-red-800 absolute float-left z-30 ml-32 flex flex-col  ">

        <h1 class="text-white font-serif text-6xl drop-shadow-2xl shadow-black pt-15">{{ $insight->title }}</h1>
        <p class="text-white font-serif text-lg pt-7"> <b>{{ $insight->date }}</b></p>
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
</div>

@endsection
