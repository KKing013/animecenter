<x-layout>

    <section class="py-8 max-w-4xl mx-auto">

        <div class="flex">

            <aside class="w-48">

                <h4 class="font-semibold mb-4">Links</h4>

                <ul>
                    <li>
                        <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">Manage Posts</a>
                    </li>
                    
                    <li>
                        <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Post</a>
                    </li>
                </ul>
            </aside>

            <main class="flex-1">

                <h1 class="text-lg font-bold mb-8 pb-2 border-b">
                    Publish New Post
                </h1>

                <div class="border border-gray-200 p-6 rounded-xl">

                    <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                        @csrf

                        <x-form.input name="title" required />
                        <x-form.input name="slug" required />
                        <x-form.input name="thumbnail" type="file" required/>
                        <x-form.textarea name="excerpt">{{ old('excerpt')}} </x-form.textarea>
                        <x-form.textarea name="body">{{ old('body')}} </x-form.textarea>

                        <div class="mb-6">
                            <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                Category
                            </label>

                            <select name="category_id" id="category_id">

                                @foreach ($categories as $category)

                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>

                                @endforeach

                            </select>

                            @error('category')
                                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror

                        </div>



                        <button
                            class="bg-red-500 text-white uppercase font-semibold text-sm py-2 px-10 rounded-2xl hover:bg-red-600"
                            type="submit">Publish
                        </button>



                    </form>

                </div>

            </main>

        </div>
    </section>

</x-layout>
