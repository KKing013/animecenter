<x-layout>

    <section class="px-6 py-8">

        <div class="border border-gray-200 p-6 rounded-xl max-w-sm mx-auto">

        <form method="POST" action="/">
            @csrf

            <div class="mb-6">
                <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Title
                </label>
                
                <input type="text" class="border border-gray-400 p-2 w-full"
                name="title" id="title" required>


                @error('title')
                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Excerpt
                </label>
                
                <input type="text" class="border border-gray-400 p-2 w-full"
                name="excerpt" id="excerpt" required>


                @error('excerpt')
                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Body
                </label>
                
                <textarea name="body" id="body" cols="30" rows="10" class="border border-gray-400 p-2 w-full" required></textarea>


                @error('body')
                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                @enderror

            </div>


        </form>

        </div>
    </section>


</x-layout>
