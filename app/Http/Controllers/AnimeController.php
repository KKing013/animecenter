<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {

        $animeSingle = collect(Http::withToken(config('services.aniapi.token'))
        ->get('https://api.aniapi.com/v1/anime/'.$id)->json()['data']);

       



        return view('anime', [

            'anime' => $animeSingle
          
    
        ]);
    }

    public function showSeason()

    {

        $animeSeason = collect(Http::withToken(config('services.aniapi.token'))
        ->get('https://api.aniapi.com/v1/anime?status=1&season=3&nsfw=true')
        ->json()['data']['documents']);

        

       



        return view('anime-season', [

            'animeSeason' => $animeSeason
          
    
        ]);
    }

    public function showTopAiring()

    {

        $animeSeason = collect(Http::withToken(config('services.aniapi.token'))
        ->get('https://api.aniapi.com/v1/anime?status=1&season=3&nsfw=true')
        ->json()['data']['documents']);

        
        return view('anime-top-airing', [

            'animeSeason' => $animeSeason
          
    
        ]);
    }

    public function showNew($page = 1)

    {

        $animeYear = collect(Http::withToken(config('services.aniapi.token'))
        ->get('https://api.aniapi.com/v1/anime?year=2021&&page='.$page)
        ->json()['data']['documents']);

        $previous = $page > 1 ? $page -1 : null;
        $next = $page < 5 ? $page +1 : null;

        return view('anime-new', [

            'animeYear' => $animeYear,
            'previous' => $previous,
            'next' => $next
    
        ]);
    }

    public function showPopular($page = 1)

    {

        $animePopular = collect(Http::withToken(config('services.aniapi.token'))
        ->get('https://api.aniapi.com/v1/anime?page='.$page)
        ->json()['data']['documents']);

        $previous = $page > 1 ? $page -1 : null;
        $next = $page < 155 ? $page +1 : null;

        // dd($animePopular);

        
        return view('anime-popular', [

            'animePopular' => $animePopular,
            'previous' => $previous,
            'next' => $next

          
    
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
