@extends('template')
    @section('title')
     {{$post->title}}   
    @endsection
    @section('content')
        <div class="max-w-3xl mx-auto">
            <h1 class="text-5xl mb-8">{{$post->title}}</h1>
            <p class="loading-loose text-lg text-gray-700">
                {{$post->body}}
            </p>
        </div>
    @endsection