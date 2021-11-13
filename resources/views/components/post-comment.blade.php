@props(['comment'])

<article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4">
    <div class="flex-shrink-0">
        <img src="/storage/{{ $comment->author->avatar }}" width="60" height="60" alt="" class="rounded-full">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->author->name }}</h3>
            <p class="text-xs">
                {{  $comment->author->url  }}
            </p>
            <p class="text-xs">
                {{  $comment->author->description  }}
            </p>

            <p class="text-xs">Posted
                <time>{{ $comment->created_at->format('F j, Y, g:i a') }}</time>
            </p>
        </header>
        <p>{{ $comment->body }}</p>

    </div>
</article>