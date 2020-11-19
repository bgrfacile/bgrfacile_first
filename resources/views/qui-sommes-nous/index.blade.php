@extends('layouts.front')

@section('ressourceCSS')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <style>
        blockquote {
            position: relative;
        }

        blockquote p:first-of-type:before {
            content: '\201c';
            position: absolute;
            left: -.5em;
        }

        blockquote p:last-of-type:after {
            content: '\201d';
            position: absolute;
        }
    </style>
@endsection

@section('baniere')
    <div class="flex flex-col justify-between items-center bg-gray-500 overflow-hidden text-white"
         style='min-height: 374px;background: center / cover no-repeat url("{{ asset('assets/images/bg_about_header.jpg') }}")'>
        <div>
            <h3 class="my-5 pt-5 font-semibold text-4xl">Qui sommes-nous ?</h3>
        </div>
        <div class="py-3 bg-black w-full opacity-25 text-white">
            <h4 class="text-2xl text-center h-12">une communauté de</h4>
            <div class="grid grid-cols-3 divide-x divide-gray-400 mx-auto max-w-6xl">
                <div class="{{--px-10 mx-5--}} text-center flex flex-col">
                    <strong class="text-xl md:text-4xl count">12.828.959</strong>
                    <p class="font-bold text-base md:text-xl text-gray-800">professeurs</p>
                </div>

                <div class="{{--px-10 mx-5--}} text-center flex flex-col">
                    <strong class="text-xl md:text-4xl count">12.82.959</strong>
                    <p class="font-bold text-base md:text-xl text-gray-800">étudiant</p>
                </div>

                <div class="{{--px-10 mx-5--}} text-center flex flex-col">
                    <strong class="text-xl md:text-4xl count">12.828.959</strong>
                    <p class="font-bold text-base md:text-xl text-gray-800">école</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    {{--    parler de bgrfacile--}}
    <div class="mx-auto max-w-3xl py-16 text-center">
        <h3 class="mb-7 text-2xl font-bold">bgrfacile</h3>
        <p class="text-gray-800">
            Passionnés, Rêveurs, Utopistes, Partageurs, Impliqués, Sérieux, Engagés, Polyglottes et toujours partants
            pour l'aventure. Des Français, des Belges, des Espagnols, deux Américaines, quatre Brésiliens, quatre
            Italiennes, trois Allemands, trois Anglais, deux Mexicaines, une Chilienne, une Argentine, deux Indiens, une
            Colombienne, une Hollandaise, une Japonaise, un Indonésien. Superprof, c'est près de 100 collaborateurs à
            l'Ambassade du Partage de Connaissances à Paris pour vous aider à transmettre vos passions dans 28 pays et
            14 langues.
        </p>
    </div>

    {{--une image illustration de l'équipe bgrfacile--}}
    <div class="w-full overflow-hidden" style="height: 543px;filter: grayscale(80%);">
        <img
            class="w-full"
            src="{{ asset('assets/images/banniere_bgrfacile.jpeg') }}"
            {{--            src="{{ asset('assets/images/groupe-essengo.jpeg') }}"--}}
            alt="">
    </div>

    {{--historique de bgrfcile--}}
    <div class="mx-auto max-w-4xl py-16 px-8">
        <h3 class="mb-7 text-2xl font-bold text-center">L'histoire de bgrfacile</h3>
        <div class="w-full mx-auto">
            <div class="border-r-2 border-gray-200 border-dotted absolute h-full top-0 z-0" style="left: 7px"></div>
            <ul class="list-none m-0 p-0">
                <li class="mb-2">
                    <div class="flex items-center mb-1">
                        <div class="bg-indigo-600 rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                        </div>
                        <div class="flex-1 ml-4 font-semibold">Juin 2019 - Lancement de la version du project</div>
                    </div>
                    <div class="ml-12">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos tenetur, suscipit atque et
                        nulla dolores unde maiores doloribus nemo possimus commodi totam consectetur temporibus odit
                        velit illo repellendus provident vitae.
                    </div>
                </li>
                <li class="mb-2">
                    <div class="flex items-center mb-1">
                        <div class="bg-indigo-600 rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                        </div>
                        <div class="flex-1 ml-4 font-semibold">May 2019 - Learn Golang</div>
                    </div>
                    <div class="ml-12">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos tenetur, suscipit atque et
                        nulla dolores unde maiores doloribus nemo possimus commodi totam consectetur temporibus odit
                        velit illo repellendus provident vitae.
                    </div>
                </li>
                <li class="mb-2">
                    <div class="flex items-center mb-1">
                        <div class="bg-indigo-600 rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                        </div>
                        <div class="flex-1 ml-4 font-semibold">April 2019 - Learn Photography</div>
                    </div>
                    <div class="ml-12">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos tenetur, suscipit atque et
                        nulla dolores unde maiores doloribus nemo possimus commodi totam consectetur temporibus odit
                        velit illo repellendus provident vitae.
                    </div>
                </li>
                <li class="mb-2">
                    <div class="flex items-center mb-1">
                        <div class="bg-indigo-600 rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                        </div>
                        <div class="flex-1 ml-4 font-medium">Feb 2018 - Learn Laravel</div>
                    </div>
                    <div class="ml-12">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos tenetur, suscipit atque et
                        nulla dolores unde maiores doloribus nemo possimus commodi totam consectetur temporibus odit
                        velit illo repellendus provident vitae.
                    </div>
                </li>
                <li class="mb-2">
                    <div class="flex items-center mb-1">
                        <div class="bg-indigo-600 rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                        </div>
                        <div class="flex-1 ml-4 font-semibold">May 2017 - Learn PHP</div>
                    </div>
                    <div class="ml-12">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos tenetur, suscipit atque et
                        nulla dolores unde maiores doloribus nemo possimus commodi totam consectetur temporibus odit
                        velit illo repellendus provident vitae.
                    </div>
                </li>
            </ul>
        </div>
    </div>

    {{--presentation de l'équipe--}}
    <div class="bg-gray-100">
        <div class="mx-auto max-w-4xl py-16 text-gray-700">
            <h3 class="mb-7 text-2xl font-bold text-left border-b pb-2">Remerciement</h3>
            <div class="flex flex-col md:flex-row lg:-mx-8 items-center mb-12 md:mb-20">
{{--                <div class="w-full lg:w-1/2 lg:px-8">--}}
{{--                    <div class="bg-transparent rounded-lg shadow-lg p-8 md:mx-4">--}}
{{--                        <div class="w-64 h-64  border border-solid max-w-sm mx-auto">--}}
{{--                            <img--}}
{{--                                src="{{ asset('assets/images/bgr_dessin1.png') }}"--}}
{{--                                alt="garçon qui étudie"--}}
{{--                                title="#MyArt@Lb14"--}}
{{--                                class="w-full h-full object-cover">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="w-full  lg:px-8 text-justify px-4 ">
                    <blockquote>
                        <p class="mb-2 ">
                            Je tiens à remercier toutes les personnes qui ont contribué au succès de ce site et qui ont
                            aidée lors de la réalisation de celle-ci.
                        </p>
                        <p class="mb-2 ">
                            Je voudrais dans un premier temps remercier, mes parents J&B, pour la patience, la
                            disponibilité
                            et surtout les judicieux conseils, qui ont contribué à alimenter ma réflexion.
                        </p>
                        <p class="mb-2 ">
                            Je remercie également toute l’équipe essengoGroup et tous les intervenants pour la
                            contribution.
                        </p>
                        <p class="">
                            Je tiens à témoigner toute ma reconnaissance aux personnes suivantes, pour leur aide dans la
                            réalisation de ce projet.
                        </p>
                    </blockquote>
                </div>
            </div>

            <h3 class="my-7 text-2xl font-bold text-left border-b pb-2">L'équipes</h3>
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">
                    <div class="px-5 py-12 text-center">
                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">
                            <img src="{{ asset('assets/images/benaja.jpg') }}" alt="profile image"
                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                        </div>
                        <h5 class="mt-4 mb-1 text-xl font-medium">Bénaja BENDO</h5>
                        <span class="text-sm text-gray-500 font-medium uppercase">full stack Dev</span>
                    </div>
                </div>

                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">
                    <div class="px-5 py-12 text-center">
                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">
                            <img src="{{ asset('assets/images/styve.jpg') }}" alt="profile image"
                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                        </div>
                        <h5 class="mt-4 mb-1 text-xl font-medium">Styve LIOUMBA</h5>
                        <span class="text-sm text-gray-500 font-medium uppercase">android full Stack</span>
                    </div>
                </div>

                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">
                    <div class="px-5 py-12 text-center">
                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">
                            <img src="//via.placeholder.com/100/eee" alt="profile image"
                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                        </div>
                        <h5 class="mt-4 mb-1 text-xl font-medium">Ken</h5>
                        <span class="text-sm text-gray-500 font-medium uppercase">full web and android code</span>
                    </div>
                </div>

                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">
                    <div class="px-5 py-12 text-center">
                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">
                            <img src="//via.placeholder.com/100/eee" alt="profile image"
                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                        </div>
                        <h5 class="mt-4 mb-1 text-xl font-medium">Chanel</h5>
                        <span class="text-sm text-gray-500 font-medium uppercase">full web and full redactor</span>
                    </div>
                </div>

                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">
                    <div class="px-5 py-12 text-center">
                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">
                            <img src="//via.placeholder.com/100/eee" alt="profile image"
                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                        </div>
                        <h5 class="mt-4 mb-1 text-xl font-medium">Belinda</h5>
                        <span class="text-sm text-gray-500 font-medium uppercase">full redactor</span>
                    </div>
                </div>

                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">
                    <div class="px-5 py-12 text-center">
                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">
                            <img src="//via.placeholder.com/100/eee" alt="profile image"
                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                        </div>
                        <h5 class="mt-4 mb-1 text-xl font-medium">yannick</h5>
                        <span class="text-sm text-gray-500 font-medium uppercase">full management</span>
                    </div>
                </div>

                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">
                    <div class="px-5 py-12 text-center">
                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">
                            <img src="//via.placeholder.com/100/eee" alt="profile image"
                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                        </div>
                        <h5 class="mt-4 mb-1 text-xl font-medium">jessica</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $('.single-item').slick({
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>
@endsection

