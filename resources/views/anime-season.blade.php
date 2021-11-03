<x-layout>

    <section class="max-w-6xl mx-auto flex p-2 border-solid border-2 border-gray-200">
        <a href="/" class="transition-colors duration-300 relative inline-flex items-center hover:text-blue-500">
            Home
            <i class="bi bi-chevron-right ml-1"></i>

        </a>

        

        <a href="/anime/season" class="transition-colors duration-300 relative inline-flex items-center hover:text-blue-500">
           Fall 2021 Anime
            <i class="bi bi-chevron-right ml-1"></i>

        </a>
       

    </section>

    <section class="max-w-6xl mx-auto space-y-7 flex">

        <article class="mt-8 border-solid border-2 border-gray-200">





            <div class="grid grid-cols-3 gap-1">

                @foreach ($animeSeason as $anime)


             
                <a href="/anime/{{ $anime['id'] }}">
                <div class="flex items-center p-3">
                    <img img class="w-52 h-72"  src="{{ $anime['cover_image'] }}" alt="" />
                    <span class="ml-2 font-semibold text-black-500 text-sm"> {{ $anime['titles']['en'] }}<p class="text-xs text-gray-500">
                       </p></span>
            
                </div>
                </a>

                @endforeach

            

            </div>

        </article>

        

    </section>

  





</x-layout>
