@extends('layouts.app')

@section('content')
    <h1>Blog Articles</h1>
    @foreach($articles as $article)
        <h2>
            <a href="{{ url('/blog/'.$article['id']) }}">
                {{ $article['title'] }}
            </a>
        </h2>
        <p>{{ $article['description'] }}</p>
    @endforeach
@endsection
