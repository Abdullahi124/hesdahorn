@extends('layouts.app')
@section('content')
<section class="min-h-screen flex-grow justify-center flex flex-col align-middle row my-auto pt-32 pb-20">
    <div class="py-10">
        <h3 class="md:text-4xl text-3xl font-medium text-center title-font mb-4 text-black">{{ $event->title }}</h3>
    </div>

    <div class="mx-auto mt-5 justify-center align-middle shadow-lg">
        <iframe width="760" height="515" src="{{ $event->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    {{-- <p class="w-1/2 mx-auto mt-10 text-gray-600">
        {{ $event->description }}
    </p> --}}

</section>
@endsection