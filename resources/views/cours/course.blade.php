@extends('layouts.front')

@section('baniere')
    {{--    <div class="w-full bg-cover bg-center"--}}
    {{--         style="height:32rem; background-image: url(https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">--}}
    {{--        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">--}}
    {{--            <div class="text-center">--}}
    {{--                <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl mb-9">section cours <span--}}
    {{--                        class="underline text-blue-400"></span></h1>--}}
    {{--                <a href="#bar"--}}
    {{--                   class="mt-4 px-4 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">--}}
    {{--                    visiter--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection


@section('content')
    <div x-data="{ cartOpen: false , isOpen: false }" class="bg-white">
        <header>
            <div class="container mx-auto px-6 py-3">
                <div class="flex items-center justify-between">
                    <div class="hidden w-full text-gray-600 md:flex md:items-center">
                        <svg class="h-5 w-5" viewBox="0 0 64 64">
                            <path
                                d="m61 13h-3v-3a1 1 0 0 0 -1-1h-21a4.994 4.994 0 0 0 -4 2.03 4.994 4.994 0 0 0 -4-2.03h-21a1 1 0 0 0 -1 1v3h-3a1 1 0 0 0 -1 1v40a1 1 0 0 0 1 1h58a1 1 0 0 0 1-1v-40a1 1 0 0 0 -1-1zm-57 40v-38h2v35a1 1 0 0 0 1 1h21a3.01 3.01 0 0 1 2.82 2zm27-2.97a4.924 4.924 0 0 0 -3-1.03h-20v-38h20a3.009 3.009 0 0 1 3 3zm1 1-.03-.03h.06zm1-37.03a3.009 3.009 0 0 1 3-3h20v38h-20a4.924 4.924 0 0 0 -3 1.03zm27 39h-26.82a3.01 3.01 0 0 1 2.82-2h21a1 1 0 0 0 1-1v-35h2z"/>
                            <path
                                d="m47 13a4 4 0 0 0 -4 4v24a1 1 0 0 0 .14.51l3 5a1 1 0 0 0 1.72 0l3-5a1 1 0 0 0 .14-.51v-24a4 4 0 0 0 -4-4zm0 31.06-1.65-2.76 1.65-1.1 1.65 1.1zm2-4.93-1-.67v-13.46h-2v13.46l-1 .67v-16.13h4zm0-18.13h-4v-2h4zm-4-4a2 2 0 0 1 4 0z"/>
                            <path d="m10 14h19v2h-19z"/>
                            <path d="m10 18h11v2h-11z"/>
                            <path d="m23 18h6v2h-6z"/>
                            <path d="m10 22h4v2h-4z"/>
                            <path d="m16 22h13v2h-13z"/>
                        </svg>
                        <span class="mx-1 text-lg">formation actuel</span>
                    </div>
                    <div class="w-full text-gray-700 md:text-center text-2xl font-semibold">
                        Cours
                    </div>
                    <div class="flex items-center justify-end w-full">
                        <button @click="cartOpen = !cartOpen"
                                class="text-gray-600 focus:outline-none mx-4 sm:mx-0 px-3 border">
                            Changer de formation
                        </button>

                        <div class="flex sm:hidden">
                            <button @click="isOpen = !isOpen" type="button"
                                    class="text-gray-600 hover:text-gray-500 focus:outline-none focus:text-gray-500"
                                    aria-label="toggle menu">
                                <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                    <path fill-rule="evenodd"
                                          d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <nav :class="isOpen ? '' : 'hidden'" class="sm:flex sm:justify-center sm:items-center mt-4">
                    <div class="flex flex-col sm:flex-row">
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Cours</a>
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Exercices</a>
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Corrigés</a>
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Astuces</a>
                    </div>
                </nav>
                <div class="relative mt-6 max-w-lg mx-auto">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
                    <input
                        class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Recherche">
                </div>
            </div>
        </header>
        {{--    aside formation ou cycle--}}
        <div :class="cartOpen ? 'translate-x-0 ease-out' : 'translate-x-full ease-in'"
             class="fixed right-0 top-0 max-w-xs w-full h-full px-6 py-4 transition duration-300 transform overflow-y-auto bg-white border-l-2 border-gray-300">
            <div class="flex items-center justify-between">
                <h3 class="text-2xl font-medium text-gray-700">Cycle ou Formation</h3>
                <button @click="cartOpen = !cartOpen" class="text-gray-600 focus:outline-none">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <hr class="my-3">
            @foreach($trainings as $training)
                <div class="flex justify-between mt-6">
                    <div class="flex">
                        <img class="h-20 w-20 object-cover rounded"
                             src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"
                             alt="">
                        <div class="mx-3">
                            <h3 class="text-sm text-gray-600">{{ $training->name }}</h3>
                            <div class="flex items-center mt-2">
                                <span class="text-gray-700 mx-2">{{ $training->diploma }} </span>
                            </div>
                        </div>
                    </div>
                    <span class="text-gray-600">
                    <a
                        class="bg-gray-100"
                        href="">
                        click
                    </a>
                </span>
                </div>
            @endforeach

            <a
                href="#"
                class="flex items-center justify-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                <span>Les programmes</span>
                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
        <main class="my-8">
            <div class="container mx-auto px-6">
                <div class="text-gray-700 text-lg font-medium mb-4">
                    <div class="inline-block relative text-center">
                        <div
                            class="text-white focus:outline-none mx-4 sm:mx-0 px-3 py-2 border-gray-400 rounded shadow bg-blue-700">
                            formation ou cycle
                        </div>
                    </div>
                    /
                    <div class="inline-block relative">
                        <select
                            class="appearance-none text-gray-600 focus:outline-none mx-4 sm:mx-0 px-3 py-2 pr-8 border border-gray-400 hover:border-gray-500 rounded shadow ">
                            <option disabled selected>niveau</option>
                            @foreach($levels as $level)
                                <option value="{{$level->name}}">{{$level->name}}</option>
                            @endforeach
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                    /
                    <div class="inline-block relative">
                        <select
                            class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option disabled selected>matieres</option>
                            @foreach($subjects as $subject)
                                <option value="{{$subject->name}}">{{$subject->name}}</option>
                            @endforeach
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                    /
                    <div class="inline-block relative">
                        <button
                            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            recharger
                        </button>
                    </div>
                </div>

                <span class="mt-3 text-xl text-gray-500">200+</span>

                {{--                container de cours--}}
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    @foreach($courses as $course)
                        <div class="w-full max-w-sm mx-auto rounded-md transition-all duration-150 ">
                            <div
                                class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl">
                                <div class="md:flex-shrink-0">
                                    <img
                                        src='https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'
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


                {{--            pagnination--}}
                <div class="flex justify-center">
                    <div class="flex rounded-md mt-8">
                        <a href="#"
                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-blue-500 hover:text-white"><span>Previous</a></a>
                        <a href="#"
                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>1</span></a>
                        <a href="#"
                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>2</span></a>
                        <a href="#"
                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>3</span></a>
                        <a href="#"
                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 rounded-r hover:bg-blue-500 hover:text-white"><span>Next</span></a>
                    </div>
                </div>
            </div>
        </main>

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
