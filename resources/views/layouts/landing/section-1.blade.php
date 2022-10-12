<div
    id="home"
    class="
        w-[85vw]
        h-fit
        flex
        z-20
        justify-center
        items-center
        xl:h-screen
        xl:w-screen
    "

>
    <div class="flex flex-col justify-center items-center ">
        <img
            onclick="window.location='{{ url('/login') }}'"
            src="{{ URL('images/logo.png') }}"
            alt="logo universidad libre"
            class="
                w-auto
                h-auto
                mt-20
                p-5
                xl:h-52"
        >
        <button
            onclick="window.location='{{ url('virtual-resources') }}'"
            class="
                bg-red-500
                hover:bg-red-400
                text-white
                font-bold
                py-2 px-4
                border-b-4
                border-red-700
                hover:border-red-500
                rounded
                mt-10
                xl:mt-20
                ">
            Ingreso a Plataformas
        </button>
    </div>
</div>
<div class="
        z-20
        w-[15vw]
        h-screen
        flex
        justify-center
        items-center
        ">


    <img id="arrow" src="{{ asset('icons/arrow.png') }}" alt="">


</div>


