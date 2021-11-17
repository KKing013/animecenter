<footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center p-10 mt-20">


    <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-1 max-w-2xl mx-auto mb-10">


        <a href="#">

            <div class="flex items-center">
                <img src="\images\facebook-svgrepo-com.svg" alt="" class="w-7 m-2">Facebook
            </div>
        </a>


        <a href="#">

            <div class="flex items-center">
                <img src="\images\twitter-svgrepo-com.svg" alt="" class="w-7 m-2">Twitter
            </div>
        </a>
        <a href="#">

            <div class="flex items-center">
                <img src="\images\instagram-svgrepo-com.svg" alt="" class="w-7 m-2">Instagram
            </div>
        </a>
        <a href="#">

            <div class="flex items-center">
                <img src="\images\youtube-svgrepo-com.svg" alt="" class="w-7 m-2">Youtube
            </div>
        </a>


    </div>

    <hr class="border-gray-500 mb-10 max-w-3xl mx-auto">

    <div>
        <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">



            <form method="POST" action="/newsletter" class="lg:flex text-sm">
                @csrf
                <div class="lg:py-3 lg:px-5 flex items-center">
                    <label for="email" class="hidden lg:inline-block">
                        <img src="\images\email-svgrepo-com.svg" alt="" class="w-7 m-2">
                    </label>

                    <div> <input id="email" name="email" type="text" placeholder="email"
                            class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">

                        @error('email')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>


                </div>

                <button type="submit"
                    class="transition-colors duration-300 bg-red-500 hover:bg-red-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</footer>
