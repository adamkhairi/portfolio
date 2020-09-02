@extends('layouts.app')
@section('header')
    <nav class="flex justify-between items-center p-2 px-16 sticky top-0">
        <div class="flex justify-center items-center">
            <img src="/img/user-profile.png" width="50" alt="">
            <h5 class="font-bold pl-4">Adam Khairi</h5>
        </div>
        <div id="menu-toggle">
            <i class="fas fa-bars text-gray-300 text-3xl "></i>
        </div>
    </nav>
    <div id="menu"
         class="hidden z-50 opacity-75 text-black bg-gray-300 fixed top-0 h-screen w-full flex justify-center items-center">
        <div class="flex flex-col items-center font-extrabold text-4xl justify-center">
            <a href="{{route('index')}}" class="py-3 rounded hover:bg-black hover:text-white px-20">Home</a>
            <a href="" class="py-3 rounded hover:bg-black hover:text-white px-20">About</a>
            <a href="" class="py-3 rounded hover:bg-black hover:text-white px-20">Experience</a>
            <a href="" class="py-3 rounded hover:bg-black hover:text-white px-20">Study</a>
            <a href="" class="py-3 rounded hover:bg-black hover:text-white px-20">Work</a>
            <a href="" class="py-3 rounded hover:bg-black hover:text-white px-20">Contact</a>
        </div>
    </div>

@endsection
@section('content1')
    {{--    <section>--}}
    {{--        <div class="one-time text-gray-300  text-center">--}}


    {{--            <div class="h-screen w-full z-10 p-10 flex-col justify-center items-center">--}}
    {{--                <div class="pt-20">--}}
    {{--                    <h1 class="p-2">HELLO</h1>--}}
    {{--                    <h1 class=""> I'M</h1>--}}
    {{--                </div>--}}
    {{--                <div class="p-5">--}}
    {{--                    <h1 class="font-bold text-5xl text-white">--}}
    {{--                        <strong>ADAM KHAIRI</strong>--}}
    {{--                    </h1>--}}
    {{--                </div>--}}
    {{--            </div>--}}


    {{--            <div class="h-screen w-full p-10 z-10 flex-col justify-center items-center">--}}
    {{--                <div class="pt-20">--}}

    {{--                    <h1>I'M A</h1>--}}
    {{--                </div>--}}
    {{--                <div class="p-5">--}}

    {{--                    <h1 class="font-bold text-3xl text-white">--}}

    {{--                        <strong>WEB DEVELOPER</strong>--}}
    {{--                    </h1>--}}

    {{--                    <i class="fas fa-file-code text-white text-5xl p-5"></i>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="h-screen w-full p-10 flex-col justify-center items-center">3</div>--}}
    {{--            <div class="h-screen w-full p-10 flex-col justify-center items-center">4</div>--}}
    {{--        </div>--}}
    {{--    </section>--}}


    <section class="px-4">
        <div class="splide ">
            <div class="splide__track">
                <ul class="splide__list ">
                    <li class="splide__slide text-center py-64">

                        {{--                                    <div class="h-screen w-full p-10 flex-col justify-center items-center">--}}
                        <div class="">
                            <h1 class="pb-2">HELLO</h1>
                            <h1 class=""> I'M</h1>
                        </div>
                        <div class="p-5">
                            <h1 class="font-bold text-5xl text-white">
                                <strong>ADAM KHAIRI</strong>
                            </h1>
                        </div>
                        {{--                                    </div>--}}
                    </li>
                    <li class="splide__slide text-center py-64 ">
                        <div class="">

                            <h1 class="p-2"> I'M</h1>
                            <h1 class="p-2"> A</h1>
                        </div>
                        <div class="p-5">
                            <h1 class="font-bold text-5xl text-white">
                                <strong>WEB DEVELOPER</strong>
                            </h1>
                            <i class="fas fa-file-code text-white text-5xl p-5"></i>
                        </div>
                    </li>
                    <li class="splide__slide">Slide 03</li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('content2')
    <section>

        <div class="bg-gray-800 px-12 py-24 flex items-center">

            <div class="bg-black md:block w-3/12"></div>
            <div class="flex-1 relative">
                <h2 class="mb-8 uppercase text-white text-2xl font-bold tracking-widest">Our Expertise</h2>
                <p class="font-serif text-gray-500 text-base md:text-xl max-w-2xl leading-loose">RJ Investments brings
                    luxury living to the rental market through bespoke renovations, at affordable prices with quality
                    property management.</p>

                <span class="absolute top-0 left-0 w-4 h-full bg-gray-300 -ml-20"></span>
            </div>

        </div>


        <!-- SPACER / -->
        <div class="w-full h-24 border-black bg-white flex justify-end">
            <div class="w-64 bg-gray-800"></div>
        </div>
        <!-- / SPACER -->

        <div class="w-full flex items-center justify-start relative">
            <div class="p-10 bg-black md:w-3/12"></div>

            <div class="w-full md:w-8/12 bg-gray-100 py-12 relative flex">

                <a href="#" class="block relative z-10 bg-black h-full w-full px-12 md:px-6 md:w-6/12 py-24 md:-ml-24">
                    <h3 class="mb-2 uppercase text-white text-3xl font-bold tracking-widest">The Portfolio</h3>
                    <p class="text-lg md:text-xl font-serif text-gray-300">Completed Builds</p>
                </a>

                <img src="/img/banner2-02.png"
                     class="absolute top-0 left-0 block w-full h-full object-cover"/>

            </div>

            <div class="w-1/12 absolute top-0 right-0 h-full bg-gray-800"></div>
        </div>


        <!-- SPACER / -->
        <div class="w-full h-12 border-black bg-white flex justify-end">
            <div class="w-64 bg-gray-800"></div>
        </div>
        <!-- / SPACER -->




    </section>
@endsection
@section('script')
    <script src="{{ asset('js/navBar.js') }}" defer></script>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            new Splide('.splide').mount();
        });

        // $(document).ready(function () {
        //     $('.one-time').slick({
        //         dots: false,
        //         arrows: false,
        //         fade: true,
        //         infinite: true,
        //         speed: 300,
        //         slidesToShow: 1,
        //         adaptiveHeight: true
        //     })
        // });


    </script>
@endsection








{{--<div class="flex flex-col">--}}
{{--    @if(Route::has('login'))--}}
{{--        <div class="absolute top-0 right-0 mt-4 mr-4">--}}
{{--            @auth--}}
{{--                <a href="{{ url('/home') }}"--}}
{{--                   class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>--}}
{{--            @else--}}
{{--                <a href="{{ route('login') }}"--}}
{{--                   class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">{{ __('Login') }}</a>--}}
{{--                @if (Route::has('register'))--}}
{{--                    <a href="{{ route('register') }}"--}}
{{--                       class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>--}}
{{--                @endif--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    @endif--}}
{{--</div>--}}


