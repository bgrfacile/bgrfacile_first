<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>connexion| bgrfacile.com</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Mitr|Roboto+Slab|Source+Sans+Pro&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <meta name="theme-color" content="#ffffff">
    <script src="../../Tassets/js/config.navbar-vertical.js"></script>

    <link href="../../Tassets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl" />
    <link href="../../Tassets/css/theme.min.css" rel="stylesheet" id="style-default" />
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            linkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            linkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body class="bg-white ">

<main class="main" id="top">
    <div class="container-fluid">
        <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
        </script>
        <div class="row min-vh-100 bg-100">
            <div class="col-6 d-none d-lg-block position-relative">
                <div class="bg-holder" style="background-image:url(../../Tassets/img/generic/14.jpg);background-position: 50% 20%;"></div>
                <!--/.bg-holder-->
            </div>
            <div class="col-sm-10 col-md-6 px-sm-0 align-self-center mx-auto py-5">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-9 col-xl-8 col-xxl-6">
                        <div class="card">
                            <div class="card-header bg-circle-shape text-center p-2">
                                <a class="font-sans-serif font-weight-bolder fs-4 z-index-1 position-relative link-light" href="#">
                                    bgrfacile
                                </a>
                            </div>
                            <div class="card-body p-4">
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                        <h3>Connexion</h3>
                                    </div>
                                    <div class="col-auto fs--1 text-600"><span><a href="#">Créer un compte</a></span></div>
                                </div>
                                <form>
                                    <div class="mb-3"><label class="form-label" for="split-login-email">Email address</label><input class="form-control" id="split-login-email" type="email" /></div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between"><label class="form-label" for="split-login-password">Password</label><a class="fs--1" href="forgot-password.html">Forgot Password?</a></div><input class="form-control" id="split-login-password" type="password" />
                                    </div>
                                    <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="split-checkbox" /><label class="form-check-label" for="split-checkbox">Remember me</label></div>
                                    <div class="mb-3"><button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Log in</button></div>
                                </form>
                                <div class="position-relative mt-4">
                                    <hr class="bg-300" />
                                    <div class="position-absolute top-50 left-50 translate-middle px-3 bg-white font-sans-serif fs--1 text-500 text-nowrap">or log in with</div>
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col-sm-4">
                                        <a class="btn btn-outline-google-plus btn-sm btn-block" href="#">
                                            <span class="fab fa-google-plus-g mr-2" data-fa-transform="grow-8"></span>
                                            <div>google</div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a class="btn btn-outline-github btn-sm btn-block" href="#">
                                            <span class="fab fa-github mr-2" data-fa-transform="grow-8"></span>
                                            <div>GitHub</div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a class="btn btn-outline-facebook btn-sm btn-block" href="#">
                                            <span class="fab fa-facebook-square mr-2" data-fa-transform="grow-8"></span>
                                            <div>facebook</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<div class="w-full flex flex-wrap">

    <!-- Login Section -->
    <div class="w-full md:w-1/2 flex flex-col">

        <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
            <a href="/" class="bg-black text-white font-bold text-xl p-4">Bgrfacile</a>
        </div>

        <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <p class="text-center text-3xl">Connexion.</p>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label for="email" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">
                        Email
                    </label>
                    <div class="relative">
                        <input
                            type="email"
                            name="email"
                            id="email"
                            required="required"
                            placeholder="votre email"
                            autofocus="autofocus"
                            value="{{ old('email') }}"
                            class="text-sm sm:text-base relative w-full
                            border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-2 @if($errors->has('email'))border-red-500 @endif">
                    </div>
                    @if($errors->has('email'))
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
			            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>

                <div class="mt-4" x-data="{ show: true }">
                    <label for="password" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">
                        Password
                    </label>
                    <div class="relative">
                        <input
                            :type="show ? 'password' : 'text'"
                            name="password"
                            required="required"
                            autocomplete="current-password"
                            class="text-sm sm:text-base relative w-full
                            border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-2">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">

                            <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                 :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                                 viewbox="0 0 576 512">
                                <path fill="currentColor"
                                      d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                </path>
                            </svg>

                            <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                 :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                                 viewbox="0 0 640 512">
                                <path fill="currentColor"
                                      d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                </path>
                            </svg>

                        </div>
                    </div>
                    @if($errors->has('password'))
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
			            {{ $errors->first('password') }}
                        </span>
                    @endif
                </div>

                <div class="block mt-4">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">Souviens-toi de <moi></moi></span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                           href="{{ route('password.request') }}">
                            Mot de passe oublié?
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        s'identifier
                    </x-jet-button>
                </div>
            </form>
            <div class="text-center pt-12 pb-12">
                <p>Vous n'avez pas de compte? <a href="{{ url('/register') }}" class="underline font-semibold">Inscrivez-vous
                        ici.</a></p>
            </div>
            <div class="mx-auto -mb-6 pb-1">
                <span class="text-center text-xs text-gray-700">ou connectez-vous avec</span>
            </div>
            <div class="flex items-center w-full mt-4 mb-5">
                {{--                google--}}
                <div class="w-full md:w-1/3 px-3 pt-4 mx-2 border-t border-gray-400">
                    <a
                        href="{{ route('login.google') }}"
                        class='appearance-none flex items-center justify-center block w-full bg-gray-100 text-gray-700 shadow border border-gray-500 rounded-lg py-3 px-3 leading-tight hover:bg-gray-200 hover:text-gray-700 focus:outline-none'>

                        <svg class="h-6 w-6 fill-current text-gray-700"
                             enable-background="new 0 0 512 512"
                             viewBox="0 0 512 512"
                             xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="m120 256c0-25.367 6.989-49.13 19.131-69.477v-86.308h-86.308c-34.255 44.488-52.823 98.707-52.823 155.785s18.568 111.297 52.823 155.785h86.308v-86.308c-12.142-20.347-19.131-44.11-19.131-69.477z"
                                    fill="#fbbd00"/>
                                <path
                                    d="m256 392-60 60 60 60c57.079 0 111.297-18.568 155.785-52.823v-86.216h-86.216c-20.525 12.186-44.388 19.039-69.569 19.039z"
                                    fill="#0f9d58"/>
                                <path
                                    d="m139.131 325.477-86.308 86.308c6.782 8.808 14.167 17.243 22.158 25.235 48.352 48.351 112.639 74.98 181.019 74.98v-120c-49.624 0-93.117-26.72-116.869-66.523z"
                                    fill="#31aa52"/>
                                <path
                                    d="m512 256c0-15.575-1.41-31.179-4.192-46.377l-2.251-12.299h-249.557v120h121.452c-11.794 23.461-29.928 42.602-51.884 55.638l86.216 86.216c8.808-6.782 17.243-14.167 25.235-22.158 48.352-48.353 74.981-112.64 74.981-181.02z"
                                    fill="#3c79e6"/>
                                <path
                                    d="m352.167 159.833 10.606 10.606 84.853-84.852-10.606-10.606c-48.352-48.352-112.639-74.981-181.02-74.981l-60 60 60 60c36.326 0 70.479 14.146 96.167 39.833z"
                                    fill="#cf2d48"/>
                                <path
                                    d="m256 120v-120c-68.38 0-132.667 26.629-181.02 74.98-7.991 7.991-15.376 16.426-22.158 25.235l86.308 86.308c23.753-39.803 67.246-66.523 116.87-66.523z"
                                    fill="#eb4132"/>
                            </g>
                        </svg>
                    </a>
                </div>
                {{--                facebook--}}
                <div class="w-full md:w-1/3 px-3 pt-4 mx-2">
                    <a
                        href="#"
                        class="appearance-none flex items-center justify-center block w-full bg-gray-100 text-gray-700 shadow border border-gray-500 rounded-lg py-3 px-3 leading-tight hover:bg-gray-200 hover:text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6 fill-current text-gray-700" viewBox="0 0 512 512">
                            <path
                                d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"></path>
                        </svg>
                    </a>
                </div>
                {{--                github--}}
                <div class="w-full md:w-1/3 px-3 pt-4 mx-2 border-t border-gray-400">
                    <a
                        href="{{ route('login.github') }}"
                        class="appearance-none flex items-center justify-center block w-full bg-gray-100 text-gray-700 shadow border border-gray-500 rounded-lg py-3 px-3 leading-tight hover:bg-gray-200 hover:text-gray-700 focus:outline-none">
                        <svg
                            class="h-6 w-6 fill-current text-gray-700"
                            enable-background="new 0 0 24 24"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m12 .5c-6.63 0-12 5.28-12 11.792 0 5.211 3.438 9.63 8.205 11.188.6.111.82-.254.82-.567 0-.28-.01-1.022-.015-2.005-3.338.711-4.042-1.582-4.042-1.582-.546-1.361-1.335-1.725-1.335-1.725-1.087-.731.084-.716.084-.716 1.205.082 1.838 1.215 1.838 1.215 1.07 1.803 2.809 1.282 3.495.981.108-.763.417-1.282.76-1.577-2.665-.295-5.466-1.309-5.466-5.827 0-1.287.465-2.339 1.235-3.164-.135-.298-.54-1.497.105-3.121 0 0 1.005-.316 3.3 1.209.96-.262 1.98-.392 3-.398 1.02.006 2.04.136 3 .398 2.28-1.525 3.285-1.209 3.285-1.209.645 1.624.24 2.823.12 3.121.765.825 1.23 1.877 1.23 3.164 0 4.53-2.805 5.527-5.475 5.817.42.354.81 1.077.81 2.182 0 1.578-.015 2.846-.015 3.229 0 .309.21.678.825.56 4.801-1.548 8.236-5.97 8.236-11.173 0-6.512-5.373-11.792-12-11.792z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Image Section -->
    <div class="w-1/2 shadow-2xl">
        <img class="object-cover w-full h-screen hidden md:block" src="https://source.unsplash.com/IXUM4cJynP0">
    </div>
</div>



<script src="../../vendors/popper/popper.min.js"></script>
<script src="../../vendors/bootstrap/bootstrap.min.js"></script>
<script src="../../vendors/anchorjs/anchor.min.js"></script>
<script src="../../vendors/is/is.min.js"></script>
<script src="../../vendors/fontawesome/all.min.js"></script>
<script src="../../vendors/lodash/lodash.min.js"></script>
<script src="../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
<script src="../../vendors/list.js/list.min.js"></script>
<script src="../../Tassets/js/theme.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

</body>

</html>
