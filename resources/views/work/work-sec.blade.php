<section class="bg-gray-300">

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
    <div class="w-full h-24 border-black bg-white flex justify-end">
        <div class="w-64 bg-gray-800"></div>
    </div>
    <!-- / SPACER -->
    @foreach($topWorks as $work)
        <div class="w-full flex items-center justify-start relative my-1">
            <div class="w-auto md:w-3/12 bg-gray-100 flex">
                <div class="p-6"></div>
            </div>

            <div class="w-full md:w-8/12 bg-gray-100 py-12 relative flex rounded">

                <a href="{{ route('works.show', $work->id) }}" class="block relative z-10 bg-gray-100 h-full w-full px-12 md:px-10 md:w-6/12 py-24 md:-ml-24 rounded">
                    <h3 class="mb-2 uppercase text-gray-800 text-3xl font-bold tracking-widest">{{ $work->name }}</h3>
                    <p class="text-lg md:text-xl font-serif text-gray-400">{{$work->description}}</p>
                </a>

                <img src="{{ $work->img }}" class="absolute top-0 left-0 block w-full h-full object-cover " alt="">
            </div>

            <div class="w-1/12 absolute top-0 right-0 h-full "></div>
        </div>
{{--                <hr class=" w-full">--}}
{{--        <div class="w-full flex items-center justify-start relative">--}}
{{--            <div class="p-10 bg-gray-800 md:w-3/12"></div>--}}

{{--            <div class="w-full md:w-8/12 bg-gray-100 py-12 relative flex">--}}

{{--                <a href="#" class="block relative z-10 bg-black h-full w-full px-12 md:px-6 md:w-6/12 py-24 md:-ml-24">--}}
{{--                    <h3 class="mb-2 uppercase text-white text-3xl font-bold tracking-widest">{{ $work->name }}</h3>--}}
{{--                    <p class="text-lg md:text-xl font-serif text-gray-300">description</p>--}}
{{--                </a>--}}

{{--                <img src="/img/banner2-02.png"--}}
{{--                     class="absolute top-0 left-0 block w-full h-full object-cover"/>--}}
{{--                <div class="bg-white absolute top-0 left-0 w-full h-full object-cover"></div>--}}

{{--            </div>--}}

{{--            <div class="w-1/12 absolute top-0 right-0 h-full bg-gray-800"></div>--}}
{{--        </div>--}}

@endforeach



<!-- SPACER / -->
    <div class="w-full h-12 border-black bg-white flex justify-end">
        <div class="w-64 bg-gray-800"></div>
    </div>
    <!-- / SPACER -->
</section>
