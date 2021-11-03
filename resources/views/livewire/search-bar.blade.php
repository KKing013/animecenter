<div id="navdropdown" class="relative flex lg:inline-flex px-3 py-2">



    <input wire:model.debounce.500ms="search" id="navinput" type="text" name="search" placeholder="Search Anime"
        class="bg-transparent placeholder-black font-semibold text-sm rounded-lg">

    <div wire:loading class="spinner top-0 right-0 mr-6 mt-7"></div>

    @if (strlen($search) >= 2)
        <div class="absolute bg-gray-100 text-sm rounded w-52 mt-11">

            @if (isset($searchResults['message']))

                <div class="px-3 py-3">No results found for "{{ $search }}"</div>

            @else

                <ul id="animesearch">
                    @foreach ($searchResults as $result)

                        <li class="border-b border-gray-700">
                            
                            <a href="/anime/{{ $result['id'] }}"
                                class="block hover:bg-gray-400 p-1 flex items-center">
                                <img src="{{ $result['cover_image'] }}" alt="poster" class="w-10">
                                <span class="ml-4">{{ $result['titles']['en'] }}</span>
                            </a>
                        
                        </li>
                    @endforeach


                </ul>

            @endif









        </div>

    @endif
</div>
