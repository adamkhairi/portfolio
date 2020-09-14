@extends('layouts.app')

@section('title','Experiences | ADAM KHAIRI')

{{--/ navBar--}}
@section('header')
    @include('layouts.navbar')
@endsection

@section('content')
    <div class="h-32 bg-gray-800"></div>

    <section class="blog body-font">
        <!-- Experience -->
        <div class="my-10">
            <h2 class="uppercase text-sm font-semibold text-center text-4xl text-gray-700">Experiences</h2>
            <!-- Popin -->
            <div class="container px-5 py-16 mx-auto">
                @foreach($exper as $item)

                    <div>
                        <a class="flex flex-col lg:flex-row justify-between items-center mb-2 py-4 border-b border-gray-700 transition duration-200 hover:border-gray-500 cursor-pointer">
                            <div class="text-xs font-thin text-gray-500 transform rotate-0 lg:-rotate-90">010101</div>
                            <div class="text-xl font-medium text-gray-800 ">{{ $item->post }}</div>
                            <div class="flex-1"></div>
                            <img src="{{ $item->logo }}" class="h-8" alt="">
                        </a>
                        <div
                            class="mb-4 flex flex-col md:flex-row text-gray-600 text-sm font-light">
                            <div class="w-full md:w-2/3 ml-4  md:mb-0">
                                {{ $item->description }}
                            </div>
                            <div
                                class="w-full md:w-1/3 flex justify-center font-bold uppercase md:justify-end  flex-wrap text-red-700 text-xs -m-px">{{ $item->company }}
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
