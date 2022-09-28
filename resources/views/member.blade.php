@extends('layouts.app')

@section('content')

<div class="bg-gray-200 w-screen h-[45vh] relative flex mt-5">
    <img class="relative object-cover w-full h-full z-10" src="{{ URL('images\layouts\insight.jpg') }}" alt="">
    <div class="bg-yellow-100 opacity-50 w-full h-full absolute float-left z-20"></div>

    <div class="bg-transparent w-full h-full  absolute float-left z-30 flex items-center justify-center">
        <img class="w-auto h-80 rounded-xl" src="{{ URL('images\profiles\Carlos_1.png') }}" alt="">
        <div class="flex-col flex ml-10">
            <h1 class="font-serif text-6xl drop-shadow-2xl shadow-black pt-15">{{ $member[0]->fullName }}</h1>
            <p class="text-black font-serif text-lg pt-7"> <b>{{ $member[0]->job }}</b>  </p>
            <div class="flex items-center pt-9">
                <img class="h-6 w-auto" src="{{ URL('icons\send.png') }}" alt="">
                <b class="text-black font-serif text-base pl-2 border-b-2 border-red-800">{{ $member[0]->email }}</b>
            </div>
        </div>
    </div>
</div>
<div class="w-screen min-h-screen max-h-[300vh] flex">
    <div class=" w-1/3 h-full flex justify-center">
        <div class="flex  flex-col pt-20 ">
            <p class="text-3xl font-serif font-semibold">Perfil Profesional</p>
            <hr class="w-12 h-[3px] mt-2 bg-red-800 border-none">
        </div>
    </div>
    <div class=" w-2/3 min-h-full max-h-[300vh] p-20 pr-52">
        <p class="font-serif text-2xl font-semibold subpixel-antialiased leading-10">
            {{ $member[0]->biography }}
        </p>
    </div>
</div>

@endsection
