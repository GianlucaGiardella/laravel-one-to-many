@extends('admin.layouts.base')

@section('contents')
    <h1>{{ $type->name }}</h1>
    <p>{{ $type->description }}</p>

    <h3>Type's Posts</h3>
    <ul>
        @foreach ($type->types as $type)
            <li><a href="{{ route('admin.types.show', ['type' => $type]) }}">{{ $type->title }}</a></li>
        @endforeach
    </ul>
@endsection
