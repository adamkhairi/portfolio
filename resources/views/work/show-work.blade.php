@extends('layouts.app')

{{--/ navBar--}}
@section('header')
    @include('layouts.navbar')
@endsection

@section('content1')
    <div class="pt-20"></div>
    <section class="min-h-screen flex justify-center items-center">

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
                <a href="#" class="text-sm pb-8">
                    By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on April 25th,
                    2020
                </a>
                <h1 class="text-2xl font-bold pb-3">Introduction</h1>
                <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel neque non libero
                    suscipit suscipit eu eu urna. Proin bibendum urna mattis ante malesuada ultrices. Etiam in turpis
                    vitae
                    elit dictum aliquet. Donec mattis risus in turpis dapibus, eget tempus sem tincidunt. Orci varius
                    natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In est enim, imperdiet
                    sed
                    ornare quis, pellentesque vel risus. Nunc vitae vestibulum turpis. Quisque eget eleifend urna. Etiam
                    et
                    vulputate purus, ut egestas sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                    posuere cubilia Curae; Duis quis neque non urna venenatis mollis et at massa. Pellentesque sem
                    lacus,
                    malesuada vel hendrerit molestie, mollis vel elit.</p>

            </div>
        </article>
    </section>

@endsection




{{--/ Footer--}}
@section('footer')
    @include('layouts.footer')
@endsection

