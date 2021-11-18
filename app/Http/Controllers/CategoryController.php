<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class CategoryController extends Controller
{
    public function __invoke(Category $category) {

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
    }
}
