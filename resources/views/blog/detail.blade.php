@extends('layouts.app')
@section('title', $article->title . ' - My Blog')
@section('description', $article->description)
@section('breadcrumb')
    <a href="{{ route('articles.index') }}" class="hover:text-n-gray-700 transition-colors duration-200">Blog</a>
    <x-icon name="chevron-right" size="w-3 h-3" />
    <span class="text-n-gray-700">{{ $article->title }}</span>
@endsection

@section('content')
<div class="max-w-4xl mx-auto animate-fade-in">
    {{-- image --}}
    <x-card variant="large" :image="$article->image ?? 'https://images.unsplash.com/photo-1585241936939-be4099591252?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'" padding="px-8 pt-8 pb-6" class="mb-8">
        {{-- title --}}
        <h1 class="text-3xl md:text-4xl font-bold text-n-gray-900 mb-4 leading-tight">
            {{ $article->title }}
        </h1>
        <div class="bg-n-gray-50 rounded-md p-4 mb-6 border-l-4 border-blue-500">
            <p class="text-n-gray-700 text-lg leading-relaxed">{{ $article->description }}</p>
        </div>
        <x-slot:meta>
            <x-article-meta 
                :author="'Iffa Amalia Sabrina'" 
                :date="$article->published_at" 
                :tags="['Article']" />
        </x-slot:meta>
    </x-card>
    {{-- content --}}
    <x-card padding="px-8 py-8" class="mb-8">
        <div class="prose prose-lg max-w-none">
            <div class="text-n-gray-700 text-base leading-relaxed space-y-6">
                @foreach(explode("\n\n", $article->content) as $paragraph)
                    <p class="{{ $loop->first ? 'text-lg first-letter:text-4xl first-letter:font-bold first-letter:mr-1 first-letter:float-left first-letter:text-n-gray-900' : '' }}">
                        {{ $paragraph }}
                    </p>
                @endforeach
            </div>
        </div>
        <x-slot:footer>
            <h3 class="text-sm font-medium text-n-gray-900 mb-3">Share this article</h3>
            <div class="flex items-center space-x-3">                    
                <button class="inline-flex items-center px-3 py-2 border border-n-gray-300 rounded-md text-sm text-n-gray-700 hover:bg-n-gray-50 transition-colors duration-200" onclick="copyArticleLink()">
                    <x-icon name="copy" size="w-4 h-4" class="mr-2" />
                    Copy Link
                </button>
            </div>
        </x-slot:footer>
    </x-card>
    {{-- author --}}
    <x-card :title="'Iffa Amalia Sabrina'" :subtitle="'I\'m a passionate writer who loves sharing stories, insights, and creativity through my writing. I believe in the power of words to inspire, connect, and create meaningful change.'" class="mb-8">
        <x-slot:actions>
            <a href="{{ url('/contact') }}" class="inline-flex items-center text-sm text-blue-600 hover:text-blue-700 font-medium">
                Connect with me
                <x-icon name="arrow-right" size="w-4 h-4" class="ml-1" />
            </a>
        </x-slot:actions>
    </x-card>
    {{-- comments --}}
    <x-card :title="'Comments'" class="mb-8">
        <form class="space-y-4 mb-6 p-4 bg-n-gray-50 rounded-md border border-n-gray-200" onsubmit="handleCommentSubmit(event)">
            <div class="grid md:grid-cols-2 gap-4">
                <input type="text" 
                       name="name"
                       placeholder="Your name" 
                       class="px-3 py-2 border border-n-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       required>
                <input type="email" 
                       name="email"
                       placeholder="Your email" 
                       class="px-3 py-2 border border-n-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       required>
            </div>
            <textarea name="comment" 
                      rows="3" 
                      placeholder="Share your thoughts..." 
                      class="w-full px-3 py-2 border border-n-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                      required></textarea>
            <div class="flex justify-end">
                <button type="submit" class="bg-n-gray-900 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-n-gray-800 transition-colors duration-200">
                    Post Comment
                </button>
            </div>
        </form>
        {{-- comments dummy --}}
        <div class="space-y-4">
            <div class="border-b border-n-gray-200 pb-4">
                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-blue-600 text-sm font-medium">JD</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center space-x-2 mb-1">
                            <span class="text-sm font-medium text-n-gray-900">John Doe</span>
                            <span class="text-xs text-n-gray-500">2 days ago</span>
                        </div>
                        <p class="text-sm text-n-gray-700">
                            Really enjoyed this article! Your writing style is very engaging and the insights are valuable. 
                            Looking forward to reading more of your work.
                        </p>
                        <button class="text-xs text-n-gray-500 hover:text-n-gray-700 mt-2">Reply</button>
                    </div>
                </div>
            </div>
            <div class="border-b border-n-gray-200 pb-4">
                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-purple-600 text-sm font-medium">SM</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center space-x-2 mb-1">
                            <span class="text-sm font-medium text-n-gray-900">Sarah Miller</span>
                            <span class="text-xs text-n-gray-500">1 week ago</span>
                        </div>
                        <p class="text-sm text-n-gray-700">
                            This resonated with me so much! Thank you for sharing your thoughts on this topic. 
                            It's given me a new perspective to think about.
                        </p>
                        <button class="text-xs text-n-gray-500 hover:text-n-gray-700 mt-2">Reply</button>
                    </div>
                </div>
            </div>
            <div class="text-center py-4">
                <button class="text-sm text-n-gray-600 hover:text-n-gray-900 transition-colors duration-200">
                    Load more comments
                </button>
            </div>
        </div>
    </x-card>
    {{-- back to top --}}
    <div class="fixed bottom-6 right-6 z-50">
        <button id="backToTop" class="bg-white border border-n-gray-300 text-n-gray-600 p-3 rounded-full shadow-lg hover:shadow-xl hover:bg-n-gray-50 transition-all duration-200 opacity-0 invisible">
            <x-icon name="arrow-up" size="w-5 h-5" />
        </button>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // copy link
    window.copyArticleLink = function() {
        navigator.clipboard.writeText(window.location.href).then(() => {
            showNotification('Link copied to clipboard!', 'success');
        });
    };
    // comment form
    window.handleCommentSubmit = function(e) {
        e.preventDefault();
        const submitBtn = e.target.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Posting...';
        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-70');
        setTimeout(() => {
            submitBtn.textContent = 'Posted!';
            submitBtn.classList.remove('bg-n-gray-900', 'opacity-70');
            submitBtn.classList.add('bg-green-600');
            setTimeout(() => {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                submitBtn.classList.remove('bg-green-600');
                submitBtn.classList.add('bg-n-gray-900');
                e.target.reset();
                showNotification('Comment posted successfully!', 'success');
            }, 2000);
        }, 1500);
    };
    // back to top
    const backToTopBtn = document.getElementById('backToTop');
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.remove('opacity-0', 'invisible');
            backToTopBtn.classList.add('opacity-100', 'visible');
        } else {
            backToTopBtn.classList.add('opacity-0', 'invisible');
            backToTopBtn.classList.remove('opacity-100', 'visible');
        }
    });
    backToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    // notification system
    window.showNotification = function(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 z-50 px-4 py-3 rounded-md shadow-lg transition-all duration-300 ${
            type === 'success' ? 'bg-green-100 text-green-800 border border-green-200' :
            type === 'error' ? 'bg-red-100 text-red-800 border border-red-200' :
            'bg-blue-100 text-blue-800 border border-blue-200'
        }`;
        notification.textContent = message;
        document.body.appendChild(notification);
        setTimeout(() => {
            notification.remove();
        }, 3000);
    };
    // reading progress indicator
    const article = document.querySelector('.prose');
    if (article) {
        const progressBar = document.createElement('div');
        progressBar.className = 'fixed top-0 left-0 w-0 h-1 bg-blue-500 z-50 transition-all duration-300';
        document.body.appendChild(progressBar); 
        window.addEventListener('scroll', function() {
            const articleTop = article.offsetTop;
            const articleHeight = article.offsetHeight;
            const windowHeight = window.innerHeight;
            const scrollTop = window.pageYOffset;   
            const progress = Math.min(
                Math.max((scrollTop - articleTop + windowHeight / 2) / articleHeight, 0),
                1
            );
            progressBar.style.width = `${progress * 100}%`;
        });
    }
});
</script>
@endpush

@push('styles')
<style>
.prose p {
    margin-bottom: 1.5rem;
}
.prose p:last-child {
    margin-bottom: 0;
}
button:focus-visible, 
a:focus-visible {
    outline: 2px solid #3B82F6;
    outline-offset: 2px;
}
#backToTop {
    transform: translateY(0);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
#backToTop.opacity-0 {
    transform: translateY(10px);
}
* {
    scroll-behavior: smooth;
}
</style>
@endpush
@endsection