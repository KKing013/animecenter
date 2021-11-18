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
                /anime/new
            </x-slot>

            <x-slot name="title">
                New 2021 Anime
            </x-slot>
        </x-links>




    </section>

    <section class="max-w-6xl mx-auto space-y-7 flex md:p-0 p-2">

        <article class="mt-8 border-solid border-2 border-gray-200 rounded-xl">





            <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-1">

                @foreach ($animeYear as $anime)



                    <a href="/anime/{{ $anime['id'] }}">
                        <div
                            class="flex items-center p-3 bg-white hover:bg-red-500 hover:text-white transition duration-300">
                            <img class="w-52 h-72" src="{{ $anime['cover_image'] }}" alt="" />
                            <span class="ml-2 font-semibold text-black-500 text-sm"> {{ $anime['titles']['en'] }}<p
                                    class="text-xs text-gray-500">
                                </p></span>

                        </div>
                    </a>

                @endforeach


                </nav>






            </div>




        </article>



    </section>


    <x-page-nav :previous="$previous" :next="$next" />

</x-layout>
