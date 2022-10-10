@extends('layouts.app')

@section('content')

<div class=" w-screen min-h-[82vh] h-fit max-h-[300vh] flex justify-evenly flex-wrap pt-10 pb-10">

    @foreach ($platforms as $platform)
        <div onclick="window.location='{{ url(''.$platform->link.'') }}'" class="w-3/12 h-[45vh] mt-10 flex justify-center items-center">
            <div class="bg-red-500 w-11/12 h-11/12 rounded-3xl border-t-8 border-yellow-doc flex justify-evenly items-center flex-col p-3">
                <img class="w-auto h-[200px]" src="{{ URL(''.$platform->image.'') }}" alt="">
                <h2 class="text-white font-serif text-2xl w-full text-center">
                    {{ $platform->title }}
                </h2>
            </div>
        </div>
    @endforeach

</div>

@endsection
