<x-layout>

    <section class="max-w-6xl mx-auto flex p-2 border-solid border-2 border-gray-200">
        <a href="/" class="transition-colors duration-300 relative inline-flex items-center hover:text-blue-500">
            Home
            <i class="bi bi-chevron-right ml-1"></i>

        </a>



        <a href="/anime/{{ $anime['id'] }}"
            class="transition-colors duration-300 relative inline-flex items-center hover:text-blue-500">
            {{ $anime['titles']['en'] }}
            <i class="bi bi-chevron-right ml-1"></i>

        </a>


    </section>

    <section class="max-w-6xl mx-auto space-y-7 flex">

        <article class="mt-8">

            <div class="grid grid-cols-5">

                <div class="space-y-4 border-solid border-2 border-gray-200 ">
                    <a href="/anime/{{ $anime['id'] }}">
                        <img class="p-2" src="{{ $anime['cover_image'] }}" alt="" />
                    </a>


                </div>

                <div class="grid grid-cols-6 col-span-4 p-2 ">

                    <div class="p-2"><span
                            class="font-semibold text-black-500 text-sm">{{ $anime['titles']['en'] }}</span>
                        <span class="font-semibold text-black-500 text-sm">{{ $anime['titles']['jp'] }}</span>

                    </div>



                    <div class="mt-10"><span
                            class="font-semibold text-black-500 text-sm">Score:</span><br>{{ $anime['score'] }}

                    </div>

                    <div class="mt-10"><span class="font-semibold text-black-500 text-sm">Episodes:
                        </span><br>{{ $anime['episodes_count'] }}

                    </div>

                    <div class="mt-10"><span class="font-semibold text-black-500 text-sm">Genre:
                        </span><br>{{ $anime['genres'][0] }}

                    </div>

                    @if (isset($anime['trailer_url']))

                        <div class="mt-10">
                            <iframe width="200" height="133" src="{{ $anime['trailer_url'] }} "
                                title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
                                allowfullscreen></iframe>
                        </div>

                    @else

                        <div class="mt-10">
                            <iframe width="200" height="133" src="https://www.youtube.com/embed/t6MXHczeEqc"
                                title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
                                allowfullscreen></iframe>
                        </div>

                    @endif





                </div>





            </div>

        </article>



    </section>

    <section class="max-w-6xl mx-auto space-y-7 flex my-5">

        <div class="text-sm">{{ $anime['descriptions']['en'] }}</div>

    </section>

</x-layout>
