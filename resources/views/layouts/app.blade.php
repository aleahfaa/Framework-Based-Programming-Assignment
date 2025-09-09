<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Blog')</title>
    <meta name="description" content="@yield('description', 'Welcome to my blog where I share stories, insights, and creativity.')">
    @stack('meta')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .aspect-w-16 { position: relative; padding-bottom: 56.25%; }
        .aspect-w-4 { position: relative; padding-bottom: 125%; }
        .aspect-w-16 > *, .aspect-w-4 > * {
            position: absolute; height: 100%; width: 100%; top: 0; left: 0;
        }
    </style>
</head>
<body class="bg-n-gray-50 font-n-font text-n-gray-900 min-h-screen">
    <!-- header -->
    <header class="bg-white border-b border-n-gray-200 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-n-gray-900 rounded-sm flex items-center justify-center">
                        <span class="text-white font-bold text-sm">✍️</span>
                    </div>
                    <span class="font-semibold text-n-gray-900">My Blog</span>
                </div>
                <x-navigation />
            </div>
        </div>
    </header>
    <!-- main -->
    <main class="max-w-6xl mx-auto px-6 py-8">
        @hasSection('breadcrumb')
            <nav class="flex items-center space-x-2 text-sm text-n-gray-500 mb-6">
                @yield('breadcrumb')
            </nav>
        @endif
        
        @yield('content')
    </main>
    <!-- footer -->
    <footer class="border-t border-n-gray-200 bg-white mt-16">
        <div class="max-w-6xl mx-auto px-6 py-8 text-center">
            <p class="text-sm text-n-gray-500">Made with ❤️ by Iffa Amalia Sabrina</p>
        </div>
    </footer>
    @stack('scripts')
</body>
</html>