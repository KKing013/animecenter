<x-layout>

    <section class="py-8 max-w-4xl mx-auto">

        <div class="lg:flex">

            <aside class="w-48 mb-4 p-2">

                <h4 class="font-semibold mb-4">Links</h4>

                <ul>
                    <li>
                        <a href="/user/{{ auth()->user()->id }}/edit" class="">Edit Profile</a>
                    </li>

                 
                </ul>
            </aside>

            <main class="flex-1 p-2">

                <h1 class="text-lg font-bold mb-8 pb-2 border-b">
                    Edit Profile : {{ auth()->user()->name }}
                </h1>

                <div class="border border-gray-200 p-6 rounded-xl">

                    <form method="POST" action="/user/{{ $user->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <x-form.input name="description" :value="old('description', $user->description)" />
                       
                        <x-form.input name="url" type="url" :value="old('url', $user->url)" />


                        <div class="flex mt-6">

                            <div class="flex-1">
                                <x-form.input name="avatar" type="file" :value="old('avatar', $user->avatar)" />
                            </div>

                            <img src="/storage/{{ $user->avatar }}" alt="" class="rounded-xl ml-6" width="100">
                        </div>

                        <x-button> Update </x-button>

                       



                    </form>

                </div>

            </main>

        </div>
    </section>

</x-layout>
