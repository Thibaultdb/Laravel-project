<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        //return $todo;

        return view('todo.index', compact('todos'));
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store()
    {
        $todo = new Todo();
        $todo->task = request('task');
        $todo->description = request('description');
        $todo->before = request('before');

        $todo->save();

        return redirect('/todo');
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {
        
    }
}
