@extends('layouts.auth')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md  sm:shadow-lg justify-center items-center">

            <header class="w-full font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md flex justify-evenly items-center">

                @if ($resource == 'insight')
                    <p>Editar Noticia:</p>
                @elseif ($resource == 'platform')
                    <p>Editar plataforma:</p>
                @elseif ($resource == 'member')
                    <p>Editar Integrante:</p>
                @endif


            </header>

            <div class="block p-6 rounded-lg shadow-lg bg-white-500 w-1/3">

                @if ($resource == 'insight')
                    <form action="/admin/insights/{{ $insight->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('Put')
                        <div class="form-group mb-6">
                            <input type="text" class="form-control block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-500
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleInput7"
                            placeholder="Titulo"
                            name="title"
                            value="{{ $insight->title }}">
                        </div>
                        <div class="form-group mb-6">
                            <input type="date" class="form-control block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleInput8"
                            placeholder="Fecha"
                            name="date"
                            value="{{ $insight->date }}">
                        </div>
                        <div class="form-group mb-6">
                            <input type="text" class="form-control block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleInput9"
                            placeholder="Link más información"
                            name="link"
                            value="{{ $insight->link }}">
                        </div>
                        <div class="form-group mb-6">
                            <textarea
                            class="
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            "
                            id="exampleFormControlTextarea13"
                            rows="3"
                            placeholder="Desarrollo"
                            name="resume"
                            >{{ $insight->resume }}</textarea>
                        </div>
                        <div class="form-group mb-6">
                            <input type="file" class="form-control
                                block
                                form-control
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-400
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0"
                            id="imgs"
                            name="image">
                        </div>
                        <button type="submit" class="
                            w-full
                            px-6
                            py-2.5
                            bg-blue-600
                            text-white
                            font-medium
                            text-xs
                            leading-tight
                            uppercase
                            rounded
                            shadow-md
                            hover:bg-blue-700 hover:shadow-lg
                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                            active:bg-blue-800 active:shadow-lg
                            transition
                            duration-150
                            ease-in-out">Actualizar
                        </button>
                    </form>
                @elseif ($resource == 'platform')
                    <form action="/admin/platforms/{{ $platform->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('Put')
                        <div class="form-group mb-6">
                            <input type="text" class="form-control block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-500
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleInput7"
                            placeholder="Titulo"
                            value="{{ $platform->title }}"
                            name="title">
                        </div>
                        <div class="form-group mb-6">
                            <input type="text" class="form-control block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleInput9"
                            placeholder="Link hacía la plaraforma"
                            value="{{ $platform->link }}"
                            name="link">
                        </div>
                        <div class="form-group mb-6">
                            <input type="file" class="form-control
                                block
                                form-control
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-400
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0"
                            id="imgs"
                            name="image">
                        </div>
                        <button type="submit" class="
                            w-full
                            px-6
                            py-2.5
                            bg-blue-600
                            text-white
                            font-medium
                            text-xs
                            leading-tight
                            uppercase
                            rounded
                            shadow-md
                            hover:bg-blue-700 hover:shadow-lg
                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                            active:bg-blue-800 active:shadow-lg
                            transition
                            duration-150
                            ease-in-out">Actualizar
                        </button>
                    </form>
                @elseif ($resource == 'member')
                    <form action="/admin/members/{{ $member->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('Put')
                        <div class="form-group mb-6">
                            <input type="text" class="form-control block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-500
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="fullName"
                            placeholder="Nombre Completo"
                            value="{{ $member->fullName }}"
                            name="fullName">
                        </div>
                        <div class="form-group mb-6">
                            <input type="text" class="form-control block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="job"
                            placeholder="Cargo"
                            value="{{ $member->job }}"
                            name="job">
                        </div>
                        <div class="form-group mb-6">
                            <input type="text" class="form-control block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="email"
                            placeholder="Correo Electronico"
                            value="{{ $member->email }}"
                            name="email">
                        </div>
                        <div class="form-group mb-6">
                            <textarea
                            class="
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            "
                            id="biography"
                            rows="3"
                            placeholder="Perfil Profesional"
                            name="biography"
                            >{{ $member->biography }}</textarea>
                        </div>
                        <div class="form-group mb-6">
                            <input type="file" class="form-control
                                block
                                form-control
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-400
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0"
                            id="imgs"
                            name="image">
                        </div>
                        <button type="submit" class="
                            w-full
                            px-6
                            py-2.5
                            bg-blue-600
                            text-white
                            font-medium
                            text-xs
                            leading-tight
                            uppercase
                            rounded
                            shadow-md
                            hover:bg-blue-700 hover:shadow-lg
                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                            active:bg-blue-800 active:shadow-lg
                            transition
                            duration-150
                            ease-in-out">Actualizar
                        </button>
                    </form>
                @endif

            </div>
        </section>

    </div>
</main>
@endsection
