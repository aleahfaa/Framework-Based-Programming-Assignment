@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    <p><strong>{{ $description }}</strong></p>
    <p><em>Published at: {{ $published_at }}</em></p>
    <div>
        <p>{{ $content }}</p>
    </div>
@endsection
