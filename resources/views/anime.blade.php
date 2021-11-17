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



        <a href="/anime/{{ $anime['id'] }}"
            class="transition-colors duration-300 relative inline-flex items-center hover:text-red-500">
            {{ $anime['titles']['en'] }}
            <i class="bi bi-chevron-right relative inline-flex items-center"></i>

        </a>


    </section>

    <section class="max-w-6xl mx-auto space-y-7 flex md:p-0 p-2">

        <article class="mt-8 border-solid border-2 border-gray-200  rounded-xl">

            <div class="grid grid-cols-5 ">

                <div class="border-solid border-r border-gray-200">

                    <a href="/anime/{{ $anime['id'] }}">
                        <img class="p-2" src="{{ $anime['cover_image'] }}" alt="" />
                    </a>

                    <div class="p-2 font-semibold text-black-500 text-sm">{{ $anime['titles']['en'] }}</div><br>
                    <div class="p-2 font-semibold text-black-500 text-sm">{{ $anime['titles']['jp'] }}</div>






                </div>

                <div class="grid md:grid-cols-4 md:col-span-4 md:gap-20">


                    <div class="md:mt-10 p-4"><span
                            class="font-semibold text-black-500 text-sm">Synopsis:</span><br>{{ $anime['descriptions']['en'] }}

                    </div>

                     <div class="md:mt-10 p-4"><span
                            class="font-semibold text-black-500 text-sm">Score:</span><br>{{ $anime['score'] }}

                    </div>

                    <div class="md:mt-10 p-4"><span class="font-semibold text-black-500 text-sm">Episodes:
                        </span><br>{{ $anime['episodes_count'] }}

                    </div>

                    <div class="md:mt-10 p-4"><span class="font-semibold text-black-500 text-sm">Genre:
                        </span><br>{{ $anime['genres'][0] }}

                    </div>

                    @if (isset($anime['trailer_url']))

                        <div class="md:mt-10 p-4">
                            <iframe width="200" height="133" src="{{ $anime['trailer_url'] }} "
                                title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
                                allowfullscreen></iframe>
                        </div>

                    @else

                        <div class="md:mt-10 p-4">
                            <iframe width="200" height="133" src="https://www.youtube.com/embed/t6MXHczeEqc"
                                title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
                                allowfullscreen></iframe>
                        </div>

                    @endif





                </div>





            </div>

        </article>



    </section>







</x-layout>
