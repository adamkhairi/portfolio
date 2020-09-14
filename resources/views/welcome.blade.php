@extends('layouts.app')
@section('title','Portfolio | ADAM KHAIRI')

@section('header')
    @include('layouts.navbar')
@endsection
@section('content1')

    {{--/ About--}}
    <section class="min-h-screen bg-gray-900 text-white flex flex-col justify-center px-5 py-20 md:px-20 xl:px-40">

        {{--        LOGO--}}
        {{--        <img src="/img/user-profile.png"--}}
        {{--             class="absolute top-0 left-0 m-3 lg:m-10 h-12 lg:h-16 opacity-50" alt="">--}}
        <h1 class="text-2xl absolute top-0 left-0 m-3 lg:m-10 h-12 lg:h-16 opacity-50 font-black">AK</h1>

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
                <span class="text-pink-500">Web Developer</span>
                &amp;
                <span class="text-teal-400">Web Designer</span></h2>
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
{{--/ about--}}

{{--/ Work--}}
@section('content2')
    @include('work.work-sec')
@endsection
{{--/ Work--}}

<!-- / certificate -->
@section('content3')
  @include('formation.form-sec')
@endsection
<!-- / certificate -->

<!-- / SPACER -->

<!-- / About -->

@section('content4')

@endsection



<!-- / SPACER -->

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


