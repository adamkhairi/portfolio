@extends('layouts.app')

@section('title','Certificats | ADAM KHAIRI')

{{--/ navBar--}}
@section('header')
    @include('layouts.navbar')
@endsection

{{--/ Formations--}}
@section('content1')
    <section class="w-full min-h-screen">

        <div class="py-16 bg-gray-800">
            <h1 class="text-5xl py-6 text-center text-white font-extrabold"> Certificats </h1>
        </div>
        <div class="container mx-auto text-center md:text-left">

            @foreach($formations as $formation)

                <div class="bg-gray-100 text-black">
                    <div class="max-w-5xl mx-auto p-8 py-24 flex flex-wrap justify-start items-center">
                        <div class="flex-1">
                            <h2 class="font-display-italic font-extrabold text-3xl md:text-4xl italic mb-12">
                                {{ $formation->certificate }}.</h2>
                            <p class="text-gray-500">
                                {{ $formation->obtained }}, {{ $formation->school }}.
                            </p>
                        </div>
                        <div class="w-full lg:w-72 text-gray-500">
                            <p class="leading-loose max-w-xl">
                                {{ $formation->description }}
                            </p>
                        </div>

                        @auth()
                            <div class="text-center text-white text-xl ">

                                <form action="{{ route('formation.destroy',$formation->id)}}" method="POST"
                                      enctype="multipart/form-data" class="flex w-full justify-center items-center ">

                                    <a href="{{ route('formation.edit', $formation->id) }}"
                                       type="button" class=" px-3 py-1 rounded bg-blue-600 hover:opacity-75 hover:shadow shadow-lg">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="px-3 py-1 rounded bg-red-600 ml-2 hover:opacity-75 hover:shadow shadow-lg">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        @endauth
                    </div>
                    <hr class="bg-gray-800 w-full h-1">
                </div>

            @endforeach


        </div>
    </section>
@endsection

{{--/ Footer--}}
@section('footer')
    @include('layouts.footer')
@endsection
