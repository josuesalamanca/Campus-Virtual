<div class=" w-screen h-screen box-border flex flex-col  items-center">
    <div class=" w-full h-1/12 flex justify-center items-center">
        <h2 class="font-serif text-2xl">Nuestro Equipo</h2>
    </div>
    <div class=" w-3/4 h-10/12 flex ">
        <div class="w-1/3 h-full flex flex-col justify-end items-center p-5">
            <img class="h-4/12 w-4/6 mb-5" src="{{ URL('images\profiles\prof_1.png') }}" alt="">
            <img class="h-4/12 w-4/6" src="{{ URL('images\profiles\prof_2.png') }}" alt="">
        </div>
        <div class="w-1/3 h-full flex flex-col justify-evenly items-center p-5">
            <img class="h-4/12 w-4/6 mb-5" src="{{ URL('images\profiles\prof_3.png') }}" onclick="window.location='{{ url('member') }}'"alt="">
            <img class="h-4/12 w-4/6" src="{{ URL('images\profiles\prof_4.png') }}" alt="">
        </div>
        <div class="w-1/3 h-full flex flex-col justify-end items-center p-5">
            <img class="h-4/12 w-4/6 mb-5" src="{{ URL('images\profiles\prof_5.png') }}" alt="">
            <img class="h-4/12 w-4/6" src="{{ URL('images\profiles\prof_6.png') }}" alt="">
        </div>
    </div>
</div>
