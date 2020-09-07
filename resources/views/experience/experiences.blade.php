@extends('layouts.app')

@section('header')
    @include('layouts.navbar')
@endsection


@section('content')
    <div class="p-16"></div>

    <section class="blog text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"> Blog</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-base">
                    J'aime bien partager mes connaissances et des recherche intéressantes, pour le faire j'ai mis en
                    place un blog personnel.
                    Nous abordons plusieurs sujets intéressants et je donne quelques astuces et conseils aux jeunes
                    développeurs pour mieux s'en sortir. </p>
            </div>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">

                @foreach($exper as $item)

                    <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                        <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center"
                             style="background-image: url(https://images.unsplash.com/photo-1521185496955-15097b20c5fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80)"></div>

                        <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">

                            <div class="header-content w-full inline-flex justify-center items-center">
                                <div class="category-badge  h-8 w-8 m rounded-full m-1 bg-purple-100">
                                    <div class="h-6 w-6 rounded-full m-1 bg-purple-500 overflow-hidden object-cover">

                                        <img src="{{ $item->logo }}" alt="">

                                    </div>
                                </div>

                                <h1 class="category-title font-bold flex-1 w-full mb-3 whitespace-no-wrap text-sm text-center">
                                    {{ $item->company }}
                                </h1>
                            </div>
                            <div class="title-post font-medium mb-1">
                                {{ $item->post }}
                            </div>
                            <div class="summary-post text-base text-justify">
                                {{ $item->description }}
                            </div>

                        </div>
                    </div>


                @endforeach

            </div>
        </div>
    </section>
@endsection




@section('footer')
    @include('layouts.footer')
@endsection
