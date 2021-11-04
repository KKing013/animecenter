<x-layout>






    <section class="max-w-6xl mx-auto space-y-7 flex">



        <section class="mt-8 mr-4 max-w-3xl">


            <article class="border-solid border-2 border-gray-200 p-2">

                <a href="anime/season">
                    <h1 class="font-semibold text-gray-500 text-lg">Fall 2021 Anime</h1>
                </a>

                <hr class="border-gray-500 mb-5">



                <div class="grid grid-cols-5 gap-2">

                    @foreach ($animeSeason as $anime)

                        <div><a href="/anime/{{$anime['id']}}"><img class="hover:opacity-60 duration-300 w-40 h-48" src="{{ $anime['cover_image'] }}"
                            alt="animeseason"></a>
                        </div>

                    @endforeach



                </div>

            </article>



            <article class="mt-5 border-solid border-2 border-gray-200 p-2">

                <a href="/categories/{{ $news_posts[0]['category']['slug'] }}">
                    <h1 class="font-semibold text-gray-500 text-lg">News</h1>
                </a>


                <hr class="border-gray-500 mb-5">


                @if ($news_posts->count())


                    @foreach ($news_posts->take(5)  as $post)

                       


                            <x-news-card :post="$post" />


                    @endforeach

                @else

                    <p class="text-center">No posts at the moment.</p>

                @endif

            </article>

            <article class="mt-5 border-solid border-2 border-gray-200 p-2">

                <a href="/categories/{{ $featured_posts[0]['category']['slug'] }}">
                    <h1 class="font-semibold text-gray-500 text-lg">Featured Articles</h1>
                </a>

                <hr class="border-gray-500 mb-5">

                @if ($featured_posts->count())


                    @foreach ($featured_posts->take(5) as $post)

                      

                            <x-featured-card :post="$post" />

                        

                    @endforeach

                @else

                    <p class="text-center">No posts at the moment.</p>

                @endif

            </article>

        </section>



        <section>

            <article>

                <div class="p-2 bg-gray-100 border border-black border-opacity-5 rounded-xl">
                    <a href="anime/top-airing">
                        <h1 class="font-semibold text-gray-500 text-lg">Top Airing Anime</h1>
                    </a>

                    <hr class="border-gray-500 mb-5">



                    <div class="grid grid-cols-1 gap-2">

                        @foreach ($animeSeason as $anime)

                            <x-top-airing-card :anime="$anime" />

                        @endforeach


                    </div>



                </div>

            </article>

            <article class="mt-5">

                <div class="p-2 bg-gray-100 border border-black border-opacity-5 rounded-xl">
                    <a href="anime/new">
                        <h1 class="font-semibold text-gray-500 text-lg">New 2021 Anime</h1>
                    </a>

                    <hr class="border-gray-500 mb-5">



                    <div class="grid grid-cols-1 gap-2">

                        @foreach ($animeYear as $anime)

                            <x-newly-added-card :anime="$anime" />

                        @endforeach


                    </div>



                </div>

            </article>


            <article class="mt-5">

                <div class="p-2 bg-gray-100 border border-black border-opacity-5 rounded-xl">
                    <a href="anime/popular">
                        <h1 class="font-semibold text-gray-500 text-lg">Popular Anime</h1>
                    </a>

                    <hr class="border-gray-500 mb-5">

                    <div class="grid grid-cols-1 gap-2">

                        @foreach ($animePopular as $anime)

                            <x-popular-card :anime="$anime" />

                        @endforeach


                    </div>



                </div>

            </article>


        </section>

    </section>


</x-layout>
