@extends('layouts.app')
@section('title', 'Blog Articles - My Blog')
@section('description', 'Discover interesting stories and insights from my writing journey')
@section('content')
<div class="animate-fade-in">
    <!-- header -->
    <div class="mb-8">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-n-gray-100 rounded-md flex items-center justify-center">
                    <x-icon name="book" class="text-n-gray-600" />
                </div>
                <h1 class="text-2xl font-bold text-n-gray-900">Blog Articles</h1>
            </div>
            <a href="{{ route('articles.create') }}" class="inline-flex items-center px-4 py-2 bg-n-gray-900 text-white rounded-md text-sm font-medium hover:bg-n-gray-800 transition-colors duration-200">
                <x-icon name="plus" class="mr-2" size="w-4 h-4" />
                Create Article
            </a>
        </div>
        <p class="text-n-gray-600 text-sm">
            Discover interesting stories and insights from my writing journey
        </p>
    </div>
    <!-- articles grid -->
    <div class="grid gap-6 mb-8">
        @forelse($articles as $article)
            <x-card hover="true" class="group cursor-pointer">
                <a href="{{ route('articles.show', $article) }}" class="block">
                    <div class="flex items-center space-x-4">
                        <!-- Article Image -->
                        <div class="w-16 h-16 bg-n-gray-100 rounded-md overflow-hidden flex-shrink-0">
                            <img class="w-full h-full object-cover" 
                                 src="{{ $article->image ?? 'https://images.unsplash.com/photo-1585241936939-be4099591252?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" 
                                 alt="{{ $article->title }} image"
                                 loading="lazy">
                        </div>
                        <!-- article Info -->
                        <div class="flex-1 min-w-0">
                            <h2 class="text-base font-medium text-n-gray-900 mb-1 hover:text-blue-600 transition-colors duration-200">
                                {{ $article->title }}
                            </h2>
                            <p class="text-sm text-n-gray-600 line-clamp-2 leading-relaxed mb-2">
                                {{ $article->description }}
                            </p>
                            <x-article-meta 
                                :date="$article->published_at" 
                                :tags="[$article->category ? $article->category->name : 'Uncategorized']"
                                compact="true" />
                        </div>
                        <div class="ml-4 flex items-center space-x-2">
                            <form action="{{ route('articles.destroy', $article) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this article? This action cannot be undone.')" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-n-gray-400 hover:text-n-gray-600 transition-colors duration-200 p-1">
                                    <x-icon name="trash" size="w-4 h-4" />
                                </button>
                            </form>
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

    <!-- pagination -->
    @if($articles->hasPages())
        <div class="mb-8">
            <x-card>
                <div class="flex items-center justify-between">
                    <div class="text-sm text-n-gray-600">
                        Showing {{ $articles->firstItem() }} to {{ $articles->lastItem() }} of {{ $articles->total() }} articles
                    </div>
                    <div class="flex items-center space-x-2">
                        @if ($articles->onFirstPage())
                            <span class="px-3 py-2 text-sm text-n-gray-400 bg-n-gray-100 rounded-md cursor-not-allowed">
                                Previous
                            </span>
                        @else
                            <a href="{{ $articles->previousPageUrl() }}" class="px-3 py-2 text-sm text-n-gray-700 bg-white border border-n-gray-300 rounded-md hover:bg-n-gray-50 transition-colors duration-200">
                                Previous
                            </a>
                        @endif
                        @foreach ($articles->getUrlRange(1, $articles->lastPage()) as $page => $url)
                            @if ($page == $articles->currentPage())
                                <span class="px-3 py-2 text-sm text-white bg-blue-600 rounded-md">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}" class="px-3 py-2 text-sm text-n-gray-700 bg-white border border-n-gray-300 rounded-md hover:bg-n-gray-50 transition-colors duration-200">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                        @if ($articles->hasMorePages())
                            <a href="{{ $articles->nextPageUrl() }}" class="px-3 py-2 text-sm text-n-gray-700 bg-white border border-n-gray-300 rounded-md hover:bg-n-gray-50 transition-colors duration-200">
                                Next
                            </a>
                        @else
                            <span class="px-3 py-2 text-sm text-n-gray-400 bg-n-gray-100 rounded-md cursor-not-allowed">
                                Next
                            </span>
                        @endif
                    </div>
                </div>
            </x-card>
        </div>
    @endif
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
                <a href="{{ route('contact') }}" class="inline-flex items-center text-sm text-blue-600 hover:text-blue-700 font-medium">
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