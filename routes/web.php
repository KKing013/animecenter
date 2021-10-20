<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {

    

    return view('welcome');
});


Route::get('/', function () {

    

    return view('home', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {
    
    return view('post', [
        'post' => $post
    ]);
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
