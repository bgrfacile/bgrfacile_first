@extends('layouts.base')

@section('baniere')
    @include('layouts.partials.baniere_profil')
@endsection

@section('content')
{{--    <style>--}}
{{--        .bg-dots{--}}
{{--            background-image: url(https://assets-global.website-files.com/5b5a66e9f3166b36708705fa/5dea7a12bb83ab1f13040de5_cx-dots.svg);--}}
{{--            background-repeat: no-repeat--}}
{{--        }--}}
{{--    </style>--}}

{{--    <div class="m-auto max-w-6xl p-12">--}}
{{--        <div class="flex flex-col md:flex-row">--}}
{{--            <div class="md:w-1/2 max-w-md flex flex-col justify-center">--}}
{{--                <div class="md:text-5xl text-2xl uppercase font-black">Awesome tool for your future team</div>--}}
{{--                <div class="text-xl mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>--}}
{{--                <div class="my-5 h-16">--}}
{{--                    <div class="shadow-md font-medium py-2 px-4 text-yellow-100--}}
{{--               cursor-pointer bg-yellow-600 hover:bg-yellow-500 rounded text-lg text-center w-48">Join us now</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="flex md:justify-end w-full md:w-1/2 -mt-5">--}}
{{--                <div class="bg-dots">--}}
{{--                    <div class="shadow-2xl max-w-md z-10 rounded-full mt-6 ml-4">--}}
{{--                        <img alt="card img" class="rounded-t" src="https://s.spielwarenmesse.de/fileadmin/data_archive/Relaunch_Spielwarenmesse/magazine/header/20190618_Header_Memes.jpg">--}}
{{--                        <div class="text-2xl p-10 bg-white"><img alt="quote" class="float-left mr-1" src="https://assets-global.website-files.com/5b5a66e9f3166b36708705fa/5cf8fb1f994fb7168d0d66fb_quote-intro.svg"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="py-10 bg-gray-100  bg-opacity-50">
        <div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
            <div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-indigo-400 rounded-t">
                <div class="max-w-sm mx-auto md:w-full md:mx-0">

                </div>
            </div>
            <div class="bg-white space-y-6">
                <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-gray-500 items-center">
                    <h2 class="md:w-1/3 max-w-sm mx-auto">Account</h2>
                    <div class="md:w-2/3 max-w-sm mx-auto">
                        <label class="text-sm text-gray-400">Email</label>
                        <div class="w-full inline-flex border">
                            <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <input type="email" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" placeholder="email@example.com" disabled="">
                        </div>
                    </div>
                </div>

                <hr>
                <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                    <h2 class="md:w-1/3 mx-auto max-w-sm">Personal info</h2>
                    <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                        <div>
                            <label class="text-sm text-gray-400">Full name</label>
                            <div class="w-full inline-flex border">
                                <div class="w-1/12 pt-2 bg-gray-100">
                                    <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" placeholder="Charly Olivas">
                            </div>
                        </div>
                        <div>
                            <label class="text-sm text-gray-400">Phone number</label>
                            <div class="w-full inline-flex border">
                                <div class="pt-2 w-1/12 bg-gray-100">
                                    <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" placeholder="12341234">
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="md:inline-flex w-full space-y-4 md:space-y-0 p-8 text-gray-500 items-center">
                    <h2 class="md:w-4/12 max-w-sm mx-auto">Change password</h2>

                    <div class="md:w-5/12 w-full md:pl-9 max-w-sm mx-auto space-y-5 md:inline-flex pl-2">
                        <div class="w-full inline-flex border-b">
                            <div class="w-1/12 pt-2">
                                <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <input type="password" class="w-11/12 focus:outline-none focus:text-gray-600 p-2 ml-4" placeholder="New">
                        </div>
                    </div>

                    <div class="md:w-3/12 text-center md:pl-6">
                        <button class="text-white w-full mx-auto max-w-sm rounded-md text-center bg-indigo-400 py-2 px-4 inline-flex items-center focus:outline-none md:float-right">
                            <svg fill="none" class="w-4 text-white mr-2" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                            Update
                        </button>
                    </div>
                </div>

                <hr>
                <div class="w-full p-4 text-right text-gray-500">
                    <button class="inline-flex items-center focus:outline-none mr-4">
                        <svg fill="none" class="w-4 mr-2" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                        Delete account
                    </button>
                </div>
            </div>
        </div>
    </div>


@endsection
