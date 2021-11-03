@props(['post'])

<a href="/posts/{{$post->slug}}">

<div class="grid grid-cols-1 gap-2">


    <div class="flex items-center">
        <img width="48" height="48" src="images\85ba7e3a92fd25d640904248daf4e514.jpg" alt="" />
        <span class="ml-2 font-semibold text-black-500 text-sm">{{ $post->title }}<p class="text-xs text-gray-500">
                {{ $post->excerpt }}</p></span>
    </div>
    <hr class="border-gray-300 mb-1">


    {{-- <div class="flex items-center">
            <img width="48" height="48" src="images\528d6ee085953bcc4c5c0a45c4f63425.jpg" alt="" />
            <span class="ml-2 font-semibold text-black-500 text-sm">Sekai Saikou no Ansatsusha, Isekai
                Kizoku ni
                Tensei suru<p class="text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Voluptates obcaecati commodi esse? Fugiat consequatur libero
                    repellendus excepturi voluptatibus beatae? Architecto illum minus, nulla dolorum rerum
                    aspernatur quia beatae corrupti quae!</p></span>
        </div>
        <hr class="border-gray-300 mb-1">
        <div class="flex items-center">
            <img width="48" height="48" src="images\435eec711bce23a3fd3e50f0abd6498a.jpg" alt="" />
            <span class="ml-2 font-semibold text-black-500 text-sm">Kimetsu no Yaiba: Mugen Ressha-hen<p
                    class="text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Voluptates obcaecati commodi esse? Fugiat consequatur libero repellendus excepturi
                    voluptatibus beatae? Architecto illum minus, nulla dolorum rerum aspernatur quia beatae
                    corrupti quae!</p></span>
        </div>
        <hr class="border-gray-300 mb-1">
        <div class="flex items-center">
            <img width="48" height="48" src="images\0a568f822f1be9b64144fd24a8664cf0.jpg" alt="" />
            <span class="ml-2 font-semibold text-black-500 text-sm">takt op.Destiny<p
                    class="text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Voluptates obcaecati commodi esse? Fugiat consequatur libero repellendus excepturi
                    voluptatibus beatae? Architecto illum minus, nulla dolorum rerum aspernatur quia beatae
                    corrupti quae!</p></span>
        </div>
        <hr class="border-gray-300 mb-1">

        <div class="flex items-center">
            <img width="48" height="48" src="images\0a568f822f1be9b64144fd24a8664cf0.jpg" alt="" />
            <span class="ml-2 font-semibold text-black-500 text-sm">takt op.Destiny<p
                    class="text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Voluptates obcaecati commodi esse? Fugiat consequatur libero repellendus excepturi
                    voluptatibus beatae? Architecto illum minus, nulla dolorum rerum aspernatur quia beatae
                    corrupti quae!</p></span>
        </div>

        <hr class="border-gray-300 mb-1"> --}}

</div>

</a>
