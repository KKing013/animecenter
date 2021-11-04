<x-layout>

    <section class="max-w-6xl mx-auto flex p-2 border-solid border-2 border-gray-200">
        <a href="/" class="transition-colors duration-300 relative inline-flex items-center hover:text-blue-500">
            Home
            <i class="bi bi-chevron-right ml-1"></i>

        </a>



        <a href="/anime/popular"
            class="transition-colors duration-300 relative inline-flex items-center hover:text-blue-500">
            Popular Anime
            <i class="bi bi-chevron-right ml-1"></i>

        </a>


    </section>

    <section class="max-w-6xl mx-auto space-y-7 flex">

        <article class="mt-8 border-solid border-2 border-gray-200">
            <div class="grid grid-cols-3 gap-1">
                
                <div class="mx-auto mt-4 text-4xl">Score</div>
                <div class="mx-auto mt-4 text-4xl">Title</div>
                <div class="mx-auto mt-4 text-4xl">Season Year</div>
                

                
            </div>

            <div class="grid grid-cols-3 gap-1">


                @foreach ($animePopular as $anime)



                    
                <div class="mx-auto mt-10 text-2xl">{{ $anime['score'] }}</div>
                    <a href="/anime/{{ $anime['id'] }}">
                        <div class="flex mx-auto mt-10">
                            <img width="100" height="100" src="{{ $anime['cover_image'] }}" alt="" />
                            <span class="ml-2 font-semibold text-black-500 text-sm"> {{ $anime['titles']['en'] }}<p
                                    class="text-xs text-gray-500">
                                </p></span>

                        </div>
                    </a>

                    @if( isset($anime['season_year']) )

                    <div class="mx-auto mt-10 text-2xl">{{ $anime['season_year'] }}</div>
                    @else
                    <div class="mx-auto mt-10 text-2xl">N/A</div>
                    @endif
                
                
                @endforeach


              



            </div>








        </article>







    </section>









</x-layout>


{{-- Pagination  --}}

<nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center mt-2 mb-10">

    @if ($previous)



        <a href="/anime/popular/page/{{ $previous }}" rel="prev"
            class="ml-4 relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            {!! __('pagination.previous') !!}
        </a>

    @else

        <div></div>

    @endif


    @if ($next)



        <a href="/anime/popular/page/{{ $next }}" rel="next"
            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            {!! __('pagination.next') !!}
        </a>

    @else

        <div></div>

    @endif
</nav>