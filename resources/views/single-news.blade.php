@extends('layouts.app')
@section('content')
    <iframe class="mt-16" height="100%" src="{{ $post->link() }}"></iframe>
@endsection