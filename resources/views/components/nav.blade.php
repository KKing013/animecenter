<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>

                    <a href="\" class="flex items-center py-4 px-2">
                        <img src="/images/518-5189431_japanese-flowering-cherry-png-free-download-japan-cherry.jpg"
                            alt="Logo" class="h-10 w-10 mr-2">
                        <span class="md:block hidden font-semibold text-gray-500 text-lg">AnimeCenter</span>
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-1">


                    <div class="dropdown relative inline-block">

                        <button id="animeNav" href=""
                            class="py-4 px-2 text-gray-500 font-semibold hover:text-red-500 transition duration-300">Anime</button>


                        <div id="animeDropdown" class="dropdown-content hidden absolute w-44 overflow-auto z-10">


                            <a class="p-2 text-gray-500 bg-white hover:bg-red-500 hover:text-white transition duration-300 rounded block no-underline"
                                href="/anime/season">Fall 2021 Anime</a>

                            <a class="p-2 text-gray-500 bg-white hover:bg-red-500 hover:text-white transition duration-300 rounded block no-underline"
                                href="/anime/top-airing">Top Airing Anime</a>

                            <a class="p-2 text-gray-500 bg-white hover:bg-red-500 hover:text-white transition duration-300 rounded block no-underline"
                                href="/anime/new">New 2021 Anime</a>

                            <a class="p-2 text-gray-500 bg-white hover:bg-red-500 hover:text-white transition duration-300 rounded block no-underline"
                                href="/anime/popular">Popular Anime</a>

                        </div>
                    </div>

                    <a href="/categories/{{ App\Models\Category::where('id', 1)->value('slug') }}"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-red-500 transition duration-300">News</a>

                    <a href="/categories/{{ App\Models\Category::where('id', 2)->value('slug') }}"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-red-500 transition duration-300">Featured</a>
                    <a href="/about"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-red-500 transition duration-300">About</a>
                </div>
            </div>

            <div class="md:flex items-center md:space-x-3">

                <livewire:search-bar>


                    @auth

                        <div><img src="/storage/{{ auth()->user()->avatar }}" width="40" height="40" alt=""
                                class="rounded-full md:block hidden"></div>

                        <div class="dropdown relative inline-block">


                            <button onclick="dropdown()"
                                class="dropbtn p-2 font-medium text-gray-500 rounded hover:bg-red-500 hover:text-white transition duration-300">Welcome,
                                {{ auth()->user()->name }}</button>

                            <div id="dropdownNav" class="dropdown-content hidden absolute min-w-full overflow-auto z-10">


                                <a class="p-2 text-gray-500 bg-white hover:bg-red-500 hover:text-white transition duration-300 rounded block no-underline"
                                    href="/user/{{ auth()->user()->id }}/edit">Edit Profile</a>

                                @admin

                                <a class="p-2 text-gray-500 bg-white hover:bg-red-500 hover:text-white transition duration-300 rounded block no-underline"
                                    href="/admin/posts/create">New Post</a>
                                <a class="p-2 text-gray-500 bg-white hover:bg-red-500 hover:text-white transition duration-300 rounded block no-underline"
                                    href="/admin/posts">Manage Posts</a>

                                @endadmin



                                <a id="logout"
                                    class="p-2 text-gray-500 bg-white hover:bg-red-500 hover:text-white transition duration-300 rounded block no-underline"
                                    href="">Logout</a>
                            </div>
                        </div>

                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                            @csrf
                        </form>

                    @else


                        <a href="/register"
                            class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-red-500 hover:text-white transition duration-300">Register</a>
                        <a href="/login"
                            class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-red-500 hover:text-white transition duration-300">Login</a>
                    @endauth
            </div>

<!-- Mobile navigation -->

            <div class="md:hidden flex items-center">


                <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-red-500 " x-show="!showMenu" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="md:hidden mobile-menu">

        <ul>


            <li>

                <a href
                    class="anime-dropdown block text-sm px-2 py-4 bg-white hover:bg-red-500 hover:text-white transition duration-300 font-semibold flex items-center">

                    <span class="mr-1">Anime</span>

                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>


                </a>


                <ul class="hidden anime-dropdown-menu absolute  text-gray-700 pt-1 z-10">
                    <li><a class="block text-sm px-2 py-4 bg-white hover:bg-red-500 hover:text-white transition duration-300 font-semibold"
                            href="/anime/season">Fall 2021 Anime</a></li>
                    <li><a class="block text-sm px-2 py-4 bg-white hover:bg-red-500 hover:text-white transition duration-300 font-semibold"
                            href="/anime/top-airing">Top Airing Anime</a></li>
                    <li><a class="block text-sm px-2 py-4 bg-white hover:bg-red-500 hover:text-white transition duration-300 font-semibold"
                            href="/anime/new">New 2021 Anime</a>
                    </li>
                    <li><a class="block text-sm px-2 py-4 bg-white hover:bg-red-500 hover:text-white transition duration-300 font-semibold"
                            href="/anime/popular">Popular Anime</a>
                    </li>
                </ul>

            </li>

            <li><a href="/categories/{{ App\Models\Category::where('id', 1)->value('slug') }}"
                    class="block text-sm px-2 py-4 bg-white hover:bg-red-500 hover:text-white transition duration-300 font-semibold">News</a>
            </li>
            <li><a href="/categories/{{ App\Models\Category::where('id', 2)->value('slug') }}"
                    class="block text-sm px-2 py-4 bg-white hover:bg-red-500 hover:text-white transition duration-300 font-semibold">Featured</a>
            </li>
            <li><a href="/about"
                    class="block text-sm px-2 py-4 bg-white hover:bg-red-500 hover:text-white transition duration-300 font-semibold">About</a>
            </li>
        </ul>
    </div>

</nav>
