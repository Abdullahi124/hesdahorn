@extends('layouts.app')
@section('content')

<section class="min-h-screen flex-grow justify-center flex flex-col align-middle row my-auto pt-32 pb-20">
    <div class="max-w-7xl px-6 mx-auto">
    <div class="grid gap-8 mt-10 md:grid-cols-3 lg:grid-cols-3">
        <div class="px-6 py-8 overflow-hidden bg-white rounded-t-3xl shadow-lg flex flex-col">
            <img class="object-cover object-center rounded-md shadow w-full h-72"
            src="https://images.unsplash.com/photo-1591389703635-e15a07b842d7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1490&q=80">
            <div class="flex justify-between">
                <h2 class="text-xl font-medium text-gray-800 mt-6 uppercase">Land</h2>
                <v-btn color="green" rounded dark href="/focus-areas/land" class="bg-green-500 w-32 rounded-full text-white mt-5 px-4 py-3 transition duration-300 ease-in-out hover:bg-green-600 mr-6">
                    Read more
                </v-btn>
            </div>
        </div>

        <div class="px-6 py-8 overflow-hidden bg-white rounded-t-3xl shadow-lg flex flex-col">
            <img class="object-cover object-center rounded-md shadow w-full h-72"
            src="https://images.unsplash.com/photo-1615529328331-f8917597711f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fHdhdGVyfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
            <div class="flex justify-between">
                <h2 class="text-xl font-medium text-gray-800 mt-6 uppercase">Water</h2>
                <v-btn color="green" rounded dark href="/focus-areas/water" class="bg-green-500 w-32 rounded-full text-white mt-5 px-4 py-3 transition duration-300 ease-in-out hover:bg-green-600 mr-6">
                    Read more
                </v-btn>
            </div>
        </div>

        <div class="px-6 py-8 overflow-hidden bg-white rounded-t-3xl shadow-lg flex flex-col">
            <img class="object-cover object-center rounded-md shadow w-full h-72"
            src="https://images.unsplash.com/photo-1561553590-267fc716698a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nzh8fGNsaW1hdGV8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
            <div class="flex justify-between">
                <h2 class="text-xl font-medium text-gray-800 mt-6 uppercase">Climate</h2>
                <v-btn color="green" rounded dark href="/focus-areas/climate" class="bg-green-500 w-32 rounded-full text-white mt-5 px-4 py-3 transition duration-300 ease-in-out hover:bg-green-600 mr-6">
                    Read more
                </v-btn>
            </div>
        </div>

        {{-- <div class="px-6 py-8 overflow-hidden bg-white rounded-t-3xl shadow-lg flex flex-col">
            <img class="object-cover object-center rounded-md shadow w-full h-72"
            src="https://images.unsplash.com/photo-1582377224944-2c2a17affa38?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjZ8fGNsaW1hdGUlMjBjaGFuZ2V8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
            <div class="flex justify-between">
                <h2 class="text-xl font-medium text-gray-800 mt-6 uppercase">Air</h2>
                <a href="/focus-areas/air" class="bg-green-500 w-32 rounded-full text-white mt-5 px-4 py-3 transition duration-300 ease-in-out hover:bg-green-600 mr-6">
                    Read more
                </a>
            </div>
        </div> --}}
    </div>
</div>
</section>
@endsection