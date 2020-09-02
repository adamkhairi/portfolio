@extends('layouts.app')
@section('header')
    @include('layouts.navbar')
@endsection
@section('content1')

    <section class="p-4">
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
                <h2 class="mb-8 uppercase text-white text-2xl font-bold tracking-widest">My work</h2>
                <p class="font-serif text-gray-500 text-base md:text-xl max-w-2xl leading-loose">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci aut eos iusto nemo sint?</p>

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

        <!--  certificate -->

        <!--  SPACER -->

        <div class="bg-gray-800 px-12 py-24 flex items-center">

            <div class="bg-black md:block w-3/12"></div>
            <div class="flex-1 relative">
                <h2 class="mb-8 uppercase text-white text-2xl font-bold tracking-widest">My Certificate</h2>
                <p class="font-serif text-gray-500 text-base md:text-xl max-w-2xl leading-loose">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci aut eos iusto nemo sint?</p>

                <span class="absolute top-0 left-0 w-4 h-full bg-gray-300 -ml-20"></span>
            </div>

        </div>

        <!-- / SPACER -->

        <!--  certificate -->

        <!-- / SPACER -->

        <div class="">

            <div class="mx-auto max-w-5xl flex flex-wrap justify-center items-center text-center py-20">

                <a href="#" class="w-full md:w-1/3 px-12">
                    <h4 class="mb-2 uppercase text-gray-100 text-lg font-bold tracking-widest">Investment Options</h4>
                    <p class="text-sm md:text-lg font-serif text-gray-400">Get More</p>
                </a>

                <a href="#" class="w-full md:w-1/3 py-12 px-12 md:border-l-4 md:border-r-4 md:border-gray-700">
                    <h4 class="mb-2 uppercase text-gray-100 text-lg font-bold tracking-widest">Accomodation</h4>
                    <p class="text-sm md:text-lg font-serif text-gray-400">Future Tenants</p>
                </a>

                <a href="#" class="w-full md:w-1/3 px-12">
                    <h4 class="mb-2 uppercase text-gray-100 text-lg font-bold tracking-widest">Land Development</h4>
                    <p class="text-sm md:text-lg font-serif text-gray-400">The Homes</p>
                </a>

            </div>

        </div>

    </section>
@endsection
<!-- / certificate -->

<!-- / SPACER -->


<!-- FOOTER / -->
@section('footer')
    @include('layouts.footer')
@endsection
<!-- / FOOTER -->

<!-- / Scripts -->
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


