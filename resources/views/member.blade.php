@extends('layouts.app')

@section('content')

<div class="bg-gray-200 w-screen h-[45vh] relative flex">
    <img class="relative object-cover w-full h-full z-10" src="{{ URL('images\layouts\insight.jpg') }}" alt="">
    <div class="bg-yellow-100 opacity-50 w-full h-full absolute float-left z-20"></div>

    <div class="bg-transparent w-full h-full  absolute float-left z-30 flex items-center justify-center">
        <img class="w-auto h-80 rounded-xl" src="{{ URL('images\profiles\Carlos_1.png') }}" alt="">
        <div class="flex-col flex ml-10">
            <h1 class="font-serif text-6xl drop-shadow-2xl shadow-black pt-15">Carlos Atehortúa García</h1>
            <p class="text-black font-serif text-lg pt-7"> <b>Director Campus virtual Unilibre</b>  </p>
            <div class="flex items-center pt-9">
                <img class="h-6 w-auto" src="{{ URL('icons\send.png') }}" alt="">
                <b class="text-black font-serif text-base pl-2 border-b-2 border-red-800">carlos.atehortua@unilibre.edu.co</b>
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
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam iure nihil culpa, quidem totam fugit expedita accusamus, neque reprehenderit ullam eaque ducimus ea consectetur. Sit totam pariatur aliquam quidem hic.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia at perferendis sequi reiciendis commodi facilis iure dolores laboriosam, voluptate blanditiis? Error ducimus sit excepturi quo, ratione tenetur earum veritatis perferendis.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad sint doloremque reprehenderit necessitatibus qui quisquam minima repudiandae, numquam tempore est hic temporibus officia voluptatem ab deleniti labore perferendis eius fugiat.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam iure nihil culpa, quidem totam fugit expedita accusamus, neque reprehenderit ullam eaque ducimus ea consectetur. Sit totam pariatur aliquam quidem hic.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia at perferendis sequi reiciendis commodi facilis iure dolores laboriosam, voluptate blanditiis? Error ducimus sit excepturi quo, ratione tenetur earum veritatis perferendis.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad sint doloremque reprehenderit necessitatibus qui quisquam minima repudiandae, numquam tempore est hic temporibus officia voluptatem ab deleniti labore perferendis eius fugiat.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam iure nihil culpa, quidem totam fugit expedita accusamus, neque reprehenderit ullam eaque ducimus ea consectetur. Sit totam pariatur aliquam quidem hic.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia at perferendis sequi reiciendis commodi facilis iure dolores laboriosam, voluptate blanditiis? Error ducimus sit excepturi quo, ratione tenetur earum veritatis perferendis.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad sint doloremque reprehenderit necessitatibus qui quisquam minima repudiandae, numquam tempore est hic temporibus officia voluptatem ab deleniti labore perferendis eius fugiat.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam iure nihil culpa, quidem totam fugit expedita accusamus, neque reprehenderit ullam eaque ducimus ea consectetur. Sit totam pariatur aliquam quidem hic.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia at perferendis sequi reiciendis commodi facilis iure dolores laboriosam, voluptate blanditiis? Error ducimus sit excepturi quo, ratione tenetur earum veritatis perferendis.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad sint doloremque reprehenderit necessitatibus qui quisquam minima repudiandae, numquam tempore est hic temporibus officia voluptatem ab deleniti labore perferendis eius fugiat.
        </p>
    </div>
</div>

@endsection
