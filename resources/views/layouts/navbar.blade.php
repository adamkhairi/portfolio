<nav class="fixed top-0 right-0 m-5 lg:m-10 z-50">
    <!-- Laptop -->

    <div class="hidden lg:flex bg-gray-800 items-center p-1 rounded-lg text-lg text-gray-300">
        <a href="{{ url('/') }}"
           class="px-3 py-1 mr-1 rounded-md transition duration-300 ease-in-out {{ Request::is('/') ? 'bg-gray-700 shadow' : 'font-light text-gray-400 hover:bg-gray-900 hover:opacity-75' }}">
            Home
        </a>

        <a href="{{ url('/works') }}"
           class="px-3 py-1 mr-1 rounded-md transition duration-300 ease-in-out {{ Request::is('works') ? 'bg-gray-700 shadow' : 'font-light text-gray-400 hover:bg-gray-900 hover:opacity-75' }}">
            Work
        </a>
        <a href="{{ url('/formations') }}"
           class="px-3 py-1 mr-1 rounded-md transition duration-300 ease-in-out {{ Request::is('formations') ? 'bg-gray-700 shadow' : 'font-light text-gray-400 hover:bg-gray-900 hover:opacity-75' }}">
            Certificates
        </a>
        <a href="{{ url('/contact') }}"
           class="px-3 py-1 rounded-md transition duration-300 ease-in-out {{ Request::is('contact') ? 'bg-gray-700 shadow' : 'font-light text-gray-400 hover:bg-gray-900 hover:opacity-75' }}">
            Contact
        </a>
    </div>


    <div class="flex lg:hidden bg-gray-800 items-center py-1 px-2 rounded-lg text-lg text-gray-300">

        <div id="menu-toggle" class="flex lg:hidden">
            <i class="fas fa-bars text-gray-300 text-3xl "></i>
        </div>
    </div>
</nav>
<!-- Mobile -->
<div id="menu"
     class="hidden z-50 opacity-100 text-black bg-gray-400 fixed left-0 right-0 top-0 h-screen w-full flex justify-center items-center">
    <div class="flex flex-col items-center font-extrabold text-4xl justify-center w-full">
        <a href="{{url('/')}}"
           class="py-3 rounded {{ Request::is('/') ? 'bg-black text-teal-400' :'hover:bg-black hover:text-gray-400' }}  my-1 w-2/6 text-center">Home</a>
        <a href="{{ url('/#work') }}"
           class="py-3 rounded {{ Request::is('works') ? 'bg-black text-teal-400' :'hover:bg-black hover:text-gray-400' }} my-1 w-2/6 text-center">Works</a>
        <a href="{{ url('/#certi') }}"
           class="py-3 rounded {{ Request::is('formations') ? 'bg-black text-teal-400' :'hover:bg-black hover:text-gray-400' }} my-1 w-2/6 text-center">Certificates</a>
        <a href="{{ url('/experiences') }}"
           class="py-3 rounded {{ Request::is('formations') ? 'bg-black text-teal-400' :'hover:bg-black hover:text-gray-400' }} my-1 w-2/6 text-center">Experiences</a>
        <a href="{{ url('/contact') }}"
           class="py-3 rounded {{ Request::is('contact') ? 'bg-black text-teal-400' :'hover:bg-black hover:text-gray-400' }} my-1 w-2/6 text-center">Contact</a>
    </div>
</div>
