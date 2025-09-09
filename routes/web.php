<?php

use Illuminate\Support\Facades\Route;

// home page
Route::get('/', function () {
    return view('home');
});

// blog page
Route::get('/blog', function () {
    $articles = [
        [
            'id' => 1, 
            'title' => 'First Article', 
            'description' => 'This is the first article description',
            'published_at' => '2025-09-03',
            'image' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80'
        ],
        [
            'id' => 2, 
            'title' => 'Second Article', 
            'description' => 'This is the second article description',
            'published_at' => '2025-09-05',
            'image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80'
        ],
        [
            'id' => 3, 
            'title' => 'Third Article', 
            'description' => 'This is the third article description',
            'published_at' => '2025-09-07',
            'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ],
    ];
    return view('blog.index', ['articles' => $articles]);
});

// blog detail page
Route::get('/blog/{id}', function ($id) {
    $articles = [
        1 => [
            'title' => 'First Article',
            'description' => 'This is the first article description',
            'published_at' => '2025-09-03',
            'image' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mollis nisl eget faucibus ultricies. Maecenas nisl turpis, ullamcorper ut dictum a, rhoncus quis purus. Vivamus iaculis lacinia justo a consectetur. Donec cursus ullamcorper libero, sit amet lacinia odio efficitur ut. Fusce mollis tortor at erat lacinia egestas. Suspendisse potenti. Proin sollicitudin ullamcorper sapien nec semper. Aliquam cursus ex id leo pharetra, non rutrum sem tristique. Suspendisse tortor orci, molestie non auctor vitae, sodales at quam. Suspendisse quis est nec arcu placerat gravida eu id nibh. Integer sit amet magna finibus, finibus dolor ac, varius ipsum. Aliquam risus mauris, vulputate ac felis ac, tempus aliquet diam. Morbi volutpat sed odio quis rutrum. Ut sollicitudin luctus arcu, at laoreet arcu venenatis nec.'
        ],
        2 => [
            'title' => 'Second Article',
            'description' => 'This is the second article description',
            'published_at' => '2025-09-03',
            'image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mollis nisl eget faucibus ultricies. Maecenas nisl turpis, ullamcorper ut dictum a, rhoncus quis purus. Vivamus iaculis lacinia justo a consectetur. Donec cursus ullamcorper libero, sit amet lacinia odio efficitur ut. Fusce mollis tortor at erat lacinia egestas. Suspendisse potenti. Proin sollicitudin ullamcorper sapien nec semper. Aliquam cursus ex id leo pharetra, non rutrum sem tristique. Suspendisse tortor orci, molestie non auctor vitae, sodales at quam. Suspendisse quis est nec arcu placerat gravida eu id nibh. Integer sit amet magna finibus, finibus dolor ac, varius ipsum. Aliquam risus mauris, vulputate ac felis ac, tempus aliquet diam. Morbi volutpat sed odio quis rutrum. Ut sollicitudin luctus arcu, at laoreet arcu venenatis nec.'
        ],
        3 => [
            'title' => 'Third Article',
            'description' => 'This is the third article description',
            'published_at' => '2025-09-03',
            'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mollis nisl eget faucibus ultricies. Maecenas nisl turpis, ullamcorper ut dictum a, rhoncus quis purus. Vivamus iaculis lacinia justo a consectetur. Donec cursus ullamcorper libero, sit amet lacinia odio efficitur ut. Fusce mollis tortor at erat lacinia egestas. Suspendisse potenti. Proin sollicitudin ullamcorper sapien nec semper. Aliquam cursus ex id leo pharetra, non rutrum sem tristique. Suspendisse tortor orci, molestie non auctor vitae, sodales at quam. Suspendisse quis est nec arcu placerat gravida eu id nibh. Integer sit amet magna finibus, finibus dolor ac, varius ipsum. Aliquam risus mauris, vulputate ac felis ac, tempus aliquet diam. Morbi volutpat sed odio quis rutrum. Ut sollicitudin luctus arcu, at laoreet arcu venenatis nec.'
        ],
    ];

    abort_unless(isset($articles[$id]), 404);

    return view('blog.detail', $articles[$id]);
});

// contact page
Route::get('/contact', function () {
    return view('contact');
});