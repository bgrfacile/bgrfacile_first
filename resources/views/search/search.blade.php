@extends('layouts.front')

@section('content')
{{--    <div class="max-w-screen-xl mx-auto pt-8 pb-16 sm:pt-8 sm:pb-20 px-4 sm:px-6 lg:pt-8 lg:pb-28 lg:px-8">--}}
{{--        <div class="flex">--}}
{{--            <h2 class="text-3xl leading-9 font-extrabold text-gray-900">--}}
{{--                Recherche--}}
{{--            </h2>--}}
{{--            <div class="inline-flex border rounded w-full px-2 lg:px-6 h-12 bg-transparent">--}}
{{--                <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">--}}
{{--                    <div class="flex">--}}
{{--                                    <span--}}
{{--                                        class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">--}}
{{--                                        <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18"--}}
{{--                                             fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path--}}
{{--                                                d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z"--}}
{{--                                                stroke="#455A64" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                            <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64"--}}
{{--                                                  stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        </svg>--}}
{{--                                    </span>--}}
{{--                    </div>--}}
{{--                    <input type="text"--}}
{{--                           class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs lg:text-xs lg:text-base text-gray-500 font-thin"--}}
{{--                           placeholder="Search">--}}
{{--                    <div class="flex justify-center">--}}
{{--                        <button class="p-2 border w-1/4 rounded-md bg-gray-800 text-white">Search</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="mt-6 border-t-2 border-gray-100 pt-10 flex">--}}
{{--            <div>--}}
{{--                aside--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                content--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="bg-grey-lighter font-wp-pusher antialiased mt-6 border-t-2 border-gray-100 pt-10 flex">--}}
{{--            <div class="checkout max-w-wp-pusher mx-auto">--}}
{{--                <div class="panel flex flex-col md:flex-row mb-8 shadow-lg">--}}
{{--                    <div class="panel-right w-full md:w-1/3 bg-blue-wp-pusher text-white rounded-r bg-blue-600">--}}
{{--                        <nav id="nav" class="w-56 relative"><span class="absolute h-10 w-full bg-white rounded-lg shadow ease-out transition-transform transition-medium" style="transform: translateY(calc(300%));"></span> <ul class="relative"><li><button type="button" class="py-2 px-3 w-full flex items-center focus:outline-none focus-visible:underline"><svg viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 transition-all ease-out transition-medium text-gray-500"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.707 2.293a1 1 0 00-1.414 0l-9 9a1 1 0 101.414 1.414L4 12.414V21a1 1 0 001 1h5a1 1 0 001-1v-6h2v6a1 1 0 001 1h5a1 1 0 001-1v-8.586l.293.293a1 1 0 001.414-1.414l-9-9zM18 10.414l-6-6-6 6V20h3v-6a1 1 0 011-1h4a1 1 0 011 1v6h3v-9.586z"></path></svg> <span class="ml-2 text-sm font-medium transition-all ease-out transition-medium text-gray-700">--}}
{{--                        Home--}}
{{--                      </span></button></li> <li><button type="button" class="py-2 px-3 w-full flex items-center focus:outline-none focus-visible:underline"><svg viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 transition-all ease-out transition-medium text-gray-500"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.617 1.076a1 1 0 011.09.217l5.657 5.657a9 9 0 11-13.113.41A1 1 0 017 8.022v2.292a2 2 0 104 0V2a1 1 0 01.617-.924zM13 4.414v5.9A4 4 0 015.212 11.6 7 7 0 1016.95 8.364L13 4.414z"></path></svg> <span class="ml-2 text-sm font-medium transition-all ease-out transition-medium text-gray-700">--}}
{{--                        Popular--}}
{{--                      </span></button></li> <li><button type="button" class="py-2 px-3 w-full flex items-center focus:outline-none focus-visible:underline"><svg viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 transition-all ease-out transition-medium text-gray-500"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 7a1 1 0 011-1h8a1 1 0 011 1v8a1 1 0 11-2 0V8h-7a1 1 0 01-1-1z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M20.707 7.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0L9 12.414l-5.293 5.293a1 1 0 01-1.414-1.414l6-6a1 1 0 011.414 0L13 13.586l6.293-6.293a1 1 0 011.414 0z"></path></svg> <span class="ml-2 text-sm font-medium transition-all ease-out transition-medium text-gray-700">--}}
{{--                        Trending--}}
{{--                      </span></button></li> <li><button type="button" class="py-2 px-3 w-full flex items-center focus:outline-none focus-visible:underline" aria-selected="true"><svg viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 transition-all ease-out transition-medium text-blue-500"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 10a3 3 0 013-3h8a3 3 0 013 3v8a3 3 0 01-3 3h-8a3 3 0 01-3-3v-8zm3-1a1 1 0 00-1 1v8a1 1 0 001 1h8a1 1 0 001-1v-8a1 1 0 00-1-1h-8z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 110 2H6a1 1 0 00-1 1v10a1 1 0 11-2 0V6z"></path></svg> <span class="ml-2 text-sm font-medium transition-all ease-out transition-medium text-blue-500">--}}
{{--                        Subscriptions--}}
{{--                      </span></button></li> <li><button type="button" class="py-2 px-3 w-full flex items-center focus:outline-none focus-visible:underline"><svg viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 transition-all ease-out transition-medium text-gray-500"><path fill-rule="evenodd" clip-rule="evenodd" d="M4 5a3 3 0 013-3h10a3 3 0 013 3v16a1 1 0 01-1.447.894L12 18.618l-6.553 3.276A1 1 0 014 21V5zm3-1a1 1 0 00-1 1v14.382l5.553-2.776a1 1 0 01.894 0L18 19.382V5a1 1 0 00-1-1H7z"></path></svg> <span class="ml-2 text-sm font-medium transition-all ease-out transition-medium text-gray-700">--}}
{{--                        Bookmarks--}}
{{--                      </span></button></li> <li><button type="button" class="py-2 px-3 w-full flex items-center focus:outline-none focus-visible:underline"><svg viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 transition-all ease-out transition-medium text-gray-500"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 11.586l2.536 2.535a1 1 0 11-1.415 1.415l-2.828-2.829A.997.997 0 0111 12V8a1 1 0 112 0v3.586z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M5 1a1 1 0 011 1v1.998c3.918-2.945 9.506-2.635 13.071.93 3.905 3.906 3.905 10.238 0 14.143-3.905 3.905-10.237 3.905-14.142 0A9.972 9.972 0 012 12a1 1 0 112 0 8 8 0 101.777-5.029A1 1 0 014 6.341V2a1 1 0 011-1z"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.293 12.707A.997.997 0 0111 12V8a1 1 0 112 0v3.586l2.536 2.535a1 1 0 11-1.415 1.415l-2.828-2.829zM5.934 1.643A1 1 0 004 2v4.342a1 1 0 001.777.63A8 8 0 114 12v-.001a1 1 0 10-2 0c0 2.558.977 5.119 2.929 7.071 3.905 3.905 10.237 3.905 14.142 0 3.844-3.844 3.904-10.04.18-13.957A10.004 10.004 0 006 3.999V2a.998.998 0 00-.066-.357zM5 2.25z"></path></svg> <span class="ml-2 text-sm font-medium transition-all ease-out transition-medium text-gray-700">--}}
{{--                        History--}}
{{--                      </span></button></li></ul></nav>--}}
{{--                    </div>--}}
{{--                    contenue--}}
{{--                    <div class="panel-left w-full md:w-2/3 bg-white rounded-l">--}}
{{--                        <div class="p-4 flex flex-col justify-between leading-normal">--}}
{{--                            <div class="mb-3">--}}
{{--                                <div class="font-bold text-xl mb-2">Sasakala Sangkuriang jeung Gunung Tangkuban Perahu</div>--}}
{{--                                <p class="text-gray-700 text-base">Make kakuatan nana, akhirna sangkuriang nendang sampan parahu nu tos dijienna. Sampan parahu eta ngalayang jeung akhirna ragag dina hiji gunung nu ayena disebut “gunung tangkuban parahu.</p>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#sangkuriang</span>--}}
{{--                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#carita</span>--}}
{{--                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#sunda</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div id="bar" class="flex justify-center items-center min-h-screen w-full text-bold text-5xl" >
        Cette section est encours de construction.
    </div>
@endsection
