
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold leading-tight text-gray-900">
            Profil
        </h1>
    </div>
    <div class="px-16">
        <ul class="list-reset flex overflow-x-auto">
            <li class="text-center py-3 px-8 border-b-2 border-solid border-grey-dark">
                <a href="{{ url('/profil') }}"
                   class="text-black">Sur moi</a>
            </li>
            <li class="text-center py-3 px-8">
                <a href="{{ route('profil.favoris') }}"
                   class="hover:text-black">Favories</a>
            </li>
            <li class="text-center py-3 px-8 ">
                <a href="{{ route('my_course') }}"
                   class="hover:text-black">Cours</a>
            </li>
            <li class="text-center py-3 px-8">
                <a href="{{ route('my_course') }}"
                   class="hover:text-black">Exercice</a>
            </li>
            <li class="text-center py-3 px-8">
                <a href="{{ route('my_course') }}"
                   class="hover:text-black">Corriger</a>
            </li>
            <li class="text-center py-3 px-8">
                <a href="{{ route('profil.ecole') }}"
                   class="hover:text-black">Etablissement</a>
            </li>
            @can('create course')
                <li class="text-center py-3 px-8">
                    <a href="{{ route('profil.ecole') }}"
                       class="hover:text-black">Dashbord</a>
                </li>
            @endcan
        </ul>
    </div>
</header>
