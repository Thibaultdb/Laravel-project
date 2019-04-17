@extends('layout')

@section('title', 'Contact us')

@section('content')

    <h1>Todo</h1>
    <a href="/todo/create">Create</a> new todo<br /><br />
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo->task }}</li>
        @endforeach
    </ul>
@endsection