<!--  certificate -->

<!--  SPACER -->
<section id="certi" class="blog body-font">

    <div class="bg-gray-800 px-12 py-24 flex items-center">
        <div class="bg-black md:block w-3/12"></div>
        <div class="relative">
            <h2 class="py-2 uppercase text-white text-3xl font-bold tracking-widest">My Certificates</h2>
            <span class="absolute top-0 left-0 w-4 h-full bg-gray-300 -ml-20"></span>
        </div>
    </div>

    <!-- / SPACER -->

    <div class="mt-4">
        <div class="mx-auto max-w-5xl flex flex-wrap justify-center items-center text-center py-20">

            @foreach($formationHome as $formation)
                <a href="#" class="w-full md:w-1/3 px-12 my-4 md:my-1 md:border-l-4 md:border-r-4 md:border-gray-700">
                    <h4 class="mb-2 uppercase text-gray-800 text-2xl text-lg font-bold tracking-widest">
                        {{ $formation->certificate }}
                    </h4>
                    <p class="text-sm md:text-lg font-serif text-gray-600">
                        {{ $formation->school }}
                    </p>
                </a>
                <hr class="w-1/2 mx-auto bg-gray-700 rounded-lg block md:hidden">
            @endforeach

        </div>
    </div>
    <div class="flex justify-center pb-4">
        <a href="{{ url('/formations') }}" class="py-2 px-5 bg-gray-800 font-bold text-white rounded-lg shadow-md hover:bg-gray-600">More Certificates</a>
    </div>
</section>

<!--  SPACER -->
