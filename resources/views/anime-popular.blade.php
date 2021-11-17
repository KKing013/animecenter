<x-layout>

    <section class="max-w-6xl mx-auto flex p-2 border-solid border-2 border-gray-200 rounded-xl">
        <x-links>
            <x-slot name="href">
                /
            </x-slot>

            <x-slot name="title">
                Home
            </x-slot>
        </x-links>

        <x-links>
            <x-slot name="href">
                /anime/popular
            </x-slot>

            <x-slot name="title">
                Popular Anime
            </x-slot>
        </x-links>



    </section>

    <section class="max-w-6xl mx-auto space-y-7 flex md:p-0 p-2">

        <article class="mt-8">

            <div class="grid grid-cols-3 gap-1 bg-red-500 text-white p-2 ">

                <div class="mx-auto">Score</div>
                <div class="mx-auto">Title</div>
                <div class="mx-auto">Season Year</div>



            </div>

            <div class="grid grid-cols-3 border-solid border-2 border-gray-200">


                @foreach ($animePopular as $anime)




                    <div class="flex md:justify-center mx-auto md:w-96 sm:w-50 border-solid border-t-2 border-gray-200 items-center">
                        {{ $anime['score'] }}

                    </div>


                    <a href="/anime/{{ $anime['id'] }}">

                        <div class="flex mx-auto md:w-96 sm:w-50 border-solid border-t-2 border-gray-200">

                            <img width="100" height="100" src="{{ $anime['cover_image'] }}" alt=""
                                class="hover:opacity-60 duration-300 p-4" />

                            <span class="flex mx-auto md:w-96 sm:w-50 border-solid border-t-2 border-gray-200 items-center">
                                {{ $anime['titles']['en'] }}

                            </span>

                        </div>
                    </a>

                    @if (isset($anime['season_year']))

                        <div
                            class="flex md:justify-center mx-auto md:w-96 sm:w-50 border-solid border-t-2 border-gray-200 items-center">






                            {{ $anime['season_year'] }}


                        </div>



                    @else

                        <div
                            class="flex md:justify-center mx-auto md:w-96 sm:w-50 border-solid border-t-2 border-gray-200 items-center">





                            N/A


                        </div>





                    @endif




                @endforeach






            </div>








        </article>







    </section>









</x-layout>


{{-- Pagination --}}

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
