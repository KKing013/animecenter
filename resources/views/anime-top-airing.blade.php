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
                /anime/top-airing
            </x-slot>

            <x-slot name="title">
                Top Airing Anime
            </x-slot>
        </x-links>


    </section>

    <section class="max-w-6xl mx-auto space-y-7 flex md:p-0 p-2">

        <article class="mt-8">

            <div class="grid grid-cols-3 gap-1 bg-red-500 text-white p-2 ">

                <div class="mx-auto">Score</div>
                <div class="mx-auto">Title</div>
                <div class="mx-auto">Episodes</div>



            </div>

            <div class="grid grid-cols-3 border-solid border-2 border-gray-200">


                @foreach ($animeSeason as $anime)

                    <div
                        class="flex md:justify-center mx-auto md:w-96 sm:w-50 border-solid border-t-2 border-gray-200 items-center">
                        {{ $anime['score'] }}

                    </div>


                    <a href="/anime/{{ $anime['id'] }}">

                        <div class="flex mx-auto md:w-96 sm:w-50 border-solid border-t-2 border-gray-200">

                            <img  src="{{ $anime['cover_image'] }}" alt=""
                                class="hover:opacity-60 duration-300 p-4 md:w-40 md:h-40 w-20 h-28" />

                            <span
                                class="flex mx-auto md:w-96 sm:w-50 border-solid border-t-2 border-gray-200 items-center">
                                {{ $anime['titles']['en'] }}

                            </span>

                        </div>
                    </a>

                    @if (isset($anime['episodes_count']))

                        <div
                            class="flex md:justify-center mx-auto md:w-96 sm:w-50 border-solid border-t-2 border-gray-200 items-center">

                            {{ $anime['episodes_count'] }}


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
