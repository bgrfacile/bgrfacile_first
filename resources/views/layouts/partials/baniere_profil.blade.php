<link rel="stylesheet" type="text/css"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css"
      href="https://cdn.rawgit.com/shuvroroy/youtube-clone/883c8d9a/public/css/main.css">

<div class="bg-white font-sans">
    {{--        banner--}}
    {{--        <div class="bg-cover h-112">--}}
    {{--        </div>--}}
    <div class="-mt-1 bg-grey-lighter">
        <div class="container mx-auto">
            <div class="flex justify-between items-center py-4 px-16">
                <div class="flex items-center">
                    <img class="w-24 h-24 rounded-full"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="channel_logo">
                    <div class="ml-6">
                        <div class="text-2xl font-normal flex items-center">
                            <span class="mr-2">{{ auth()->user()->name }}</span>
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
                           class="hover:text-black">favoris</a>
                    </li>
                    <li class="text-center py-3 px-8">
                        <a href="{{ route('my_course') }}"
                           class="hover:text-black">Mes cours</a>
                    </li>
                    <li class="text-center py-3 px-8">
                        <a href="{{ route('profil.ecole') }}"
                           class="hover:text-black">votre école</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
