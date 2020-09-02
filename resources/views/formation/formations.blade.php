@extends('layouts.app')

{{--/ navBar--}}
@section('header')
    @include('layouts.navbar')
@endsection

{{--/ Formations--}}
@section('content1')
    <section class="py-6 w-full h-screen">

        <div class="py-16">
            <h1 class="text-5xl pt-12 text-center text-white font-extrabold"> Certificats </h1>
        </div>
        @foreach($formations as $formation)

            <div class="bg-gray-100 text-black">
                <div class="max-w-5xl mx-auto p-8 py-24 flex flex-wrap justify-start items-center">
                    <div class="flex-1">
                        <h2 class="font-display-italic font-extrabold text-3xl md:text-4xl  italic leading-none mb-12">
                            {{ $formation->certificate }}</h2>
                        <p class="text-gray-500">
                            {{ $formation->obtained }}, {{ $formation->school }}
                        </p>
                    </div>
                    <div class="w-full lg:w-72 text-gray-500">
                        <p class="leading-loose max-w-xl">
                            {{ $formation->description }}
                        </p>
                    </div>
                </div>
                <hr class="bg-gray-800 w-full h-1">
            </div>

        @endforeach
    </section>
@endsection

{{--/ Footer--}}
@section('footer')
    @include('layouts.footer')
@endsection
