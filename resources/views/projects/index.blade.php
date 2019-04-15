@extends('layout')

@section('title', 'Our Projects')

@section('content')
    <h1>Projects</h1>
    <a href="/projects/create">Create</a> new <br /><br />
    <ul>
        @foreach ($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>
@endsection