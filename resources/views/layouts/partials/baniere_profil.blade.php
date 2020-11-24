<div class="bg-gray-100 shadow font-bold">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold leading-tight text-gray-900">
            @if(Route::currentRouteNamed('profil.index'))
                Mon compte
            @elseif(Route::currentRouteNamed('profil.edit'))
                Mon compte
            @elseif(Route::currentRouteNamed('profil.myFavoris'))
                Mes favoris
            @elseif(Route::currentRouteNamed('profil.myCourses'))
                Mes cours
            @elseif(Route::currentRouteNamed('profil.myExercises'))
                Mes exercices
            @elseif(Route::currentRouteNamed('profil.myCorrected'))
                Mes corrigés
            @elseif(Route::currentRouteNamed('profil.mySchool'))
                Mon écoles
            @elseif(Route::currentRouteNamed('profil.myDashbord'))
                Dashbord
            @elseif(Route::currentRouteNamed('profil.myFactures'))
                Factures
            @endif
        </h1>
    </div>
</div>
<div class="mx-0 md:mx-16">
    <div class="container mx-auto flex justify-between">
        <ul class="list-reset flex overflow-x-auto text-center border-r border-l">
            <li
                class="{{Route::currentRouteNamed('profil.index')?
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark border-gray-800
            transition duration-500 ease-in-out
            text-gray-800
            shadow-lg':
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark hover:border-gray-800
            transition duration-500 ease-in-out
            text-gray-400 hover:text-gray-800
            hover:shadow-lg'
            }}">
                <a href="{{ route('profil.index') }}"
                   class="text-lg font-bold">Mon profil</a>
            </li>
            <li
                class="{{Route::currentRouteNamed('profil.edit')?
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark border-gray-800
            transition duration-500 ease-in-out
            text-gray-800
            shadow-lg':
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark hover:border-gray-800
            transition duration-500 ease-in-out
            text-gray-400 hover:text-gray-800
            hover:shadow-lg'
            }}">
                <a href="{{ route('profil.edit') }}"
                   class="text-lg font-bold">Editer</a>
            </li>
            <li
                class="{{Route::currentRouteNamed('profil.myFavoris')?
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark border-gray-800
            transition duration-500 ease-in-out
            text-gray-800
            shadow-lg':
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark hover:border-gray-800
            transition duration-500 ease-in-out
            text-gray-400 hover:text-gray-800
            hover:shadow-lg'
            }}">
                <a href="{{ route('profil.myFavoris') }}"
                   class="text-lg font-bold">Favoris</a>
            </li>
            @can('create course')
            <li
                class="{{Route::currentRouteNamed('profil.myCourses')?
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark border-gray-800
            transition duration-500 ease-in-out
            text-gray-800
            shadow-lg':
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark hover:border-gray-800
            transition duration-500 ease-in-out
            text-gray-400 hover:text-gray-800
            hover:shadow-lg'
            }}">
                <a href="{{ route('profil.myCourses') }}"
                   class="text-lg font-bold">Cours</a>
            </li>
            @endcan
            @can('create course')
            <li
                class="{{Route::currentRouteNamed('profil.myExercises')?
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark border-gray-800
            transition duration-500 ease-in-out
            text-gray-800
            shadow-lg':
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark hover:border-gray-800
            transition duration-500 ease-in-out
            text-gray-400 hover:text-gray-800
            hover:shadow-lg'
            }}">
                <a href="{{ route('profil.myExercises') }}"
                   class="text-lg font-bold">Exercice</a>
            </li>
            @endcan
            @can('create course')
            <li
                class="{{Route::currentRouteNamed('profil.myCorrected')?
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark border-gray-800
            transition duration-500 ease-in-out
            text-gray-800
            shadow-lg':
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark hover:border-gray-800
            transition duration-500 ease-in-out
            text-gray-400 hover:text-gray-800
            hover:shadow-lg'
            }}">
                <a href="{{ route('profil.myCorrected') }}"
                   class="text-lg font-bold">Corriger</a>
            </li>
            @endcan
            @can('create course')
            <li
                class="{{Route::currentRouteNamed('profil.mySchool')?
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark border-gray-800
            transition duration-500 ease-in-out
            text-gray-800
            shadow-lg':
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark hover:border-gray-800
            transition duration-500 ease-in-out
            text-gray-400 hover:text-gray-800
            hover:shadow-lg'
            }}">
                <a href="{{ route('profil.mySchool') }}"
                   class="text-lg font-bold">school</a>
            </li>
            @endcan
            @can('create course')
                <li
                    class="{{Route::currentRouteNamed('profil.myDashbord')?
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark border-gray-800
            transition duration-500 ease-in-out
            text-gray-800
            shadow-lg':
            'py-3 px-8  flex justify-center items-center
            border-b-4 border-solid border-grey-dark hover:border-gray-800
            transition duration-500 ease-in-out
            text-gray-400 hover:text-gray-800
            hover:shadow-lg'
            }}">
                    <a href="{{ route('profil.myDashbord') }}"
                       class="text-lg font-bold">Dashbord</a>
                </li>
            @endcan
        </ul>

        <div class="flex-1 ">
            <div
                class="{{Route::currentRouteNamed('profil.myFactures')?
            'h-full flex justify-center items-center
        border-b-4 border-solid  border-gray-800
            transition duration-500 ease-in-out
            text-gray-800
            bg-gray-200 shadow-inner':
            'h-full flex justify-center items-center
        border-b-4 border-solid border-grey-dark hover:border-gray-800
            transition duration-500 ease-in-out
            text-gray-400 hover:text-gray-800
            bg-gray-200 hover:shadow-lg'
            }}">
                <a
                    href="{{ route('profil.myFactures') }}"
                    class=" py-3 px-8 text-lg font-bold">
                    Factures
                </a>
            </div>
        </div>
    </div>

</div>
