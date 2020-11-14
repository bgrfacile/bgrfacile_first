@extends('layouts.front')

@section('baniere')
    @include('layouts.partials.baniere_profil')
@endsection

@section('content')
    <div class="flex container w-11/12 px-4 mx-auto min-h-screen mt-5">
        <div class="w-64 px-8 py-4 bg-gray-100 border-r overflow-auto">
            <nav class="mt-8">
                <div class="mt-2 -mx-3">
                    <a href="#"
                       class="flex justify-between items-center px-3 py-2 bg-gray-200 rounded-lg">
                        <span class="text-sm font-medium text-gray-900 ">
                            Tableau de bord
                        </span>
                    </a>
                    <a href="#" class="flex justify-between items-center px-3 py-2 rounded-lg">
                                            <span class="text-sm font-medium text-gray-700 ">
                                                messagerie
                                            </span>
                        <span class="text-xs font-semibold text-gray-700 ">22</span>
                    </a>
                    {{--                    <a href="#" class="flex justify-between items-center px-3 py-2 rounded-lg">--}}
                    {{--                        <span class="text-sm font-medium text-gray-700 ">--}}
                    {{--                            Brouillant--}}
                    {{--                        </span>--}}
                    {{--                        <span class="text-xs font-semibold text-gray-700 ">12</span>--}}
                    {{--                    </a>--}}
                </div>
            </nav>
        </div>
        <div class="flex-1 min-w-0 bg-white flex flex-col">
            {{--            header--}}
            <div class="flex-shrink-0 border-b-2 border-gray-200">
                <header class="px-6">
                    <div class="flex justify-between items-center py-2">
                        <div class="flex">
                            <h2 class="text-2xl font-semibold text-gray-900 leading-tight">Ma messagerie</h2>
                        </div>
{{--                        <div class="flex">--}}
{{--                            <a href="#"--}}
{{--                               class="ml-5 flex items-center pl-2 pr-4 py-3 text-sm font-medium text-white bg-blue-800 rounded hover:bg-blue-700">--}}
{{--                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">--}}
{{--                                    <path stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
{{--                                          d="M12 7v10m5-5H7"></path>--}}
{{--                                </svg>--}}
{{--                                <span class="ml-1">New exercice</span>--}}

{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </header>
            </div>

            {{--            contenues--}}
            <div class="flex-1 overflow-auto">
                <div class="flex flex-1">
                    <div class="flex-1 flex">
                        <div class="w-64 md:w-2/5 lg:w-2/6 bg-white border-r border-gray-300 hidden md:block absolute z-50 md:static h-full shadow-2xl md:shadow-none">
                            <div class="p-4 space-y-4">
                                <div class="text-sm flex items-center space-x-2"><img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/300?=1">
                                    <div>
                                        <div class="font-semibold text-gray-700">Solaiman Kmail</div>
                                        <div class="truncate text-gray-500 w-40">Hard Work + Dream + Dedication = Success. ...</div>
                                    </div>
                                </div>
                                <div class="p-0 relative text-gray-500"><input class="w-full bg-gray-200 p-1 pl-2 rounded-md text-sm" type="text" placeholder="Search messages">
                                    <svg class="w-5 absolute top-0 right-0 mt-1 mr-3" viewBox="0 0 512 512">
                                        <defs></defs>
                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                    </svg></div>
                            </div>
                            <div class="bg-gray-300 h-px"></div>
                            <div class="divide-y divide-gray-200">
                                <div class="p-4 text-sm flex items-center space-x-2">
                                    <div class="relative"><img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/300?=1">
                                        <div class="w-3 h-3 rounded-full border-2 border-white absolute bottom-0 right-0 bg-green-500"></div>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-700">Solaiman Kmail</div>
                                        <div class="truncate text-gray-500 w-40">Hard Work + Dream + Dedication = Success. ...</div>
                                    </div>
                                </div>
                                <div class="p-4 text-sm flex items-center space-x-2 bg-gray-100">
                                    <div class="relative"><img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/300?=2">
                                        <div class="w-3 h-3 rounded-full border-2 border-white absolute bottom-0 right-0 bg-red-600"></div>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-700">Mohammad Karmi</div>
                                        <div class="truncate text-gray-500 w-40">What happened to the task</div>
                                    </div>
                                </div>
                                <div class="p-4 text-sm flex items-center space-x-2">
                                    <div class="relative"><img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/300?3">
                                        <div class="w-3 h-3 rounded-full border-2 border-white absolute bottom-0 right-0 bg-gray-400"></div>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-700">Qays Inad</div>
                                        <div class="truncate text-gray-500 w-40">😂😂😂😂</div>
                                    </div>
                                </div>
                                <div class="p-4 text-sm flex items-center space-x-2">
                                    <div class="relative"><img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/300?=4">
                                        <div class="w-3 h-3 rounded-full border-2 border-white absolute bottom-0 right-0 bg-orange-400"></div>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-700">Ala rahib</div>
                                        <div class="truncate text-gray-500 w-40">Hard Work + Dream + Dedication = Success. ...</div>
                                    </div>
                                </div>
                                <div class="p-4 text-sm flex items-center space-x-2">
                                    <div class="relative"><img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/300?=6">
                                        <div class="w-3 h-3 rounded-full border-2 border-white absolute bottom-0 right-0 bg-orange-400"></div>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-700">Mustafa Hamouz</div>
                                        <div class="truncate text-gray-500 w-40">Hard Work + Dream + Dedication = Success. ...</div>
                                    </div>
                                </div>
                                <div class="p-4 text-sm flex items-center space-x-2">
                                    <div class="relative"><img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/300?=6">
                                        <div class="w-3 h-3 rounded-full border-2 border-white absolute bottom-0 right-0 bg-orange-400"></div>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-700">Solaiman Kmail</div>
                                        <div class="truncate text-gray-500 w-40">Hard Work + Dream + Dedication = Success. ...</div>
                                    </div>
                                </div>
                                <div class="p-4 text-sm flex items-center space-x-2">
                                    <div class="relative"><img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/300?=6">
                                        <div class="w-3 h-3 rounded-full border-2 border-white absolute bottom-0 right-0 bg-orange-400"></div>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-700">Solaiman Kmail</div>
                                        <div class="truncate text-gray-500 w-40">Hard Work + Dream + Dedication = Success. ...</div>
                                    </div>
                                </div>
                                <div class="p-4 text-sm flex items-center space-x-2">
                                    <div class="relative"><img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/300?=6">
                                        <div class="w-3 h-3 rounded-full border-2 border-white absolute bottom-0 right-0 bg-orange-400"></div>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-700">Solaiman Kmail</div>
                                        <div class="truncate text-gray-500 w-40">Hard Work + Dream + Dedication = Success. ...</div>
                                    </div>
                                </div>
                                <div class="p-4 text-sm flex items-center space-x-2">
                                    <div class="relative"><img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/300?=6">
                                        <div class="w-3 h-3 rounded-full border-2 border-white absolute bottom-0 right-0 bg-orange-400"></div>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-700">Solaiman Kmail</div>
                                        <div class="truncate text-gray-500 w-40">Hard Work + Dream + Dedication = Success. ...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 bg-white flex flex-col">
                            <div class="flex items-center justify-between p-4 border-b border-gray-300">
                                <div class="text-sm flex items-center space-x-2">
                                    <div class="relative"><img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/300?=2">
                                        <div class="w-3 h-3 rounded-full border-2 border-white absolute bottom-0 right-0 bg-green-500"></div>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-700">Mohammad Karmi</div>
                                        <div class="truncate text-gray-500 w-40">Last Seen 4 hours ago</div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4"><button class="flex items-center space-x-1 text-sm leading-none text-gray-600"><svg class="w-5 fill-current" viewBox="0 0 512 512">
                                            <defs></defs>
                                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                        </svg></button>
                                    <button class="flex items-center space-x-1 text-sm leading-none text-gray-600"><svg class="w-5 fill-current" viewBox="0 0 512 512">
                                            <defs></defs>
                                            <path d="M451 374c-15.88-16-54.34-39.35-73-48.76-24.3-12.24-26.3-13.24-45.4.95-12.74 9.47-21.21 17.93-36.12 14.75s-47.31-21.11-75.68-49.39-47.34-61.62-50.53-76.48 5.41-23.23 14.79-36c13.22-18 12.22-21 .92-45.3-8.81-18.9-32.84-57-48.9-72.8C119.9 44 119.9 47 108.83 51.6A160.15 160.15 0 0083 65.37C67 76 58.12 84.83 51.91 98.1s-9 44.38 23.07 102.64 54.57 88.05 101.14 134.49S258.5 406.64 310.85 436c64.76 36.27 89.6 29.2 102.91 23s22.18-15 32.83-31a159.09 159.09 0 0013.8-25.8C465 391.17 468 391.17 451 374z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                                        </svg></button>
                                    <button class="flex items-center space-x-1 text-sm leading-none text-gray-600"><svg class="w-5 fill-current stroke-current stroke-2" viewBox="0 0 512 512">
                                            <defs></defs>
                                            <path fill="none" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="32" d="M256 112v288m144-144H112"></path>
                                        </svg></button>
                                    <div class="relative"><button class="flex items-center space-x-1 text-sm leading-none text-gray-600"><svg class="w-5 fill-current stroke-current stroke-2" viewBox="0 0 24 24">
                                                <defs></defs>
                                                <circle cx="12" cy="12" r="1" fill="currentColor"></circle>
                                                <circle cx="12" cy="5" r="1" fill="currentColor"></circle>
                                                <circle cx="12" cy="19" r="1" fill="currentColor"></circle>
                                            </svg></button>
                                        <div class="bg-white w-48 absolute right-0 z-40 p-2 rounded shadow-sm border border-gray-300 mt-1"><a class="flex items-center text-gray-700 text-sm leading-none p-2 rounded space-x-2 hover:bg-gray-200">
                                                <div>Archive</div>
                                            </a>
                                            <a class="flex items-center text-gray-700 text-sm leading-none p-2 rounded space-x-2 hover:bg-gray-200">
                                                <div>Mute</div>
                                            </a>
                                            <div class="h-px bg-gray-300 my-1 -mx-2"></div>
                                            <a class="flex items-center text-gray-700 text-sm leading-none p-2 rounded space-x-2 hover:bg-gray-200"><svg class="w-5 fill-current stroke-current stroke-2 text-gray-500" viewBox="0 0 512 512">
                                                    <defs></defs>
                                                    <path fill="none" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="32" d="M256 112v288m144-144H112"></path>
                                                </svg>
                                                <div>Add People</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 p-4 flex flex-col space-y-4 overflow-auto">
                                <div class="flex">
                                    <div>
                                        <div class="bg-gray-200 p-4 pt-8 pl-8 rounded-lg max-w-sm text-gray-700 relative">
                                            <div class="absolute top-0 left-0 w-10 mt-4 -ml-4"><img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/300?=2">
                                                <div class="w-3 h-3 rounded-full border-2 border-white absolute bottom-0 right-0 bg-green-500"></div>
                                            </div>
                                            <div class="flex items-center text-xs text-gray-500 -mt-5 space-x-1"><svg class="w-4" viewBox="0 0 512 512">
                                                    <defs></defs>
                                                    <path fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="44" d="M465 127L241 384l-92-92m-9 93l-93-93m316-165L236 273"></path>
                                                </svg>
                                                <div>3:22pm</div>
                                            </div>
                                            <div>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <div>
                                        <div class="bg-blue-500 p-4 pt-8 pr-8 rounded-lg max-w-sm text-blue-100 relative">
                                            <div class="flex items-center text-xs text-blue-100 -mt-5 mr-10">
                                                <div>3:44pm</div>
                                            </div>
                                            <div>ok</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <div></div>
                                </div>
                                <div class="flex p-0">
                                    <div>
                                        <div class="bg-gray-200 p-4 pt-8 pl-8 rounded-lg max-w-sm text-gray-700 relative">
                                            <div class="absolute top-0 left-0 w-10 mt-4 -ml-4"><img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/300?=2">
                                                <div class="w-3 h-3 rounded-full border-2 border-white absolute bottom-0 right-0 bg-green-500"></div>
                                            </div>
                                            <div class="flex items-center text-xs text-gray-500 -mt-5 space-x-1"><svg class="w-4" viewBox="0 0 512 512">
                                                    <defs></defs>
                                                    <path fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="44" d="M465 127L241 384l-92-92m-9 93l-93-93m316-165L236 273"></path>
                                                </svg>
                                                <div>3:22pm</div>
                                            </div>
                                            <div>Looks good</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <div>
                                        <div class="bg-blue-500 p-4 pt-8 pr-8 rounded-lg max-w-sm text-blue-100 relative">
                                            <div class="flex items-center text-xs text-blue-100 -mt-5 mr-10">
                                                <div>3:44pm</div>
                                            </div>
                                            <div>yep 😅</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 flex items-center space-x-4 text-gray-500 border-t border-gray-300">
                                <div class="space-x-2 flex"><button><svg class="w-5" viewBox="0 0 512 512">
                                            <defs></defs>
                                            <path d="M456 64H56a24 24 0 00-24 24v336a24 24 0 0024 24h400a24 24 0 0024-24V88a24 24 0 00-24-24zm-124.38 64.2a48 48 0 11-43.42 43.42 48 48 0 0143.42-43.42zM76 416a12 12 0 01-12-12v-87.63L192.64 202l96.95 96.75L172.37 416zm372-12a12 12 0 01-12 12H217.63l149.53-149.53L448 333.84z" fill="currentColor"></path>
                                        </svg></button>
                                    <button><svg class="w-5" viewBox="0 0 512 512">
                                            <defs></defs>
                                            <path d="M216.08 192v143.85a40.08 40.08 0 0080.15 0l.13-188.55a67.94 67.94 0 10-135.87 0v189.82a95.51 95.51 0 10191 0V159.74" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"></path>
                                        </svg></button></div>
                                <div class="flex-1 relative"><input class="w-full bg-gray-200 p-2 rounded-full text-sm" type="text" placeholder="Reply ..."></div>
                                <div><button><svg class="w-6" viewBox="0 0 48 48">
                                            <defs></defs>
                                            <path d="M8 44h2V24H8c-2.2 0-4 1.8-4 4v12c0 2.2 1.8 4 4 4zm6 0h18.43c3.3 0 6.723-2.7 7.608-6l3.751-14c.884-3.3-1.092-6-4.392-6H32c-3 0-2.128-3-2.128-3l.924-3.448c.854-3.188-1.055-6.494-4.243-7.348A5.95 5.95 0 0025.01 4c-2.649 0-5.089 1.774-5.805 4.446L15.841 21s-.449 1.579-1.841 2.445V44z" fill="currentColor"></path>
                                        </svg></button></div>
                            </div>
                            <div class="text-gray-300 flex items-center justify-around md:hidden p-4 border-t border-gray-400"><button class="text-blue-400"><svg class="w-8" viewBox="0 0 24 24">
                                        <defs></defs>
                                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z" fill="currentColor"></path>
                                    </svg></button>
                                <button><svg class="w-8" viewBox="0 0 24 24">
                                        <defs></defs>
                                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" fill="currentColor"></path>
                                        <circle cx="9" cy="7" r="4" fill="currentColor"></circle>
                                        <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75" fill="currentColor"></path>
                                    </svg></button>
                                <button><svg class="w-8" viewBox="0 0 512 512">
                                        <defs></defs>
                                        <path d="M256 176a80 80 0 1080 80 80.24 80.24 0 00-80-80zm172.72 80a165.53 165.53 0 01-1.64 22.34l48.69 38.12a11.59 11.59 0 012.63 14.78l-46.06 79.52a11.64 11.64 0 01-14.14 4.93l-57.25-23a176.56 176.56 0 01-38.82 22.67l-8.56 60.78a11.93 11.93 0 01-11.51 9.86h-92.12a12 12 0 01-11.51-9.53l-8.56-60.78A169.3 169.3 0 01151.05 393L93.8 416a11.64 11.64 0 01-14.14-4.92L33.6 331.57a11.59 11.59 0 012.63-14.78l48.69-38.12A174.58 174.58 0 0183.28 256a165.53 165.53 0 011.64-22.34l-48.69-38.12a11.59 11.59 0 01-2.63-14.78l46.06-79.52a11.64 11.64 0 0114.14-4.93l57.25 23a176.56 176.56 0 0138.82-22.67l8.56-60.78A11.93 11.93 0 01209.94 26h92.12a12 12 0 0111.51 9.53l8.56 60.78A169.3 169.3 0 01361 119l57.2-23a11.64 11.64 0 0114.14 4.92l46.06 79.52a11.59 11.59 0 01-2.63 14.78l-48.69 38.12a174.58 174.58 0 011.64 22.66z" fill="currentColor"></path>
                                    </svg></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //sortable
        $(function () {
            $("#sortable").sortable({
                cancel: ".disable"
            });
            $("#sortable").disableSelection();
        });
    </script>

@endsection
