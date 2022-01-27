@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col justify-center bg-gray-100 dark:bg-gray-900 items-center ">

    <!--body-->
    <carousel></carousel>
    <v-container class="flex justify-center align-middle my-12">
        <div class="flex flex-col justify-center align-middle my-auto mx-auto">
            <h1 class="text-2xl md:text-5xl font-semibold w-1/2 text-gray-800 uppercase my-5 mx-auto md:mx-0">
                HORN ENVIRONMENTAL AND 
                SUSTAINABILITY <br>
                DEVELOPMENT ADVOCACY (HESDA) <br>
            </h1>
            <p class="text-sm md:text-md my-5 w-1/2 mx-auto">
                Horn Environmental and Sustainable Development Advocacy (HESDA) 
                is committed to building a sustainable healthy environment. 
                HESDA is actively involved in protecting 
                biodiversity and ecosystems.
                We are dedicated to the development of a rich, robust and vibrant world within which we can secure a sustainable future healthy environment 
                through a diverse array of strategic partners in science, education and community awareness.
            </p>
            <v-btn dark color="green" rounded href="/about" class="bg-green-500 w-32 mx-auto rounded-full text-white px-4 py-3 transition duration-300 ease-in-out hover:bg-green-600">
                Learn more
            </v-btn>
        </div>

    </v-container>

    <v-parallax
    height="400"
    class="w-full"
    src="/images/cow.jpg"
  ></v-parallax>
        
        <section class="w-full my-auto">
            <div class="max-w-5xl px-6 py-16 mx-auto space-y-8 md:flex md:items-center md:space-y-0">
                <div class="md:w-2/3">
                    <h2 class="text-3xl md:text-4xl font-semibold text-gray-800 md:mt-6 mr-10">"Sustainability is no longer about doing <span class="text-green-500">less harm</span>, it's about doing <br> more good."</h2>
                    <p class="max-w-lg mt-4 text-gray-600">
                        We are dedicated to the development of a rich, robust and vibrant world within which we can secure a sustainable future healthy environment. Through a diverse array of strategic partners in science, education and community awareness.
                        HESDA builds unique programs that promote human well-being through the preservation, restoration and management of biodiversity and the services our ecosystems provide.
                    </p>
                    <div class="hidden md:flex md:items-center md:space-x-10 my-12">
                        <img class="object-cover object-center rounded-md shadow w-72 h-72"
                            src="https://images.unsplash.com/photo-1615092296061-e2ccfeb2f3d6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
                        <img class="object-cover object-center w-64 rounded-md shadow h-96"
                            src="https://images.unsplash.com/photo-1582477134771-219af31003be?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjV8fGdsb2JhbCUyMHdhcm1pbmd8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                    </div>
                </div>
                <div class="md:w-1/3">
                    <img class="object-cover object-center w-full rounded-md shadow" style="height: 700px;"
                        src="https://images.unsplash.com/photo-1618144717583-5bf4d0c0a31e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80">
                </div>
            </div>
        </section>
        
        <section class="w-full">
            <div class="w-full py-16">
                <div class="px-8 py-12  md:px-20 md:flex md:items-center md:justify-center"> {{-- bg colour or image can be added to this div  --}}
                    <div>
                        <h3 class="text-4xl font-semibold text-black uppercase">Latest News</h3>
                    </div>
                </div>

                <div class="max-w-7xl px-6 mx-auto">
                    <div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-{{count($posts) <= 3 ? count($posts) : 3}}">
                        @foreach($posts as $post)
                            <div class="px-6 py-8 overflow-hidden bg-white rounded-t-3xl shadow-lg flex flex-col justify-between">
                                <h2 class="text-xl font-medium text-gray-800 mt-5">{{ $post->title }}</h2>
                                <p class="max-w-md mt-4 text-gray-400">
                                    {{$post->description}}
                                </p>
                                <v-btn color="green" dark rounded href="/news/single-post/{{$post->id}}" class="bg-green-500 w-32 rounded-full text-white mt-5 px-4 py-3 transition duration-300 ease-in-out hover:bg-green-600 mr-6">
                                    Read more
                                </v-btn>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- start of mission vision section  --}}
        <section class="w-full">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="items-center md:flex md:space-x-6">
                    <div class="md:w-1/2">
                        <h3 class="text-2xl font-semibold text-green-600 text-center">Our Mission</h3>
                        <p class="max-w-md mt-4 text-gray-600 text-center">
                            Our mission is to provide leadership in environmental management and protection towards sustainability for the benefit of Somalia, the Horn of Africa, and the global community.
                        </p>
                    </div>
        
                    <div class="mt-8 md:mt-0 md:w-1/2">
                        <div class="flex items-center justify-center">
                            <div class="max-w-md">
                                <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;"
                                    src="
                                    https://images.unsplash.com/photo-1593856866552-19d129d4a7ee?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YWZyaWNhJTIwZHJvdWdodHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60
                                    ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="w-full">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="items-center md:flex md:space-x-6">
                    <div class="md:w-1/2">
                        <div class="flex items-center justify-center">
                            <div class="max-w-md">
                                <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;"
                                    src="
                                    https://images.unsplash.com/photo-1515191107209-c28698631303?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fHZpc2lvbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60
                                    ">
                            </div>
                        </div>
                    </div>
        
                    <div class="mt-8 md:mt-0 md:w-1/2">
                        <h3 class="text-2xl font-semibold text-green-600 text-center">Our Vision</h3>
                        <p class="max-w-md mt-4 text-gray-600 text-center">
                            A prosperous and equitable society living in harmony with our natural resources.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="w-full">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="items-center md:flex md:space-x-6">
                    <div class="md:w-1/2">
                        <h3 class="text-2xl font-semibold text-green-600 text-center">Our Values</h3>
                        <p class="max-w-md mt-4 text-gray-600 text-center">
                            Dedication to excellence in research and environmental sustainability advocacy is one of our values here at HESDA.
                        </p>
                    </div>
        
                    <div class="mt-8 md:mt-0 md:w-1/2">
                        <div class="flex items-center justify-center">
                            <div class="max-w-md">
                                <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;"
                                    src="
                                    https://images.unsplash.com/photo-1586890641972-ed35f142619e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTMzfHxnbG9iYWwlMjB3YXJtaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60
                                    ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end of mission, vision section  --}}

        <section class="w-full mt-8">
            <div class="flex flex-col w-3/4 mx-auto justify-center overflow-hidden my-10">
                <h3 class="text-4xl md:text-5xl text-center font-semibold text-black uppercase">Join Our Newsletter</h3>
                <p class="mt-4 text-gray-600 text-center">
                    Join our newsletter to get the latest updates and events.
                    By joining our newsletter you agree to our privacy policy
                </p>
                <form class="mx-auto my-10" action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <div class="flex flex-col overflow-hidden sm:flex-row">
                        {{-- <input class="outline-none rounded-full w-96  pl-4 text-black placeholder-black shadow-lg focus:bg-gray-100" type="text" name="email" placeholder="Enter your email"> --}}
                        <v-text-field label="Enter your email" placeholder="email" type="text" name="email" class="w-96" solo></v-text-field>
                        <v-btn color="green" rounded dark type="submit" class="py-3 px-4 bg-green-500 w-32 text-white font-semibold shadow-lg uppercase mx-5 md:my-2 rounded-full hover:bg-green-700">subscribe</v-btn>
                    </div>
                </form>
                
                @if ($errors->any())
                <div role="alert mt-5">
                  <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                    Error
                  </div>
                  <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                    @foreach ($errors->all() as $error)
                    <p>{{$error}}.</p>
                    @endforeach
                  </div>
                </div>
              @endif

            </div>
        </section>
        
</div>
@endsection