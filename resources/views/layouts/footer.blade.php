{{--<footer>--}}

{{--    <div class="bg-gray-800 pb-24">--}}
{{--        <div class="bg-white max-w-6xl mx-auto py-12">--}}
{{--            <div class="px-12 md:px-24">--}}
{{--                <a href="#"--}}
{{--                   class="block mb-2 uppercase text-gray-800 text-lg font-bold tracking-widest hover:text-yellow-600">--}}
{{--                    --}}{{--                    User number--}}
{{--                    212 6 41 14 51 42--}}
{{--                </a>--}}
{{--                <a href="#"--}}
{{--                   class="block uppercase text-gray-800 text-lg font-bold tracking-widest hover:text-yellow-600">--}}
{{--                    --}}{{--                    user Mail--}}
{{--                    khairiadam1@gmail.com--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="flex py-12">--}}
{{--                <div class="flex-1 border-b-8 border-gray-200"></div>--}}
{{--                <div class="w-32"></div>--}}
{{--                <div class="flex-1 border-b-8 border-gray-200"></div>--}}
{{--            </div>--}}

{{--            <div class="flex flex-wrap justify-between px-24 text-sm font-serif text-gray-500">--}}
{{--                <div class="w-full md:flex-1">&copy; 2020 copyright</div>--}}
{{--                <div class="w-full md:flex-1 md:text-right">Made by: ADAM KHAIRI</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
<footer class=" relative bg-gray-900 mt-20 text-gray-500 cursor-default flex-col xl:flex-row shadow-inner">
{{--    <div class="-mt-20 h-32 bg-gray-900 transform skew-y-3 z-0"></div>--}}
    <!-- ??? -->
    <a href="{{ url('/login') }}"
       class="absolute text-white top-0 right-0 transform -translate-y-12 h-12 w-12 cursor-not-allowed">
        <i class="fas fa-lock text-2xl"></i>
    </a>
    <div class="py-12 flex flex-col justify-between items-center content-between text-gray-600">
        <div class="flex justify-start items-center text-gray-500 font-bold text-xs sm:text-sm">
            <a class="" href="{{ url('/contact') }}">
                <div class="uppercase transition duration-300 ease-in-out hover:text-white mr-3">mail</div>
            </a>
            <div class="bg-gray-500 rounded-full p-px"></div>
            <a href="#" target="_blank">
                <div class="uppercase transition duration-300 ease-in-out hover:text-white mx-3">linkedin</div>
            </a>
            <div class="bg-gray-500 rounded-full p-px"></div>
            <a class="" href="https://github.com/adamkhairi" target="_blank">
                <div class="uppercase transition duration-300 ease-in-out hover:text-white mx-3">github</div>
            </a>
            <div class="bg-gray-500 rounded-full p-px"></div>
            <a href="https://dribbble.com/VincentManzoni" target="_blank">
                <div class="uppercase transition duration-300 ease-in-out hover:text-white mx-3">dribble</div>
            </a>
        </div>
        <div class="h-16"></div>

        <div class="flex justify-center font-light text-sm text-center">
            Hand-coded with good
            <span id="music"
                  class="cursor-pointer px-1 stroke-1 hover:text-orange-400 ion-ios-musical-notes">
                    <i class="fas fa-music"></i>
                </span>
            and
            <a class="px-1 tracking-tight hover:text-teal-500" href="https://tailwindcss.com/" target="_blank">
                Tailwindcss </a>
        </div>
        <div class="font-light text-sm text-center">© 2020 Khairi Adam. All rights reserved.</div>
    </div>

</footer>
