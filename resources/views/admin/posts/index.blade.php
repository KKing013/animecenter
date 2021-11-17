<x-layout>

    <section class="py-8 max-w-4xl mx-auto">

        <div class="lg:flex">

            <aside class="w-48 mb-4 p-2 flex-shrink-0">

                <h4 class="font-semibold mb-4">Links</h4>

                


                <ul>
                 
                    <li>
                        <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-red-500' : '' }}">Manage
                            Posts</a>
                    </li>

                    <li>
                        <a href="/admin/posts/create"
                            class="{{ request()->is('admin/posts/create') ? 'text-red-500' : '' }}">New Post</a>
                    </li>
                </ul>
            </aside>

            <main class="flex-1 p-2">

                <h1 class="text-lg font-bold mb-8 pb-2 border-b">
                    Manage Posts
                </h1>

                <div class="border border-gray-200 p-6 rounded-xl">


                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mb-4">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                              </th>
                                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Category
                                              </th>
                                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Created At
                                              </th>
                                              
                                              <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                              </th>
                                            </tr>
                                          </thead>

                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach($posts as $post)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                            
                                                            @if ($post->thumbnail == null)
                                                            <img class="h-10 w-10 rounded-full"
                                                                src="\images\10-2-anime-png-images.png"
                                                                alt="">
                                                            @else 
                                                            <img class="h-10 w-10 rounded-full"
                                                                src="/storage/{{ $post->thumbnail }}"
                                                                alt="">
                                                            @endif

                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900 hover:text-gray-400">
                                                                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                                                                
                                                            </div>

                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full">
                                                        {{ $post->category->name }}
                                                    </span>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        <time>{{ $post->created_at->diffForHumans() }}</time></span>
                                                    </span>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-900">Edit</a>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    {{-- <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-900">Delete</a> --}}
                                                    <form method="POST" action="/admin/posts/{{ $post->id }}">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button class="text-red-500 hover:text-red-900">Delete</button>
                                                    </form>
                                                
                                                </td>
                                            </tr>
                                            @endforeach

                                           


                                        </tbody>
                                    </table>

                                    
                                </div>

                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>

                </div>

            </main>

        </div>
    </section>

</x-layout>
