@extends('layouts.app')
@section('title','Update Experience - Page')

@section('header')
    @include('layouts.navbar')
@endsection


@section('content')
    <div class="p-16"></div>
    <div class="container max-w-full mx-auto md:py-24 px-6 bg-gray-200 py-12">
        <div class="max-w-sm mx-auto px-6 flex justify-center items-center">
            <div class="relative flex flex-wrap ">
                <div class="w-full relative">
                    <div class="md:mt-6 text-black">

                        <h1 class="text-3xl  font-extrabold text-center font-base text-black">
                            Update Experience
                        </h1>
                        <form class="mt-8" method="POST" action="{{route('experiences.update',$exper->id)}}"
                              enctype="multipart/form-data">
                            <div class="mx-auto max-w-lg ">
                                <div class="py-1">
                                    <label for="company" class="px-1 text-sm text-gray-600">Company</label>
                                    <input placeholder="Company" type="text" name="company" id="company"
                                           class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
                                           value="{{ $exper->company }}"
                                    >
                                    @csrf
                                </div>
                                <div class="py-1">
                                    <label for="description" class="px-1 text-sm text-gray-600">Description</label>
                                    <textarea placeholder="" name="description" id="description"
                                              class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
                                              value="{{ $exper->description }}"
                                    ></textarea>
                                </div>

                                <div class="py-1">
                                    <label for="post" class="px-1 text-sm text-gray-600">Post</label>
                                    <input placeholder="" type="text" name="post" id="post"
                                           class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
                                           value="{{ $exper->post }}"
                                    >
                                </div>

                                <div class="py-1">
                                    <label for="logo" class="px-1 text-sm text-gray-600">Company Logo</label>
                                    <input placeholder="" type="file" name="logo" id="logo"
                                           class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
                                    >
                                </div>

                                <button type="submit" class="mt-3 text-lg font-semibold
            bg-gray-800 w-full text-white rounded-lg
            px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                                    Update
                                </button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection




@section('footer')
    @include('layouts.footer')
@endsection
