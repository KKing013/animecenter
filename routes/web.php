<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\PostsController;
use Illuminate\Contracts\Pagination\Paginator;

Route::get('/welcome', function () {

    

    return view('welcome');
});

// Route::get('/', [AnimeController::class, 'index']);

Route::get('/', [PostsController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostsController::class, 'show']);

Route::get('anime/season', [AnimeController::class, 'showSeason']);
Route::get('anime/top-airing', [AnimeController::class, 'showTopAiring']);
Route::get('anime/new', [AnimeController::class, 'showNew']);
Route::get('anime/new/page/{page?}', [AnimeController::class, 'showNew']);

Route::get('anime/popular', [AnimeController::class, 'showPopular']);
Route::get('anime/popular/page/{page?}', [AnimeController::class, 'showPopular']);


Route::get('anime/{anime}', [AnimeController::class, 'show']);


Route::get('categories/{category:slug}', function (Category $category) {

    $animeSeason = collect(Http::withToken(config('services.aniapi.token'))
    ->get('https://api.aniapi.com/v1/anime?status=1&season=3&nsfw=true')
    ->json()['data']['documents'])->take(5);

    $animeYear = collect(Http::withToken(config('services.aniapi.token'))
        ->get('https://api.aniapi.com/v1/anime?year=2021&nsfw=true')
        ->json()['data']['documents'])->take(5);

    $animePopular = collect(Http::withToken(config('services.aniapi.token'))
    ->get('https://api.aniapi.com/v1/anime?nsfw=true')
    ->json()['data']['documents'])->take(5);

    return view('category-posts', [
        
        'news_posts' => Post::latest('created_at')->with('category', 'author')->where('category_id', 1)->simplePaginate(10),
        'featured_posts' => Post::latest('created_at')->with('category', 'author')->where('category_id', 2)->simplePaginate(10),
        'currentCategory' => $category,
        'animeSeason' => $animeSeason,
        'animeYear' => $animeYear,
        'animePopular' => $animePopular
    ]);
})->name('category');

Route::get('authors/{author}', function (User $author) {
    
    return view('home', [
        'posts' => $author->posts->load('category','author')
    ]);
});








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
