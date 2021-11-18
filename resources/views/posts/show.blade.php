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

        <a href="/categories/{{ $post->category->slug }}"
            class="transition-colors duration-300 relative inline-flex items-center hover:text-red-500">
            {{ $post->category->name }}
            <i class="bi bi-chevron-right relative inline-flex items-center"></i>
        </a>





    </section>

    <section class="max-w-6xl mx-auto space-y-7 md:flex md:p-0 p-2">
        
        <article class="md:w-5/6 mt-7 md:mr-4 border-solid border-2 border-gray-200 p-4 rounded-xl">


            <div class="space-y-2">
                <span class="block font-semibold text-black-500 text-xl">{{ $post->title }}</span>
                <span class="block text-gray-500">

                    <p>{{ $post->excerpt }}</p>
                </span>
                
                @if ($post->thumbnail == null)
                
                <img width="500" height="500" src="\images\10-2-anime-png-images.png" class="mx-auto my-1"
                alt="" />
                    
                @else
                
                <img width="500" height="500" src="/storage/{{ $post->thumbnail }}" class="mx-auto my-1" alt="">
                   
                @endif

                <span class="block text-xs">by {{ $post->author->name }} Published
                    <time>{{ $post->created_at->diffForHumans() }}</time></span>
                   

                <span class="block space-y-4" style="white-space: pre-line;">
                    {{ $post->body }}

                </span>



            </div>

            <section class="col-span-8 col-start-5 mt-10 space-y-6">

                @auth

                <form method="POST" action="/posts/{{ $post->slug }}/comments"
                    class="border border-gray-200 p-6 rounded-xl">
                    @csrf

                    <header class="flex items-center">

                        <img src="/storage/{{ auth()->user()->avatar }}" width="60" height="60" alt="" class="rounded-full">

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
                        <x-button> Post </x-button>
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


        <section class="max-w">

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
