@extends('layouts.app')

@section('content')
<h1>POsts page</h1>

@if (count($posts)>1)
@foreach ($posts as $post)
<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
{{-- <p>{{$post->description}}</p> --}}
@endforeach
    
@endif


@endsection


