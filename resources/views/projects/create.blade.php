@extends('layout')

@section('title', 'About us')

@section('content')
    <h1> create new project <h1>
    <form method="POST" action="/projects" style="font-size: 18px;">
    {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>

        <div>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Project description"></textarea>
        </div>

        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
    @endsection