<x-layout>

    <section class="max-w-6xl mx-auto flex p-2 border-solid border-2 border-gray-200">
        <a href="/" class="transition-colors duration-300 relative inline-flex items-center hover:text-blue-500">
            Home
            <i class="bi bi-chevron-right ml-1"></i>

        </a>




        <a href="/categories/{{ $post->category->slug }}"
            class="transition-colors duration-300 relative inline-flex items-center hover:text-blue-500">
            {{ $post->category->name }}
            <i class="bi bi-chevron-right ml-1"></i>
        </a>





    </section>

    <section class="max-w-6xl mx-auto space-y-7 flex">
        <article class="mt-8 mr-4 border-solid border-2 border-gray-200 p-4 max-w-3xl">


            <div class="space-y-2">
                <span class="block font-semibold text-black-500 text-xl">{{ $post->title }}</span>
                <span class="block text-gray-500">

                    <p>{{ $post->excerpt }}</p>
                </span>
                
                @if ($post->thumbnail == null)
                <img width="" height="" src="\images\flatten;crop_down;jpeg_quality=70.png"
                alt="" />
                    
                @else
                <img src="/storage/{{ $post->thumbnail }}" alt="" class="w-full">
                   
                @endif

                <span class="block text-xs">by {{ $post->author->name }} Published
                    <time>{{ $post->created_at->diffForHumans() }}</time></span>
                   

                <span class="block">
                    <p>{{ $post->body }}</p>

                </span>



            </div>

            <section class="col-span-8 col-start-5 mt-10 space-y-6">

                @auth

                <form method="POST" action="/posts/{{ $post->slug }}/comments"
                    class="border border-gray-200 p-6 rounded-xl">
                    @csrf

                    <header class="flex items-center">

                        <img src="https://i.pravatar.cc/60" width="40" height="40" alt="" class="rounded-full">

                        <h2 class="ml-3">Leave a comment</h2>

                    </header>

                    <div class="mt-6">
                        <textarea name="body" class="w-full text-sm" rows="5"
                            placeholder="Got something to say?" required></textarea>

                            @error('body')
                           
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            
                            @enderror
                        
                        </div>  

                    <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                        <button
                            class="bg-red-500 text-white uppercase font-semibold text-sm py-2 px-10 rounded-2xl hover:bg-red-600"
                            type="submit">Post</button>
                    </div>


                </form>

                @else  

                <p class="semibold"><a href="/login" class="hover:underline">Login to comment</a></p>

                @endauth

                @foreach ($post->comments as $comment)

                    <x-post-comment :comment="$comment" />


                @endforeach
            </section>

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
