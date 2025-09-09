@extends('layouts.app')
@section('content')
<div class="animate-fade-in">
    <!-- hero section -->
    <div class="relative">
        <div class="relative bg-white rounded-lg border border-n-gray-200 overflow-hidden mb-8 shadow-sm">
            <div class="h-96 md:h-[500px] relative">
                <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                     alt="Beautiful landscape" 
                     class="w-full h-full object-cover">
            </div>
            <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                <div class="bg-white/95 backdrop-blur-sm rounded-lg p-8 mx-4 max-w-2xl text-center shadow-lg border border-n-gray-200">
                    <h1 class="text-4xl md:text-5xl font-bold text-n-gray-900 mb-3">
                        Hello,
                    </h1>
                    <h2 class="text-2xl md:text-3xl text-n-gray-700 mb-4">
                        Welcome to my page!
                    </h2>
                    <p class="text-n-gray-600 mb-6 leading-relaxed">
                        Click the button below to see the articles and fun things I have created. Enjoy~
                    </p>
                    
                    <a href="{{ url('/blog') }}">
                        <button class="bg-n-gray-900 text-white px-6 py-2.5 rounded-md text-sm font-medium hover:bg-n-gray-800 transition-colors duration-200 inline-flex items-center">
                            Check it out
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg border border-n-gray-200 p-6 shadow-sm">
        <h3 class="text-lg font-semibold text-n-gray-900 mb-4">What you'll find here</h3>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="group cursor-pointer">
                <div class="bg-n-gray-50 rounded-md p-4 border border-n-gray-200 hover:shadow-sm transition-all duration-200">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-md flex items-center justify-center flex-shrink-0">
                            <span class="text-blue-600 text-lg">📚</span>
                        </div>
                        <div>
                            <h4 class="font-medium text-n-gray-900 mb-1">Articles</h4>
                            <p class="text-sm text-n-gray-600 leading-relaxed">
                                Discover interesting articles and stories
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group cursor-pointer">
                <div class="bg-n-gray-50 rounded-md p-4 border border-n-gray-200 hover:shadow-sm transition-all duration-200">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-purple-100 rounded-md flex items-center justify-center flex-shrink-0">
                            <span class="text-purple-600 text-lg">✨</span>
                        </div>
                        <div>
                            <h4 class="font-medium text-n-gray-900 mb-1">Creative Content</h4>
                            <p class="text-sm text-n-gray-600 leading-relaxed">
                                Explore fun and creative projects
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group cursor-pointer">
                <div class="bg-n-gray-50 rounded-md p-4 border border-n-gray-200 hover:shadow-sm transition-all duration-200">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-yellow-100 rounded-md flex items-center justify-center flex-shrink-0">
                            <span class="text-yellow-600 text-lg">💡</span>
                        </div>
                        <div>
                            <h4 class="font-medium text-n-gray-900 mb-1">Ideas</h4>
                            <p class="text-sm text-n-gray-600 leading-relaxed">
                                Get inspired by fresh perspectives
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.group');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.querySelector('div').classList.add('shadow-md', 'border-n-gray-300');
        });
        card.addEventListener('mouseleave', function() {
            this.querySelector('div').classList.remove('shadow-md', 'border-n-gray-300');
        });
    });
});
</script>
@endsection