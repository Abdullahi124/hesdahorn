<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="bg-gray-100 h-screen">
        
        <navigation-bar class="w-full fixed z-10"></navigation-bar>
        <main class="bg-gray-100">
            <v-app>
            @yield('content')
        </v-app>
        </main>


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">

        
        <footer class="bg-green-700 w-100">
            <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-left">
                <!-- Col-1 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Quick access
                    </div>
        
                    <!-- Links -->
                    <a href="/" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Home
                    </a>
                    <a href="/about" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        About
                    </a>
                    <a href="/news" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        News and updates
                    </a>
                    <a href="focus-areas" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Focus areas
                    </a>
                </div>
        
                <!-- Col-2 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Get involved
                    </div>
        
                    <!-- Links -->
                    <a href="/contact" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Contact us
                    </a>
                    <a href="/events" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Events
                    </a>
                </div>
        
                <!-- Col-3 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Data privacy
                    </div>
        
                    <!-- Links -->
                    <a href="/privacy" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Privacy policy
                    </a>
                </div>
        
                <!-- Col-3 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Socials
                    </div>
        
                    <a href="https://www.facebook.com/watch/www.hesdahorn.org/" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Fcebook
                    </a>
                    <a href="https://twitter.com/HesdaHorn" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Twitter
                    </a>
                    <a href="https://www.youtube.com/channel/UC2S0W2tdsMUDJjJEzCOc3Bw" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        YouTube
                    </a>
                </div>
            </div>
        
            <!-- Copyright Bar -->
            <div class="pt-2">
                <div class="flex pb-5 px-3 m-auto pt-5 
                    border-t border-gray-500 text-gray-400 text-sm 
                    flex-col md:flex-row max-w-6xl">
                    <div class="mt-2">
                        © Copyright {{ now()->year }} hesdahorn.org. All Rights Reserved.
                    </div>
        
                    <!-- Required Unicons (if you want) -->
                    <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                        <a href="https://www.facebook.com/watch/www.hesdahorn.org/" target="_blank" class="w-6 mx-1">
                            <i class="uil uil-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/HesdaHorn" target="_blank" class="w-6 mx-1">
                            <i class="uil uil-twitter-alt"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UC2S0W2tdsMUDJjJEzCOc3Bw" target="_blank" class="w-6 mx-1">
                            <i class="uil uil-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        
    </div>
</body>
</html>
