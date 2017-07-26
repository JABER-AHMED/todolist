@extends('layouts.master')

@section('content')

	<h1 class="text-center">Create Todo</h1>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
	<form action="{{route('store')}}" method="post">
	<div class="form-group">
		<label for="text">Text</label>
		<input type="text" name="text" class="form-control">
	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea type="text" rows="5" name="body" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="due">Due</label>
		<input type="text" name="due" class="form-control">
	</div>
	<button style="margin-bottom:10px;" type="submit" class="btn btn-primary btn-block">Create Todo</button>
	{{csrf_field()}}
	</form>
	</div>
	</div>

@endsection