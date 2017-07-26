@extends('layouts.master')

@section('content')
    <div class="row">
    	<div class="col-md-6 col-md-offset-3">
    		<a class="btn btn-default" href="{{route('todo', $todo->id)}}">Go Back</a>
    	</div>
    </div>
	<h1 class="text-center">Edit Todo</h1>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
	<form action="{{route('update', $todo->id)}}" method="post">
	<div class="form-group">
		<label for="text">Text</label>
		<input type="text" name="text" class="form-control" value="{{$todo->text}}">
	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea type="text" rows="5" name="body" class="form-control">{{$todo->body}}</textarea>
	</div>
	<div class="form-group">
		<label for="due">Due</label>
		<input type="text" name="due" class="form-control" value="{{$todo->due}}">
	</div>
	<button style="margin-bottom:10px;" type="submit" class="btn btn-primary btn-block">Update Todo</button>
	{{csrf_field()}}
	</form>
	</div>
	</div>

@endsection