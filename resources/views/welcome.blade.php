<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body class="antialiased">
<header>
    <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6 ">
        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>
                        Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <span class="font-semibold text-xl tracking-tight">bgrfacile</span>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto md:hidden sm:hidden hidden ">
            <div class="text-sm lg:flex-grow">
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Home
                </a>
                <a href="#responsive-header"
                   class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    cours
                </a>
                <a href="#responsive-header"
                   class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    écoles
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
                    Qui sommes nous?
                </a>
            </div>

        </div>

        @if (Route::has('login'))
            <div class="block">
                @auth
{{--                    <img class="h-8 w-8 rounded-full object-cover" src="https://ui-avatars.com/api/?name=paul&color=7F9CF5&background=EBF4FF" alt="profil de l'utilisateur">--}}
{{--                    <a href="#" class="text-sm text-gray-700 underline">mon compte</a>--}}
                    <div class="">
                        <img class="-ml-2 inline-block h-10 w-10 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                @else
                    <svg class="inline-block mr-4" width="22" height="22" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.7197 10.3078L9.18343 7.77151C9.86852 6.73645 10.1448 5.48385 9.95863 4.25664C9.77248 3.02943 9.13719 1.9151 8.17598 1.12976C7.21477 0.344416 5.99614 -0.0559507 4.75646 0.00630775C3.51678 0.0685662 2.3444 0.589013 1.46671 1.46671C0.589013 2.3444 0.0685662 3.51678 0.00630775 4.75646C-0.0559507 5.99614 0.344416 7.21477 1.12976 8.17598C1.9151 9.13719 3.02943 9.77248 4.25664 9.95863C5.48385 10.1448 6.73645 9.86852 7.77151 9.18343L10.3078 11.7197C10.4961 11.9016 10.7483 12.0022 11.0101 12C11.272 11.9977 11.5224 11.8927 11.7075 11.7075C11.8927 11.5224 11.9977 11.272 12 11.0101C12.0022 10.7483 11.9016 10.4961 11.7197 10.3078ZM2.02697 5.02256C2.02697 4.43009 2.20266 3.85092 2.53182 3.3583C2.86098 2.86568 3.32882 2.48172 3.8762 2.25499C4.42357 2.02827 5.02588 1.96894 5.60697 2.08453C6.18806 2.20011 6.72182 2.48542 7.14076 2.90436C7.5597 3.3233 7.845 3.85706 7.96059 4.43815C8.07618 5.01924 8.01685 5.62155 7.79012 6.16892C7.56339 6.71629 7.17944 7.18414 6.68682 7.5133C6.1942 7.84246 5.61503 8.01815 5.02256 8.01815C4.22808 8.01815 3.46614 7.70254 2.90436 7.14076C2.34257 6.57898 2.02697 5.81704 2.02697 5.02256Z" fill="white"/>
                    </svg>
                    <a href="{{ route('login') }}" class="text-xl tracking-tight text-white">| Se connecter</a>
                @endif
            </div>
        @endif
    </nav>
    <div class="w-full h-13 bg-black">
        <div class="px-6 py-4">
            <div class="font-bold text-white text-xl mb-2">Bienvenue sur bgrfacile</div>
        </div>
    </div>
</header>
<style>

</style>
{{--@if (Route::has('login'))--}}
{{--    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--        @auth--}}
{{--            --}}{{--                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>--}}
{{--            <a href="#" class="text-sm text-gray-700 underline">mon compte</a>--}}
{{--        @else--}}
{{--            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>--}}

{{--            @if (Route::has('register'))--}}
{{--                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--            @endif--}}
{{--        @endif--}}
{{--    </div>--}}
{{--@endif--}}

</div>
</body>
</html>
