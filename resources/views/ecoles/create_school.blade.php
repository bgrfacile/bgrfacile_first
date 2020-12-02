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
    <div class="intro-y box py-10 sm:py-20 mt-5">
        <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20">
            <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full button text-white bg-theme-1">1</button>
                <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Create New Account</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200 dark:bg-dark-1">2</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Setup Your Profile</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200 dark:bg-dark-1">3</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Setup Your Business Details</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200 dark:bg-dark-1">4</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Setup Billing Account</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200 dark:bg-dark-1">5</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Finalize your purchase</div>
            </div>
            <div class="wizard__line hidden lg:block w-2/3 bg-gray-200 dark:bg-dark-1 absolute mt-5"></div>
        </div>
        <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
            <div class="font-medium text-base">Profile Settings</div>
            <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">From</div>
                    <input type="text" class="input w-full border flex-1" placeholder="example@gmail.com">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">To</div>
                    <input type="text" class="input w-full border flex-1" placeholder="example@gmail.com">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Subject</div>
                    <input type="text" class="input w-full border flex-1" placeholder="Important Meeting">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Has the Words</div>
                    <input type="text" class="input w-full border flex-1" placeholder="Job, Work, Documentation">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Doesn't Have</div>
                    <input type="text" class="input w-full border flex-1" placeholder="Job, Work, Documentation">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Size</div>
                    <select class="input w-full border flex-1">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button class="button w-24 justify-center block bg-gray-200 text-gray-600 dark:bg-dark-1 dark:text-gray-300">Previous</button>
                    <button class="button w-24 justify-center block bg-theme-1 text-white ml-2">Next</button>
                </div>
            </div>
        </div>
    </div>
@endsection
