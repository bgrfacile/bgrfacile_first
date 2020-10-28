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
<div
    class="flex flex-col min-h-screen items-stretch">

    <header>
        <nav>
            <div class="w-screen flex flex-row items-center p-1 justify-between bg-white shadow-xs">
                <div class="ml-8 text-lg text-gray-700 hidden md:flex">
                    <a href="/">bgrfacile</a>
                </div>

                <div class="flex flex-row-reverse mr-8 hidden md:flex">
                    <time>12h:00</time>
                </div>
            </div>
        </nav>
        <div>
            @yield('baniere')
        </div>
    </header>

    <main class="flex-1" role="main">
        @yield('content')
    </main>


{{--    <footer class="bg-gray-100">--}}
{{--        <div class="container w-full md:w-3/4 mx-auto px-4 flex flex-wrap">--}}
{{--            <div class="md:w-1/2 w-full">--}}
{{--                <p class="my-3">--}}
{{--                    <img--}}
{{--                        src="{{ asset('assets/images/logo-black.png') }}">--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    Pour réussir, travailler dur, ne jamais abandonner et surtout chérir une obsession magnifique.--}}
{{--                    <br>--}}
{{--                    <strong>Walt Disney</strong>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="flex-1 flex flex-col md:flex-row">--}}
{{--                <div class="w-full py-5 px-0 md:px-5">--}}
{{--                    <div class="text-lg uppercase text-gray-800 font-medium">A propos</div>--}}
{{--                    <a class="my-3 block text-gray-600 hover:text-gray-400"--}}
{{--                       href="{{ route('qui-sommes-nous') }}">--}}
{{--                        Qui sommes-nous--}}
{{--                    </a>--}}
{{--                    <a class="my-3 block text-gray-800 hover:text-gray-400"--}}
{{--                       href="{{ route('politique') }}">--}}
{{--                        Politique de confidentialité--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="w-full py-5 px-0 md:px-5">--}}
{{--                    <div class="text-lg uppercase text-gray-500 font-medium">Assistance</div>--}}
{{--                    <a class="my-3 block text-gray-800 hover:text-gray-400"--}}
{{--                       href="{{ route('faq') }}">--}}
{{--                        Centre d'aide--}}
{{--                    </a>--}}
{{--                    <a class="my-3 block text-gray-800 hover:text-gray-400"--}}
{{--                       href="{{ route('contact') }}">--}}
{{--                        contact--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="bg-gray-100 pt-2 ">--}}
{{--            <div class="flex pb-5 px-3 m-auto pt-5 border-t text-gray-800 text-sm flex-col md:flex-row max-w-6xl">--}}
{{--                <div class="mt-2">© Copyright 2020. Tous droits réservés.</div>--}}
{{--                <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">--}}
{{--                    --}}{{--telephone--}}
{{--                    <a href="tel:+242066443279" class="w-6 mx-1">--}}
{{--                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400 h-full w-full"--}}
{{--                             x="0px" y="0px"--}}
{{--                             viewBox="0 0 348.077 348.077"--}}
{{--                             xml:space="preserve">--}}
{{--            <path d="M340.273,275.083l-53.755-53.761c-10.707-10.664-28.438-10.34-39.518,0.744l-27.082,27.076--}}
{{--				c-1.711-0.943-3.482-1.928-5.344-2.973c-17.102-9.476-40.509-22.464-65.14-47.113c-24.704-24.701-37.704-48.144-47.209-65.257--}}
{{--				c-1.003-1.813-1.964-3.561-2.913-5.221l18.176-18.149l8.936-8.947c11.097-11.1,11.403-28.826,0.721-39.521L73.39,8.194--}}
{{--				C62.708-2.486,44.969-2.162,33.872,8.938l-15.15,15.237l0.414,0.411c-5.08,6.482-9.325,13.958-12.484,22.02--}}
{{--				C3.74,54.28,1.927,61.603,1.098,68.941C-6,127.785,20.89,181.564,93.866,254.541c100.875,100.868,182.167,93.248,185.674,92.876--}}
{{--				c7.638-0.913,14.958-2.738,22.397-5.627c7.992-3.122,15.463-7.361,21.941-12.43l0.331,0.294l15.348-15.029--}}
{{--				C350.631,303.527,350.95,285.795,340.273,275.083z">--}}

{{--            </path>--}}
{{--                            </svg>--}}
{{--                    </a>--}}
{{--                    --}}{{--facebook--}}
{{--                    <a href="https://www.facebook.com/bgrfacile" class="w-6 mx-1">--}}
{{--                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400 h-full w-full"--}}
{{--                             viewBox="0 0 24 24">--}}
{{--                            <path id="Facebook" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627--}}
{{--                  5.373,-12 12,-12c6.627,0 12,5.373--}}
{{--                  12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422--}}
{{--                  0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784--}}
{{--                  -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z"></path>--}}
{{--                        </svg>--}}
{{--                    </a>--}}
{{--                    --}}{{--whatsapp--}}
{{--                    <a href="https://wa.me/+242066443279?text=salut%20je%20viens%20du%20site%20bgrfacile"--}}
{{--                       class="w-6 mx-1">--}}
{{--                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400 h-full w-full"--}}
{{--                             viewBox="0 0 24 24">--}}
{{--                            <path--}}
{{--                                d="m195.183594 152.246094c-4.546875-10.109375-9.335938-10.3125-13.664063-10.488282-3.539062-.152343-7.589843-.144531-11.632812-.144531-4.046875 0-10.625 1.523438-16.1875 7.597657-5.566407 6.074218-21.253907 20.761718-21.253907 50.632812 0 29.875 21.757813 58.738281 24.792969 62.792969 3.035157 4.050781 42 67.308593 103.707031 91.644531 51.285157 20.226562 61.71875 16.203125 72.851563 15.191406 11.132813-1.011718 35.917969-14.6875 40.976563-28.863281 5.0625-14.175781 5.0625-26.324219 3.542968-28.867187-1.519531-2.527344-5.566406-4.046876-11.636718-7.082032-6.070313-3.035156-35.917969-17.726562-41.484376-19.75-5.566406-2.027344-9.613281-3.035156-13.660156 3.042969-4.050781 6.070313-15.675781 19.742187-19.21875 23.789063-3.542968 4.058593-7.085937 4.566406-13.15625 1.527343-6.070312-3.042969-25.625-9.449219-48.820312-30.132812-18.046875-16.089844-30.234375-35.964844-33.777344-42.042969-3.539062-6.070312-.058594-9.070312 2.667969-12.386719 4.910156-5.972656 13.148437-16.710937 15.171875-20.757812 2.023437-4.054688 1.011718-7.597657-.503906-10.636719-1.519532-3.035156-13.320313-33.058594-18.714844-45.066406zm0 0"--}}
{{--                                fill-rule="evenodd"></path>--}}
{{--                        </svg>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}
</div>

</body>
</html>
@yield('script')
<script>
    import Button from "../../js/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>
<script>
    import Button from "../../js/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>
