<div
    id="final"
    class="
        hidden
        w-[50vw]
        h-fit
        justify-center
        items-center
        {{-- bg-blue-400 --}}
        xl:h-screen"
>
    <div class="flex flex-col justify-center items-center z-20">
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


