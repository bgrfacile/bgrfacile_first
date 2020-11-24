@extends('layouts.baseCreate_school')

@section('content')
    <form>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            {{--            Présentation de la page--}}
            <div class="text-center lg:w-2/3 lg:mx-auto w-full py-">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium	 text-black font-mono">
                    Formulaire de création d'une école en ligne.
                </h1>
                <p class=" mb-8 font-normal">
                    Il est obligatoire de remplir toutes les informations demandées.
                </p>
            </div>
            <div class="hidden sm:block">
                <div class="py-8">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>

            {{--            information de base renseigner l'identité de votre écolex    --}}
            <div class="md:grid md:grid-cols-3 md:gap-6 ">
                {{--                gauche--}}
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="title-font sm:text-3xl text-2xl mb-4 font-medium	 text-black font-mono">
                            Informations générales sur l'école
                        </h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Les informations renseigner ici seront visibles sur la page de votre école.
                        </p>
                    </div>
                </div>

                {{--                droite--}}
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                {{--                                nom de la structure--}}
                                <div class="col-span-6 sm:col-span-4">
                                    <label
                                        class="block font-medium text-sm text-gray-700"
                                        for="nom"><span>Nom de la structure</span>
                                    </label>
                                    <input class="form-input rounded-md shadow-sm mt-1 block w-full" id="nom"
                                           type="text" autocomplete="nom">
                                    <div class="mt-2" style="display: none;">
                                        <p class="text-sm text-red-600">
                                        </p>
                                    </div>
                                </div>
                                {{--                               taille de la structure--}}
                                <div class="col-span-6 sm:col-span-4">
                                    <select
                                        name="level"
                                        id="level"
                                        class="border p-2 rounded w-full w-full">
                                        <option value="0">Taille de la structure</option>
                                        <option value="1">200-300</option>
                                        <option value="1">300-400</option>
                                        <option value="1">500-600</option>
                                        <option value="1">600-700</option>
                                    </select>
                                    <div class="mt-2" style="display: none;">
                                        <p class="text-sm text-red-600">
                                        </p>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <label
                                        class="block font-medium text-sm text-gray-700">
                                        <span>Logo de la structure</span>
                                    </label>
                                    <div class="mt-2 h-16 w-16">
                                        <img class="w-full" src="https://ui-avatars.com/api/?name=benaja"
                                             alt="">
                                    </div>

                                    <button type="button"
                                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2">
                                        Selectionner une image
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{--                        bordure du bas--}}
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block">
                <div class="py-8">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>

            {{--            information de base renseigner l'identité de votre écolex    --}}
            <div class="md:grid md:grid-cols-3 md:gap-6 ">
                {{--                gauche--}}
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="title-font sm:text-3xl text-2xl mb-4 font-medium	 text-black font-mono">
                            Informations supplémentaire
                        </h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Les informations renseignées ici serviront à la gestion et la prise en charge de l'administration de la structure.
                        </p>
                    </div>
                </div>

                {{--                droite--}}
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 min-h-56 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                            </div>
                        </div>
                        {{--                        bordure du bas--}}
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block">
                <div class="py-8">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>


        </div>
    </form>
@endsection
