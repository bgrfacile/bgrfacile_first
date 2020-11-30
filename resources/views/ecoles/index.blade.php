@extends('layouts.base')

@section('baniere')
@endsection

@section('content')
    {{--presentation--}}
    <section>
        <div class="container w-full md:w-3/4 mx-auto px-4 py-8 text-center">
            <h1 class="text-5xl font-bold">école virtuelle</h1>
            <p class="mt-2 text-gray-600 text-xl mb-8">
                Un espace virtuel où vous retrouverez vos écoles en un clic.
            </p>
            <p class="flex justify-center items-center flex-wrap mb-4">
                <a
                    href="{{ route('schools.create') }}"
                    class="py-2 px-4 bg-blue-600 text-sm text-white rounded-md shadow-lg hover:underline">
                    Enregistrer son école
                </a>
                <a
                    href="#recherche_ecole"
                    class="sm:ml-2 mt-2 sm:mt-0 py-2 px-4 bg-gray-200 text-sm text-blue-600 rounded-md hover:underline">
                    Voir une école
                </a>
            </p>
        </div>
    </section>

    {{-- etudiant--}}
    <section class="bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 pt-12">
        <div class="flex flex-col md:flex-row lg:-mx-8">
            <div class="w-full lg:w-1/2 lg:px-8">
                {{--                <h6 class="text-sm uppercase font-semibold tracking-widest">Dans une école </h6>--}}
                <h2 class="flex items-center text-3xl leading-tight font-bold mt-4">
                    <svg class="h-4 w-4 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 444.819 444.819">
                        <g>
                            <path d="M352.025,196.712L165.884,10.848C159.029,3.615,150.469,0,140.187,0c-10.282,0-18.842,3.619-25.697,10.848L92.792,32.264
		c-7.044,7.043-10.566,15.604-10.566,25.692c0,9.897,3.521,18.56,10.566,25.981l138.753,138.473L92.786,361.168
		c-7.042,7.043-10.564,15.604-10.564,25.693c0,9.896,3.521,18.562,10.564,25.98l21.7,21.413
		c7.043,7.043,15.612,10.564,25.697,10.564c10.089,0,18.656-3.521,25.697-10.564l186.145-185.864
		c7.046-7.423,10.571-16.084,10.571-25.981C362.597,212.321,359.071,203.755,352.025,196.712z"/>
                        </g>
                    </svg>
                    <span>étudiants / élèves</span>
                </h2>
                <p class="mt-2 text-gray-600">
                    Sur la plateforme est présent des étudiants ou élèves de divers horizons sans distinctions. Dans le
                    cadre
                    d'une école virtuelle, seuls les étudiants possédant les accès nécessaires (code individuel) peuvent
                    y accéder.
                </p>
            </div>
            <div class="w-full lg:w-1/2 lg:px-8">
                <div class="w-full h-72 rounded-lg">
                    <img
                        src="{{ asset('assets/images/bgr dessin2.2.png') }}"
                        alt="..."
                        class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    {{--prof --}}
    <section class="bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-2">
        <div class="flex flex-col-reverse md:flex-row lg:-mx-8">
            <div class="w-full lg:w-1/2 lg:px-8">
                <div class="w-full h-72 rounded-lg">
                    <img
                        src="{{ asset('assets/images/formateur_ecole.png') }}"
                        alt="..."
                        class="w-full h-full object-cover">
                </div>
            </div>
            <div class="w-full lg:w-1/2 lg:px-8">
                <h2 class="flex items-center text-3xl leading-tight font-bold mt-4">
                    <svg class="h-4 w-4 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 444.819 444.819">
                        <g>
                            <path d="M352.025,196.712L165.884,10.848C159.029,3.615,150.469,0,140.187,0c-10.282,0-18.842,3.619-25.697,10.848L92.792,32.264
		c-7.044,7.043-10.566,15.604-10.566,25.692c0,9.897,3.521,18.56,10.566,25.981l138.753,138.473L92.786,361.168
		c-7.042,7.043-10.564,15.604-10.564,25.693c0,9.896,3.521,18.562,10.564,25.98l21.7,21.413
		c7.043,7.043,15.612,10.564,25.697,10.564c10.089,0,18.656-3.521,25.697-10.564l186.145-185.864
		c7.046-7.423,10.571-16.084,10.571-25.981C362.597,212.321,359.071,203.755,352.025,196.712z"/>
                        </g>
                    </svg>
                    <span>formateurs</span>
                </h2>
                <p class="mt-2 text-gray-600">
                    Sur la plateforme, chaque formateur inscrit est libre et indépendant de partager ses compétences
                    sans aucune attache. Dans le cadre d'une école virtuelle, un formateur a la possibilité
                    d'adhérer à une ou plusieurs écoles. Après adhésion, il a la possibilité
                    d'enseigner une classe.
                </p>
            </div>
        </div>
    </section>

    {{--    lier les etapes de la creation d'une ecole aux fonctionnalites lier a une ecole--}}
    <section id="creeSonEcole" class="bg-gray-100 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12">
        <div class="flex flex-col md:flex-row lg:-mx-8">
            <div class="w-full lg:w-1/2 lg:px-8">
                <h6 class="text-sm uppercase font-semibold tracking-widest"></h6>
                <h2 class="flex items-center  text-3xl leading-tight font-bold mt-4 mb-4">
                    <svg class="h-4 w-4 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 444.819 444.819">
                        <g>
                            <path d="M352.025,196.712L165.884,10.848C159.029,3.615,150.469,0,140.187,0c-10.282,0-18.842,3.619-25.697,10.848L92.792,32.264
		c-7.044,7.043-10.566,15.604-10.566,25.692c0,9.897,3.521,18.56,10.566,25.981l138.753,138.473L92.786,361.168
		c-7.042,7.043-10.564,15.604-10.564,25.693c0,9.896,3.521,18.562,10.564,25.98l21.7,21.413
		c7.043,7.043,15.612,10.564,25.697,10.564c10.089,0,18.656-3.521,25.697-10.564l186.145-185.864
		c7.046-7.423,10.571-16.084,10.571-25.981C362.597,212.321,359.071,203.755,352.025,196.712z"/>
                        </g>
                    </svg>
                    <span>Comment enregistrer son école virtuelle</span>
                </h2>

                <div class="w-full h-72 rounded-lg">
                    <img
                        src="{{ asset('assets/images/bgr_dessin1.png') }}"
                        alt="..."
                        class="w-full h-full object-cover">
                </div>
            </div>

            <div class="w-full lg:w-1/2 lg:px-8">
                <div class="flex">
                    <div>
                        <div
                            class="flex justify-center items-center text-white font-bold w-16 h-16 bg-blue-600 rounded-full">
                            1
                        </div>
                    </div>
                    <div class="ml-8">
                        <h4 class="text-xl font-bold">Remplir le formulaire</h4>
                        <p class="mt-2 leading-relaxed">
                            Renseigner les informations exactes sur votre structure est une étape essentielle
                            lors de la création de son espace virtuel.
                        </p>
                    </div>
                </div>

                <div class="flex mt-8">
                    <div>
                        <div
                            class="flex justify-center items-center text-white font-bold w-16 h-16 bg-blue-600 rounded-full">
                            2
                        </div>
                    </div>
                    <div class="ml-8">
                        <h4 class="text-xl font-bold">Validation de la demande</h4>
                        <p class="mt-2 leading-relaxed">
                            Après le remplissage du formulaire, une demande est envoyée à <strong>l'équipe
                                bgrfacile</strong> afin de traiter et valider la création de l'espace virtuel.
                        </p>
                    </div>
                </div>

                <div class="flex mt-8">
                    <div>
                        <div
                            class="flex justify-center items-center text-white font-bold w-16 h-16 bg-blue-600 rounded-full">
                            3
                        </div>
                    </div>
                    <div class="ml-8">
                        <h4 class="text-xl font-bold">Entrevue</h4>
                        <p class="mt-2 leading-relaxed">
                            Une fois la demande validée, un <strong>mail</strong> est envoyé à l'établissement
                            pour une
                            entrevue avec <strong>l'équipe bgrfacile</strong> et une formation sur l'utilisation de
                            l'espace virtuel.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-12">
            <h2 class="flex items-center text-3xl leading-tight font-bold text-gray-800">
                <svg class="h-4 w-4 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     viewBox="0 0 444.819 444.819">
                    <g>
                        <path d="M352.025,196.712L165.884,10.848C159.029,3.615,150.469,0,140.187,0c-10.282,0-18.842,3.619-25.697,10.848L92.792,32.264
		c-7.044,7.043-10.566,15.604-10.566,25.692c0,9.897,3.521,18.56,10.566,25.981l138.753,138.473L92.786,361.168
		c-7.042,7.043-10.564,15.604-10.564,25.693c0,9.896,3.521,18.562,10.564,25.98l21.7,21.413
		c7.043,7.043,15.612,10.564,25.697,10.564c10.089,0,18.656-3.521,25.697-10.564l186.145-185.864
		c7.046-7.423,10.571-16.084,10.571-25.981C362.597,212.321,359.071,203.755,352.025,196.712z"/>
                    </g>
                </svg>
                <span>Les fonctionnalités</span>
            </h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

            <div class="block bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <div class="flex justify-between items-center">
                    <h4 class="text-xl font-bold">Gestion des emplois du temps</h4>
                    <img
                        src="{{ asset('assets/svg/pencil.svg') }}">
                </div>

                <p class="mt-4">
                    Vous pouvez accéder à votre emploi du temps en ligne selon votre établissement. Que vous soyez
                    élèves, étudiants ou formateurs, vous aurez toujours votre emploi du temps à porter de main et serez
                    toujours à jour en cas de changement.
                </p>
            </div>

            <div class="block bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <div class="flex justify-between items-center">
                    <h4 class="text-xl font-bold">Gestion des étudiants</h4>
                    <img src="https://cdn.perl.org/perlweb/images/icons/ic_highlight_docs.svg">
                </div>
                <p class="mt-4">
                    Une liste des élèves/ étudiants est répertoriée selon les sexes, les niveaux et d'autres options.
                    Cette
                    fonctionnalité n’est accessible qu’aux personnes ayant le code d’accès de l’établissement.
                </p>
            </div>

            <div class="block bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <div class="flex justify-between items-center">
                    <h4 class="text-xl font-bold">Gestion des formateurs</h4>
                    <img src="https://cdn.perl.org/perlweb/images/icons/ic_highlight_user.svg">
                </div>
                <p class="mt-4">
                    Une liste des formateurs est répertoriée selon les matières qu’ils dispensent. Cette fonctionnalité
                    n’est accessible qu’aux personnes ayant le code d’accès de l’établissement.
                </p>
            </div>

            <div class="block bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <div class="flex justify-between items-center">
                    <h4 class="text-xl font-bold">Accès aux relevés de notes</h4>
                    <img src="https://cdn.perl.org/perlweb/images/icons/ic_highlight_user.svg">
                </div>
                <p class="mt-4">
                    Vous pouvez voir facilement vos notes de devoir ou de session. Chaque élèves ou étudiants ne peuvent
                    que voir leurs propres notes, seuls les formateurs et autres membres de l’administration peuvent
                    avoir libre accès aux notes de tous leurs élèves ou étudiants.
                </p>
            </div>

            <div class="block bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <div class="flex justify-between items-center">
                    <h4 class="text-xl font-bold">Vue sur les notes</h4>
                    <img src="https://cdn.perl.org/perlweb/images/icons/ic_highlight_user.svg">
                </div>
                <p class="mt-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s
                </p>
            </div>
        </div>
    </section>

    {{-- offre bgrfacile price--}}
    <section class="bg-blue-600 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 pt-20 pb-40">
        <div class="text-center">
            <h2 class="text-3xl leading-tight font-bold text-white">differentes prix pour les écoles</h2>
        </div>

        <div class="flex flex-col md:flex-row items-start justify-between mt-12">
            <div class="w-full bg-white shadow-lg rounded-lg px-4 py-6 lg:p-8 md:mx-2 lg:mx-4">
                <div>
                    <h4 class="text-2xl text-blue-600 font-bold leading-tight mb-2">standard</h4>
                    <div class="mb-2 flex items-baseline font-bold">
                        <span class="text-gray-500 text-xl">Frcfa</span>
                        <span class="text-gray-500 text-3xl">100000</span>
                        <span class="text-gray-500 text-base">/annéé scolaire</span>
                    </div>
                    <p class="pb-5 border-b">
                        Le prix évolue selon la taille de votre établissement
                    </p>
                    <div class="font-semibold mb-2">Vous pouvez:</div>
                    <ul>
                        <li class="flex items-center">
                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>
                            </svg>
                            <span>Accès aux cours</span>
                        </li>
                        <li class="flex items-center">
                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>
                            </svg>
                            <span>Accès aux exercices</span>
                        </li>
                        <li class="flex items-center">
                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>
                            </svg>
                            <span>Accès aux corrige</span>
                        </li>
                        <li class="flex items-center">
                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>
                            </svg>
                            <span>Accès aux astuces</span>
                        </li>
                    </ul>
                </div>
                <div class=" border p-3 mt-2 rounded-lg">
                    <a
                        href="#"
                        class="block text-center bg-blue-600 p-2 text-white font-medium rounded hover:bg-blue-800">
                        star
                    </a>
                </div>
            </div>

            <div class="w-full bg-white shadow-lg rounded-lg px-4 py-6 lg:p-8 md:mx-2 lg:mx-4 mt-4 md:mt-0">
                <div>
                    <h4 class="text-2xl text-blue-600 font-bold leading-tight mb-2">Complet</h4>
                    <div class="mb-2 flex items-baseline font-bold">
                        <span class="text-gray-500 text-xl">Frcfa</span>
                        <span class="text-gray-500 text-3xl">150000</span>
                        <span class="text-gray-500 text-base">/année scolaire</span>
                    </div>
                    <p class="pb-5 border-b">
                        Le prix évolue selon la taille de votre établissement
                    </p>
                    <div class="font-semibold mb-2">vous pouvez:</div>
                    <ul>
                        <li class="flex items-center">
                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>
                            </svg>
                            <span>Accès aux cours</span>
                        </li>
                        <li class="flex items-center">
                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>
                            </svg>
                            <span>Accès aux exercices</span>
                        </li>
                        <li class="flex items-center">
                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>
                            </svg>
                            <span>Accès aux corrige</span>
                        </li>
                        <li class="flex items-center">
                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>
                            </svg>
                            <span>Accès aux astuces</span>
                        </li>
                    </ul>
                </div>
                <div
                    class=" border p-3 mt-2 rounded-lg">
                    <a
                        href="#"
                        class="block text-center bg-blue-600 p-2 text-white font-medium rounded hover:bg-blue-800">
                        star
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 text-center md:text-left -mt-32">
        <div
            class="flex flex-col md:flex-row items-center justify-between bg-blue-300 px-12 py-10 rounded-lg shadow-lg">
            <div class="w-full md:w-2/3">
                <h2 class="text-3xl leading-tight font-bold">Soutenez-nous! faites un don</h2>
                <p class="mt-2 md:max-w-md">
                    Si vous souhaitez soutenir le site, autrement qu'en souscrivant à un forfait, vous pouvez
                    aussi faire un don.
                </p>
            </div>

            <div class="w-full md:w-1/3 md:text-right mt-6 md:mt-0">
                <a href="#" class="inline-block px-6 py-4 bg-blue-600 text-white rounded-lg">je veux faire un don</a>
            </div>
        </div>
    </section>

    {{--acceder aux ecole--}}
    <section id="recherche_ecole" class="bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12">
        <div class="flex flex-col md:flex-row lg:-mx-8">
            <div class="w-full lg:w-1/2 lg:px-8">
                <div class="w-full h-72 rounded-lg">
                    <img
                        class="w-full h-full"
                        src="{{ asset('assets/svg/search.svg') }}"
                        alt="">
                </div>

                <p class="italic text-sm mt-2 text-right"></p>
            </div>
            <div class="w-full lg:w-1/2 lg:px-8">
                <h6 class="text-sm uppercase font-semibold tracking-widest"></h6>
                <h2 class="text-3xl leading-tight font-bold mt-4">Rechercher une école</h2>
                <p class="my-3 leading-relaxed">
                    Nous vous offrons la possibilité de rechercher une école en particulier et de lire les informations
                    concernant celle-ci.
                </p>
                <div class="inline-flex border rounded w-full px-2 lg:px-6 h-12 bg-transparent">
                    <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">
                        <div class="flex">
                                    <span
                                        class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                                        <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z"
                                                stroke="#455A64" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                        </div>
                        <input type="text"
                               class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs lg:text-xs lg:text-base text-gray-500 font-thin"
                               placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <!-- This is an example component -->
            <link href="https://unpkg.com/pattern.css" rel="stylesheet">

            {{--            <div>--}}
            {{--                <section class="text-gray-200 bg-gray-900">--}}
            {{--                    <div class="max-w-6xl mx-auto px-5 py-24 ">--}}
            {{--                        <div class="text-center mb-20">--}}
            {{--                            <h1 class=" title-font  mb-4 text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl">--}}
            {{--                                Retrouver votre école--}}
            {{--                            </h1>--}}

            {{--                            <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">--}}
            {{--                                <div class="flex">--}}
            {{--                                    <span--}}
            {{--                                        class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">--}}
            {{--                                        <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18"--}}
            {{--                                             fill="none" xmlns="http://www.w3.org/2000/svg">--}}
            {{--                                            <path--}}
            {{--                                                d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z"--}}
            {{--                                                stroke="#455A64" stroke-linecap="round" stroke-linejoin="round"/>--}}
            {{--                                            <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64"--}}
            {{--                                                  stroke-linecap="round" stroke-linejoin="round"/>--}}
            {{--                                        </svg>--}}
            {{--                                    </span>--}}
            {{--                                </div>--}}
            {{--                                <input type="text"--}}
            {{--                                       class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs lg:text-xs lg:text-base text-gray-500 font-thin"--}}
            {{--                                       placeholder="Search">--}}
            {{--                            </div>--}}
            {{--                            <div class="flex mt-6 justify-center">--}}
            {{--                                <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 ">--}}
            {{--                            <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">--}}
            {{--                                <div class="pattern-dots-md gray-light">--}}
            {{--                                    <div class="rounded bg-gray-800 p-4 transform translate-x-6 -translate-y-6  "  >--}}
            {{--                                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-5 flex-shrink-0 p-2">--}}
            {{--                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>                </div>--}}
            {{--                                        <div class="flex-grow ">--}}
            {{--                                            <h2 class=" text-xl title-font font-medium mb-3">Webdesign</h2>--}}
            {{--                                            <p class="leading-relaxed text-sm text-justify">Donner du goût 😍 de la couleur aux applications, je le fais afin de rendre vos sites attrayants 🎨. Avant de devenir webdesigner, depuis tout petit j'étais déjà familier à la couleur et du dessin.</p>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">--}}
            {{--                                <div class="pattern-dots-md gray-light">--}}
            {{--                                    <div class="rounded bg-gray-800 p-4 transform translate-x-6 -translate-y-6 ">--}}
            {{--                                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-5 flex-shrink-0">--}}
            {{--                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="flex-grow">--}}
            {{--                                            <h2 class=" text-xl title-font font-medium mb-3">Intégration web</h2>--}}
            {{--                                            <p class="leading-relaxed text-sm text-justify">--}}
            {{--                                                Donner du goût 😍 de la couleur aux applications, je le fais afin de rendre vos sites attrayants 🎨. Avant de devenir webdesigner, depuis tout petit j'étais déjà familier à la couleur et du dessin.--}}
            {{--                                            </p>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">--}}
            {{--                                <div class="pattern-dots-md gray-light">--}}
            {{--                                    <div class="rounded bg-gray-800 p-4 transform translate-x-6 -translate-y-6 ">--}}
            {{--                                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-5 flex-shrink-0">--}}
            {{--                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="flex-grow">--}}
            {{--                                            <h2 class=" text-xl title-font font-medium mb-3">Intégration web</h2>--}}
            {{--                                            <p class="leading-relaxed text-sm text-justify">--}}
            {{--                                                Donner du goût 😍 de la couleur aux applications, je le fais afin de rendre vos sites attrayants 🎨. Avant de devenir webdesigner, depuis tout petit j'étais déjà familier à la couleur et du dessin.--}}
            {{--                                            </p>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">--}}
            {{--                                <div class="pattern-dots-md gray-light">--}}
            {{--                                    <div class="rounded bg-gray-800 p-4 transform translate-x-6 -translate-y-6 ">--}}
            {{--                                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 mb-5 flex-shrink-0">--}}
            {{--                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="flex-grow">--}}
            {{--                                            <h2 class=" text-xl title-font font-medium mb-3">Developpement Back-end</h2>--}}
            {{--                                            <p class="leading-relaxed text-sm text-justify">--}}
            {{--                                                Grâce à Php et ces frameworks (Larave, Symfoni, Slim), je peux vous réaliser un site dynamique c'est-à-dire qui interagie avec votre base de données 💪. Nous pouvons essayer.--}}
            {{--                                            </p>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                </section>--}}
            {{--            </div>--}}
        </div>
    </section>

@endsection
