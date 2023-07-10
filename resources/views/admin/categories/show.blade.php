@extends('admin.layouts.base')

@section('contents')
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>

    <h3>Category's Posts</h3>
    <ul>
        @foreach ($category->posts as $post)
            <li><a href="{{ route('admin.posts.show', ['post' => $post]) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
@endsection
