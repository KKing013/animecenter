<x-layout>

    <section class="max-w-6xl mx-auto flex p-2 border-solid border-2 border-gray-200 rounded">
        <x-links>
            <x-slot name="href">
                /
            </x-slot>

            <x-slot name="title">
                Home
            </x-slot>
        </x-links>
    </section>

    <section class="max-w-6xl mx-auto space-y-7 flex md:p-0 p-2">

        <article class="mt-8 md:mr-4 border-solid border-2 border-gray-200 p-4 rounded-xl">

            <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-10">

                <div>

                    <img class="p-2 rounded-3xl" src="\images\186508120_10224037889750307_872289099830770620_n.jpg" alt="" />



                </div>



                <div class="p-2 space-y-4">
                    <h1 class="text-lg font-bold mb-8 pb-2">
                        Our Story
                    </h1>
                    
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus saepe sint soluta
                        veniam distinctio quae, reprehenderit rem quidem repellat natus, exercitationem, aut
                        temporibus? Neque illum reiciendis quibusdam totam in veniam.</p>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus saepe sint soluta
                        veniam distinctio quae, reprehenderit rem quidem repellat natus, exercitationem, aut
                        temporibus? Neque illum reiciendis quibusdam totam in veniam.</p>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus saepe sint soluta
                        veniam distinctio quae, reprehenderit rem quidem repellat natus, exercitationem, aut
                        temporibus? Neque illum reiciendis quibusdam totam in veniam.</p>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus saepe sint soluta
                        veniam distinctio quae, reprehenderit rem quidem repellat natus, exercitationem, aut
                        temporibus? Neque illum reiciendis quibusdam totam in veniam.</p>
                </div>
                
                <div class="border border-gray-200 p-6 rounded-xl">

                    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
                        Contact Us
                    </h1>

                    <form method="POST" action="/contact">
                        @csrf

                        <x-form.input name="name" required />
                        <x-form.input name="email" type="email" required />
                        <x-form.textarea name="comment">{{ old('comment')}} </x-form.textarea>

                        <x-button> Contact Us </x-button>



                    </form>

                </div>

            </div>

        </article>



    </section>



</x-layout>
