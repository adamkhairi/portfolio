@extends('layouts.app')

@section('header')
    @include('layouts.navbar')
    <aside class=" w-full fixed bottom-0 left-0 p-6">
        <ul class="list-reset flex flex-row text-center  rounded">
            <li class="mr-3 flex-1 hover:bg-gray-800 rounded-lg">
                <a href="#"
                   class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-pink-dark">
                    <i class="fas fa-graduation-cap pr-0 md:pr-3 text-pink"></i><span
                        class="pb-1 md:pb-0 text-xs md:text-base text-white md:font-bold block md:inline-block">Formation</span>
                </a>
            </li>
            <li class="mr-3 flex-1 hover:bg-gray-800 rounded-lg">
                <a href="#"
                   class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-pink-dark">
                    <i class="fas fa-laptop-code pr-0 md:pr-3 text-pink"></i><span
                        class="pb-1 md:pb-0 text-xs md:text-base text-white md:font-bold block md:inline-block">Portfolio</span>
                </a>
            </li>
            <li class="mr-3 flex-1 hover:bg-gray-800 rounded-lg">
                <a href="#"
                   class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-pink-dark">
                    <i class="fas fa-code-branch pr-0 md:pr-3 text-pink"></i><span
                        class="pb-1 md:pb-0 text-xs md:text-base text-white md:font-bold block md:inline-block">Experience</span>
                </a>
            </li>
        </ul>
    </aside>
@endsection

{{--/ Sec-1 // FORMATION --}}

@section('content1')
    <div class="pt-10"></div>
    <section class=" py-12">
        <div class="flex w-full justify-center items-center">
            <button type="button" id="btnFormAdd"
                    class="mx-4 mb-2 font-bold hover:opacity-75 w-24 h-10 px-4 py-2 bg-gray-200 text-black rounded-lg">
                Add
            </button>
            <button type="button"
                    class="mx-4 mb-2 font-bold hover:opacity-75 w-24 h-10 px-4 py-2 bg-gray-200 text-black rounded-lg">
                Edit
            </button>
            <button type="button"
                    class="mx-4 mb-2 font-bold hover:opacity-75 w-24 h-10 px-4 py-2 bg-gray-200 text-black rounded-lg">
                Delete
            </button>
        </div>
        <div id="add-form" class="hidden">
            @include('formation.add-form')
        </div>
    </section>
@endsection

{{--/ Sec-1 // FORMATION --}}

{{--/ Sec-2 // Portfolio --}}

@section('content2')
    <div class="pt-10"></div>
    <section class=" py-12">
        <div class="flex w-full justify-center items-center">
            <button type="button" id="btnWorkAdd"
                    class="mx-4 mb-2 font-bold hover:opacity-75 w-24 h-10 px-4 py-2 bg-gray-200 text-black rounded-lg">
                Add
            </button>
            <button type="button"
                    class="mx-4 mb-2 font-bold hover:opacity-75 w-24 h-10 px-4 py-2 bg-gray-200 text-black rounded-lg">
                Edit
            </button>
            <button type="button"
                    class="mx-4 mb-2 font-bold hover:opacity-75 w-24 h-10 px-4 py-2 bg-gray-200 text-black rounded-lg">
                Delete
            </button>
        </div>
        {{--        ADD SEC--}}
        <div id="add-work" class="hidden">
            @include('work.add-work')
        </div>
        {{--        EDIT SEC--}}
        <div id="edit-work" class="hidden">
            @include('work.update-sec')
        </div>
        {{--        DELETE SEC--}}
        <div id="add-work" class="hidden">
{{--            TODO Tables of works--}}
        </div>

    </section>
@endsection

{{--/ Sec-2 // Portfolio --}}

{{--/ Sec-3--}}

@section('content3')
    <section class="h-screen text-center">
        Experience
    </section>
@endsection

{{--/ Sec-3--}}

{{--/ Footer--}}
@section('footer')
    @include('layouts.footer')
@endsection
{{--/ Footer--}}

{{--/ Scripts--}}

@section('script')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script>
        // Formation Add
        $('#btnFormAdd').on('click', function () {
            $('#add-form').toggle('hidden');
        })

        $('#btnWorkAdd').on('click', function () {
            $('#add-work').toggle('hidden');
        })
    </script>
@endsection

{{--/ Scripts--}}
