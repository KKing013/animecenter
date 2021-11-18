@props(['previous', 'next'])

<nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center mt-2 mb-10">

    @if ($previous)

        <a href="/anime/popular/page/{{ $previous }}" rel="prev"
            class="ml-4 relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            {!! __('pagination.previous') !!}
        </a>

    @else

        <div></div>

    @endif


    @if ($next)



        <a href="/anime/popular/page/{{ $next }}" rel="next"
            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            {!! __('pagination.next') !!}
        </a>

    @else

        <div></div>

    @endif
</nav>
