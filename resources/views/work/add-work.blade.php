@extends('layouts.app')

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
                            Add WORK
                        </h1>
                        <form class="mt-8" method="POST" action="{{route('works.store')}}" enctype="multipart/form-data">
                            <div class="mx-auto max-w-lg ">
                                <div class="py-1">
                                    <label for="name" class="px-1 text-sm text-gray-600">Title</label>
                                    <input placeholder="name" type="text" name="name" id="name"
                                           class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
                                    >
                                    @csrf
                                </div>
                                <div class="py-1">
                                    <label for="description" class="px-1 text-sm text-gray-600">Description</label>
                                    <input placeholder="" type="text" name="description" id="description"
                                           class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
                                    >
                                </div>

                                <div class="py-1">
                                    <label for="img" class="px-1 text-sm text-gray-600">Image</label>
                                    <input placeholder="" type="file" name="img" id="img"
                                           class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
                                    >
                                </div>

                                <button type="submit" class="mt-3 text-lg font-semibold
            bg-gray-800 w-full text-white rounded-lg
            px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                                    Add
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
