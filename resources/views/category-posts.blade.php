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

        @if ($currentCategory)

            <a href="/categories/{{ $currentCategory->slug }}"
                class="transition-colors duration-300 relative inline-flex items-center hover:text-red-500">
                {{ $currentCategory->name }}
                <i class="bi bi-chevron-right relative inline-flex items-center"></i>

            </a>
        @endif

    </section>

    <section class="max-w-6xl mx-auto space-y-7 md:flex md:p-0 p-2">

        <article class="mt-7 md:mr-4 border-solid border-2 border-gray-200 p-3 max-w-3xl rounded-xl">







            <div class="grid grid-cols-2 gap-4">




                @if ($currentCategory->slug == $news_posts[0]['category']['slug'])

                    @foreach ($news_posts as $post)
                        
                    
                    <a href="/posts/{{$post->slug}}">
                            <div class="space-y-4">
                                <span class="block">


                                    @if ($post->thumbnail == null)
                                        <img width="" height="" src="\images\10-2-anime-png-images.png"
                                            alt="" />

                                    @else
                                        <img src="/storage/{{ $post->thumbnail }}" alt="" class="w-full">

                                    @endif
                                </span>
                                <span class="block font-semibold text-black-500 text-sm">{{ $post->title }}</span>
                                <span class="block text-xs text-gray-500">
                                    <p>{{ $post->excerpt }}</p>
                                </span>
                                <span class="block text-xs">by {{ $post->author->name }}</span>
                            </div>
                    </a>



                    @endforeach

                    <div class="mt-10 mb-10">

                        {{ $news_posts->links() }}

                    </div>

                @endif


                @if ($currentCategory->slug == $featured_posts[0]['category']['slug'])

                    @foreach ($featured_posts as $post)

                    <a href="/posts/{{$post->slug}}">
                        <div class="space-y-4 mb-5">
                            <span class="block">
                                @if ($post->thumbnail == null)
                                    <img src="\images\10-2-anime-png-images.png"
                                        alt="" />

                                @else
                                    <img src="/storage/{{ $post->thumbnail }}" alt="" class="w-full">

                                @endif
                            </span>
                            <span class="block font-semibold text-black-500 text-sm">{{ $post->title }}</span>
                            <span class="block text-xs text-gray-500">
                                <p>{{ $post->excerpt }}</p>
                            </span>
                            <span class="block text-xs">by {{ $post->author->name }}</span>
                        </div>
                    </a>

                    @endforeach


                    {{ $featured_posts->links() }}

                @endif



            </div>



        </article>

        <section>

            <article>

                <div class="p-2 bg-gray-100 border border-black border-opacity-5 rounded-xl">
                    <a href="">
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
                    <a href="">
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
                    <a href="">
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
