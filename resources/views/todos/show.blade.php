@extends('layouts.master')

@section('content')
    <a class="btn btn-default" href="{{route('index')}}">Go Back</a>
	<h1><a href="{{route('todo', $todo->id)}}">{{$todo->text}}</a></h1>
	<div class="label label-danger">{{$todo->due}}</div>
	<hr>
	<p>{{$todo->body}}</p>
	<br>
	<a href="{{route('edit', $todo->id)}}" class="btn btn-default">Edit</a>
@endsection