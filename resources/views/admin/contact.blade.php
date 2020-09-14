@extends('layouts.app')

@section('header')
    @include('layouts.navbar');
@endsection


@section('content')
    <section id="contact">
        <div class="h-32"></div>
        <div class="container px-4 mt-5 mx-auto text-black">

            <!-- Success message -->

            {{--            <form action="" method="post" action="{{ route('contact.store') }}">--}}

            {{--                @csrf--}}

            {{--                <div class="form-group">--}}
            {{--                    <label>Name</label>--}}
            {{--                    <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name"--}}
            {{--                           id="name">--}}

            {{--                    <!-- Error -->--}}
            {{--                    @if ($errors->has('name'))--}}
            {{--                        <div class="error">--}}
            {{--                            {{ $errors->first('name') }}--}}
            {{--                        </div>--}}
            {{--                    @endif--}}
            {{--                </div>--}}

            {{--                <div class="form-group">--}}
            {{--                    <label>Email</label>--}}
            {{--                    <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email"--}}
            {{--                           id="email">--}}

            {{--                    @if ($errors->has('email'))--}}
            {{--                        <div class="error">--}}
            {{--                            {{ $errors->first('email') }}--}}
            {{--                        </div>--}}
            {{--                    @endif--}}
            {{--                </div>--}}

            {{--                <div class="form-group">--}}
            {{--                    <label>Phone</label>--}}
            {{--                    <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone"--}}
            {{--                           id="phone">--}}

            {{--                    @if ($errors->has('phone'))--}}
            {{--                        <div class="error">--}}
            {{--                            {{ $errors->first('phone') }}--}}
            {{--                        </div>--}}
            {{--                    @endif--}}
            {{--                </div>--}}

            {{--                <div class="form-group">--}}
            {{--                    <label>Subject</label>--}}
            {{--                    <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"--}}
            {{--                           id="subject">--}}

            {{--                    @if ($errors->has('subject'))--}}
            {{--                        <div class="error">--}}
            {{--                            {{ $errors->first('subject') }}--}}
            {{--                        </div>--}}
            {{--                    @endif--}}
            {{--                </div>--}}

            {{--                <div class="form-group">--}}
            {{--                    <label>Message</label>--}}
            {{--                    <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message"--}}
            {{--                              id="message"--}}
            {{--                              rows="4"></textarea>--}}

            {{--                    @if ($errors->has('message'))--}}
            {{--                        <div class="error">--}}
            {{--                            {{ $errors->first('message') }}--}}
            {{--                        </div>--}}
            {{--                    @endif--}}
            {{--                </div>--}}

            {{--                <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">--}}
            {{--            </form>--}}
            <form class="w-full md:w-1/2 mx-auto" method="post" action="{{ route('contact.store') }}">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Name
                        </label>
                        <input
                            class="appearance-none {{ $errors->has('name') ? 'errorInput border border-red-500' : '' }} block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="name" type="text" name="name" placeholder="Jane">
                        @csrf


                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                            Email
                        </label>
                        <input
                            class="appearance-none {{ $errors->has('email') ? 'errorInput border border-red-500' : '' }} block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="email" id="email" type="text" placeholder="Example@mail.com">

                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                            Phone
                        </label>
                        <input
                            class="appearance-none {{ $errors->has('phone') ? 'errorInput border border-red-500' : '' }} block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="phone" id="phone" type="text">

                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="subject">
                            Subject
                        </label>
                        <input
                            class="appearance-none {{ $errors->has('subject') ? 'errorInput border border-red-500' : '' }} block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="subject" id="subject" type="text">

                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                            Message
                        </label>
                        <textarea
                            class=" {{ $errors->has('message') ? 'errorInput border border-red-500' : '' }}appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                            name="message" id="message"></textarea>
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3">
                        <button
                            class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                            type="submit">
                            Send
                        </button>

                        {{--                        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">--}}
                    </div>
                    <div class="md:w-2/3"></div>
                </div>
            </form>
        </div>

    </section>

@endsection
