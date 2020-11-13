@extends('layouts.app')

@section('content')
<button><a href="/posts">Go Back</a> </button>
<h1>show Posts page</h1>

<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
<p>{{$post->description}}</p>
<small> written on{{$post->created_at}}</small>

@endsection