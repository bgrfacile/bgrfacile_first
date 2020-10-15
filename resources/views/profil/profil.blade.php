@extends('layouts.front')

@section('content')
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.rawgit.com/shuvroroy/youtube-clone/883c8d9a/public/css/main.css">
    <form method="POST" action="{{ url('/logout') }}">
      @csrf
        <button class="block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out w-full text-left">
            Logout
        </button>
    </form>
    <div class="bg-white font-sans">
        {{--        banner--}}
        <div class="bg-cover h-112">
        </div>
        <div class="-mt-1 bg-grey-lighter">
            <div class="container mx-auto">
                <div class="flex justify-between items-center py-4 px-16">
                    <div class="flex items-center">
                        <img class="w-24 h-24 rounded-full"
                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                             alt="channel_logo">
                        <div class="ml-6">
                            <div class="text-2xl font-normal flex items-center">
                                <span class="mr-2">John Doe</span>
{{--                                <span--}}
{{--                                    class="w-3 h-3 text-white inline-block text-center rounded-full bg-grey-dark text-2xs">--}}
{{--                                    &#10003;--}}
{{--                                </span>--}}
                            </div>
                            <p class="mt-2 font-hairline text-sm">étudiant</p>
                        </div>
                    </div>
                    <div class="text-grey-dark">
                        <button class="appearance-none px-3 py-2 bg-green-600 uppercase text-white text-sm mr-4">
                            Abonement actif
                        </button>
                    </div>
                </div>
                <div class="px-16">
                    <ul class="list-reset flex">
                        <li class="text-center py-3 px-8 border-b-2 border-solid border-grey-dark">
                            <a href="{{ url('/profil/about') }}"
                               class="text-black">Info</a>
                        </li>
                        <li class="text-center py-3 px-8">
                            <a href="#"
                               class="hover:text-black">Contenues</a>
                        </li>
                        <li class="text-center py-3 px-8">
                            <a href="#"
                               class="hover:text-black">Playlists</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mx-auto flex">
            <div class="w-3/4 mx-16 py-6">
                <div class="border-b pb-8">
                    <div class="flex">
                        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Applicant Information
                                </h3>
                                <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                                    Personal details and application.
                                </p>
                            </div>
                            <div>
                                <dl>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            Full name
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            Margot Foster
                                        </dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            Application for
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            Backend Developer
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            Email address
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            margotfoster@example.com
                                        </dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            Salary expectation
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            $120,000
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            About
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                                        </dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            Attachments
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            <ul class="border border-gray-200 rounded-md">
                                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                                                    <div class="w-0 flex-1 flex items-center">
                                                        <!-- Heroicon name: paper-clip -->
                                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="ml-2 flex-1 w-0 truncate">
                  resume_back_end_developer.pdf
                </span>
                                                    </div>
                                                    <div class="ml-4 flex-shrink-0">
                                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">
                                                            Download
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="border-t border-gray-200 pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                                                    <div class="w-0 flex-1 flex items-center">
                                                        <!-- Heroicon name: paper-clip -->
                                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="ml-2 flex-1 w-0 truncate">
                  coverletter_back_end_developer.pdf
                </span>
                                                    </div>
                                                    <div class="ml-4 flex-shrink-0">
                                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">
                                                            Download
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-1/4 py-6">
{{--                <div class="border-b">--}}
{{--                    <p class="text-grey-darker uppercase text-sm mb-6">Notifications</p>--}}
{{--                    <ul class="list-reset">--}}
{{--                        <li class="mb-6">--}}
{{--                        <span class="flex items-center mb-2">--}}
{{--                        <img class="w-6 h-6 rounded-full"--}}
{{--                             src="https://yt3.ggpht.com/-E0Ej_rdX5Ic/AAAAAAAAAAI/AAAAAAAAAAA/kskO1deXSNs/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"--}}
{{--                             alt="">--}}
{{--                        <span class="ml-2">Wes Bos</span>--}}
{{--                        </span>--}}
{{--                            <button class="appearance-none p-2 bg-grey-light uppercase text-grey-darker text-xs mr-4">--}}
{{--                                Subscribe--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
