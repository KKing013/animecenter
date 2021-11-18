<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Services\Newsletter;
use MailchimpMarketing\ApiClient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsLetterController;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\PostCommentsController;

Route::get('about', [PagesController::class, 'about']);

Route::post('newsletter', NewsLetterController::class);

Route::post('contact', ContactController::class);

Route::get('user/{user}/edit', [ProfileController::class, 'edit'])->middleware('auth');
Route::patch('user/{user}', [ProfileController::class, 'update'])->middleware('auth');

Route::get('/', [PostsController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostsController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('anime/season', [AnimeController::class, 'showSeason']);
Route::get('anime/top-airing', [AnimeController::class, 'showTopAiring']);
Route::get('anime/new', [AnimeController::class, 'showNew']);
Route::get('anime/new/page/{page?}', [AnimeController::class, 'showNew']);
Route::get('anime/popular', [AnimeController::class, 'showPopular']);
Route::get('anime/popular/page/{page?}', [AnimeController::class, 'showPopular']);
Route::get('anime/{anime}', [AnimeController::class, 'show']);

Route::get('categories/{category:slug}', CategoryController::class)->name('category');

require __DIR__.'/auth.php';
