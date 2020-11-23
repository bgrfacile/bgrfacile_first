@extends('layouts.base')

@section('baniere')
    <div class="w-full bg-cover bg-center"
         style="height:32rem; background-image: url(https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl mb-9">section cours <span
                        class="underline text-blue-400"></span></h1>
                <a href="#bar"
                   class="mt-4 px-4 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    visiter
                </a>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="bg-gray-200 pb-12">
        <nav id="bar"
             class="flex flex-wrap items-center bg-gray-200 sticky top-0 z-50 shadow mb-5">
            <ul class="flex-1 flex items-center">
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="MS-nav-section inline-flex justify-center items-center w-full h-full">
                        Astuces
                    </a>
                </li>
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="MS-nav-section MS-nav-active inline-flex justify-center items-center w-full h-full">
                        Cours
                    </a>
                </li>
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="MS-nav-section inline-flex justify-center items-center w-full h-full">
                        Exercices
                    </a>
                </li>
                <li class="w-1/4 h-12">
                    <a href="#"
                       class="MS-nav-section inline-flex justify-center items-center w-full h-full">
                        Corrigés
                    </a>
                </li>
            </ul>
            <form class="flex items-center h-12 w-full sm:w-auto md:w-auto lg:w-auto">
                <input
                    class="appearance-none w-full h-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="username"
                    type="search" placeholder="recherche...">
                <button type="submit" class="bg-black hover:bg-blue-700 text-white font-bold py-2 px-4 h-12 w-12">
                    <svg class="inline-block h-4" viewBox="0 0 12 12" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.7197 10.3078L9.18343 7.77151C9.86852 6.73645 10.1448 5.48385 9.95863 4.25664C9.77248 3.02943 9.13719 1.9151 8.17598 1.12976C7.21477 0.344416 5.99614 -0.0559507 4.75646 0.00630775C3.51678 0.0685662 2.3444 0.589013 1.46671 1.46671C0.589013 2.3444 0.0685662 3.51678 0.00630775 4.75646C-0.0559507 5.99614 0.344416 7.21477 1.12976 8.17598C1.9151 9.13719 3.02943 9.77248 4.25664 9.95863C5.48385 10.1448 6.73645 9.86852 7.77151 9.18343L10.3078 11.7197C10.4961 11.9016 10.7483 12.0022 11.0101 12C11.272 11.9977 11.5224 11.8927 11.7075 11.7075C11.8927 11.5224 11.9977 11.272 12 11.0101C12.0022 10.7483 11.9016 10.4961 11.7197 10.3078ZM2.02697 5.02256C2.02697 4.43009 2.20266 3.85092 2.53182 3.3583C2.86098 2.86568 3.32882 2.48172 3.8762 2.25499C4.42357 2.02827 5.02588 1.96894 5.60697 2.08453C6.18806 2.20011 6.72182 2.48542 7.14076 2.90436C7.5597 3.3233 7.845 3.85706 7.96059 4.43815C8.07618 5.01924 8.01685 5.62155 7.79012 6.16892C7.56339 6.71629 7.17944 7.18414 6.68682 7.5133C6.1942 7.84246 5.61503 8.01815 5.02256 8.01815C4.22808 8.01815 3.46614 7.70254 2.90436 7.14076C2.34257 6.57898 2.02697 5.81704 2.02697 5.02256Z"
                            fill="white"/>
                    </svg>
                </button>
            </form>
        </nav>

        <div class="container w-full mx-auto px-2 sm:px-4 md:px-8 lg:px-12">
            <div
                class="block sm:block md:block lg:grid xl:grid grid-cols-1 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-4">
                <div class="col-span-4 sm:col-span-1 md:col-span-1 lg:col-span-1 ">
                    <section class="mb-5 text-center">
                        <h3 class="MS-bold w-full bg-white p-3 uppercase">formation</h3>
                        <a href="#modal_formation" data-modal="1"
                           class="MS-js-modal MS-bold block w-full text-white bg-black uppercase p-3 cursor-pointer">
                            collège
                        </a>
                        <aside id="modal_formation" class="modal z-50 " style="display: none" aria-hidden="true"
                               role="dialog" aria-labelledby="titleModal">
                            <div
                                class="MS-js-modal-stop modal-wrapper z-50 h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">
                                {{--                                <button class="MS-js-modal-close">close</button>--}}
                                <div class="flex items-center">
                                    <div
                                        class="flex w-10/12 h-auto py-3  text-2xl font-bold">
                                        Sélèctionner une formation
                                    </div>
                                    <div class="MS-js-modal-close flex w-1/12 h-auto justify-center cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </div>
                                </div>

                                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                                    @for ($i = 0; $i < 10; $i++)
                                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80')">
                                                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                                    <svg class="h-5 w-5" viewBox="0 0 512 512"><path d="m512 256c0 141.386719-114.613281 256-256 256s-256-114.613281-256-256 114.613281-256 256-256 256 114.613281 256 256zm0 0" fill="#4a7aff"/><path d="m512 256c0-18.816406-2.050781-37.148438-5.902344-54.808594l-78.632812-78.636718-342.929688 274.890624 106.128906 106.128907c20.859376 5.488281 42.753907 8.425781 65.335938 8.425781 141.386719 0 256-114.613281 256-256zm0 0" fill="#0053bf"/><path d="m84.535156 365.40625h342.929688v32.039062h-342.929688zm0 0" fill="#ffce00"/><path d="m256 365.40625h171.464844v32.039062h-171.464844zm0 0" fill="#fdba12"/><path d="m321.695312 122.554688c-18.738281 0-37.132812 5.054687-53.242187 14.632812l-12.453125 7.40625-12.453125-7.40625c-16.109375-9.578125-34.5-14.632812-53.242187-14.632812h-105.769532v244.851562h105.769532c18.738281 0 37.132812 5.054688 53.242187 14.632812l12.453125 7.40625 12.453125-7.40625c16.109375-9.578124 34.5-14.632812 53.242187-14.632812h105.769532v-244.851562zm0 0" fill="#fff"/><path d="m321.695312 122.554688h105.769532v244.851562h-105.769532c-18.738281 0-37.132812 5.054688-53.242187 14.632812l-12.453125 7.40625v-244.851562l12.453125-7.40625c16.109375-9.578125 34.5-14.632812 53.242187-14.632812zm0 0" fill="#e9edf5"/><path d="m114.308594 155.667969h112.714844v30h-112.714844zm0 0" fill="#cdd2e1"/><path d="m114.308594 209h112.714844v30h-112.714844zm0 0" fill="#cdd2e1"/><path d="m114.308594 262.332031h112.714844v30h-112.714844zm0 0" fill="#afb4c8"/><path d="m114.308594 315.667969h112.714844v30h-112.714844zm0 0" fill="#afb4c8"/><path d="m396.464844 256c0 30.226562-24.503906 54.730469-54.734375 54.730469-30.226563 0-54.730469-24.503907-54.730469-54.730469s24.503906-54.730469 54.730469-54.730469c30.230469 0 54.734375 24.503907 54.734375 54.730469zm0 0" fill="#fe6a16"/><path d="m287.003906 256c0-.0625-.003906-.03125-.003906 0 0 30.226562 24.503906 54.730469 54.730469 54.730469 30.230469 0 54.734375-24.503907 54.734375-54.730469 0-.03125-.003906-.0625-.003906 0zm0 0" fill="#f24500"/><path d="m321.5 222.765625 53.464844 33.234375-53.464844 33.234375zm0 0" fill="#fff"/><path d="m321.5 256v33.234375l53.464844-33.234375zm0 0" fill="#e9edf5"/></svg>
                                                </button>
                                            </div>
                                            <div class="px-5 py-3">
                                                <h3 class="text-gray-700 uppercase">Formation {{ $i }}</h3>
                                                <span class="text-gray-500 mt-2">le diplome obtenue est ...</span>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </aside>
                    </section>
                    <section class="mb-5 text-center">
                        <h3 class="MS-bold w-full bg-white p-3 uppercase">niveau</h3>
                        <div class="MS-bold w-full uppercase p-3 cursor-pointer">
                            <form action="#">
                                <div class="bg-gray-200">
                                    <div class="flex flex-col items-center justify-center">
                                        <div class="flex flex-col">
                                            <label class="inline-flex items-center mt-3">
                                                <input type="radio" class="form-checkbox h-5 w-5 text-blue-600"
                                                       checked name="niveau">
                                                <span class="ml-2 text-gray-700">3eme</span>
                                            </label>
                                            <label class="inline-flex items-center mt-3">
                                                <input type="radio" class="form-checkbox h-5 w-5 text-blue-600" name="niveau">
                                                <span class="ml-2 text-gray-700">4eme</span>
                                            </label>
                                            <label class="inline-flex items-center mt-3">
                                                <input type="radio" class="form-checkbox h-5 w-5 text-blue-600" name="niveau">
                                                <span class="ml-2 text-gray-700">5eme</span>
                                            </label>
                                            <label class="inline-flex items-center mt-3">
                                                <input type="radio" class="form-checkbox h-5 w-5 text-blue-600" name="niveau">
                                                <span class="ml-2 text-gray-700">6eme</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    <section class="mb-5 text-center">
                        <h3 class="MS-bold w-full bg-white p-3 uppercase">programe</h3>
                        <div class="w-full uppercase p-3">
                            pas de programme trouvé.
                        </div>
                    </section>
                </div>

                <div class="flex flex-col grid-cols-1 sm:col-span-3 md:col-span-3 lg:col-span-3">
                    {{--                    slide-carousel--}}
                    @include('cours.slide-cours')

                    <div class="grid md:grid-cols-3 gap-4 px-2 xl:px-0 md:px-0">
                        @foreach($courses as $course)
                            <div class="transition-all duration-150 flex ">
                                <div
                                    class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl">
                                    <div class="md:flex-shrink-0">
                                        <img
                                            src="{{ $course->image }}"
                                            alt=""
                                            class="object-fill w-full rounded-lg rounded-b-none md:h-56">
                                    </div>
                                    <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
                                        <span class="text-xs font-medium text-blue-600 uppercase">
                                         Notes
                                        </span>
                                        <div class="flex flex-row items-center">
                                            <div
                                                class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                </svg>
                                                <span>1.5k</span>
                                            </div>

                                            <div
                                                class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                                </svg>
                                                <span>25</span>
                                            </div>

                                            <div class="text-xs font-medium text-gray-500 flex flex-row items-center">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                                </svg>
                                                <span>{{ $course->like }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="border-gray-300">
                                    <div class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                                            <a href="{{ route('cours.show',['cour'=>$course->id]) }}" class="hover:underline">
                                            <h2 class="text-3xl font-bold tracking-normal text-gray-800">
                                                {{ $course->name }}
                                            </h2>
                                        </a>
                                    </div>
                                    <hr class="border-gray-300">
                                    <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify text-gray-700">
                                        {{ $course->description }}
                                    </p>
                                    <hr class="border-gray-300">
                                    <section class="px-4 py-2 mt-2">
                                        <div class="flex items-center justify-between">
                                            <div class="flex overflow-hidden">
                                                <img class="inline-block h-6 w-6 rounded-full text-white shadow-solid"
                                                     src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                     alt="">
                                                <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid"
                                                     src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                     alt="">
                                                <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid"
                                                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                                                     alt="">
                                                <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid"
                                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                     alt="">
                                            </div>
                                            <p class="mt-1 text-xs text-gray-600">9 minutes read</p>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        const like = document.querySelectorAll('.like');
        like.forEach(link => {
            let countLike = 0;
            link.addEventListener('click', () => {
                if (countLike === 0) {
                    link.classList.toggle('anim-like');
                    countLike = 1;
                    link.style.backgroundPosition = 'right';
                } else {
                    countLike = 0;
                    link.style.backgroundPosition = 'left';
                }
            });
            link.addEventListener('animationend', () => {
                link.classList.toggle('anim-like');
            })
        });
    </script>
    <script>
        let modal = null;
        const focusableSelector = 'button, a, input, textarea';
        let focusables = [];
        let previouslyFocusedElement = null;
        const openModal = function (e) {
            e.preventDefault();
            e.stopPropagation();
            modal = document.querySelector(e.target.getAttribute('href'));
            focusables = Array.from(modal.querySelectorAll(focusableSelector));
            previouslyFocusedElement = document.querySelector(':focus');
            modal.style.display = null;
            focusables[0].focus();
            modal.removeAttribute('aria-hidden');
            modal.setAttribute('aria-modal', 'true');
            modal.addEventListener('click', closeModal);
            modal.querySelector('.MS-js-modal-close').addEventListener('click', closeModal);
            modal.querySelector('.MS-js-modal-stop').addEventListener('click', stopPropagation);
        };

        const closeModal = function (e) {
            if (modal === null) return
            if (previouslyFocusedElement !== null) {
                previouslyFocusedElement.focus()
            }
            e.preventDefault();
            e.stopPropagation();
            window.setTimeout(function () {
                modal.style.display = "none";
                modal = null;
            }, 500);
            // modal.style.display = "none";
            modal.setAttribute('aria-hidden', 'true');
            modal.removeAttribute('aria-modal');
            modal.removeEventListener('click', closeModal);
            modal.querySelector('.MS-js-modal-close').removeEventListener('click', closeModal)
            modal.querySelector('.MS-js-modal-stop').removeEventListener('click', stopPropagation);
            // modal = null;
        };

        const stopPropagation = function (e) {
            e.stopPropagation()
        };

        const focusInModal = function (e) {
            e.preventDefault();
            let index = focusables.findIndex(f => f === modal.querySelector(':focus'))
            if (e.shitkey === true) {
                index--;
            } else {
                index++;
            }
            if (index >= focusables.length) {
                index = 0
            }
            if (index < 0) {
                index = focusables.length - 1
            }
            focusables[index].focus()
        };

        document.querySelectorAll('.MS-js-modal').forEach(a => {
            a.addEventListener('click', openModal)
        });
        window.addEventListener('keydown', function (e) {
            if (e.key === "Escape" || e.key === "Esc") {
                closeModal(e)
            }
            if (e.key === "Tab" && modal != null) {
                focusInModal(e);
            }
        })
    </script>
@endsection
