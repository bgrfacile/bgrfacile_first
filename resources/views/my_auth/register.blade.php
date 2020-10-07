<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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


    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="antialiased bg-white font-family-karla h-screen">

<div class="w-full flex flex-wrap">

    <!-- Login Section -->
    <div class="w-full md:w-1/2 flex flex-col">

        <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
            <a href="/" class="bg-black text-white font-bold text-xl p-4">Bgrfacile</a>
        </div>

        <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <p class="text-center text-3xl">Inscription.</p>
            <form class="flex flex-col pt-3 md:pt-8" onsubmit="event.preventDefault();">
                <div class="flex flex-col pt-4">
                    <label for="email" class="text-lg">Email</label>
                    <input type="email" id="email" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="flex flex-col pt-4">
                    <label for="password" class="text-lg">Password</label>
                    <input type="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <input type="submit" value="Log In" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
            </form>
            <div class="text-center pt-12 pb-12">
                <p>Don't have an account? <a href="register.html" class="underline font-semibold">Register here.</a></p>
            </div>
        </div>

    </div>

    <!-- Image Section -->
    <div class="w-1/2 shadow-2xl">
        <img class="object-cover w-full h-screen hidden md:block" src="https://source.unsplash.com/IXUM4cJynP0">
    </div>
</div>

</body>

</html>
