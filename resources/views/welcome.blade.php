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
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}">


    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body class="antialiased">
<header>
    <nav class="MS-nav flex items-center justify-between flex-wrap bg-teal-500 p-6 ">
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
                        <img class="-ml-2 inline-block h-10 w-10 rounded-full text-white shadow-solid"
                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                             alt="">
                    </div>
                @else
                    <svg class="inline-block mr-4" width="22" height="22" viewBox="0 0 12 12" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.7197 10.3078L9.18343 7.77151C9.86852 6.73645 10.1448 5.48385 9.95863 4.25664C9.77248 3.02943 9.13719 1.9151 8.17598 1.12976C7.21477 0.344416 5.99614 -0.0559507 4.75646 0.00630775C3.51678 0.0685662 2.3444 0.589013 1.46671 1.46671C0.589013 2.3444 0.0685662 3.51678 0.00630775 4.75646C-0.0559507 5.99614 0.344416 7.21477 1.12976 8.17598C1.9151 9.13719 3.02943 9.77248 4.25664 9.95863C5.48385 10.1448 6.73645 9.86852 7.77151 9.18343L10.3078 11.7197C10.4961 11.9016 10.7483 12.0022 11.0101 12C11.272 11.9977 11.5224 11.8927 11.7075 11.7075C11.8927 11.5224 11.9977 11.272 12 11.0101C12.0022 10.7483 11.9016 10.4961 11.7197 10.3078ZM2.02697 5.02256C2.02697 4.43009 2.20266 3.85092 2.53182 3.3583C2.86098 2.86568 3.32882 2.48172 3.8762 2.25499C4.42357 2.02827 5.02588 1.96894 5.60697 2.08453C6.18806 2.20011 6.72182 2.48542 7.14076 2.90436C7.5597 3.3233 7.845 3.85706 7.96059 4.43815C8.07618 5.01924 8.01685 5.62155 7.79012 6.16892C7.56339 6.71629 7.17944 7.18414 6.68682 7.5133C6.1942 7.84246 5.61503 8.01815 5.02256 8.01815C4.22808 8.01815 3.46614 7.70254 2.90436 7.14076C2.34257 6.57898 2.02697 5.81704 2.02697 5.02256Z"
                            fill="white"/>
                    </svg>
                    <a href="{{ route('login') }}" class="text-xl tracking-tight text-white">| Se connecter</a>
                @endif
            </div>
        @endif
    </nav>
    <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
        <!--Left Col-->
        <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 px-6">
            <p class="uppercase tracking-loose">bgrfacile</p>
            <h1 class="font-bold text-3xl my-4">Facilitant l’apprentissage</h1>
            <p class="leading-normal mb-4">Découvrer une nouvelle facon d’apprendre, d’enseigner et partager vos
                connaissances.</p>
            <p class="flex">
                <button
                    class="ml-3 bg-transparent hover:bg-gray-900 text-gray-900 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-gray-900 hover:border-transparent">
                    Super Button
                </button>
                <button
                    class="ml-3 bg-transparent hover:bg-gray-900 text-gray-900 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-gray-900 hover:border-transparent">
                    Super Button
                </button>
            </p>
        </div>
        <!--Right Col-->
        <div class="w-full lg:w-1/2 lg:py-6 text-center">
            <!--Add your product image here-->
            <svg class="fill-current text-gray-900 w-3/5 mx-auto" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 20 20">
                <path
                    d="M17 6V5h-2V2H3v14h5v4h3.25H11a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6zm-5.75 14H3a2 2 0 0 1-2-2V2c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v4a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-5.75zM11 8v8h6V8h-6zm3 11a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
            </svg>
        </div>

    </div>
</header>

<section class="bg-white border-b py-8">
    <div class="container max-w-5xl mx-auto m-8">
        <h3 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">Utilisateurs</h3>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>

        <div class="flex flex-wrap">
            <div class="ml-auto mr-auto w-5/6 sm:w-1/2 p-6 text-center">
                <h4 class="text-2xl text-gray-800 font-bold leading-none mb-3">ce sont les acteurs principaux du site</h4>
                <ul class="ml-auto mr-auto flex justify-between">
                    <li class="">
                        <h5 class="text-2xl">Etudiants</h5>
                        <h6 class="text-3xl">450</h6>
                    </li>
                    <li class="">
                        <h5 class="text-2xl">Professeurs</h5>
                        <h6 class="text-3xl">33</h6>
                    </li>
                    <li class="">
                        <h5 class="text-2xl">Ecoles</h5>
                        <h6 class="text-3xl">12</h6>
                    </li>
                </ul>
            </div>

        </div>


    </div>
</section>

<section class="bg-gray-100 mt-6 mb-12">
    <div class="flex flex-wrap relative">
        <div class="w-5/6 sm:w-1/2 p-6">
            <div class="w-1/2 mx-auto mt-12 mb-12">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">Lorem ipsum dolor sit amet</h3>
                <p class="text-gray-600 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.<br><br>

                    Images from: <a class="text-orange-500 underline" href="https://undraw.co/">undraw.co</a></p>
            </div>
        </div>
        <div class="w-full sm:w-1/2 p-6">
            <img class="max-w-full" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/3O4qHWNDTxa0tSrusHnU" alt="">
        </div>
    </div>
</section>

<section class="bg-gray-100 mt-6 mb-12">
    <div class="flex flex-wrap relative">
        <div class="w-full sm:w-1/2 p-6">
            <img class="max-w-full" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/3O4qHWNDTxa0tSrusHnU" alt="">
        </div>
        <div class="w-5/6 sm:w-1/2 p-6">
            <div class="w-1/2 mx-auto mt-12 mb-12">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">Lorem ipsum dolor sit amet</h3>
                <p class="text-gray-600 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.<br><br>

                    Images from: <a class="text-orange-500 underline" href="https://undraw.co/">undraw.co</a></p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white mt-6 mb-12">
    <div class="flex flex-wrap relative">
        <div class="w-full sm:w-1/2 p-6 justify-end">
            <svg class="ml-auto" width="438px" height="274px" viewBox="0 0 438 274" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <!-- Generator: Sketch 41 (35326) - http://www.bohemiancoding.com/sketch -->
                <title>step1-create</title>
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Exports" transform="translate(0.000000, -55.000000)">
                        <g id="step1-create" transform="translate(0.000000, 56.000000)">
                            <g id="Group-4" transform="translate(68.000000, 30.000000)">
                                <g id="Group-2" transform="translate(300.850170, 204.318262) rotate(-25.000000) translate(-300.850170, -204.318262) translate(299.850170, 203.318262)"></g>
                                <g id="books-right" transform="translate(250.000000, 189.000000)">
                                    <path d="M27.9747645,38.2200679 L73.3315331,38.2200679" id="Path-6" stroke="#E0EAEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M7.78126357,43 L73.1380322,43" id="Path-6-Copy" stroke="#E0EAEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M57.9747645,47.6776695 L73.3315331,47.6776695" id="Path-6-Copy-2" stroke="#E0EAEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <polygon id="Rectangle-6" fill="#FF8F5C" points="63 38 70 38 70 47 66.5401478 43 63 47"></polygon>
                                    <path d="M0,28 C0,24.1340068 3.13242211,21 6.99506467,21 L74,21 L74,35 L6.99506467,35 C3.13179713,35 0,31.8685323 0,28 L0,28 L0,28 Z" id="Rectangle-5-Copy" fill="#85DAD2"></path>
                                    <path d="M17.7812636,27 L73.1380322,27" id="Path-6-Copy-3" stroke="#5AC6BC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M17.7812636,14 L69.8873507,14" id="Path-6-Copy-4" stroke="#5AC6BC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M0,43 C0,38.0294373 4.03111307,34 8.99987127,34 L74,34 L74,52 L8.99987127,52 C4.02937962,52 0,47.9738272 0,43 L0,43 L0,43 Z" id="Rectangle-5" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M0,27 C0,23.1340068 3.13242211,20 6.99506467,20 L74,20 L74,34 L6.99506467,34 C3.13179713,34 0,30.8685323 0,27 L0,27 L0,27 Z" id="Rectangle-5-Copy-3" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M12.417739,14.8638533 C12.417739,12.0272378 14.7105656,9.7277066 17.5530922,9.7277066 L70,9.7277066 L70,20 L17.5530922,20 C14.7169149,20 12.417739,17.7023318 12.417739,14.8638533 L12.417739,14.8638533 L12.417739,14.8638533 Z" id="Rectangle-5-Copy-2" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M21.2254924,5.2277066 C21.2254924,2.74242522 23.2329402,0.727706597 25.7194295,0.727706597 L66.582261,0.727706597 L66.582261,9.7277066 L25.7194295,9.7277066 C23.2374966,9.7277066 21.2254924,7.71462022 21.2254924,5.2277066 L21.2254924,5.2277066 L21.2254924,5.2277066 Z" id="Rectangle-5-Copy-2" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                </g>
                                <g id="Group-3" transform="translate(75.000000, 34.000000)">
                                    <g id="hand" transform="translate(3.000000, 120.000000)">
                                        <path d="M9.65959048,66.5516558 L23.8703251,57.4311472 C23.8703251,57.4311472 39.2922254,55.2613153 35.3132752,74.4975324 L24.8646002,81.1406774 L9.65959048,66.5516558 Z" id="Path-5" fill="#E0EAEF"></path>
                                        <path d="M5.88276504,69.0307397 L23.8713994,57.0788863 L40.7917455,0.0333003548 L41.8243148,39.1946715 C41.8243148,39.1946715 42.3593478,61.7354204 39.2879726,69.0307397 C36.4305638,75.8178329 24.0379629,81.441909 24.0379629,81.441909" id="Path-4" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                        <path d="M25,79.5 C25,72.5964406 19.4035594,67 12.5,67 C5.59644063,67 0,72.5964406 0,79.5 C0,86.4035594 25,86.4035594 25,79.5 Z" id="Oval-2" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7"></path>
                                    </g>
                                    <g id="Group-10" transform="translate(39.000000, 0.000000)">
                                        <g id="Group-9" transform="translate(5.383466, 113.358770)">
                                            <rect id="Rectangle-12-Copy" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" x="0.390455024" y="0.530429818" width="25.4802701" height="81.2400906" rx="3"></rect>
                                            <path d="M68.14079,12.766571 C68.14079,8.34534691 71.6842714,4.25510484 76.0590299,3.63023789 L90.8351592,1.51969516 C94.6602555,0.973338999 97.7611088,3.66053588 97.7611088,7.53174382 L97.7611088,73.3765344 L71.1439497,73.3765344 C69.4853504,73.3765344 68.14079,72.0366839 68.14079,70.3841003 L68.14079,12.766571 Z" id="Rectangle-12-Copy-3" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7"></path>
                                            <rect id="Rectangle-12" fill="#F5F6F7" x="9.96679666" y="0.530429818" width="74.5127169" height="93.612589" rx="3"></rect>
                                            <path d="M9.96679666,87.4617275 L9.96679666,69.4891316 L54.2755693,69.4891316 C55.9355791,69.4891316 57.2812829,70.8399974 57.2812829,72.49734 L57.2812829,84.453519 C57.2812829,86.1149067 55.9354381,87.4617275 54.2755693,87.4617275 L9.96679666,87.4617275 Z" id="Combined-Shape" fill="#DAE2E6"></path>
                                            <path d="M21.3599853,1.23736936 L74.8120464,1.23736936 C74.8692255,1.23736936 74.9261245,1.23857324 74.9827196,1.24095674 C71.7457058,11.6468989 60.9683376,19.2910047 48.1719102,19.2910047 C35.3740124,19.2910047 24.5956378,11.645142 21.3599853,1.23736936 Z" id="Combined-Shape" fill="#C5D3DA"></path>
                                            <path d="M11.5642185,5.41638421 C11.5642185,2.71794611 13.753889,0.530429818 16.453206,0.530429818 L81.187948,0.530429818 C83.8880612,0.530429818 86.0769354,2.73057619 86.0769354,5.42242351 M86.0769354,26.8670481 L86.0769354,89.2505055 C86.0769354,91.952566 83.887265,94.1430188 81.187948,94.1430188 L16.453206,94.1430188 C13.7530928,94.1430188 11.5642185,91.9589263 11.5642185,89.2556987 L11.5642185,26.1857361" id="Rectangle-12-Copy-4" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                            <path d="M28.9278534,87.4617275 L28.9278534,69.4891316 L81.4789049,69.4891316 C83.1360953,69.4891316 84.4795136,70.8399974 84.4795136,72.49734 L84.4795136,87.4617275 L28.9278534,87.4617275 Z" id="Combined-Shape" fill="#DAE2E6"></path>
                                            <polygon id="Path-85" fill="#DAE2E6" points="26.2643882 68.1545362 44.5867506 37.5367384 58.0743369 38.4158841 74.4262366 69.8792163"></polygon>
                                            <polyline id="Path-47" stroke="#404F54" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#F5F6F7" points="24.8707319 78.2829688 40.121271 80.4354042 50.3457378 78.8142964 50.351002 32.1357065 43.6868123 32.1357065 37.6108669 62.7688738 28.9567677 64.3346528"></polyline>
                                            <polyline id="Path-47-Copy" stroke="#404F54" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#F5F6F7" transform="translate(63.169617, 56.285555) scale(-1, 1) translate(-63.169617, -56.285555) " points="50.4294819 78.2829688 65.680021 80.4354042 75.9044878 78.8142964 75.909752 32.1357065 69.2455623 32.1357065 63.169617 62.7688738 54.5155178 64.3346528"></polyline>
                                            <rect id="Rectangle-13" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" x="0.390455024" y="63.0994441" width="33.5323568" height="17.9725959" rx="3"></rect>
                                            <rect id="Rectangle-13-Copy-2" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" x="68.0079649" y="63.0994441" width="29.6203188" height="17.9725959" rx="3"></rect>
                                            <rect id="Rectangle-13-Copy" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" x="19.8421186" y="63.0994441" width="7.11308883" height="17.9725959" rx="3"></rect>
                                            <ellipse id="Oval-7" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#FF8F5C" cx="22.8603548" cy="74.287042" rx="6.28598084" ry="6.28598084"></ellipse>
                                            <path d="M27.6973189,74.2180719 C27.6973189,71.7284449 25.6790774,69.7102034 23.1894503,69.7102034 C20.6998233,69.7102034 18.6815817,71.7284449 18.6815817,74.2180719 C18.6815817,76.707699 27.6973189,76.707699 27.6973189,74.2180719 Z" id="Oval-11" fill="#FFBC9E"></path>
                                            <path d="M33.9228119,1.1989772 L33.9228119,24.6331684 C33.9228119,25.7352078 34.8138502,26.6285872 35.9233272,26.6285872 L43.040292,26.6285872 C44.1451462,26.6285872 45.0408074,25.7283679 45.0408074,24.6270951 L45.0408074,14.908183" id="Path-48" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#FF8F5C"></path>
                                        </g>
                                        <g id="Group-6-Copy">
                                            <path d="M21.6735402,112.332713 C21.6735402,112.332713 33.2718001,102.395451 55.1224495,102.395451 C76.9730989,102.395451 89.4856253,111.909885 89.4856253,111.909885 L95.6660985,85.7655341 L92.3464975,63.7505401 L64.6392773,55.4758701 L19.7676217,58.5529432 L15.0447094,87.4855677 L21.6735402,112.332713 Z" id="Path-45" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#2FC3B6"></path>
                                            <path d="M100.527826,47.7269433 L100.527826,105.292438 C100.527826,105.292438 100.527826,118.431014 91.2056589,122.143925 C81.8834917,125.856837 75.708603,123.631802 75.708603,123.631802 C75.708603,123.631802 81.5244865,119.083606 84.3638184,115.456058 C87.2031503,111.828511 86.931902,105.094372 86.931902,105.094372 L86.931902,52.0342746 L100.527826,47.7269433 Z" id="Path-44" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#2FC3B6"></path>
                                            <ellipse id="Oval-5" stroke="#1F5F59" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" cx="13.769917" cy="67.8807937" rx="9.33622721" ry="9.33622721"></ellipse>
                                            <ellipse id="Oval-5-Copy" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" cx="90.1846155" cy="67.8807937" rx="9.33622721" ry="9.33622721"></ellipse>
                                            <path d="M98.530485,69.0616891 L89.1984979,66.706865 L89.1984979,57.4686653 L98.1609682,65.6445044 C98.1609682,65.6445044 98.8608532,67.0704672 98.530485,69.0616891 Z" id="Path-3" fill="#DAE2E6"></path>
                                            <rect id="Rectangle-31-Copy-3" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#FF8F5C" x="40.8696745" y="101.015169" width="27.0239513" height="26.9406514" rx="13.4703257"></rect>
                                            <rect id="Rectangle-31-Copy-6" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" x="45.3926213" y="86.9515378" width="17.9780578" height="32.2363121" rx="8.98902891"></rect>
                                            <rect id="Rectangle-31" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#FFFFFF" x="20.5434891" y="18.7778717" width="67.6763222" height="87.138914" rx="33.8381611"></rect>
                                            <path d="M87.1565137,62.3830489 L87.1565137,40.837523 L67.9594339,34.5499606 C66.6582766,30.9062273 63.966741,27.9720862 63.966741,27.9720862 L45.2569878,31.129736 L17.9917429,54.4076304 L16.4269175,75.6764808 C16.4269175,75.6764808 30.8748375,71.3412563 39.9983552,67.9634166 C47.358104,65.2385848 59.8975678,51.187922 64.9330372,45.5086416 C66.0707407,48.4017109 87.1565137,62.3830489 87.1565137,62.3830489 Z" id="Combined-Shape" fill="#DAE2E6"></path>
                                            <path d="M65.4966078,37.1144083 C62.1506098,41.9277622 57.5509456,46.8101508 51.3257705,50.4035262 C33.6930328,60.5817213 23.4932974,62.7796306 23.4932974,62.7796306 L23.9911179,105.196489 C23.9911179,105.196489 23.9911179,113.385795 27.1328119,117.073975 C30.274506,120.762155 35.2008545,124.442356 35.2008545,124.442356 C35.2008545,124.442356 25.3824624,127.210685 14.3282947,124.442356 C3.27412703,121.674028 0.457931022,107.883443 0.457931022,107.883443 L0.733701816,48.5869601 C1.06277114,38.5718222 -1.38443855,5.50861913 37.0038582,1.15041208 C58.0764403,-2.47066986 66.9992659,4.38841398 70.7770096,10.7667962 C70.9526142,10.6767227 71.1316824,10.5925626 71.3142794,10.5146357 C79.3928518,7.06694451 88.5948104,7.75833323 96.0282948,18.8653221 C103.461779,29.9723109 100.417731,66.0705112 100.417731,66.0705112 L87.6546234,57.3102639 C87.6546234,57.3102639 78.8072164,53.281152 72.2725247,46.6323765 C69.4637513,43.774567 67.1836222,40.2287773 65.4966078,37.1144083 Z" id="Combined-Shape" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#85DAD2"></path>
                                            <path d="M65.6600112,35.5750459 C62.8781184,40.5197885 56.4432908,46.4706235 51.1256121,49.5401622 C36.0633474,58.2345959 22.4288254,62.0447512 22.4288254,62.0447512 L23.0176857,103.445199 C23.0176857,103.445199 22.4288254,111.782797 25.1768081,116.007125 C25.1768081,116.007125 26.3717867,117.498646 20.016495,116.007125 C10.5737867,113.642359 8.16813135,101.862144 8.16813135,101.862144 L8.40370071,51.2098097 C8.40370071,51.2098097 10.2204327,13.8605831 39.3864502,10.6884877 C57.3871026,7.59528167 65.0091729,13.4544576 68.2362035,18.9030088 C68.3862096,18.8260676 68.5391735,18.7541762 68.6951518,18.6876093 C75.5960425,15.7425172 83.4565539,16.3331164 89.8063966,25.8209457 C96.1562393,35.3087751 94.619607,60.8488932 94.619607,60.8488932 C94.619607,60.8488932 90.1913912,58.1435691 88.2273017,56.4515249 C70.4076872,48.5059562 65.6600112,35.5750459 65.6600112,35.5750459 Z" id="Combined-Shape-Copy" fill="#2FC3B6"></path>
                                            <polyline id="Path-35" stroke="#404F54" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#F5F6F7" points="53.06894 69.0470723 53.06894 81.9543013 56.9182187 81.9543013"></polyline>
                                            <path d="M48.4943688,88.0844944 C48.4943688,91.6557703 51.3894599,94.5508613 54.9607357,94.5508613 C58.5320115,94.5508613 61.4271026,91.6557703 61.4271026,88.0844944 L48.4943688,88.0844944 Z" id="Oval-5-Copy-2" fill="#FF8F5C"></path>
                                            <path d="M67.2347439,66.250575 C67.2347439,68.9571252 69.4288364,71.1512177 72.1353866,71.1512177 C74.8419369,71.1512177 77.0360293,68.9571252 77.0360293,66.250575" id="Oval-5-Copy-5" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" transform="translate(72.135387, 68.700896) rotate(-180.000000) translate(-72.135387, -68.700896) "></path>
                                            <path d="M31.2895521,66.250575 C31.2895521,68.9571252 33.4836445,71.1512177 36.1901948,71.1512177 C38.896745,71.1512177 41.0908375,68.9571252 41.0908375,66.250575" id="Oval-5-Copy-6" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" transform="translate(36.190195, 68.700896) rotate(-180.000000) translate(-36.190195, -68.700896) "></path>
                                        </g>
                                    </g>
                                    <g id="mouse" transform="translate(3.000000, 194.000000)">
                                        <path d="M25.4192728,13.1080845 C25.2682678,6.33646549 19.7316666,0.893494871 12.9237915,0.893494871 C6.11591638,0.893494871 0.579315188,6.33646549 0.428310119,13.1080845 L25.4192728,13.1080845 L25.4192728,13.1080845 Z" id="Combined-Shape-Copy-3" fill="#F5F6F7"></path>
                                        <path d="M15.8840433,3.78720178 C10.6889931,3.78720178 6.46404478,7.94070119 6.34881368,13.1080845 L25.4192728,13.1080845 C25.3040418,7.94070119 21.0790934,3.78720178 15.8840433,3.78720178 Z" id="Combined-Shape" fill="#FF8F5C"></path>
                                        <path d="M25.4192728,13.1080845 C25.2682678,6.33646549 19.7316666,0.893494871 12.9237915,0.893494871 C6.11591638,0.893494871 0.579315188,6.33646549 0.428310119,13.1080845 L25.4192728,13.1080845 L25.4192728,13.1080845 Z" id="Combined-Shape-Copy-2" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                    </g>
                                    <g id="hand" transform="translate(0.000000, 187.000000)" stroke="#404F54" stroke-width="2" fill="#F5F6F7" stroke-linecap="round">
                                        <rect id="Rectangle-14" transform="translate(28.286329, 12.593495) rotate(29.000000) translate(-28.286329, -12.593495) " x="24.398366" y="6.84349462" width="7.77592691" height="11.5" rx="3.88796346"></rect>
                                        <rect id="Rectangle-14-Copy-3" x="13.4553639" y="0.126539322" width="6.0001508" height="15" rx="3.0000754"></rect>
                                        <rect id="Rectangle-14-Copy" x="6.45536393" y="1.12653932" width="6.0001508" height="15" rx="3.0000754"></rect>
                                        <rect id="Rectangle-14-Copy-2" x="0.455363928" y="5.62653932" width="6.0001508" height="11.5" rx="3.0000754"></rect>
                                    </g>
                                    <g id="laptop" transform="translate(38.000000, 133.000000)">
                                        <path d="M111.096486,43.6560517 L111.096486,64.7680008 C111.096486,68.0818514 108.405312,70.7682582 105.084065,70.7682582 L6.01242056,70.7682582 C2.69185238,70.7682582 0,68.0860686 0,64.7646229 L0,6.71104665 L0,6.71104665 C0,3.39533046 2.69117313,0.707411405 6.01242056,0.707411405 L105.084065,0.707411405 C108.404633,0.707411405 111.096486,3.40460791 111.096486,6.70650973 L111.096486,26.3638506 L111.096486,36.2745613" id="Rectangle-3" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7"></path>
                                        <ellipse id="Oval-9" stroke="#2FC3B6" stroke-width="2" stroke-linecap="round" cx="55.5913385" cy="32.1325544" rx="7.5065193" ry="7.5065193"></ellipse>
                                        <path d="M1.00086924,49.4004097 L110.102278,49.4004097 L110.102278,64.7469594 C110.102278,67.5108624 107.873497,69.7514485 105.094966,69.7514485 L6.00818128,69.7514485 C3.2427192,69.7514485 1.00086924,67.5153161 1.00086924,64.7469594 L1.00086924,49.4004097 Z" id="Rectangle-9" fill="#E1EBF0"></path>
                                        <ellipse id="Oval" fill="#E6EDF1" cx="8.50738854" cy="9.50825778" rx="1.50130386" ry="1.50130386"></ellipse>
                                        <ellipse id="Oval-Copy" fill="#E6EDF1" cx="101.588228" cy="9.50825778" rx="1.50130386" ry="1.50130386"></ellipse>
                                        <ellipse id="Oval-Copy-3" fill="#C4D3DA" cx="8.50738854" cy="62.5543275" rx="1.50130386" ry="1.50130386"></ellipse>
                                        <ellipse id="Oval-Copy-2" fill="#C4D3DA" cx="101.588228" cy="62.5543275" rx="1.50130386" ry="1.50130386"></ellipse>
                                        <rect id="Rectangle-4" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#E0EAEF" x="0" y="69" width="111.096486" height="5" rx="2.5"></rect>
                                    </g>
                                </g>
                                <circle id="Oval-14" fill="#F1F9FD" cx="96" cy="80" r="4"></circle>
                                <path d="M92,80 C92,82.209139 93.790861,84 96,84 C98.209139,84 100,82.209139 100,80 C100,77.790861 98.209139,76 96,76" id="Oval-14-Copy-2" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                <circle id="Oval-14" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F1F9FD" cx="78" cy="75" r="8"></circle>
                                <circle id="Oval-14" fill="#F1F9FD" cx="38" cy="44" r="38"></circle>
                                <path d="M2,38 C2,58.9868205 19.0131795,76 40,76 L40,76 C60.9868205,76 78,58.9868205 78,38 C78,17.0131795 60.9868205,0 40,0 C33.6945605,0 27.7478165,1.53575847 22.5134139,4.25362973 M13.5200408,10.7453925 C8.38276055,15.737555 4.65214564,22.1695892 2.9795507,29.3901405" id="Oval-14-Copy" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                            </g>
                            <g id="lamp" transform="translate(92.070964, 52.447548)">
                                <path d="M33.4859095,18.0668764 C33.4859095,9.18558871 26.2862033,1.98588251 17.4049156,1.98588251 C8.52362787,1.98588251 1.32392167,9.18558871 1.32392167,18.0668764 C1.32392167,23.6118944 4.31355225,28.5014136 8.60685786,31.3924444 C8.6059478,31.4656439 8.60549086,31.5390005 8.60549086,31.6125086 C8.60549086,38.3623729 12.4583004,43.8342191 17.2109817,43.8342191 C21.9560145,43.8342191 25.8040695,38.3799706 25.8164427,31.6450866 C30.3157799,28.7917122 33.4859095,23.7768316 33.4859095,18.0668764 Z" id="Combined-Shape-Copy-6" fill="#FFA47B"></path>
                                <path d="M30.0956161,8.18922433 C31.4112648,10.5206087 32.1619878,13.2131309 32.1619878,16.0809939 C32.1619878,21.7909491 28.9918583,26.8058297 24.492521,29.6592041 C24.4801478,36.3940881 20.6320929,41.8483366 15.8870601,41.8483366 C13.7726529,41.8483366 11.8363525,40.7653234 10.3381774,38.9685811 C9.25047294,36.9220069 8.60549086,34.3742315 8.60549086,31.6125086 C8.60549086,31.5390005 8.6059478,31.4656439 8.60685786,31.3924444 C8.15596712,31.0888231 7.71945536,30.7631593 7.29927551,30.4170087 C7.28753122,30.1556957 7.28156919,29.8921497 7.28156919,29.6266261 C7.28156919,29.553118 7.28202613,29.4797614 7.28293619,29.4065619 C5.79977038,28.4078261 4.47218864,27.1705853 3.36969979,25.7502085 C2.07687984,23.4673543 1.32392167,20.8496612 1.32392167,18.0668764 C1.32392167,9.18558871 8.52362787,1.98588251 17.4049156,1.98588251 C22.5624635,1.98588251 27.1529207,4.41388681 30.0956161,8.18922433 Z" id="Combined-Shape" fill="#FF8F5C"></path>
                                <path d="M6.70111728,9.59805037 C5.50110147,11.182686 4.66796629,13.0605254 4.32815594,15.1051244 M21.1058403,5.3898844 C19.7434574,4.88428222 18.2696492,4.60802962 16.7313187,4.60802962 C13.7069638,4.60802962 10.9319971,5.67578701 8.76282881,7.45489143" id="Oval-3" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                <path d="M7.45681327,32.0925784 C8.26001641,37.6603842 11.7291736,41.8483366 15.8870601,41.8483366 C20.0449465,41.8483366 23.5141037,37.6603842 24.3173068,32.0925784 L7.45681327,32.0925784 Z" id="Combined-Shape" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7"></path>
                                <path d="M14.5763456,18.8367937 C14.5763456,17.1916348 13.2426808,15.85797 11.5975219,15.85797 C9.95236295,15.85797 8.61869812,17.1916348 8.61869812,18.8367937 C8.61869812,20.4819527 9.95236295,21.8156175 11.5975219,21.8156175" id="Oval-16" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                <path d="M23.0065924,18.8367937 C23.0065924,17.1916348 21.6729276,15.85797 20.0277687,15.85797 C18.3826097,15.85797 17.0489449,17.1916348 17.0489449,18.8367937 C17.0489449,20.4819527 18.3826097,21.8156175 20.0277687,21.8156175" id="Oval-16-Copy" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" transform="translate(20.027769, 18.836794) scale(-1, 1) translate(-20.027769, -18.836794) "></path>
                                <path d="M12.2945702,0.44831735 C6.91107149,1.74762211 2.58395544,5.75551847 0.836294689,10.9489338 M0,16.0809939 C0,21.6260119 2.98963058,26.5155311 7.28293619,29.4065619 C7.28202613,29.4797614 7.28156919,29.553118 7.28156919,29.6266261 C7.28156919,36.3764904 11.1343787,41.8483366 15.8870601,41.8483366 C20.6320929,41.8483366 24.4801478,36.3940881 24.492521,29.6592041 C28.9918583,26.8058297 32.1619878,21.7909491 32.1619878,16.0809939 C32.1619878,7.1997062 24.9622816,-2.27373675e-13 16.0809939,-2.27373675e-13" id="Combined-Shape-Copy-5" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                <path d="M14.5763456,32.0925784 L14.5763456,18.4682661" id="Path-32" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                <path d="M17.0489449,32.0925784 L17.0489449,18.4682661" id="Path-32-Copy" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" transform="translate(17.048945, 25.280422) scale(-1, 1) translate(-17.048945, -25.280422) "></path>
                                <path d="M4.89029149,31.9981137 L26.8838286,31.9981137" id="Path-36" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                <path d="M8.60376836,35.9698787 L23.1686292,35.9698787" id="Path-36-Copy" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                <path d="M10.2940081,38.6351761 L21.5654428,38.7815961" id="Path-36-Copy-2" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                            </g>
                            <g id="Group-4-Copy">
                                <g id="bg-ilustrasi" transform="translate(0.797033, 0.063988)">
                                    <path d="M71.0727947,130.765157 C71.0727947,130.765157 72.0078323,132.236944 72.5996312,132.828743 C73.2096468,133.438759 74.6782382,134.3706 74.6782382,134.3706 C74.6782382,134.3706 73.1838666,135.356346 72.5996312,135.940581 C71.9820521,136.558161 71.0727947,137.976044 71.0727947,137.976044 C71.0727947,137.976044 70.1570391,136.512992 69.5846285,135.940581 C68.9552246,135.311177 67.4673513,134.3706 67.4673513,134.3706 C67.4673513,134.3706 68.9648655,133.448506 69.5846285,132.828743 C70.16668,132.246692 71.0727947,130.765157 71.0727947,130.765157 Z" id="Polygon" fill="#DAE2E6"></path>
                                    <path d="M416.734949,201.233166 C416.734949,201.233166 417.71418,202.774517 418.33395,203.394287 C418.972798,204.033134 420.510802,205.009019 420.510802,205.009019 C420.510802,205.009019 418.945799,206.041356 418.33395,206.653205 C417.687182,207.299973 416.734949,208.784872 416.734949,208.784872 C416.734949,208.784872 415.77591,207.25267 415.176445,206.653205 C414.517293,205.994052 412.959096,205.009019 412.959096,205.009019 C412.959096,205.009019 414.527389,204.043343 415.176445,203.394287 C415.786007,202.784725 416.734949,201.233166 416.734949,201.233166 Z" id="Polygon-Copy-9" fill="#DAE2E6"></path>
                                    <path d="M367.750231,159.414767 C367.750231,159.414767 369.000229,161.382314 369.79137,162.173455 C370.606865,162.98895 372.57014,164.234675 372.57014,164.234675 C372.57014,164.234675 370.572401,165.552461 369.79137,166.333492 C368.965765,167.159098 367.750231,169.054584 367.750231,169.054584 C367.750231,169.054584 366.52601,167.098714 365.760788,166.333492 C364.919374,165.492078 362.930322,164.234675 362.930322,164.234675 C362.930322,164.234675 364.932262,163.001981 365.760788,162.173455 C366.538899,161.395345 367.750231,159.414767 367.750231,159.414767 Z" id="Polygon-Copy-4" fill="#DAE2E6"></path>
                                    <path d="M57.1761582,182.60305 C57.1761582,182.60305 57.9679938,183.849432 58.4691582,184.350596 C58.9857492,184.867187 60.2294244,185.656316 60.2294244,185.656316 C60.2294244,185.656316 58.9639173,186.491094 58.4691582,186.985853 C57.9461619,187.508849 57.1761582,188.709583 57.1761582,188.709583 C57.1761582,188.709583 56.4006514,187.470599 55.915906,186.985853 C55.3828959,186.452843 54.1228919,185.656316 54.1228919,185.656316 C54.1228919,185.656316 55.3910603,184.875442 55.915906,184.350596 C56.4088158,183.857686 57.1761582,182.60305 57.1761582,182.60305 Z" id="Polygon-Copy-7" fill="#DAE2E6"></path>
                                    <path d="M126.4466,189.67082 C126.4466,189.67082 127.381638,191.142607 127.973436,191.734406 C128.583452,192.344421 130.052043,193.276263 130.052043,193.276263 C130.052043,193.276263 128.557672,194.262009 127.973436,194.846244 C127.355857,195.463823 126.4466,196.881707 126.4466,196.881707 C126.4466,196.881707 125.530844,195.418655 124.958434,194.846244 C124.32903,194.21684 122.841157,193.276263 122.841157,193.276263 C122.841157,193.276263 124.338671,192.354169 124.958434,191.734406 C125.540485,191.152354 126.4466,189.67082 126.4466,189.67082 Z" id="Polygon-Copy" fill="#DAE2E6"></path>
                                    <path d="M224.197229,31.6287635 C224.197229,31.6287635 225.132266,33.1005508 225.724065,33.6923497 C226.334081,34.3023653 227.802672,35.2342069 227.802672,35.2342069 C227.802672,35.2342069 226.308301,36.2199526 225.724065,36.8041879 C225.106486,37.4217671 224.197229,38.8396503 224.197229,38.8396503 C224.197229,38.8396503 223.281473,37.3765985 222.709063,36.8041879 C222.079659,36.174784 220.591786,35.2342069 220.591786,35.2342069 C220.591786,35.2342069 222.0893,34.3121127 222.709063,33.6923497 C223.291114,33.1102983 224.197229,31.6287635 224.197229,31.6287635 Z" id="Polygon-Copy-3" fill="#DAE2E6"></path>
                                    <path d="M287.787289,54.2676523 C287.787289,54.2676523 288.722326,55.7394396 289.314125,56.3312385 C289.924141,56.941254 291.392732,57.8730957 291.392732,57.8730957 C291.392732,57.8730957 289.898361,58.8588414 289.314125,59.4430767 C288.696546,60.0606558 287.787289,61.4785391 287.787289,61.4785391 C287.787289,61.4785391 286.871533,60.0154873 286.299123,59.4430767 C285.669719,58.8136728 284.181845,57.8730957 284.181845,57.8730957 C284.181845,57.8730957 285.67936,56.9510015 286.299123,56.3312385 C286.881174,55.749187 287.787289,54.2676523 287.787289,54.2676523 Z" id="Polygon-Copy-6" fill="#DAE2E6"></path>
                                    <path d="M41.82355,48.8906977 C41.82355,48.8906977 42.5659465,50.0592601 43.0358201,50.5291338 C43.5201573,51.0134709 44.6861822,51.7533299 44.6861822,51.7533299 C44.6861822,51.7533299 43.4996884,52.5359874 43.0358201,52.9998557 C42.5454777,53.4901981 41.82355,54.6159621 41.82355,54.6159621 C41.82355,54.6159621 41.0964629,53.4543354 40.6419832,52.9998557 C40.1422521,52.5001247 38.9609179,51.7533299 38.9609179,51.7533299 C38.9609179,51.7533299 40.1499068,51.0212101 40.6419832,50.5291338 C41.1041175,50.0669994 41.82355,48.8906977 41.82355,48.8906977 Z" id="Polygon-Copy-2" fill="#DAE2E6"></path>
                                    <path d="M217.729153,132.728493 C217.729153,132.728493 218.47155,133.897055 218.941423,134.366929 C219.425761,134.851266 220.591786,135.591125 220.591786,135.591125 C220.591786,135.591125 219.405292,136.373783 218.941423,136.837651 C218.451081,137.327993 217.729153,138.453757 217.729153,138.453757 C217.729153,138.453757 217.002066,137.292131 216.547586,136.837651 C216.047855,136.33792 214.866521,135.591125 214.866521,135.591125 C214.866521,135.591125 216.05551,134.859005 216.547586,134.366929 C217.009721,133.904795 217.729153,132.728493 217.729153,132.728493 Z" id="Polygon-Copy-5" fill="#DAE2E6"></path>
                                    <path d="M120.056343,71.9453111 L113.15932,65.0482881" id="Path-67" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" fill="#DAE2E6"></path>
                                    <path d="M101.648612,173.372581 L94.7515891,166.475558" id="Path-67-Copy" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" fill="#DAE2E6"></path>
                                    <path d="M40.2645251,226.656036 L31.1810049,231.993041" id="Path-68" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" fill="#DAE2E6"></path>
                                    <path d="M399.367098,230.307671 L405.349485,230.307671" id="Path-69" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" fill="#DAE2E6"></path>
                                    <path d="M151.791282,216.131115 C153.962836,212.492962 155.210536,208.239546 155.210536,203.694713 C155.210536,190.27435 144.331182,179.394996 130.910819,179.394996 C120.492958,179.394996 111.606307,185.950886 108.151389,195.162145" id="Oval-22" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M434.40633,225.245237 C436.04484,222.500128 436.986271,219.290782 436.986271,215.861554 C436.986271,205.735439 428.777433,197.5266 418.651318,197.5266 C410.790692,197.5266 404.085416,202.47324 401.478563,209.423444" id="Oval-22-Copy-10" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M98.2001006,129.721856 C98.2001006,132.469828 100.427772,134.6975 103.175745,134.6975 L103.175745,134.6975 C105.923717,134.6975 108.151389,132.469828 108.151389,129.721856 C108.151389,126.973883 105.923717,124.746212 103.175745,124.746212" id="Oval-22-Copy-3" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <ellipse id="Oval-22-Copy-8" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" cx="372.725875" cy="209.684418" rx="4.975644" ry="4.975644"></ellipse>
                                    <ellipse id="Oval-22-Copy-7" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" cx="168.648102" cy="3.65848757" rx="3.46000222" ry="3.46000222"></ellipse>
                                    <path d="M390.003108,154.427377 C390.003108,149.930527 386.357691,146.28511 381.860841,146.28511 C377.363991,146.28511 373.718574,149.930527 373.718574,154.427377" id="Oval-22-Copy-4" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M120.889866,219.805333 C120.889866,214.364382 119.460683,209.257234 116.957243,204.838816 M111.782048,198.105447 C106.296668,192.721366 98.7788016,189.400856 90.4853889,189.400856 C74.7140484,189.400856 61.7473574,201.408988 60.2294244,216.781144" id="Oval-22-Copy" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M418.882802,51.4662053 C418.882802,47.6275 415.770916,44.5156146 411.932211,44.5156146 C408.093506,44.5156146 404.98162,47.6275 404.98162,51.4662053" id="Oval-22-Copy-9" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M21.4898673,221.946113 C19.4385804,218.721743 15.8335683,216.582517 11.7289131,216.582517 C5.34428606,216.582517 0.168523211,221.75828 0.168523211,228.142907" id="Oval-22-Copy-2" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M402.51563,172.222742 C404.060319,170.25732 404.98162,167.778801 404.98162,165.0851 C404.98162,158.700473 399.805858,153.52471 393.421231,153.52471 C389.175278,153.52471 385.46396,155.813751 383.454005,159.225104" id="Oval-22-Copy-5" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12.3779598,271.697995 L376.959775,271.697995 M384.20632,271.697995 L407.612715,271.697995 M415.187492,271.697995 L420.832359,271.697995" id="Path-70" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#404F54"></path>
                                </g>
                                <g id="Group-2" transform="translate(368.850170, 234.318262) rotate(-25.000000) translate(-368.850170, -234.318262) translate(367.850170, 233.318262)"></g>
                                <g id="Group-3" transform="translate(143.000000, 64.000000)">
                                    <g id="hand" transform="translate(3.000000, 120.000000)">
                                        <path d="M9.65959048,66.5516558 L23.8703251,57.4311472 C23.8703251,57.4311472 39.2922254,55.2613153 35.3132752,74.4975324 L24.8646002,81.1406774 L9.65959048,66.5516558 Z" id="Path-5" fill="#E0EAEF"></path>
                                        <path d="M5.88276504,69.0307397 L23.8713994,57.0788863 L40.7917455,0.0333003548 L41.8243148,39.1946715 C41.8243148,39.1946715 42.3593478,61.7354204 39.2879726,69.0307397 C36.4305638,75.8178329 24.0379629,81.441909 24.0379629,81.441909" id="Path-4" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                        <path d="M25,79.5 C25,72.5964406 19.4035594,67 12.5,67 C5.59644063,67 0,72.5964406 0,79.5 C0,86.4035594 25,86.4035594 25,79.5 Z" id="Oval-2" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7"></path>
                                    </g>
                                    <g id="Group-10" transform="translate(39.000000, 0.000000)">
                                        <g id="Group-9" transform="translate(5.383466, 113.358770)">
                                            <rect id="Rectangle-12-Copy" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" x="0.390455024" y="0.530429818" width="25.4802701" height="81.2400906" rx="3"></rect>
                                            <path d="M68.14079,12.766571 C68.14079,8.34534691 71.6842714,4.25510484 76.0590299,3.63023789 L90.8351592,1.51969516 C94.6602555,0.973338999 97.7611088,3.66053588 97.7611088,7.53174382 L97.7611088,73.3765344 L71.1439497,73.3765344 C69.4853504,73.3765344 68.14079,72.0366839 68.14079,70.3841003 L68.14079,12.766571 Z" id="Rectangle-12-Copy-3" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7"></path>
                                            <rect id="Rectangle-12" fill="#F5F6F7" x="9.96679666" y="0.530429818" width="74.5127169" height="93.612589" rx="3"></rect>
                                            <path d="M9.96679666,87.4617275 L9.96679666,69.4891316 L54.2755693,69.4891316 C55.9355791,69.4891316 57.2812829,70.8399974 57.2812829,72.49734 L57.2812829,84.453519 C57.2812829,86.1149067 55.9354381,87.4617275 54.2755693,87.4617275 L9.96679666,87.4617275 Z" id="Combined-Shape" fill="#DAE2E6"></path>
                                            <path d="M21.3599853,1.23736936 L74.8120464,1.23736936 C74.8692255,1.23736936 74.9261245,1.23857324 74.9827196,1.24095674 C71.7457058,11.6468989 60.9683376,19.2910047 48.1719102,19.2910047 C35.3740124,19.2910047 24.5956378,11.645142 21.3599853,1.23736936 Z" id="Combined-Shape" fill="#C5D3DA"></path>
                                            <path d="M11.5642185,5.41638421 C11.5642185,2.71794611 13.753889,0.530429818 16.453206,0.530429818 L81.187948,0.530429818 C83.8880612,0.530429818 86.0769354,2.73057619 86.0769354,5.42242351 M86.0769354,26.8670481 L86.0769354,89.2505055 C86.0769354,91.952566 83.887265,94.1430188 81.187948,94.1430188 L16.453206,94.1430188 C13.7530928,94.1430188 11.5642185,91.9589263 11.5642185,89.2556987 L11.5642185,26.1857361" id="Rectangle-12-Copy-4" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                            <path d="M28.9278534,87.4617275 L28.9278534,69.4891316 L81.4789049,69.4891316 C83.1360953,69.4891316 84.4795136,70.8399974 84.4795136,72.49734 L84.4795136,87.4617275 L28.9278534,87.4617275 Z" id="Combined-Shape" fill="#DAE2E6"></path>
                                            <polygon id="Path-85" fill="#DAE2E6" points="26.2643882 68.1545362 44.5867506 37.5367384 58.0743369 38.4158841 74.4262366 69.8792163"></polygon>
                                            <polyline id="Path-47" stroke="#404F54" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#F5F6F7" points="24.8707319 78.2829688 40.121271 80.4354042 50.3457378 78.8142964 50.351002 32.1357065 43.6868123 32.1357065 37.6108669 62.7688738 28.9567677 64.3346528"></polyline>
                                            <polyline id="Path-47-Copy" stroke="#404F54" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#F5F6F7" transform="translate(63.169617, 56.285555) scale(-1, 1) translate(-63.169617, -56.285555) " points="50.4294819 78.2829688 65.680021 80.4354042 75.9044878 78.8142964 75.909752 32.1357065 69.2455623 32.1357065 63.169617 62.7688738 54.5155178 64.3346528"></polyline>
                                            <rect id="Rectangle-13" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" x="0.390455024" y="63.0994441" width="33.5323568" height="17.9725959" rx="3"></rect>
                                            <rect id="Rectangle-13-Copy-2" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" x="68.0079649" y="63.0994441" width="29.6203188" height="17.9725959" rx="3"></rect>
                                            <rect id="Rectangle-13-Copy" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" x="19.8421186" y="63.0994441" width="7.11308883" height="17.9725959" rx="3"></rect>
                                            <ellipse id="Oval-7" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#FF8F5C" cx="22.8603548" cy="74.287042" rx="6.28598084" ry="6.28598084"></ellipse>
                                            <path d="M27.6973189,74.2180719 C27.6973189,71.7284449 25.6790774,69.7102034 23.1894503,69.7102034 C20.6998233,69.7102034 18.6815817,71.7284449 18.6815817,74.2180719 C18.6815817,76.707699 27.6973189,76.707699 27.6973189,74.2180719 Z" id="Oval-11" fill="#FFBC9E"></path>
                                            <path d="M33.9228119,1.1989772 L33.9228119,24.6331684 C33.9228119,25.7352078 34.8138502,26.6285872 35.9233272,26.6285872 L43.040292,26.6285872 C44.1451462,26.6285872 45.0408074,25.7283679 45.0408074,24.6270951 L45.0408074,14.908183" id="Path-48" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#FF8F5C"></path>
                                        </g>
                                        <g id="Group-6-Copy">
                                            <path d="M21.6735402,112.332713 C21.6735402,112.332713 33.2718001,102.395451 55.1224495,102.395451 C76.9730989,102.395451 89.4856253,111.909885 89.4856253,111.909885 L95.6660985,85.7655341 L92.3464975,63.7505401 L64.6392773,55.4758701 L19.7676217,58.5529432 L15.0447094,87.4855677 L21.6735402,112.332713 Z" id="Path-45" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#2FC3B6"></path>
                                            <path d="M100.527826,47.7269433 L100.527826,105.292438 C100.527826,105.292438 100.527826,118.431014 91.2056589,122.143925 C81.8834917,125.856837 75.708603,123.631802 75.708603,123.631802 C75.708603,123.631802 81.5244865,119.083606 84.3638184,115.456058 C87.2031503,111.828511 86.931902,105.094372 86.931902,105.094372 L86.931902,52.0342746 L100.527826,47.7269433 Z" id="Path-44" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#2FC3B6"></path>
                                            <ellipse id="Oval-5" stroke="#1F5F59" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" cx="13.769917" cy="67.8807937" rx="9.33622721" ry="9.33622721"></ellipse>
                                            <ellipse id="Oval-5-Copy" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" cx="90.1846155" cy="67.8807937" rx="9.33622721" ry="9.33622721"></ellipse>
                                            <path d="M98.530485,69.0616891 L89.1984979,66.706865 L89.1984979,57.4686653 L98.1609682,65.6445044 C98.1609682,65.6445044 98.8608532,67.0704672 98.530485,69.0616891 Z" id="Path-3" fill="#DAE2E6"></path>
                                            <rect id="Rectangle-31-Copy-3" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#FF8F5C" x="40.8696745" y="101.015169" width="27.0239513" height="26.9406514" rx="13.4703257"></rect>
                                            <rect id="Rectangle-31-Copy-6" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" x="45.3926213" y="86.9515378" width="17.9780578" height="32.2363121" rx="8.98902891"></rect>
                                            <rect id="Rectangle-31" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#FFFFFF" x="20.5434891" y="18.7778717" width="67.6763222" height="87.138914" rx="33.8381611"></rect>
                                            <path d="M87.1565137,62.3830489 L87.1565137,40.837523 L67.9594339,34.5499606 C66.6582766,30.9062273 63.966741,27.9720862 63.966741,27.9720862 L45.2569878,31.129736 L17.9917429,54.4076304 L16.4269175,75.6764808 C16.4269175,75.6764808 30.8748375,71.3412563 39.9983552,67.9634166 C47.358104,65.2385848 59.8975678,51.187922 64.9330372,45.5086416 C66.0707407,48.4017109 87.1565137,62.3830489 87.1565137,62.3830489 Z" id="Combined-Shape" fill="#DAE2E6"></path>
                                            <path d="M65.4966078,37.1144083 C62.1506098,41.9277622 57.5509456,46.8101508 51.3257705,50.4035262 C33.6930328,60.5817213 23.4932974,62.7796306 23.4932974,62.7796306 L23.9911179,105.196489 C23.9911179,105.196489 23.9911179,113.385795 27.1328119,117.073975 C30.274506,120.762155 35.2008545,124.442356 35.2008545,124.442356 C35.2008545,124.442356 25.3824624,127.210685 14.3282947,124.442356 C3.27412703,121.674028 0.457931022,107.883443 0.457931022,107.883443 L0.733701816,48.5869601 C1.06277114,38.5718222 -1.38443855,5.50861913 37.0038582,1.15041208 C58.0764403,-2.47066986 66.9992659,4.38841398 70.7770096,10.7667962 C70.9526142,10.6767227 71.1316824,10.5925626 71.3142794,10.5146357 C79.3928518,7.06694451 88.5948104,7.75833323 96.0282948,18.8653221 C103.461779,29.9723109 100.417731,66.0705112 100.417731,66.0705112 L87.6546234,57.3102639 C87.6546234,57.3102639 78.8072164,53.281152 72.2725247,46.6323765 C69.4637513,43.774567 67.1836222,40.2287773 65.4966078,37.1144083 Z" id="Combined-Shape" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#85DAD2"></path>
                                            <path d="M65.6600112,35.5750459 C62.8781184,40.5197885 56.4432908,46.4706235 51.1256121,49.5401622 C36.0633474,58.2345959 22.4288254,62.0447512 22.4288254,62.0447512 L23.0176857,103.445199 C23.0176857,103.445199 22.4288254,111.782797 25.1768081,116.007125 C25.1768081,116.007125 26.3717867,117.498646 20.016495,116.007125 C10.5737867,113.642359 8.16813135,101.862144 8.16813135,101.862144 L8.40370071,51.2098097 C8.40370071,51.2098097 10.2204327,13.8605831 39.3864502,10.6884877 C57.3871026,7.59528167 65.0091729,13.4544576 68.2362035,18.9030088 C68.3862096,18.8260676 68.5391735,18.7541762 68.6951518,18.6876093 C75.5960425,15.7425172 83.4565539,16.3331164 89.8063966,25.8209457 C96.1562393,35.3087751 94.619607,60.8488932 94.619607,60.8488932 C94.619607,60.8488932 90.1913912,58.1435691 88.2273017,56.4515249 C70.4076872,48.5059562 65.6600112,35.5750459 65.6600112,35.5750459 Z" id="Combined-Shape-Copy" fill="#2FC3B6"></path>
                                            <polyline id="Path-35" stroke="#404F54" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#F5F6F7" points="53.06894 69.0470723 53.06894 81.9543013 56.9182187 81.9543013"></polyline>
                                            <path d="M48.4943688,88.0844944 C48.4943688,91.6557703 51.3894599,94.5508613 54.9607357,94.5508613 C58.5320115,94.5508613 61.4271026,91.6557703 61.4271026,88.0844944 L48.4943688,88.0844944 Z" id="Oval-5-Copy-2" fill="#FF8F5C"></path>
                                            <path d="M67.2347439,66.250575 C67.2347439,68.9571252 69.4288364,71.1512177 72.1353866,71.1512177 C74.8419369,71.1512177 77.0360293,68.9571252 77.0360293,66.250575" id="Oval-5-Copy-5" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" transform="translate(72.135387, 68.700896) rotate(-180.000000) translate(-72.135387, -68.700896) "></path>
                                            <path d="M31.2895521,66.250575 C31.2895521,68.9571252 33.4836445,71.1512177 36.1901948,71.1512177 C38.896745,71.1512177 41.0908375,68.9571252 41.0908375,66.250575" id="Oval-5-Copy-6" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7" transform="translate(36.190195, 68.700896) rotate(-180.000000) translate(-36.190195, -68.700896) "></path>
                                        </g>
                                    </g>
                                    <g id="mouse" transform="translate(3.000000, 194.000000)">
                                        <path d="M25.4192728,13.1080845 C25.2682678,6.33646549 19.7316666,0.893494871 12.9237915,0.893494871 C6.11591638,0.893494871 0.579315188,6.33646549 0.428310119,13.1080845 L25.4192728,13.1080845 L25.4192728,13.1080845 Z" id="Combined-Shape-Copy-3" fill="#F5F6F7"></path>
                                        <path d="M15.8840433,3.78720178 C10.6889931,3.78720178 6.46404478,7.94070119 6.34881368,13.1080845 L25.4192728,13.1080845 C25.3040418,7.94070119 21.0790934,3.78720178 15.8840433,3.78720178 Z" id="Combined-Shape" fill="#FF8F5C"></path>
                                        <path d="M25.4192728,13.1080845 C25.2682678,6.33646549 19.7316666,0.893494871 12.9237915,0.893494871 C6.11591638,0.893494871 0.579315188,6.33646549 0.428310119,13.1080845 L25.4192728,13.1080845 L25.4192728,13.1080845 Z" id="Combined-Shape-Copy-2" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                    </g>
                                    <g id="hand" transform="translate(0.000000, 187.000000)" stroke="#404F54" stroke-width="2" fill="#F5F6F7" stroke-linecap="round">
                                        <rect id="Rectangle-14" transform="translate(28.286329, 12.593495) rotate(29.000000) translate(-28.286329, -12.593495) " x="24.398366" y="6.84349462" width="7.77592691" height="11.5" rx="3.88796346"></rect>
                                        <rect id="Rectangle-14-Copy-3" x="13.4553639" y="0.126539322" width="6.0001508" height="15" rx="3.0000754"></rect>
                                        <rect id="Rectangle-14-Copy" x="6.45536393" y="1.12653932" width="6.0001508" height="15" rx="3.0000754"></rect>
                                        <rect id="Rectangle-14-Copy-2" x="0.455363928" y="5.62653932" width="6.0001508" height="11.5" rx="3.0000754"></rect>
                                    </g>
                                    <g id="laptop" transform="translate(38.000000, 133.000000)">
                                        <path d="M111.096486,43.6560517 L111.096486,64.7680008 C111.096486,68.0818514 108.405312,70.7682582 105.084065,70.7682582 L6.01242056,70.7682582 C2.69185238,70.7682582 0,68.0860686 0,64.7646229 L0,6.71104665 L0,6.71104665 C0,3.39533046 2.69117313,0.707411405 6.01242056,0.707411405 L105.084065,0.707411405 C108.404633,0.707411405 111.096486,3.40460791 111.096486,6.70650973 L111.096486,26.3638506 L111.096486,36.2745613" id="Rectangle-3" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7"></path>
                                        <ellipse id="Oval-9" stroke="#2FC3B6" stroke-width="2" stroke-linecap="round" cx="55.5913385" cy="32.1325544" rx="7.5065193" ry="7.5065193"></ellipse>
                                        <path d="M1.00086924,49.4004097 L110.102278,49.4004097 L110.102278,64.7469594 C110.102278,67.5108624 107.873497,69.7514485 105.094966,69.7514485 L6.00818128,69.7514485 C3.2427192,69.7514485 1.00086924,67.5153161 1.00086924,64.7469594 L1.00086924,49.4004097 Z" id="Rectangle-9" fill="#E1EBF0"></path>
                                        <ellipse id="Oval" fill="#E6EDF1" cx="8.50738854" cy="9.50825778" rx="1.50130386" ry="1.50130386"></ellipse>
                                        <ellipse id="Oval-Copy" fill="#E6EDF1" cx="101.588228" cy="9.50825778" rx="1.50130386" ry="1.50130386"></ellipse>
                                        <ellipse id="Oval-Copy-3" fill="#C4D3DA" cx="8.50738854" cy="62.5543275" rx="1.50130386" ry="1.50130386"></ellipse>
                                        <ellipse id="Oval-Copy-2" fill="#C4D3DA" cx="101.588228" cy="62.5543275" rx="1.50130386" ry="1.50130386"></ellipse>
                                        <rect id="Rectangle-4" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#E0EAEF" x="0" y="69" width="111.096486" height="5" rx="2.5"></rect>
                                    </g>
                                </g>
                                <g id="Group-5" transform="translate(68.000000, 30.000000)">
                                    <circle id="Oval-14" fill="#F1F9FD" cx="96" cy="80" r="4"></circle>
                                    <path d="M92,80 C92,82.209139 93.790861,84 96,84 C98.209139,84 100,82.209139 100,80 C100,77.790861 98.209139,76 96,76" id="Oval-14-Copy-2" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                    <circle id="Oval-14" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F1F9FD" cx="78" cy="75" r="8"></circle>
                                    <circle id="Oval-14" fill="#F1F9FD" cx="38" cy="44" r="38"></circle>
                                    <path d="M2,38 C2,58.9868205 19.0131795,76 40,76 L40,76 C60.9868205,76 78,58.9868205 78,38 C78,17.0131795 60.9868205,0 40,0 C33.6945605,0 27.7478165,1.53575847 22.5134139,4.25362973 M13.5200408,10.7453925 C8.38276055,15.737555 4.65214564,22.1695892 2.9795507,29.3901405" id="Oval-14-Copy" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                </g>
                                <g id="lampu-copy" transform="translate(85.070964, 36.447548)">
                                    <path d="M40.4859095,34.0668764 C40.4859095,25.1855887 33.2862033,17.9858825 24.4049156,17.9858825 C15.5236279,17.9858825 8.32392167,25.1855887 8.32392167,34.0668764 C8.32392167,39.6118944 11.3135523,44.5014136 15.6068579,47.3924444 C15.6059478,47.4656439 15.6054909,47.5390005 15.6054909,47.6125086 C15.6054909,54.3623729 19.4583004,59.8342191 24.2109817,59.8342191 C28.9560145,59.8342191 32.8040695,54.3799706 32.8164427,47.6450866 C37.3157799,44.7917122 40.4859095,39.7768316 40.4859095,34.0668764 Z" id="Combined-Shape-Copy-6" fill="#FFA47B"></path>
                                    <path d="M37.0956161,24.1892243 C38.4112648,26.5206087 39.1619878,29.2131309 39.1619878,32.0809939 C39.1619878,37.7909491 35.9918583,42.8058297 31.492521,45.6592041 C31.4801478,52.3940881 27.6320929,57.8483366 22.8870601,57.8483366 C20.7726529,57.8483366 18.8363525,56.7653234 17.3381774,54.9685811 C16.2504729,52.9220069 15.6054909,50.3742315 15.6054909,47.6125086 C15.6054909,47.5390005 15.6059478,47.4656439 15.6068579,47.3924444 C15.1559671,47.0888231 14.7194554,46.7631593 14.2992755,46.4170087 C14.2875312,46.1556957 14.2815692,45.8921497 14.2815692,45.6266261 C14.2815692,45.553118 14.2820261,45.4797614 14.2829362,45.4065619 C12.7997704,44.4078261 11.4721886,43.1705853 10.3696998,41.7502085 C9.07687984,39.4673543 8.32392167,36.8496612 8.32392167,34.0668764 C8.32392167,25.1855887 15.5236279,17.9858825 24.4049156,17.9858825 C29.5624635,17.9858825 34.1529207,20.4138868 37.0956161,24.1892243 Z" id="Combined-Shape" fill="#FF8F5C"></path>
                                    <path d="M13.7011173,25.5980504 C12.5011015,27.182686 11.6679663,29.0605254 11.3281559,31.1051244 M28.1058403,21.3898844 C26.7434574,20.8842822 25.2696492,20.6080296 23.7313187,20.6080296 C20.7069638,20.6080296 17.9319971,21.675787 15.7628288,23.4548914" id="Oval-3" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M14.4568133,48.0925784 C15.2600164,53.6603842 18.7291736,57.8483366 22.8870601,57.8483366 C27.0449465,57.8483366 30.5141037,53.6603842 31.3173068,48.0925784 L14.4568133,48.0925784 Z" id="Combined-Shape" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F5F6F7"></path>
                                    <path d="M21.5763456,34.8367937 C21.5763456,33.1916348 20.2426808,31.85797 18.5975219,31.85797 C16.9523629,31.85797 15.6186981,33.1916348 15.6186981,34.8367937 C15.6186981,36.4819527 16.9523629,37.8156175 18.5975219,37.8156175" id="Oval-16" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M30.0065924,34.8367937 C30.0065924,33.1916348 28.6729276,31.85797 27.0277687,31.85797 C25.3826097,31.85797 24.0489449,33.1916348 24.0489449,34.8367937 C24.0489449,36.4819527 25.3826097,37.8156175 27.0277687,37.8156175" id="Oval-16-Copy" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" transform="translate(27.027769, 34.836794) scale(-1, 1) translate(-27.027769, -34.836794) "></path>
                                    <path d="M19.2945702,16.4483174 C13.9110715,17.7476221 9.58395544,21.7555185 7.83629469,26.9489338 M7,32.0809939 C7,37.6260119 9.98963058,42.5155311 14.2829362,45.4065619 C14.2820261,45.4797614 14.2815692,45.553118 14.2815692,45.6266261 C14.2815692,52.3764904 18.1343787,57.8483366 22.8870601,57.8483366 C27.6320929,57.8483366 31.4801478,52.3940881 31.492521,45.6592041 C35.9918583,42.8058297 39.1619878,37.7909491 39.1619878,32.0809939 C39.1619878,23.1997062 31.9622816,16 23.0809939,16" id="Combined-Shape-Copy-5" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M21.5763456,48.0925784 L21.5763456,34.4682661" id="Path-32" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M24.0489449,48.0925784 L24.0489449,34.4682661" id="Path-32-Copy" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" transform="translate(24.048945, 41.280422) scale(-1, 1) translate(-24.048945, -41.280422) "></path>
                                    <path d="M11.8902915,47.9981137 L33.8838286,47.9981137" id="Path-36" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M15.6037684,51.9698787 L30.1686292,51.9698787" id="Path-36-Copy" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M17.2940081,54.6351761 L28.5654428,54.7815961" id="Path-36-Copy-2" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M23.1341139,10.818077 L23.1341139,0.72040542" id="Path-37" stroke="#FF8F5C" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M38.8880202,17.6911238 L43.9290358,11.552452" id="Path-38" stroke="#FF8F5C" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M7.7415358,17.8258895 L1.9290358,11.552452" id="Path-39" stroke="#FF8F5C" stroke-width="2" stroke-linecap="round"></path>
                                </g>
                                <g id="Group-5-Copy" transform="translate(293.000000, 60.000000)">
                                    <circle id="Oval-14" fill="#F1F9FD" cx="4" cy="77" r="4"></circle>
                                    <path d="M0,77 C0,79.209139 1.790861,81 4,81 C6.209139,81 8,79.209139 8,77 C8,74.790861 6.209139,73 4,73" id="Oval-14-Copy-2" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                    <circle id="Oval-14" stroke="#404F54" stroke-width="2" stroke-linecap="round" fill="#F1F9FD" cx="25" cy="79" r="8"></circle>
                                    <circle id="Oval-14" fill="#F1F9FD" cx="67" cy="44" r="38"></circle>
                                    <path d="M27,38 C27,58.9868205 44.0131795,76 65,76 L65,76 C85.9868205,76 103,58.9868205 103,38 C103,17.0131795 85.9868205,0 65,0 C58.6945605,0 52.7478165,1.53575847 47.5134139,4.25362973 M38.5200408,10.7453925 C33.3827606,15.737555 29.6521456,22.1695892 27.9795507,29.3901405" id="Oval-14-Copy" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                </g>
                            </g>
                            <g id="pencil" transform="translate(359.707100, 98.663097) rotate(-330.000000) translate(-359.707100, -98.663097) translate(341.707100, 68.663097)" stroke-width="2">
                                <path d="M12.542234,45.5774782 C12.542234,44.1944223 13.6679683,43.0732339 15.0464782,43.0732339 L21.7785501,43.0732339 C23.161606,43.0732339 24.4599581,44.1716598 24.6812419,45.5436323 L26.1421215,54.6011707 C26.3621781,55.965534 25.4421433,56.8944053 24.0701708,56.6731214 L15.0126324,55.2122418 C13.6482691,54.9921853 12.542234,53.6880599 12.542234,52.30955 L12.542234,45.5774782 Z" id="Rectangle-7" stroke="#404F54" stroke-linecap="round" transform="translate(19.358429, 49.889476) rotate(-315.000000) translate(-19.358429, -49.889476) "></path>
                                <rect id="Rectangle" stroke="#404F54" stroke-linecap="round" fill="#FF8F5C" x="11.9081447" y="8.46131107" width="14.9005537" height="41.8760609" rx="7.45027687"></rect>
                                <path d="M15.0984264,16.361353 C15.0984264,14.0109406 17.004146,12.1055549 19.3584216,12.1055549" id="Rectangle-Copy" stroke="#FFFFFF" stroke-linecap="round"></path>
                                <path d="M22.2126585,50.8582825 L22.2126585,17.8341013" id="Path-40" stroke="#FFFFFF" stroke-linecap="round"></path>
                                <path d="M16.8910322,50.8582825 L16.8910322,22.7022539" id="Path-40-Copy" stroke="#FFFFFF" stroke-linecap="round"></path>
                                <rect id="Rectangle-Copy-2" stroke="#404F54" stroke-linecap="round" x="11.9081447" y="8.46131107" width="14.9005537" height="41.8760609" rx="7.45027687"></rect>
                                <path d="" id="Path-41" stroke="#FF0000"></path>
                                <path d="M29.108744,10.1106753 L34.8047961,4.52096056" id="Path-46" stroke="#FF8F5C" stroke-linecap="round"></path>
                                <path d="M7.55608476,13.3248081 L0.844865234,4.22211931" id="Path-49" stroke="#FF8F5C" stroke-linecap="round"></path>
                                <path d="M14.2163388,4.86070653 L12.7667649,0.535013209" id="Path-50" stroke="#FF8F5C" stroke-linecap="round"></path>
                            </g>
                            <g id="books-left" transform="translate(21.000000, 228.000000)">
                                <path d="M58.9747645,29.2200679 L104.331533,29.2200679" id="Path-6" stroke="#E0EAEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M38.7812636,34 L104.138032,34" id="Path-6-Copy" stroke="#E0EAEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M88.9747645,38.6776695 L104.331533,38.6776695" id="Path-6-Copy-2" stroke="#E0EAEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <polygon id="Rectangle-6" fill="#FF8F5C" points="94 29 101 29 101 38 97.5401478 34 94 38"></polygon>
                                <path d="M31,19 C31,15.1340068 34.1324221,12 37.9950647,12 L105,12 L105,26 L37.9950647,26 C34.1317971,26 31,22.8685323 31,19 L31,19 L31,19 Z" id="Rectangle-5-Copy" fill="#85DAD2"></path>
                                <path d="M48.7812636,18 L104.138032,18" id="Path-6-Copy-3" stroke="#5AC6BC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M31,34 C31,29.0294373 35.0311131,25 39.9998713,25 L105,25 L105,43 L39.9998713,43 C35.0293796,43 31,38.9738272 31,34 L31,34 L31,34 Z" id="Rectangle-5" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                <path d="M31,18 C31,14.1340068 34.1324221,11 37.9950647,11 L105,11 L105,25 L37.9950647,25 C34.1317971,25 31,21.8685323 31,18 L31,18 L31,18 Z" id="Rectangle-5-Copy-3" stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                <g id="Group-8" transform="translate(43.000000, 0.000000)" stroke-width="2" stroke-linecap="round">
                                    <path d="M5.78126357,5 L57.7340923,5" id="Path-6-Copy-4" stroke="#5AC6BC" stroke-linejoin="round"></path>
                                    <path d="M0.417738965,5.8638533 C0.417738965,3.0272378 2.71056563,0.727706597 5.55309221,0.727706597 L58,0.727706597 L58,11 L5.55309221,11 C2.71691493,11 0.417738965,8.70233179 0.417738965,5.8638533 L0.417738965,5.8638533 L0.417738965,5.8638533 Z" id="Rectangle-5-Copy-2" stroke="#404F54"></path>
                                </g>
                                <g id="Group-8" transform="translate(15.926524, 26.457900) rotate(-53.000000) translate(-15.926524, -26.457900) translate(-3.573476, 21.957900)" stroke-width="2" stroke-linecap="round">
                                    <path d="M3.85619701,4.09090909 L38.5094124,4.09090909" id="Path-6-Copy-4" stroke="#5AC6BC" stroke-linejoin="round"></path>
                                    <path d="M0.278638697,4.79769815 C0.278638697,2.47683093 2.15715139,0.595396307 4.48047585,0.595396307 L38.6869452,0.595396307 L38.6869452,9 L4.48047585,9 C2.15986527,9 0.278638697,7.12008964 0.278638697,4.79769815 L0.278638697,4.79769815 L0.278638697,4.79769815 Z" id="Rectangle-5-Copy-2" stroke="#404F54"></path>
                                </g>
                            </g>
                            <path d="M348.718324,21.0094509 C348.718324,21.0094509 349.968321,22.9769981 350.759463,23.7681399 C351.574957,24.5836343 353.538232,25.8293594 353.538232,25.8293594 C353.538232,25.8293594 351.540493,27.1471458 350.759463,27.9281762 C349.933857,28.7537819 348.718324,30.649268 348.718324,30.649268 C348.718324,30.649268 347.494103,28.6933987 346.72888,27.9281762 C345.887467,27.0867625 343.898415,25.8293594 343.898415,25.8293594 C343.898415,25.8293594 345.900355,24.5966651 346.72888,23.7681399 C347.506991,22.9900289 348.718324,21.0094509 348.718324,21.0094509 Z" id="Polygon-Copy-8" fill="#DAE2E6"></path>
                            <path d="M315.741534,185.62404 L321.887534,180.694004" id="Path-66" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" fill="#DAE2E6"></path>
                            <path d="M362.308042,39.4418969 C362.544999,37.9875521 362.668194,36.4950017 362.668194,34.9736778 C362.668194,19.7439981 350.322099,7.39790327 335.092419,7.39790327 C322.638065,7.39790327 312.112095,15.654299 308.689359,26.9922414" id="Oval-22-Copy-6" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M367.733043,46.6014825 C367.733043,42.7627772 364.621157,39.6508917 360.782452,39.6508917 C356.943747,39.6508917 353.831861,42.7627772 353.831861,46.6014825" id="Oval-22-Copy-9" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="w-5/6 sm:w-1/2 p-6">
            <div class="w-2/3 mx-auto mt-12 mb-12">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">Lorem ipsum dolor sit amet</h3>
                <p class="text-gray-600 mb-8">Get started with just your email and the name of your school. It’s as simple as that -- no payments or credit card information required.</p>
                <button
                    class="ml-3 bg-transparent hover:bg-gray-900 text-gray-900 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-gray-900 hover:border-transparent">
                    Next step     >
                </button>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-100 mt-6 mb-12">
    <div class="flex flex-wrap relative">
        <div class="w-5/6 sm:w-1/2 p-6">
            <div class="w-1/2 mx-auto mt-12 mb-12">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">Lorem ipsum dolor sit amet</h3>
                <p class="text-gray-600 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.<br><br>

                    Images from: <a class="text-orange-500 underline" href="https://undraw.co/">undraw.co</a></p>
            </div>
        </div>
        <div class="w-full sm:w-1/2 p-6">
            <img class="max-w-full" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/3O4qHWNDTxa0tSrusHnU" alt="">
        </div>
    </div>
</section>

<section class="bg-white mt-6 mb-12">
    <div class="container max-w-5xl mx-auto m-8">
        <h3 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">fonctionnalitées</h3>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>

        <div class="flex flex-wrap">
            <div class="ml-auto mr-auto w-5/6 sm:w-1/2 p-6 text-center">
                <h4 class="text-2xl text-gray-800 font-bold leading-none mb-3">ce sont les acteurs principaux du site</h4>
                <p>grille de fonctionnalité</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pt-24 md:pt-32 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">

        <!--Left Col-->
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
            <h1 class="my-4 text-3xl md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">Disponible sur tout vos écrans</h1>
            <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Sub-hero message, not too long and not too short. Make it just right!</p>

            <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in">Download our app:</p>
            <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">
                <svg class="h-12 pr-4 bounce-top-icons" width="1477px" height="500px" viewBox="0 0 1477 500" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    <!-- Generator: Sketch 3.1.1 (8761) - http://www.bohemiancoding.com/sketch -->
                    <title>Play Store</title>
                    <desc>Created with Sketch.</desc>
                    <defs>
                        <linearGradient x1="58.9170878%" y1="9.59026547%" x2="90.8103723%" y2="60.8514694%" id="linearGradient-1">
                            <stop stop-color="#FF177B" offset="0%"></stop>
                            <stop stop-color="#FFEC73" offset="100%"></stop>
                        </linearGradient>
                        <linearGradient x1="37.1029741%" y1="-44.0352456%" x2="0%" y2="101.060094%" id="linearGradient-2">
                            <stop stop-color="#064AA2" offset="0%"></stop>
                            <stop stop-color="#63FFD4" offset="100%"></stop>
                        </linearGradient>
                        <path id="path-3" d="M139,127 L5,0 C1.87378254,0.726186853 0,3.06462999 0,7 L0,127 L0,250 C0,253.338867 1.34597157,255.325411 3,256 L139,127 Z"></path>
                        <path id="path-5" d="M5.53437056,127.785198 L82.986448,85.238085 C102.059222,74.6695888 117.195851,66.282093 117.195851,66.282093 L173.520199,35.9446714 L136.02203,-0.492035149 L0.0236165533,128.524017 C1.53944448,129.011528 4.21113604,128.745054 6.29548251,127.716318"></path>
                        <linearGradient x1="78.6453125%" y1="50%" x2="2.49516972%" y2="100%" id="linearGradient-7">
                            <stop stop-color="#FF4521" offset="0%"></stop>
                            <stop stop-color="#8A33DB" offset="100%"></stop>
                        </linearGradient>
                        <linearGradient x1="0%" y1="-24.1863374%" x2="64.2244373%" y2="100%" id="linearGradient-8">
                            <stop stop-color="#00A3B5" offset="0%"></stop>
                            <stop stop-color="#D6FFA1" offset="100%"></stop>
                        </linearGradient>
                        <path id="path-9" d="M7.12902383,1.14687426 C4.54941065,-0.234702829 1.98636664,-0.629922435 -0.0869650899,-0.07134193 L134.024287,127.113403 L171.126971,92.0020155 L115.2,61.0225581 C115.2,61.0225581 62.4870167,31.817123 30.6586078,14.1823037 L7.12902383,1.14687426 Z"></path>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-461.000000, -270.000000)">
                            <g id="Play-Store" sketch:type="MSLayerGroup" transform="translate(461.000000, 270.000000)">
                                <rect id="background" fill="#000000" sketch:type="MSShapeGroup" x="0" y="0" width="1477" height="500" rx="60"></rect>
                                <g id="icon" transform="translate(60.000000, 179.000000)">
                                    <path d="M120.179253,61.0225581 C120.179253,61.0225581 18.2738589,4.56224806 12.2887967,1.24515504 C6.29377593,-2.07193798 0.328630705,-0.0597674419 0.328630705,6.87325581 L0.328630705,127.404264 L0.328630705,250.385736 C0.328630705,255.575543 4.59087137,257.826783 9.79917012,254.947984 C14.9975104,252.069186 120.179253,193.785969 120.179253,193.785969 C120.179253,193.785969 134.46801,185.873586 141.612388,181.917395 C153.110334,175.550421 176.106224,162.816473 176.106224,162.816473 C176.106224,162.816473 223.558506,136.518798 229.872199,133.032364 C236.175934,129.535969 235.568465,124.744612 230.250622,121.985349 C224.922822,119.236047 176.106224,92.0020155 176.106224,92.0020155 L120.179253,61.0225581 Z" id="orange" fill="url(#linearGradient-1)" sketch:type="MSShapeGroup"></path>
                                    <g id="blue">
                                        <mask id="mask-4" sketch:name="Clip 2" fill="white">
                                            <use xlink:href="#path-3"></use>
                                        </mask>
                                        <use id="Clip-2" fill="url(#linearGradient-2)" sketch:type="MSShapeGroup" xlink:href="#path-3"></use>
                                        <path d="M176,92 L120,61 C119.803881,61.451092 17.9382297,4.88708221 12,2 C5.96281885,-1.75928874 0,0.256577526 0,7 L0,128 C0,127.95472 0,245.952753 0,251 C0,256.361409 4.26057841,258.616784 9,256 C14.6631589,252.848612 119.803881,194.458347 120,194 L176,163 C175.709041,163.43197 223.142817,137.085995 229,134 C235.755324,130.09034 235.148092,125.290184 230,123 C224.5066,119.7715 175.709041,92.4874489 176,92" id="Fill-1" sketch:type="MSShapeGroup" mask="url(#mask-4)"></path>
                                    </g>
                                    <g id="red" transform="translate(2.983402, 127.503876)">
                                        <mask id="mask-6" sketch:name="Clip 8" fill="white">
                                            <use xlink:href="#path-5"></use>
                                        </mask>
                                        <g id="Clip-8"></g>
                                        <path d="M117.016598,-66.503876 C116.820479,-66.0527839 14.9548272,-122.616794 9.01659751,-125.503876 C2.97941636,-129.263165 -2.98340249,-127.247298 -2.98340249,-120.503876 L-2.98340249,0.496124031 C-2.98340249,0.450843681 -2.98340249,118.448877 -2.98340249,123.496124 C-2.98340249,128.857533 1.27717592,131.112908 6.01659751,128.496124 C11.6797564,125.344736 116.820479,66.9544713 117.016598,66.496124 L173.016598,35.496124 C172.725639,35.928094 220.159415,9.58211908 226.016598,6.49612403 C232.771921,2.58646438 232.164689,-2.21369242 227.016598,-4.50387597 C221.523198,-7.73237581 172.725639,-35.0164271 173.016598,-35.503876 L117.016598,-66.503876 Z" id="Fill-7" fill="url(#linearGradient-7)" sketch:type="MSShapeGroup" mask="url(#mask-6)"></path>
                                    </g>
                                    <g id="green" transform="translate(4.979253, 0.000000)">
                                        <mask id="mask-10" sketch:name="Clip 5" fill="white">
                                            <use xlink:href="#path-9"></use>
                                        </mask>
                                        <use id="Clip-5" fill="url(#linearGradient-8)" sketch:type="MSShapeGroup" xlink:href="#path-9"></use>
                                        <path d="M171.020747,92 L115.020747,61 C114.824628,61.451092 12.9589766,4.88708221 7.02074689,2 C0.983565743,-1.75928874 -4.97925311,0.256577526 -4.97925311,7 L-4.97925311,128 C-4.97925311,127.95472 -4.97925311,245.952753 -4.97925311,251 C-4.97925311,256.361409 -0.718674698,258.616784 4.02074689,256 C9.68390577,252.848612 114.824628,194.458347 115.020747,194 L171.020747,163 C170.729788,163.43197 218.163564,137.085995 224.020747,134 C230.776071,130.09034 230.168839,125.290184 225.020747,123 C219.527347,119.7715 170.729788,92.4874489 171.020747,92" id="Fill-4" sketch:type="MSShapeGroup" mask="url(#mask-10)"></path>
                                    </g>
                                </g>
                                <g id="Google-play" transform="translate(347.000000, 201.000000)" fill="#FFFFFF" sketch:type="MSShapeGroup">
                                    <path d="M664.61527,147.869801 L653.541573,158.380368 C650.98241,159.79512 648.436969,161.437612 645.898389,162.603919 C638.207178,166.116643 630.385607,167 623.435387,167 C616.0392,167 604.444065,166.516914 592.615654,157.911085 C576.183495,146.268716 569,126.255161 569,108.815762 C569,72.7085464 598.221113,55 622.056321,55 C630.385607,55 638.941308,57.0979728 645.898389,61.5216588 C657.46608,69.216526 660.457488,79.2164027 662.117856,84.5717543 L607.68933,106.690184 L589.864383,108.084232 C595.634506,137.690492 615.545206,154.909052 637.548519,154.909052 C648.539884,154.909052 656.697645,151.29971 664.183025,147.579949 C664.183025,147.579949 665.68559,146.79321 664.61527,147.869801 L664.61527,147.869801 Z M631.359496,88.4775359 C635.727713,86.8517832 638,85.4483557 638,82.1829551 C638,72.8175081 627.656008,62 615.311047,62 C606.167636,62 589,69.295044 589,94.6262158 C589,98.5794349 589.46124,102.789717 589.69186,107 L631.359496,88.4775359 L631.359496,88.4775359 Z" id="Fill-1"></path>
                                    <path d="M551.026121,146.60314 C551.026121,155.628579 552.626345,157.032995 560.210314,157.742087 C564.163004,158.210226 568.102018,158.416758 572,158.884896 L563.465471,164 L522.796525,164 C528.130605,157.032995 529.046973,156.337671 529.046973,151.69759 L529.046973,146.513643 L528.958072,8.38519016 L511,8.38519016 L528.287892,0 L561.290807,0 C554.137668,4.1719419 551.997197,6.71228276 551.08083,14.8427504 L551.026121,146.60314" id="Fill-2"></path>
                                    <path d="M487.929114,66.39776 C493.220316,70.782492 504.260152,80.0888621 504.260152,97.7379249 C504.260152,114.939566 494.640406,123.048223 484.938732,130.723225 C481.962004,133.745042 478.480052,137.021545 478.480052,142.087734 C478.480052,147.229641 481.962004,150.017422 484.467644,152.096212 L492.790192,158.573501 C502.908335,167.184646 512.132095,175.079918 512.132095,191.118262 C512.132095,212.966205 491.158454,235 451.525647,235 C418.139872,235 402,218.968539 402,201.780664 C402,193.417321 406.130551,181.570973 419.757955,173.455433 C434.040786,164.651552 453.389516,163.474489 463.753443,162.786148 C460.517276,158.573501 456.823676,154.161235 456.823676,146.961188 C456.823676,143.023878 457.997981,140.676635 459.131323,137.909505 C456.612028,138.150424 454.072251,138.398227 451.764605,138.398227 C427.329494,138.398227 413.517751,120.019522 413.517751,101.909271 C413.517751,91.2262192 418.35152,79.3729875 428.278497,70.782492 C441.414332,59.8791709 457.076288,58 469.52256,58 L517,58 L502.239254,66.39776 L487.929114,66.39776 L487.929114,66.39776 Z M471.720106,169.252274 C469.813618,169 468.671102,169 466.372304,169 C464.26622,169 451.719189,169.462503 442.000918,172.784116 C436.859594,174.697197 422,180.352348 422,197.149619 C422,213.911851 438.043406,226 462.862164,226 C485.161879,226 497,215.117163 497,200.464224 C497,188.404106 489.339635,182.041185 471.720106,169.252274 L471.720106,169.252274 Z M478.235214,124.515284 C483.537729,119.169682 484,111.786026 484,107.593263 C484,90.9388646 474.163154,65 455.094494,65 C449.146159,65 442.701564,68.0124766 439.044188,72.6718653 C435.162475,77.4959451 434,83.7542109 434,89.7723019 C434,105.280724 442.959891,131 462.667573,131 C468.418763,131 474.605031,128.179663 478.235214,124.515284 L478.235214,124.515284 Z" id="Fill-3"></path>
                                    <path d="M344.336863,167 C307.636483,167 288,138.048704 288,111.8352 C288,81.2065722 312.685864,55 347.798905,55 C381.741968,55 403,81.9204778 403,110.185593 C403,137.792252 381.988279,167 344.336863,167 L344.336863,167 Z M373.038446,148.065395 C378.640643,140.558479 380,131.188737 380,122.055323 C380,101.397404 370.278541,62 341.546685,62 C333.905453,62 326.209298,65.0236187 320.662024,69.9587205 C311.613378,78.1676715 310,88.4827293 310,98.6031633 C310,121.777289 321.314241,160 349.39388,160 C358.456257,160 367.704002,155.558408 373.038446,148.065395 L373.038446,148.065395 Z" id="Fill-4"></path>
                                    <path d="M221.332956,167 C184.61044,167 165,138.048704 165,111.8352 C165,81.2065722 189.702994,55 224.816975,55 C258.753646,55 280,81.9204778 280,110.185593 C280,137.792252 259.006904,167 221.332956,167 L221.332956,167 Z M250.048769,148.065395 C255.612501,140.558479 257,131.188737 257,122.055323 C257,101.397404 247.246296,62 218.527819,62 C210.855363,62 203.237857,65.0236187 197.674124,69.9587205 C188.607301,78.1676715 187,88.4827293 187,98.6031633 C187,121.777289 198.367874,160 226.413208,160 C235.459425,160 244.697969,155.558408 250.048769,148.065395 L250.048769,148.065395 Z" id="Fill-5"></path>
                                    <path d="M149.774985,160.080409 L118.688962,167.244878 C106.093764,169.24346 94.7835087,171 82.8067322,171 C22.8472645,171 0,126.581676 0,91.8174048 C0,49.3630858 32.3709663,10 87.8090806,10 C99.5384883,10 110.821258,11.7357931 121.100809,14.5573214 C137.392798,19.1630514 145.013134,24.8406855 149.774985,28.1670461 L131.717057,45.4281603 L124.103592,47.1432069 L129.531965,38.4365792 C122.179612,31.2098707 108.663651,17.869851 83.0128729,17.869851 C48.7179264,17.869851 22.8472645,44.1072978 22.8472645,82.4123105 C22.8472645,123.552682 52.3872315,162.251879 99.7652431,162.251879 C113.686614,162.251879 120.85344,159.437266 127.360616,156.809372 L127.360616,121.540269 L94.5361399,123.317555 L111.934418,113.912461 L158,113.912461 L152.365487,119.368799 C150.846917,120.668915 150.640776,121.111507 150.214752,122.854216 C149.987997,124.845883 149.774985,131.180491 149.774985,133.407285 L149.774985,160.080409" id="Fill-6"></path>
                                    <path d="M731.702413,148.939774 L731.702413,208 L720,208 L720,57.714228 L731.702413,57.714228 L731.702413,74.8310428 C739.325778,63.7679871 753.256243,55 769.435327,55 C798.454844,55 818,77.0642684 818,111.991916 C818,146.685934 798.454844,169.21059 769.435327,169.21059 C754.161175,169.21059 740.47751,161.315279 731.702413,148.939774 L731.702413,148.939774 Z M806,112.892369 C806,86.2901677 792.258322,66 767.892133,66 C752.760461,66 738.289381,77.9991135 732,88.4636182 L732,137.078082 C738.289381,147.563419 752.760461,160 767.892133,160 C792.258322,160 806,139.536234 806,112.892369 L806,112.892369 Z" id="Fill-7"></path>
                                    <path d="M834,16 L846,16 L846,167 L834,167 L834,16 Z" id="Fill-8"></path>
                                    <path d="M976.463271,197.601096 C978.96572,198.721396 983.237023,199.408697 985.945152,199.408697 C993.10284,199.408697 998.087169,196.473923 1002.56415,186.109429 L1011.0999,166.720677 L965,57 L978.053869,57 L1017.59941,152.081173 L1056.76102,57 L1070,57 L1013.77375,189.74525 C1007.93928,203.422533 998.75906,210 986.150833,210 C982.366308,210 977.375122,209.326445 974.454456,208.426081 L976.463271,197.601096" id="Fill-9"></path>
                                    <path d="M943.4375,166.851012 C942.651468,163.057462 942.058496,159.713056 941.62411,156.921445 C941.265569,154.136744 941.058719,151.289853 941.058719,148.394593 C937.025133,154.330222 931.309164,159.270821 924.00734,163.16111 C916.698621,167.07904 909.755338,169 900.233319,169 C888.766904,169 879.865436,166.173839 873.515125,160.438599 C867.185498,154.710268 864,146.950418 864,137.13141 C864,127.326221 868.612767,119.365984 877.810721,113.278337 C887.008674,107.16305 898.895685,104.122682 913.609653,104.122682 L941.058719,104.122682 L941.058719,90.5308522 C941.058719,82.7019033 938.397242,76.545157 933.081183,72.0813432 C927.74444,67.6106195 920.25645,65.3510729 910.548265,65.3510729 C901.674377,65.3510729 894.475979,67.4171415 888.99444,71.4387198 C883.561165,75.5432174 880.823843,80.6289247 880.823843,86.7580313 L868.778247,86.7580313 L868.530027,86.1706874 C868.095641,77.9064129 871.867215,70.6578979 879.886121,64.3975027 C887.870552,58.1440175 898.330294,55 911.203292,55 C924.03492,55 934.418817,58.095648 942.244662,64.273124 C950.063612,70.3884107 953.986877,79.2262092 953.986877,90.7796096 L953.986877,144.746151 C953.986877,148.622621 954.173043,152.367802 954.655694,156.016244 C955.152135,159.671597 955.945062,163.320039 957,166.851012 L943.4375,166.851012 L943.4375,166.851012 Z M901.6493,159 C911.638536,159 918.817008,156.749653 926.153929,152.297577 C933.442626,147.873283 938.402799,142.101559 941,135.11437 L941,114 L913.443488,114 C902.9169,114 894.202153,116.347585 887.34747,121.084427 C880.47901,125.807378 877,131.523538 877,138.170397 C877,144.442198 879.204521,149.456861 883.586006,153.256058 C887.98127,157.096929 893.98859,159 901.6493,159 L901.6493,159 Z" id="Fill-10"></path>
                                </g>
                                <g id="Get-it-on" transform="translate(343.000000, 80.000000)" fill="#FFFFFF" sketch:type="MSShapeGroup">
                                    <path d="M0.0424710425,35.3110072 C0.0424710425,13.770941 17.2432432,-0.0849420849 38.6322691,-0.0849420849 C52.9673941,-0.0849420849 62.3427449,6.27902272 68.1842566,14.0721558 L57.7136224,19.7183321 C53.7458031,14.584862 46.7952307,10.592163 38.6322691,10.592163 C24.0835984,10.592163 13.2754239,20.8462856 13.2754239,35.3110072 C13.2754239,49.5642375 24.0835984,60.0298513 38.6322691,60.0298513 C46.1339275,60.0298513 52.7469597,56.8510733 56.0534758,53.8773778 L56.0534758,43.3092227 L34.0031466,43.3092227 L34.0031466,32.7410677 L68.8455598,32.7410677 L68.8455598,58.2866505 C61.6814417,65.7785688 51.314136,70.8030888 38.6322691,70.8030888 C17.2432432,70.8030888 0.0424710425,56.7549409 0.0424710425,35.3110072" id="Fill-1"></path>
                                    <path d="M85.5250965,69.7606178 L85.5250965,0.957528958 L136.606178,0.957528958 L136.606178,11.5902064 L98.6043672,11.5902064 L98.6043672,29.3242234 L135.824075,29.3242234 L135.824075,39.9504568 L98.6043672,39.9504568 L98.6043672,59.1343844 L136.606178,59.1343844 L136.606178,69.7606178 L85.5250965,69.7606178" id="Fill-2"></path>
                                    <path d="M171.344753,69.7606178 L171.344753,11.5902064 L149.11583,11.5902064 L149.11583,0.957528958 L206.451737,0.957528958 L206.451737,11.5902064 L184.222815,11.5902064 L184.222815,69.7606178 L171.344753,69.7606178" id="Fill-3"></path>
                                    <path d="M252.320463,0.957528958 L264.830116,0.957528958 L264.830116,69.7606178 L252.320463,69.7606178 L252.320463,0.957528958 Z" id="Fill-4"></path>
                                    <path d="M300.618038,69.7606178 L300.618038,11.5902064 L278.382239,11.5902064 L278.382239,0.957528958 L335.718147,0.957528958 L335.718147,11.5902064 L313.496099,11.5902064 L313.496099,69.7606178 L300.618038,69.7606178" id="Fill-5"></path>
                                    <path d="M378.459459,35.3622824 C378.459459,14.9141822 394.192589,-0.0849420849 416.513138,-0.0849420849 C438.708213,-0.0849420849 454.559846,14.9141822 454.559846,35.3622824 C454.559846,55.8039645 438.708213,70.8030888 416.513138,70.8030888 C394.192589,70.8030888 378.459459,55.8039645 378.459459,35.3622824 L378.459459,35.3622824 Z M441.007722,34.8378378 C441.007722,20.807183 431.367775,10.3397683 416.513115,10.3397683 C401.547651,10.3397683 392.011583,20.807183 392.011583,34.8378378 C392.011583,48.7605157 401.547651,59.3359073 416.513115,59.3359073 C431.367775,59.3359073 441.007722,48.7605157 441.007722,34.8378378 L441.007722,34.8378378 Z" id="Fill-6"></path>
                                    <path d="M520.311577,69.7606178 L482.021048,20.5603196 L482.021048,69.7606178 L469.15444,69.7606178 L469.15444,0.957528958 L482.357834,0.957528958 L519.871693,48.6176999 L519.871693,0.957528958 L532.745174,0.957528958 L532.745174,69.7606178 L520.311577,69.7606178" id="Fill-7"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <svg class="h-12 bounce-top-icons" width="1477px" height="500px" viewBox="0 0 1477 500" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    <!-- Generator: Sketch 3.1.1 (8761) - http://www.bohemiancoding.com/sketch -->
                    <title>App Store</title>
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-462.000000, -850.000000)">
                            <g id="App-Store" sketch:type="MSLayerGroup" transform="translate(462.000000, 850.000000)">
                                <rect id="background" fill="#000000" sketch:type="MSShapeGroup" x="0" y="0" width="1477" height="500" rx="60"></rect>
                                <g id="icon" transform="translate(131.000000, 88.000000)" fill="#FFFFFF" sketch:type="MSShapeGroup">
                                    <path d="M192.340766,150.55423 C192.018956,114.788858 221.625537,97.3888881 222.979361,96.5788129 C206.211916,72.132299 180.22293,68.7921262 171.090165,68.5258002 C149.262524,66.2287378 128.089602,81.5868745 116.970488,81.5868745 C105.629437,81.5868745 88.5068896,68.7477385 70.0527122,69.1250338 C46.3053043,69.4912322 24.0892712,83.2403156 11.9048535,104.590789 C-13.2407663,148.124005 5.5130278,212.097746 29.6044403,247.286078 C41.655695,264.530691 55.737686,283.761653 74.1696694,283.084741 C92.2021638,282.352344 98.937994,271.588332 120.699053,271.588332 C142.260368,271.588332 148.585612,283.084741 167.383794,282.640864 C186.736822,282.352344 198.92124,265.340766 210.550811,247.940796 C224.477446,228.210473 230.070293,208.735379 230.292231,207.736657 C229.848355,207.592397 192.718062,193.42163 192.340766,150.55423" id="Fill-2"></path>
                                    <path d="M156.830624,45.3776258 C166.529331,33.2486927 173.165289,16.7475733 171.323201,0.00232156273 C157.285597,0.623749061 139.73027,9.71212622 129.620977,21.5747333 C120.67686,32.0280316 112.687077,49.1616754 114.751104,65.2744027 C130.519827,66.4506762 146.710233,57.3179113 156.830624,45.3776258" id="Fill-3"></path>
                                </g>
                                <g transform="translate(460.000000, 219.000000)" fill="#FFFFFF" sketch:type="MSShapeGroup">
                                    <path d="M124.528963,149.610128 L99.3278588,149.610128 L85.5232908,106.232269 L37.5402104,106.232269 L24.3903606,149.610128 L-0.144928625,149.610128 L47.4053719,1.93232156 L76.7678212,1.93232156 L124.528963,149.610128 L124.528963,149.610128 Z M81.3619459,88.0333208 L68.8779113,49.4826221 C67.5573779,45.5321187 65.0716679,36.2550939 61.4318783,21.6515477 L60.9880015,21.6515477 C59.5232081,27.9324042 57.1817581,37.209429 53.9747483,49.4826221 L41.7015552,88.0333208 L81.3619459,88.0333208 L81.3619459,88.0333208 Z" id="Fill-4"></path>
                                    <path d="M246.572885,95.0576709 C246.572885,113.167844 241.65695,127.48287 231.813982,137.991653 C223.003028,147.346356 212.050368,152.018159 198.989294,152.018159 C184.885109,152.018159 174.742524,146.991255 168.583734,136.904155 L168.583734,192.777145 L144.925101,192.777145 L144.925101,78.1237716 C144.925101,66.749429 144.625485,55.0865665 144.048445,43.1240872 L164.855169,43.1240872 L166.175702,60.0135988 L166.619579,60.0135988 C174.509489,47.285432 186.483065,40.9268971 202.551405,40.9268971 C215.113118,40.9268971 225.599707,45.8872201 233.988978,55.8189632 C242.367153,65.7729001 246.572885,78.8450714 246.572885,95.0576709 L246.572885,95.0576709 Z M222.470376,95.9232307 C222.470376,85.5587077 220.140023,77.0140796 215.457122,70.2893464 C210.341443,63.2871901 203.472449,59.7694666 194.86124,59.7694666 C189.02426,59.7694666 183.719932,61.7225244 178.981548,65.5842524 C174.232066,69.4570774 171.124929,74.5283696 169.671232,80.8203231 C168.938835,83.7388129 168.572637,86.1246506 168.572637,88.011127 L168.572637,105.788392 C168.572637,113.511848 170.947378,120.047934 175.69686,125.396649 C180.446341,130.723171 186.616228,133.397528 194.206521,133.397528 C203.117348,133.397528 210.052923,129.946386 215.013246,123.099587 C219.984666,116.230594 222.470376,107.175507 222.470376,95.9232307 L222.470376,95.9232307 Z" id="Fill-5"></path>
                                    <path d="M369.049587,95.0576709 C369.049587,113.167844 364.133651,127.48287 354.290684,137.991653 C345.468633,147.346356 334.52707,152.018159 321.454899,152.018159 C307.361811,152.018159 297.219226,146.991255 291.049339,136.904155 L291.049339,192.777145 L267.390706,192.777145 L267.390706,78.1237716 C267.390706,66.749429 267.091089,55.0865665 266.51405,43.1240872 L287.320774,43.1240872 L288.641307,60.0135988 L289.085184,60.0135988 C296.963997,47.285432 308.937573,40.9268971 325.01701,40.9268971 C337.567626,40.9268971 348.065312,45.8872201 356.46568,55.8189632 C364.832757,65.7729001 369.049587,78.8450714 369.049587,95.0576709 L369.049587,95.0576709 Z M344.93598,95.9232307 C344.93598,85.5587077 342.59453,77.0140796 337.91163,70.2893464 C332.807047,63.2871901 325.949151,59.7694666 317.337941,59.7694666 C311.500962,59.7694666 306.196634,61.7225244 301.436056,65.5842524 C296.697671,69.4570774 293.590533,74.5283696 292.136837,80.8203231 C291.415537,83.7388129 291.027145,86.1246506 291.027145,88.011127 L291.027145,105.788392 C291.027145,113.511848 293.412983,120.047934 298.14027,125.396649 C302.889752,130.712074 309.059639,133.397528 316.672126,133.397528 C325.59405,133.397528 332.529624,129.946386 337.47885,123.099587 C342.45027,116.230594 344.93598,107.175507 344.93598,95.9232307 L344.93598,95.9232307 Z" id="Fill-6"></path>
                                    <path d="M505.985575,108.196424 C505.985575,120.758137 501.602292,130.9784 492.857919,138.86831 C483.247986,147.479519 469.831811,151.796221 452.631585,151.796221 C436.740796,151.796221 424.001533,148.733471 414.3916,142.596875 L419.862382,122.877648 C430.238002,129.014245 441.634538,132.088092 454.040894,132.088092 C462.962817,132.088092 469.898392,130.068452 474.847618,126.062464 C479.819038,122.034282 482.315845,116.67447 482.315845,109.971931 C482.315845,103.968497 480.251818,98.9304959 476.168152,94.8357325 C472.073388,90.763163 465.304267,86.9458227 455.805304,83.4613899 C429.949482,73.8181668 417.010473,59.702885 417.010473,41.1599324 C417.010473,29.0420962 421.582404,19.12145 430.692975,11.3647032 C439.814643,3.61905334 451.910285,-0.2537716 466.957708,-0.2537716 C480.396078,-0.2537716 491.59287,2.08767844 500.481503,6.75948159 L494.544651,26.0459279 C486.177573,21.5183847 476.734095,19.2546131 466.169827,19.2546131 C457.824944,19.2546131 451.266664,21.3075432 446.594861,25.3912096 C442.655455,29.0420962 440.646912,33.4919609 440.646912,38.7740947 C440.646912,44.5999775 442.921781,49.4382344 447.460421,53.222284 C451.38873,56.7289106 458.55734,60.535154 468.921863,64.6188204 C481.638933,69.7455973 490.971443,75.71574 496.963779,82.5736364 C502.989406,89.4315327 505.985575,97.9872577 505.985575,108.196424" id="Fill-7"></path>
                                    <path d="M584.407506,60.8791585 L558.329745,60.8791585 L558.329745,112.579707 C558.329745,125.729557 562.923869,132.287836 572.134313,132.287836 C576.362239,132.287836 579.868866,131.932735 582.643095,131.189241 L583.297814,149.155154 C578.637107,150.89737 572.500511,151.774027 564.910218,151.774027 C555.555515,151.774027 548.264838,148.911022 542.982705,143.218302 C537.722765,137.514485 535.092795,127.960038 535.092795,114.510571 L535.092795,60.8347708 L519.568204,60.8347708 L519.568204,43.0796995 L535.092795,43.0796995 L535.092795,23.5824117 L558.329745,16.5691585 L558.329745,43.0796995 L584.407506,43.0796995 L584.407506,60.8791585" id="Fill-8"></path>
                                    <path d="M701.835109,95.4904508 C701.835109,111.858407 697.163306,125.296777 687.808603,135.80556 C678.032216,146.613959 665.026627,152.018159 648.814027,152.018159 C633.16737,152.018159 620.727724,146.835898 611.450699,136.471375 C602.173674,126.106852 597.535162,113.034681 597.535162,97.2659579 C597.535162,80.7648385 602.340128,67.2487904 611.883479,56.7400075 C621.449023,46.2312246 634.343644,40.9601878 650.556243,40.9601878 C666.191803,40.9601878 678.731322,46.1646431 688.241382,56.5180691 C697.318663,66.5829752 701.835109,79.5552742 701.835109,95.4904508 L701.835109,95.4904508 Z M677.310917,96.0341998 C677.310917,86.2800075 675.202502,77.9129301 670.974576,70.9107739 C666.014252,62.4549211 658.901127,58.2380917 649.712878,58.2380917 C640.247205,58.2380917 632.956529,62.4549211 628.0184,70.9107739 C623.768279,77.9129301 621.670962,86.4242675 621.670962,96.4780766 C621.670962,106.243366 623.768279,114.632637 628.0184,121.601503 C633.13408,130.068452 640.269399,134.296379 649.52423,134.296379 C658.557122,134.296379 665.648054,129.96858 670.785928,121.401758 C675.124823,114.233148 677.310917,105.810586 677.310917,96.0341998 L677.310917,96.0341998 Z" id="Fill-9"></path>
                                    <path d="M778.770053,63.9308114 C776.428603,63.4980316 773.920699,63.2871901 771.312923,63.2871901 C762.990233,63.2871901 756.55402,66.4054245 752.026476,72.7084748 C748.08707,78.2569346 746.122915,85.2701878 746.122915,93.7371375 L746.122915,149.610128 L722.464282,149.610128 L722.464282,76.6589782 C722.464282,64.396882 722.231247,53.2000902 721.776273,43.1351841 L742.383253,43.1351841 L743.248813,63.5091285 L743.903531,63.5091285 C746.411435,56.5069722 750.339745,50.8586401 755.732847,46.6418107 C761.014981,42.8244703 766.696604,40.9268971 772.833201,40.9268971 C775.019294,40.9268971 776.994545,41.0933509 778.747859,41.3596769 L778.770053,63.9308114" id="Fill-10"></path>
                                    <path d="M884.579181,91.3291059 C884.579181,95.5681292 884.301758,99.1413373 883.713621,102.059827 L812.74882,102.059827 C813.00405,112.579707 816.455192,120.636071 823.035665,126.18453 C829.016905,131.133757 836.762554,133.619467 846.250421,133.619467 C856.759204,133.619467 866.346942,131.954929 874.969249,128.581465 L878.67562,145.004906 C868.599617,149.388189 856.692622,151.585379 842.976829,151.585379 C826.464613,151.585379 813.503411,146.724929 804.071029,137.026221 C794.671938,127.316416 789.944651,114.255342 789.944651,97.9206762 C789.944651,81.8745304 794.316837,68.5027423 803.105597,57.8386026 C812.293847,46.453163 824.7113,40.7604433 840.335763,40.7604433 C855.682802,40.7604433 867.301277,46.453163 875.18009,57.8386026 C881.438753,66.8603982 884.579181,78.0460932 884.579181,91.3291059 L884.579181,91.3291059 Z M862.019144,85.1925094 C862.185597,78.1681593 860.632029,72.131435 857.425019,67.0046582 C853.330255,60.4130879 847.027205,57.1283997 838.582449,57.1283997 C830.836799,57.1283997 824.544846,60.3354095 819.750977,66.7716228 C815.81157,71.8873028 813.47012,78.0460932 812.74882,85.1703156 L862.019144,85.1925094 L862.019144,85.1925094 Z" id="Fill-11"></path>
                                </g>
                                <g id="Available-on-the" transform="translate(469.000000, 92.000000)" fill="#FFFFFF" sketch:type="MSShapeGroup">
                                    <path d="M60.9543125,76.0776935 L48.5590533,76.0776935 L41.7788355,54.7605109 L18.1978813,54.7605109 L11.7283772,76.0776935 L-0.333974455,76.0776935 L23.0361382,3.4927423 L37.4621337,3.4927423 L60.9543125,76.0776935 L60.9543125,76.0776935 Z M39.7370023,45.8163937 L33.6004057,26.862855 C32.9567844,24.9208941 31.769414,20.4044478 29.9384222,13.19145 L29.7164838,13.19145 C28.9618933,16.3096844 27.8854921,20.8372276 26.2653418,26.862855 L20.2397145,45.8163937 L39.7370023,45.8163937 L39.7370023,45.8163937 Z" id="Fill-12"></path>
                                    <path d="M119.390691,23.7446206 L99.5715928,76.0776935 L88.2638317,76.0776935 L69.0883546,23.7446206 L81.5834861,23.7446206 L90.5276033,51.4203381 C92.0367844,56.0477536 93.324027,60.4643276 94.2894591,64.6589632 L94.6112697,64.6589632 C95.4768295,60.8971074 96.7640721,56.4805334 98.3731255,51.4203381 L107.206273,23.7446206 L119.390691,23.7446206" id="Fill-13"></path>
                                    <path d="M161.58118,76.0776935 L160.71562,70.0520661 L160.393809,70.0520661 C156.842795,74.90142 151.67163,77.2650639 145.102254,77.2650639 C135.736454,77.2650639 129.056108,70.6956875 129.056108,61.8625394 C129.056108,48.945725 140.2529,42.2653794 159.639219,42.2653794 L159.639219,41.2999474 C159.639219,34.4087603 155.977235,30.9576183 148.764237,30.9576183 C143.593073,30.9576183 139.06553,32.2559579 135.092832,34.8415402 L132.729189,27.1957626 C137.578542,24.1774005 143.60417,22.6682194 150.717295,22.6682194 C164.3887,22.6682194 171.290984,29.8812171 171.290984,44.3183095 L171.290984,63.5936589 C171.290984,68.8757926 171.512923,72.970556 172.045575,76.0887904 L161.58118,76.0776935 L161.58118,76.0776935 Z M159.961029,50.0110293 C147.033118,50.0110293 140.574711,53.1403606 140.574711,60.5641998 C140.574711,66.0571751 143.914884,68.7426296 148.542299,68.7426296 C154.468054,68.7426296 159.961029,64.2261833 159.961029,58.0895868 L159.961029,50.0110293 L159.961029,50.0110293 Z" id="Fill-14"></path>
                                    <path d="M197.191195,15.122314 C193.31837,15.122314 190.300008,12.1039519 190.300008,8.12015778 C190.300008,4.13636364 193.418242,1.2289707 197.413133,1.2289707 C201.396927,1.2289707 204.626131,4.13636364 204.515162,8.12015778 C204.515162,12.3258903 201.507896,15.122314 197.191195,15.122314 L197.191195,15.122314 Z M191.598347,23.7446206 L203.227919,23.7446206 L203.227919,76.0776935 L191.598347,76.0776935 L191.598347,23.7446206 Z" id="Fill-15"></path>
                                    <path d="M223.890383,-0.269113449 L235.519955,-0.269113449 L235.519955,76.0776935 L223.890383,76.0776935 L223.890383,-0.269113449 Z" id="Fill-16"></path>
                                    <path d="M284.945635,76.0776935 L284.068978,70.0520661 L283.758264,70.0520661 C280.20725,74.90142 275.036086,77.2650639 268.466709,77.2650639 C259.100909,77.2650639 252.420563,70.6956875 252.420563,61.8625394 C252.420563,48.945725 263.617355,42.2653794 283.003674,42.2653794 L283.003674,41.2999474 C283.003674,34.4087603 279.34169,30.9576183 272.128693,30.9576183 C266.957528,30.9576183 262.429985,32.2559579 258.457288,34.8415402 L256.082547,27.1846657 C260.931901,24.1663035 266.957528,22.6571225 274.070654,22.6571225 C287.742059,22.6571225 294.65544,29.8701202 294.65544,44.3072126 L294.65544,63.582562 C294.65544,68.8646957 294.877378,72.9594591 295.387836,76.0776935 L284.945635,76.0776935 L284.945635,76.0776935 Z M283.325485,50.0110293 C270.397573,50.0110293 263.939166,53.1403606 263.939166,60.5641998 C263.939166,66.0571751 267.279339,68.7426296 271.906754,68.7426296 C277.832509,68.7426296 283.325485,64.2261833 283.325485,58.0895868 L283.325485,50.0110293 L283.325485,50.0110293 Z" id="Fill-17"></path>
                                    <path d="M341.761863,77.2650639 C334.338024,77.2650639 328.856146,74.1357325 325.294035,67.999136 L325.072096,67.999136 L324.406281,76.0776935 L314.507829,76.0776935 C314.818542,71.8830579 314.929512,67.1335763 314.929512,61.9735086 L314.929512,-0.269113449 L326.581277,-0.269113449 L326.581277,31.4014951 L326.792119,31.4014951 C330.243261,25.5867092 335.836108,22.6793163 343.481886,22.6793163 C356.087986,22.6793163 364.921134,33.4544252 364.921134,49.1676634 C364.921134,65.4135537 355.111458,77.2650639 341.761863,77.2650639 L341.761863,77.2650639 Z M339.398219,31.8120811 C332.706777,31.8120811 326.581277,37.626867 326.581277,45.7054245 L326.581277,54.8603832 C326.581277,62.0733809 332.085349,67.999136 339.187378,67.999136 C347.89846,67.999136 353.091818,60.8971074 353.091818,49.5893464 C353.080721,39.0361758 347.687618,31.8120811 339.398219,31.8120811 L339.398219,31.8120811 Z" id="Fill-18"></path>
                                    <path d="M382.132457,-0.269113449 L393.750932,-0.269113449 L393.750932,76.0776935 L382.132457,76.0776935 L382.132457,-0.269113449 Z" id="Fill-19"></path>
                                    <path d="M457.047761,52.7075808 L422.136852,52.7075808 C422.369887,62.61713 428.91707,68.2099775 438.604681,68.2099775 C443.786942,68.2099775 448.525327,67.3444177 452.719962,65.7353644 L454.52876,73.8139219 C449.579534,75.9667243 443.764748,77.0431255 436.98453,77.0431255 C420.605477,77.0431255 410.917866,66.7007964 410.917866,50.6657476 C410.917866,34.6196018 420.838512,22.5572502 435.686191,22.5572502 C449.024688,22.5572502 457.44725,32.4667994 457.44725,47.436544 C457.480541,49.4783772 457.380669,51.3093689 457.047761,52.7075808 L457.047761,52.7075808 Z M446.394718,44.4181818 C446.394718,36.3396243 442.288858,30.6358077 434.853922,30.6358077 C428.173576,30.6358077 422.913636,36.4505935 422.136852,44.4181818 L446.394718,44.4181818 L446.394718,44.4181818 Z" id="Fill-20"></path>
                                    <path d="M527.535394,77.2650639 C512.243839,77.2650639 502.33429,65.8463336 502.33429,50.3439369 C502.33429,34.1868219 512.454681,22.6682194 528.412051,22.6682194 C543.470571,22.6682194 553.613156,33.5432006 553.613156,49.4894741 C553.613156,65.8463336 543.159857,77.2650639 527.535394,77.2650639 L527.535394,77.2650639 Z M527.979271,31.1684598 C519.578903,31.1684598 514.196897,39.0250789 514.196897,50.0110293 C514.196897,60.7861382 519.689872,68.6427573 527.868302,68.6427573 C536.046732,68.6427573 541.539707,60.2423892 541.539707,49.7890909 C541.539707,39.1360481 536.157701,31.1684598 527.979271,31.1684598 L527.979271,31.1684598 Z" id="Fill-21"></path>
                                    <path d="M616.133201,76.0776935 L604.525823,76.0776935 L604.525823,46.0272352 C604.525823,36.7724042 600.963711,32.1338918 593.961555,32.1338918 C587.070368,32.1338918 582.320887,38.0596469 582.320887,44.950834 L582.320887,76.0776935 L570.713509,76.0776935 L570.713509,38.7032682 C570.713509,34.0758527 570.580346,29.1155297 570.269632,23.7335237 L580.500992,23.7335237 L581.044741,31.8120811 L581.377648,31.8120811 C584.473689,26.2192337 590.843321,22.6571225 597.956446,22.6571225 C608.920203,22.6571225 616.133201,31.0574906 616.133201,44.7288956 L616.133201,76.0776935" id="Fill-22"></path>
                                    <path d="M692.224778,32.4667994 L679.43003,32.4667994 L679.43003,57.8787453 C679.43003,64.3482494 681.682705,67.577453 686.199151,67.577453 C688.240984,67.577453 689.983201,67.3555147 691.370316,67.033704 L691.692126,75.866852 C689.428355,76.7324117 686.398896,77.1651916 682.659234,77.1651916 C673.482081,77.1651916 668.022397,72.1049962 668.022397,58.8552742 L668.022397,32.4667994 L660.398813,32.4667994 L660.398813,23.7446206 L668.022397,23.7446206 L668.022397,14.156882 L679.43003,10.70574 L679.43003,23.7335237 L692.224778,23.7335237 L692.224778,32.4667994" id="Fill-23"></path>
                                    <path d="M753.812682,76.0776935 L742.172014,76.0776935 L742.172014,46.2491736 C742.172014,36.8833734 738.609902,32.1449887 731.618843,32.1449887 C725.593216,32.1449887 720.000368,36.2397521 720.000368,44.529151 L720.000368,76.0776935 L708.359699,76.0776935 L708.359699,-0.269113449 L720.000368,-0.269113449 L720.000368,31.1684598 L720.222307,31.1684598 C723.873193,25.4646431 729.166424,22.6571225 735.946642,22.6571225 C747.032464,22.6571225 753.812682,31.2683321 753.812682,44.950834 L753.812682,76.0776935" id="Fill-24"></path>
                                    <path d="M813.236687,52.7075808 L778.336875,52.7075808 C778.558813,62.61713 785.105995,68.2099775 794.804703,68.2099775 C799.998062,68.2099775 804.725349,67.3444177 808.897791,65.7353644 L810.717686,73.8139219 C805.779557,75.9667243 799.953674,77.0431255 793.162359,77.0431255 C776.794403,77.0431255 767.106792,66.7007964 767.106792,50.6657476 C767.106792,34.6196018 777.016341,22.5572502 791.86402,22.5572502 C805.213614,22.5572502 813.625079,32.4667994 813.625079,47.436544 C813.669467,49.4783772 813.558497,51.3093689 813.236687,52.7075808 L813.236687,52.7075808 Z M802.572547,44.4181818 C802.572547,36.3396243 798.488881,30.6358077 791.053944,30.6358077 C784.373599,30.6358077 779.102562,36.4505935 778.336875,44.4181818 L802.572547,44.4181818 L802.572547,44.4181818 Z" id="Fill-25"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>

        </div>

        <!--Right Col-->
        <div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
            <svg class="w-5/6 mx-auto lg:mr-0 slide-in-bottom" width="897px" height="452px" viewBox="0 0 897 452" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                <!-- Generator: Sketch 3.0.4 (8054) - http://www.bohemiancoding.com/sketch -->
                <title>IPAD 2</title>
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                    <g id="IPAD" sketch:type="MSLayerGroup" transform="translate(681.000000, 55.000000)" stroke="#7E89A3">
                        <path d="M202.986,317 L12.097,317 C5.462,317 0.083,311.623 0.083,304.99 L0.083,12.093 C0.083,5.46 5.461,0.083 12.097,0.083 L202.986,0.083 C209.622,0.083 215,5.46 215,12.093 L215,304.99 C215,311.623 209.622,317 202.986,317 Z" id="bezel" stroke-width="2" fill="#FDFDFD" sketch:type="MSShapeGroup"></path>
                        <path d="M202.986,317 L12.097,317 C5.462,317 0.083,311.623 0.083,304.99 L0.083,12.093 C0.083,5.46 5.461,0.083 12.097,0.083 L202.986,0.083 C209.622,0.083 215,5.46 215,12.093 L215,304.99 C215,311.623 209.622,317 202.986,317 Z" id="bezel-2" stroke-width="2" fill="#FDFDFD" sketch:type="MSShapeGroup"></path>
                        <rect id="screen" fill="#FFFFFF" sketch:type="MSShapeGroup" x="17" y="32" width="181.999" height="252.917"></rect>
                        <circle id="lock" sketch:type="MSShapeGroup" cx="108.021" cy="300.021" r="8.021"></circle>
                        <circle id="camera" sketch:type="MSShapeGroup" cx="106.99" cy="16.99" r="2.99"></circle>
                    </g>
                    <g id="Laptop" sketch:type="MSLayerGroup" transform="translate(1.000000, 1.000000)" stroke="#8492A5">
                        <path d="M594,0 L98,0 C84.50415,0 73,11.0738184 73,24.7901127 L73,351.027995 L619,351.027985 L619,24.7901127 C618.999971,11.0728209 607.537479,0 594,0 Z" id="bezel" stroke-width="2" fill="#FEFEFE" sketch:type="MSShapeGroup"></path>
                        <circle id="webcam" stroke-width="2" sketch:type="MSShapeGroup" cx="347" cy="19" r="4"></circle>
                        <g id="bottom" transform="translate(0.000000, 351.000000)" sketch:type="MSShapeGroup">
                            <path d="M640.812,31.01 L51.288,31.01 C20.641,31.01 0,20.494 0,16.022 L0,2.428 C0,1.084 1.335,0 2.995,0 L689.104,0 C690.766,0 692.103,1.084 692.103,2.428 L692.103,16.557 C692.096,20.092 676.112,31.01 640.812,31.01 Z" id="Shape" stroke-width="2" fill="#FDFDFD"></path>
                            <path d="M0.5,14.5 L690.242676,14.5" id="Line" stroke-linecap="square"></path>
                        </g>
                        <rect id="screen" fill="#FFFFFF" sketch:type="MSShapeGroup" x="95" y="39" width="501.073853" height="292.009"></rect>
                        <path d="M421,352 L421,355.087 C421,357.288 416.666719,357.952714 413.386719,357.952714 L278.815286,357.952714 C275.364286,357.952714 271,357.289 271,355.087 L271,352" id="touchpad" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                    </g>
                    <g id="iphone" sketch:type="MSLayerGroup" transform="translate(576.000000, 177.000000)" stroke="#7E89A3">
                        <path d="M130,257.964 C130,266.797 122.809,273.956 113.938,273.956 L16.063,273.956 C7.192,273.956 0.001,266.797 0.001,257.964 L0.001,16.073 C0.001,7.24 7.192,0.081 16.063,0.081 L113.938,0.081 C122.809,0.081 130,7.24 130,16.073 L130,257.964 L130,257.964 Z" id="bezel" stroke-width="2" fill="#FDFDFD" sketch:type="MSShapeGroup"></path>
                        <rect id="screen" fill="#FFFFFF" sketch:type="MSShapeGroup" x="9" y="36" width="111.93" height="199.084"></rect>
                        <path d="M77,25.746 C77,26.381 76.561,26.893 76.02,26.893 L55.918,26.893 C55.376,26.893 54.938,26.38 54.938,25.746 L54.938,23.166 C54.938,22.531 55.377,22.019 55.918,22.019 L76.02,22.019 C76.561,22.019 77,22.532 77,23.166 L77,25.746 L77,25.746 Z" id="speaker" sketch:type="MSShapeGroup"></path>
                        <circle id="camera" sketch:type="MSShapeGroup" cx="66" cy="12" r="3"></circle>
                        <ellipse id="lock" sketch:type="MSShapeGroup" cx="65.04" cy="254.001" rx="10.04" ry="10.001"></ellipse>
                    </g>
                </g>
            </svg>
        </div>

        <!--Footer-->
        <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
            <a class="text-gray-500 no-underline hover:no-underline" href="#">© App 2019</a>
        </div>

    </div>
</section>

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
