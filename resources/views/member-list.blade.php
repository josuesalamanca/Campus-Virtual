@extends('layouts.app')

@section('content')

<div class="w-full h-screen xl:bg-[url('/images/fondos/fondo-3.png')] bg-cover">
    <div class="w-full h-2/12  flex flex-row">
        <div class="w-1/2 h-full flex flex-row justify-center items-center ">
            <img class="w-auto h-auto" src="{{ URL('images\landing\icono-1.png') }}" alt="">
            <h2 class="font-poppins font-bold text-5xl text-white ml-5 ">Nuestras Noticias</h2>
        </div>
        <div class="w-1/2 h-full flex justify-center items-center">
            <a href="/"><img  src="{{ URL('icons\boton-inicio.png') }}" alt=""></a>
        </div>
    </div>
    <div class="w-full h-10/12 max-h-fit flex flex-row flex-wrap ">
        <div class="w-full h-1/2 flex flex-row items-center justify-evenly">
            <a href="/member/1"><img src="{{ URL('images\profiles\prof_3.png') }}" alt=""></a>
            <a href="/member/3"><img src="{{ URL('images\profiles\prof_1.png') }}" alt=""></a>
            <a href="/member/2"><img src="{{ URL('images\profiles\prof_5.png') }}" alt=""></a>
            <a href="/member/4"><img src="{{ URL('images\profiles\prof_4.png') }}" alt=""></a>
        </div>
        <div class="w-full h-1/2  flex flex-row items-center justify-evenly">
            <a href="/member/6"><img src="{{ URL('images\profiles\prof_2.png') }}" alt=""></a>
            <a href="/member/5"><img src="{{ URL('images\profiles\prof_6.png') }}" alt=""></a>
        </div>
    </div>
</div>
@endsection
