<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ArticleController extends Controller
{
    /**
     * Display a listing of the articles with pagination.
     */
    public function index(): View
    {
        $articles = Article::with('category')
                          ->orderBy('published_at', 'desc')
                          ->orderBy('created_at', 'desc')
                          ->paginate(10);
        
        return view('blog.index', compact('articles'));
    }

    /**
     * Show the form for creating a new article.
     */
    public function create(): View
    {
        $categories = Category::orderBy('name')->get();
        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created article in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|min:10|max:500',
            'content' => 'required|string|min:25',
            'image' => 'required|url|max:255',
            'category_id' => 'required|exists:categories,id',
            'published_at' => 'nullable|date',
        ], [
            'title.required' => 'Title must be filled',
            'description.required' => 'Description must be filled',
            'description.min' => 'Description must be at least 10 characters',
            'content.required' => 'Content must be filled',
            'content.min' => 'Content must be at least 25 characters',
            'image.required' => 'Image URL must be filled',
            'image.url' => 'Image URL must be a valid URL',
            'category_id.required' => 'Choose a category',
            'category_id.exists' => 'Selected category is invalid',
        ]);

        $article = Article::create($validated);

        return redirect()->route('articles.show', $article)
                        ->with('success', 'Article created successfully.');
    }

    /**
     * Display the specified article.
     */
    public function show(Article $article): View
    {
        $article->load('category');
        return view('blog.detail', compact('article'));
    }

    /**
     * Show the form for editing the specified article.
     */
    public function edit(Article $article): View
    {
        return view('blog.edit', compact('article'));
    }

    /**
     * Update the specified article in storage.
     */
    public function update(Request $request, Article $article): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|string|max:255',
            'published_at' => 'nullable|date',
        ]);

        $article->update($validated);

        return redirect()->route('articles.show', $article)
                        ->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified article from storage.
     */
    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();

        return redirect()->route('articles.index')
                        ->with('success', 'Article deleted successfully.');
    }
}