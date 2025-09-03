<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>My Blog</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        header { margin-bottom: 20px; }
        nav a { margin: 0 10px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/blog') }}">Blog</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
