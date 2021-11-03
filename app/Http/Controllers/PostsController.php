<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostsController extends Controller
{
    public function index() {

        $animeSeason = collect(Http::withToken(config('services.aniapi.token'))
        ->get('https://api.aniapi.com/v1/anime?status=1&season=3&nsfw=true')
        ->json()['data']['documents'])->take(5);

        $animeYear = collect(Http::withToken(config('services.aniapi.token'))
        ->get('https://api.aniapi.com/v1/anime?year=2021&nsfw=true')
        ->json()['data']['documents'])->take(5);

        $animePopular = collect(Http::withToken(config('services.aniapi.token'))
        ->get('https://api.aniapi.com/v1/anime?nsfw=true')
        ->json()['data']['documents'])->take(5);

        

        return view('home', [
           
            'posts' => Post::latest('created_at')->with('category', 'author')->filter(request(['search']))->get(),
            'categories' => Category::all(),
            'animeSeason' => $animeSeason,
            'animeYear' => $animeYear,
            'animePopular' => $animePopular,
            

            
        ]);

    }

    public function show(Post $post) {

        $animeSeason = collect(Http::withToken(config('services.aniapi.token'))
        ->get('https://api.aniapi.com/v1/anime?status=1&season=3&nsfw=true')
        ->json()['data']['documents'])->take(5);

        $animeYear = collect(Http::withToken(config('services.aniapi.token'))
        ->get('https://api.aniapi.com/v1/anime?status=1&year=2021&nsfw=true')
        ->json()['data']['documents'])->take(5);

        $animePopular = collect(Http::withToken(config('services.aniapi.token'))
        ->get('https://api.aniapi.com/v1/anime?nsfw=true')
        ->json()['data']['documents'])->take(5);
        
        return view('post', [
            'post' => $post,
            'animeSeason' => $animeSeason,
            'animeYear' => $animeYear,
            'animePopular' => $animePopular,
            
    
        ]);
    }

 
}
