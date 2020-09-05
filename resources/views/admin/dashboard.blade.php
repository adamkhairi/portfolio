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
        </div>
        <div id="add-form" class="hidden">
            @include('formation.add-form')

        </div>
        <div>
            <div class="w-2/3 mx-auto">
                <div class="bg-white text-black shadow-md rounded my-6">
                    <table class="text-left w-full border-collapse">
                        <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                        <thead>
                        <tr>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Certificate
                            </th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                School
                            </th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Date
                            </th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Description
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($formations as $formation)
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ $formation->certificate }}
                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ $formation->school }}

                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ $formation->obtained }}

                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ $formation->description }}

                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <a href="{{ route('formation.edit',$formation->id) }}"
                                       class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark">Edit</a>
                                    <a href="#"
                                       class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark">View</a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

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
        </div>
        {{--        ADD SEC--}}
        <div id="add-work" class="hidden">
            @include('work.add-work')
        </div>
        {{--        EDIT SEC--}}
        {{--        <div id="edit-work" class="hidden">--}}
        {{--            @include('work.update-sec')--}}
        {{--        </div>--}}
        {{--        --}}{{--        DELETE SEC--}}
        {{--        <div id="add-work" class="hidden">--}}
        {{--            TODO Tables of works--}}
        {{--        </div>--}}

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
