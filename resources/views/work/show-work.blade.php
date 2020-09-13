@extends('layouts.app')
@section('title','Work ' . $work->name . ' - Page')

{{--/ navBar--}}
@section('header')
    @include('layouts.navbar')
@endsection

@section('content')
    <div class="pt-20"></div>
    <section class="min-h-screen flex flex-col justify-center items-center">
        @auth()
            <div class="text-center text-white text-xl ">

                <form action="{{ route('work.destroy',$work->id)}}" method="POST"
                      enctype="multipart/form-data" class="flex w-full justify-center items-center ">

                    <a href="{{ route('work.edit', $work->id) }}"
                       type="button" class=" px-3 py-1 rounded bg-blue-600 hover:opacity-75 hover:shadow shadow-lg">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit"
                            class="px-3 py-1 rounded bg-red-600 ml-2 hover:opacity-75 hover:shadow shadow-lg">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        @endauth


        <a href="{{ route('work.index')  }}" class=" fixed left-0 m-3 bottom-0 hover:opacity-100">
            <i class="fas fa-chevron-circle-left text-4xl">
            </i>
            <p class="opacity-0 text-gray-300 object-cover">Go back</p>

        </a>
        <div class="container mx-auto flex flex-wrap py-6">

            <!-- Post Section -->
            <section class="w-full md:w-2/3 flex flex-col items-center px-3 text-black">

                <article class="flex flex-col shadow my-4 ">
                    <!-- Article Image -->
                    <a href="#" class="w-full hover:opacity-75">
                        <img src="{{ $work->img }}" class="w-full" alt="article-imgs">
                    </a>
                    <div class="bg-white flex flex-col justify-start p-6">
                        <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                            {{--GET The Category name by id--}}
                            {{ $work->getName($work->category_id)->name }}


                        </a>
                        <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">
                            {{ $work->name }}
                        </a>
                        <p class="text-sm pb-8">
                            By <a href="#" class="font-semibold hover:text-gray-800">Adam Khairi</a>
                        </p>
                        <h1 class="text-2xl font-bold pb-3">Introduction</h1>
                        <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel neque non
                            libero suscipit suscipit eu eu urna. Proin bibendum urna mattis ante malesuada ultrices.
                            Etiam
                            in turpis vitae elit dictum aliquet. Donec mattis risus in turpis dapibus, eget tempus sem
                            tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                            mus. In est enim, imperdiet sed ornare quis, pellentesque vel risus. Nunc vitae vestibulum
                            turpis. Quisque eget eleifend urna. Etiam et vulputate purus, ut egestas sem. Vestibulum
                            ante
                            ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis quis neque non
                            urna
                            venenatis mollis et at massa. Pellentesque sem lacus, malesuada vel hendrerit molestie,
                            mollis
                            vel elit.</p>
                        <h1 class="text-2xl font-bold pb-3">Heading</h1>
                        <p class="pb-3">
                            {{ $work->description }}

                        </p>

                        <h1 class="text-2xl font-bold pb-3">Conclusion</h1>
                        <p class="pb-3">Donec vulputate auctor leo lobortis congue. Sed elementum pharetra turpis. Nulla
                            at
                            condimentum odio. Vestibulum ullamcorper enim eget porttitor bibendum. Proin eros nibh,
                            maximus
                            vitae nisi a, blandit ultricies lectus. Vivamus eu maximus lacus. Maecenas imperdiet iaculis
                            neque, vitae efficitur felis vestibulum sagittis. Nunc a eros aliquet, egestas tortor
                            hendrerit,
                            posuere diam. Proin laoreet, ligula non eleifend bibendum, orci nulla luctus ipsum,
                            dignissim
                            convallis quam dolor et nulla.</p>
                    </div>


                </article>


                <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
                    <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                        <img src="https://source.unsplash.com/collection/1346951/150x150?sig=1"
                             class="rounded-full shadow h-32 w-32" alt="profil">
                    </div>
                    <div class="flex-1 flex flex-col justify-center md:justify-start">
                        <p class="font-semibold text-2xl">David</p>
                        <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel neque non
                            libero suscipit suscipit eu eu urna.</p>
                        <div
                            class="flex items-center justify-center md:justify-start text-3xl no-underline text-blue-800 pt-4">

                            <a href="{{$work->url}}" target="_blank">
                                <i class="fab fa-github "></i>
                            </a>
                            <a class="pl-4" href="#" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a class="pl-4" href="#" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="pl-4" href="#" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a class="pl-4" href="#" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </div>
                    </div>
                </div>

            </section>

            <!-- Sidebar Section -->
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

                <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                    <p class="text-xl font-semibold pb-5">Instagram</p>
                    <div class="grid grid-cols-3 gap-3">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1"
                             alt="">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2"
                             alt="">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3"
                             alt="">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4"
                             alt="">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5"
                             alt="">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6"
                             alt="">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7"
                             alt="">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8"
                             alt="">
                        <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9"
                             alt="">
                    </div>
                    <a href="#"
                       class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                        <i class="fab fa-instagram mr-2"></i> Follow @dgrzyb
                    </a>
                </div>

            </aside>

        </div>

        {{--        <article class="flex flex-col shadow my-4 min-h-full">--}}

        {{--            <a href="{{ route('work.index')  }}" class=" fixed left-0 m-3 bottom-0 hover:opacity-100">--}}
        {{--                <i class="fas fa-chevron-circle-left text-4xl">--}}
        {{--                </i>--}}
        {{--                <p class="opacity-0 text-gray-300 object-cover">Go back</p>--}}

        {{--            </a>--}}
        {{--            <!-- Article Image -->--}}
        {{--            <a href="#" class="hover:opacity-75 text-center">--}}
        {{--                <img src="{{ $work->img }}" class="mx-auto ">--}}
        {{--            </a>--}}
        {{--            <div class="bg-white flex flex-col justify-start p-6">--}}
        {{--                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">--}}


        {{--                    --}}{{--GET The Category name by id--}}
        {{--                    {{ $work->getName($work->category_id)->name }}--}}


        {{--                </a>--}}
        {{--                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">--}}
        {{--                    {{ $work->name }}--}}
        {{--                </a>--}}

        {{--                <h1 class="text-2xl font-bold pb-3">Description</h1>--}}
        {{--                <p class="pb-3">--}}
        {{--                    {{ $work->description }}--}}
        {{--                </p>--}}

        {{--            </div>--}}

        {{--        </article>--}}


    </section>

@endsection
{{--@section('content1')--}}
{{--    <div class="pt-12"></div>--}}
{{--   --}}
{{--@endsection--}}

{{--/ Footer--}}
@section('footer')
    @include('layouts.footer')
@endsection

