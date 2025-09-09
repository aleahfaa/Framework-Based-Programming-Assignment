@extends('layouts.app')
@section('title', 'Blog Articles - My Blog')
@section('description', 'Discover interesting stories and insights from my writing journey')
@section('content')
<div class="animate-fade-in">
    <!-- header -->
    <div class="mb-8">
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-8 h-8 bg-n-gray-100 rounded-md flex items-center justify-center">
                <x-icon name="book" class="text-n-gray-600" />
            </div>
            <h1 class="text-2xl font-bold text-n-gray-900">Blog Articles</h1>
        </div>
        <p class="text-n-gray-600 text-sm">
            Discover interesting stories and insights from my writing journey
        </p>
    </div>
    <!-- articles grid -->
    <div class="grid gap-6 mb-8">
        @forelse($articles as $article)
            <x-card hover="true" class="group cursor-pointer">
                <a href="{{ url('/blog/'.$article['id']) }}" class="block">
                    <div class="flex items-center space-x-4">
                        <!-- Article Image -->
                        <div class="w-16 h-16 bg-n-gray-100 rounded-md overflow-hidden flex-shrink-0">
                            <img class="w-full h-full object-cover" 
                                 src="{{ $article['image'] ?? 'https://images.unsplash.com/photo-1585241936939-be4099591252?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                 alt="{{ $article['title'] }} image"
                                 loading="lazy">
                        </div>
                        <!-- article Info -->
                        <div class="flex-1 min-w-0">
                            <h2 class="text-base font-medium text-n-gray-900 mb-1 hover:text-blue-600 transition-colors duration-200">
                                {{ $article['title'] }}
                            </h2>
                            <p class="text-sm text-n-gray-600 line-clamp-2 leading-relaxed mb-2">
                                {{ $article['description'] }}
                            </p>
                            <x-article-meta 
                                :date="$article['published_at']" 
                                :tags="['Article']"
                                compact="true" />
                        </div>
                        <div class="ml-4">
                            <x-icon name="arrow-right" class="text-n-gray-400 group-hover:text-n-gray-600 transition-colors duration-200" />
                        </div>
                    </div>
                </a>
            </x-card>
        @empty
            <x-card>
                <div class="text-center py-8">
                    <x-icon name="book" size="w-12 h-12" class="text-n-gray-400 mx-auto mb-4" />
                    <h3 class="text-lg font-medium text-n-gray-900 mb-2">No articles yet</h3>
                    <p class="text-n-gray-600">Check back later for new content!</p>
                </div>
            </x-card>
        @endforelse
    </div>
    <x-card>
        <div class="flex items-start space-x-4">
            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                <x-icon name="mail" class="text-blue-600" />
            </div>
            <div class="flex-1">
                <h3 class="font-medium text-n-gray-900 mb-1">Stay updated</h3>
                <p class="text-sm text-n-gray-600 mb-3">
                    Follow me on social media for the latest articles and updates!
                </p>
                <a href="{{ url('/contact') }}" class="inline-flex items-center text-sm text-blue-600 hover:text-blue-700 font-medium">
                    Get in touch 
                    <x-icon name="arrow-right" class="ml-1" />
                </a>
            </div>
        </div>
    </x-card>
</div>

<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endsection