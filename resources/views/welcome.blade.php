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


