@extends('layouts.front')

@section('ressourceCSS')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
@endsection

@section('baniere')
    <div class="flex flex-col justify-between items-center bg-gray-500 overflow-hidden text-white"
         style="min-height: 374px;">
        <div>
            <h3 class="my-5 pt-5 font-semibold text-4xl">Qui sommes-nous ?</h3>
        </div>
        <div class="py-3 bg-gray-400 w-full">
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
    <div class="w-full overflow-hidden" style="height: 543px">
        <img
            class="w-full"
            src="https://fotomelia.com/wp-content/uploads/edd/2015/09/fotomelia-site-de-photos-et-images-gratuites-libres-de-droits7-1560x1033.jpg"
            {{--            src="{{ asset('assets/images/groupe-essengo.jpeg') }}"--}}
            alt="">
    </div>
    {{--avis des gens par rapport au site--}}

    {{--historique de bgrfcile--}}
    <div class="mx-auto max-w-4xl py-16 px-8">
        <h3 class="mb-7 text-2xl font-bold text-center">L'histoire de bgrfacile</h3>
        <div class="relative w-full mx-auto">
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
    <div class="bg-gray-200">
        <div class="mx-auto max-w-4xl py-16 text-center text-gray-700">
            <h3 class="mb-7 text-2xl font-bold">Rencontrez les 2 fondateurs 👌</h3>
            <div class="flex justify-center mb-8 w-3/4 mx-auto">
                <div class="p-2 m-2">
                    <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
                        <div class="mb-3">
                            <img
                                class="w-auto mx-auto rounded-full"
                                src="https://i.pravatar.cc/150?img=31"
                                alt=""
                            />
                        </div>
                        <h2 class="text-xl font-medium text-gray-700">Bénaja Bendo M.</h2>
                        <span class="text-blue-500 block mb-5">Front End Developer</span>
                        <a
                            href="#"
                            class="px-4 py-2 bg-blue-500 text-white rounded-full">
                            Contactez-moi
                        </a>
                    </div>
                </div>

                <div class="p-2 m-2">
                    <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
                        <div class="mb-3">
                            <img
                                class="w-auto mx-auto rounded-full"
                                src="https://i.pravatar.cc/150?img=31"
                                alt=""
                            />
                        </div>
                        <h2 class="text-xl font-medium text-gray-700">Styve Lioumba R.</h2>
                        <span class="text-blue-500 block mb-5">Back End Developer</span>

                        <a
                            href="#"
                            class="px-4 py-2 bg-blue-500 text-white rounded-full">
                            Contactez-moi
                        </a>
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

