@extends('layouts.front')

@section('baniere')
@endsection

@section('content')
    {{--presentation--}}
    <section>
        <div class="container w-full md:w-3/4 mx-auto px-4 py-8 text-center">
            <h1 class="text-5xl font-bold">écoles en ligne</h1>
            <p class="mt-2 text-gray-600 text-xl mb-8">
                l'école en ligne est un espace virtuel crée pour les écoles traditionnelles.Chaque école le désirant
                peut créé son espace en ligne.
            </p>
            <p class="flex justify-center items-center flex-wrap mb-4">
                <a
                    href="{{ route('schools.create') }}"
                    class="py-2 px-4 bg-blue-600 text-sm text-white rounded-md shadow-lg hover:underline">
                    Créé son école
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
                    <span>Les étudiants</span>
                </h2>
                <p class="mt-2 text-gray-600">
                    Sur la plateforme est présent des étudiants de divers horizon sans distinctions. Mais dans le cadre
                    d'une école en ligne, seuls les étudiants possédant les accès nécessaires peuvent y accéder. Un
                    étudiant qui appartient à une école en ligne voit dans son profil de nouvelle fonctionnalité lui
                    permettant d'interagir avec sa scolarité.
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
                    <span>Les professeurs</span>
                </h2>
                <p class="mt-2 text-gray-600">
                    Sur la plateforme, chaque formateur inscrit est libre et indépendant de partager ces compétences
                    sans aucune attache. Mais dans le cadre d'une école en ligne, un professeur a la possibilité
                    d'adhérer à une ou plusieurs écoles. Après adhésion à une école un professeur a la possibilité
                    d'administrer une classe et d'autre fonctionnalité propre à une école en ligne.
                </p>
            </div>
        </div>
    </section>

    {{--    lier les etapes de la creation d'une ecole aux fonctionnalites lier a une ecole--}}
    <section id="creeSonEcole" class="bg-gray-100 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12">
        <div class="flex flex-col md:flex-row lg:-mx-8">
            <div class="w-full lg:w-1/2 lg:px-8">
                <h6 class="text-sm uppercase font-semibold tracking-widest"></h6>
                <h2 class="flex items-center  text-3xl leading-tight font-bold mt-4">
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
                    <span>Comment créé son école en ligne</span>
                </h2>
                <p class="mb-2 mt-2 leading-relaxed">
                    La création se fait en plusieurs étapes.
                </p>
                <div class="w-full h-72 rounded-lg">
                    <img
                        src="#"
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
                        <h4 class="text-xl font-bold">Remplir les informations nécessaires</h4>
                        <p class="mt-2 leading-relaxed">
                            un formulaire de création est fourni lorsqu'une école traditionnelle désirée crée son espace
                            en ligne. Renseigner les informations exactes sur votre structure est une étape essentielle
                            lors de la création de son espace en ligne.
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
                            Après le remplissage du formulaire une demande est envoyée à <strong>l'équipe
                                bgrfacile</strong>. La seconde
                            étape consiste au traitement et la validation de ces données par l'équipe.
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
                        <h4 class="text-xl font-bold">La rencontre</h4>
                        <p class="mt-2 leading-relaxed">
                            Une fois qu'une demande est acceptée, un <strong>mail</strong> est envoyé à l'établissement
                            pour une
                            rencontre avec <strong>l'équipe bgrfacile.</strong>
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
        <div class="flex flex-col md:flex-row mt-8 text-center md:-mx-4">
            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="77" height="80" viewBox="0 0 77 80">
                    <path d="M51 0a26 26 0 1 1-26 26A26 26 0 0 1 51 0z" fill="#bee3f8"></path>
                    <path
                        d="M18.151 80L15.2 77.577c-.405-.332-9.919-8.389-9.919-30.638 0-1.361-.746-2.485-1.778-4.042A17.122 17.122 0 0 1 0 32.542a14.367 14.367 0 0 1 4.356-10.315A14.564 14.564 0 0 1 14.616 18h.3a14.593 14.593 0 0 1 9.649 3.9.828.828 0 0 0 1.121 0 14.588 14.588 0 0 1 9.647-3.894h.3A14.564 14.564 0 0 1 45.9 22.227a14.363 14.363 0 0 1 4.356 10.314 16.084 16.084 0 0 1-3.606 10.4c-1.074 1.493-1.681 2.4-1.681 3.6a69.56 69.56 0 0 1-.125 4.163 14.746 14.746 0 0 1 7.98 5.134A14.523 14.523 0 0 1 56 64.96a14.652 14.652 0 1 1-29.3 0 14.532 14.532 0 0 1 1.4-6.253c-1.624-2.965-2.871-3.195-3.215-3.195-1.087 0-2.87 2.007-4.4 6.492a47.01 47.01 0 0 0-2.326 14.176V80zm23.2-26.1A11.061 11.061 0 1 0 52.39 64.96 11.064 11.064 0 0 0 41.348 53.9zM14.634 21.62a11 11 0 0 0-7.751 3.188 10.78 10.78 0 0 0-3.273 7.734c0 3.968 1.475 6.2 2.9 8.351 1.171 1.77 2.382 3.6 2.382 6.046 0 10.668 2.348 17.68 4.318 21.684a28.438 28.438 0 0 0 1.59 2.826 50.021 50.021 0 0 1 2.26-10.617c2-5.846 4.7-8.936 7.819-8.936 1.342 0 3.366.6 5.386 3.472a14.646 14.646 0 0 1 10.979-5.082c.07-1.241.106-2.5.106-3.743 0-2.43 1.2-4.1 2.361-5.709a12.463 12.463 0 0 0 2.926-8.293 10.779 10.779 0 0 0-3.273-7.733 10.986 10.986 0 0 0-7.736-3.19h-.229a10.992 10.992 0 0 0-7.266 2.932 4.45 4.45 0 0 1-6.025 0 10.988 10.988 0 0 0-7.265-2.932c-.067.002-.137.002-.209.002zm26.65 51.232l-6.084-6.14a4.522 4.522 0 0 1 0-6.381 4.5 4.5 0 0 1 6.1-.252 4.512 4.512 0 0 1 6.1 6.638l-6.123 6.134zM38.39 62.625a.892.892 0 0 0-.635.263.9.9 0 0 0 0 1.272l3.537 3.569 3.563-3.569a.9.9 0 0 0 0-1.272.9.9 0 0 0-1.269 0l-2.281 2.284-2.28-2.284a.9.9 0 0 0-.635-.263z"
                        fill="#4299e1"></path>
                </svg>

                <h4 class="text-xl font-bold">Teeth Whitening</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="85" height="80" viewBox="0 0 85 80">
                    <path d="M59 0a26 26 0 1 1-26 26A26 26 0 0 1 59 0z" fill="#bee3f8"></path>
                    <path
                        d="M36 80a163.974 163.974 0 0 1-34.335-3.612L0 76.031V60.4a.159.159 0 0 0 0-.022v-.031V54.806v-.118l.036-2.052h71.925L72 54.688v21.345l-1.665.355A163.974 163.974 0 0 1 36 80zM4.224 67.124v5.53A160.1 160.1 0 0 0 36 75.823a160.115 160.115 0 0 0 31.774-3.169v-5.531a7.732 7.732 0 0 1-3.536.848 7.828 7.828 0 0 1-5.647-2.42 7.73 7.73 0 0 1-5.648 2.42A7.828 7.828 0 0 1 47.3 65.55a7.73 7.73 0 0 1-5.648 2.42A7.828 7.828 0 0 1 36 65.55a7.8 7.8 0 0 1-11.3 0 7.8 7.8 0 0 1-11.3 0 7.8 7.8 0 0 1-9.184 1.573zM60.7 56.813V60.3a3.536 3.536 0 0 0 7.072 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zM71.961 45.33H.039L0 43.279v-5.608-.052-15.684l1.665-.357a165.051 165.051 0 0 1 68.67 0l1.665.357v15.711a.073.073 0 0 0 0 .014v5.616l-.037 2.051zM64.24 34.174a3.521 3.521 0 0 0-3.536 3.5v3.482h7.072v-3.485a3.521 3.521 0 0 0-3.536-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.076v-3.485a3.521 3.521 0 0 0-3.536-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.072v-3.485a3.521 3.521 0 0 0-3.528-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.071v-3.485a3.52 3.52 0 0 0-3.523-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.07v-3.485a3.52 3.52 0 0 0-3.518-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482H11.3v-3.485a3.52 3.52 0 0 0-3.539-3.497zM52.944 30a7.831 7.831 0 0 1 5.648 2.419 7.807 7.807 0 0 1 9.185-1.573v-5.532a160.805 160.805 0 0 0-63.551 0v5.53a7.8 7.8 0 0 1 9.184 1.572A7.832 7.832 0 0 1 19.056 30a7.731 7.731 0 0 1 5.644 2.416A7.832 7.832 0 0 1 30.352 30 7.731 7.731 0 0 1 36 32.416a7.8 7.8 0 0 1 11.295 0A7.836 7.836 0 0 1 52.944 30z"
                        fill="#4299e1"></path>
                </svg>

                <h4 class="text-xl font-bold">Oral Surgery</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="65" height="80" viewBox="0 0 65 80">
                    <path d="M39 0a26 26 0 1 1-26 26A26 26 0 0 1 39 0z" fill="#bee3f8"></path>
                    <path
                        d="M24.572 80a5.474 5.474 0 0 1-5.447-5.486c0-5.663-.011-10.083-.026-14.329l-.006-1.825h3.659V32.767a7.441 7.441 0 1 1 3.614 0v25.586h3.653v16.154A5.477 5.477 0 0 1 24.572 80zm-1.837-10.719v5.232a1.834 1.834 0 1 0 3.667-.005v-5.226zm3.67-7.286H22.72v.647l.006 3h3.677v-3.649zm-1.846-40.354a3.855 3.855 0 1 0 3.827 3.859 3.845 3.845 0 0 0-3.827-3.859zM7.453 80a5.474 5.474 0 0 1-5.447-5.486L2 58.36h3.636V32.768A7.5 7.5 0 0 1 7.44 18v3.641a3.791 3.791 0 0 0-2.7 1.131 3.859 3.859 0 0 0 2.705 6.578h1.807v29h3.615v1.61c.022 7.122.032 12.017.031 14.549A5.477 5.477 0 0 1 7.453 80zM5.618 69.281v5.232a1.834 1.834 0 1 0 3.667-.005c0-1.388 0-3.244-.007-5.226zm3.643-7.286L5.614 62v3.642H9.27c-.002-1.305-.006-2.6-.009-3.647z"
                        fill="#4299e1"></path>
                </svg>

                <h4 class="text-xl font-bold">Painless Dentistry</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="82" height="80" viewBox="0 0 82 80">
                    <path d="M56 0a26 26 0 1 1-26 26A26 26 0 0 1 56 0z" fill="#bee3f8"></path>
                    <path
                        d="M38.7 80a7.608 7.608 0 0 1-7.6-6.99 7.288 7.288 0 0 1-2.96-2.712c-.845-1.173-1.155-1.49-1.726-1.49s-.882.317-1.726 1.489c-.888 1.231-2.229 3.092-4.876 3.092s-3.988-1.859-4.875-3.089c-.852-1.18-1.162-1.5-1.737-1.5s-.881.317-1.725 1.489c-.888 1.231-2.229 3.092-4.876 3.092s-3.987-1.859-4.874-3.089C.881 69.12.571 68.8 0 68.8v-3.816c2.647 0 3.988 1.86 4.875 3.091.845 1.172 1.155 1.49 1.726 1.49s.882-.317 1.725-1.489c.888-1.231 2.229-3.092 4.876-3.092s3.989 1.86 4.876 3.091c.844 1.172 1.154 1.49 1.726 1.49s.881-.317 1.725-1.489c.888-1.231 2.229-3.092 4.877-3.092 2.3 0 3.6 1.349 4.668 2.806V40.643l2.152-4.615h-4.947V18h21.668l9.225 4.4v2.61H66v3.818h-6.828V31.1L50 36.029h-6.167l2.493 4.55v5.446h2.49v3.817h-2.49v2.673h2.49v3.818h-2.49v16.14A7.585 7.585 0 0 1 38.7 80zm-3.757-37.03v29.5a3.758 3.758 0 0 0 7.515 0v-29.5zm2.542-6.943l-1.457 3.125h5.121l-1.712-3.125zm-5.339-14.209V32.21h16.866l6.288-3.382V24.8l-6.238-2.982z"
                        fill="#4299e1"></path>
                </svg>

                <h4 class="text-xl font-bold">Periodontics</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>
        </div>
        <div class="flex flex-col md:flex-row mt-8 text-center md:-mx-4">
            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="77" height="80" viewBox="0 0 77 80">
                    <path d="M51 0a26 26 0 1 1-26 26A26 26 0 0 1 51 0z" fill="#bee3f8"></path>
                    <path
                        d="M18.151 80L15.2 77.577c-.405-.332-9.919-8.389-9.919-30.638 0-1.361-.746-2.485-1.778-4.042A17.122 17.122 0 0 1 0 32.542a14.367 14.367 0 0 1 4.356-10.315A14.564 14.564 0 0 1 14.616 18h.3a14.593 14.593 0 0 1 9.649 3.9.828.828 0 0 0 1.121 0 14.588 14.588 0 0 1 9.647-3.894h.3A14.564 14.564 0 0 1 45.9 22.227a14.363 14.363 0 0 1 4.356 10.314 16.084 16.084 0 0 1-3.606 10.4c-1.074 1.493-1.681 2.4-1.681 3.6a69.56 69.56 0 0 1-.125 4.163 14.746 14.746 0 0 1 7.98 5.134A14.523 14.523 0 0 1 56 64.96a14.652 14.652 0 1 1-29.3 0 14.532 14.532 0 0 1 1.4-6.253c-1.624-2.965-2.871-3.195-3.215-3.195-1.087 0-2.87 2.007-4.4 6.492a47.01 47.01 0 0 0-2.326 14.176V80zm23.2-26.1A11.061 11.061 0 1 0 52.39 64.96 11.064 11.064 0 0 0 41.348 53.9zM14.634 21.62a11 11 0 0 0-7.751 3.188 10.78 10.78 0 0 0-3.273 7.734c0 3.968 1.475 6.2 2.9 8.351 1.171 1.77 2.382 3.6 2.382 6.046 0 10.668 2.348 17.68 4.318 21.684a28.438 28.438 0 0 0 1.59 2.826 50.021 50.021 0 0 1 2.26-10.617c2-5.846 4.7-8.936 7.819-8.936 1.342 0 3.366.6 5.386 3.472a14.646 14.646 0 0 1 10.979-5.082c.07-1.241.106-2.5.106-3.743 0-2.43 1.2-4.1 2.361-5.709a12.463 12.463 0 0 0 2.926-8.293 10.779 10.779 0 0 0-3.273-7.733 10.986 10.986 0 0 0-7.736-3.19h-.229a10.992 10.992 0 0 0-7.266 2.932 4.45 4.45 0 0 1-6.025 0 10.988 10.988 0 0 0-7.265-2.932c-.067.002-.137.002-.209.002zm26.65 51.232l-6.084-6.14a4.522 4.522 0 0 1 0-6.381 4.5 4.5 0 0 1 6.1-.252 4.512 4.512 0 0 1 6.1 6.638l-6.123 6.134zM38.39 62.625a.892.892 0 0 0-.635.263.9.9 0 0 0 0 1.272l3.537 3.569 3.563-3.569a.9.9 0 0 0 0-1.272.9.9 0 0 0-1.269 0l-2.281 2.284-2.28-2.284a.9.9 0 0 0-.635-.263z"
                        fill="#4299e1"></path>
                </svg>

                <h4 class="text-xl font-bold">Teeth Whitening</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="85" height="80" viewBox="0 0 85 80">
                    <path d="M59 0a26 26 0 1 1-26 26A26 26 0 0 1 59 0z" fill="#bee3f8"></path>
                    <path
                        d="M36 80a163.974 163.974 0 0 1-34.335-3.612L0 76.031V60.4a.159.159 0 0 0 0-.022v-.031V54.806v-.118l.036-2.052h71.925L72 54.688v21.345l-1.665.355A163.974 163.974 0 0 1 36 80zM4.224 67.124v5.53A160.1 160.1 0 0 0 36 75.823a160.115 160.115 0 0 0 31.774-3.169v-5.531a7.732 7.732 0 0 1-3.536.848 7.828 7.828 0 0 1-5.647-2.42 7.73 7.73 0 0 1-5.648 2.42A7.828 7.828 0 0 1 47.3 65.55a7.73 7.73 0 0 1-5.648 2.42A7.828 7.828 0 0 1 36 65.55a7.8 7.8 0 0 1-11.3 0 7.8 7.8 0 0 1-11.3 0 7.8 7.8 0 0 1-9.184 1.573zM60.7 56.813V60.3a3.536 3.536 0 0 0 7.072 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zm-11.3 0V60.3a3.536 3.536 0 0 0 7.071 0v-3.487zM71.961 45.33H.039L0 43.279v-5.608-.052-15.684l1.665-.357a165.051 165.051 0 0 1 68.67 0l1.665.357v15.711a.073.073 0 0 0 0 .014v5.616l-.037 2.051zM64.24 34.174a3.521 3.521 0 0 0-3.536 3.5v3.482h7.072v-3.485a3.521 3.521 0 0 0-3.536-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.076v-3.485a3.521 3.521 0 0 0-3.536-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.072v-3.485a3.521 3.521 0 0 0-3.528-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.071v-3.485a3.52 3.52 0 0 0-3.523-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482h7.07v-3.485a3.52 3.52 0 0 0-3.518-3.497zm-11.3 0a3.521 3.521 0 0 0-3.536 3.5v3.482H11.3v-3.485a3.52 3.52 0 0 0-3.539-3.497zM52.944 30a7.831 7.831 0 0 1 5.648 2.419 7.807 7.807 0 0 1 9.185-1.573v-5.532a160.805 160.805 0 0 0-63.551 0v5.53a7.8 7.8 0 0 1 9.184 1.572A7.832 7.832 0 0 1 19.056 30a7.731 7.731 0 0 1 5.644 2.416A7.832 7.832 0 0 1 30.352 30 7.731 7.731 0 0 1 36 32.416a7.8 7.8 0 0 1 11.295 0A7.836 7.836 0 0 1 52.944 30z"
                        fill="#4299e1"></path>
                </svg>

                <h4 class="text-xl font-bold">Oral Surgery</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="65" height="80" viewBox="0 0 65 80">
                    <path d="M39 0a26 26 0 1 1-26 26A26 26 0 0 1 39 0z" fill="#bee3f8"></path>
                    <path
                        d="M24.572 80a5.474 5.474 0 0 1-5.447-5.486c0-5.663-.011-10.083-.026-14.329l-.006-1.825h3.659V32.767a7.441 7.441 0 1 1 3.614 0v25.586h3.653v16.154A5.477 5.477 0 0 1 24.572 80zm-1.837-10.719v5.232a1.834 1.834 0 1 0 3.667-.005v-5.226zm3.67-7.286H22.72v.647l.006 3h3.677v-3.649zm-1.846-40.354a3.855 3.855 0 1 0 3.827 3.859 3.845 3.845 0 0 0-3.827-3.859zM7.453 80a5.474 5.474 0 0 1-5.447-5.486L2 58.36h3.636V32.768A7.5 7.5 0 0 1 7.44 18v3.641a3.791 3.791 0 0 0-2.7 1.131 3.859 3.859 0 0 0 2.705 6.578h1.807v29h3.615v1.61c.022 7.122.032 12.017.031 14.549A5.477 5.477 0 0 1 7.453 80zM5.618 69.281v5.232a1.834 1.834 0 1 0 3.667-.005c0-1.388 0-3.244-.007-5.226zm3.643-7.286L5.614 62v3.642H9.27c-.002-1.305-.006-2.6-.009-3.647z"
                        fill="#4299e1"></path>
                </svg>

                <h4 class="text-xl font-bold">Painless Dentistry</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 md:mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-6" width="82" height="80" viewBox="0 0 82 80">
                    <path d="M56 0a26 26 0 1 1-26 26A26 26 0 0 1 56 0z" fill="#bee3f8"></path>
                    <path
                        d="M38.7 80a7.608 7.608 0 0 1-7.6-6.99 7.288 7.288 0 0 1-2.96-2.712c-.845-1.173-1.155-1.49-1.726-1.49s-.882.317-1.726 1.489c-.888 1.231-2.229 3.092-4.876 3.092s-3.988-1.859-4.875-3.089c-.852-1.18-1.162-1.5-1.737-1.5s-.881.317-1.725 1.489c-.888 1.231-2.229 3.092-4.876 3.092s-3.987-1.859-4.874-3.089C.881 69.12.571 68.8 0 68.8v-3.816c2.647 0 3.988 1.86 4.875 3.091.845 1.172 1.155 1.49 1.726 1.49s.882-.317 1.725-1.489c.888-1.231 2.229-3.092 4.876-3.092s3.989 1.86 4.876 3.091c.844 1.172 1.154 1.49 1.726 1.49s.881-.317 1.725-1.489c.888-1.231 2.229-3.092 4.877-3.092 2.3 0 3.6 1.349 4.668 2.806V40.643l2.152-4.615h-4.947V18h21.668l9.225 4.4v2.61H66v3.818h-6.828V31.1L50 36.029h-6.167l2.493 4.55v5.446h2.49v3.817h-2.49v2.673h2.49v3.818h-2.49v16.14A7.585 7.585 0 0 1 38.7 80zm-3.757-37.03v29.5a3.758 3.758 0 0 0 7.515 0v-29.5zm2.542-6.943l-1.457 3.125h5.121l-1.712-3.125zm-5.339-14.209V32.21h16.866l6.288-3.382V24.8l-6.238-2.982z"
                        fill="#4299e1"></path>
                </svg>

                <h4 class="text-xl font-bold">Periodontics</h4>
                <p class="mt-1">Let us show you how our experience.</p>
                <a href="#" class="block mt-4">Read More</a>
            </div>
        </div>
    </section>

    {{-- offre bgrfacile price--}}
    <section class="bg-blue-600 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 pt-20 pb-40">
        <div class="text-center">
            <h2 class="text-3xl leading-tight font-bold text-white">differentes forfait pour les écoles</h2>
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
    </section>

@endsection
