<!--  certificate -->

<!--  SPACER -->
<section>
    <div class="bg-gray-800 px-12 py-24 flex items-center">

        <div class="bg-black md:block w-3/12"></div>
        <div class="flex-1 relative">
            <h2 class="mb-8 uppercase text-white text-2xl font-bold tracking-widest">My Certificate</h2>
            <p class="font-serif text-gray-500 text-base md:text-xl max-w-2xl leading-loose">Lorem ipsum dolor sit
                amet,
                consectetur adipisicing elit. Accusamus adipisci aut eos iusto nemo sint?</p>

            <span class="absolute top-0 left-0 w-4 h-full bg-gray-300 -ml-20"></span>
        </div>

    </div>

    <!-- / SPACER -->

    <!--  certificate -->

    <!-- / SPACER -->

    <div class="">

        <div class="mx-auto max-w-5xl flex flex-wrap justify-center items-center text-center py-20">


            @foreach($formationHome as $formation)

                <a href="#" class="w-full md:w-1/3 px-12 md:border-l-4 md:border-r-4 md:border-gray-700">
                    <h4 class="mb-2 uppercase text-gray-100 text-lg font-bold tracking-widest">
                        {{ $formation->certificate }}
                    </h4>
                    <p class="text-sm md:text-lg font-serif text-gray-400">
                        {{ $formation->school }}
                    </p>
                </a>

            @endforeach


        </div>

    </div>

</section>
