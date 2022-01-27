@extends('layouts.app')
@section('content')
<section class="min-h-screen flex-grow flex flex-col row my-auto pb-20">
    <section class="flex items-center justify-center bg-gray-800" 
    style="height: 400px; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://images.unsplash.com/photo-1582377224944-2c2a17affa38?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjZ8fGNsaW1hdGUlMjBjaGFuZ2V8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'); 
        background-size: cover; background-position: center;"
    >
        <div class="text-center">
            <p class="text-3xl font-medium tracking-wider text-white uppercase">AIR</p>
        </div>
    </section>

    <section class="flex flex-col items-center justify-center max-w-7xl mx-auto">
        {{-- <div class="text-center">
            <h2 class="mt-6 text-3xl font-bold text-gray-800 md:text-4xl"></h2>
        </div> --}}
    
        <div class="grid gap-8 mt-10 md:mt-20 md:grid-cols-1">
                        
            <div class="flex flex-col space-x-4">
                <div>
                    <p class="max-w-lg mt-4 text-gray-600 px-5 md:px-0">
                        Good air quality is vital to human health, agriculture and functioning ecosystems, and air pollution can have a big impact on the climate. HESDA carries out pioneering research on the impacts of, and solutions to, air pollution, from household up to global scale.
                    </p>
                    <p class="max-w-lg mt-4 text-gray-600 px-5 md:px-0">
                    </p>
                </div>
            </div>
    
        </div>
    </section>

</section>
@endsection