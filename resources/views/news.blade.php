@extends('layouts.app')
@section('content')

<section class="flex items-center justify-center bg-gray-800" 
style="height: 450px; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://images.unsplash.com/photo-1615591147831-a015747820ae?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80'); 
    background-size: cover; background-position: center;"
>
    <div class="text-center">
        <p class="text-3xl font-medium tracking-wider text-white uppercase">latest news and updates</p>
    </div>
</section>
<section class='text-green-600 w-full border-b-2 border-green-500 flex flex-row items-center justify-center py-8'>
    <div>
        <h3 class='text-black font-bold text-lg capitalize mx-auto'>latest posts</h3>
    </div>
    {{-- <div class='flex flex-row items-center '>
        <div>
<div class="relative inline-flex px-2">
<svg class="w-2 h-2 absolute bottom-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="green" fill-rule="nonzero"/></svg>
  <select class="border border-gray-600 rounded-md cursor-pointer  text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
    <option>Input</option>
    <option class='hover:bg-green-500'>A</option>
    <option>B</option>
    <option>C</option>
    
  </select>
</div>
        </div>
        
        <div class='px-4'>
            <button class='bg-green-500 px-4 md:px-4 py-2 rounded-md text-white capitalize'>filter</button>
        </div> 
    </div>--}}
</section>

<section class='py-10 bg-white'>
@foreach($posts as $post)

<section class=' md:max-w-screen-lg mx-auto   py-5 '>
    <section class='m-3 md:m-0 flex flex-col md:flex md:flex-grow md:flex-row shadow-2xl rounded-md bg-white' >
                
        <div class='text-center md:text-left px-2 md:w-full md:mx-9 flex flex-col justify-around '>
            <h3 class='py-2 capitalize  text-black font-bold'>{{ $post->title }}</h3>
            <p  class='capitalize text-md'>{{ $post->description }}</p>
            <div class=' py-4 flex w-full justify-between items-center capitalize'>
                <h3 class='flex text-sm text-gray-400 '>
                <a href="#" class=" mx-1">
                                <i class="uil uil-calender w-14 h-10"></i>
                            </a>    
                            {{ \Carbon\Carbon::parse($post->created_at)->format('d F Y')  }} </h3>
                <v-btn color="green" dark rounded href="/news/single-post/{{$post->id}}" class='bg-green-500 p-2 rounded-lg cursor-pointer text-white'>read more</v-btn>
                </div>
        </div>
        
    </section>

</section>
@endforeach


    
    
    
    
    
    <div class="flex flex-col items-center py-7     ">
        <span class='mx-3'>{{$posts->links()}}</span>
    
    </div>


   
    
    
</section>


@endsection