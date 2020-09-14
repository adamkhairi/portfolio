{{--<section class="">--}}

{{--    <div class="bg-gray-800 px-12 py-24 flex items-center">--}}

{{--        <div class="bg-black md:block w-3/12"></div>--}}
{{--        <div class="flex-1 relative">--}}
{{--            <h2 class="mb-8 uppercase text-white text-2xl font-bold tracking-widest">My work</h2>--}}
{{--            <p class="font-serif text-gray-500 text-base md:text-xl max-w-2xl leading-loose">Lorem ipsum dolor sit--}}
{{--                amet, consectetur adipisicing elit. Accusamus adipisci aut eos iusto nemo sint?</p>--}}

{{--            <span class="absolute top-0 left-0 w-4 h-full bg-gray-300 -ml-20"></span>--}}
{{--        </div>--}}

{{--    </div>--}}


{{--    <!-- SPACER / -->--}}
{{--    <div class="w-full h-24 border-black flex justify-end">--}}
{{--        <div class="w-64 "></div>--}}
{{--    </div>--}}
{{--    <!-- / SPACER -->--}}
{{--    @foreach($topWorks as $work)--}}

{{--        <div class="w-full flex items-center justify-center relative  my-2">--}}
{{--            <div class="w-auto md:w-1/12 hidden md:flex">--}}
{{--                <div class="p-6"></div>--}}
{{--            </div>--}}

{{--            <div class="w-full md:w-8/12 bg-gray-100 py-16 relative flex rounded">--}}

{{--                <a href="{{ route('works.show', $work->id) }}"--}}
{{--                   class="block relative top-0 md:top-auto z-10 bg-gray-200 text-center h-32 w-1/2 px-12 md:px-10 md:w-5/12 py-10 md:-ml-24 rounded">--}}
{{--                    <h3 class=" uppercase text-gray-800 text-3xl font-bold tracking-widest">{{ $work->name }}</h3>--}}
{{--                    <p class="text-lg md:text-xl font-serif text-gray-500">{{$work->description}}</p>--}}
{{--                </a>--}}

{{--                <img src="{{ $work->img }}"--}}
{{--                     class="absolute top-0 left-0 block w-full h-full object-cover rounded border-l-2 border-r-2 border-gray-100 "--}}
{{--                     alt="">--}}
{{--            </div>--}}

{{--            <div class="w-1/12 absolute top-0   right-0 h-full "></div>--}}
{{--        </div>--}}

{{--@endforeach--}}


{{--<!-- SPACER / -->--}}
{{--    <div class="w-full h-24 border-black flex justify-end">--}}
{{--        <div class="w-64"></div>--}}
{{--    </div>--}}
{{--    <!-- / SPACER -->--}}
{{--</section>--}}
<section id="work" class="py-20 md:px-0 flex flex-col items-center content-center text-black">
    <!-- CATEGORIES -->
    <div class="flex justify-center mb-3 rounded-lg shadow">
        <div class="mx-auto flex items-center bg-gray-300 p-1 rounded-lg cursor-pointer">
            <div id="all"
                 class="search-filter px-2 p-1 rounded-md transition duration-300 ease-in-out bg-white shadow">All
            </div>
            <div class="w-1"></div>
            <div id="ux"
                 class="search-filter px-2 p-1 rounded-md transition duration-300 ease-in-out hover:bg-gray-400">UX
            </div>
            <div class="w-1"></div>
            <div id="ui"
                 class="search-filter px-2 p-1 rounded-md transition duration-300 ease-in-out hover:bg-gray-400">UI
            </div>
            <div class="w-1"></div>
            <div id="project"
                 class="search-filter px-2 p-1 rounded-md transition duration-300 ease-in-out hover:bg-gray-400">
                Project
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center w-full flex-wrap mt-4 py-4">

        {{--CARDS--}}
        @foreach($topWorks as $work)

            <div class="relative m-2 rounded-lg shadow-lg hover:shadow-md">
                <a
                    class="w-full md:w-2/5  rounded-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl overflow-hidden"
                    href="{{ route('works.show', $work->id) }}">
                    <img class="object-cover w-full rounded-lg" alt=""
                         src="{{ $work->img }}">
                    <div
                        class="absolute  w-full h-full rounded-lg bg-gray-800 text-white bottom-0 opacity-75 transition duration-500 ease-in-out hover:opacity-0 flex flex-col justify-center items-center text-white text-center p-3">
                        <p class="text-4xl uppercase font-semibold">
                            {{ $work->name }}
                        </p>
                        <p class="text-lg capitalize font-thin">
                            {{ $work->description }}
                        </p>
                    </div>
                </a>
            </div>

        @endforeach
    </div>
    <div class="flex justify-center py-4">
        <a href="{{ url('/works') }}" class="py-2 px-5 bg-gray-800 font-bold text-white rounded-lg shadow-md hover:bg-gray-600">More works</a>
    </div>
</section>
