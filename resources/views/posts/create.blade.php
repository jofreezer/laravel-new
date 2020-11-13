@extends('layouts.app')

@section('content')
<button><a href="/posts">Go Back</a> </button>
<h1>create Posts page</h1>

<form action="" method="get">
    @csrf
    <label for="">Title</label>
    <input type="text" name="" id="">
    <label for="">Description</label>
    <input type="textarea" name="" id=""><br><br>
    <input type="submit" value="create">
</form>

@endsection