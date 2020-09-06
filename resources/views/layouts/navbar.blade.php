<nav id="navbar" class="flex justify-between items-center bg-transparent py-4 px-16 fixed top-0 w-full z-40">
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
     class="hidden z-50 opacity-100 text-black bg-gray-400 fixed top-0 h-screen w-full flex justify-center items-center">
    <div class="flex flex-col items-center font-extrabold text-4xl justify-center w-full">
        <a href="{{route('index')}}" class="py-3 rounded hover:bg-black hover:text-gray-400 w-2/6 text-center">Home</a>
        <a href="{{route('index')}}#about" class="py-3 rounded hover:bg-black hover:text-gray-400 w-2/6 text-center">About</a>
        <a href="{{ url('/formations') }}" class="py-3 rounded hover:bg-black hover:text-gray-400 w-2/6 text-center">Certificats</a>
        <a href="{{url('/experiences')}}" class="py-3 rounded hover:bg-black hover:text-gray-400 w-2/6 text-center">Experience</a>
        <a href="{{ url('/works') }}" class="py-3 rounded hover:bg-black hover:text-gray-400 w-2/6 text-center">Portfolio</a>
        <a href="{{ url('/contact') }}" class="py-3 rounded hover:bg-black hover:text-gray-400 w-2/6 text-center">Contact</a>
    </div>
</div>
