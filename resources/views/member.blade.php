@extends('layouts.app')

@section('content')

<div class="w-full h-screen xl:bg-[url('/images/fondos/fondo-3.png')] bg-cover flex flex-col justify-center items-center">
    <div class="w-10/12 h-2/12 flex flex-row justify-end items-center">

        <div class="w-1/3 h-full flex flex-row  items-center ">

            <a href="/member-list"><img src="{{ URL('icons\boton-people.png') }}" alt=""></a>
            <a href="/"><img class="ml-5"  src="{{ URL('icons\boton-inicio.png') }}" alt=""></a>

        </div>

    </div>
    <div class="w-10/12 h-9/12 max-h-fit flex flex-row ">
        <div class="w-1/3 h-full  flex justify-center">
            <img class="w-auto h-1/2 " src="{{ asset($member->image) }}" alt="">
        </div>
        <div class="w-2/3 h-full ">

            <div class="w-full h-1/6 ">
                <h1 class="font-poppins font-bold text-5xl text-white">{{ $member->fullName }}</h1>
            </div>

            <div class="w-full h-1/6  flex flex-row">

                <div class="w-1/2 h-full ">
                    <p class="font-poppins font-bold text-2xl text-red-doc-dark">{{ $member->job }}</p>
                </div>

                <div class="w-1/2 h-full flex justify-end">
                    <p class="font-poppins font-bold text-2xl text-red-doc-dark">{{ $member->email }}</p>
                </div>

            </div>

            <div class="w-full h-4/6">
                <p class="text-justify font-poppins font-bold text-xl text-white">Ingeniero en computadores, programador, filántropo y emprendedor tecnológico estadounidense. En 1976, cofundó Apple Inc., que más tarde se convirtió en la compañía de tecnología informática más grande del mundo por ingresos y la compañía más grande del mundo por capitalización de mercado. A través de su trabajo en Apple en las décadas de 1970 y 1980, tanto él como Steve Jobs, cofundadores de la empresa, son ampliamente reconocidos como dos destacados pioneros de la revolución de las computadoras personales. En 1975, Wozniak comenzó a desarrollar la primera computadora de Apple, el Apple I1​ que se convirtió en la primera computadora lanzada por Apple cuando él y Jobs comenzaron a comercializarla el año siguiente. Diseñó la Apple II inicialmente en 1977, conocida como una de las primeras microcomputadoras de gran éxito producidas en masa7​ mientras Jobs supervisaba el desarrollo de su caja de plástico moldeado en espuma y el primer empleado de Apple, Rod Holt, desarrollaba la fuente de alimentación de conmutación.</p>
            </div>

        </div>
    </div>
</div>


{{-- <div class="bg-gray-200 w-screen h-[45vh] relative flex mt-5">
    <img class="relative object-cover w-full h-full z-10" src="{{ URL('images\layouts\insight.jpg') }}" alt="">
    <div class="bg-yellow-100 opacity-50 w-full h-full absolute float-left z-20"></div>

    <div class="bg-transparent w-full h-full  absolute float-left z-30 flex items-center justify-center">
        <img class="w-auto h-80 rounded-xl" src="{{ asset($member->image) }}" alt="">
        <div class="flex-col flex ml-10">
            <h1 class="font-serif text-6xl drop-shadow-2xl shadow-black pt-15">{{ $member->fullName }}</h1>
            <p class="text-black font-serif text-lg pt-7"> <b>{{ $member->job }}</b>  </p>
            <div class="flex items-center pt-9">
                <img class="h-6 w-auto" src="{{ URL('icons\send.png') }}" alt="">
                <b class="text-black font-serif text-base pl-2 border-b-2 border-red-800">{{ $member->email }}</b>
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
            {{ $member->biography }}
        </p>
    </div>
</div> --}}

@endsection
