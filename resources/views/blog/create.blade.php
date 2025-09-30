@extends('layouts.app')
@section('title', 'Create New Article - My Blog')
@section('description', 'Create a new article for the blog')

@section('breadcrumb')
    <a href="{{ route('articles.index') }}" class="hover:text-n-gray-700 transition-colors duration-200">Blog</a>
    <x-icon name="chevron-right" size="w-3 h-3" />
    <span class="text-n-gray-700">Create Article</span>
@endsection

@section('content')
<div class="max-w-4xl mx-auto animate-fade-in">
    <div class="mb-8">
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-8 h-8 bg-n-gray-100 rounded-md flex items-center justify-center">
                <x-icon name="plus" class="text-n-gray-600" />
            </div>
            <h1 class="text-2xl font-bold text-n-gray-900">Create New Article</h1>
        </div>
        <p class="text-n-gray-600 text-sm">
            Share your thoughts and insights with the world
        </p>
    </div>

    <x-card padding="px-8 py-8">
        <form action="{{ route('articles.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <!-- Title Field -->
            <div>
                <label for="title" class="block text-sm font-medium text-n-gray-700 mb-2">
                    Article Title <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title') }}"
                    class="w-full px-4 py-3 border border-n-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('title') border-red-500 @enderror"
                    placeholder="Enter a compelling title for your article"
                >
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description Field -->
            <div>
                <label for="description" class="block text-sm font-medium text-n-gray-700 mb-2">
                    Description <span class="text-red-500">*</span>
                </label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="3"
                    class="w-full px-4 py-3 border border-n-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('description') border-red-500 @enderror"
                    placeholder="Write a brief description (minimum 10 characters)"
                >{{ old('description') }}</textarea>
                <p class="mt-1 text-xs text-n-gray-500">Minimum 10 characters required</p>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Image URL Field -->
            <div>
                <label for="image" class="block text-sm font-medium text-n-gray-700 mb-2">
                    Image URL <span class="text-red-500">*</span>
                </label>
                <input 
                    type="url" 
                    id="image" 
                    name="image" 
                    value="{{ old('image') }}"
                    class="w-full px-4 py-3 border border-n-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('image') border-red-500 @enderror"
                    placeholder="https://example.com/image.jpg"
                >
                <p class="mt-1 text-xs text-n-gray-500">Enter a valid image URL for your article</p>
                @error('image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Category Field -->
            <div>
                <label for="category_id" class="block text-sm font-medium text-n-gray-700 mb-2">
                    Category <span class="text-red-500">*</span>
                </label>
                <select 
                    id="category_id" 
                    name="category_id"
                    class="w-full px-4 py-3 border border-n-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('category_id') border-red-500 @enderror"
                >
                    <option value="">Choose a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Content Field -->
            <div>
                <label for="content" class="block text-sm font-medium text-n-gray-700 mb-2">
                    Article Content <span class="text-red-500">*</span>
                </label>
                <textarea 
                    id="content" 
                    name="content" 
                    rows="12"
                    class="w-full px-4 py-3 border border-n-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('content') border-red-500 @enderror"
                    placeholder="Write your article content here (minimum 25 characters)"
                >{{ old('content') }}</textarea>
                <p class="mt-1 text-xs text-n-gray-500">Minimum 25 characters required</p>
                @error('content')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Published Date Field (Optional) -->
            <div>
                <label for="published_at" class="block text-sm font-medium text-n-gray-700 mb-2">
                    Published Date (Optional)
                </label>
                <input 
                    type="date" 
                    id="published_at" 
                    name="published_at" 
                    value="{{ old('published_at') }}"
                    class="w-full px-4 py-3 border border-n-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200"
                >
                <p class="mt-1 text-xs text-n-gray-500">Leave empty to use current date</p>
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between pt-6 border-t border-n-gray-200">
                <a href="{{ route('articles.index') }}" class="px-6 py-3 border border-n-gray-300 rounded-md text-sm font-medium text-n-gray-700 hover:bg-n-gray-50 transition-colors duration-200">
                    Cancel
                </a>
                <button 
                    type="submit" 
                    class="px-6 py-3 bg-n-gray-900 text-white rounded-md text-sm font-medium hover:bg-n-gray-800 transition-colors duration-200 inline-flex items-center"
                >
                    <x-icon name="plus" class="mr-2" size="w-4 h-4" />
                    Create Article
                </button>
            </div>

            <!-- Validation Errors Summary -->
            @if ($errors->any())
                <div class="mt-6 p-4 bg-red-50 border border-red-200 rounded-md">
                    <div class="flex items-center space-x-2 mb-2">
                        <x-icon name="exclamation-triangle" class="text-red-600" size="w-5 h-5" />
                        <h3 class="text-sm font-medium text-red-800">Please fix the following errors:</h3>
                    </div>
                    <ul class="text-sm text-red-700 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </x-card>
</div>

<style>
.animate-fade-in {
    animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
@endsection