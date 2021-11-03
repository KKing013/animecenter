<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;



class SearchBar extends Component
{
    public $search = '';


    public function render()
    {

    $searchResults = [];


    $searchResults = Http::withToken(config('services.aniapi.token'))
    ->get('https://api.aniapi.com/v1/anime?title='.$this->search)
    ->json();

    
    if($searchResults['status_code'] == 200) {

        $searchResults = Http::withToken(config('services.aniapi.token'))
        ->get('https://api.aniapi.com/v1/anime?title='.$this->search)
        ->json()['data']['documents'];
    }

    else {
        
        $searchResults = Http::withToken(config('services.aniapi.token'))
        ->get('https://api.aniapi.com/v1/anime?title='.$this->search)
        ->json();

    }

    return view('livewire.search-bar', [
            'searchResults' => collect($searchResults)->take(6)
        ]);
    }
}
