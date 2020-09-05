<div class="container max-w-full mx-auto md:py-24 px-6 bg-gray-200">
    <div class="max-w-sm mx-auto px-6 ">
        <div class="relative flex flex-wrap ">
            <div class="w-full relative">
                <div class="md:mt-6">

                    <h1 class="text-3xl  font-extrabold text-center font-base text-black">
                        Add Formation
                    </h1>
                    <form class="mt-8" method="POST" action="{{route('formations.store')}}">
                        <div class="mx-auto max-w-lg ">
                            <div class="py-1">
                                <label for="certificate" class="px-1 text-sm text-gray-600">CERTIFICATE</label>
                                <input placeholder="" type="text" name="certificate" id="certificate"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                @csrf
                            </div>
                            <div class="py-1">
                                <label for="school" class="px-1 text-sm text-gray-600">SCHOOL</label>
                                <input placeholder="" type="text" name="school" id="school"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                            </div>
                            <div class="py-1">
                                <label for="obtained" class="px-1 text-sm text-gray-600">OBTAINED</label>
                                <input placeholder="" type="date" name="obtained" id="obtained"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                            </div>
                            <div class="py-1">
                                <label for="description" class="px-1 text-sm text-gray-600">Description</label>
                                <textarea placeholder="" name="description" id="description" rows="4"
                                          class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"></textarea>
                            </div>
                            <button type="submit" class="mt-3 text-lg font-semibold
            bg-gray-800 w-full text-white rounded-lg
            px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                                SAVE
                            </button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

