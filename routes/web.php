<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Article routes with explicit route model binding
Route::prefix('blog')->name('articles.')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('index');
    Route::get('/create', [ArticleController::class, 'create'])->name('create');
    Route::post('/', [ArticleController::class, 'store'])->name('store');
    
    // Routes with explicit model binding constraints
    Route::get('/{article}', [ArticleController::class, 'show'])
        ->name('show')
        ->where('article', '[0-9]+');
    
    Route::get('/{article}/edit', [ArticleController::class, 'edit'])
        ->name('edit')
        ->where('article', '[0-9]+');
    
    Route::put('/{article}', [ArticleController::class, 'update'])
        ->name('update')
        ->where('article', '[0-9]+');
    
    Route::delete('/{article}', [ArticleController::class, 'destroy'])
        ->name('destroy')
        ->where('article', '[0-9]+');
});

// Category routes with explicit route model binding
Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/', [CategoryController::class, 'store'])->name('store');
    
    // Routes with explicit model binding constraints
    Route::get('/{category}', [CategoryController::class, 'show'])
        ->name('show')
        ->where('category', '[0-9]+');
    
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])
        ->name('edit')
        ->where('category', '[0-9]+');
    
    Route::put('/{category}', [CategoryController::class, 'update'])
        ->name('update')
        ->where('category', '[0-9]+');
    
    Route::delete('/{category}', [CategoryController::class, 'destroy'])
        ->name('destroy')
        ->where('category', '[0-9]+');
});

// Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');