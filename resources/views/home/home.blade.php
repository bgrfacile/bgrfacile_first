@extends('layouts.base')
@section('meta.description') bgrfacile un site de cours congolais,il a pour but de promouvoir l’éducation et l’apprentissage dans le milieu scolaire @endsection
@section('title')bgrfacile @endsection

@section('baniere')
    <div class="container w-full md:w-3/4 mx-auto mb-2 md:mb-12 px-4">
        <div class="flex flex-wrap md:flex-no-wrap justify-center items-center py-10">
            <div class="w-full px-3">
                <strong
                    class="uppercase text-xl text-gray-600">
                    bgrfacile
                </strong>
                <h1
                    class="mb-2 text-3xl font-bold text-gray-800">
                    Pour chaque niveau, chaque cycle. Un apprentissage de marque et un pont vers la connaissance.
                </h1>
                {{--                <p class="mb-2 text-gray-700">--}}
                {{--                    Découvrez une nouvelle façon d’apprendre,--}}
                {{--                    d’enseigner et partager vos connaissances.--}}
                {{--                </p>--}}
                <p class="flex flex-wrap">
                    <a
                        href="{{ route('contenu.cours') }}"
                        class="mt-2 sm:mt-0 py-2 px-4 bg-blue-600 text-sm text-white rounded-md shadow-lg hover:underline">
                        Lisez nos cours
                    </a>
                    <a
                        href="{{ route('astuces.index') }}"
                        class="sm:ml-2 mt-2 sm:mt-0 py-2 px-4 bg-gray-200 text-sm text-blue-600 rounded-md hover:underline">
                        {{--                        Accéder aux écoles--}}
                        Accéder aux astuces
                    </a>
                </p>
            </div>
            <div class="w-full px-3">
                <div class="w-full h-72 rounded-lg">
                    <img
                        src="{{ asset('assets/images/bgr dessin3.3.png') }}"
                        alt="garçon qui étudie"
                        title="#MyArt@Lb14"
                        class="w-full h-full object-cover">
                </div>

            </div>
        </div>
    </div>
@endsection


@section('content')
    <section class="container w-full md:w-3/4 mx-auto mb-12 px-4">
        <h3
            class="uppercase text-xl  md:text-2xl  font-bold mb-6 text-center text-gray-800">
            NOUS AVONS TOUT CE DONT VOUS AVEZ BESOIN
        </h3>
        <div class="grid grid-cols-2 divide-x divide-gray-400 mx-auto max-w-6xl">
            <div class="{{--px-10 mx-5--}} text-center flex flex-col">
{{--                <strong class="text-xl md:text-4xl count">12828959</strong>--}}
                <strong class="text-xl md:text-4xl count">{{ $countCourse }}</strong>
                <p class="font-bold text-base md:text-xl text-gray-800">Cours</p>
            </div>

            {{--            <div class="--}}{{--px-10 mx-5--}}{{-- text-center flex flex-col">--}}
            {{--                <strong class="text-xl md:text-4xl count">182959</strong>--}}
            {{--                <p class="font-bold text-base md:text-xl text-gray-800">Exercises et solutions</p>--}}
            {{--            </div>--}}

            <div class="{{--px-10 mx-5--}} text-center flex flex-col">
{{--                <strong class="text-xl md:text-4xl count">12895</strong>--}}
                <strong class="text-xl md:text-4xl count">{{ $pists }}</strong>
                <p class="font-bold text-base md:text-xl text-gray-800">Astuces</p>
            </div>
        </div>
    </section>

    {{--    Etudiants--}}
    <section class="container w-full md:w-3/4 mx-auto mb-2 px-4">
        <h2
            class="flex items-center text-2xl font-bold mb-4 text-gray-800">
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
            <span>Élèves ou Étudiants</span>
        </h2>
        <p class="text-gray-600 mb-10 text-justify">


            Après création de
            <a href="{{ url('/login') }}"
               class="font-bold text-bold text-blue-500 hover:underline">
                votre compte
            </a>
            , vous avez un statut élève ou étudiant (<strong>statut par défaut</strong>). Ce statut est
            réservé aux apprenants, il est donc nécessaire de remplir toutes les informations demandées afin qu'on
            puisse mettre à votre disposition ce dont vous avez besoin pour votre apprentissage.
            Chaque apprenant a la possibilité d'accéder aux contenus des cours, des exercices et des solutions <strong>(accès
                payant)</strong> et des astuces <strong>(accès gratuit)</strong>.

        </p>
        <div class="flex justify-center mb-10 ext-gray-600">
            <div class="rounded-full h-16 w-16 p-2 flex items-center justify-center bg-gray-50">
                <img
                    class="w-full"
                    src="{{ asset('assets/images/course.svg') }}">
            </div>
            <div class="w-full flex-1 pl-5">
                <p class="mb-2 text-justify">
                    <strong>Cours </strong><br>
                    Ce sont des documents rédigés par un <strong>formateur agréé</strong> mis à la dispositions des
                    apprenants pour
                    parfaire leurs connaissances. Les cours sont structurés de la manière suivante
                    <em class="underline">
                        cours
                        < matières
                        < niveaux
                        < cycle scolaire.
                    </em>
                </p>
                <a
                    class=" py-2 px-4 bg-gray-50 text-sm text-blue-600 rounded-md hover:underline"
                    href="{{ route('contenu.cours') }}">Accéder</a>
            </div>

        </div>

        <div class="flex justify-center mb-10 ext-gray-600">
            <div class="rounded-full h-16 w-16 p-2 flex items-center justify-center bg-gray-50">
                <img
                    class="w-full"
                    src="{{ asset('assets/images/exercise.svg') }}">
            </div>
            <div class="w-full flex-1 pl-5">
                <p class="mb-2 text-justify">
                    <strong>Exercices / Corrigés </strong>
                    <br>
                    Ce sont des entraînements qui aident à mieux comprendre son cours. Les exercices sont pour la
                    plupart du temps lié à des cours avec leurs corrigés.Tout comme pour les
                    cours, les exercices et corrigés sont répartis selon l'ordre
                    <em class="underline">
                        exercices ou corrigés
                        < matières
                        < niveaux
                        < cycle scolaire.
                    </em>
                </p>
                {{--                <a--}}
                {{--                    class=" py-2 px-4 bg-gray-50 text-sm text-blue-600 rounded-md hover:underline"--}}
                {{--                    href="{{ route('exercices.index') }}">Accéder</a>--}}
            </div>
        </div>
        <div class="flex justify-center mb-10 ext-gray-600">
            <div class="rounded-full h-16 w-16 p-2 flex items-center justify-center bg-gray-50">
                <img
                    class="w-full"
                    src="{{ asset('assets/images/solution.svg') }}">
            </div>
            <div class="w-full flex-1 pl-5">
                <p class="mb-2 text-justify">
                    <strong>Astuces</strong>
                    <br>
                    cette section est réservée pour un ensemble d'éléments très utile pour l'apprenant mais qui ne
                    pourrait pas se retrouver dans les sections précédentes. Par exemple <strong>des polycopies</strong>
                    très
                    utiles dans certaines formations ou des cours audio (podcast).
                </p>
                <a
                    class="py-2 px-4 bg-gray-50 text-sm text-blue-600 rounded-md hover:underline"
                    href="{{ route('astuces.index') }}">Accéder</a>
            </div>
        </div>
    </section>
    {{--    Professeurs--}}
    <section class="container w-full md:w-3/4 mx-auto mb-2 px-4">
        <h2
            class="flex items-center text-2xl font-bold mb-4 text-gray-800">
            <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                 viewBox="0 0 444.819 444.819">
                <g>
                    <path d="M352.025,196.712L165.884,10.848C159.029,3.615,150.469,0,140.187,0c-10.282,0-18.842,3.619-25.697,10.848L92.792,32.264
		c-7.044,7.043-10.566,15.604-10.566,25.692c0,9.897,3.521,18.56,10.566,25.981l138.753,138.473L92.786,361.168
		c-7.042,7.043-10.564,15.604-10.564,25.693c0,9.896,3.521,18.562,10.564,25.98l21.7,21.413
		c7.043,7.043,15.612,10.564,25.697,10.564c10.089,0,18.656-3.521,25.697-10.564l186.145-185.864
		c7.046-7.423,10.571-16.084,10.571-25.981C362.597,212.321,359.071,203.755,352.025,196.712z"/>
                </g>
            </svg>
            <span>Formateurs</span>
        </h2>
        <p class="text-gray-600 mb-5 text-justify">
            Outre le statut par défaut (élèves ou étudiants), il existe un <strong>statut formateur</strong> dans lequel
            les utilisateurs
            peuvent créer des contenus de <em>cours, d’exercices et des corrigés</em>. Ces utilisateurs ont la
            possibilité de
            percevoir une <strong>rémunération pour chaque contenu fourni à la plateforme</strong> ; il est donc
            obligatoire de <strong>confirmer
                votre profession de formateur avant de mettre des contenus sur ce site</strong>.
        </p>
    </section>
    {{--    écoles ou instituts --}}
    <section class="container w-full md:w-3/4 mx-auto mb-2 px-4">
        <div class="flex flex-wrap md:flex-no-wrap justify-center items-center py-4">
            <div class="w-full px-3">
                <h2
                    class="flex items-center mb-2 text-3xl font-bold text-gray-800">
                    <svg class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 444.819 444.819">
                        <g>
                            <path d="M352.025,196.712L165.884,10.848C159.029,3.615,150.469,0,140.187,0c-10.282,0-18.842,3.619-25.697,10.848L92.792,32.264
		c-7.044,7.043-10.566,15.604-10.566,25.692c0,9.897,3.521,18.56,10.566,25.981l138.753,138.473L92.786,361.168
		c-7.042,7.043-10.564,15.604-10.564,25.693c0,9.896,3.521,18.562,10.564,25.98l21.7,21.413
		c7.043,7.043,15.612,10.564,25.697,10.564c10.089,0,18.656-3.521,25.697-10.564l186.145-185.864
		c7.046-7.423,10.571-16.084,10.571-25.981C362.597,212.321,359.071,203.755,352.025,196.712z"/>
                        </g>
                    </svg>
                    <span>École virtuelle</span>
                </h2>
                <p class="text-gray-600 mb-5 text-justify">
                    Chaque établissement a la possibilité de s'enregistrer sur la plateforme. Ceci facilitera
                    l’interaction entre les élèves ou étudiants et les formateurs.
                    L’apprenant pourra continuer à suivre ses cours et recevoir ses exercices à distance via notre
                    plateforme. L’établissement pourra également mettre en avant ses bienfondés afin de permettre à
                    chaque personne voulant s’y inscrire d’avoir des informations telles que : les niveaux proposés,
                    les filières et leurs débouchées, les emplois du temps et bien d’autres.
                </p>
                <p class="flex mb-4">
                    <a
                        href="{{ url('/ecoles') }}"
                        class="py-2 px-4 bg-blue-600 text-sm text-white rounded-md shadow-lg hover:underline">
                        En savoir plus >
                    </a>
                </p>
            </div>

            <div class="w-full px-3">
                <svg class="w-full" viewBox="0 0 438 274">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Exports" transform="translate(0.000000, -55.000000)">
                            <g id="step1-create" transform="translate(0.000000, 56.000000)">
                                <g id="Group-4" transform="translate(68.000000, 30.000000)">
                                    <g id="Group-2"
                                       transform="translate(300.850170, 204.318262) rotate(-25.000000) translate(-300.850170, -204.318262) translate(299.850170, 203.318262)"></g>
                                    <g id="books-right" transform="translate(250.000000, 189.000000)">
                                        <path d="M27.9747645,38.2200679 L73.3315331,38.2200679" id="Path-6"
                                              stroke="#E0EAEF" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path d="M7.78126357,43 L73.1380322,43" id="Path-6-Copy" stroke="#E0EAEF"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M57.9747645,47.6776695 L73.3315331,47.6776695" id="Path-6-Copy-2"
                                              stroke="#E0EAEF" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <polygon id="Rectangle-6" fill="#FF8F5C"
                                                 points="63 38 70 38 70 47 66.5401478 43 63 47"></polygon>
                                        <path
                                            d="M0,28 C0,24.1340068 3.13242211,21 6.99506467,21 L74,21 L74,35 L6.99506467,35 C3.13179713,35 0,31.8685323 0,28 L0,28 L0,28 Z"
                                            id="Rectangle-5-Copy" fill="#85DAD2"></path>
                                        <path d="M17.7812636,27 L73.1380322,27" id="Path-6-Copy-3" stroke="#5AC6BC"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M17.7812636,14 L69.8873507,14" id="Path-6-Copy-4" stroke="#5AC6BC"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M0,43 C0,38.0294373 4.03111307,34 8.99987127,34 L74,34 L74,52 L8.99987127,52 C4.02937962,52 0,47.9738272 0,43 L0,43 L0,43 Z"
                                            id="Rectangle-5" stroke="#404F54" stroke-width="2"
                                            stroke-linecap="round"></path>
                                        <path
                                            d="M0,27 C0,23.1340068 3.13242211,20 6.99506467,20 L74,20 L74,34 L6.99506467,34 C3.13179713,34 0,30.8685323 0,27 L0,27 L0,27 Z"
                                            id="Rectangle-5-Copy-3" stroke="#404F54" stroke-width="2"
                                            stroke-linecap="round"></path>
                                        <path
                                            d="M12.417739,14.8638533 C12.417739,12.0272378 14.7105656,9.7277066 17.5530922,9.7277066 L70,9.7277066 L70,20 L17.5530922,20 C14.7169149,20 12.417739,17.7023318 12.417739,14.8638533 L12.417739,14.8638533 L12.417739,14.8638533 Z"
                                            id="Rectangle-5-Copy-2" stroke="#404F54" stroke-width="2"
                                            stroke-linecap="round"></path>
                                        <path
                                            d="M21.2254924,5.2277066 C21.2254924,2.74242522 23.2329402,0.727706597 25.7194295,0.727706597 L66.582261,0.727706597 L66.582261,9.7277066 L25.7194295,9.7277066 C23.2374966,9.7277066 21.2254924,7.71462022 21.2254924,5.2277066 L21.2254924,5.2277066 L21.2254924,5.2277066 Z"
                                            id="Rectangle-5-Copy-2" stroke="#404F54" stroke-width="2"
                                            stroke-linecap="round"></path>
                                    </g>
                                    <g id="Group-3" transform="translate(75.000000, 34.000000)">
                                        <g id="hand" transform="translate(3.000000, 120.000000)">
                                            <path
                                                d="M9.65959048,66.5516558 L23.8703251,57.4311472 C23.8703251,57.4311472 39.2922254,55.2613153 35.3132752,74.4975324 L24.8646002,81.1406774 L9.65959048,66.5516558 Z"
                                                id="Path-5" fill="#E0EAEF"></path>
                                            <path
                                                d="M5.88276504,69.0307397 L23.8713994,57.0788863 L40.7917455,0.0333003548 L41.8243148,39.1946715 C41.8243148,39.1946715 42.3593478,61.7354204 39.2879726,69.0307397 C36.4305638,75.8178329 24.0379629,81.441909 24.0379629,81.441909"
                                                id="Path-4" stroke="#404F54" stroke-width="2"
                                                stroke-linecap="round"></path>
                                            <path
                                                d="M25,79.5 C25,72.5964406 19.4035594,67 12.5,67 C5.59644063,67 0,72.5964406 0,79.5 C0,86.4035594 25,86.4035594 25,79.5 Z"
                                                id="Oval-2" stroke="#404F54" stroke-width="2" stroke-linecap="round"
                                                fill="#F5F6F7"></path>
                                        </g>
                                        <g id="Group-10" transform="translate(39.000000, 0.000000)">
                                            <g id="Group-9" transform="translate(5.383466, 113.358770)">
                                                <rect id="Rectangle-12-Copy" stroke="#404F54" stroke-width="2"
                                                      stroke-linecap="round" fill="#F5F6F7" x="0.390455024"
                                                      y="0.530429818" width="25.4802701" height="81.2400906"
                                                      rx="3"></rect>
                                                <path
                                                    d="M68.14079,12.766571 C68.14079,8.34534691 71.6842714,4.25510484 76.0590299,3.63023789 L90.8351592,1.51969516 C94.6602555,0.973338999 97.7611088,3.66053588 97.7611088,7.53174382 L97.7611088,73.3765344 L71.1439497,73.3765344 C69.4853504,73.3765344 68.14079,72.0366839 68.14079,70.3841003 L68.14079,12.766571 Z"
                                                    id="Rectangle-12-Copy-3" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round" fill="#F5F6F7"></path>
                                                <rect id="Rectangle-12" fill="#F5F6F7" x="9.96679666" y="0.530429818"
                                                      width="74.5127169" height="93.612589" rx="3"></rect>
                                                <path
                                                    d="M9.96679666,87.4617275 L9.96679666,69.4891316 L54.2755693,69.4891316 C55.9355791,69.4891316 57.2812829,70.8399974 57.2812829,72.49734 L57.2812829,84.453519 C57.2812829,86.1149067 55.9354381,87.4617275 54.2755693,87.4617275 L9.96679666,87.4617275 Z"
                                                    id="Combined-Shape" fill="#DAE2E6"></path>
                                                <path
                                                    d="M21.3599853,1.23736936 L74.8120464,1.23736936 C74.8692255,1.23736936 74.9261245,1.23857324 74.9827196,1.24095674 C71.7457058,11.6468989 60.9683376,19.2910047 48.1719102,19.2910047 C35.3740124,19.2910047 24.5956378,11.645142 21.3599853,1.23736936 Z"
                                                    id="Combined-Shape" fill="#C5D3DA"></path>
                                                <path
                                                    d="M11.5642185,5.41638421 C11.5642185,2.71794611 13.753889,0.530429818 16.453206,0.530429818 L81.187948,0.530429818 C83.8880612,0.530429818 86.0769354,2.73057619 86.0769354,5.42242351 M86.0769354,26.8670481 L86.0769354,89.2505055 C86.0769354,91.952566 83.887265,94.1430188 81.187948,94.1430188 L16.453206,94.1430188 C13.7530928,94.1430188 11.5642185,91.9589263 11.5642185,89.2556987 L11.5642185,26.1857361"
                                                    id="Rectangle-12-Copy-4" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round"></path>
                                                <path
                                                    d="M28.9278534,87.4617275 L28.9278534,69.4891316 L81.4789049,69.4891316 C83.1360953,69.4891316 84.4795136,70.8399974 84.4795136,72.49734 L84.4795136,87.4617275 L28.9278534,87.4617275 Z"
                                                    id="Combined-Shape" fill="#DAE2E6"></path>
                                                <polygon id="Path-85" fill="#DAE2E6"
                                                         points="26.2643882 68.1545362 44.5867506 37.5367384 58.0743369 38.4158841 74.4262366 69.8792163"></polygon>
                                                <polyline id="Path-47" stroke="#404F54" stroke-width="2"
                                                          stroke-linecap="round" stroke-linejoin="round" fill="#F5F6F7"
                                                          points="24.8707319 78.2829688 40.121271 80.4354042 50.3457378 78.8142964 50.351002 32.1357065 43.6868123 32.1357065 37.6108669 62.7688738 28.9567677 64.3346528"></polyline>
                                                <polyline id="Path-47-Copy" stroke="#404F54" stroke-width="2"
                                                          stroke-linecap="round" stroke-linejoin="round" fill="#F5F6F7"
                                                          transform="translate(63.169617, 56.285555) scale(-1, 1) translate(-63.169617, -56.285555) "
                                                          points="50.4294819 78.2829688 65.680021 80.4354042 75.9044878 78.8142964 75.909752 32.1357065 69.2455623 32.1357065 63.169617 62.7688738 54.5155178 64.3346528"></polyline>
                                                <rect id="Rectangle-13" stroke="#404F54" stroke-width="2"
                                                      stroke-linecap="round" fill="#F5F6F7" x="0.390455024"
                                                      y="63.0994441" width="33.5323568" height="17.9725959"
                                                      rx="3"></rect>
                                                <rect id="Rectangle-13-Copy-2" stroke="#404F54" stroke-width="2"
                                                      stroke-linecap="round" fill="#F5F6F7" x="68.0079649"
                                                      y="63.0994441" width="29.6203188" height="17.9725959"
                                                      rx="3"></rect>
                                                <rect id="Rectangle-13-Copy" stroke="#404F54" stroke-width="2"
                                                      stroke-linecap="round" fill="#F5F6F7" x="19.8421186"
                                                      y="63.0994441" width="7.11308883" height="17.9725959"
                                                      rx="3"></rect>
                                                <ellipse id="Oval-7" stroke="#404F54" stroke-width="2"
                                                         stroke-linecap="round" fill="#FF8F5C" cx="22.8603548"
                                                         cy="74.287042" rx="6.28598084" ry="6.28598084"></ellipse>
                                                <path
                                                    d="M27.6973189,74.2180719 C27.6973189,71.7284449 25.6790774,69.7102034 23.1894503,69.7102034 C20.6998233,69.7102034 18.6815817,71.7284449 18.6815817,74.2180719 C18.6815817,76.707699 27.6973189,76.707699 27.6973189,74.2180719 Z"
                                                    id="Oval-11" fill="#FFBC9E"></path>
                                                <path
                                                    d="M33.9228119,1.1989772 L33.9228119,24.6331684 C33.9228119,25.7352078 34.8138502,26.6285872 35.9233272,26.6285872 L43.040292,26.6285872 C44.1451462,26.6285872 45.0408074,25.7283679 45.0408074,24.6270951 L45.0408074,14.908183"
                                                    id="Path-48" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round" fill="#FF8F5C"></path>
                                            </g>
                                            <g id="Group-6-Copy">
                                                <path
                                                    d="M21.6735402,112.332713 C21.6735402,112.332713 33.2718001,102.395451 55.1224495,102.395451 C76.9730989,102.395451 89.4856253,111.909885 89.4856253,111.909885 L95.6660985,85.7655341 L92.3464975,63.7505401 L64.6392773,55.4758701 L19.7676217,58.5529432 L15.0447094,87.4855677 L21.6735402,112.332713 Z"
                                                    id="Path-45" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round" fill="#2FC3B6"></path>
                                                <path
                                                    d="M100.527826,47.7269433 L100.527826,105.292438 C100.527826,105.292438 100.527826,118.431014 91.2056589,122.143925 C81.8834917,125.856837 75.708603,123.631802 75.708603,123.631802 C75.708603,123.631802 81.5244865,119.083606 84.3638184,115.456058 C87.2031503,111.828511 86.931902,105.094372 86.931902,105.094372 L86.931902,52.0342746 L100.527826,47.7269433 Z"
                                                    id="Path-44" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round" fill="#2FC3B6"></path>
                                                <ellipse id="Oval-5" stroke="#1F5F59" stroke-width="2"
                                                         stroke-linecap="round" fill="#F5F6F7" cx="13.769917"
                                                         cy="67.8807937" rx="9.33622721" ry="9.33622721"></ellipse>
                                                <ellipse id="Oval-5-Copy" stroke="#404F54" stroke-width="2"
                                                         stroke-linecap="round" fill="#F5F6F7" cx="90.1846155"
                                                         cy="67.8807937" rx="9.33622721" ry="9.33622721"></ellipse>
                                                <path
                                                    d="M98.530485,69.0616891 L89.1984979,66.706865 L89.1984979,57.4686653 L98.1609682,65.6445044 C98.1609682,65.6445044 98.8608532,67.0704672 98.530485,69.0616891 Z"
                                                    id="Path-3" fill="#DAE2E6"></path>
                                                <rect id="Rectangle-31-Copy-3" stroke="#404F54" stroke-width="2"
                                                      stroke-linecap="round" fill="#FF8F5C" x="40.8696745"
                                                      y="101.015169" width="27.0239513" height="26.9406514"
                                                      rx="13.4703257"></rect>
                                                <rect id="Rectangle-31-Copy-6" stroke="#404F54" stroke-width="2"
                                                      stroke-linecap="round" fill="#F5F6F7" x="45.3926213"
                                                      y="86.9515378" width="17.9780578" height="32.2363121"
                                                      rx="8.98902891"></rect>
                                                <rect id="Rectangle-31" stroke="#404F54" stroke-width="2"
                                                      stroke-linecap="round" fill="#FFFFFF" x="20.5434891"
                                                      y="18.7778717" width="67.6763222" height="87.138914"
                                                      rx="33.8381611"></rect>
                                                <path
                                                    d="M87.1565137,62.3830489 L87.1565137,40.837523 L67.9594339,34.5499606 C66.6582766,30.9062273 63.966741,27.9720862 63.966741,27.9720862 L45.2569878,31.129736 L17.9917429,54.4076304 L16.4269175,75.6764808 C16.4269175,75.6764808 30.8748375,71.3412563 39.9983552,67.9634166 C47.358104,65.2385848 59.8975678,51.187922 64.9330372,45.5086416 C66.0707407,48.4017109 87.1565137,62.3830489 87.1565137,62.3830489 Z"
                                                    id="Combined-Shape" fill="#DAE2E6"></path>
                                                <path
                                                    d="M65.4966078,37.1144083 C62.1506098,41.9277622 57.5509456,46.8101508 51.3257705,50.4035262 C33.6930328,60.5817213 23.4932974,62.7796306 23.4932974,62.7796306 L23.9911179,105.196489 C23.9911179,105.196489 23.9911179,113.385795 27.1328119,117.073975 C30.274506,120.762155 35.2008545,124.442356 35.2008545,124.442356 C35.2008545,124.442356 25.3824624,127.210685 14.3282947,124.442356 C3.27412703,121.674028 0.457931022,107.883443 0.457931022,107.883443 L0.733701816,48.5869601 C1.06277114,38.5718222 -1.38443855,5.50861913 37.0038582,1.15041208 C58.0764403,-2.47066986 66.9992659,4.38841398 70.7770096,10.7667962 C70.9526142,10.6767227 71.1316824,10.5925626 71.3142794,10.5146357 C79.3928518,7.06694451 88.5948104,7.75833323 96.0282948,18.8653221 C103.461779,29.9723109 100.417731,66.0705112 100.417731,66.0705112 L87.6546234,57.3102639 C87.6546234,57.3102639 78.8072164,53.281152 72.2725247,46.6323765 C69.4637513,43.774567 67.1836222,40.2287773 65.4966078,37.1144083 Z"
                                                    id="Combined-Shape" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round" fill="#85DAD2"></path>
                                                <path
                                                    d="M65.6600112,35.5750459 C62.8781184,40.5197885 56.4432908,46.4706235 51.1256121,49.5401622 C36.0633474,58.2345959 22.4288254,62.0447512 22.4288254,62.0447512 L23.0176857,103.445199 C23.0176857,103.445199 22.4288254,111.782797 25.1768081,116.007125 C25.1768081,116.007125 26.3717867,117.498646 20.016495,116.007125 C10.5737867,113.642359 8.16813135,101.862144 8.16813135,101.862144 L8.40370071,51.2098097 C8.40370071,51.2098097 10.2204327,13.8605831 39.3864502,10.6884877 C57.3871026,7.59528167 65.0091729,13.4544576 68.2362035,18.9030088 C68.3862096,18.8260676 68.5391735,18.7541762 68.6951518,18.6876093 C75.5960425,15.7425172 83.4565539,16.3331164 89.8063966,25.8209457 C96.1562393,35.3087751 94.619607,60.8488932 94.619607,60.8488932 C94.619607,60.8488932 90.1913912,58.1435691 88.2273017,56.4515249 C70.4076872,48.5059562 65.6600112,35.5750459 65.6600112,35.5750459 Z"
                                                    id="Combined-Shape-Copy" fill="#2FC3B6"></path>
                                                <polyline id="Path-35" stroke="#404F54" stroke-width="2"
                                                          stroke-linecap="round" stroke-linejoin="round" fill="#F5F6F7"
                                                          points="53.06894 69.0470723 53.06894 81.9543013 56.9182187 81.9543013"></polyline>
                                                <path
                                                    d="M48.4943688,88.0844944 C48.4943688,91.6557703 51.3894599,94.5508613 54.9607357,94.5508613 C58.5320115,94.5508613 61.4271026,91.6557703 61.4271026,88.0844944 L48.4943688,88.0844944 Z"
                                                    id="Oval-5-Copy-2" fill="#FF8F5C"></path>
                                                <path
                                                    d="M67.2347439,66.250575 C67.2347439,68.9571252 69.4288364,71.1512177 72.1353866,71.1512177 C74.8419369,71.1512177 77.0360293,68.9571252 77.0360293,66.250575"
                                                    id="Oval-5-Copy-5" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round" fill="#F5F6F7"
                                                    transform="translate(72.135387, 68.700896) rotate(-180.000000) translate(-72.135387, -68.700896) "></path>
                                                <path
                                                    d="M31.2895521,66.250575 C31.2895521,68.9571252 33.4836445,71.1512177 36.1901948,71.1512177 C38.896745,71.1512177 41.0908375,68.9571252 41.0908375,66.250575"
                                                    id="Oval-5-Copy-6" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round" fill="#F5F6F7"
                                                    transform="translate(36.190195, 68.700896) rotate(-180.000000) translate(-36.190195, -68.700896) "></path>
                                            </g>
                                        </g>
                                        <g id="mouse" transform="translate(3.000000, 194.000000)">
                                            <path
                                                d="M25.4192728,13.1080845 C25.2682678,6.33646549 19.7316666,0.893494871 12.9237915,0.893494871 C6.11591638,0.893494871 0.579315188,6.33646549 0.428310119,13.1080845 L25.4192728,13.1080845 L25.4192728,13.1080845 Z"
                                                id="Combined-Shape-Copy-3" fill="#F5F6F7"></path>
                                            <path
                                                d="M15.8840433,3.78720178 C10.6889931,3.78720178 6.46404478,7.94070119 6.34881368,13.1080845 L25.4192728,13.1080845 C25.3040418,7.94070119 21.0790934,3.78720178 15.8840433,3.78720178 Z"
                                                id="Combined-Shape" fill="#FF8F5C"></path>
                                            <path
                                                d="M25.4192728,13.1080845 C25.2682678,6.33646549 19.7316666,0.893494871 12.9237915,0.893494871 C6.11591638,0.893494871 0.579315188,6.33646549 0.428310119,13.1080845 L25.4192728,13.1080845 L25.4192728,13.1080845 Z"
                                                id="Combined-Shape-Copy-2" stroke="#404F54" stroke-width="2"
                                                stroke-linecap="round"></path>
                                        </g>
                                        <g id="hand" transform="translate(0.000000, 187.000000)" stroke="#404F54"
                                           stroke-width="2" fill="#F5F6F7" stroke-linecap="round">
                                            <rect id="Rectangle-14"
                                                  transform="translate(28.286329, 12.593495) rotate(29.000000) translate(-28.286329, -12.593495) "
                                                  x="24.398366" y="6.84349462" width="7.77592691" height="11.5"
                                                  rx="3.88796346"></rect>
                                            <rect id="Rectangle-14-Copy-3" x="13.4553639" y="0.126539322"
                                                  width="6.0001508" height="15" rx="3.0000754"></rect>
                                            <rect id="Rectangle-14-Copy" x="6.45536393" y="1.12653932" width="6.0001508"
                                                  height="15" rx="3.0000754"></rect>
                                            <rect id="Rectangle-14-Copy-2" x="0.455363928" y="5.62653932"
                                                  width="6.0001508" height="11.5" rx="3.0000754"></rect>
                                        </g>
                                        <g id="laptop" transform="translate(38.000000, 133.000000)">
                                            <path
                                                d="M111.096486,43.6560517 L111.096486,64.7680008 C111.096486,68.0818514 108.405312,70.7682582 105.084065,70.7682582 L6.01242056,70.7682582 C2.69185238,70.7682582 0,68.0860686 0,64.7646229 L0,6.71104665 L0,6.71104665 C0,3.39533046 2.69117313,0.707411405 6.01242056,0.707411405 L105.084065,0.707411405 C108.404633,0.707411405 111.096486,3.40460791 111.096486,6.70650973 L111.096486,26.3638506 L111.096486,36.2745613"
                                                id="Rectangle-3" stroke="#404F54" stroke-width="2"
                                                stroke-linecap="round" fill="#F5F6F7"></path>
                                            <ellipse id="Oval-9" stroke="#2FC3B6" stroke-width="2"
                                                     stroke-linecap="round" cx="55.5913385" cy="32.1325544"
                                                     rx="7.5065193" ry="7.5065193"></ellipse>
                                            <path
                                                d="M1.00086924,49.4004097 L110.102278,49.4004097 L110.102278,64.7469594 C110.102278,67.5108624 107.873497,69.7514485 105.094966,69.7514485 L6.00818128,69.7514485 C3.2427192,69.7514485 1.00086924,67.5153161 1.00086924,64.7469594 L1.00086924,49.4004097 Z"
                                                id="Rectangle-9" fill="#E1EBF0"></path>
                                            <ellipse id="Oval" fill="#E6EDF1" cx="8.50738854" cy="9.50825778"
                                                     rx="1.50130386" ry="1.50130386"></ellipse>
                                            <ellipse id="Oval-Copy" fill="#E6EDF1" cx="101.588228" cy="9.50825778"
                                                     rx="1.50130386" ry="1.50130386"></ellipse>
                                            <ellipse id="Oval-Copy-3" fill="#C4D3DA" cx="8.50738854" cy="62.5543275"
                                                     rx="1.50130386" ry="1.50130386"></ellipse>
                                            <ellipse id="Oval-Copy-2" fill="#C4D3DA" cx="101.588228" cy="62.5543275"
                                                     rx="1.50130386" ry="1.50130386"></ellipse>
                                            <rect id="Rectangle-4" stroke="#404F54" stroke-width="2"
                                                  stroke-linecap="round" fill="#E0EAEF" x="0" y="69" width="111.096486"
                                                  height="5" rx="2.5"></rect>
                                        </g>
                                    </g>
                                    <circle id="Oval-14" fill="#F1F9FD" cx="96" cy="80" r="4"></circle>
                                    <path
                                        d="M92,80 C92,82.209139 93.790861,84 96,84 C98.209139,84 100,82.209139 100,80 C100,77.790861 98.209139,76 96,76"
                                        id="Oval-14-Copy-2" stroke="#404F54" stroke-width="2"
                                        stroke-linecap="round"></path>
                                    <circle id="Oval-14" stroke="#404F54" stroke-width="2" stroke-linecap="round"
                                            fill="#F1F9FD" cx="78" cy="75" r="8"></circle>
                                    <circle id="Oval-14" fill="#F1F9FD" cx="38" cy="44" r="38"></circle>
                                    <path
                                        d="M2,38 C2,58.9868205 19.0131795,76 40,76 L40,76 C60.9868205,76 78,58.9868205 78,38 C78,17.0131795 60.9868205,0 40,0 C33.6945605,0 27.7478165,1.53575847 22.5134139,4.25362973 M13.5200408,10.7453925 C8.38276055,15.737555 4.65214564,22.1695892 2.9795507,29.3901405"
                                        id="Oval-14-Copy" stroke="#404F54" stroke-width="2"
                                        stroke-linecap="round"></path>
                                </g>
                                <g id="lamp" transform="translate(92.070964, 52.447548)">
                                    <path
                                        d="M33.4859095,18.0668764 C33.4859095,9.18558871 26.2862033,1.98588251 17.4049156,1.98588251 C8.52362787,1.98588251 1.32392167,9.18558871 1.32392167,18.0668764 C1.32392167,23.6118944 4.31355225,28.5014136 8.60685786,31.3924444 C8.6059478,31.4656439 8.60549086,31.5390005 8.60549086,31.6125086 C8.60549086,38.3623729 12.4583004,43.8342191 17.2109817,43.8342191 C21.9560145,43.8342191 25.8040695,38.3799706 25.8164427,31.6450866 C30.3157799,28.7917122 33.4859095,23.7768316 33.4859095,18.0668764 Z"
                                        id="Combined-Shape-Copy-6" fill="#FFA47B"></path>
                                    <path
                                        d="M30.0956161,8.18922433 C31.4112648,10.5206087 32.1619878,13.2131309 32.1619878,16.0809939 C32.1619878,21.7909491 28.9918583,26.8058297 24.492521,29.6592041 C24.4801478,36.3940881 20.6320929,41.8483366 15.8870601,41.8483366 C13.7726529,41.8483366 11.8363525,40.7653234 10.3381774,38.9685811 C9.25047294,36.9220069 8.60549086,34.3742315 8.60549086,31.6125086 C8.60549086,31.5390005 8.6059478,31.4656439 8.60685786,31.3924444 C8.15596712,31.0888231 7.71945536,30.7631593 7.29927551,30.4170087 C7.28753122,30.1556957 7.28156919,29.8921497 7.28156919,29.6266261 C7.28156919,29.553118 7.28202613,29.4797614 7.28293619,29.4065619 C5.79977038,28.4078261 4.47218864,27.1705853 3.36969979,25.7502085 C2.07687984,23.4673543 1.32392167,20.8496612 1.32392167,18.0668764 C1.32392167,9.18558871 8.52362787,1.98588251 17.4049156,1.98588251 C22.5624635,1.98588251 27.1529207,4.41388681 30.0956161,8.18922433 Z"
                                        id="Combined-Shape" fill="#FF8F5C"></path>
                                    <path
                                        d="M6.70111728,9.59805037 C5.50110147,11.182686 4.66796629,13.0605254 4.32815594,15.1051244 M21.1058403,5.3898844 C19.7434574,4.88428222 18.2696492,4.60802962 16.7313187,4.60802962 C13.7069638,4.60802962 10.9319971,5.67578701 8.76282881,7.45489143"
                                        id="Oval-3" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                    <path
                                        d="M7.45681327,32.0925784 C8.26001641,37.6603842 11.7291736,41.8483366 15.8870601,41.8483366 C20.0449465,41.8483366 23.5141037,37.6603842 24.3173068,32.0925784 L7.45681327,32.0925784 Z"
                                        id="Combined-Shape" stroke="#404F54" stroke-width="2" stroke-linecap="round"
                                        fill="#F5F6F7"></path>
                                    <path
                                        d="M14.5763456,18.8367937 C14.5763456,17.1916348 13.2426808,15.85797 11.5975219,15.85797 C9.95236295,15.85797 8.61869812,17.1916348 8.61869812,18.8367937 C8.61869812,20.4819527 9.95236295,21.8156175 11.5975219,21.8156175"
                                        id="Oval-16" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                    <path
                                        d="M23.0065924,18.8367937 C23.0065924,17.1916348 21.6729276,15.85797 20.0277687,15.85797 C18.3826097,15.85797 17.0489449,17.1916348 17.0489449,18.8367937 C17.0489449,20.4819527 18.3826097,21.8156175 20.0277687,21.8156175"
                                        id="Oval-16-Copy" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"
                                        transform="translate(20.027769, 18.836794) scale(-1, 1) translate(-20.027769, -18.836794) "></path>
                                    <path
                                        d="M12.2945702,0.44831735 C6.91107149,1.74762211 2.58395544,5.75551847 0.836294689,10.9489338 M0,16.0809939 C0,21.6260119 2.98963058,26.5155311 7.28293619,29.4065619 C7.28202613,29.4797614 7.28156919,29.553118 7.28156919,29.6266261 C7.28156919,36.3764904 11.1343787,41.8483366 15.8870601,41.8483366 C20.6320929,41.8483366 24.4801478,36.3940881 24.492521,29.6592041 C28.9918583,26.8058297 32.1619878,21.7909491 32.1619878,16.0809939 C32.1619878,7.1997062 24.9622816,-2.27373675e-13 16.0809939,-2.27373675e-13"
                                        id="Combined-Shape-Copy-5" stroke="#404F54" stroke-width="2"
                                        stroke-linecap="round"></path>
                                    <path d="M14.5763456,32.0925784 L14.5763456,18.4682661" id="Path-32"
                                          stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M17.0489449,32.0925784 L17.0489449,18.4682661" id="Path-32-Copy"
                                          stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"
                                          transform="translate(17.048945, 25.280422) scale(-1, 1) translate(-17.048945, -25.280422) "></path>
                                    <path d="M4.89029149,31.9981137 L26.8838286,31.9981137" id="Path-36"
                                          stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M8.60376836,35.9698787 L23.1686292,35.9698787" id="Path-36-Copy"
                                          stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M10.2940081,38.6351761 L21.5654428,38.7815961" id="Path-36-Copy-2"
                                          stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                </g>
                                <g id="Group-4-Copy">
                                    <g id="bg-ilustrasi" transform="translate(0.797033, 0.063988)">
                                        <path
                                            d="M71.0727947,130.765157 C71.0727947,130.765157 72.0078323,132.236944 72.5996312,132.828743 C73.2096468,133.438759 74.6782382,134.3706 74.6782382,134.3706 C74.6782382,134.3706 73.1838666,135.356346 72.5996312,135.940581 C71.9820521,136.558161 71.0727947,137.976044 71.0727947,137.976044 C71.0727947,137.976044 70.1570391,136.512992 69.5846285,135.940581 C68.9552246,135.311177 67.4673513,134.3706 67.4673513,134.3706 C67.4673513,134.3706 68.9648655,133.448506 69.5846285,132.828743 C70.16668,132.246692 71.0727947,130.765157 71.0727947,130.765157 Z"
                                            id="Polygon" fill="#DAE2E6"></path>
                                        <path
                                            d="M416.734949,201.233166 C416.734949,201.233166 417.71418,202.774517 418.33395,203.394287 C418.972798,204.033134 420.510802,205.009019 420.510802,205.009019 C420.510802,205.009019 418.945799,206.041356 418.33395,206.653205 C417.687182,207.299973 416.734949,208.784872 416.734949,208.784872 C416.734949,208.784872 415.77591,207.25267 415.176445,206.653205 C414.517293,205.994052 412.959096,205.009019 412.959096,205.009019 C412.959096,205.009019 414.527389,204.043343 415.176445,203.394287 C415.786007,202.784725 416.734949,201.233166 416.734949,201.233166 Z"
                                            id="Polygon-Copy-9" fill="#DAE2E6"></path>
                                        <path
                                            d="M367.750231,159.414767 C367.750231,159.414767 369.000229,161.382314 369.79137,162.173455 C370.606865,162.98895 372.57014,164.234675 372.57014,164.234675 C372.57014,164.234675 370.572401,165.552461 369.79137,166.333492 C368.965765,167.159098 367.750231,169.054584 367.750231,169.054584 C367.750231,169.054584 366.52601,167.098714 365.760788,166.333492 C364.919374,165.492078 362.930322,164.234675 362.930322,164.234675 C362.930322,164.234675 364.932262,163.001981 365.760788,162.173455 C366.538899,161.395345 367.750231,159.414767 367.750231,159.414767 Z"
                                            id="Polygon-Copy-4" fill="#DAE2E6"></path>
                                        <path
                                            d="M57.1761582,182.60305 C57.1761582,182.60305 57.9679938,183.849432 58.4691582,184.350596 C58.9857492,184.867187 60.2294244,185.656316 60.2294244,185.656316 C60.2294244,185.656316 58.9639173,186.491094 58.4691582,186.985853 C57.9461619,187.508849 57.1761582,188.709583 57.1761582,188.709583 C57.1761582,188.709583 56.4006514,187.470599 55.915906,186.985853 C55.3828959,186.452843 54.1228919,185.656316 54.1228919,185.656316 C54.1228919,185.656316 55.3910603,184.875442 55.915906,184.350596 C56.4088158,183.857686 57.1761582,182.60305 57.1761582,182.60305 Z"
                                            id="Polygon-Copy-7" fill="#DAE2E6"></path>
                                        <path
                                            d="M126.4466,189.67082 C126.4466,189.67082 127.381638,191.142607 127.973436,191.734406 C128.583452,192.344421 130.052043,193.276263 130.052043,193.276263 C130.052043,193.276263 128.557672,194.262009 127.973436,194.846244 C127.355857,195.463823 126.4466,196.881707 126.4466,196.881707 C126.4466,196.881707 125.530844,195.418655 124.958434,194.846244 C124.32903,194.21684 122.841157,193.276263 122.841157,193.276263 C122.841157,193.276263 124.338671,192.354169 124.958434,191.734406 C125.540485,191.152354 126.4466,189.67082 126.4466,189.67082 Z"
                                            id="Polygon-Copy" fill="#DAE2E6"></path>
                                        <path
                                            d="M224.197229,31.6287635 C224.197229,31.6287635 225.132266,33.1005508 225.724065,33.6923497 C226.334081,34.3023653 227.802672,35.2342069 227.802672,35.2342069 C227.802672,35.2342069 226.308301,36.2199526 225.724065,36.8041879 C225.106486,37.4217671 224.197229,38.8396503 224.197229,38.8396503 C224.197229,38.8396503 223.281473,37.3765985 222.709063,36.8041879 C222.079659,36.174784 220.591786,35.2342069 220.591786,35.2342069 C220.591786,35.2342069 222.0893,34.3121127 222.709063,33.6923497 C223.291114,33.1102983 224.197229,31.6287635 224.197229,31.6287635 Z"
                                            id="Polygon-Copy-3" fill="#DAE2E6"></path>
                                        <path
                                            d="M287.787289,54.2676523 C287.787289,54.2676523 288.722326,55.7394396 289.314125,56.3312385 C289.924141,56.941254 291.392732,57.8730957 291.392732,57.8730957 C291.392732,57.8730957 289.898361,58.8588414 289.314125,59.4430767 C288.696546,60.0606558 287.787289,61.4785391 287.787289,61.4785391 C287.787289,61.4785391 286.871533,60.0154873 286.299123,59.4430767 C285.669719,58.8136728 284.181845,57.8730957 284.181845,57.8730957 C284.181845,57.8730957 285.67936,56.9510015 286.299123,56.3312385 C286.881174,55.749187 287.787289,54.2676523 287.787289,54.2676523 Z"
                                            id="Polygon-Copy-6" fill="#DAE2E6"></path>
                                        <path
                                            d="M41.82355,48.8906977 C41.82355,48.8906977 42.5659465,50.0592601 43.0358201,50.5291338 C43.5201573,51.0134709 44.6861822,51.7533299 44.6861822,51.7533299 C44.6861822,51.7533299 43.4996884,52.5359874 43.0358201,52.9998557 C42.5454777,53.4901981 41.82355,54.6159621 41.82355,54.6159621 C41.82355,54.6159621 41.0964629,53.4543354 40.6419832,52.9998557 C40.1422521,52.5001247 38.9609179,51.7533299 38.9609179,51.7533299 C38.9609179,51.7533299 40.1499068,51.0212101 40.6419832,50.5291338 C41.1041175,50.0669994 41.82355,48.8906977 41.82355,48.8906977 Z"
                                            id="Polygon-Copy-2" fill="#DAE2E6"></path>
                                        <path
                                            d="M217.729153,132.728493 C217.729153,132.728493 218.47155,133.897055 218.941423,134.366929 C219.425761,134.851266 220.591786,135.591125 220.591786,135.591125 C220.591786,135.591125 219.405292,136.373783 218.941423,136.837651 C218.451081,137.327993 217.729153,138.453757 217.729153,138.453757 C217.729153,138.453757 217.002066,137.292131 216.547586,136.837651 C216.047855,136.33792 214.866521,135.591125 214.866521,135.591125 C214.866521,135.591125 216.05551,134.859005 216.547586,134.366929 C217.009721,133.904795 217.729153,132.728493 217.729153,132.728493 Z"
                                            id="Polygon-Copy-5" fill="#DAE2E6"></path>
                                        <path d="M120.056343,71.9453111 L113.15932,65.0482881" id="Path-67"
                                              stroke="#DAE2E6" stroke-width="2" stroke-linecap="round"
                                              fill="#DAE2E6"></path>
                                        <path d="M101.648612,173.372581 L94.7515891,166.475558" id="Path-67-Copy"
                                              stroke="#DAE2E6" stroke-width="2" stroke-linecap="round"
                                              fill="#DAE2E6"></path>
                                        <path d="M40.2645251,226.656036 L31.1810049,231.993041" id="Path-68"
                                              stroke="#DAE2E6" stroke-width="2" stroke-linecap="round"
                                              fill="#DAE2E6"></path>
                                        <path d="M399.367098,230.307671 L405.349485,230.307671" id="Path-69"
                                              stroke="#DAE2E6" stroke-width="2" stroke-linecap="round"
                                              fill="#DAE2E6"></path>
                                        <path
                                            d="M151.791282,216.131115 C153.962836,212.492962 155.210536,208.239546 155.210536,203.694713 C155.210536,190.27435 144.331182,179.394996 130.910819,179.394996 C120.492958,179.394996 111.606307,185.950886 108.151389,195.162145"
                                            id="Oval-22" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M434.40633,225.245237 C436.04484,222.500128 436.986271,219.290782 436.986271,215.861554 C436.986271,205.735439 428.777433,197.5266 418.651318,197.5266 C410.790692,197.5266 404.085416,202.47324 401.478563,209.423444"
                                            id="Oval-22-Copy-10" stroke="#DAE2E6" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M98.2001006,129.721856 C98.2001006,132.469828 100.427772,134.6975 103.175745,134.6975 L103.175745,134.6975 C105.923717,134.6975 108.151389,132.469828 108.151389,129.721856 C108.151389,126.973883 105.923717,124.746212 103.175745,124.746212"
                                            id="Oval-22-Copy-3" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <ellipse id="Oval-22-Copy-8" stroke="#DAE2E6" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" cx="372.725875"
                                                 cy="209.684418" rx="4.975644" ry="4.975644"></ellipse>
                                        <ellipse id="Oval-22-Copy-7" stroke="#DAE2E6" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" cx="168.648102"
                                                 cy="3.65848757" rx="3.46000222" ry="3.46000222"></ellipse>
                                        <path
                                            d="M390.003108,154.427377 C390.003108,149.930527 386.357691,146.28511 381.860841,146.28511 C377.363991,146.28511 373.718574,149.930527 373.718574,154.427377"
                                            id="Oval-22-Copy-4" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M120.889866,219.805333 C120.889866,214.364382 119.460683,209.257234 116.957243,204.838816 M111.782048,198.105447 C106.296668,192.721366 98.7788016,189.400856 90.4853889,189.400856 C74.7140484,189.400856 61.7473574,201.408988 60.2294244,216.781144"
                                            id="Oval-22-Copy" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M418.882802,51.4662053 C418.882802,47.6275 415.770916,44.5156146 411.932211,44.5156146 C408.093506,44.5156146 404.98162,47.6275 404.98162,51.4662053"
                                            id="Oval-22-Copy-9" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M21.4898673,221.946113 C19.4385804,218.721743 15.8335683,216.582517 11.7289131,216.582517 C5.34428606,216.582517 0.168523211,221.75828 0.168523211,228.142907"
                                            id="Oval-22-Copy-2" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M402.51563,172.222742 C404.060319,170.25732 404.98162,167.778801 404.98162,165.0851 C404.98162,158.700473 399.805858,153.52471 393.421231,153.52471 C389.175278,153.52471 385.46396,155.813751 383.454005,159.225104"
                                            id="Oval-22-Copy-5" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12.3779598,271.697995 L376.959775,271.697995 M384.20632,271.697995 L407.612715,271.697995 M415.187492,271.697995 L420.832359,271.697995"
                                            id="Path-70" stroke="#404F54" stroke-width="2" stroke-linecap="round"
                                            fill="#404F54"></path>
                                    </g>
                                    <g id="Group-2"
                                       transform="translate(368.850170, 234.318262) rotate(-25.000000) translate(-368.850170, -234.318262) translate(367.850170, 233.318262)"></g>
                                    <g id="Group-3" transform="translate(143.000000, 64.000000)">
                                        <g id="hand" transform="translate(3.000000, 120.000000)">
                                            <path
                                                d="M9.65959048,66.5516558 L23.8703251,57.4311472 C23.8703251,57.4311472 39.2922254,55.2613153 35.3132752,74.4975324 L24.8646002,81.1406774 L9.65959048,66.5516558 Z"
                                                id="Path-5" fill="#E0EAEF"></path>
                                            <path
                                                d="M5.88276504,69.0307397 L23.8713994,57.0788863 L40.7917455,0.0333003548 L41.8243148,39.1946715 C41.8243148,39.1946715 42.3593478,61.7354204 39.2879726,69.0307397 C36.4305638,75.8178329 24.0379629,81.441909 24.0379629,81.441909"
                                                id="Path-4" stroke="#404F54" stroke-width="2"
                                                stroke-linecap="round"></path>
                                            <path
                                                d="M25,79.5 C25,72.5964406 19.4035594,67 12.5,67 C5.59644063,67 0,72.5964406 0,79.5 C0,86.4035594 25,86.4035594 25,79.5 Z"
                                                id="Oval-2" stroke="#404F54" stroke-width="2" stroke-linecap="round"
                                                fill="#F5F6F7"></path>
                                        </g>
                                        <g id="Group-10" transform="translate(39.000000, 0.000000)">
                                            <g id="Group-9" transform="translate(5.383466, 113.358770)">
                                                <rect id="Rectangle-12-Copy" stroke="#404F54" stroke-width="2"
                                                      stroke-linecap="round" fill="#F5F6F7" x="0.390455024"
                                                      y="0.530429818" width="25.4802701" height="81.2400906"
                                                      rx="3"></rect>
                                                <path
                                                    d="M68.14079,12.766571 C68.14079,8.34534691 71.6842714,4.25510484 76.0590299,3.63023789 L90.8351592,1.51969516 C94.6602555,0.973338999 97.7611088,3.66053588 97.7611088,7.53174382 L97.7611088,73.3765344 L71.1439497,73.3765344 C69.4853504,73.3765344 68.14079,72.0366839 68.14079,70.3841003 L68.14079,12.766571 Z"
                                                    id="Rectangle-12-Copy-3" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round" fill="#F5F6F7"></path>
                                                <rect id="Rectangle-12" fill="#F5F6F7" x="9.96679666" y="0.530429818"
                                                      width="74.5127169" height="93.612589" rx="3"></rect>
                                                <path
                                                    d="M9.96679666,87.4617275 L9.96679666,69.4891316 L54.2755693,69.4891316 C55.9355791,69.4891316 57.2812829,70.8399974 57.2812829,72.49734 L57.2812829,84.453519 C57.2812829,86.1149067 55.9354381,87.4617275 54.2755693,87.4617275 L9.96679666,87.4617275 Z"
                                                    id="Combined-Shape" fill="#DAE2E6"></path>
                                                <path
                                                    d="M21.3599853,1.23736936 L74.8120464,1.23736936 C74.8692255,1.23736936 74.9261245,1.23857324 74.9827196,1.24095674 C71.7457058,11.6468989 60.9683376,19.2910047 48.1719102,19.2910047 C35.3740124,19.2910047 24.5956378,11.645142 21.3599853,1.23736936 Z"
                                                    id="Combined-Shape" fill="#C5D3DA"></path>
                                                <path
                                                    d="M11.5642185,5.41638421 C11.5642185,2.71794611 13.753889,0.530429818 16.453206,0.530429818 L81.187948,0.530429818 C83.8880612,0.530429818 86.0769354,2.73057619 86.0769354,5.42242351 M86.0769354,26.8670481 L86.0769354,89.2505055 C86.0769354,91.952566 83.887265,94.1430188 81.187948,94.1430188 L16.453206,94.1430188 C13.7530928,94.1430188 11.5642185,91.9589263 11.5642185,89.2556987 L11.5642185,26.1857361"
                                                    id="Rectangle-12-Copy-4" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round"></path>
                                                <path
                                                    d="M28.9278534,87.4617275 L28.9278534,69.4891316 L81.4789049,69.4891316 C83.1360953,69.4891316 84.4795136,70.8399974 84.4795136,72.49734 L84.4795136,87.4617275 L28.9278534,87.4617275 Z"
                                                    id="Combined-Shape" fill="#DAE2E6"></path>
                                                <polygon id="Path-85" fill="#DAE2E6"
                                                         points="26.2643882 68.1545362 44.5867506 37.5367384 58.0743369 38.4158841 74.4262366 69.8792163"></polygon>
                                                <polyline id="Path-47" stroke="#404F54" stroke-width="2"
                                                          stroke-linecap="round" stroke-linejoin="round" fill="#F5F6F7"
                                                          points="24.8707319 78.2829688 40.121271 80.4354042 50.3457378 78.8142964 50.351002 32.1357065 43.6868123 32.1357065 37.6108669 62.7688738 28.9567677 64.3346528"></polyline>
                                                <polyline id="Path-47-Copy" stroke="#404F54" stroke-width="2"
                                                          stroke-linecap="round" stroke-linejoin="round" fill="#F5F6F7"
                                                          transform="translate(63.169617, 56.285555) scale(-1, 1) translate(-63.169617, -56.285555) "
                                                          points="50.4294819 78.2829688 65.680021 80.4354042 75.9044878 78.8142964 75.909752 32.1357065 69.2455623 32.1357065 63.169617 62.7688738 54.5155178 64.3346528"></polyline>
                                                <rect id="Rectangle-13" stroke="#404F54" stroke-width="2"
                                                      stroke-linecap="round" fill="#F5F6F7" x="0.390455024"
                                                      y="63.0994441" width="33.5323568" height="17.9725959"
                                                      rx="3"></rect>
                                                <rect id="Rectangle-13-Copy-2" stroke="#404F54" stroke-width="2"
                                                      stroke-linecap="round" fill="#F5F6F7" x="68.0079649"
                                                      y="63.0994441" width="29.6203188" height="17.9725959"
                                                      rx="3"></rect>
                                                <rect id="Rectangle-13-Copy" stroke="#404F54" stroke-width="2"
                                                      stroke-linecap="round" fill="#F5F6F7" x="19.8421186"
                                                      y="63.0994441" width="7.11308883" height="17.9725959"
                                                      rx="3"></rect>
                                                <ellipse id="Oval-7" stroke="#404F54" stroke-width="2"
                                                         stroke-linecap="round" fill="#FF8F5C" cx="22.8603548"
                                                         cy="74.287042" rx="6.28598084" ry="6.28598084"></ellipse>
                                                <path
                                                    d="M27.6973189,74.2180719 C27.6973189,71.7284449 25.6790774,69.7102034 23.1894503,69.7102034 C20.6998233,69.7102034 18.6815817,71.7284449 18.6815817,74.2180719 C18.6815817,76.707699 27.6973189,76.707699 27.6973189,74.2180719 Z"
                                                    id="Oval-11" fill="#FFBC9E"></path>
                                                <path
                                                    d="M33.9228119,1.1989772 L33.9228119,24.6331684 C33.9228119,25.7352078 34.8138502,26.6285872 35.9233272,26.6285872 L43.040292,26.6285872 C44.1451462,26.6285872 45.0408074,25.7283679 45.0408074,24.6270951 L45.0408074,14.908183"
                                                    id="Path-48" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round" fill="#FF8F5C"></path>
                                            </g>
                                            <g id="Group-6-Copy">
                                                <path
                                                    d="M21.6735402,112.332713 C21.6735402,112.332713 33.2718001,102.395451 55.1224495,102.395451 C76.9730989,102.395451 89.4856253,111.909885 89.4856253,111.909885 L95.6660985,85.7655341 L92.3464975,63.7505401 L64.6392773,55.4758701 L19.7676217,58.5529432 L15.0447094,87.4855677 L21.6735402,112.332713 Z"
                                                    id="Path-45" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round" fill="#2FC3B6"></path>
                                                <path
                                                    d="M100.527826,47.7269433 L100.527826,105.292438 C100.527826,105.292438 100.527826,118.431014 91.2056589,122.143925 C81.8834917,125.856837 75.708603,123.631802 75.708603,123.631802 C75.708603,123.631802 81.5244865,119.083606 84.3638184,115.456058 C87.2031503,111.828511 86.931902,105.094372 86.931902,105.094372 L86.931902,52.0342746 L100.527826,47.7269433 Z"
                                                    id="Path-44" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round" fill="#2FC3B6"></path>
                                                <ellipse id="Oval-5" stroke="#1F5F59" stroke-width="2"
                                                         stroke-linecap="round" fill="#F5F6F7" cx="13.769917"
                                                         cy="67.8807937" rx="9.33622721" ry="9.33622721"></ellipse>
                                                <ellipse id="Oval-5-Copy" stroke="#404F54" stroke-width="2"
                                                         stroke-linecap="round" fill="#F5F6F7" cx="90.1846155"
                                                         cy="67.8807937" rx="9.33622721" ry="9.33622721"></ellipse>
                                                <path
                                                    d="M98.530485,69.0616891 L89.1984979,66.706865 L89.1984979,57.4686653 L98.1609682,65.6445044 C98.1609682,65.6445044 98.8608532,67.0704672 98.530485,69.0616891 Z"
                                                    id="Path-3" fill="#DAE2E6"></path>
                                                <rect id="Rectangle-31-Copy-3" stroke="#404F54" stroke-width="2"
                                                      stroke-linecap="round" fill="#FF8F5C" x="40.8696745"
                                                      y="101.015169" width="27.0239513" height="26.9406514"
                                                      rx="13.4703257"></rect>
                                                <rect id="Rectangle-31-Copy-6" stroke="#404F54" stroke-width="2"
                                                      stroke-linecap="round" fill="#F5F6F7" x="45.3926213"
                                                      y="86.9515378" width="17.9780578" height="32.2363121"
                                                      rx="8.98902891"></rect>
                                                <rect id="Rectangle-31" stroke="#404F54" stroke-width="2"
                                                      stroke-linecap="round" fill="#FFFFFF" x="20.5434891"
                                                      y="18.7778717" width="67.6763222" height="87.138914"
                                                      rx="33.8381611"></rect>
                                                <path
                                                    d="M87.1565137,62.3830489 L87.1565137,40.837523 L67.9594339,34.5499606 C66.6582766,30.9062273 63.966741,27.9720862 63.966741,27.9720862 L45.2569878,31.129736 L17.9917429,54.4076304 L16.4269175,75.6764808 C16.4269175,75.6764808 30.8748375,71.3412563 39.9983552,67.9634166 C47.358104,65.2385848 59.8975678,51.187922 64.9330372,45.5086416 C66.0707407,48.4017109 87.1565137,62.3830489 87.1565137,62.3830489 Z"
                                                    id="Combined-Shape" fill="#DAE2E6"></path>
                                                <path
                                                    d="M65.4966078,37.1144083 C62.1506098,41.9277622 57.5509456,46.8101508 51.3257705,50.4035262 C33.6930328,60.5817213 23.4932974,62.7796306 23.4932974,62.7796306 L23.9911179,105.196489 C23.9911179,105.196489 23.9911179,113.385795 27.1328119,117.073975 C30.274506,120.762155 35.2008545,124.442356 35.2008545,124.442356 C35.2008545,124.442356 25.3824624,127.210685 14.3282947,124.442356 C3.27412703,121.674028 0.457931022,107.883443 0.457931022,107.883443 L0.733701816,48.5869601 C1.06277114,38.5718222 -1.38443855,5.50861913 37.0038582,1.15041208 C58.0764403,-2.47066986 66.9992659,4.38841398 70.7770096,10.7667962 C70.9526142,10.6767227 71.1316824,10.5925626 71.3142794,10.5146357 C79.3928518,7.06694451 88.5948104,7.75833323 96.0282948,18.8653221 C103.461779,29.9723109 100.417731,66.0705112 100.417731,66.0705112 L87.6546234,57.3102639 C87.6546234,57.3102639 78.8072164,53.281152 72.2725247,46.6323765 C69.4637513,43.774567 67.1836222,40.2287773 65.4966078,37.1144083 Z"
                                                    id="Combined-Shape" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round" fill="#85DAD2"></path>
                                                <path
                                                    d="M65.6600112,35.5750459 C62.8781184,40.5197885 56.4432908,46.4706235 51.1256121,49.5401622 C36.0633474,58.2345959 22.4288254,62.0447512 22.4288254,62.0447512 L23.0176857,103.445199 C23.0176857,103.445199 22.4288254,111.782797 25.1768081,116.007125 C25.1768081,116.007125 26.3717867,117.498646 20.016495,116.007125 C10.5737867,113.642359 8.16813135,101.862144 8.16813135,101.862144 L8.40370071,51.2098097 C8.40370071,51.2098097 10.2204327,13.8605831 39.3864502,10.6884877 C57.3871026,7.59528167 65.0091729,13.4544576 68.2362035,18.9030088 C68.3862096,18.8260676 68.5391735,18.7541762 68.6951518,18.6876093 C75.5960425,15.7425172 83.4565539,16.3331164 89.8063966,25.8209457 C96.1562393,35.3087751 94.619607,60.8488932 94.619607,60.8488932 C94.619607,60.8488932 90.1913912,58.1435691 88.2273017,56.4515249 C70.4076872,48.5059562 65.6600112,35.5750459 65.6600112,35.5750459 Z"
                                                    id="Combined-Shape-Copy" fill="#2FC3B6"></path>
                                                <polyline id="Path-35" stroke="#404F54" stroke-width="2"
                                                          stroke-linecap="round" stroke-linejoin="round" fill="#F5F6F7"
                                                          points="53.06894 69.0470723 53.06894 81.9543013 56.9182187 81.9543013"></polyline>
                                                <path
                                                    d="M48.4943688,88.0844944 C48.4943688,91.6557703 51.3894599,94.5508613 54.9607357,94.5508613 C58.5320115,94.5508613 61.4271026,91.6557703 61.4271026,88.0844944 L48.4943688,88.0844944 Z"
                                                    id="Oval-5-Copy-2" fill="#FF8F5C"></path>
                                                <path
                                                    d="M67.2347439,66.250575 C67.2347439,68.9571252 69.4288364,71.1512177 72.1353866,71.1512177 C74.8419369,71.1512177 77.0360293,68.9571252 77.0360293,66.250575"
                                                    id="Oval-5-Copy-5" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round" fill="#F5F6F7"
                                                    transform="translate(72.135387, 68.700896) rotate(-180.000000) translate(-72.135387, -68.700896) "></path>
                                                <path
                                                    d="M31.2895521,66.250575 C31.2895521,68.9571252 33.4836445,71.1512177 36.1901948,71.1512177 C38.896745,71.1512177 41.0908375,68.9571252 41.0908375,66.250575"
                                                    id="Oval-5-Copy-6" stroke="#404F54" stroke-width="2"
                                                    stroke-linecap="round" fill="#F5F6F7"
                                                    transform="translate(36.190195, 68.700896) rotate(-180.000000) translate(-36.190195, -68.700896) "></path>
                                            </g>
                                        </g>
                                        <g id="mouse" transform="translate(3.000000, 194.000000)">
                                            <path
                                                d="M25.4192728,13.1080845 C25.2682678,6.33646549 19.7316666,0.893494871 12.9237915,0.893494871 C6.11591638,0.893494871 0.579315188,6.33646549 0.428310119,13.1080845 L25.4192728,13.1080845 L25.4192728,13.1080845 Z"
                                                id="Combined-Shape-Copy-3" fill="#F5F6F7"></path>
                                            <path
                                                d="M15.8840433,3.78720178 C10.6889931,3.78720178 6.46404478,7.94070119 6.34881368,13.1080845 L25.4192728,13.1080845 C25.3040418,7.94070119 21.0790934,3.78720178 15.8840433,3.78720178 Z"
                                                id="Combined-Shape" fill="#FF8F5C"></path>
                                            <path
                                                d="M25.4192728,13.1080845 C25.2682678,6.33646549 19.7316666,0.893494871 12.9237915,0.893494871 C6.11591638,0.893494871 0.579315188,6.33646549 0.428310119,13.1080845 L25.4192728,13.1080845 L25.4192728,13.1080845 Z"
                                                id="Combined-Shape-Copy-2" stroke="#404F54" stroke-width="2"
                                                stroke-linecap="round"></path>
                                        </g>
                                        <g id="hand" transform="translate(0.000000, 187.000000)" stroke="#404F54"
                                           stroke-width="2" fill="#F5F6F7" stroke-linecap="round">
                                            <rect id="Rectangle-14"
                                                  transform="translate(28.286329, 12.593495) rotate(29.000000) translate(-28.286329, -12.593495) "
                                                  x="24.398366" y="6.84349462" width="7.77592691" height="11.5"
                                                  rx="3.88796346"></rect>
                                            <rect id="Rectangle-14-Copy-3" x="13.4553639" y="0.126539322"
                                                  width="6.0001508" height="15" rx="3.0000754"></rect>
                                            <rect id="Rectangle-14-Copy" x="6.45536393" y="1.12653932" width="6.0001508"
                                                  height="15" rx="3.0000754"></rect>
                                            <rect id="Rectangle-14-Copy-2" x="0.455363928" y="5.62653932"
                                                  width="6.0001508" height="11.5" rx="3.0000754"></rect>
                                        </g>
                                        <g id="laptop" transform="translate(38.000000, 133.000000)">
                                            <path
                                                d="M111.096486,43.6560517 L111.096486,64.7680008 C111.096486,68.0818514 108.405312,70.7682582 105.084065,70.7682582 L6.01242056,70.7682582 C2.69185238,70.7682582 0,68.0860686 0,64.7646229 L0,6.71104665 L0,6.71104665 C0,3.39533046 2.69117313,0.707411405 6.01242056,0.707411405 L105.084065,0.707411405 C108.404633,0.707411405 111.096486,3.40460791 111.096486,6.70650973 L111.096486,26.3638506 L111.096486,36.2745613"
                                                id="Rectangle-3" stroke="#404F54" stroke-width="2"
                                                stroke-linecap="round" fill="#F5F6F7"></path>
                                            <ellipse id="Oval-9" stroke="#2FC3B6" stroke-width="2"
                                                     stroke-linecap="round" cx="55.5913385" cy="32.1325544"
                                                     rx="7.5065193" ry="7.5065193"></ellipse>
                                            <path
                                                d="M1.00086924,49.4004097 L110.102278,49.4004097 L110.102278,64.7469594 C110.102278,67.5108624 107.873497,69.7514485 105.094966,69.7514485 L6.00818128,69.7514485 C3.2427192,69.7514485 1.00086924,67.5153161 1.00086924,64.7469594 L1.00086924,49.4004097 Z"
                                                id="Rectangle-9" fill="#E1EBF0"></path>
                                            <ellipse id="Oval" fill="#E6EDF1" cx="8.50738854" cy="9.50825778"
                                                     rx="1.50130386" ry="1.50130386"></ellipse>
                                            <ellipse id="Oval-Copy" fill="#E6EDF1" cx="101.588228" cy="9.50825778"
                                                     rx="1.50130386" ry="1.50130386"></ellipse>
                                            <ellipse id="Oval-Copy-3" fill="#C4D3DA" cx="8.50738854" cy="62.5543275"
                                                     rx="1.50130386" ry="1.50130386"></ellipse>
                                            <ellipse id="Oval-Copy-2" fill="#C4D3DA" cx="101.588228" cy="62.5543275"
                                                     rx="1.50130386" ry="1.50130386"></ellipse>
                                            <rect id="Rectangle-4" stroke="#404F54" stroke-width="2"
                                                  stroke-linecap="round" fill="#E0EAEF" x="0" y="69" width="111.096486"
                                                  height="5" rx="2.5"></rect>
                                        </g>
                                    </g>
                                    <g id="Group-5" transform="translate(68.000000, 30.000000)">
                                        <circle id="Oval-14" fill="#F1F9FD" cx="96" cy="80" r="4"></circle>
                                        <path
                                            d="M92,80 C92,82.209139 93.790861,84 96,84 C98.209139,84 100,82.209139 100,80 C100,77.790861 98.209139,76 96,76"
                                            id="Oval-14-Copy-2" stroke="#404F54" stroke-width="2"
                                            stroke-linecap="round"></path>
                                        <circle id="Oval-14" stroke="#404F54" stroke-width="2" stroke-linecap="round"
                                                fill="#F1F9FD" cx="78" cy="75" r="8"></circle>
                                        <circle id="Oval-14" fill="#F1F9FD" cx="38" cy="44" r="38"></circle>
                                        <path
                                            d="M2,38 C2,58.9868205 19.0131795,76 40,76 L40,76 C60.9868205,76 78,58.9868205 78,38 C78,17.0131795 60.9868205,0 40,0 C33.6945605,0 27.7478165,1.53575847 22.5134139,4.25362973 M13.5200408,10.7453925 C8.38276055,15.737555 4.65214564,22.1695892 2.9795507,29.3901405"
                                            id="Oval-14-Copy" stroke="#404F54" stroke-width="2"
                                            stroke-linecap="round"></path>
                                    </g>
                                    <g id="lampu-copy" transform="translate(85.070964, 36.447548)">
                                        <path
                                            d="M40.4859095,34.0668764 C40.4859095,25.1855887 33.2862033,17.9858825 24.4049156,17.9858825 C15.5236279,17.9858825 8.32392167,25.1855887 8.32392167,34.0668764 C8.32392167,39.6118944 11.3135523,44.5014136 15.6068579,47.3924444 C15.6059478,47.4656439 15.6054909,47.5390005 15.6054909,47.6125086 C15.6054909,54.3623729 19.4583004,59.8342191 24.2109817,59.8342191 C28.9560145,59.8342191 32.8040695,54.3799706 32.8164427,47.6450866 C37.3157799,44.7917122 40.4859095,39.7768316 40.4859095,34.0668764 Z"
                                            id="Combined-Shape-Copy-6" fill="#FFA47B"></path>
                                        <path
                                            d="M37.0956161,24.1892243 C38.4112648,26.5206087 39.1619878,29.2131309 39.1619878,32.0809939 C39.1619878,37.7909491 35.9918583,42.8058297 31.492521,45.6592041 C31.4801478,52.3940881 27.6320929,57.8483366 22.8870601,57.8483366 C20.7726529,57.8483366 18.8363525,56.7653234 17.3381774,54.9685811 C16.2504729,52.9220069 15.6054909,50.3742315 15.6054909,47.6125086 C15.6054909,47.5390005 15.6059478,47.4656439 15.6068579,47.3924444 C15.1559671,47.0888231 14.7194554,46.7631593 14.2992755,46.4170087 C14.2875312,46.1556957 14.2815692,45.8921497 14.2815692,45.6266261 C14.2815692,45.553118 14.2820261,45.4797614 14.2829362,45.4065619 C12.7997704,44.4078261 11.4721886,43.1705853 10.3696998,41.7502085 C9.07687984,39.4673543 8.32392167,36.8496612 8.32392167,34.0668764 C8.32392167,25.1855887 15.5236279,17.9858825 24.4049156,17.9858825 C29.5624635,17.9858825 34.1529207,20.4138868 37.0956161,24.1892243 Z"
                                            id="Combined-Shape" fill="#FF8F5C"></path>
                                        <path
                                            d="M13.7011173,25.5980504 C12.5011015,27.182686 11.6679663,29.0605254 11.3281559,31.1051244 M28.1058403,21.3898844 C26.7434574,20.8842822 25.2696492,20.6080296 23.7313187,20.6080296 C20.7069638,20.6080296 17.9319971,21.675787 15.7628288,23.4548914"
                                            id="Oval-3" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                        <path
                                            d="M14.4568133,48.0925784 C15.2600164,53.6603842 18.7291736,57.8483366 22.8870601,57.8483366 C27.0449465,57.8483366 30.5141037,53.6603842 31.3173068,48.0925784 L14.4568133,48.0925784 Z"
                                            id="Combined-Shape" stroke="#404F54" stroke-width="2" stroke-linecap="round"
                                            fill="#F5F6F7"></path>
                                        <path
                                            d="M21.5763456,34.8367937 C21.5763456,33.1916348 20.2426808,31.85797 18.5975219,31.85797 C16.9523629,31.85797 15.6186981,33.1916348 15.6186981,34.8367937 C15.6186981,36.4819527 16.9523629,37.8156175 18.5975219,37.8156175"
                                            id="Oval-16" stroke="#FFFFFF" stroke-width="2"
                                            stroke-linecap="round"></path>
                                        <path
                                            d="M30.0065924,34.8367937 C30.0065924,33.1916348 28.6729276,31.85797 27.0277687,31.85797 C25.3826097,31.85797 24.0489449,33.1916348 24.0489449,34.8367937 C24.0489449,36.4819527 25.3826097,37.8156175 27.0277687,37.8156175"
                                            id="Oval-16-Copy" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"
                                            transform="translate(27.027769, 34.836794) scale(-1, 1) translate(-27.027769, -34.836794) "></path>
                                        <path
                                            d="M19.2945702,16.4483174 C13.9110715,17.7476221 9.58395544,21.7555185 7.83629469,26.9489338 M7,32.0809939 C7,37.6260119 9.98963058,42.5155311 14.2829362,45.4065619 C14.2820261,45.4797614 14.2815692,45.553118 14.2815692,45.6266261 C14.2815692,52.3764904 18.1343787,57.8483366 22.8870601,57.8483366 C27.6320929,57.8483366 31.4801478,52.3940881 31.492521,45.6592041 C35.9918583,42.8058297 39.1619878,37.7909491 39.1619878,32.0809939 C39.1619878,23.1997062 31.9622816,16 23.0809939,16"
                                            id="Combined-Shape-Copy-5" stroke="#404F54" stroke-width="2"
                                            stroke-linecap="round"></path>
                                        <path d="M21.5763456,48.0925784 L21.5763456,34.4682661" id="Path-32"
                                              stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                        <path d="M24.0489449,48.0925784 L24.0489449,34.4682661" id="Path-32-Copy"
                                              stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"
                                              transform="translate(24.048945, 41.280422) scale(-1, 1) translate(-24.048945, -41.280422) "></path>
                                        <path d="M11.8902915,47.9981137 L33.8838286,47.9981137" id="Path-36"
                                              stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                        <path d="M15.6037684,51.9698787 L30.1686292,51.9698787" id="Path-36-Copy"
                                              stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                        <path d="M17.2940081,54.6351761 L28.5654428,54.7815961" id="Path-36-Copy-2"
                                              stroke="#404F54" stroke-width="2" stroke-linecap="round"></path>
                                        <path d="M23.1341139,10.818077 L23.1341139,0.72040542" id="Path-37"
                                              stroke="#FF8F5C" stroke-width="2" stroke-linecap="round"></path>
                                        <path d="M38.8880202,17.6911238 L43.9290358,11.552452" id="Path-38"
                                              stroke="#FF8F5C" stroke-width="2" stroke-linecap="round"></path>
                                        <path d="M7.7415358,17.8258895 L1.9290358,11.552452" id="Path-39"
                                              stroke="#FF8F5C" stroke-width="2" stroke-linecap="round"></path>
                                    </g>
                                    <g id="Group-5-Copy" transform="translate(293.000000, 60.000000)">
                                        <circle id="Oval-14" fill="#F1F9FD" cx="4" cy="77" r="4"></circle>
                                        <path
                                            d="M0,77 C0,79.209139 1.790861,81 4,81 C6.209139,81 8,79.209139 8,77 C8,74.790861 6.209139,73 4,73"
                                            id="Oval-14-Copy-2" stroke="#404F54" stroke-width="2"
                                            stroke-linecap="round"></path>
                                        <circle id="Oval-14" stroke="#404F54" stroke-width="2" stroke-linecap="round"
                                                fill="#F1F9FD" cx="25" cy="79" r="8"></circle>
                                        <circle id="Oval-14" fill="#F1F9FD" cx="67" cy="44" r="38"></circle>
                                        <path
                                            d="M27,38 C27,58.9868205 44.0131795,76 65,76 L65,76 C85.9868205,76 103,58.9868205 103,38 C103,17.0131795 85.9868205,0 65,0 C58.6945605,0 52.7478165,1.53575847 47.5134139,4.25362973 M38.5200408,10.7453925 C33.3827606,15.737555 29.6521456,22.1695892 27.9795507,29.3901405"
                                            id="Oval-14-Copy" stroke="#404F54" stroke-width="2"
                                            stroke-linecap="round"></path>
                                    </g>
                                </g>
                                <g id="pencil"
                                   transform="translate(359.707100, 98.663097) rotate(-330.000000) translate(-359.707100, -98.663097) translate(341.707100, 68.663097)"
                                   stroke-width="2">
                                    <path
                                        d="M12.542234,45.5774782 C12.542234,44.1944223 13.6679683,43.0732339 15.0464782,43.0732339 L21.7785501,43.0732339 C23.161606,43.0732339 24.4599581,44.1716598 24.6812419,45.5436323 L26.1421215,54.6011707 C26.3621781,55.965534 25.4421433,56.8944053 24.0701708,56.6731214 L15.0126324,55.2122418 C13.6482691,54.9921853 12.542234,53.6880599 12.542234,52.30955 L12.542234,45.5774782 Z"
                                        id="Rectangle-7" stroke="#404F54" stroke-linecap="round"
                                        transform="translate(19.358429, 49.889476) rotate(-315.000000) translate(-19.358429, -49.889476) "></path>
                                    <rect id="Rectangle" stroke="#404F54" stroke-linecap="round" fill="#FF8F5C"
                                          x="11.9081447" y="8.46131107" width="14.9005537" height="41.8760609"
                                          rx="7.45027687"></rect>
                                    <path
                                        d="M15.0984264,16.361353 C15.0984264,14.0109406 17.004146,12.1055549 19.3584216,12.1055549"
                                        id="Rectangle-Copy" stroke="#FFFFFF" stroke-linecap="round"></path>
                                    <path d="M22.2126585,50.8582825 L22.2126585,17.8341013" id="Path-40"
                                          stroke="#FFFFFF" stroke-linecap="round"></path>
                                    <path d="M16.8910322,50.8582825 L16.8910322,22.7022539" id="Path-40-Copy"
                                          stroke="#FFFFFF" stroke-linecap="round"></path>
                                    <rect id="Rectangle-Copy-2" stroke="#404F54" stroke-linecap="round" x="11.9081447"
                                          y="8.46131107" width="14.9005537" height="41.8760609" rx="7.45027687"></rect>
                                    <path d="" id="Path-41" stroke="#FF0000"></path>
                                    <path d="M29.108744,10.1106753 L34.8047961,4.52096056" id="Path-46" stroke="#FF8F5C"
                                          stroke-linecap="round"></path>
                                    <path d="M7.55608476,13.3248081 L0.844865234,4.22211931" id="Path-49"
                                          stroke="#FF8F5C" stroke-linecap="round"></path>
                                    <path d="M14.2163388,4.86070653 L12.7667649,0.535013209" id="Path-50"
                                          stroke="#FF8F5C" stroke-linecap="round"></path>
                                </g>
                                <g id="books-left" transform="translate(21.000000, 228.000000)">
                                    <path d="M58.9747645,29.2200679 L104.331533,29.2200679" id="Path-6" stroke="#E0EAEF"
                                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M38.7812636,34 L104.138032,34" id="Path-6-Copy" stroke="#E0EAEF"
                                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M88.9747645,38.6776695 L104.331533,38.6776695" id="Path-6-Copy-2"
                                          stroke="#E0EAEF" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <polygon id="Rectangle-6" fill="#FF8F5C"
                                             points="94 29 101 29 101 38 97.5401478 34 94 38"></polygon>
                                    <path
                                        d="M31,19 C31,15.1340068 34.1324221,12 37.9950647,12 L105,12 L105,26 L37.9950647,26 C34.1317971,26 31,22.8685323 31,19 L31,19 L31,19 Z"
                                        id="Rectangle-5-Copy" fill="#85DAD2"></path>
                                    <path d="M48.7812636,18 L104.138032,18" id="Path-6-Copy-3" stroke="#5AC6BC"
                                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M31,34 C31,29.0294373 35.0311131,25 39.9998713,25 L105,25 L105,43 L39.9998713,43 C35.0293796,43 31,38.9738272 31,34 L31,34 L31,34 Z"
                                        id="Rectangle-5" stroke="#404F54" stroke-width="2"
                                        stroke-linecap="round"></path>
                                    <path
                                        d="M31,18 C31,14.1340068 34.1324221,11 37.9950647,11 L105,11 L105,25 L37.9950647,25 C34.1317971,25 31,21.8685323 31,18 L31,18 L31,18 Z"
                                        id="Rectangle-5-Copy-3" stroke="#404F54" stroke-width="2"
                                        stroke-linecap="round"></path>
                                    <g id="Group-8" transform="translate(43.000000, 0.000000)" stroke-width="2"
                                       stroke-linecap="round">
                                        <path d="M5.78126357,5 L57.7340923,5" id="Path-6-Copy-4" stroke="#5AC6BC"
                                              stroke-linejoin="round"></path>
                                        <path
                                            d="M0.417738965,5.8638533 C0.417738965,3.0272378 2.71056563,0.727706597 5.55309221,0.727706597 L58,0.727706597 L58,11 L5.55309221,11 C2.71691493,11 0.417738965,8.70233179 0.417738965,5.8638533 L0.417738965,5.8638533 L0.417738965,5.8638533 Z"
                                            id="Rectangle-5-Copy-2" stroke="#404F54"></path>
                                    </g>
                                    <g id="Group-8"
                                       transform="translate(15.926524, 26.457900) rotate(-53.000000) translate(-15.926524, -26.457900) translate(-3.573476, 21.957900)"
                                       stroke-width="2" stroke-linecap="round">
                                        <path d="M3.85619701,4.09090909 L38.5094124,4.09090909" id="Path-6-Copy-4"
                                              stroke="#5AC6BC" stroke-linejoin="round"></path>
                                        <path
                                            d="M0.278638697,4.79769815 C0.278638697,2.47683093 2.15715139,0.595396307 4.48047585,0.595396307 L38.6869452,0.595396307 L38.6869452,9 L4.48047585,9 C2.15986527,9 0.278638697,7.12008964 0.278638697,4.79769815 L0.278638697,4.79769815 L0.278638697,4.79769815 Z"
                                            id="Rectangle-5-Copy-2" stroke="#404F54"></path>
                                    </g>
                                </g>
                                <path
                                    d="M348.718324,21.0094509 C348.718324,21.0094509 349.968321,22.9769981 350.759463,23.7681399 C351.574957,24.5836343 353.538232,25.8293594 353.538232,25.8293594 C353.538232,25.8293594 351.540493,27.1471458 350.759463,27.9281762 C349.933857,28.7537819 348.718324,30.649268 348.718324,30.649268 C348.718324,30.649268 347.494103,28.6933987 346.72888,27.9281762 C345.887467,27.0867625 343.898415,25.8293594 343.898415,25.8293594 C343.898415,25.8293594 345.900355,24.5966651 346.72888,23.7681399 C347.506991,22.9900289 348.718324,21.0094509 348.718324,21.0094509 Z"
                                    id="Polygon-Copy-8" fill="#DAE2E6"></path>
                                <path d="M315.741534,185.62404 L321.887534,180.694004" id="Path-66" stroke="#DAE2E6"
                                      stroke-width="2" stroke-linecap="round" fill="#DAE2E6"></path>
                                <path
                                    d="M362.308042,39.4418969 C362.544999,37.9875521 362.668194,36.4950017 362.668194,34.9736778 C362.668194,19.7439981 350.322099,7.39790327 335.092419,7.39790327 C322.638065,7.39790327 312.112095,15.654299 308.689359,26.9922414"
                                    id="Oval-22-Copy-6" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M367.733043,46.6014825 C367.733043,42.7627772 364.621157,39.6508917 360.782452,39.6508917 C356.943747,39.6508917 353.831861,42.7627772 353.831861,46.6014825"
                                    id="Oval-22-Copy-9" stroke="#DAE2E6" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </section>


    {{--tarifs--}}

    {{--    <section id="price" class=" bg-blue-600 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 pt-20 pb-40">--}}
    {{--        <div class="text-center">--}}
    {{--            <h2 class="text-3xl leading-tight font-bold text-white">choisissez le prix idéal pour vous</h2>--}}
    {{--        </div>--}}

    {{--        <div class="flex flex-col md:flex-row items-start justify-between mt-12">--}}
    {{--            <div class="w-full bg-white shadow-lg rounded-lg p-8 md:mx-2 lg:mx-4">--}}
    {{--                <div>--}}
    {{--                    <h4 class="text-2xl text-blue-600 font-bold leading-tight mb-2">Journalier</h4>--}}
    {{--                    <div class="mb-2 flex items-baseline font-bold">--}}
    {{--                        <span class="text-gray-500 text-xl">Frcfa</span>--}}
    {{--                        <span class="text-gray-500 text-3xl">100</span>--}}
    {{--                        <span class="text-gray-500 text-base">/jour</span>--}}
    {{--                    </div>--}}
    {{--                    <p class="pb-5 border-b">Vous offre un accès illimité aux contenus pour une durée de 1 jour--}}
    {{--                        exactement</p>--}}
    {{--                    <div class="font-semibold mb-2">Vous pouvez:</div>--}}
    {{--                    <ul>--}}
    {{--                        <li class="flex items-center">--}}
    {{--                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"--}}
    {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                <path--}}
    {{--                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>--}}
    {{--                            </svg>--}}
    {{--                            <span>Accès aux cours</span>--}}
    {{--                        </li>--}}
    {{--                        <li class="flex items-center">--}}
    {{--                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"--}}
    {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                <path--}}
    {{--                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>--}}
    {{--                            </svg>--}}
    {{--                            <span>Accès aux exercices</span>--}}
    {{--                        </li>--}}
    {{--                        <li class="flex items-center">--}}
    {{--                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"--}}
    {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                <path--}}
    {{--                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>--}}
    {{--                            </svg>--}}
    {{--                            <span>Accès aux corrige</span>--}}
    {{--                        </li>--}}
    {{--                        <li class="flex items-center">--}}
    {{--                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"--}}
    {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                <path--}}
    {{--                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>--}}
    {{--                            </svg>--}}
    {{--                            <span>Accès aux astuces</span>--}}
    {{--                        </li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--                <div class=" border p-3 mt-2 rounded-lg">--}}
    {{--                    <a--}}
    {{--                        href="#"--}}
    {{--                        class="block text-center bg-blue-600 p-2 text-white font-medium rounded hover:bg-blue-800">--}}
    {{--                        star--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="w-full bg-white shadow-lg rounded-lg px-4 py-6 lg:p-8 md:mx-2 lg:mx-4 mt-4 md:mt-0">--}}
    {{--                <div>--}}
    {{--                    <h4 class="text-2xl text-blue-600 font-bold leading-tight mb-2">Mensuel</h4>--}}
    {{--                    <div class="mb-2 flex items-baseline font-bold">--}}
    {{--                        <span class="text-gray-500 text-xl">Frcfa</span>--}}
    {{--                        <span class="text-gray-500 text-3xl">500</span>--}}
    {{--                        <span class="text-gray-500 text-base">/mois</span>--}}
    {{--                    </div>--}}
    {{--                    <p class="pb-5 border-b">Vous offre un accès illimité aux contenus pour une durée de 30 jours--}}
    {{--                        exactement</p>--}}
    {{--                    <div class="font-semibold mb-2">vous pouvez:</div>--}}
    {{--                    <ul>--}}
    {{--                        <li class="flex items-center">--}}
    {{--                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"--}}
    {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                <path--}}
    {{--                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>--}}
    {{--                            </svg>--}}
    {{--                            <span>Accès aux cours</span>--}}
    {{--                        </li>--}}
    {{--                        <li class="flex items-center">--}}
    {{--                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"--}}
    {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                <path--}}
    {{--                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>--}}
    {{--                            </svg>--}}
    {{--                            <span>Accès aux exercices</span>--}}
    {{--                        </li>--}}
    {{--                        <li class="flex items-center">--}}
    {{--                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"--}}
    {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                <path--}}
    {{--                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>--}}
    {{--                            </svg>--}}
    {{--                            <span>Accès aux corrige</span>--}}
    {{--                        </li>--}}
    {{--                        <li class="flex items-center">--}}
    {{--                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"--}}
    {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                <path--}}
    {{--                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>--}}
    {{--                            </svg>--}}
    {{--                            <span>Accès aux astuces</span>--}}
    {{--                        </li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--                <div--}}
    {{--                    class=" border p-3 mt-2 rounded-lg">--}}
    {{--                    <a--}}
    {{--                        href="#"--}}
    {{--                        class="block text-center bg-blue-600 p-2 text-white font-medium rounded hover:bg-blue-800">--}}
    {{--                        star--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="w-full bg-white shadow-lg rounded-lg px-4 py-6 lg:p-8 md:mx-2 lg:mx-4 mt-4 md:mt-0">--}}
    {{--                <div>--}}
    {{--                    <h4 class="text-2xl text-blue-600 font-bold leading-tight mb-2">Annuel</h4>--}}
    {{--                    <div class="mb-2 flex items-baseline font-bold">--}}
    {{--                        <span class="text-gray-500 text-xl">Frcfa</span>--}}
    {{--                        <span class="text-gray-500 text-3xl">6000</span>--}}
    {{--                        <span class="text-gray-500 text-base">/an</span>--}}
    {{--                    </div>--}}
    {{--                    <p class="pb-5 border-b">Vous offre un accès illimité aux contenus pour une durée de 12 mois--}}
    {{--                        exactement</p>--}}
    {{--                    <div class="font-semibold mb-2">vous pouvez:</div>--}}
    {{--                    <ul>--}}
    {{--                        <li class="flex items-center">--}}
    {{--                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"--}}
    {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                <path--}}
    {{--                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>--}}
    {{--                            </svg>--}}
    {{--                            <span>Accès aux cours</span>--}}
    {{--                        </li>--}}
    {{--                        <li class="flex items-center">--}}
    {{--                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"--}}
    {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                <path--}}
    {{--                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>--}}
    {{--                            </svg>--}}
    {{--                            <span>Accès aux exercices</span>--}}
    {{--                        </li>--}}
    {{--                        <li class="flex items-center">--}}
    {{--                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"--}}
    {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                <path--}}
    {{--                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>--}}
    {{--                            </svg>--}}
    {{--                            <span>Accès aux corrige</span>--}}
    {{--                        </li>--}}
    {{--                        <li class="flex items-center">--}}
    {{--                            <svg fill="currentColor" class="h-3 w-3 mr-2 text-green-500" viewBox="0 0 12 12"--}}
    {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                <path--}}
    {{--                                    d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>--}}
    {{--                            </svg>--}}
    {{--                            <span>Accès aux astuces</span>--}}
    {{--                        </li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--                <div--}}
    {{--                    class=" border p-3 mt-2 rounded-lg">--}}
    {{--                    <a--}}
    {{--                        href="#"--}}
    {{--                        class="block text-center bg-blue-600 p-2 text-white font-medium rounded hover:bg-blue-800">--}}
    {{--                        star--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    {{--    <section class="px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 text-center md:text-left -mt-32">--}}
    <section class="container w-full md:w-3/4 mx-auto my-24 px-4">
        <div
            class="flex flex-col md:flex-row items-center justify-between bg-blue-300 px-12 py-10 rounded-lg shadow-lg">
            <div class="w-full md:w-2/3">
                <h2 class="text-3xl leading-tight font-bold">Soutenez-nous! faites un don</h2>
                {{--                <p class="mt-2 md:max-w-md">--}}
                {{--                    Si vous souhaitez soutenir le site, autrement qu'en souscrivant à un forfait, vous pouvez--}}
                {{--                    aussi faire un don.--}}
                {{--                </p>--}}
                <p class="mt-2 md:max-w-md">
                    Si vous souhaitez soutenir le site, vous pouvez faire un don.
                </p>
            </div>

            <div class="w-full md:w-1/3 md:text-right mt-6 md:mt-0">
                <a href="#" class="inline-block px-6 py-4 bg-blue-600 text-white rounded-lg">je veux faire un don</a>
            </div>
        </div>
    </section>

    {{--    Disponible sur mobile--}}

    <section class="container w-full md:w-3/4 mx-auto mb-4 px-4">
        <div class="flex flex-wrap md:flex-no-wrap justify-center items-center py-4">
            <div class="w-full px-3">
                <h2
                    class="mb-2 text-3xl font-bold text-gray-800">
                    Disponible sur mobile
                </h2>
                {{--                <p class="mb-2 text-gray-700">--}}
                {{--                    bgrfacile est aussi disponible sur les appareils mobiles <strong>android</strong> et--}}
                {{--                    <strong>IOS</strong>.--}}
                {{--                    télecharger gratuitement sur les marchés respectifs.--}}
                {{--                </p>--}}
                <p class="mb-2 text-gray-700">
                    Retrouver l'ensemble du contenus de bgrfacile sur une application mobile. <br>
                </p>
                <div class="flex justify-around mb-4">
                    {{--                    <p class="flex flex-col justify-center items-center">--}}
                    {{--                        <a--}}
                    {{--                            href="#"--}}
                    {{--                            class="rounded-full h-16 w-16 p-4 mb-2 flex items-center justify-center bg-gray-100 shadow-lg">--}}
                    {{--                            <img--}}
                    {{--                                class="w-full"--}}
                    {{--                                src="{{ asset('assets/images/google-play.svg') }}">--}}
                    {{--                        </a>--}}
                    {{--                        <span class="font-bold text-lg text-gray-600">--}}
                    {{--                            Google Play--}}
                    {{--                        </span>--}}
                    {{--                    </p>--}}
                    {{--                    <p class="flex flex-col justify-center items-center">--}}
                    {{--                        <a--}}
                    {{--                            href="#"--}}
                    {{--                            class="rounded-full h-16 w-16 p-4 mb-2 flex items-center justify-center bg-gray-100 shadow-lg">--}}
                    {{--                            <img--}}
                    {{--                                class="w-full"--}}
                    {{--                                src="{{ asset('assets/images/app-store.svg') }}">--}}
                    {{--                        </a>--}}
                    {{--                        <span class="font-bold text-lg text-gray-600">--}}
                    {{--                            App Store--}}
                    {{--                        </span>--}}
                    {{--                    </p>--}}
                    <p class="flex flex-col justify-center items-center">
                        <a
                            href="https://play.google.com/store/apps/details?id=com.bgrfacile.bgrfacile&hl=fr&gl=US"
                            class="rounded-full h-16 w-16 p-4 mb-2 flex items-center justify-center bg-gray-100 shadow-lg">
                            <img
                                class="w-full"
                                src="{{ asset('assets/svg/down-arrow.svg') }}">
                        </a>
                        <span class="font-bold text-lg text-gray-600">
                            telecharger
                        </span>
                    </p>
                </div>
            </div>

            <div class="w-full px-3">
                <svg class="w-full" viewBox="0 0 897 452"
                     version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="IPAD" transform="translate(681.000000, 55.000000)"
                           stroke="#7E89A3">
                            <path
                                d="M202.986,317 L12.097,317 C5.462,317 0.083,311.623 0.083,304.99 L0.083,12.093 C0.083,5.46 5.461,0.083 12.097,0.083 L202.986,0.083 C209.622,0.083 215,5.46 215,12.093 L215,304.99 C215,311.623 209.622,317 202.986,317 Z"
                                id="bezel" stroke-width="2" fill="#FDFDFD"></path>
                            <path
                                d="M202.986,317 L12.097,317 C5.462,317 0.083,311.623 0.083,304.99 L0.083,12.093 C0.083,5.46 5.461,0.083 12.097,0.083 L202.986,0.083 C209.622,0.083 215,5.46 215,12.093 L215,304.99 C215,311.623 209.622,317 202.986,317 Z"
                                id="bezel-2" stroke-width="2" fill="#FDFDFD"></path>
                            <rect id="screen" fill="#FFFFFF" x="17" y="32" width="181.999"
                                  height="252.917"></rect>
                            <circle id="lock" cx="108.021" cy="300.021" r="8.021"></circle>
                            <circle id="camera" cx="106.99" cy="16.99" r="2.99"></circle>
                        </g>
                        <g id="Laptop" transform="translate(1.000000, 1.000000)"
                           stroke="#8492A5">
                            <path
                                d="M594,0 L98,0 C84.50415,0 73,11.0738184 73,24.7901127 L73,351.027995 L619,351.027985 L619,24.7901127 C618.999971,11.0728209 607.537479,0 594,0 Z"
                                id="bezel" stroke-width="2" fill="#FEFEFE"></path>
                            <circle id="webcam" stroke-width="2" cx="347" cy="19"
                                    r="4"></circle>
                            <g id="bottom" transform="translate(0.000000, 351.000000)">
                                <path
                                    d="M640.812,31.01 L51.288,31.01 C20.641,31.01 0,20.494 0,16.022 L0,2.428 C0,1.084 1.335,0 2.995,0 L689.104,0 C690.766,0 692.103,1.084 692.103,2.428 L692.103,16.557 C692.096,20.092 676.112,31.01 640.812,31.01 Z"
                                    id="Shape" stroke-width="2" fill="#FDFDFD"></path>
                                <path d="M0.5,14.5 L690.242676,14.5" id="Line" stroke-linecap="square"></path>
                            </g>
                            <rect id="screen" fill="#FFFFFF" x="95" y="39" width="501.073853"
                                  height="292.009"></rect>
                            <path
                                d="M421,352 L421,355.087 C421,357.288 416.666719,357.952714 413.386719,357.952714 L278.815286,357.952714 C275.364286,357.952714 271,357.289 271,355.087 L271,352"
                                id="touchpad" fill="#FFFFFF"></path>
                        </g>
                        <g id="iphone" transform="translate(576.000000, 177.000000)"
                           stroke="#7E89A3">
                            <path
                                d="M130,257.964 C130,266.797 122.809,273.956 113.938,273.956 L16.063,273.956 C7.192,273.956 0.001,266.797 0.001,257.964 L0.001,16.073 C0.001,7.24 7.192,0.081 16.063,0.081 L113.938,0.081 C122.809,0.081 130,7.24 130,16.073 L130,257.964 L130,257.964 Z"
                                id="bezel" stroke-width="2" fill="#FDFDFD"></path>
                            <rect id="screen" fill="#FFFFFF" x="9" y="36" width="111.93"
                                  height="199.084"></rect>
                            <path
                                d="M77,25.746 C77,26.381 76.561,26.893 76.02,26.893 L55.918,26.893 C55.376,26.893 54.938,26.38 54.938,25.746 L54.938,23.166 C54.938,22.531 55.377,22.019 55.918,22.019 L76.02,22.019 C76.561,22.019 77,22.532 77,23.166 L77,25.746 L77,25.746 Z"
                                id="speaker"></path>
                            <circle id="camera" cx="66" cy="12" r="3"></circle>
                            <ellipse id="lock" cx="65.04" cy="254.001" rx="10.04"
                                     ry="10.001"></ellipse>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!--JS for toggle-->
    <script>
        $('.count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
{{--    <script>--}}
{{--        swal({--}}
{{--            title: "Good job!",--}}
{{--            text: "You clicked the button!",--}}
{{--            icon: "success",--}}
{{--            button: "Aww yiss!",--}}
{{--        });--}}
{{--    </script>--}}
@endsection
