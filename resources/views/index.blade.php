@extends('layouts.app')
@section('content')


    <nav class="fixed top-0 right-0 m-5 lg:m-10 z-50">
        <!-- Laptop -->

        <div class="hidden lg:flex bg-gray-800 items-center p-1 rounded-lg text-lg text-gray-300">
            <a href="{{ url('/work') }}"
               class="px-3 py-1 mr-1 rounded-md transition duration-300 ease-in-out bg-gray-700 shadow">Work</a>
            <a href="{{ url('/about') }}"
               class="px-3 py-1 mr-1 rounded-md transition duration-300 ease-in-out font-light text-gray-400 hover:bg-gray-900 hover:opacity-75">About</a>
            <a href="{{ url('/contact') }}"
               class="px-3 py-1 rounded-md transition duration-300 ease-in-out font-light text-gray-400 hover:bg-gray-900 hover:opacity-75">Contact</a>
        </div>


        <div class="flex lg:hidden bg-gray-800 items-center py-1 px-2 rounded-lg text-lg text-gray-300">

            <div id="menu-toggle" class="flex lg:hidden">
                <i class="fas fa-bars text-gray-300 text-3xl "></i>
            </div>
        </div>
    </nav>
        <!-- Mobile -->
    <div id="menu"
         class="hidden z-50 opacity-100 text-black bg-gray-400 fixed left-0 right-0 top-0 h-screen w-full flex justify-center items-center">
        <div class="flex flex-col items-center font-extrabold text-4xl justify-center w-full">
            <a href="{{url('/#about')}}"
               class="py-3 rounded hover:bg-black hover:text-gray-400 w-2/6 text-center">About</a>
            <a href="{{ url('/works') }}"
               class="py-3 rounded hover:bg-black hover:text-gray-400 w-2/6 text-center">Work</a>
            <a href="{{ url('/contact') }}" class="py-3 rounded hover:bg-black hover:text-gray-400 w-2/6 text-center">Contact</a>
        </div>
    </div>
@endsection
@section('content1')
    <!-- Logo -->

    <section class="min-h-screen bg-gray-900 text-white flex flex-col justify-center px-5 py-20 md:px-20 xl:px-40">

        {{--        LOGO--}}
        {{--        <img src="/img/user-profile.png"--}}
        {{--             class="absolute top-0 left-0 m-3 lg:m-10 h-12 lg:h-16 opacity-50" alt="">--}}
        <h1 class="abril-font text-2xl absolute top-0 left-0 m-3 lg:m-10 h-12 lg:h-16 opacity-50 font-black">AK</h1>

        <!-- Illustration -->
        <div class="absolute right-0 h-screen w-full z-10">
            <div class="hidden lg:flex relative w-full justify-end">
                <img src="/img/hero.png" class="" alt="">
            </div>
        </div>

        <!-- Content -->
        <div class="z-40">
            <h1 class="abril-font text-4xl sm:text-5xl md:text-6xl font-black">Adam Khairi</h1>
            <h2 class="text-lg sm:text-2xl md:text-3xl font-thin">I'm a moroccan
                <span class="text-teal-400">Web Developer</span>
                &amp;
                <span class="text-pink-500">Web Designer</span></h2>
            <!-- Social Links -->
            <div class="flex items-center text-gray-800">
                <a class="" href="https://www.manzoni.me/contact.html">
                    <div
                        class="mr-4 ion-md-mail transition duration-300 ease-in-out hover:text-gray-400 sm:text-3xl text-2xl">

                    </div>
                </a>
                <a href="https://www.linkedin.com/in/vincent-manzoni/" target="_blank">
                    <div
                        class="mr-4 ion-logo-linkedin transition duration-300 ease-in-out hover:text-blue-600 sm:text-3xl text-2xl"></div>
                </a>
                <a class="" href="https://github.com/Manzovince" target="_blank">
                    <div
                        class="mr-4 ion-logo-github transition duration-300 ease-in-out hover:text-indigo-600 sm:text-3xl text-2xl"></div>
                </a>
                <a href="https://dribbble.com/VincentManzoni" target="_blank">
                    <div
                        class="mr-4 ion-logo-dribbble transition duration-300 ease-in-out hover:text-red-500 sm:text-3xl text-2xl"></div>
                </a>
            </div>
            <!-- TL;DR -->
            <div class="relative mt-10 w-11/12 md:w-1/2 sm:text-xl text-gray-400">
                <div class="abril-font font-black text-6xl text-gray-800">welcome</div>
                <div class="pl-10 border-l border-gray-700">
                    <p class="font-medium">Let’s make it simple.</p>
                    <p class="font-light leading-snug">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                        aspernatur ex ipsam omnis suscipit. Laboriosam magnam necessitatibus quasi quisquam quo?</p>
                </div>
            </div>
            <!-- Arrow -->
            <a href="#work"
               class="hidden xl:flex absolute bottom-0 pb-16 items-center justify-center text-gray-600 hover:text-gray-400 transition duration-500 transform hover:translate-y-2 cursor-pointer z-40">
                <i class="fas fa-arrow-down"></i>
                <div class="pl-4 text-sm">See my work</div>
            </a>
        </div>
    </section>
    <div class="-mt-16 h-32 bg-gray-900 shadow-xl transform skew-y-3 z-0"></div>
@endsection


@section('content2')
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
        <div class="flex justify-center mb-3">
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
        <div class="flex justify-around items-center w-full flex-wrap py-2">

            {{--CARDS--}}
{{--            @foreach($topWorks as $work)--}}

{{--                <div class="relative my-2">--}}
{{--                    <a--}}
{{--                        class="w-full md:w-2/5  rounded-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl overflow-hidden"--}}
{{--                        href="{{ route('works.show', $work->id) }}">--}}
{{--                        <img class="object-cover w-full rounded-lg" alt=""--}}
{{--                             src="{{ $work->img }}">--}}
{{--                        <div--}}
{{--                            class="absolute w-full h-full rounded-lg bg-gray-800 text-white bottom-0 opacity-75 transition duration-500 ease-in-out hover:opacity-0 flex flex-col justify-center items-center text-white text-center p-3">--}}
{{--                            <p class="text-4xl font-semibold">--}}
{{--                                {{ $work->name }}--}}
{{--                            </p>--}}
{{--                            <p class="text-lg font-thin">--}}
{{--                                {{ $work->description }}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--            @endforeach--}}
        </div>
    </section>

@endsection


@section('content3')

    <footer class="bg-gray-900 mt-20 text-gray-500 cursor-default flex-col xl:flex-row shadow-inner">
        <div class="-mt-20 h-32 bg-gray-900 transform skew-y-3 z-0"></div>
        <!-- ??? -->
        <a href="https://www.manzoni.me/secret.html"
           class="absolute text-white top-0 right-0 transform -translate-y-12 h-12 w-12 cursor-not-allowed">
{{--            <img src="Portfolio%20Manzoni%20Vincent_files/fold.svg" alt="">--}}XX
        </a>
        <div class="py-12 flex flex-col justify-between items-center content-between text-gray-600">
            <div class="flex justify-start items-center text-gray-500 font-bold text-xs sm:text-sm">
                <a class="" href="{{ url('/contact') }}">
                    <div class="uppercase transition duration-300 ease-in-out hover:text-white mr-3">mail</div>
                </a>
                <div class="bg-gray-500 rounded-full p-px"></div>
                <a href="#" target="_blank">
                    <div class="uppercase transition duration-300 ease-in-out hover:text-white mx-3">linkedin</div>
                </a>
                <div class="bg-gray-500 rounded-full p-px"></div>
                <a class="" href="https://github.com/adamkhairi" target="_blank">
                    <div class="uppercase transition duration-300 ease-in-out hover:text-white mx-3">github</div>
                </a>
                <div class="bg-gray-500 rounded-full p-px"></div>
                <a href="https://dribbble.com/VincentManzoni" target="_blank">
                    <div class="uppercase transition duration-300 ease-in-out hover:text-white mx-3">dribble</div>
                </a>
            </div>
            <div class="h-16"></div>

            <div class="flex justify-center font-light text-sm text-center">
                Hand-coded with good
                <span id="music"
                      class="cursor-pointer px-1 stroke-1 hover:text-orange-400 ion-ios-musical-notes">
                    <i class="fas fa-music"></i>
                </span>
                and
                <a class="px-1 tracking-tight hover:text-teal-500" href="https://tailwindcss.com/" target="_blank">
                    Tailwindcss </a>
            </div>
            <div class="font-light text-sm text-center">© 2020 Khairi Adam. All rights reserved.</div>
        </div>

    </footer>
@endsection
