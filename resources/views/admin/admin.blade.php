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

                @if ($resource == 'insight')
                    <p>Administrar Noticias:</p>
                @elseif ($resource == 'platform')
                    <p>Administrar plataformas:</p>
                @elseif ($resource == 'member')
                    <p>Administrar Integrantes:</p>
                @endif

                <button
                    @if ($resource == 'insight')
                        onclick="window.location='{{ url('/admin/insights/create') }}'"
                    @elseif ($resource == 'platform')
                        onclick="window.location='{{ url('/admin/platforms/create') }}'"
                    @elseif ($resource == 'member')
                        onclick="window.location='{{ url('/admin/members/create') }}'"
                    @endif
                    class="bg-red-500
                        hover:bg-red-400
                        text-white font-bold
                        py-2
                        px-4
                        border-b-4
                        border-red-700
                        hover:border-red-500
                        rounded">
                            Crear
                </button>

            </header>

            <div class="w-full p-6 ">

                <div class="w-full  rounded-lg flex justify-evenly flex-wrap">

                    @if ($resource == 'insight')
                        @foreach ($insights as $insight)
                            <div  class="w-3/12 h-[50vh] mt-10 flex justify-center items-center">
                                <div class="bg-gray-300 w-11/12 h-11/12 rounded-3xl border-t-8 border-yellow-doc flex justify-evenly items-center flex-col p-3">
                                    <img class="w-auto h-[200px]" src="{{ asset(''.$insight->image.'') }}" alt="">
                                    <h2 class="text-gray-700 font-serif text-2xl w-full text-center">
                                        {{ $insight->title }}
                                    </h2>
                                    <div class="w-2/3 flex justify-evenly items-center">
                                        <button onclick="window.location='{{ url('admin/insights/'.$insight->id.'/edit') }}'" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
                                            Editar
                                        </button>
                                        <form onclick="return confirm('Eliminar Noticia')" action="insights/{{ $insight->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
                                                Eliminar
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @elseif ($resource == 'platform')
                        @foreach ($platforms as $platform)
                            <div  class="w-3/12 h-[50vh] mt-10 flex justify-center items-center">
                                <div class="bg-gray-300 w-11/12 h-11/12 rounded-3xl border-t-8 border-yellow-doc flex justify-evenly items-center flex-col p-3">
                                    <img class="w-auto h-[200px]" src="{{ asset(''.$platform->image.'') }}" alt="">
                                    <h2 class="text-gray-700 font-serif text-2xl w-full text-center">
                                        {{ $platform->title }}
                                    </h2>
                                    <div class="w-2/3 flex justify-evenly items-center">
                                        <button onclick="window.location='{{ url('admin/platforms/'.$platform->id.'/edit') }}'" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
                                            Editar
                                        </button>
                                        <form onclick="return confirm('Eliminar Plataforma')" action="platforms/{{ $platform->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
                                                Eliminar
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @elseif ($resource == 'member')
                        @foreach ($members as $member)
                            <div  class="w-3/12 h-[50vh] mt-10 flex justify-center items-center">
                                <div class="bg-gray-300 w-11/12 h-11/12 rounded-3xl border-t-8 border-yellow-doc flex justify-evenly items-center flex-col p-3">
                                    <img class="w-auto h-[200px]" src="{{ URL(''.$member->image.'') }}" alt="">
                                    <h2 class="text-gray-700 font-serif text-2xl w-full text-center">
                                        {{ $member->fullName }}
                                    </h2>
                                    <div class="w-2/3 flex justify-evenly items-center">
                                        <button onclick="window.location='{{ url('admin/members/'.$member->id.'/edit') }}'" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
                                            Editar
                                        </button>
                                        <form onclick="return confirm('Eliminar Integrante')" action="members/{{ $member->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
                                                Eliminar
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>
            </div>

        </section>

    </div>
</main>
@endsection
