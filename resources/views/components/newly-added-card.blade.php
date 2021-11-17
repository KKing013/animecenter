@props(['anime'])

<a href="/anime/{{ $anime['id'] }}">
<div class="flex items-center hover:opacity-60 duration-300  ">
    <img class="w-14 h-20" src="{{ $anime['cover_image'] }}" alt="" />
    <span class="ml-2 font-semibold text-gray-500 text-sm">{{ $anime['titles']['en'] }}</span>
</div>
</a>