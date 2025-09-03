@extends('layouts.app')
@section('content')
    <h1>Hello,</h1>
    <h2>Welcome to my page!</h2>
    <p>Click the button below to see the articles and fun things I have created. Enjoy~</p>
    <a href="{{ url('/blog') }}">
        <button>Check it out</button>
    </a>
@endsection