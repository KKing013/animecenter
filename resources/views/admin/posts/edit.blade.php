<x-layout>

    <section class="py-8 max-w-4xl mx-auto">

        <div class="lg:flex">

            <aside class="w-48 mb-4 p-2">

                <h4 class="font-semibold mb-4">Links</h4>

                <ul>
                 
                   
                    <li>
                        <a href="/admin/posts">Manage
                            Posts</a>
                    </li>

                    <li>
                        <a href="/admin/posts/create">New Post</a>
                    </li>
                </ul>
            </aside>

            <main class="flex-1 p-2">

                <h1 class="text-lg font-bold mb-8 pb-2 border-b">
                    Edit Post : {{ $post->title }}
                </h1>

                <div class="border border-gray-200 p-6 rounded-xl">

                    <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <x-form.input name="title" :value="old('title', $post->title)" />
                       
                        <x-form.input name="slug" :value="old('slug', $post->slug)" />

                        <div class="flex mt-6">

                            
                            <div class="flex-1">
                                
                                <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                                   
                            </div>

                            <img src="/storage/{{ $post->thumbnail }}" alt="" class="rounded-xl ml-6" width="100">
                        </div>

                        <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }} </x-form.textarea>
                        
                        <x-form.textarea name="body">{{ old('body', $post->body) }} </x-form.textarea>

                        <div class="mb-6">
                            <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                Category
                            </label>

                            <select name="category_id" id="category_id">

                                @foreach ($categories as $category)

                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>

                                @endforeach

                            </select>

                            @error('category')
                                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                        </div>



                        <x-button> Update </x-button>

                    </form>

                </div>

            </main>

        </div>
    </section>

</x-layout>
