@extends('layouts.app')
@section('header')
    @include('layouts.navbar')
@endsection
@section('content1')

    {{--/ About--}}
    <section id="about" class="p-4">
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
{{--/ about--}}

{{--/ Work--}}
@section('content2')
    @include('work.work-sec')
@endsection
<!-- / certificate -->

@section('content3')
    <!--  certificate -->

    <!--  SPACER -->
    <section>
        <div class="bg-gray-800 px-12 py-24 flex items-center">

            <div class="bg-black md:block w-3/12"></div>
            <div class="flex-1 relative">
                <h2 class="mb-8 uppercase text-white text-2xl font-bold tracking-widest">My Certificate</h2>
                <p class="font-serif text-gray-500 text-base md:text-xl max-w-2xl leading-loose">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Accusamus adipisci aut eos iusto nemo sint?</p>

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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Splide('.splide').mount();
        })
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


