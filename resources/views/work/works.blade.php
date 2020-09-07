@extends('layouts.app')

{{--/ navBar--}}
@section('header')
    @include('layouts.navbar')
@endsection

@section('content1')
    <div class="container flex mx-auto pt-16">


        <section class="w-full md:w-2/3 flex flex-col items-center px-3 pt-4 text-black">


            <section class="bg-white ">
                <div class=" w-full lg:w-4/5 mx-auto flex items-center flex-wrap pt-4 pb-12">

                    <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                        <div
                            class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                            <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-3xl "
                               href="#">

                                <h1 class="mb-8">My work</h1>
                            </a>

                            <div class="flex items-center" id="store-nav-content">
                                @auth()
                                    <a class="pl-3 inline-block no-underline hover:text-black"
                                       href="{{ route('work.create') }}">
                                        Add New
                                    </a>
                                @endauth

                                <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg"
                                         width="24"
                                         height="24" viewBox="0 0 24 24">
                                        <path
                                            d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z"/>
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </nav>
                    <div class="flex flex-wrap w-full -mx-1 lg:-mx-4">


                        @foreach($works as $work)
                            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2 ">

                                <article class="overflow-hidden rounded-lg shadow-lg">

                                    <a href="{{ route('works.show', $work->id) }}">
                                        <img alt="Placeholder" class="block h-auto w-full"
                                             src="{{ $work->img }}">
                                    </a>

                                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                        <h1 class="text-lg">
                                            <a class="no-underline hover:underline text-black"
                                               href="{{ route('works.show', $work->id) }}">
                                                {{ $work->name }}
                                            </a>
                                        </h1>
                                        <p class="text-grey-darker text-sm">
                                            11/1/19
                                        </p>
                                    </header>

                                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                        <a class="flex items-center no-underline hover:underline text-black"
                                           href="{{ route('works.show', $work->id) }}">
                                            <img alt="Placeholder" class="block rounded-full"
                                                 src="https://picsum.photos/32/32/?random">
                                            <p class="ml-2 text-sm">
                                                {{$work->description}}
                                            </p>
                                        </a>
                                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                            <span class="hidden">Like</span>{{ $work->rating }}
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </footer>

                                </article>

                            </div>
                        @endforeach
                    </div>

                </div>
                {{--PAGINATION--}}
                <div class="bg-gray-200">
                    {{ $works->links() }}
                </div>
            </section>


        </section>
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3 text-black">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">About Us</p>
                <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio
                    sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                <a href="#"
                   class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                    Get to know us
                </a>
            </div>

{{--            <div class="w-full bg-white shadow flex flex-col my-4 p-6">--}}

{{--                <a href="#"--}}
{{--                   class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">--}}
{{--                    <i class="fab fa-instagram mr-2"></i> Follow @dgrzyb--}}
{{--                </a>--}}
{{--            </div>--}}

        </aside>
    </div>
@endsection


{{--/ Footer--}}
@section('footer')
    @include('layouts.footer')
@endsection
