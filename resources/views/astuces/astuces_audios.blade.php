@extends('layouts.base')
@section('title')
    astuces audios | bgrfacile.com
@endsection

@section('baniere')
    <div class="w-full bg-gray-200 bg-cover bg-center flex items-center justify-center h-full w-full"
         style="height:25rem; ">
        {{--        <h2 class="text-3xl font-extrabold text-gray-900 text-center">--}}
        {{--            des potcast de vos cours--}}
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
        <div class="relative">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_NsCkXA/music.json"
                           background="transparent" speed="1" style="width: 300px; height: 300px;" loop
                           autoplay></lottie-player>
        </div>
    </div>
@endsection

@section('content')
    <div class="container grid grid-cols-3 gap-4">
        <div>

        </div>
    </div>

    <section class="my-10">
        <div class="container mx-auto" style="max-width: 1166px;">
            <div class="flex w-full" style="max-width: 1200px;">
                <div class="w-full" style="max-width: 1100px;">
                    <div class="bg-white border rounded-lg w-full mb-8">
                        {{--                        control--}}
                        <div class="flex">
                            <div class="w-full p-8">
                                <div class="flex justify-between">
                                    <div>
                                        <h3 class="text-2xl text-grey-darkest font-medium">Chronique congolaise</h3>
                                        <p class="text-sm text-grey mt-1">
                                            <span><strong>Auteur</strong> Nom de l'auteur</span>
                                            <span class="ml-3"><strong>Lecteur</strong> Nom du lecteurr</span>
                                        </p>
                                    </div>
                                    <div class="text-red-300">
                                        <svg class="w-6 h-6" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-8">
                                    <div class="text-black p-4 rounded-full bg-gray-100 shadow">
                                        <svg class="w-8 h-8" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M6.59 12.83L4.4 15c-.58.58-1.59 1-2.4 1H0v-2h2c.29 0 .8-.2 1-.41l2.17-2.18 1.42 1.42zM16 4V1l4 4-4 4V6h-2c-.29 0-.8.2-1 .41l-2.17 2.18L9.4 7.17 11.6 5c.58-.58 1.59-1 2.41-1h2zm0 10v-3l4 4-4 4v-3h-2c-.82 0-1.83-.42-2.41-1l-8.6-8.59C2.8 6.21 2.3 6 2 6H0V4h2c.82 0 1.83.42 2.41 1l8.6 8.59c.2.2.7.41.99.41h2z"/>
                                        </svg>
                                    </div>
                                    <div class="text-black p-4 rounded-full bg-gray-100 shadow">
                                        <svg class="w-8 h-8" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M4 5h3v10H4V5zm12 0v10l-9-5 9-5z"/>
                                        </svg>
                                    </div>
                                    <div class="text-white p-8 rounded-full bg-red-300 shadow-lg">
                                        <svg class="w-8 h-8" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z"/>
                                        </svg>
                                    </div>
                                    <div class="text-black p-4 rounded-full bg-gray-100 shadow">
                                        <svg class="w-8 h-8" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M13 5h3v10h-3V5zM4 5l9 5-9 5V5z"/>
                                        </svg>
                                    </div>
                                    <div class="text-black p-4 rounded-full bg-gray-100 shadow">
                                        <svg class="w-8 h-8" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M5 4a2 2 0 0 0-2 2v6H0l4 4 4-4H5V6h7l2-2H5zm10 4h-3l4-4 4 4h-3v6a2 2 0 0 1-2 2H6l2-2h7V8z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                                barre de progression--}}
                        <div class="mx-8 py-4">
                            <div class="flex justify-between text-sm text-grey-darker">
                                <p>0:40</p>
                                <p>4:20</p>
                            </div>
                            <div class="mt-1">
                                <div class="h-1 bg-gray-100 rounded-full">
                                    <div class="w-1/5 h-1 bg-red-300 rounded-full">
                                        <span
                                            class="w-4 h-4 bg-red absolute pin-r pin-b -mb-1 rounded-full shadow">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border rounded-lg w-full mb-8 p-8">
                        <div class="flex flex-col">
                            <div class="flex items-center pb-3 border-b mb-4">
                                <div class="flex-1 flex flex-col">
                                    <a href="#">
                                        <span>Chapitre 1</span>
                                        <span
                                            class="font-serif font-bold font-black">Begin </span>
                                    </a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled </p>
                                </div>
                                <div class="text-white p-4 rounded-full bg-red-300 shadow-lg ml-6">
                                    <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex items-center pb-3 border-b mb-4">
                                <div class="flex-1 flex flex-col">
                                    <a href="#">
                                        <span>Chapitre 1</span>
                                        <span
                                            class="font-serif font-bold font-black">Begin </span>
                                    </a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled </p>
                                </div>
                                <div class="text-white p-4 rounded-full bg-red-300 shadow-lg ml-6">
                                    <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex items-center pb-3 border-b mb-4">
                                <div class="flex-1 flex flex-col">
                                    <a href="#">
                                        <span>Chapitre 1</span>
                                        <span
                                            class="font-serif font-bold font-black">Begin </span>
                                    </a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled </p>
                                </div>
                                <div class="text-white p-4 rounded-full bg-red-300 shadow-lg ml-6">
                                    <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                audio version 1--}}

{{--                <div>--}}
{{--                    <div class=" rounded p-2 ml-8 min-h-screen"--}}
{{--                         style="min-width: 275px;">--}}
{{--                        <ul>--}}
{{--                            <li class="flex h-24 w-full mb-4 shadow-md">--}}
{{--                                <div class="w-full">--}}
{{--                                    <img src="" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="text-white p-4 rounded-full bg-red-300 shadow-lg ml-3 w-1/3">--}}
{{--                                    <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                         viewBox="0 0 20 20">--}}
{{--                                        <path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z"></path>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="intro-y box p-5 mt-6">
                    <div class="mt-1">
                        <a href="" class="flex items-center px-3 py-2 rounded-md bg-theme-1 text-white font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-image w-4 h-4 mr-2">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            Images
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-video w-4 h-4 mr-2">
                                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                            </svg>
                            Videos
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-file w-4 h-4 mr-2">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                            Documents
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-users w-4 h-4 mr-2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            Shared
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-trash w-4 h-4 mr-2">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path
                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            </svg>
                            Trash
                        </a>
                    </div>
                    <div class="border-t border-gray-200 dark:border-dark-5 mt-5 pt-5">
                        <a href="" class="flex items-center px-3 py-2 rounded-md">
                            <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                            Custom Work
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            <div class="w-2 h-2 bg-theme-9 rounded-full mr-3"></div>
                            Important Meetings
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                            Work
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                            Design
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            <div class="w-2 h-2 bg-theme-6 rounded-full mr-3"></div>
                            Next Week
                        </a>
                        <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-plus w-4 h-4 mr-2">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            Add New Label
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
