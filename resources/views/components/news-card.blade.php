@props(['post'])

<a href="/posts/{{$post->slug}}">

<div class="grid grid-cols-1 gap-2">


    <div class="flex items-center">
        @if ($post->thumbnail == null)
        <img width="48" height="48" src="images\85ba7e3a92fd25d640904248daf4e514.jpg" alt="" />
        @else 
        <img width="48" height="48" src="/storage/{{ $post->thumbnail }}" alt="" />
        @endif
        <span class="ml-2 font-semibold text-black-500 text-sm"> {{ $post->title }}<p class="text-xs text-gray-500">
                {{ $post->excerpt }}</p></span>

    </div>
    <hr class="border-gray-300 mb-1">

</div>

</a>