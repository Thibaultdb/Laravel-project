@extends('layout')

@section('title', 'About us')

@section('content')
    <h1> create new Todo <h1>
    <form method="POST" action="/todo" style="font-size: 18px;">
    {{ csrf_field() }}
        <div>
            <input type="text" name="task" placeholder="Todo task">
        </div>

        <div>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Todo description"></textarea>
        </div>

        <div>
            <input type="text" name="before" placeholder="Todo before">
        </div>

        <div>
            <button type="submit">Create Todo</button>
        </div>
    </form>
    @endsection