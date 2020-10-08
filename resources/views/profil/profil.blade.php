@extends('layouts.front')

@section('content')
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.rawgit.com/shuvroroy/youtube-clone/883c8d9a/public/css/main.css">
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
                        <button class="appearance-none px-3 py-2 bg-grey-light uppercase text-grey-darker text-sm mr-4">
                            Abonement actif
                        </button>
                        <span><i class="fa fa-bell fa-lg" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="px-16">
                    <ul class="list-reset flex">
                        <li class="text-center py-3 px-8 border-b-2 border-solid border-grey-dark"><a href="#"
                                                                                                      class="text-black">Home</a>
                        </li>
                        <li class="text-center py-3 px-8"><a href="#" class="hover:text-black">Videos</a></li>
                        <li class="text-center py-3 px-8"><a href="#" class="hover:text-black">Playlists</a></li>
                        <li class="text-center py-3 px-8"><a href="#" class="hover:text-black">Community</a></li>
                        <li class="text-center py-3 px-8"><a href="#" class="hover:text-black">Channels</a></li>
                        <li class="text-center py-3 px-8"><a href="{{ url('/profil/about') }}" class="hover:text-black">About</a></li>
                        <li class="text-center py-3 px-8"><i class="fa fa-search fa-lg text-grey-dark"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mx-auto flex">
            <div class="w-3/4 mx-16 py-6">
                <div class="border-b pb-8">
                    <div class="flex">
                        <div class="w-3/4 flex">
                            <div>
                                <img class="block w-full"
                                     src="https://i.ytimg.com/vi/Kcie9rbbb4s/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCbowulw74TtG_RM8mhfoyq3tya9A"
                                     alt="">
                            </div>
                            <div class="pl-4">
                                <p class="w-64 h-6 truncate text-sm font-medium mb-1">Habitual negative thoughts</p>
                                <p class="text-grey-darker text-xs">
                                    <span>Fun Fun Function</span>
                                    <span>&middot;</span>
                                    <span>7.5 views</span>
                                    <span>&middot;</span>
                                    <span>2 days ago</span>
                                </p>
                            </div>
                        </div>
                        <div class="w-1/4">
                            <div>
                                <img class="block w-100"
                                     src="https://i.ytimg.com/vi/TubVp9nn32Q/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAUxQM30HpBNOg3UpiPQUISQgwSlg"
                                     alt="">
                            </div>
                            <div>
                                <p class="text-sm font-medium my-2">TDD with Wallaby.js Part 2</p>
                                <p class="text-grey-darker text-xs mb-1">Fun Fun Function</p>
                                <p class="text-grey-darker text-xs">
                                    <span>186 views</span>
                                    <span>&middot;</span>
                                    <span>3 hours ago</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-b">
                    <h3 class="py-6 text-base font-medium">
                        Best of Fun Fun Function
                        <span class="uppercase ml-3 text-grey-dark">Play all</span>
                    </h3>
                    <div class="flex mb-4 relative">
                        <div
                            class="absolute w-10 h-10 rounded-full bg-white text-grey-dark text-center -mr-3 pin-r mt-8 shadow-md">
                            <i class="fa fa-chevron-right mt-3" aria-hidden="true"></i>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/BMUiFMZr7vk/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCBiAHMlgjlC5lAn12CO1GRPKYgPg"
                                    alt="">
                            </div>
                            <div class="mb-4">
                                <h4 class="text-sm font-medium">Higher-order functions - Part 1 of Functional
                                    Programming</h4>
                                <p class="mt-2 font-hairline text-sm text-grey-darker">
                                    Fun Fun Function
                                    <span
                                        class="w-3 h-3 text-white inline-block text-center rounded-full bg-grey-dark text-2xs">&#10003;</span>
                                </p>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    336K views &middot; 2 years ago
                                </p>
                                <p class="inline block p-1 text-grey-darker bg-grey-lighter font-hairline text-2xs">
                                    CC
                                </p>
                            </div>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/BMUiFMZr7vk/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCBiAHMlgjlC5lAn12CO1GRPKYgPg"
                                    alt="">
                            </div>
                            <div class="mb-4">
                                <h4 class="text-sm font-medium">Higher-order functions - Part 1 of Functional
                                    Programming</h4>
                                <p class="mt-2 font-hairline text-sm text-grey-darker">
                                    Fun Fun Function
                                    <span
                                        class="w-3 h-3 text-white inline-block text-center rounded-full bg-grey-dark text-2xs">&#10003;</span>
                                </p>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    336K views &middot; 2 years ago
                                </p>
                                <p class="inline block p-1 text-grey-darker bg-grey-lighter font-hairline text-2xs">
                                    CC
                                </p>
                            </div>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/BMUiFMZr7vk/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCBiAHMlgjlC5lAn12CO1GRPKYgPg"
                                    alt="">
                            </div>
                            <div class="mb-4">
                                <h4 class="text-sm font-medium">Higher-order functions - Part 1 of Functional
                                    Programming</h4>
                                <p class="mt-2 font-hairline text-sm text-grey-darker">
                                    Fun Fun Function
                                    <span
                                        class="w-3 h-3 text-white inline-block text-center rounded-full bg-grey-dark text-2xs">&#10003;</span>
                                </p>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    336K views &middot; 2 years ago
                                </p>
                                <p class="inline block p-1 text-grey-darker bg-grey-lighter font-hairline text-2xs">
                                    CC
                                </p>
                            </div>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/BMUiFMZr7vk/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCBiAHMlgjlC5lAn12CO1GRPKYgPg"
                                    alt="">
                            </div>
                            <div class="mb-4">
                                <h4 class="text-sm font-medium">Higher-order functions - Part 1 of Functional
                                    Programming</h4>
                                <p class="mt-2 font-hairline text-sm text-grey-darker">
                                    Fun Fun Function
                                    <span
                                        class="w-3 h-3 text-white inline-block text-center rounded-full bg-grey-dark text-2xs">&#10003;</span>
                                </p>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    336K views &middot; 2 years ago
                                </p>
                                <p class="inline block p-1 text-grey-darker bg-grey-lighter font-hairline text-2xs">
                                    CC
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-b">
                    <h3 class="py-6 text-base font-medium">
                        Uploads
                        <span class="uppercase ml-3 text-grey-dark">Play all</span>
                    </h3>
                    <div class="flex mb-4 relative">
                        <div
                            class="absolute w-10 h-10 rounded-full bg-white text-grey-dark text-center -mr-3 pin-r mt-8 shadow-md">
                            <i class="fa fa-chevron-right mt-3" aria-hidden="true"></i>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/C8p7rHwctAg/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDnbDWPH7Ef-OV7CVWii7v-0RuSBw"
                                    alt="">
                            </div>
                            <div class="mb-4 mt-1">
                                <h4 class="text-sm font-medium">Commit editor settings to version control? - Fun Fun
                                    Function</h4>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    5.3K views &middot; 4 days ago
                                </p>
                            </div>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/C8p7rHwctAg/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDnbDWPH7Ef-OV7CVWii7v-0RuSBw"
                                    alt="">
                            </div>
                            <div class="mb-4 mt-1">
                                <h4 class="text-sm font-medium">Commit editor settings to version control? - Fun Fun
                                    Function</h4>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    5.3K views &middot; 4 days ago
                                </p>
                            </div>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/C8p7rHwctAg/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDnbDWPH7Ef-OV7CVWii7v-0RuSBw"
                                    alt="">
                            </div>
                            <div class="mb-4 mt-1">
                                <h4 class="text-sm font-medium">Commit editor settings to version control? - Fun Fun
                                    Function</h4>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    5.3K views &middot; 4 days ago
                                </p>
                            </div>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/C8p7rHwctAg/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDnbDWPH7Ef-OV7CVWii7v-0RuSBw"
                                    alt="">
                            </div>
                            <div class="mb-4 mt-1">
                                <h4 class="text-sm font-medium">Commit editor settings to version control? - Fun Fun
                                    Function</h4>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    5.3K views &middot; 4 days ago
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-b">
                    <div class="py-6">
                        <h3 class="text-base font-medium">
                            MPJ's Musings
                            <span class="uppercase ml-3 text-grey-dark">Play all</span>
                        </h3>
                        <p class="text-sm font-normal text-grey-dark mt-2 leading-loose max-w-md">More "soft" episodes
                            about software, creativity, motivation, and career.</p>
                    </div>
                    <div class="flex mb-4 relative">
                        <div
                            class="absolute w-10 h-10 rounded-full bg-white text-grey-dark text-center -mr-3 pin-r mt-8 shadow-md">
                            <i class="fa fa-chevron-right mt-3" aria-hidden="true"></i>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/gXfOdwduXqY/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAUglms6KZMul1UMpuBfFPM5Ddocw"
                                    alt="">
                            </div>
                            <div class="mb-4">
                                <h4 class="text-sm font-medium">Why remote working is so hard</h4>
                                <p class="mt-2 font-hairline text-sm text-grey-darker">
                                    Fun Fun Function
                                    <span
                                        class="w-3 h-3 text-white inline-block text-center rounded-full bg-grey-dark text-2xs">&#10003;</span>
                                </p>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    20K views &middot; 2 months ago
                                </p>
                                <p class="inline block p-1 text-grey-darker bg-grey-lighter font-hairline text-2xs">
                                    CC
                                </p>
                            </div>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/gXfOdwduXqY/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAUglms6KZMul1UMpuBfFPM5Ddocw"
                                    alt="">
                            </div>
                            <div class="mb-4">
                                <h4 class="text-sm font-medium">Why remote working is so hard</h4>
                                <p class="mt-2 font-hairline text-sm text-grey-darker">
                                    Fun Fun Function
                                    <span
                                        class="w-3 h-3 text-white inline-block text-center rounded-full bg-grey-dark text-2xs">&#10003;</span>
                                </p>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    20K views &middot; 2 months ago
                                </p>
                                <p class="inline block p-1 text-grey-darker bg-grey-lighter font-hairline text-2xs">
                                    CC
                                </p>
                            </div>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/gXfOdwduXqY/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAUglms6KZMul1UMpuBfFPM5Ddocw"
                                    alt="">
                            </div>
                            <div class="mb-4">
                                <h4 class="text-sm font-medium">Why remote working is so hard</h4>
                                <p class="mt-2 font-hairline text-sm text-grey-darker">
                                    Fun Fun Function
                                    <span
                                        class="w-3 h-3 text-white inline-block text-center rounded-full bg-grey-dark text-2xs">&#10003;</span>
                                </p>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    20K views &middot; 2 months ago
                                </p>
                                <p class="inline block p-1 text-grey-darker bg-grey-lighter font-hairline text-2xs">
                                    CC
                                </p>
                            </div>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/gXfOdwduXqY/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAUglms6KZMul1UMpuBfFPM5Ddocw"
                                    alt="">
                            </div>
                            <div class="mb-4">
                                <h4 class="text-sm font-medium">Why remote working is so hard</h4>
                                <p class="mt-2 font-hairline text-sm text-grey-darker">
                                    Fun Fun Function
                                    <span
                                        class="w-3 h-3 text-white inline-block text-center rounded-full bg-grey-dark text-2xs">&#10003;</span>
                                </p>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    20K views &middot; 2 months ago
                                </p>
                                <p class="inline block p-1 text-grey-darker bg-grey-lighter font-hairline text-2xs">
                                    CC
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-b">
                    <div class="py-6">
                        <h3 class="text-base font-medium">
                            Functional programming in Javascript
                            <span class="uppercase ml-3 text-grey-dark">Play all</span>
                        </h3>
                        <p class="text-sm font-normal text-grey-dark mt-2 leading-loose max-w-md">This is a collection
                            of the videos from FunFunFunction that is specifically about functional programming in
                            JavaScript</p>
                    </div>
                    <div class="flex mb-4 relative">
                        <div
                            class="absolute w-10 h-10 rounded-full bg-white text-grey-dark text-center -mr-3 pin-r mt-8 shadow-md">
                            <i class="fa fa-chevron-right mt-3" aria-hidden="true"></i>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/BMUiFMZr7vk/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCBiAHMlgjlC5lAn12CO1GRPKYgPg"
                                    alt="">
                            </div>
                            <div class="mb-4">
                                <h4 class="text-sm font-medium">Higher-order functions - Part 1 of Functional
                                    Programming in JavaScript</h4>
                                <p class="mt-2 font-hairline text-sm text-grey-darker">
                                    Fun Fun Function
                                    <span
                                        class="w-3 h-3 text-white inline-block text-center rounded-full bg-grey-dark text-2xs">&#10003;</span>
                                </p>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    20K views &middot; 2 months ago
                                </p>
                                <p class="inline block p-1 text-grey-darker bg-grey-lighter font-hairline text-2xs">
                                    CC
                                </p>
                            </div>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/BMUiFMZr7vk/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCBiAHMlgjlC5lAn12CO1GRPKYgPg"
                                    alt="">
                            </div>
                            <div class="mb-4">
                                <h4 class="text-sm font-medium">Higher-order functions - Part 1 of Functional
                                    Programming in JavaScript</h4>
                                <p class="mt-2 font-hairline text-sm text-grey-darker">
                                    Fun Fun Function
                                    <span
                                        class="w-3 h-3 text-white inline-block text-center rounded-full bg-grey-dark text-2xs">&#10003;</span>
                                </p>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    20K views &middot; 2 months ago
                                </p>
                                <p class="inline block p-1 text-grey-darker bg-grey-lighter font-hairline text-2xs">
                                    CC
                                </p>
                            </div>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/BMUiFMZr7vk/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCBiAHMlgjlC5lAn12CO1GRPKYgPg"
                                    alt="">
                            </div>
                            <div class="mb-4">
                                <h4 class="text-sm font-medium">Higher-order functions - Part 1 of Functional
                                    Programming in JavaScript</h4>
                                <p class="mt-2 font-hairline text-sm text-grey-darker">
                                    Fun Fun Function
                                    <span
                                        class="w-3 h-3 text-white inline-block text-center rounded-full bg-grey-dark text-2xs">&#10003;</span>
                                </p>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    20K views &middot; 2 months ago
                                </p>
                                <p class="inline block p-1 text-grey-darker bg-grey-lighter font-hairline text-2xs">
                                    CC
                                </p>
                            </div>
                        </div>
                        <div class="flex-1 mr-1">
                            <div>
                                <img
                                    src="https://i.ytimg.com/vi/BMUiFMZr7vk/hqdefault.jpg?sqp=-oaymwEXCPYBEIoBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCBiAHMlgjlC5lAn12CO1GRPKYgPg"
                                    alt="">
                            </div>
                            <div class="mb-4">
                                <h4 class="text-sm font-medium">Higher-order functions - Part 1 of Functional
                                    Programming in JavaScript</h4>
                                <p class="mt-2 font-hairline text-sm text-grey-darker">
                                    Fun Fun Function
                                    <span
                                        class="w-3 h-3 text-white inline-block text-center rounded-full bg-grey-dark text-2xs">&#10003;</span>
                                </p>
                                <p class="mt-1 font-hairline text-xs text-grey-darker">
                                    20K views &middot; 2 months ago
                                </p>
                                <p class="inline block p-1 text-grey-darker bg-grey-lighter font-hairline text-2xs">
                                    CC
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/4 py-6">
                <div class="border-b">
                    <p class="text-grey-darker uppercase text-sm mb-6">Other channels I like</p>
                    <ul class="list-reset">
                        <li class="mb-6">
                        <span class="flex items-center mb-2">
                        <img class="w-6 h-6 rounded-full"
                             src="https://yt3.ggpht.com/-E0Ej_rdX5Ic/AAAAAAAAAAI/AAAAAAAAAAA/kskO1deXSNs/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"
                             alt="">
                        <span class="ml-2">Wes Bos</span>
                        </span>
                            <button class="appearance-none p-2 bg-grey-light uppercase text-grey-darker text-xs mr-4">
                                Subscribe
                            </button>
                        </li>
                        <li class="mb-6">
                        <span class="flex items-center mb-2">
                        <img class="w-6 h-6 rounded-full"
                             src="https://yt3.ggpht.com/-X6Szi46cleA/AAAAAAAAAAI/AAAAAAAAAAA/XJsGnNESQs8/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"
                             alt="">
                        <span class="ml-2">TheHappieCat</span>
                        </span>
                            <button class="appearance-none p-2 bg-grey-light uppercase text-grey-darker text-xs mr-4">
                                Subscribe
                            </button>
                        </li>
                        <li class="mb-6">
                        <span class="flex items-center mb-2">
                        <img class="w-6 h-6 rounded-full"
                             src="https://yt3.ggpht.com/-Lvqivbc77hw/AAAAAAAAAAI/AAAAAAAAAAA/YSd9RXOp_Ng/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"
                             alt="">
                        <span class="ml-2">Siraj Raval</span>
                        </span>
                            <button class="appearance-none p-2 bg-grey-light uppercase text-grey-darker text-xs mr-4">
                                Subscribe
                            </button>
                        </li>
                        <li class="mb-6">
                        <span class="flex items-center mb-2">
                        <img class="w-6 h-6 rounded-full"
                             src="https://yt3.ggpht.com/-1rYs64e24jQ/AAAAAAAAAAI/AAAAAAAAAAA/B2LPB2yW030/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"
                             alt="">
                        <span class="ml-2">The Coding Train</span>
                        </span>
                            <button class="appearance-none p-2 bg-grey-light uppercase text-grey-darker text-xs mr-4">
                                Subscribe
                            </button>
                        </li>
                        <li class="mb-6">
                        <span class="flex items-center mb-2">
                        <img class="w-6 h-6 rounded-full"
                             src="https://yt3.ggpht.com/-kHTbb6oDqmY/AAAAAAAAAAI/AAAAAAAAAAA/BHWd_jlJmJU/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"
                             alt="">
                        <span class="ml-2">sentdex</span>
                        </span>
                            <button class="appearance-none p-2 bg-grey-light uppercase text-grey-darker text-xs mr-4">
                                Subscribe
                            </button>
                        </li>
                        <li class="mb-6">
                        <span class="flex items-center mb-2">
                        <img class="w-6 h-6 rounded-full"
                             src="https://yt3.ggpht.com/-pX2m-odRVjo/AAAAAAAAAAI/AAAAAAAAAAA/kVOqkSiGTaA/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"
                             alt="">
                        <span class="ml-2">noopkat</span>
                        </span>
                            <button class="appearance-none p-2 bg-grey-light uppercase text-grey-darker text-xs mr-4">
                                Subscribe
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="py-6">
                    <p class="text-grey-darker uppercase text-sm mb-6">RELATED CHANNELS</p>
                    <ul class="list-reset">
                        <li class="mb-6">
                        <span class="flex items-center mb-2">
                        <img class="w-6 h-6 rounded-full"
                             src="https://yt3.ggpht.com/-5aj55jp4Jm8/AAAAAAAAAAI/AAAAAAAAAAA/aMg0g6GjNJ8/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"
                             alt="">
                        <span class="ml-2">DevTips</span>
                        </span>
                            <button class="appearance-none p-2 bg-grey-light uppercase text-grey-darker text-xs mr-4">
                                Subscribe
                            </button>
                        </li>
                        <li class="mb-6">
                        <span class="flex items-center mb-2">
                        <img class="w-6 h-6 rounded-full"
                             src="https://yt3.ggpht.com/-OsgBxXITFdg/AAAAAAAAAAI/AAAAAAAAAAA/gDaUV_aSb2Q/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"
                             alt="">
                        <span class="ml-2">Traversy Media</span>
                        </span>
                            <button class="appearance-none p-2 bg-grey-light uppercase text-grey-darker text-xs mr-4">
                                Subscribe
                            </button>
                        </li>
                        <li class="mb-6">
                        <span class="flex items-center mb-2">
                        <img class="w-6 h-6 rounded-full"
                             src="https://yt3.ggpht.com/--JVzzRDG2ME/AAAAAAAAAAI/AAAAAAAAAAA/Q-LECA0Cxb8/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"
                             alt="">
                        <span class="ml-2">The Net Ninja</span>
                        </span>
                            <button class="appearance-none p-2 bg-grey-light uppercase text-grey-darker text-xs mr-4">
                                Subscribe
                            </button>
                        </li>
                        <li class="mb-6">
                        <span class="flex items-center mb-2">
                        <img class="w-6 h-6 rounded-full"
                             src="https://yt3.ggpht.com/-yZnkNC2qlCU/AAAAAAAAAAI/AAAAAAAAAAA/qgA6rParUds/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"
                             alt="">
                        <span class="ml-2">Academind</span>
                        </span>
                            <button class="appearance-none p-2 bg-grey-light uppercase text-grey-darker text-xs mr-4">
                                Subscribe
                            </button>
                        </li>
                        <li class="mb-6">
                        <span class="flex items-center mb-2">
                        <img class="w-6 h-6 rounded-full"
                             src="https://yt3.ggpht.com/-9X-_QJu0RvQ/AAAAAAAAAAI/AAAAAAAAAAA/X3cPcZ5icto/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"
                             alt="">
                        <span class="ml-2">Google Chrome Developers</span>
                        </span>
                            <button class="appearance-none p-2 bg-grey-light uppercase text-grey-darker text-xs mr-4">
                                Subscribe
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
