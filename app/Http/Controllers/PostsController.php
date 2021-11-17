<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class PostsController extends Controller
{
    public function index()
    {

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

            'news_posts' => Post::latest('updated_at')->with('category', 'author')->where('category_id', 1)->get(),
            'featured_posts' => Post::latest('updated_at')->with('category', 'author')->where('category_id', 2)->get(),
            'animeSeason' => $animeSeason,
            'animeYear' => $animeYear,
            'animePopular' => $animePopular,



        ]);
    }

    public function show(Post $post)
    {

        

        $animeSeason = collect(Http::withToken(config('services.aniapi.token'))
            ->get('https://api.aniapi.com/v1/anime?status=1&season=3&nsfw=true')
            ->json()['data']['documents'])->take(5);

        $animeYear = collect(Http::withToken(config('services.aniapi.token'))
            ->get('https://api.aniapi.com/v1/anime?status=1&year=2021&nsfw=true')
            ->json()['data']['documents'])->take(5);

        $animePopular = collect(Http::withToken(config('services.aniapi.token'))
            ->get('https://api.aniapi.com/v1/anime?nsfw=true')
            ->json()['data']['documents'])->take(5);

            

        return view('posts.show', [
            
            'post' => $post,
            'animeSeason' => $animeSeason,
            'animeYear' => $animeYear,
            'animePopular' => $animePopular,


        ]);
    }

    
}
