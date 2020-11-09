<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "csrf-token" content = "{{csrf_token ()}}">

    <title>Bgrfacile</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Mitr|Roboto+Slab|Source+Sans+Pro&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @yield('ressourceCSS')

</head>
<body>
<div class="flex flex-col min-h-screen items-stretch">
    <header class="sticky top-0 bg-white">
        <nav x-data="{ open: false }"
             @keydown.window.escape="open = false"
             class="text-gray-800 shadow">
            <div
                class="container w-full mx-auto max-w-7xl px-2 relative">
                <div class="flex items-center justify-between h-16 relative">
                    <div class="flex items-center justify-between flex-1">
                        <div>
                            <a href="{{ url('/') }}" class="h-auto w-32 flex justify-center items-center mb-2">
                                <img class="h-full w-full " src="{{ asset('assets/images/BGRfacile3.png') }}"
                                     alt="logo de bgrfacile">
                            </a>
                        </div>

                        {{--liste pour grand ecran--}}
                        <div class="md:flex-1 flex justify-between">
                        <div class="hidden md:block">
                            <div class="ml-5 flex items-center space-x-4">
                                <a href="{{ url('/') }}"
                                   class="{{ Route::currentRouteNamed('home') ? 'bg-transparent flex px-3 py-2 text-sm font-bold text-blue-500':
                               'bg-transparent flex px-3 py-2 text-sm font-bold text-gray-500 hover:text-blue-500' }}">
                                    Accueil
                                </a>

                                <a href="{{ route('ecoles.index') }}"
                                   class="{{ Request::segment(1) === 'ecoles' ? 'bg-transparent flex px-3 py-2 text-sm font-bold text-blue-500':
                               'bg-transparent flex px-3 py-2 text-sm font-bold text-gray-500 hover:text-blue-500' }}">
                                    Écoles en ligne
                                </a>

                                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                    <button @click="open = !open"
                                            class="{{ Request::segment(1) === 'cours' ? 'bg-transparent flex items-center justify-center px-3 py-2 text-sm font-bold text-blue-500':
                               'bg-transparent flex items-center justify-center px-3 py-2 text-sm font-bold text-gray-500 hover:text-blue-500 hover:bg-gray-50' }}">
                                        <span>Contenus</span>
                                        <svg fill="currentColor" viewBox="0 0 20 20"
                                             :class="{'rotate-180': open, 'rotate-0': !open}"
                                             class="block w-4 h-4 ml-1 transition-transform duration-200 transform">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                         x-transition:enter-start="transform opacity-0 scale-95"
                                         x-transition:enter-end="transform opacity-100 scale-100"
                                         x-transition:leave="transition ease-in duration-75"
                                         x-transition:leave-start="transform opacity-100 scale-100"
                                         x-transition:leave-end="transform opacity-0 scale-95"
                                         class="absolute right-0 w-full mt-4 origin-top-right rounded-md shadow-lg md:w-48">
                                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                            <a href="{{ route('contenu.cours') }}"
                                               class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-blue-500 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                                Cours</a>
                                            <a href="{{ route('exercices.index') }}"
                                               class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-blue-500 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                                Exercices</a>
                                            <a href="{{ route('corriges.index') }}"
                                               class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-blue-500 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                                Corrigés</a>
                                            <a href="{{ route('astuces.index') }}"
                                               class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-blue-500 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                                Astuces</a>
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ route('qui-sommes-nous') }}"
                                   class="{{ Route::currentRouteNamed('qui-sommes-nous') ? 'bg-transparent flex px-3 py-2 text-sm font-bold text-blue-500':
                               'bg-transparent flex px-3 py-2 text-sm font-bold text-gray-500 hover:text-blue-500' }}">
                                    Qui sommes nous?
                                </a>

                            </div>
                        </div>
                        <button
                            class="p-1 border-2 border-transparent text-gray-500 rounded-full hover:text-blue-500 focus:outline-none focus:text-white focus:bg-gray-700"
                            aria-label="Notifications">
                            <a href="{{ route('search') }}">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none"
                                     viewBox="0 0 52.966 52.966">
                                    <path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
                                        c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
                                        C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
                                        S32.459,40,21.983,40z"/>

                                </svg>
                            </a>
                        </button>
                        </div>
                    </div>
                    {{--                contenue sur grand ecran--}}
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <!-- Profile dropdown -->
                            @auth
                                <div @click.away="open = false" class="mr-3 relative" x-data="{ open: false }">
                                    <div>
                                        <button @click="open = !open"
                                                class="relative max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid"
                                                id="user-menu" aria-label="User menu" aria-haspopup="true"
                                                x-bind:aria-expanded="open">
                                            <img class="h-8 w-8 rounded-full"
                                                 src="{{ auth()->user()->profile_photo_path }}"
                                                 alt="{{ auth()->user()->name }}">
                                            <div
                                                class="bg-green-500 rounded-full w-3 h-3 absolute bottom-0 right-0"></div>
                                        </button>
                                    </div>
                                    <div x-show="open"
                                         x-description="Profile dropdown panel, show/hide based on dropdown state."
                                         x-transition:enter="transition ease-out duration-100"
                                         x-transition:enter-start="transform opacity-0 scale-95"
                                         x-transition:enter-end="transform opacity-100 scale-100"
                                         x-transition:leave="transition ease-in duration-75"
                                         x-transition:leave-start="transform opacity-100 scale-100"
                                         x-transition:leave-end="transform opacity-0 scale-95"
                                         class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg"
                                         style="display: none;">
                                        <div class="py-1 rounded-md bg-white shadow-xs" role="menu"
                                             aria-orientation="vertical"
                                             aria-labelledby="user-menu">

                                            <a href="{{ route('profil.index') }}"
                                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                               role="menuitem">Ton profil</a>

                                            <form method="POST" action="{{ url('/logout') }}">
                                                @csrf
                                                <button
                                                    class="block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out w-full text-left">
                                                    Déconnexion
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="flex flex-wrap">
                                    <a href="{{ url('/login') }}"
                                       class="block font-bold bg-transparent text-blue-500  p-2 rounded border border-gray-300 mr-4 hover:bg-gray-100 hover:text-blue-700">
                                        Connexion
                                    </a>
                                    <a href="{{ url('/register') }}"
                                       class="block bg-blue-600 text-white font-bold py-2 px-3 rounded  hover:bg-transparent hover:text-gray-900 hover:bg-gray-100">
                                        crée un compte
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                    {{--                burger --}}
                    <div class="-mr-2 flex md:hidden">
                        <button @click="open = !open"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white"
                                x-bind:aria-label="open ? 'Close main menu' : 'Main menu'" x-bind:aria-expanded="open"
                                aria-label="Main menu">
                            <svg x-state:on="Menu open" x-state:off="Menu closed"
                                 :class="{ 'hidden': open, 'block': !open }" class="block h-6 w-6" stroke="currentColor"
                                 fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <svg x-state:on="Menu open" x-state:off="Menu closed"
                                 :class="{ 'hidden': !open, 'block': open }" class="hidden h-6 w-6"
                                 stroke="currentColor"
                                 fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            {{--contenue pour le mobile--}}
            <div x-description="Mobile menu, toggle classes based on menu state." x-state:on="Open" x-state:off="closed"
                 :class="{ 'block': open, 'hidden': !open }" class="hidden md:hidden bg-gray-800">
                {{--                    liste pour petit ecran--}}
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">

                    <a href="{{ url('/') }}"
                       class="{{ Route::currentRouteNamed('home') ? 'bg-gray-900 flex px-3 py-2 rounded-md text-sm font-medium text-white':
                               'flex px-3 py-2 rounded-md text-sm font-medium text-white hover:text-white hover:bg-gray-700' }}">
                        Accueil
                    </a>

                    <a href="{{ route('ecoles.index') }}"
                       class="{{ Request::segment(1) === 'ecoles' ? 'bg-gray-900 flex px-3 py-2 rounded-md text-sm font-medium text-gray-300':
                               'flex px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700' }}">
                        Écoles en ligne
                    </a>

                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                                class="{{ Request::segment(1) === 'cours' ? 'bg-gray-900 flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-300':
                               'flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700' }}">
                            <span>Contenus</span>
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                 :class="{'rotate-180': open, 'rotate-0': !open}"
                                 class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                <a href="{{ route('contenu.cours') }}"
                                   class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    Cours</a>
                                <a href="{{ route('exercices.index') }}"
                                   class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    Exercices</a>
                                <a href="{{ route('corriges.index') }}"
                                   class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    Corrigés</a>
                                <a href="{{ route('astuces.index') }}"
                                   class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    Astuces</a>
                            </div>
                        </div>
                    </div>



                    <a href="{{ route('qui-sommes-nous') }}"
                       class="{{ Route::currentRouteNamed('qui-sommes-nous') ? 'bg-gray-900 flex px-3 py-2 rounded-md text-sm font-medium text-gray-300':
                               'flex px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700' }}">
                        Qui sommes nous?
                    </a>

                </div>

                <div class="pt-4 pb-3 border-t border-gray-700">
                    @auth
                        <div class="flex items-center px-5 space-x-3">
                            <div class="flex-shrink-0 relative">
                                <img class="h-10 w-10 rounded-full z-0"
                                     src="{{ auth()->user()->profile_photo_path }}"
                                     alt="{{ auth()->user()->name }}">
                                <div class="bg-green-500 rounded-full w-3 h-3 absolute bottom-0 right-0"></div>
                            </div>
                            <div class="space-y-1">
                                <div
                                    class="text-base font-medium leading-none text-white">{{ auth()->user()->name }}</div>
                                {{--                                    <div class="text-sm font-medium leading-none text-gray-400">étudiant</div>--}}
                            </div>
                        </div>
                        <div class="mt-3 px-2 space-y-1">
                            <a href="{{ route('profil.index') }}"
                               class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Votre
                                profil</a>

                            <form method="POST" action="{{ url('/logout') }}">
                                @csrf
                                <button
                                    class="block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out w-full text-left">
                                    Déconnexion
                                </button>
                            </form>
                        </div>
                    @else
                        <div class="flex items-center px-5 space-x-3">
                            <a href="{{ url('/login') }}"
                               class="bg-transparent text-gray-200  p-2 rounded border border-gray-300 mr-4 hover:bg-gray-100 hover:text-gray-700">Connexion</a>
                            <a href="{{ url('/register') }}"
                               class="bg-gray-900 text-gray-200  py-2 px-3 rounded  hover:bg-gray-800 hover:text-gray-100">Inscription</a>
                        </div>
                    @endif
                </div>
            </div>
        </nav>
    </header>
        <div>
            @yield('baniere')
        </div>


    <main class="flex-1" role="main">
        @yield('content')
    </main>


    <footer class="bg-gray-100">
        <div class="container max-w-6xl md:max-w-6xl mx-auto px-4 flex flex-wrap">
            <div class="md:w-1/2 w-full">
                <div>
                    <a href="{{ url('/') }}" class="h-auto w-32 flex justify-center items-center mb-2">
                        <img class="h-full w-full " src="{{ asset('assets/images/BGRfacile3.png') }}"
                             alt="logo de bgrfacile">
                    </a>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="flex-1 flex flex-col md:flex-row">
                <div class="w-full py-5 px-0 md:px-5">
                    <div class="text-lg uppercase text-gray-800 font-medium">A propos</div>
                    <a class="my-3 block text-gray-600 hover:text-gray-400"
                       href="{{ route('qui-sommes-nous') }}">
                        Qui sommes-nous
                    </a>
                    <a class="my-3 block text-gray-800 hover:text-gray-400"
                       href="{{ route('politique') }}">
                        Politique de confidentialité
                    </a>
                </div>
                <div class="w-full py-5 px-0 md:px-5">
                    <div class="text-lg uppercase text-gray-500 font-medium">Assistance</div>
                    <a class="my-3 block text-gray-800 hover:text-gray-400"
                       href="{{ route('faq') }}">
                        Centre d'aide
                    </a>
                    <a class="my-3 block text-gray-800 hover:text-gray-400"
                       href="{{ route('contact') }}">
                        contact
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-gray-100 pt-2 ">
            <div class="flex pb-5 px-3 m-auto pt-5 border-t text-gray-800 text-sm flex-col md:flex-row max-w-6xl">
                <div class="mt-2">© Copyright 2020. Tous droits réservés.</div>
                <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                    {{--telephone--}}
                    <a href="tel:+242066443279" class="w-6 mx-1">
                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400 h-full w-full"
                             viewBox="0 0 512 512">
                            <circle style="fill:#6AAF50;" cx="256" cy="256" r="256"/>
                            <path style="fill:#4D8538;" d="M135.693,102.206l-0.008,0.004c-29.639,15.464-42.074,51.222-28.494,81.77
                            c19.547,43.975,45.793,84.198,77.468,119.423l23.939,23.939l159.073,159.073c39.82-19.335,73.863-48.69,98.876-84.783
                            l-58.697-58.697c-2.262-3.334-5.169-6.299-8.681-8.681L177.747,112.833C168.453,99.138,150.365,94.55,135.693,102.206z"/>
                            <path style="fill:#FFFFFF;" d="M349.593,300.614c-8.192-5.559-18.954-5.531-27.116,0.071l-11.752,8.066
                            c-13.09,8.984-30.498,8.496-43.08-1.187c-11.858-9.127-23.176-18.913-33.924-29.283c-10.371-10.748-20.156-22.065-29.283-33.924
                            c-9.684-12.581-10.171-29.989-1.187-43.08l8.066-11.752c5.601-8.162,5.63-18.924,0.071-27.116l-33.64-49.575
                            c-9.293-13.694-27.381-18.282-42.054-10.627l-0.009,0.004c-29.639,15.464-42.074,51.222-28.494,81.77
                            c19.547,43.975,45.793,84.198,77.468,119.423l23.939,23.939c35.226,31.674,75.449,57.921,119.423,77.468
                            c30.549,13.58,66.306,1.145,81.77-28.494l0.004-0.009c7.655-14.672,3.068-32.761-10.627-42.054L349.593,300.614z"/>
                        </svg>
                    </a>
                    {{--facebook--}}
                    <a href="https://www.facebook.com/bgrfacile" class="w-6 mx-1">
                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400 h-full w-full"
                             x="0px" y="0px"
                             viewBox="0 0 112.196 112.196">
                            <g>
                                <circle style="fill:#3B5998;" cx="56.098" cy="56.098" r="56.098"/>
                                <path style="fill:#FFFFFF;" d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34
                                    c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z"/>
                            </g>
                        </svg>
                    </a>
                    {{--whatsapp--}}
                    <a href="https://wa.me/+242066443279?text=salut%20je%20viens%20du%20site%20bgrfacile"
                       class="w-6 mx-1">
                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400 h-full w-full"
                             viewBox="0 0 512 512">
                            <circle style="fill:#75B73B;" cx="256" cy="256" r="256"/>
                            <path style="fill:#52891D;" d="M360.241,151.826c-14.843-3.712-36.671-16.532-50.8-21.671
                            c-55.165-17.239-129.293-3.448-149.98,60.337c-1.724,1.724-5.172,1.724-6.896,1.724c-41.374,48.269-13.791,106.882-17.239,160.323
                            c-1.177,18.839-11.083,35.497-23.831,49.588l107.282,107.17C230.931,511.067,243.355,512,256,512
                            c126.436,0,231.452-91.665,252.247-212.161L360.241,151.826z"/>
                            <g>
                                <path style="fill:#FFFFFF;" d="M248.837,108.447c-78.029,3.712-139.604,68.696-139.369,146.811
                                c0.072,23.792,5.816,46.249,15.95,66.095l-15.557,75.514c-0.841,4.086,2.843,7.663,6.901,6.701l73.995-17.53
                                c19.011,9.471,40.364,14.939,62.962,15.284c79.753,1.219,146.251-62.105,148.74-141.829
                                C405.121,174.035,334.591,104.362,248.837,108.447L248.837,108.447z M337.13,335.936c-21.669,21.669-50.483,33.604-81.13,33.604
                                c-17.944,0-35.126-4.027-51.066-11.966l-10.302-5.134l-45.37,10.747l9.549-46.356l-5.075-9.943
                                c-8.276-16.206-12.472-33.728-12.472-52.084c0-30.648,11.935-59.459,33.604-81.13c21.476-21.478,50.759-33.604,81.134-33.604
                                c30.644,0,59.458,11.935,81.127,33.604c21.669,21.669,33.604,50.483,33.604,81.127C370.735,285.177,358.607,314.459,337.13,335.936
                                L337.13,335.936z"/>
                                <path style="fill:#FFFFFF;" d="M327.115,286.582l-28.384-8.149c-3.729-1.069-7.749-0.01-10.468,2.76l-6.942,7.07
                                c-2.926,2.984-7.366,3.941-11.24,2.374c-13.427-5.434-41.672-30.548-48.881-43.106c-2.084-3.624-1.739-8.152,0.817-11.462
                                l6.058-7.839c2.374-3.07,2.874-7.197,1.305-10.747l-11.941-27.008c-2.86-6.468-11.126-8.352-16.527-3.784
                                c-7.921,6.701-17.32,16.88-18.461,28.16c-2.015,19.887,6.515,44.954,38.762,75.055c37.257,34.778,67.094,39.369,86.523,34.664
                                c11.019-2.667,19.825-13.365,25.379-22.126C336.906,296.467,333.91,288.535,327.115,286.582L327.115,286.582z"/>
                            </g>
                            <g>
                                <path style="fill:#D1D1D1;" d="M356.004,147.708l-22.223,22.778c1.131,1.045,2.257,2.096,3.351,3.191
                                c21.67,21.669,33.604,50.483,33.604,81.127c0,30.375-12.128,59.656-33.604,81.134c-21.669,21.669-50.483,33.604-81.13,33.604
                                c-17.944,0-35.125-4.027-51.066-11.966l-10.302-5.134l-45.37,10.747l0.938-4.553l-40.174,41.172
                                c0.886,2.663,3.705,4.475,6.734,3.758l73.995-17.53c19.011,9.471,40.364,14.939,62.962,15.284
                                c79.753,1.219,146.253-62.105,148.74-141.829C403.834,215.357,385.686,175.435,356.004,147.708z"/>
                                <path style="fill:#D1D1D1;" d="M327.115,286.582l-28.384-8.149c-3.729-1.069-7.749-0.01-10.468,2.76l-6.942,7.07
                                c-2.926,2.984-7.366,3.941-11.24,2.374c-7.756-3.139-20.451-12.845-31.185-22.904l-19.732,20.225
                                c0.677,0.648,1.352,1.295,2.05,1.948c37.257,34.778,67.094,39.369,86.523,34.664c11.019-2.667,19.825-13.365,25.379-22.126
                                C336.906,296.467,333.91,288.535,327.115,286.582z"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>
@yield('script')
</body>
</html>
