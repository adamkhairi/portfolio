@extends('layouts.app')

{{--/ navBar--}}
@section('header')
    @include('layouts.navbar')
@endsection

@section('content1')
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
        <article class="flex flex-col shadow my-4 min-h-full">

            <a href="{{ route('work.index')  }}" class=" fixed left-0 m-3 bottom-0 hover:opacity-100">
                <i class="fas fa-chevron-circle-left text-4xl">
                </i>
                <p class="opacity-0 text-gray-300 object-cover">Go back</p>

            </a>
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75 text-center">
                <img src="{{ $work->img }}" class="mx-auto ">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">


                    {{--GET The Category name by id--}}
                    {{ $work->getName($work->category_id)->name }}


                </a>
                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">
                    {{ $work->name }}
                </a>

                <h1 class="text-2xl font-bold pb-3">Description</h1>
                <p class="pb-3">
                    {{ $work->description }}
                </p>

            </div>

        </article>
    </section>

@endsection




{{--/ Footer--}}
@section('footer')
    @include('layouts.footer')
@endsection

