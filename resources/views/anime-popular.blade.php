<x-layout>

    <section class="max-w-6xl mx-auto flex p-2 border-solid border-2 border-gray-200">
        <a href="/" class="transition-colors duration-300 relative inline-flex items-center hover:text-blue-500">
            Home
            <i class="bi bi-chevron-right ml-1"></i>

        </a>

        

        <a href="/anime/popular" class="transition-colors duration-300 relative inline-flex items-center hover:text-blue-500">
           Popular Anime
            <i class="bi bi-chevron-right ml-1"></i>

        </a>
       

    </section>

    <section class="max-w-6xl mx-auto space-y-7 flex">

        <article class="mt-8 border-solid border-2 border-gray-200">
            <div class="grid grid-cols-3 gap-1">
                <div class="mx-auto mt-4 text-4xl">Rank</div>
                <div class="mx-auto mt-4 text-4xl">Title</div>
                <div class="mx-auto mt-4 text-4xl">Score</div>
            </div>

            <div class="grid grid-cols-3 gap-1">

                
                @foreach ($animePopular as $anime)

          

                <div class="mx-auto mt-4 text-4xl">{{ $loop->iteration }}</div>

                <a href="/anime/{{ $anime['id'] }}">
                <div class="flex mx-auto mt-4">
                    <img width="48" height="48" src="{{ $anime['cover_image'] }}" alt="" />
                    <span class="ml-2 font-semibold text-black-500 text-sm"> {{ $anime['titles']['en'] }}<p class="text-xs text-gray-500">
                       </p></span>
            
                </div>
                </a>
                <div class="mx-auto mt-4 text-2xl">{{ $anime['score'] }}</div>

                @endforeach

            

            </div>

        </article>

        

    </section>

  





</x-layout>
