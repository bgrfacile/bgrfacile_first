@extends('layouts.front')

@section('baniere')
    {{--    <div class="h-64">--}}
    {{--        <div class="MS-b_astuces h-full bg-gray-100 flex items-center justify-center">--}}
    {{--            <div class="text-white text-center">--}}
    {{--                <h1 class="MS-b_h1">section cours</h1>--}}
    {{--                <p class=" MS-b_text mb-9">Découvrer des millions de cours rédiger par les professeurs qualifiés</p>--}}
    {{--                <button--}}
    {{--                    class="ml-3 bg-transparent hover:bg-gray-900 text-gray-900 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-gray-900 hover:border-transparent">--}}
    {{--                    visiter--}}
    {{--                </button>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="w-full bg-cover bg-center"
         style="height:32rem; background-image: url(https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl mb-9">section cours <span
                        class="underline text-blue-400"></span></h1>
                <a href="#bar"
                   class="mt-4 px-4 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    visiter
                </a>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="bg-gray-200 pb-12">
        <nav id="bar"
             class="flex flex-wrap items-center bg-gray-200 sticky top-0 z-50 shadow mb-5">
            <ul class="flex-1 flex items-center">
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="MS-nav-section inline-flex justify-center items-center w-full h-full">
                        Astuces
                    </a>
                </li>
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="MS-nav-section MS-nav-active inline-flex justify-center items-center w-full h-full">
                        Cours
                    </a>
                </li>
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="MS-nav-section inline-flex justify-center items-center w-full h-full">
                        Exercices
                    </a>
                </li>
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="MS-nav-section inline-flex justify-center items-center w-full h-full">
                        Corrigés
                    </a>
                </li>
            </ul>
            <form class="flex items-center h-12 w-full sm:w-auto md:w-auto lg:w-auto">
                <input
                    class="appearance-none w-full h-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="username"
                    type="search" placeholder="recherche...">
                <button type="submit" class="bg-black hover:bg-blue-700 text-white font-bold py-2 px-4 h-12 w-12">
                    <svg class="inline-block h-4" viewBox="0 0 12 12" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.7197 10.3078L9.18343 7.77151C9.86852 6.73645 10.1448 5.48385 9.95863 4.25664C9.77248 3.02943 9.13719 1.9151 8.17598 1.12976C7.21477 0.344416 5.99614 -0.0559507 4.75646 0.00630775C3.51678 0.0685662 2.3444 0.589013 1.46671 1.46671C0.589013 2.3444 0.0685662 3.51678 0.00630775 4.75646C-0.0559507 5.99614 0.344416 7.21477 1.12976 8.17598C1.9151 9.13719 3.02943 9.77248 4.25664 9.95863C5.48385 10.1448 6.73645 9.86852 7.77151 9.18343L10.3078 11.7197C10.4961 11.9016 10.7483 12.0022 11.0101 12C11.272 11.9977 11.5224 11.8927 11.7075 11.7075C11.8927 11.5224 11.9977 11.272 12 11.0101C12.0022 10.7483 11.9016 10.4961 11.7197 10.3078ZM2.02697 5.02256C2.02697 4.43009 2.20266 3.85092 2.53182 3.3583C2.86098 2.86568 3.32882 2.48172 3.8762 2.25499C4.42357 2.02827 5.02588 1.96894 5.60697 2.08453C6.18806 2.20011 6.72182 2.48542 7.14076 2.90436C7.5597 3.3233 7.845 3.85706 7.96059 4.43815C8.07618 5.01924 8.01685 5.62155 7.79012 6.16892C7.56339 6.71629 7.17944 7.18414 6.68682 7.5133C6.1942 7.84246 5.61503 8.01815 5.02256 8.01815C4.22808 8.01815 3.46614 7.70254 2.90436 7.14076C2.34257 6.57898 2.02697 5.81704 2.02697 5.02256Z"
                            fill="white"/>
                    </svg>
                </button>
            </form>
        </nav>

        <div class="container w-full mx-auto px-2 sm:px-4 md:px-8 lg:px-12">
            <div
                class="block sm:block md:block lg:grid xl:grid grid-cols-1 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-4">
                <div class="col-span-4 sm:col-span-1 md:col-span-1 lg:col-span-1 ">
                    <section class="mb-5 text-center">
                        <h3 class="MS-bold w-full bg-white p-3 uppercase">formation</h3>
                        <a href="#modal_formation" data-modal="1"
                           class="MS-js-modal MS-bold block w-full text-white bg-black uppercase p-3 cursor-pointer">
                            collège
                        </a>
                        <aside id="modal_formation" class="modal z-50 " style="display: none" aria-hidden="true"
                               role="dialog" aria-labelledby="titleModal">
                            <div
                                class="MS-js-modal-stop modal-wrapper z-50 h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">
                                {{--                                <button class="MS-js-modal-close">close</button>--}}
                                <div class="flex items-center">
                                    <div
                                        class="flex w-10/12 h-auto py-3  text-2xl font-bold">
                                        Sélèctionner une formation
                                    </div>
                                    <div class="MS-js-modal-close flex w-1/12 h-auto justify-center cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </div>
                                </div>
                                <section class="flex flex-row flex-wrap mx-auto">
                                    <!-- Card Component -->
                                    <div class="transition-all duration-150 flex w-full px-4 py-6 md:w-1/2 lg:w-1/3">
                                        <div
                                            class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl">
                                            <div class="md:flex-shrink-0">
                                                <img
                                                    src="https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder-1024x512.png"
                                                    alt="Blog Cover"
                                                    class="object-fill w-full rounded-lg rounded-b-none md:h-56">
                                            </div>
                                            <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
        <span class="text-xs font-medium text-blue-600 uppercase">
          Web Programming
        </span>
                                                <div class="flex flex-row items-center">
                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                        </svg>
                                                        <span>1.5k</span>
                                                    </div>

                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                                        </svg>
                                                        <span>25</span>
                                                    </div>

                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                        </svg>
                                                        <span>7</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="border-gray-300">
                                            <div
                                                class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                                                <a href="#" class="hover:underline">
                                                    <h2 class="text-2xl font-bold tracking-normal text-gray-800">
                                                        Ho to Yawn in 7 Days
                                                    </h2>
                                                </a>
                                            </div>
                                            <hr class="border-gray-300">
                                            <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify text-gray-700">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, magni
                                                fugiat, odit incidunt necessitatibus aut nesciunt exercitationem aliquam
                                                id voluptatibus quisquam maiores officia sit amet accusantium aliquid
                                                quo obcaecati quasi.
                                            </p>
                                            <hr class="border-gray-300">
                                            <section class="px-4 py-2 mt-2">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center flex-1">
                                                        <img class="object-cover h-10 rounded-full"
                                                             src="https://thumbs.dreamstime.com/b/default-avatar-photo-placeholder-profile-icon-eps-file-easy-to-edit-default-avatar-photo-placeholder-profile-icon-124557887.jpg"
                                                             alt="Avatar">
                                                        <div class="flex flex-col mx-2">
                                                            <a href=""
                                                               class="font-semibold text-gray-700 hover:underline">
                                                                Fajrian Aidil Pratama
                                                            </a>
                                                            <span class="mx-1 text-xs text-gray-600">28 Sep 2020</span>
                                                        </div>
                                                    </div>
                                                    <p class="mt-1 text-xs text-gray-600">9 minutes read</p>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!-- Card Component -->
                                    <div class="transition-all duration-150 flex w-full px-4 py-6 md:w-1/2 lg:w-1/3">
                                        <div
                                            class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl">
                                            <div class="md:flex-shrink-0">
                                                <img
                                                    src="https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder-1024x512.png"
                                                    alt="Blog Cover"
                                                    class="object-fill w-full rounded-lg rounded-b-none md:h-56">
                                            </div>
                                            <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
        <span class="text-xs font-medium text-blue-600 uppercase">
          Web Programming
        </span>
                                                <div class="flex flex-row items-center">
                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                        </svg>
                                                        <span>1.5k</span>
                                                    </div>

                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                                        </svg>
                                                        <span>25</span>
                                                    </div>

                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                        </svg>
                                                        <span>7</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="border-gray-300">
                                            <div
                                                class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                                                <a href="#" class="hover:underline">
                                                    <h2 class="text-2xl font-bold tracking-normal text-gray-800">
                                                        Ho to Yawn in 7 Days
                                                    </h2>
                                                </a>
                                            </div>
                                            <hr class="border-gray-300">
                                            <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify text-gray-700">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, magni
                                                fugiat, odit incidunt necessitatibus aut nesciunt exercitationem aliquam
                                                id voluptatibus quisquam maiores officia sit amet accusantium aliquid
                                                quo obcaecati quasi.
                                            </p>
                                            <hr class="border-gray-300">
                                            <section class="px-4 py-2 mt-2">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center flex-1">
                                                        <img class="object-cover h-10 rounded-full"
                                                             src="https://thumbs.dreamstime.com/b/default-avatar-photo-placeholder-profile-icon-eps-file-easy-to-edit-default-avatar-photo-placeholder-profile-icon-124557887.jpg"
                                                             alt="Avatar">
                                                        <div class="flex flex-col mx-2">
                                                            <a href=""
                                                               class="font-semibold text-gray-700 hover:underline">
                                                                Fajrian Aidil Pratama
                                                            </a>
                                                            <span class="mx-1 text-xs text-gray-600">28 Sep 2020</span>
                                                        </div>
                                                    </div>
                                                    <p class="mt-1 text-xs text-gray-600">9 minutes read</p>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!-- Card Component -->
                                    <div class="transition-all duration-150 flex w-full px-4 py-6 md:w-1/2 lg:w-1/3">
                                        <div
                                            class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl">
                                            <div class="md:flex-shrink-0">
                                                <img
                                                    src="https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder-1024x512.png"
                                                    alt="Blog Cover"
                                                    class="object-fill w-full rounded-lg rounded-b-none md:h-56">
                                            </div>
                                            <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
        <span class="text-xs font-medium text-blue-600 uppercase">
          Web Programming
        </span>
                                                <div class="flex flex-row items-center">
                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                        </svg>
                                                        <span>1.5k</span>
                                                    </div>

                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                                        </svg>
                                                        <span>25</span>
                                                    </div>

                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                        </svg>
                                                        <span>7</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="border-gray-300">
                                            <div
                                                class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                                                <a href="#" class="hover:underline">
                                                    <h2 class="text-2xl font-bold tracking-normal text-gray-800">
                                                        Ho to Yawn in 7 Days
                                                    </h2>
                                                </a>
                                            </div>
                                            <hr class="border-gray-300">
                                            <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify text-gray-700">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, magni
                                                fugiat, odit incidunt necessitatibus aut nesciunt exercitationem aliquam
                                                id voluptatibus quisquam maiores officia sit amet accusantium aliquid
                                                quo obcaecati quasi.
                                            </p>
                                            <hr class="border-gray-300">
                                            <section class="px-4 py-2 mt-2">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center flex-1">
                                                        <img class="object-cover h-10 rounded-full"
                                                             src="https://thumbs.dreamstime.com/b/default-avatar-photo-placeholder-profile-icon-eps-file-easy-to-edit-default-avatar-photo-placeholder-profile-icon-124557887.jpg"
                                                             alt="Avatar">
                                                        <div class="flex flex-col mx-2">
                                                            <a href=""
                                                               class="font-semibold text-gray-700 hover:underline">
                                                                Fajrian Aidil Pratama
                                                            </a>
                                                            <span class="mx-1 text-xs text-gray-600">28 Sep 2020</span>
                                                        </div>
                                                    </div>
                                                    <p class="mt-1 text-xs text-gray-600">9 minutes read</p>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!-- Card Component -->
                                    <div class="transition-all duration-150 flex w-full px-4 py-6 md:w-1/2 lg:w-1/3">
                                        <div
                                            class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl">
                                            <div class="md:flex-shrink-0">
                                                <img
                                                    src="https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder-1024x512.png"
                                                    alt="Blog Cover"
                                                    class="object-fill w-full rounded-lg rounded-b-none md:h-56">
                                            </div>
                                            <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
        <span class="text-xs font-medium text-blue-600 uppercase">
          Web Programming
        </span>
                                                <div class="flex flex-row items-center">
                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                        </svg>
                                                        <span>1.5k</span>
                                                    </div>

                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                                        </svg>
                                                        <span>25</span>
                                                    </div>

                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                        </svg>
                                                        <span>7</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="border-gray-300">
                                            <div
                                                class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                                                <a href="#" class="hover:underline">
                                                    <h2 class="text-2xl font-bold tracking-normal text-gray-800">
                                                        Ho to Yawn in 7 Days
                                                    </h2>
                                                </a>
                                            </div>
                                            <hr class="border-gray-300">
                                            <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify text-gray-700">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, magni
                                                fugiat, odit incidunt necessitatibus aut nesciunt exercitationem aliquam
                                                id voluptatibus quisquam maiores officia sit amet accusantium aliquid
                                                quo obcaecati quasi.
                                            </p>
                                            <hr class="border-gray-300">
                                            <section class="px-4 py-2 mt-2">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center flex-1">
                                                        <img class="object-cover h-10 rounded-full"
                                                             src="https://thumbs.dreamstime.com/b/default-avatar-photo-placeholder-profile-icon-eps-file-easy-to-edit-default-avatar-photo-placeholder-profile-icon-124557887.jpg"
                                                             alt="Avatar">
                                                        <div class="flex flex-col mx-2">
                                                            <a href=""
                                                               class="font-semibold text-gray-700 hover:underline">
                                                                Fajrian Aidil Pratama
                                                            </a>
                                                            <span class="mx-1 text-xs text-gray-600">28 Sep 2020</span>
                                                        </div>
                                                    </div>
                                                    <p class="mt-1 text-xs text-gray-600">9 minutes read</p>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!-- Card Component -->
                                    <div class="transition-all duration-150 flex w-full px-4 py-6 md:w-1/2 lg:w-1/3">
                                        <div
                                            class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl">
                                            <div class="md:flex-shrink-0">
                                                <img
                                                    src="https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder-1024x512.png"
                                                    alt="Blog Cover"
                                                    class="object-fill w-full rounded-lg rounded-b-none md:h-56">
                                            </div>
                                            <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
        <span class="text-xs font-medium text-blue-600 uppercase">
          Web Programming
        </span>
                                                <div class="flex flex-row items-center">
                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                        </svg>
                                                        <span>1.5k</span>
                                                    </div>

                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                                        </svg>
                                                        <span>25</span>
                                                    </div>

                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                        </svg>
                                                        <span>7</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="border-gray-300">
                                            <div
                                                class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                                                <a href="#" class="hover:underline">
                                                    <h2 class="text-2xl font-bold tracking-normal text-gray-800">
                                                        Ho to Yawn in 7 Days
                                                    </h2>
                                                </a>
                                            </div>
                                            <hr class="border-gray-300">
                                            <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify text-gray-700">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, magni
                                                fugiat, odit incidunt necessitatibus aut nesciunt exercitationem aliquam
                                                id voluptatibus quisquam maiores officia sit amet accusantium aliquid
                                                quo obcaecati quasi.
                                            </p>
                                            <hr class="border-gray-300">
                                            <section class="px-4 py-2 mt-2">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center flex-1">
                                                        <img class="object-cover h-10 rounded-full"
                                                             src="https://thumbs.dreamstime.com/b/default-avatar-photo-placeholder-profile-icon-eps-file-easy-to-edit-default-avatar-photo-placeholder-profile-icon-124557887.jpg"
                                                             alt="Avatar">
                                                        <div class="flex flex-col mx-2">
                                                            <a href=""
                                                               class="font-semibold text-gray-700 hover:underline">
                                                                Fajrian Aidil Pratama
                                                            </a>
                                                            <span class="mx-1 text-xs text-gray-600">28 Sep 2020</span>
                                                        </div>
                                                    </div>
                                                    <p class="mt-1 text-xs text-gray-600">9 minutes read</p>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!-- Card Component -->
                                    <div class="transition-all duration-150 flex w-full px-4 py-6 md:w-1/2 lg:w-1/3">
                                        <div
                                            class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl">
                                            <div class="md:flex-shrink-0">
                                                <img
                                                    src="https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder-1024x512.png"
                                                    alt="Blog Cover"
                                                    class="object-fill w-full rounded-lg rounded-b-none md:h-56">
                                            </div>
                                            <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
        <span class="text-xs font-medium text-blue-600 uppercase">
          Web Programming
        </span>
                                                <div class="flex flex-row items-center">
                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                        </svg>
                                                        <span>1.5k</span>
                                                    </div>

                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                                        </svg>
                                                        <span>25</span>
                                                    </div>

                                                    <div
                                                        class="text-xs font-medium text-gray-500 flex flex-row items-center">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                        </svg>
                                                        <span>7</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="border-gray-300">
                                            <div
                                                class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                                                <a href="#" class="hover:underline">
                                                    <h2 class="text-2xl font-bold tracking-normal text-gray-800">
                                                        Ho to Yawn in 7 Days
                                                    </h2>
                                                </a>
                                            </div>
                                            <hr class="border-gray-300">
                                            <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify text-gray-700">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, magni
                                                fugiat, odit incidunt necessitatibus aut nesciunt exercitationem aliquam
                                                id voluptatibus quisquam maiores officia sit amet accusantium aliquid
                                                quo obcaecati quasi.
                                            </p>
                                            <hr class="border-gray-300">
                                            <section class="px-4 py-2 mt-2">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center flex-1">
                                                        <img class="object-cover h-10 rounded-full"
                                                             src="https://thumbs.dreamstime.com/b/default-avatar-photo-placeholder-profile-icon-eps-file-easy-to-edit-default-avatar-photo-placeholder-profile-icon-124557887.jpg"
                                                             alt="Avatar">
                                                        <div class="flex flex-col mx-2">
                                                            <a href=""
                                                               class="font-semibold text-gray-700 hover:underline">
                                                                Fajrian Aidil Pratama
                                                            </a>
                                                            <span class="mx-1 text-xs text-gray-600">28 Sep 2020</span>
                                                        </div>
                                                    </div>
                                                    <p class="mt-1 text-xs text-gray-600">9 minutes read</p>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </aside>
                    </section>
                    <section class="mb-5 text-center">
                        <h3 class="MS-bold w-full bg-white p-3 uppercase">niveau</h3>
                        <div class="MS-bold w-full uppercase p-3 cursor-pointer">
                            <form action="#">
                                <div class="bg-gray-200">
                                    <div class="flex flex-col items-center justify-center">
                                        <div class="flex flex-col">
                                            <label class="inline-flex items-center mt-3">
                                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600"
                                                       checked>
                                                <span class="ml-2 text-gray-700">3eme</span>
                                            </label>
                                            <label class="inline-flex items-center mt-3">
                                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                                <span class="ml-2 text-gray-700">4eme</span>
                                            </label>
                                            <label class="inline-flex items-center mt-3">
                                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                                <span class="ml-2 text-gray-700">5eme</span>
                                            </label>
                                            <label class="inline-flex items-center mt-3">
                                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                                <span class="ml-2 text-gray-700">6eme</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    <section class="mb-5 text-center">
                        <h3 class="MS-bold w-full bg-white p-3 uppercase">programe</h3>
                        <div class="w-full uppercase p-3">
                            pas de programme trouvé.
                        </div>
                    </section>
                </div>

                <div class="flex flex-col grid-cols-1 sm:col-span-3 md:col-span-3 lg:col-span-3">
                    <div class="flex mb-4 items-center justify-between bg-white">
                        <div class="flex h-full items-center justify-center w-7">
                            <a href="#"><i class="fas fa-chevron-left"></i></a>
                        </div>
                        <nav
                            class="MS-item__matiere flex-1 bg-white flex items-center relative overflow-hidden text-center">
                            <a href="#" class="w-full py-4">Mathematiques</a>
                            <a href="#" class="w-full py-4">Histoire</a>
                            <a href="#" class="w-full py-4">Géographe</a>
                            <a href="#" class="w-full py-4">Géographe</a>
                            <a href="#" class="w-full py-4">Géographe</a>
                            <a href="#" class="w-full py-4">Géographe</a>
                            <a href="#" class="w-full py-4">Physique</a>
                            <a href="#" class="w-full py-4">Chimie</a>
                            <div class="bar"></div>
                        </nav>
                        <div class="flex h-full items-center justify-center w-7">
                            <a href="#" class="bg-white"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3 gap-4 px-2 xl:px-0 md:px-0">
                        @foreach($datas as $course)
{{--                            <article class="bg-white rounded">--}}
{{--                                <header class="flex p-2">--}}
{{--                                    <div class="flex-1">--}}
{{--                                        <h4 class="MS-bold">{{ $course->name }}</h4>--}}
{{--                                        <small>name du prof</small>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex flex-col justify-center items-center ml-2">--}}
{{--                                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none"--}}
{{--                                             xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                                                  d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0Z"--}}
{{--                                                  fill="black" fill-opacity="0.87"/>--}}
{{--                                        </svg>--}}
{{--                                        <small>favoris</small>--}}
{{--                                    </div>--}}
{{--                                </header>--}}
{{--                                <div class="relative">--}}
{{--                                    <img class="w-full" src="{{ $course->image }}" alt="">--}}
{{--                                    <div class="like">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="MS-content__article min-h-4 p-3 pt-5">--}}
{{--                                    {{ $course->description }}--}}
{{--                                </div>--}}
{{--                                <footer class="flex justify-between p-4">--}}
{{--                                    <a href="#">LIRE</a>--}}
{{--                                    <div class="flex overflow-hidden">--}}
{{--                                        <img class="inline-block h-6 w-6 rounded-full text-white shadow-solid"--}}
{{--                                             src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"--}}
{{--                                             alt="">--}}
{{--                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid"--}}
{{--                                             src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"--}}
{{--                                             alt="">--}}
{{--                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid"--}}
{{--                                             src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"--}}
{{--                                             alt="">--}}
{{--                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid"--}}
{{--                                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"--}}
{{--                                             alt="">--}}
{{--                                    </div>--}}
{{--                                    {{ $course->like }} likes--}}
{{--                                </footer>--}}
{{--                            </article>--}}



                            <div class="transition-all duration-150 flex ">
                                <div
                                    class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl">
                                    <div class="md:flex-shrink-0">
                                        <img
                                            src="{{ $course->image }}"
                                            alt=""
                                            class="object-fill w-full rounded-lg rounded-b-none md:h-56">
                                    </div>
                                    <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
                                        <span class="text-xs font-medium text-blue-600 uppercase">
                                         Notes
                                        </span>
                                        <div class="flex flex-row items-center">
                                            <div
                                                class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                </svg>
                                                <span>1.5k</span>
                                            </div>

                                            <div
                                                class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                                </svg>
                                                <span>25</span>
                                            </div>

                                            <div class="text-xs font-medium text-gray-500 flex flex-row items-center">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <span>{{ $course->like }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="border-gray-300">
                                    <div class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                                        <a href="#" class="hover:underline">
                                            <h2 class="text-3xl font-bold tracking-normal text-gray-800">
                                                {{ $course->name }}
                                            </h2>
                                        </a>
                                    </div>
                                    <hr class="border-gray-300">
                                    <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify text-gray-700">
                                        {{ $course->description }}
                                    </p>
                                    <hr class="border-gray-300">
                                    <section class="px-4 py-2 mt-2">
                                        <div class="flex items-center justify-between">
                                            <div class="flex overflow-hidden">
                                                <img class="inline-block h-6 w-6 rounded-full text-white shadow-solid"
                                                     src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                     alt="">
                                                <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid"
                                                     src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                     alt="">
                                                <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid"
                                                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                                                     alt="">
                                                <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid"
                                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                     alt="">
                                            </div>
                                            <p class="mt-1 text-xs text-gray-600">9 minutes read</p>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        const like = document.querySelectorAll('.like');
        like.forEach(link => {
            let countLike = 0;
            link.addEventListener('click', () => {
                if (countLike === 0) {
                    link.classList.toggle('anim-like');
                    countLike = 1;
                    link.style.backgroundPosition = 'right';
                } else {
                    countLike = 0;
                    link.style.backgroundPosition = 'left';
                }
            });
            link.addEventListener('animationend', () => {
                link.classList.toggle('anim-like');
            })
        });
    </script>
    <script>
        let modal = null;
        const focusableSelector = 'button, a, input, textarea';
        let focusables = [];
        let previouslyFocusedElement = null;
        const openModal = function (e) {
            e.preventDefault();
            e.stopPropagation();
            modal = document.querySelector(e.target.getAttribute('href'));
            focusables = Array.from(modal.querySelectorAll(focusableSelector));
            previouslyFocusedElement = document.querySelector(':focus');
            modal.style.display = null;
            focusables[0].focus();
            modal.removeAttribute('aria-hidden');
            modal.setAttribute('aria-modal', 'true');
            modal.addEventListener('click', closeModal);
            modal.querySelector('.MS-js-modal-close').addEventListener('click', closeModal);
            modal.querySelector('.MS-js-modal-stop').addEventListener('click', stopPropagation);
        };

        const closeModal = function (e) {
            if (modal === null) return
            if (previouslyFocusedElement !== null) {
                previouslyFocusedElement.focus()
            }
            e.preventDefault();
            e.stopPropagation();
            window.setTimeout(function () {
                modal.style.display = "none";
                modal = null;
            }, 500);
            // modal.style.display = "none";
            modal.setAttribute('aria-hidden', 'true');
            modal.removeAttribute('aria-modal');
            modal.removeEventListener('click', closeModal);
            modal.querySelector('.MS-js-modal-close').removeEventListener('click', closeModal)
            modal.querySelector('.MS-js-modal-stop').removeEventListener('click', stopPropagation);
            // modal = null;
        };

        const stopPropagation = function (e) {
            e.stopPropagation()
        };

        const focusInModal = function (e) {
            e.preventDefault();
            let index = focusables.findIndex(f => f === modal.querySelector(':focus'))
            if (e.shitkey === true) {
                index--;
            } else {
                index++;
            }
            if (index >= focusables.length) {
                index = 0
            }
            if (index < 0) {
                index = focusables.length - 1
            }
            focusables[index].focus()
        };

        document.querySelectorAll('.MS-js-modal').forEach(a => {
            a.addEventListener('click', openModal)
        });
        window.addEventListener('keydown', function (e) {
            if (e.key === "Escape" || e.key === "Esc") {
                closeModal(e)
            }
            if (e.key === "Tab" && modal != null) {
                focusInModal(e);
            }
        })
    </script>
@endsection
