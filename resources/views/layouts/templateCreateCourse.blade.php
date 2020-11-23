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
    <link rel="stylesheet" href="{{ asset('css/app3.css') }}">
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
{{--                    <time>12h:00</time>--}}
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
<script src="{{ asset('js/app3.js') }}"></script>
