@extends('layouts.app')
@section('content')

<v-container class="flex flex-col align-middle justify-center">
<section class='text-gray-600 body-font relative w-full'>
  <div class='flex flex-col items-center w-full mx-auto justify-center container px-5 py-24'>
    <div class="py-10">
      <h3 class="md:text-4xl text-3xl font-medium title-font mb-4 text-black">Contact Us</h3>
    </div>
    
    <div class='mx-auto w-3/4 rounded-md shadow-md p-3 md:p-14 lg:px-32' >
      <form action="{{ route('contact.submit') }}" method="POST" class="w-full">
        @csrf
          <div class=' flex flex-col md:flex-row m-4 '>
            <label class='leading-7 text-md text-gray-900 w-1/4' for="">FirstName:</label>
            <input name="firstname" class='md:mx-auto md:px-3 py-2 bg-gray-100 bg-opacity-50 rounded border border-gray-600 w-3/4' type="text" value="{{ old('firstname') }}" >

          </div>

          <div class=' flex flex-col m-4 md:flex-row '>
            <label class='leading-7 text-md text-gray-900 w-1/4' for="">LastName:</label>
            <input name="lastname" class=' md:mx-auto md:px-3  bg-gray-100 bg-opacity-50 rounded border border-gray-600 w-3/4 py-2' type="text" value="{{ old('lastname') }}" >
          </div>

          <div class=' flex flex-col m-4 md:flex-row '>
            <label class='leading-7 text-md text-gray-900 w-1/4' for="">Email:</label>
            <input name="email" class='md:mx-auto md:px-3 bg-gray-100 bg-opacity-50 rounded border border-gray-600 w-3/4 py-2' type="text" value="{{ old('email') }}" >
          </div>
          
          <div class=' flex flex-col m-4 md:flex-row '>
            <label class='leading-7 text-md text-gray-900 w-1/4' for="">Message:</label>
            <textarea name="message" class='md:mx-auto py-5   bg-gray-100 bg-opacity-50 md:px-3 md:py-8 rounded border border-gray-600 w-3/4'> {{ old('message')  }} </textarea>
          </div>
          
          <div class='flex justify-center items-center mb-5'>
            <v-btn type="submit" class='bg-green-500 text-white px-10 py-1.5 rounded-full' dark color="green" rounded>Send</v-btn>
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

  </div>
</section>
</v-container>

@endsection