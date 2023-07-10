@extends('admin.layouts.base')

@section('contents')
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>

    <h3>Category's Posts</h3>
    <ul>
        @foreach ($category->projects as $project)
            <li><a href="{{ route('admin.projects.show', ['project' => $project]) }}">{{ $project->title }}</a></li>
        @endforeach
    </ul>
@endsection
