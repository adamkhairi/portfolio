<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/8ac7442e81.js" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/main.css') }}" rel="stylesheet">
</head>
<body class="min-h-screen antialiased leading-none">
{{--    <div id="app">--}}
{{--        <nav class="bg-blue-900 shadow mb-8 py-6">--}}
{{--            <div class="container mx-auto px-6 md:px-0">--}}
{{--                <div class="flex items-center justify-center">--}}
{{--                    <div class="mr-6">--}}
{{--                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">--}}
{{--                            {{ config('app.name', 'Laravel') }}--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="flex-1 text-right">--}}
{{--                        @guest--}}
{{--                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>--}}

{{--                            <a href="{{ route('logout') }}"--}}
{{--                               class="no-underline hover:underline text-gray-300 text-sm p-3"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">--}}
{{--                                {{ csrf_field() }}--}}
{{--                            </form>--}}
{{--                        @endguest--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--    </div>--}}


@yield('header')

@yield('content1')
@yield('content2')
@yield('footer')


{{--    Scripts--}}
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>


@yield('script')
</body>
</html>
