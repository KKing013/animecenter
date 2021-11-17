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
                        <div class="flex items-center p-3 bg-white hover:bg-red-500 hover:text-white transition duration-300">
                            <img img class="w-52 h-72" src="{{ $anime['cover_image'] }}" alt="" />
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





    {{-- Pagination --}}

    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center mt-2 mb-10">

        @if ($previous)



            <a href="/anime/new/page/{{ $previous }}" rel="prev"
                class="ml-4 relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                {!! __('pagination.previous') !!}
            </a>

        @else

            <div></div>

        @endif


        @if ($next)



            <a href="/anime/new/page/{{ $next }}" rel="next"
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                {!! __('pagination.next') !!}
            </a>

        @else

            <div></div>

        @endif
    </nav>

</x-layout>
