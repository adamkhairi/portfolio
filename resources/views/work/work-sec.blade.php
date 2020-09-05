<section class="">

    <div class="bg-gray-800 px-12 py-24 flex items-center">

        <div class="bg-black md:block w-3/12"></div>
        <div class="flex-1 relative">
            <h2 class="mb-8 uppercase text-white text-2xl font-bold tracking-widest">My work</h2>
            <p class="font-serif text-gray-500 text-base md:text-xl max-w-2xl leading-loose">Lorem ipsum dolor sit
                amet, consectetur adipisicing elit. Accusamus adipisci aut eos iusto nemo sint?</p>

            <span class="absolute top-0 left-0 w-4 h-full bg-gray-300 -ml-20"></span>
        </div>

    </div>


    <!-- SPACER / -->
    <div class="w-full h-24 border-black flex justify-end">
        <div class="w-64 "></div>
    </div>
    <!-- / SPACER -->
    @foreach($topWorks as $work)

        <div class="w-full flex items-center justify-start relative  my-2">
            <div class="w-auto md:w-3/12 bg-gray-700 hidden md:flex">
                <div class="p-6"></div>
            </div>

            <div class="w-full md:w-8/12 bg-gray-100 py-16 relative flex rounded">

                <a href="{{ route('works.show', $work->id) }}"
                   class="block relative top-0 md:top-auto z-10 bg-gray-200 text-center h-32 w-1/2 px-12 md:px-10 md:w-5/12 py-10 md:-ml-24 rounded">
                    <h3 class=" uppercase text-gray-800 text-3xl font-bold tracking-widest">{{ $work->name }}</h3>
                    <p class="text-lg md:text-xl font-serif text-gray-500">{{$work->description}}</p>
                </a>

                <img src="{{ $work->img }}"
                     class="absolute top-0 left-0 block w-full h-full object-cover rounded border-l-2 border-r-2 border-gray-100 "
                     alt="">
            </div>

            <div class="w-1/12 absolute top-0   right-0 h-full "></div>
        </div>

@endforeach



<!-- SPACER / -->
    <div class="w-full h-24 border-black flex justify-end">
        <div class="w-64"></div>
    </div>
    <!-- / SPACER -->
</section>
