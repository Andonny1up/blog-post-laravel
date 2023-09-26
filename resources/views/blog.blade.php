@extends('template')
    @section('title')
     blogs   
    @endsection
    @section('content')
        <h1>Listado</h1>
        <ol>
        @foreach ($posts as $post)
        <li><a href="{{route('post',$post->slug)}}">{{$post->title}}</a> <br><p>{{$post->user->name}}</p></li>
        @endforeach
        </ol>
        {{$posts -> links()}}
    @endsection
   