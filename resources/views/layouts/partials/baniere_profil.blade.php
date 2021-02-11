{{--<div class="bg-gray-100 shadow font-bold">--}}
{{--    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--        <h1 class="text-3xl font-bold leading-tight text-gray-900">--}}
{{--            @if(Route::currentRouteNamed('profil.index'))--}}
{{--                Mon compte--}}
{{--            @elseif(Route::currentRouteNamed('profil.edit'))--}}
{{--                Mon compte--}}
{{--            @elseif(Route::currentRouteNamed('profil.myFavoris'))--}}
{{--                Mes favoris--}}
{{--            @elseif(Route::currentRouteNamed('profil.myCourses'))--}}
{{--                Mes cours--}}
{{--            @elseif(Route::currentRouteNamed('profil.myExercises'))--}}
{{--                Mes exercices--}}
{{--            @elseif(Route::currentRouteNamed('profil.myCorrected'))--}}
{{--                Mes corrigés--}}
{{--            @elseif(Route::currentRouteNamed('profil.mySchool'))--}}
{{--                Mon écoles--}}
{{--            @elseif(Route::currentRouteNamed('profil.myDashbord'))--}}
{{--                Dashbord--}}
{{--            @elseif(Route::currentRouteNamed('profil.myFactures'))--}}
{{--                Factures--}}
{{--            @endif--}}
{{--        </h1>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="mx-0 md:mx-16">--}}
{{--    <div class="container mx-auto flex justify-between">--}}
{{--        <ul class="list-reset flex overflow-x-auto text-center border-r border-l">--}}
{{--            <li--}}
{{--                class="{{Route::currentRouteNamed('profil.index')?--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-800--}}
{{--            shadow-lg':--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark hover:border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-400 hover:text-gray-800--}}
{{--            hover:shadow-lg'--}}
{{--            }}">--}}
{{--                <a href="{{ route('profil.index') }}"--}}
{{--                   class="text-lg font-bold">Mon profil</a>--}}
{{--            </li>--}}
{{--            <li--}}
{{--                class="{{Route::currentRouteNamed('profil.edit')?--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-800--}}
{{--            shadow-lg':--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark hover:border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-400 hover:text-gray-800--}}
{{--            hover:shadow-lg'--}}
{{--            }}">--}}
{{--                <a href="{{ route('profil.edit') }}"--}}
{{--                   class="text-lg font-bold">Editer</a>--}}
{{--            </li>--}}
{{--            <li--}}
{{--                class="{{Route::currentRouteNamed('profil.myFavoris')?--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-800--}}
{{--            shadow-lg':--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark hover:border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-400 hover:text-gray-800--}}
{{--            hover:shadow-lg'--}}
{{--            }}">--}}
{{--                <a href="{{ route('profil.myFavoris') }}"--}}
{{--                   class="text-lg font-bold">Favoris</a>--}}
{{--            </li>--}}
{{--            @can('create course')--}}
{{--            <li--}}
{{--                class="{{Route::currentRouteNamed('profil.myCourses')?--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-800--}}
{{--            shadow-lg':--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark hover:border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-400 hover:text-gray-800--}}
{{--            hover:shadow-lg'--}}
{{--            }}">--}}
{{--                <a href="{{ route('profil.myCourses') }}"--}}
{{--                   class="text-lg font-bold">Cours</a>--}}
{{--            </li>--}}
{{--            @endcan--}}
{{--            @can('create course')--}}
{{--            <li--}}
{{--                class="{{Route::currentRouteNamed('profil.myExercises')?--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-800--}}
{{--            shadow-lg':--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark hover:border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-400 hover:text-gray-800--}}
{{--            hover:shadow-lg'--}}
{{--            }}">--}}
{{--                <a href="{{ route('profil.myExercises') }}"--}}
{{--                   class="text-lg font-bold">Exercice</a>--}}
{{--            </li>--}}
{{--            @endcan--}}
{{--            @can('create course')--}}
{{--            <li--}}
{{--                class="{{Route::currentRouteNamed('profil.myCorrected')?--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-800--}}
{{--            shadow-lg':--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark hover:border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-400 hover:text-gray-800--}}
{{--            hover:shadow-lg'--}}
{{--            }}">--}}
{{--                <a href="{{ route('profil.myCorrected') }}"--}}
{{--                   class="text-lg font-bold">Corriger</a>--}}
{{--            </li>--}}
{{--            @endcan--}}
{{--            @can('create course')--}}
{{--            <li--}}
{{--                class="{{Route::currentRouteNamed('profil.mySchool')?--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-800--}}
{{--            shadow-lg':--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark hover:border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-400 hover:text-gray-800--}}
{{--            hover:shadow-lg'--}}
{{--            }}">--}}
{{--                <a href="{{ route('profil.mySchool') }}"--}}
{{--                   class="text-lg font-bold">school</a>--}}
{{--            </li>--}}
{{--            @endcan--}}
{{--            @can('create course')--}}
{{--                <li--}}
{{--                    class="{{Route::currentRouteNamed('profil.myDashbord')?--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-800--}}
{{--            shadow-lg':--}}
{{--            'py-3 px-8  flex justify-center items-center--}}
{{--            border-b-4 border-solid border-grey-dark hover:border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-400 hover:text-gray-800--}}
{{--            hover:shadow-lg'--}}
{{--            }}">--}}
{{--                    <a href="{{ route('profil.myDashbord') }}"--}}
{{--                       class="text-lg font-bold">Dashbord</a>--}}
{{--                </li>--}}
{{--            @endcan--}}
{{--        </ul>--}}

{{--        <div class="flex-1 ">--}}
{{--            <div--}}
{{--                class="{{Route::currentRouteNamed('profil.myFactures')?--}}
{{--            'h-full flex justify-center items-center--}}
{{--        border-b-4 border-solid  border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-800--}}
{{--            bg-gray-200 shadow-inner':--}}
{{--            'h-full flex justify-center items-center--}}
{{--        border-b-4 border-solid border-grey-dark hover:border-gray-800--}}
{{--            transition duration-500 ease-in-out--}}
{{--            text-gray-400 hover:text-gray-800--}}
{{--            bg-gray-200 hover:shadow-lg'--}}
{{--            }}">--}}
{{--                <a--}}
{{--                    href="{{ route('profil.myFactures') }}"--}}
{{--                    class=" py-3 px-8 text-lg font-bold">--}}
{{--                    Factures--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}
<div class="bg-gray-100 px-8">
    <div class="container w-full mx-auto max-w-7xl px-2">

        <!-- header profil -->
        <div class="flex items-center justify-between py-4">
            <div class="flex items-center">
                <div class="text-gray-700">
                    <svg class="h-4 fill-current" aria-hidden="true" focusable="false"
                         data-prefix="far" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 496 512" data-fa-i2svg="">
                        <path fill="currentColor"
                              d="M248 104c-53 0-96 43-96 96s43 96 96 96 96-43 96-96-43-96-96-96zm0 144c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm0-240C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-49.7 0-95.1-18.3-130.1-48.4 14.9-23 40.4-38.6 69.6-39.5 20.8 6.4 40.6 9.6 60.5 9.6s39.7-3.1 60.5-9.6c29.2 1 54.7 16.5 69.6 39.5-35 30.1-80.4 48.4-130.1 48.4zm162.7-84.1c-24.4-31.4-62.1-51.9-105.1-51.9-10.2 0-26 9.6-57.6 9.6-31.5 0-47.4-9.6-57.6-9.6-42.9 0-80.6 20.5-105.1 51.9C61.9 339.2 48 299.2 48 256c0-110.3 89.7-200 200-200s200 89.7 200 200c0 43.2-13.9 83.2-37.3 115.9z"></path>
                    </svg>
                </div>
                <div class="flex items-center ml-2 text-lg">
                    {{ auth()->user()->name }}
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <!-- Suivre -->
{{--                <div class="font-medium text-xs text-gray-900">--}}
{{--                    <div class="flex items-center border rounded-md shadow-sm">--}}
{{--                        <button class="py-1 px-2 border-r hover:bg-gray-300 rounded-l flex items-center">--}}
{{--                            <span class="text-gray-700">--}}
{{--                                <svg class="h-4 mr-1" viewBox="0 0 16 16" fill="currentColor"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path fill-rule="evenodd"--}}
{{--                                          d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>--}}
{{--                                </svg>--}}
{{--                            </span>--}}
{{--                            <div>Suivre</div>--}}

{{--                        </button>--}}
{{--                        <a href="#" class="py-1 px-3 hover:text-blue-600">0</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <!-- fin du header profil -->

        <!-- Repo nav -->
        <nav class="border-b">
            <ul class="flex items-center text-sm">
                <li>
                    <a href="{{ route('profil.index') }}"
                       class="flex items-center space-x-2 py-2 px-3 border-b-2 border-red-400 font-semibold hover:border-gray-400 transition ease-in-out duration-150">
                        <span class="text-gray-600">
                            <svg class="h-4 fill-current" aria-hidden="true" focusable="false"
                                 data-prefix="far" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 496 512" data-fa-i2svg="">
                    <path fill="currentColor"
                          d="M248 104c-53 0-96 43-96 96s43 96 96 96 96-43 96-96-43-96-96-96zm0 144c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm0-240C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-49.7 0-95.1-18.3-130.1-48.4 14.9-23 40.4-38.6 69.6-39.5 20.8 6.4 40.6 9.6 60.5 9.6s39.7-3.1 60.5-9.6c29.2 1 54.7 16.5 69.6 39.5-35 30.1-80.4 48.4-130.1 48.4zm162.7-84.1c-24.4-31.4-62.1-51.9-105.1-51.9-10.2 0-26 9.6-57.6 9.6-31.5 0-47.4-9.6-57.6-9.6-42.9 0-80.6 20.5-105.1 51.9C61.9 339.2 48 299.2 48 256c0-110.3 89.7-200 200-200s200 89.7 200 200c0 43.2-13.9 83.2-37.3 115.9z"></path>
                </svg>
                        </span>
                        <span>Mon profil</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profil.edit') }}"
                       class="flex items-center space-x-2 py-2 px-3 border-b-2 border-transparent hover:border-gray-400 transition ease-in-out duration-150">
                        <span class="text-gray-600">
                            <svg class="h-4 text-900 fs-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-edit" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"></path>
                            </svg>
                        </span>
                        <span>Editer profil</span>
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a href="{{ route('profil.myFavoris') }}"--}}
{{--                       class="flex items-center space-x-2 py-2 px-3 border-b-2 border-transparent hover:border-gray-400 transition ease-in-out duration-150">--}}
{{--                        <span class="text-gray-600">--}}
{{--                            <svg class="h-4 fill-current" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>--}}
{{--                                </svg>--}}
{{--                        </span>--}}
{{--                        <span>Favoris</span>--}}
{{--                        --}}{{--                    <span class="px-2 rounded-full bg-gray-300 text-gray-700">12</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('profil.myCourses') }}"--}}
{{--                       class="flex items-center space-x-2 py-2 px-3 border-b-2 border-transparent hover:border-gray-400 transition ease-in-out duration-150">--}}
{{--                        <span class="text-gray-600">--}}
{{--                            <svg class="h-4 fill-current" viewBox="0 0 16 16">--}}
{{--                                <path fill-rule="evenodd"--}}
{{--                                      d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zM6.379 5.227A.25.25 0 006 5.442v5.117a.25.25 0 00.379.214l4.264-2.559a.25.25 0 000-.428L6.379 5.227z">--}}
{{--                                </path>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                        <span>Cours</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('profil.myExercises') }}"--}}
{{--                       class="flex items-center space-x-2 py-2 px-3 border-b-2 border-transparent hover:border-gray-400 transition ease-in-out duration-150">--}}
{{--                        <span class="text-gray-600">--}}
{{--                            <svg class="h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
{{--                                 stroke="currentColor">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                      d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                        <span>Exercices</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('profil.myCorrected') }}  "--}}
{{--                       class="flex items-center space-x-2 py-2 px-3 border-b-2 border-transparent hover:border-gray-400 transition ease-in-out duration-150">--}}
{{--                        <span class="text-gray-600">--}}
{{--                            <svg class="h-4 fill-current" viewBox="0 0 16 16">--}}
{{--                                <path fill-rule="evenodd"--}}
{{--                                      d="M0 1.75A.75.75 0 01.75 1h4.253c1.227 0 2.317.59 3 1.501A3.744 3.744 0 0111.006 1h4.245a.75.75 0 01.75.75v10.5a.75.75 0 01-.75.75h-4.507a2.25 2.25 0 00-1.591.659l-.622.621a.75.75 0 01-1.06 0l-.622-.621A2.25 2.25 0 005.258 13H.75a.75.75 0 01-.75-.75V1.75zm8.755 3a2.25 2.25 0 012.25-2.25H14.5v9h-3.757c-.71 0-1.4.201-1.992.572l.004-7.322zm-1.504 7.324l.004-5.073-.002-2.253A2.25 2.25 0 005.003 2.5H1.5v9h3.757a3.75 3.75 0 011.994.574z">--}}
{{--                                </path>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                        <span>Corriger</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('profil.mySchool') }}"--}}
{{--                       class="flex items-center space-x-2 py-2 px-3 border-b-2 border-transparent hover:border-gray-400 transition ease-in-out duration-150">--}}
{{--                        <span class="text-gray-600">--}}
{{--                            <svg class="h-4 fill-current" aria-hidden="true"--}}
{{--                                 focusable="false" data-prefix="fas" data-icon="school" role="img"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path--}}
{{--                                    fill="currentColor"--}}
{{--                                    d="M0 224v272c0 8.84 7.16 16 16 16h80V192H32c-17.67 0-32 14.33-32 32zm360-48h-24v-40c0-4.42-3.58-8-8-8h-16c-4.42 0-8 3.58-8 8v64c0 4.42 3.58 8 8 8h48c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8zm137.75-63.96l-160-106.67a32.02 32.02 0 0 0-35.5 0l-160 106.67A32.002 32.002 0 0 0 128 138.66V512h128V368c0-8.84 7.16-16 16-16h96c8.84 0 16 7.16 16 16v144h128V138.67c0-10.7-5.35-20.7-14.25-26.63zM320 256c-44.18 0-80-35.82-80-80s35.82-80 80-80 80 35.82 80 80-35.82 80-80 80zm288-64h-64v320h80c8.84 0 16-7.16 16-16V224c0-17.67-14.33-32-32-32z"></path></svg>--}}
{{--                        </span>--}}
{{--                        <span>Ecoles</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                       class="flex items-center space-x-2 py-2 px-3 border-b-2 border-transparent hover:border-gray-400 transition ease-in-out duration-150">--}}
{{--                        <span class="text-gray-600">--}}
{{--                            <svg class="h-4 fill-current" viewBox="0 0 16 16">--}}
{{--                                <path fill-rule="evenodd"--}}
{{--                                      d="M1.5 1.75a.75.75 0 00-1.5 0v12.5c0 .414.336.75.75.75h14.5a.75.75 0 000-1.5H1.5V1.75zm14.28 2.53a.75.75 0 00-1.06-1.06L10 7.94 7.53 5.47a.75.75 0 00-1.06 0L3.22 8.72a.75.75 0 001.06 1.06L7 7.06l2.47 2.47a.75.75 0 001.06 0l5.25-5.25z">--}}
{{--                                </path>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                        <span>Dashboard</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('profil.myFactures') }}"--}}
{{--                       class="flex items-center space-x-2 py-2 px-3 border-b-2 border-transparent hover:border-gray-400 transition ease-in-out duration-150">--}}
{{--                        <span class="text-gray-600">--}}
{{--                            <svg class="h-4 fill-current" aria-hidden="true"--}}
{{--                                 focusable="false" data-prefix="far" data-icon="credit-card" role="img"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path--}}
{{--                                    fill="currentColor"--}}
{{--                                    d="M527.9 32H48.1C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48.1 48h479.8c26.6 0 48.1-21.5 48.1-48V80c0-26.5-21.5-48-48.1-48zM54.1 80h467.8c3.3 0 6 2.7 6 6v42H48.1V86c0-3.3 2.7-6 6-6zm467.8 352H54.1c-3.3 0-6-2.7-6-6V256h479.8v170c0 3.3-2.7 6-6 6zM192 332v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v40c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12z"></path></svg>--}}
{{--                        </span>--}}
{{--                        <span>Factures</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </nav>
        <!-- End of repo nav -->

    </div>
</div>

