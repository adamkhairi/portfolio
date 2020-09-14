@extends('layouts.app')
@section('content')
    <section class="min-h-screen bg-gray-900 text-gray-100 flex flex-col justify-center px-5 py-10 md:px-20 xl:px-40">

        {{--        Logo --}}
        <img src="/img/user-profile.png"
             class="absolute top-0 left-0 m-3 lg:m-10 h-12 lg:h-16 opacity-50" alt="">
        <h1 class=" font-bold text-5xl xl:text-6xl text-center">About me</h1>

        {{--        Description --}}

        <div class="flex md:flex-row flex-col justify-center items-center py-6">
            <img src="/img/user-profile.png" class="md:self-start self-center w-32 xl:w-56 mr-6"
                 alt="">
            <div class="w-full md:w-2/3 flex flex-col justify-center">
                <div class="self-center px-10 font-light text-lg text-gray-200 whitespace-pre-line">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque enim ex impedit optio
                    quis quod ratione sint veniam, voluptas.

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequatur culpa deleniti,
                    earum enim, error esse fugit hic id reprehenderit rerum, vitae.
                </div>
                <div class="px-10 font-light text-xs text-gray-700 leading-thight whitespace-pre-line">
                    <span class="font-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde.</span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam dolor doloremque ipsum maiores
                    ut?
                </div>
            </div>
        </div>

        {{--        DOWNLOAD--}}
        <a href="#"
           class="self-center mx-auto my-10 flex items-center justify-center text-md text-teal-600 border border-teal-600 transition duration-300 ease-in-out hover:bg-teal-600 hover:text-white rounded px-2 py-px"
           target="_blank">See my resume <span class="pl-2 ion-ios-document text-2xl"></span></a>


        <!-- Experience -->
        <div class="mb-10">
            <h2 class="uppercase text-sm font-semibold text-gray-700 mb-4">Experience</h2>
            <!-- Popin -->
            <div>
                <a class="flex flex-col lg:flex-row justify-between items-center mb-2 py-4 border-b border-gray-700 transition duration-200 hover:border-gray-500 cursor-pointer">
                    <div class="text-xs font-thin text-gray-500 transform rotate-0 lg:-rotate-90">010101</div>
                    <div class="text-xl font-medium">Brand Content Manager</div>
                    <div class="flex-1"></div>
                    <img src="/img/user-profile.png" class="h-8" alt="">
                </a>
                <div
                    class="mb-4 flex flex-col md:flex-row text-gray-300 text-sm font-light">
                    <p class="w-full mb-4 md:w-1/2 md:mb-0">
                        I was introduced to the lean start-up method to answer the biggest parent's problem.
                        Read the full story here: <a href="https://www.manzoni.me/projects/popin/popin.html"
                                                     class="underline text-red-500">Pop-in Case Study</a>
                    </p>
                    <div class="flex-1"></div>
                    <div class="w-full md:w-1/3 flex justify-center md:justify-end  flex-wrap text-white text-xs -m-px">
                        <div class="self-end bg-gray-800 m-px p-1 rounded">User Reseach</div>
                        <div class="self-end bg-gray-800 m-px p-1 rounded">Chatbot design</div>
                        <div class="self-end bg-gray-800 m-px p-1 rounded">UI/UX Website</div>
                        <div class="self-end bg-gray-800 m-px p-1 rounded">LEAN Method</div>
                        <div class="self-end bg-gray-800 m-px p-1 rounded">Teamwork</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


@section('content1')
    <section class="">

        <!-- Education -->
        <div class="mb-10 container mx-auto">
            <h2 class="uppercase text-sm font-semibold text-gray-700 mb-4">Education</h2>
            <!-- EM -->
            <div>
                <a
                    class="flex flex-col lg:flex-row justify-between items-center mb-2 py-4 border-b border-gray-700 transition duration-200 hover:border-gray-500 cursor-pointer">
                    <div class="text-xs font-thin text-gray-500 transform rotate-0 lg:-rotate-90">2020</div>
                    <div class="text-xl font-medium">UX Designer</div>
                    <div class="flex-1"></div>
                    <div class="text-base font-light">École Multimédia</div>
                </a>
                <div
                    class="mb-4 flex flex-col md:flex-row text-gray-300 text-sm font-light">
                    <p class="w-full mb-4 md:w-1/2 md:mb-0">
                        Starting the 14 September 2020, I will follow a 1 year program to learn UX Design.
                        I am already available for an internship, maybe with your company ?
                    </p>
                    <div class="flex-1"></div>
                    <div class="w-full md:w-1/3 flex justify-center md:justify-end  flex-wrap text-white text-xs -m-px">
                        <div class="self-end bg-gray-800 m-px p-1 rounded">UX Research Methodology</div>
                        <div class="self-end bg-gray-800 m-px p-1 rounded">UI Design</div>
                        <div class="self-end bg-gray-800 m-px p-1 rounded">Design &amp; Prototyping tools</div>
                        <div class="self-end bg-gray-800 m-px p-1 rounded">AGILE method</div>
                        <div class="self-end bg-gray-800 m-px p-1 rounded">Design sprints</div>
                    </div>
                </div>
            </div>
        </div>


    </section>

@endsection
