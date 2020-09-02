<nav id="navbar" class="flex justify-between items-center bg-gray-800 py-4 px-16 fixed top-0 w-full z-40">
    <a href="{{ route('index') }}">
        <div class="flex justify-center items-center">
            <img src="/img/user-profile.png" width="50" alt="USER img">
            <h5 class="font-bold pl-4">Adam Khairi</h5>

        </div>
    </a>
    <div id="menu-toggle">
        <i class="fas fa-bars text-gray-300 text-3xl "></i>
    </div>
</nav>
<div id="menu"
     class="hidden z-50 opacity-75 text-black bg-gray-300 fixed top-0 h-screen w-full flex justify-center items-center">
    <div class="flex flex-col items-center font-extrabold text-4xl justify-center">
        <a href="{{route('index')}}" class="py-3 rounded hover:bg-black hover:text-white px-20">Home</a>
        <a href="#about" class="py-3 rounded hover:bg-black hover:text-white px-20">About</a>
        <a href="{{ url('/formations') }}" class="py-3 rounded hover:bg-black hover:text-white px-20">Certificats</a>
        <a href="" class="py-3 rounded hover:bg-black hover:text-white px-20">Experience</a>
        <a href="" class="py-3 rounded hover:bg-black hover:text-white px-20">Study</a>
        <a href="" class="py-3 rounded hover:bg-black hover:text-white px-20">Work</a>
        <a href="" class="py-3 rounded hover:bg-black hover:text-white px-20">Contact</a>
    </div>
</div>
