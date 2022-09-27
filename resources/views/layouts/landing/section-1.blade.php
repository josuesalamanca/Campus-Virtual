<div class="w-screen h-screen flex justify-center items-center">
    <div class="flex flex-col justify-center items-center z-20">
        {{-- <h2 class="font-lobster flex text-9xl">Bienvenido</h2> --}}
        {{-- <h1 class="font-BlackOps text-6xl mt-7">Campus Virtual Unilibre</h1> --}}
        <img class="w-auto h-52 mt-20" src="{{ URL('images/logo.png') }}" alt="logo universidad libre">
        <button onclick="window.location='{{ url('virtual-resources') }}'" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700
                     hover:border-red-500 rounded mt-20">
            Ingreso a Plataformas
        </button>
    </div>

</div>

