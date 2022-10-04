@extends('layouts.auth')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md  sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md flex justify-evenly items-center">

                <p>Administrar Noticias:</p>

                <button onclick="window.location='{{ url('/admin/create') }}'" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
                    Crear
                </button>

            </header>

            <div class="w-full p-6 ">

                <div class="w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white flex flex-row">

                    @foreach ($insights as $insight)
                        <div onclick="window.location='{{ url('insight/'.$insight->id.'') }}'" class="w-3/12 h-[50vh] mt-10 flex justify-center items-center">
                            <div class="bg-gray-300 w-11/12 h-11/12 rounded-3xl border-t-8 border-yellow-doc flex justify-evenly items-center flex-col p-3">
                                <img class="w-auto h-[200px]" src="{{ URL(''.$insight->image.'') }}" alt="">
                                <h2 class="text-gray-700 font-serif text-2xl w-full text-center">
                                    {{ $insight->title }}
                                </h2>
                                <div class="w-2/3 flex justify-evenly items-center">
                                    <button onclick="window.location='{{ url('virtual-resources') }}'" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
                                        Editar
                                    </button>
                                    <button onclick="window.location='{{ url('virtual-resources') }}'" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
                                        Eliminar
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </section>

    </div>
</main>
@endsection
