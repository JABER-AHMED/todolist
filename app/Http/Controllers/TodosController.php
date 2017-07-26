<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
    	$todos = Todo::orderBy('created_at', 'desc')->get();
    	return view('todos.index')->withTodos($todos);
    }

    public function create()
    {
    	return view('todos.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [

    		'text' => 'required|max:50',
    		'body' => 'required|max:250'
    	]);

    	$todo = new Todo;
    	$todo->text = $request->text;
    	$todo->body = $request->body;
    	$todo->due = $request->due;

    	$todo->save();

    	return redirect()->route('index')->with('success', 'Todo Created Successfully');
    }

    public function show($id)
    {
    	$todo = Todo::find($id);
    	return view('todos.show')->withTodo($todo);
    }

    public function edit($id)
    {
    	$todo = Todo::find($id);
    	return view('todos.edit')->withTodo($todo);
    }

    public function update(Request $request, $id)
    {
    	$todo = Todo::find($id);

    	$todo->text = $request->text;
    	$todo->body = $request->body;
    	$todo->due = $request->due;

    	$todo->save();

    	return redirect()->route('index', $todo->id)->with('success', 'Todo updated successfully');
    }

    public function destroy($id)
    {
    	$todo = Todo::find($id);
    	$todo->delete();

    	return redirect()->route('index')->with('success', 'Todo deleted successfully');
    }
}
