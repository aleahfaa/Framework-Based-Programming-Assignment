<?php

use Illuminate\Support\Facades\Route;

// home page
Route::get('/', function () {
    return view('home');
});

// blog page
Route::get('/blog', function () {
    $articles = [
        ['id' => 1, 'title' => 'First Article', 'description' => 'This is the first article description'],
        ['id' => 2, 'title' => 'Second Article', 'description' => 'This is the second article description'],
        ['id' => 3, 'title' => 'Third Article', 'description' => 'This is the third article description'],
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
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mollis nisl eget faucibus ultricies. Maecenas nisl turpis, ullamcorper ut dictum a, rhoncus quis purus. Vivamus iaculis lacinia justo a consectetur. Donec cursus ullamcorper libero, sit amet lacinia odio efficitur ut. Fusce mollis tortor at erat lacinia egestas. Suspendisse potenti. Proin sollicitudin ullamcorper sapien nec semper. Aliquam cursus ex id leo pharetra, non rutrum sem tristique. Suspendisse tortor orci, molestie non auctor vitae, sodales at quam. Suspendisse quis est nec arcu placerat gravida eu id nibh. Integer sit amet magna finibus, finibus dolor ac, varius ipsum. Aliquam risus mauris, vulputate ac felis ac, tempus aliquet diam. Morbi volutpat sed odio quis rutrum. Ut sollicitudin luctus arcu, at laoreet arcu venenatis nec.'
        ],
        2 => [
            'title' => 'Second Article',
            'description' => 'This is the second article description',
            'published_at' => '2025-09-03',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mollis nisl eget faucibus ultricies. Maecenas nisl turpis, ullamcorper ut dictum a, rhoncus quis purus. Vivamus iaculis lacinia justo a consectetur. Donec cursus ullamcorper libero, sit amet lacinia odio efficitur ut. Fusce mollis tortor at erat lacinia egestas. Suspendisse potenti. Proin sollicitudin ullamcorper sapien nec semper. Aliquam cursus ex id leo pharetra, non rutrum sem tristique. Suspendisse tortor orci, molestie non auctor vitae, sodales at quam. Suspendisse quis est nec arcu placerat gravida eu id nibh. Integer sit amet magna finibus, finibus dolor ac, varius ipsum. Aliquam risus mauris, vulputate ac felis ac, tempus aliquet diam. Morbi volutpat sed odio quis rutrum. Ut sollicitudin luctus arcu, at laoreet arcu venenatis nec.'
        ],
        3 => [
            'title' => 'Third Article',
            'description' => 'This is the third article description',
            'published_at' => '2025-09-03',
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
