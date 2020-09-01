@extends('layouts.app')
@section('header')
    <nav class="flex justify-between items-center p-5">
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
            <a href="{{route('index')}}" class="py-3 rounded hover:bg-black hover:text-white px-4">Home</a>
            <a href="" class="py-3 rounded hover:bg-black hover:text-white px-4">About</a>
            <a href="" class="py-3 rounded hover:bg-black hover:text-white px-4">Experience</a>
            <a href="" class="py-3 rounded hover:bg-black hover:text-white px-4">Study</a>
            <a href="" class="py-3 rounded hover:bg-black hover:text-white px-4">Work</a>
            <a href="" class="py-3 rounded hover:bg-black hover:text-white px-4">Contact</a>
        </div>
    </div>

@endsection
@section('content1')
    <section>
        <div class="one-time text-gray-300  text-center">


            <div class="h-screen w-full z-10 p-10 flex-col justify-center items-center">
                <div class="pt-20">
                    <h1 class="p-2">HELLO</h1>
                    <h1 class=""> I'M</h1>
                </div>
                <div class="p-5">
                    <h1 class="font-bold text-5xl text-white">
                        <strong>ADAM KHAIRI</strong>
                    </h1>
                </div>
            </div>


            <div class="h-screen w-full p-10 z-10 flex-col justify-center items-center">
                <div class="pt-20">

                    <h1>I'M A</h1>
                </div>
                <div class="p-5">

                    <h1 class="font-bold text-3xl text-white">

                        <strong>WEB DEVELOPER</strong>
                    </h1>

                    <i class="fas fa-file-code text-white text-5xl p-5"></i>
                </div>
            </div>
            <div class="h-screen w-full p-10 flex-col justify-center items-center">3</div>
            <div class="h-screen w-full p-10 flex-col justify-center items-center">4</div>
        </div>
    </section>

@endsection

@section('script')
    <script src="{{ asset('js/navBar.js') }}" defer></script>
    <script>

        $(document).ready(function () {
            $('.one-time').slick({
                dots: false,
                arrows: false,
                fade: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true
            })
        });

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


