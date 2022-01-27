@extends('layouts.app')
@section('content')
<section class="min-h-screen flex-grow justify-center flex flex-col align-middle row my-auto pt-32 pb-20">
    
    @if(!empty($events))
    <div class="py-10">
        <h3 class="md:text-4xl text-3xl font-medium text-center title-font mb-4 text-black">Latest Events</h3>
    </div>
        @foreach($events as $event)
            <div class="px-10 my-4 py-6 rounded shadow-xl bg-white w-3/5 mx-auto ">
                <div class="mt-2 text-center md:text-left">
                    <a class="text-xl text-gray-700 font-bold hover:text-gray-600" href="{{ route('single.event', $event->id) }}">
                        {{$event->title}}
                    </a>
                    <p class="mt-2 text-gray-600">
                        {{ $event->description }}
                    </p>
                </div>
                <div class="flex justify-center md:justify-between items-center mt-4">
                    <span class="font-light text-gray-600"><i class="uil uil-calender px-4"></i>{{ \Carbon\Carbon::parse($event->event_date)->format('d F Y')  }}</span>
                    <v-btn color="green" dark rounded class="px-2 py-1 bg-green-600 mx-5 text-gray-100 font-bold rounded mr-10 hover:bg-green-700" href="{{ route('single.event', $event->id) }}">view</v-btn>
                </div>
            </div>
        @endforeach
    @else
    <div class="py-10">
        <h3 class="text-xl  font-medium text-center title-font mb-4 text-black">Sorry, could not find anything</h3>
    </div>
    @endif
    
</section>
@endsection