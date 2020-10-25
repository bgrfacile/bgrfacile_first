<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <header>
            <nav style="z-index: 2000!important;" x-data="{ open: false }" @keydown.window.escape="open = false"
                 class="MS-nav bg-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16">
                        <div class="flex items-center">
                            <a href="{{ url('/') }}" class="h-auto w-32 flex justify-center items-center mb-2">
                                <img class="h-full w-full " src="{{ asset('assets/images/logo-white.png') }}" alt="logo de bgrfacile">
                            </a>
                            {{--liste pour grand ecran--}}
                            <div class="hidden md:block">
                                <div class="ml-5 flex items-baseline space-x-4">
                                    <a href="{{ url('/') }}"
                                       class="{{ Route::currentRouteNamed('home') ? 'bg-gray-900 flex px-3 py-2 rounded-md text-sm font-medium text-white':
                               'flex px-3 py-2 rounded-md text-sm font-medium text-white hover:text-white hover:bg-gray-700' }}">
                                        <svg class="mr-2 fill-current h-4 w-4" viewBox="0 0 16 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.7891 6.89065L8.35311 0.459399C8.30677 0.412967 8.25173 0.376131 8.19114 0.350997C8.13054 0.325864 8.06559 0.312927 7.99999 0.312927C7.93439 0.312927 7.86943 0.325864 7.80884 0.350997C7.74825 0.376131 7.6932 0.412967 7.64686 0.459399L1.21093 6.89065C1.02343 7.07815 0.917176 7.33284 0.917176 7.59846C0.917176 8.15002 1.36561 8.59846 1.91718 8.59846L2.5953 8.59846L2.5953 13.1875C2.5953 13.4641 2.81874 13.6875 3.0953 13.6875L6.99999 13.6875L6.99999 10.1875L8.74999 10.1875L8.74999 13.6875L12.9047 13.6875C13.1812 13.6875 13.4047 13.4641 13.4047 13.1875L13.4047 8.59846L14.0828 8.59846C14.3484 8.59846 14.6031 8.49377 14.7906 8.30471C15.1797 7.91409 15.1797 7.28127 14.7891 6.89065Z"/>
                                        </svg>
                                        Home
                                    </a>

                                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                        <button @click="open = !open"
                                                class="{{ Request::segment(1) === 'cours' ? 'bg-gray-900 flex items-center justify-center px-3 py-2 rounded-md text-sm font-medium text-gray-300':
                               'flex items-center justify-center px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                            <svg class="mr-2 fill-current h-4 w-4" viewBox="0 0 17 16" fill="none">
                                                <path
                                                    d="M4.05844 1.77778C4.05844 1.73625 4.07775 1.65433 4.19354 1.56171C4.31024 1.46837 4.49936 1.3913 4.73485 1.3913H14.2045C14.44 1.3913 14.6292 1.46837 14.7459 1.56171C14.8616 1.65433 14.881 1.73625 14.881 1.77778V9.35266C14.881 9.39418 14.8616 9.4761 14.7459 9.56872C14.6292 9.66207 14.44 9.73913 14.2045 9.73913H7.85345C7.75652 9.89203 7.64924 10.0374 7.53264 10.1741C8.18339 10.3235 8.77665 10.6589 9.2564 11.1304H14.2045C15.1572 11.1304 16.2338 10.4871 16.2338 9.35266V1.77778C16.2338 0.643367 15.1572 0 14.2045 0H4.73485C3.78219 0 2.70563 0.643367 2.70563 1.77778V4.44485C3.10915 4.17426 3.5669 3.98203 4.05844 3.88917V1.77778Z"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M0.767983 12.0399C1.26855 11.4679 1.96368 11.1304 2.70563 11.1304H6.76407C7.50602 11.1304 8.20115 11.4679 8.70172 12.0399C9.20016 12.6095 9.4697 13.3677 9.4697 14.1449V15.3043C9.4697 15.6885 9.16686 16 8.79329 16C8.41972 16 8.11689 15.6885 8.11689 15.3043V14.1449C8.11689 13.6922 7.95884 13.2708 7.69618 12.9706C7.43563 12.6729 7.09848 12.5217 6.76407 12.5217H2.70563C2.37122 12.5217 2.03406 12.6729 1.77352 12.9706C1.51086 13.2708 1.35281 13.6922 1.35281 14.1449V15.3043C1.35281 15.6885 1.04998 16 0.676407 16C0.302838 16 0 15.6885 0 15.3043V14.1449C0 13.3677 0.269536 12.6095 0.767983 12.0399Z"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M4.73485 6.26087C3.98771 6.26087 3.38204 6.88378 3.38204 7.65217C3.38204 8.42057 3.98771 9.04348 4.73485 9.04348C5.48199 9.04348 6.08766 8.42057 6.08766 7.65217C6.08766 6.88378 5.48199 6.26087 4.73485 6.26087ZM2.02922 7.65217C2.02922 6.11538 3.24057 4.86957 4.73485 4.86957C6.22913 4.86957 7.44048 6.11538 7.44048 7.65217C7.44048 9.18897 6.22913 10.4348 4.73485 10.4348C3.24057 10.4348 2.02922 9.18897 2.02922 7.65217Z"/>
                                            </svg>
                                            <span>Cours</span>
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
                                                <a href="{{ route('astuces.index') }}"
                                                   class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                                    Astuces</a>
                                                <a href="{{ route('cours.index') }}"
                                                   class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                                    Cours</a>
                                                <a href="{{ route('exercices.index') }}"
                                                   class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                                    Exercices</a>
                                                <a href="{{ route('corriges.index') }}"
                                                   class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                                    Corrigés</a>
                                            </div>
                                        </div>
                                    </div>


                                    <a href="{{ route('ecoles.index') }}"
                                       class="{{ Request::segment(1) === 'ecoles' ? 'bg-gray-900 flex px-3 py-2 rounded-md text-sm font-medium text-gray-300':
                               'flex px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                        <svg class="mr-2 fill-current h-4 w-4" viewBox="0 0 20 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.77778 -4.274e-07L2.33127e-07 5.33333L9.77778 10.6667L17.7778 6.30222L17.7778 12.4444L19.5556 12.4444L19.5556 5.33333L9.77778 -4.274e-07ZM3.55556 9.04889L3.55556 12.6044L9.77778 16L16 12.6044L16 9.04889L9.77778 12.4444L3.55556 9.04889Z"/>
                                        </svg>
                                        Ècoles
                                    </a>


                                    <a href="{{ route('qui-sommes-nous') }}"
                                       class="{{ Route::currentRouteNamed('qui-sommes-nous') ? 'bg-gray-900 flex px-3 py-2 rounded-md text-sm font-medium text-gray-300':
                               'flex px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                        <svg class="mr-2 fill-current h-4 w-4" viewBox="0 0 14 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.9231 12.9234H6.9999C6.19051 12.9267 5.38919 12.7625 4.64632 12.4412C3.90345 12.1198 3.23508 11.6483 2.68323 11.0562C1.55157 9.85276 0.985734 8.27776 1.08957 6.62109C1.27332 3.65134 3.6504 1.27309 6.62073 1.08876C6.74907 1.08059 6.8774 1.07709 7.00398 1.07709C8.51055 1.07253 9.96114 1.64776 11.0552 2.68359C11.6474 3.23535 12.1191 3.90368 12.4406 4.64656C12.762 5.38944 12.9263 6.1908 12.9231 7.00026V12.9234ZM11.7926 1.89842C10.3704 0.562006 8.51073 -0.108244 6.55423 0.0142559C3.04373 0.233006 0.232067 3.04467 0.0139004 6.55517C-0.10685 8.51109 0.562234 10.3719 1.89865 11.7935C2.55423 12.4889 3.34475 13.0432 4.22186 13.4227C5.09897 13.8021 6.04425 13.9986 6.9999 14.0003H13.4615C13.759 14.0003 13.9999 13.7593 13.9999 13.4624V7.00026C13.9981 6.04454 13.8015 5.09923 13.4219 4.22212C13.0424 3.34501 12.488 2.55453 11.7926 1.89901V1.89842ZM9.42307 8.88501H4.57673C4.43394 8.88501 4.29699 8.94173 4.19602 9.0427C4.09504 9.14368 4.03832 9.28063 4.03832 9.42342C4.03832 9.56622 4.09504 9.70317 4.19602 9.80414C4.29699 9.90511 4.43394 9.96184 4.57673 9.96184H9.42307C9.56586 9.96184 9.70281 9.90511 9.80379 9.80414C9.90476 9.70317 9.96148 9.56622 9.96148 9.42342C9.96148 9.28063 9.90476 9.14368 9.80379 9.0427C9.70281 8.94173 9.56586 8.88501 9.42307 8.88501ZM4.57673 5.11609H9.42307C9.56594 5.11609 9.70296 5.05933 9.80399 4.9583C9.90502 4.85728 9.96177 4.72025 9.96177 4.57738C9.96177 4.43451 9.90502 4.29748 9.80399 4.19646C9.70296 4.09543 9.56594 4.03867 9.42307 4.03867H4.57673C4.43386 4.03867 4.29684 4.09543 4.19581 4.19646C4.09478 4.29748 4.03803 4.43451 4.03803 4.57738C4.03803 4.72025 4.09478 4.85728 4.19581 4.9583C4.29684 5.05933 4.43386 5.11609 4.57673 5.11609ZM2.96148 6.46242C2.82183 6.46702 2.68943 6.52573 2.59227 6.62615C2.49511 6.72656 2.44079 6.86082 2.44079 7.00055C2.44079 7.14028 2.49511 7.27453 2.59227 7.37495C2.68943 7.47536 2.82183 7.53407 2.96148 7.53867H11.0383C11.1811 7.53867 11.3181 7.48195 11.419 7.38097C11.52 7.28 11.5767 7.14305 11.5767 7.00026C11.5767 6.85746 11.52 6.72051 11.419 6.61954C11.3181 6.51857 11.1811 6.46184 11.0383 6.46184H2.96148V6.46242Z"/>
                                        </svg>
                                        Qui sommes nous?
                                    </a>

                                </div>
                            </div>
                        </div>
                        {{--                contenue sur grand ecran--}}
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                {{--                        recherche button--}}
                                <button
                                    class="mr-4 p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700"
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
                                <!-- Profile dropdown -->
                                @auth
                                    <div @click.away="open = false" class="mr-3 relative" x-data="{ open: false }">
                                        <div>
                                            <button @click="open = !open"
                                                    class="relative max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid"
                                                    id="user-menu" aria-label="User menu" aria-haspopup="true"
                                                    x-bind:aria-expanded="open">
                                                <img class="h-8 w-8 rounded-full"
                                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                     alt="">
                                                <div class="bg-green-500 rounded-full w-3 h-3 absolute bottom-0 right-0"></div>
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

                                                <a href="{{ url('/profil') }}"
                                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                                   role="menuitem">Ton profil</a>

                                                <form method="POST" action="{{ url('/logout') }}">
                                                    @csrf
                                                    <button class="block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out w-full text-left">
                                                        Déconnexion
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div>
                                        <a href="{{ url('/login') }}"
                                           class="bg-transparent text-gray-200  p-2 rounded border border-gray-300 mr-4 hover:bg-gray-100 hover:text-gray-700">
                                            Connexion
                                        </a>
                                        <a href="{{ url('/register') }}"
                                           class="bg-gray-900 text-gray-200  py-2 px-3 rounded  hover:bg-gray-800 hover:text-gray-100">
                                            Inscription
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        {{--                burger pour modile--}}
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
                                     :class="{ 'hidden': !open, 'block': open }" class="hidden h-6 w-6" stroke="currentColor"
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
                     :class="{ 'block': open, 'hidden': !open }" class="hidden md:hidden">
                    {{--                    liste pour petit ecran--}}
                    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">

                        <a href="{{ url('/') }}"
                           class="{{ Route::currentRouteNamed('home') ? 'bg-gray-900 flex px-3 py-2 rounded-md text-sm font-medium text-white':
                               'flex px-3 py-2 rounded-md text-sm font-medium text-white hover:text-white hover:bg-gray-700' }}">
                            <svg class="mr-2 fill-current h-4 w-4" viewBox="0 0 16 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.7891 6.89065L8.35311 0.459399C8.30677 0.412967 8.25173 0.376131 8.19114 0.350997C8.13054 0.325864 8.06559 0.312927 7.99999 0.312927C7.93439 0.312927 7.86943 0.325864 7.80884 0.350997C7.74825 0.376131 7.6932 0.412967 7.64686 0.459399L1.21093 6.89065C1.02343 7.07815 0.917176 7.33284 0.917176 7.59846C0.917176 8.15002 1.36561 8.59846 1.91718 8.59846L2.5953 8.59846L2.5953 13.1875C2.5953 13.4641 2.81874 13.6875 3.0953 13.6875L6.99999 13.6875L6.99999 10.1875L8.74999 10.1875L8.74999 13.6875L12.9047 13.6875C13.1812 13.6875 13.4047 13.4641 13.4047 13.1875L13.4047 8.59846L14.0828 8.59846C14.3484 8.59846 14.6031 8.49377 14.7906 8.30471C15.1797 7.91409 15.1797 7.28127 14.7891 6.89065Z"/>
                            </svg>
                            Home
                        </a>

                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click="open = !open"
                                    class="{{ Request::segment(1) === 'cours' ? 'bg-gray-900 flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-300':
                               'flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                <svg class="mr-2 fill-current h-4 w-4" viewBox="0 0 17 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.05844 1.77778C4.05844 1.73625 4.07775 1.65433 4.19354 1.56171C4.31024 1.46837 4.49936 1.3913 4.73485 1.3913H14.2045C14.44 1.3913 14.6292 1.46837 14.7459 1.56171C14.8616 1.65433 14.881 1.73625 14.881 1.77778V9.35266C14.881 9.39418 14.8616 9.4761 14.7459 9.56872C14.6292 9.66207 14.44 9.73913 14.2045 9.73913H7.85345C7.75652 9.89203 7.64924 10.0374 7.53264 10.1741C8.18339 10.3235 8.77665 10.6589 9.2564 11.1304H14.2045C15.1572 11.1304 16.2338 10.4871 16.2338 9.35266V1.77778C16.2338 0.643367 15.1572 0 14.2045 0H4.73485C3.78219 0 2.70563 0.643367 2.70563 1.77778V4.44485C3.10915 4.17426 3.5669 3.98203 4.05844 3.88917V1.77778Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0.767983 12.0399C1.26855 11.4679 1.96368 11.1304 2.70563 11.1304H6.76407C7.50602 11.1304 8.20115 11.4679 8.70172 12.0399C9.20016 12.6095 9.4697 13.3677 9.4697 14.1449V15.3043C9.4697 15.6885 9.16686 16 8.79329 16C8.41972 16 8.11689 15.6885 8.11689 15.3043V14.1449C8.11689 13.6922 7.95884 13.2708 7.69618 12.9706C7.43563 12.6729 7.09848 12.5217 6.76407 12.5217H2.70563C2.37122 12.5217 2.03406 12.6729 1.77352 12.9706C1.51086 13.2708 1.35281 13.6922 1.35281 14.1449V15.3043C1.35281 15.6885 1.04998 16 0.676407 16C0.302838 16 0 15.6885 0 15.3043V14.1449C0 13.3677 0.269536 12.6095 0.767983 12.0399Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M4.73485 6.26087C3.98771 6.26087 3.38204 6.88378 3.38204 7.65217C3.38204 8.42057 3.98771 9.04348 4.73485 9.04348C5.48199 9.04348 6.08766 8.42057 6.08766 7.65217C6.08766 6.88378 5.48199 6.26087 4.73485 6.26087ZM2.02922 7.65217C2.02922 6.11538 3.24057 4.86957 4.73485 4.86957C6.22913 4.86957 7.44048 6.11538 7.44048 7.65217C7.44048 9.18897 6.22913 10.4348 4.73485 10.4348C3.24057 10.4348 2.02922 9.18897 2.02922 7.65217Z"/>
                                </svg>
                                <span>Cours</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
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
                                    <a href="{{ route('astuces.index') }}"
                                       class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                        Astuces</a>
                                    <a href="{{ route('cours.index') }}"
                                       class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                        Cours</a>
                                    <a href="{{ route('exercices.index') }}"
                                       class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                        Exercices</a>
                                    <a href="{{ route('corriges.index') }}"
                                       class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                        Corrigés</a>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('ecoles.index') }}"
                           class="{{ Request::segment(1) === 'ecoles' ? 'bg-gray-900 flex px-3 py-2 rounded-md text-sm font-medium text-gray-300':
                               'flex px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700' }}">
                            <svg class="mr-2 fill-current h-4 w-4" viewBox="0 0 20 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.77778 -4.274e-07L2.33127e-07 5.33333L9.77778 10.6667L17.7778 6.30222L17.7778 12.4444L19.5556 12.4444L19.5556 5.33333L9.77778 -4.274e-07ZM3.55556 9.04889L3.55556 12.6044L9.77778 16L16 12.6044L16 9.04889L9.77778 12.4444L3.55556 9.04889Z"/>
                            </svg>
                            Ècoles
                        </a>

                        <a href="{{ route('qui-sommes-nous') }}"
                           class="{{ Route::currentRouteNamed('qui-sommes-nous') ? 'bg-gray-900 flex px-3 py-2 rounded-md text-sm font-medium text-gray-300':
                               'flex px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700' }}">
                            <svg class="mr-2 fill-current h-4 w-4" viewBox="0 0 14 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.9231 12.9234H6.9999C6.19051 12.9267 5.38919 12.7625 4.64632 12.4412C3.90345 12.1198 3.23508 11.6483 2.68323 11.0562C1.55157 9.85276 0.985734 8.27776 1.08957 6.62109C1.27332 3.65134 3.6504 1.27309 6.62073 1.08876C6.74907 1.08059 6.8774 1.07709 7.00398 1.07709C8.51055 1.07253 9.96114 1.64776 11.0552 2.68359C11.6474 3.23535 12.1191 3.90368 12.4406 4.64656C12.762 5.38944 12.9263 6.1908 12.9231 7.00026V12.9234ZM11.7926 1.89842C10.3704 0.562006 8.51073 -0.108244 6.55423 0.0142559C3.04373 0.233006 0.232067 3.04467 0.0139004 6.55517C-0.10685 8.51109 0.562234 10.3719 1.89865 11.7935C2.55423 12.4889 3.34475 13.0432 4.22186 13.4227C5.09897 13.8021 6.04425 13.9986 6.9999 14.0003H13.4615C13.759 14.0003 13.9999 13.7593 13.9999 13.4624V7.00026C13.9981 6.04454 13.8015 5.09923 13.4219 4.22212C13.0424 3.34501 12.488 2.55453 11.7926 1.89901V1.89842ZM9.42307 8.88501H4.57673C4.43394 8.88501 4.29699 8.94173 4.19602 9.0427C4.09504 9.14368 4.03832 9.28063 4.03832 9.42342C4.03832 9.56622 4.09504 9.70317 4.19602 9.80414C4.29699 9.90511 4.43394 9.96184 4.57673 9.96184H9.42307C9.56586 9.96184 9.70281 9.90511 9.80379 9.80414C9.90476 9.70317 9.96148 9.56622 9.96148 9.42342C9.96148 9.28063 9.90476 9.14368 9.80379 9.0427C9.70281 8.94173 9.56586 8.88501 9.42307 8.88501ZM4.57673 5.11609H9.42307C9.56594 5.11609 9.70296 5.05933 9.80399 4.9583C9.90502 4.85728 9.96177 4.72025 9.96177 4.57738C9.96177 4.43451 9.90502 4.29748 9.80399 4.19646C9.70296 4.09543 9.56594 4.03867 9.42307 4.03867H4.57673C4.43386 4.03867 4.29684 4.09543 4.19581 4.19646C4.09478 4.29748 4.03803 4.43451 4.03803 4.57738C4.03803 4.72025 4.09478 4.85728 4.19581 4.9583C4.29684 5.05933 4.43386 5.11609 4.57673 5.11609ZM2.96148 6.46242C2.82183 6.46702 2.68943 6.52573 2.59227 6.62615C2.49511 6.72656 2.44079 6.86082 2.44079 7.00055C2.44079 7.14028 2.49511 7.27453 2.59227 7.37495C2.68943 7.47536 2.82183 7.53407 2.96148 7.53867H11.0383C11.1811 7.53867 11.3181 7.48195 11.419 7.38097C11.52 7.28 11.5767 7.14305 11.5767 7.00026C11.5767 6.85746 11.52 6.72051 11.419 6.61954C11.3181 6.51857 11.1811 6.46184 11.0383 6.46184H2.96148V6.46242Z"/>
                            </svg>
                            Qui sommes nous?
                        </a>

                    </div>

                    <div class="pt-4 pb-3 border-t border-gray-700">
                        @auth
                            <div class="flex items-center px-5 space-x-3">
                                <div class="flex-shrink-0 relative">
                                    <img class="h-10 w-10 rounded-full z-0"
                                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                         alt="">
                                    <div class="bg-green-500 rounded-full w-3 h-3 absolute bottom-0 right-0"></div>
                                </div>
                                <div class="space-y-1">
                                    <div class="text-base font-medium leading-none text-white">john Doe</div>
                                    <div class="text-sm font-medium leading-none text-gray-400">étudiant</div>
                                </div>
                            </div>
                            <div class="mt-3 px-2 space-y-1">

                                <a href="#"
                                   class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Votre
                                    profil</a>

                                <a href="#"
                                   class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Déconnexion</a>

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
            <div style="z-index: -200">
                @yield('baniere')
            </div>
        </header>

        <main class="flex-1" role="main">
            @yield('content')
        </main>

        <footer class="mt-auto flex-shrink-0">
            <div class="bg-gray-100">
                <div class="max-w-6xl m-auto text-gray-800 flex md:flex-nowrap justify-center">
                    <div class="flex flex-wrap">
                        <div class="p-5 flex-1 ">
                            <p class="my-3">
                                <img
                                    src="{{ asset('assets/images/logo-black.png') }}">
                            </p>
                            <p>
                                Pour réussir, travailler dur, ne jamais abandonner et surtout chérir une obsession magnifique.
                                <br>
                                <strong>Walt Disney</strong>
                            </p>
                        </div>
                        <div class="p-5 w-1/3 ">
                            <div class="text-xs uppercase text-gray-500 font-medium">Pages</div>
                            <a class="my-3 block" href="/#">Accueil <span class="text-teal-600 text-xs p-1"></span></a>
                            <a class="my-3 block" href="/#">Cours <span class="text-teal-600 text-xs p-1">New</span></a>
                            <a class="my-3 block" href="/#">Astuces <span class="text-teal-600 text-xs p-1"></span></a>
                            <a class="my-3 block" href="/#">Exercices <span class="text-teal-600 text-xs p-1"></span></a>
                            <a class="my-3 block" href="/#">Corrigés <span class="text-teal-600 text-xs p-1"></span></a>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="p-5 w-1/2 ">
                            <div class="text-xs uppercase text-gray-500 font-medium">Nous contacter</div>
                            <a class="my-3 block" href="/#">
                                Pointe-Noire, CONGO
                                <span class="text-teal-600 text-xs p-1"></span>
                            </a>
                            <a class="my-3 block break-all" href="mailto:bgrfacile.contact@gmail.com">
                                bgrfacile.contact@gmail.com
                                <span class="text-teal-600 text-xs p-1"></span>
                            </a>
                        </div>
                        <div class="p-5 w-1/2 ">
                            <div class="text-xs uppercase text-gray-500 font-medium">Support</div>
                            <a class="my-3 block" href="{{ route('faq') }}">Centre d'aide <span
                                    class="text-teal-600 text-xs p-1"></span></a>
                            <a class="my-3 block" href="/#">Politique de confidentialité <span
                                    class="text-teal-600 text-xs p-1"></span></a>
                            <a class="my-3 block" href="/#">Conditions <span class="text-teal-600 text-xs p-1"></span></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="bg-gray-100 pt-2 ">
                <div class="flex pb-5 px-3 m-auto pt-5 border-t text-gray-800 text-sm flex-col md:flex-row max-w-6xl">
                    <div class="mt-2">© Copyright 2020. Tous droits réservés.</div>
                    <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                        <a href="/#" class="w-6 mx-1">

                            <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400" width="100%" height="100%" viewBox="-1 0 512 512"
                                 style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                                <path
                                    d="m10.894531 512c-2.875 0-5.671875-1.136719-7.746093-3.234375-2.734376-2.765625-3.789063-6.78125-2.761719-10.535156l33.285156-121.546875c-20.722656-37.472656-31.648437-79.863282-31.632813-122.894532.058594-139.941406 113.941407-253.789062 253.871094-253.789062 67.871094.0273438 131.644532 26.464844 179.578125 74.433594 47.925781 47.972656 74.308594 111.742187 74.289063 179.558594-.0625 139.945312-113.945313 253.800781-253.867188 253.800781 0 0-.105468 0-.109375 0-40.871093-.015625-81.390625-9.976563-117.46875-28.84375l-124.675781 32.695312c-.914062.238281-1.84375.355469-2.761719.355469zm0 0"
                                    fill="#e5e5e5"/>
                                <path
                                    d="m10.894531 501.105469 34.46875-125.871094c-21.261719-36.839844-32.445312-78.628906-32.429687-121.441406.054687-133.933594 109.046875-242.898438 242.976562-242.898438 64.992188.027344 125.996094 25.324219 171.871094 71.238281 45.871094 45.914063 71.125 106.945313 71.101562 171.855469-.058593 133.929688-109.066406 242.910157-242.972656 242.910157-.007812 0 .003906 0 0 0h-.105468c-40.664063-.015626-80.617188-10.214844-116.105469-29.570313zm134.769531-77.75 7.378907 4.371093c31 18.398438 66.542969 28.128907 102.789062 28.148438h.078125c111.304688 0 201.898438-90.578125 201.945313-201.902344.019531-53.949218-20.964844-104.679687-59.09375-142.839844-38.132813-38.160156-88.832031-59.1875-142.777344-59.210937-111.394531 0-201.984375 90.566406-202.027344 201.886719-.015625 38.148437 10.65625 75.296875 30.875 107.445312l4.804688 7.640625-20.40625 74.5zm0 0"
                                    fill="#fff"/>
                                <path
                                    d="m19.34375 492.625 33.277344-121.519531c-20.53125-35.5625-31.324219-75.910157-31.3125-117.234375.050781-129.296875 105.273437-234.488282 234.558594-234.488282 62.75.027344 121.644531 24.449219 165.921874 68.773438 44.289063 44.324219 68.664063 103.242188 68.640626 165.898438-.054688 129.300781-105.28125 234.503906-234.550782 234.503906-.011718 0 .003906 0 0 0h-.105468c-39.253907-.015625-77.828126-9.867188-112.085938-28.539063zm0 0"
                                    fill="#64b161"/>
                                <g fill="#fff">
                                    <path
                                        d="m10.894531 501.105469 34.46875-125.871094c-21.261719-36.839844-32.445312-78.628906-32.429687-121.441406.054687-133.933594 109.046875-242.898438 242.976562-242.898438 64.992188.027344 125.996094 25.324219 171.871094 71.238281 45.871094 45.914063 71.125 106.945313 71.101562 171.855469-.058593 133.929688-109.066406 242.910157-242.972656 242.910157-.007812 0 .003906 0 0 0h-.105468c-40.664063-.015626-80.617188-10.214844-116.105469-29.570313zm134.769531-77.75 7.378907 4.371093c31 18.398438 66.542969 28.128907 102.789062 28.148438h.078125c111.304688 0 201.898438-90.578125 201.945313-201.902344.019531-53.949218-20.964844-104.679687-59.09375-142.839844-38.132813-38.160156-88.832031-59.1875-142.777344-59.210937-111.394531 0-201.984375 90.566406-202.027344 201.886719-.015625 38.148437 10.65625 75.296875 30.875 107.445312l4.804688 7.640625-20.40625 74.5zm0 0"/>
                                    <path
                                        d="m195.183594 152.246094c-4.546875-10.109375-9.335938-10.3125-13.664063-10.488282-3.539062-.152343-7.589843-.144531-11.632812-.144531-4.046875 0-10.625 1.523438-16.1875 7.597657-5.566407 6.074218-21.253907 20.761718-21.253907 50.632812 0 29.875 21.757813 58.738281 24.792969 62.792969 3.035157 4.050781 42 67.308593 103.707031 91.644531 51.285157 20.226562 61.71875 16.203125 72.851563 15.191406 11.132813-1.011718 35.917969-14.6875 40.976563-28.863281 5.0625-14.175781 5.0625-26.324219 3.542968-28.867187-1.519531-2.527344-5.566406-4.046876-11.636718-7.082032-6.070313-3.035156-35.917969-17.726562-41.484376-19.75-5.566406-2.027344-9.613281-3.035156-13.660156 3.042969-4.050781 6.070313-15.675781 19.742187-19.21875 23.789063-3.542968 4.058593-7.085937 4.566406-13.15625 1.527343-6.070312-3.042969-25.625-9.449219-48.820312-30.132812-18.046875-16.089844-30.234375-35.964844-33.777344-42.042969-3.539062-6.070312-.058594-9.070312 2.667969-12.386719 4.910156-5.972656 13.148437-16.710937 15.171875-20.757812 2.023437-4.054688 1.011718-7.597657-.503906-10.636719-1.519532-3.035156-13.320313-33.058594-18.714844-45.066406zm0 0"
                                        fill-rule="evenodd"/>
                                </g>
                            </svg>
                        </a>
                        <a href="/#" class="w-6 mx-1">
                            <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400" width="100%"
                                 height="100%" viewBox="0 0 24 24"
                                 style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                                <path id="Facebook" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                  5.373,-12 12,-12c6.627,0 12,5.373
                  12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422
                  0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784
                  -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z"></path>
                            </svg>
                        </a>
                        <a href="/#" class="w-6 mx-1">
                            <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400" width="100%"
                                 height="100%" viewBox="0 0 24 24"
                                 style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                                <g id="Layer_1">
                                    <circle id="Oval" cx="12" cy="12" r="12"></circle>
                                    <path id="Shape" d="M19.05,8.362c0,-0.062 0,-0.125 -0.063,-0.187l0,-0.063c-0.187,-0.562
                     -0.687,-0.937 -1.312,-0.937l0.125,0c0,0 -2.438,-0.375 -5.75,-0.375c-3.25,0
                     -5.75,0.375 -5.75,0.375l0.125,0c-0.625,0 -1.125,0.375
                     -1.313,0.937l0,0.063c0,0.062 0,0.125 -0.062,0.187c-0.063,0.625 -0.25,1.938
                     -0.25,3.438c0,1.5 0.187,2.812 0.25,3.437c0,0.063 0,0.125
                     0.062,0.188l0,0.062c0.188,0.563 0.688,0.938 1.313,0.938l-0.125,0c0,0
                     2.437,0.375 5.75,0.375c3.25,0 5.75,-0.375 5.75,-0.375l-0.125,0c0.625,0
                     1.125,-0.375 1.312,-0.938l0,-0.062c0,-0.063 0,-0.125
                     0.063,-0.188c0.062,-0.625 0.25,-1.937 0.25,-3.437c0,-1.5 -0.125,-2.813
                     -0.25,-3.438Zm-4.634,3.927l-3.201,2.315c-0.068,0.068 -0.137,0.068
                     -0.205,0.068c-0.068,0 -0.136,0 -0.204,-0.068c-0.136,-0.068 -0.204,-0.204
                     -0.204,-0.34l0,-4.631c0,-0.136 0.068,-0.273 0.204,-0.341c0.136,-0.068
                     0.272,-0.068 0.409,0l3.201,2.316c0.068,0.068 0.136,0.204
                     0.136,0.34c0.068,0.136 0,0.273 -0.136,0.341Z" style="fill: rgb(255, 255, 255);"></path>
                                </g>
                            </svg>
                        </a>
                        <a href="/#" class="w-6 mx-1">
                            <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400" width="100%"
                                 height="100%" viewBox="0 0 24 24"
                                 style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                                <path id="Shape" d="M7.3,0.9c1.5,-0.6 3.1,-0.9 4.7,-0.9c1.6,0 3.2,0.3 4.7,0.9c1.5,0.6 2.8,1.5
                  3.8,2.6c1,1.1 1.9,2.3 2.6,3.8c0.7,1.5 0.9,3 0.9,4.7c0,1.7 -0.3,3.2
                  -0.9,4.7c-0.6,1.5 -1.5,2.8 -2.6,3.8c-1.1,1 -2.3,1.9 -3.8,2.6c-1.5,0.7
                  -3.1,0.9 -4.7,0.9c-1.6,0 -3.2,-0.3 -4.7,-0.9c-1.5,-0.6 -2.8,-1.5
                  -3.8,-2.6c-1,-1.1 -1.9,-2.3 -2.6,-3.8c-0.7,-1.5 -0.9,-3.1 -0.9,-4.7c0,-1.6
                  0.3,-3.2 0.9,-4.7c0.6,-1.5 1.5,-2.8 2.6,-3.8c1.1,-1 2.3,-1.9
                  3.8,-2.6Zm-0.3,7.1c0.6,0 1.1,-0.2 1.5,-0.5c0.4,-0.3 0.5,-0.8 0.5,-1.3c0,-0.5
                  -0.2,-0.9 -0.6,-1.2c-0.4,-0.3 -0.8,-0.5 -1.4,-0.5c-0.6,0 -1.1,0.2
                  -1.4,0.5c-0.3,0.3 -0.6,0.7 -0.6,1.2c0,0.5 0.2,0.9 0.5,1.3c0.3,0.4 0.9,0.5
                  1.5,0.5Zm1.5,10l0,-8.5l-3,0l0,8.5l3,0Zm11,0l0,-4.5c0,-1.4 -0.3,-2.5
                  -0.9,-3.3c-0.6,-0.8 -1.5,-1.2 -2.6,-1.2c-0.6,0 -1.1,0.2 -1.5,0.5c-0.4,0.3
                  -0.8,0.8 -0.9,1.3l-0.1,-1.3l-3,0l0.1,2l0,6.5l3,0l0,-4.5c0,-0.6 0.1,-1.1
                  0.4,-1.5c0.3,-0.4 0.6,-0.5 1.1,-0.5c0.5,0 0.9,0.2 1.1,0.5c0.2,0.3 0.4,0.8
                  0.4,1.5l0,4.5l2.9,0Z"></path>
                            </svg>
                        </a>
                        <a href="/#" class="w-6 mx-1">
                            <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400" width="100%"
                                 height="100%" viewBox="0 0 24 24"
                                 style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                                <path id="Twitter" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                  5.373,-12 12,-12c6.627,0 12,5.373 12,12Zm-6.465,-3.192c-0.379,0.168
                  -0.786,0.281 -1.213,0.333c0.436,-0.262 0.771,-0.676
                  0.929,-1.169c-0.408,0.242 -0.86,0.418 -1.341,0.513c-0.385,-0.411
                  -0.934,-0.667 -1.541,-0.667c-1.167,0 -2.112,0.945 -2.112,2.111c0,0.166
                  0.018,0.327 0.054,0.482c-1.754,-0.088 -3.31,-0.929
                  -4.352,-2.206c-0.181,0.311 -0.286,0.674 -0.286,1.061c0,0.733 0.373,1.379
                  0.94,1.757c-0.346,-0.01 -0.672,-0.106 -0.956,-0.264c-0.001,0.009
                  -0.001,0.018 -0.001,0.027c0,1.023 0.728,1.877 1.694,2.07c-0.177,0.049
                  -0.364,0.075 -0.556,0.075c-0.137,0 -0.269,-0.014 -0.397,-0.038c0.268,0.838
                  1.048,1.449 1.972,1.466c-0.723,0.566 -1.633,0.904 -2.622,0.904c-0.171,0
                  -0.339,-0.01 -0.504,-0.03c0.934,0.599 2.044,0.949 3.237,0.949c3.883,0
                  6.007,-3.217 6.007,-6.008c0,-0.091 -0.002,-0.183 -0.006,-0.273c0.413,-0.298
                  0.771,-0.67 1.054,-1.093Z"></path>
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
