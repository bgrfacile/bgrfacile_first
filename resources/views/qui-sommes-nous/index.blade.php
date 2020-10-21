@extends('layouts.front')

@section('ressourceCSS')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
@endsection

@section('baniere')
    <div class="flex flex-col justify-between items-center bg-gray-100"
         style="height: 525px;">
        <div>
            <h3 class="my-5 pt-5 font-semibold text-5xl">Qui sommes-nous ?</h3>
        </div>
        <div class="my-5 h-32">
            <h4 class="text-2xl text-center h-12">une communauté de</h4>
            <div class="grid grid-cols-3 divide-x divide-gray-400 mx-auto max-w-6xl">
                <div class="px-10 mx-5 text-center ">
                    <strong class="text-4xl">12.828.959</strong>
                    <p class="text-xl">professeurs</p>
                </div>

                <div class="px-10 mx-5 text-center ">
                    <strong class="text-4xl">12.828.959</strong>
                    <p class="text-xl">étudiant</p>
                </div>

                <div class="px-10 mx-5 text-center ">
                    <strong class="text-4xl">12.828.959</strong>
                    <p class="text-xl">école</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="mx-auto max-w-3xl py-16 text-center">
        <h3 class="mb-7 text-2xl font-bold">L'équipe bgrfacile</h3>
        <p class="text-gray-800">
            Passionnés, Rêveurs, Utopistes, Partageurs, Impliqués, Sérieux, Engagés, Polyglottes et toujours partants
            pour l'aventure. Des Français, des Belges, des Espagnols, deux Américaines, quatre Brésiliens, quatre
            Italiennes, trois Allemands, trois Anglais, deux Mexicaines, une Chilienne, une Argentine, deux Indiens, une
            Colombienne, une Hollandaise, une Japonaise, un Indonésien. Superprof, c'est près de 100 collaborateurs à
            l'Ambassade du Partage de Connaissances à Paris pour vous aider à transmettre vos passions dans 28 pays et
            14 langues.
        </p>
    </div>

    <div class="w-full overflow-hidden" style="height: 543px">
        <img
            class="w-full"
            src="https://fotomelia.com/wp-content/uploads/edd/2015/09/fotomelia-site-de-photos-et-images-gratuites-libres-de-droits7-1560x1033.jpg"
            {{--            src="{{ asset('assets/images/groupe-essengo.jpeg') }}"--}}
            alt="">
    </div>

    <div class="py-32 mx-auto max-w-3xl text-center text-gray-700">
        <h3 class="mb-7 text-2xl font-bold">Nos étudiant certifient la qualité de nos cours</h3>

        <div class="single-item w-3/4 h-56 mx-auto">
            <div class="shadow-lg bg-yellow-100 flex px-5 py-8 rounded-md h-full">
                <div class="text-center">
                    <img
                        class="rounded-full mx-auto h-12 w-12"
                        src="https://ui-avatars.com/api/?name=John+Doe">
                    <p class="font-bold text-2xl">Sabine</p>
                    <p class="font-bold text-yellow-600 text-lg">étudiant terminal</p>
                </div>
                <div class="flex-1 flex justify-center items-center ml-5">
                    <p class="font-semibold">Sabine est une enseignante à l'écoute de son élève, professionnelle et
                        efficace. chaque cours est un pur plaisir, une parenthèse de bien-être</p>
                </div>
            </div>
            <div class="shadow-lg bg-yellow-100 flex px-5 py-8 rounded-md h-full">
                <div class="text-center">
                    <img
                        class="rounded-full mx-auto h-12 w-12"
                        src="https://ui-avatars.com/api/?name=John+Doe">
                    <p class="font-bold text-2xl">Sabine</p>
                    <p class="font-bold text-yellow-600 text-lg">étudiant terminal</p>
                </div>
                <div class="flex-1 flex justify-center items-center ml-5">
                    <p class="font-semibold">Sabine est une enseignante à l'écoute de son élève, professionnelle et
                        efficace. chaque cours est un pur plaisir, une parenthèse de bien-être</p>
                </div>
            </div>
            <div class="shadow-lg bg-yellow-100 flex px-5 py-8 rounded-md h-full">
                <div class="text-center">
                    <img
                        class="rounded-full mx-auto h-12 w-12"
                        src="https://ui-avatars.com/api/?name=John+Doe">
                    <p class="font-bold text-2xl">Sabine</p>
                    <p class="font-bold text-yellow-600 text-lg">étudiant terminal</p>
                </div>
                <div class="flex-1 flex justify-center items-center ml-5">
                    <p class="font-semibold">Sabine est une enseignante à l'écoute de son élève, professionnelle et
                        efficace. chaque cours est un pur plaisir, une parenthèse de bien-être</p>
                </div>
            </div>
            <div class="shadow-lg bg-yellow-100 flex px-5 py-8 rounded-md h-full">
                <div class="text-center">
                    <img
                        class="rounded-full mx-auto h-12 w-12"
                        src="https://ui-avatars.com/api/?name=John+Doe">
                    <p class="font-bold text-2xl">Sabine</p>
                    <p class="font-bold text-yellow-600 text-lg">étudiant terminal</p>
                </div>
                <div class="flex-1 flex justify-center items-center ml-5">
                    <p class="font-semibold">Sabine est une enseignante à l'écoute de son élève, professionnelle et
                        efficace. chaque cours est un pur plaisir, une parenthèse de bien-être</p>
                </div>
            </div>
            <div class="shadow-lg bg-yellow-100 flex px-5 py-8 rounded-md h-full">
                <div class="text-center">
                    <img
                        class="rounded-full mx-auto h-12 w-12"
                        src="https://ui-avatars.com/api/?name=John+Doe">
                    <p class="font-bold text-2xl">Sabine</p>
                    <p class="font-bold text-yellow-600 text-lg">étudiant terminal</p>
                </div>
                <div class="flex-1 flex justify-center items-center ml-5">
                    <p class="font-semibold">Sabine est une enseignante à l'écoute de son élève, professionnelle et
                        efficace. chaque cours est un pur plaisir, une parenthèse de bien-être</p>
                </div>
            </div>
            <div class="shadow-lg bg-yellow-100 flex px-5 py-8 rounded-md h-full">
                <div class="text-center">
                    <img
                        class="rounded-full mx-auto h-12 w-12"
                        src="https://ui-avatars.com/api/?name=John+Doe">
                    <p class="font-bold text-2xl">Sabine</p>
                    <p class="font-bold text-yellow-600 text-lg">étudiant terminal</p>
                </div>
                <div class="flex-1 flex justify-center items-center ml-5">
                    <p class="font-semibold">Sabine est une enseignante à l'écoute de son élève, professionnelle et
                        efficace. chaque cours est un pur plaisir, une parenthèse de bien-être</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-4xl py-16">
        <h3 class="mb-7 text-2xl font-bold text-center">L'histoire de bgrfacile</h3>
        <div class="relative w-1/2 mx-auto">
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

            <h3 class="mb-7 text-2xl font-bold">Ils travaillent sur la plateforme</h3>
            <div class="flex flex-wrap justify-center mx-auto">

                <div class="w-full sm:w-1/2 md:w-1/3 p-2 m-2">
                    <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
                        <div class="mb-3">
                            <img
                                class="w-auto mx-auto rounded-full"
                                src="https://i.pravatar.cc/150?img=31"
                                alt=""
                            />
                        </div>
                        <h2 class="text-xl font-medium text-gray-700">yannick</h2>
                        <span class="text-blue-500 block mb-5">Front End Developer</span>
                        <p class="block mb-5">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s
                        </p>

                        <a
                            href="#"
                            class="px-4 py-2 bg-blue-500 text-white rounded-full">
                            facebook
                        </a
                        >
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-full sm:w-1/2 md:w-1/3 p-2 m-2">
                    <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
                        <div class="mb-3">
                            <img
                                class="w-auto mx-auto rounded-full"
                                src="https://i.pravatar.cc/150?img=31"
                                alt=""
                            />
                        </div>
                        <h2 class="text-xl font-medium text-gray-700">Saraswati Cahyati</h2>
                        <span class="text-blue-500 block mb-5">Back End Developer</span>

                        <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-full"
                        >Hire</a
                        >
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-full sm:w-1/2 md:w-1/3 p-2 m-2">
                    <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
                        <div class="mb-3">
                            <img
                                class="w-auto mx-auto rounded-full"
                                src="https://i.pravatar.cc/150?img=18"
                                alt=""
                            />
                        </div>
                        <h2 class="text-xl font-medium text-gray-700">Wayan Alex</h2>
                        <span class="text-blue-500 block mb-5">Data Scientist</span>

                        <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-full"
                        >Hire</a
                        >
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="w-full sm:w-1/2 md:w-1/3 p-2 m-2">
                    <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
                        <div class="mb-3">
                            <img
                                class="w-auto mx-auto rounded-full"
                                src="https://i.pravatar.cc/150?img=28"
                                alt=""
                            />
                        </div>
                        <h2 class="text-xl font-medium text-gray-700">Ketut Julia</h2>
                        <span class="text-blue-500 block mb-5">Project Manager</span>

                        <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-full"
                        >Hire</a
                        >
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="w-full sm:w-1/2 md:w-1/3 p-2 m-2">
                    <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
                        <div class="mb-3">
                            <img
                                class="w-auto mx-auto rounded-full"
                                src="https://i.pravatar.cc/150?img=28"
                                alt=""
                            />
                        </div>
                        <h2 class="text-xl font-medium text-gray-700">Ketut Julia</h2>
                        <span class="text-blue-500 block mb-5">Project Manager</span>

                        <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-full"
                        >Hire</a
                        >
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

