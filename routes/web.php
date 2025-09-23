<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// home page
Route::get('/', function () {
    return view('home');
})->name('home');

// article
Route::get('/blog', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/blog/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/blog', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/blog/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/blog/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/blog/{article}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/blog/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');

// contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');