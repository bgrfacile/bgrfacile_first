@extends('layouts.base')

@section('baniere')
    @include('layouts.partials.baniere_profil')
@endsection

@section('content')
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0"><h3 class="text-lg font-medium text-gray-900">
                            Informations sur le profil
                        </h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Mettez à jour les informations de profil et l'adresse e-mail de votre compte.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form>
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-4">
                                        @csrf
                                        <label
                                            class="block font-medium text-sm text-gray-700"
                                            for="photo">
                                            <span>Photo</span>
                                        </label>
                                        <div class="mt-2 h-16 w-16">
                                            <img
                                                class="w-full"
                                                src="{{ auth()->user()->profile_photo_path }}"
                                                alt="{{ auth()->user()->name }}">
                                        </div>
                                        <div class="mt-2" style="display: none;"><span
                                                class="block rounded-full w-20 h-20"
                                                style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(&quot;null&quot;);"></span>
                                        </div>
                                        <button type="button"
                                                class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2">
                                            Select A New Photo
                                        </button>
                                        <div class="mt-2" style="display: none;"><p class="text-sm text-red-600">

                                            </p></div>
                                    </div>
                                    <div class="col-span-6 sm:col-span-4"><label
                                            class="block font-medium text-sm text-gray-700" for="name"><span>Name</span></label>
                                        <input class="form-input rounded-md shadow-sm mt-1 block w-full" id="name"
                                               type="text" autocomplete="name">
                                        <div class="mt-2" style="display: none;"><p class="text-sm text-red-600">

                                            </p></div>
                                    </div>
                                    <div class="col-span-6 sm:col-span-4"><label
                                            class="block font-medium text-sm text-gray-700"
                                            for="email"><span>Email</span></label> <input
                                            class="form-input rounded-md shadow-sm mt-1 block w-full" id="email"
                                            type="email">
                                        <div class="mt-2" style="display: none;"><p class="text-sm text-red-600">

                                            </p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <div class="mr-3">
                                    <div class="text-sm text-gray-600" style="display: none;">
                                        Saved.
                                    </div>
                                </div>
                                <button type="submit"
                                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="hidden sm:block">
                <div class="py-8">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-3 md:gap-6 mt-10 sm:mt-0">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0"><h3 class="text-lg font-medium text-gray-900">
                            Mettre à jour le mot de passe
                        </h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Assurez-vous que votre compte utilise un mot de passe long et aléatoire pour rester
                            sécurisé.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form>
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-4"><label
                                            class="block font-medium text-sm text-gray-700"
                                            for="current_password"><span>Current Password</span></label> <input
                                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                                            id="current_password" type="password" autocomplete="current-password">
                                        <div class="mt-2" style="display: none;"><p class="text-sm text-red-600">

                                            </p></div>
                                    </div>
                                    <div class="col-span-6 sm:col-span-4"><label
                                            class="block font-medium text-sm text-gray-700" for="password"><span>New Password</span></label>
                                        <input class="form-input rounded-md shadow-sm mt-1 block w-full" id="password"
                                               type="password" autocomplete="new-password">
                                        <div class="mt-2" style="display: none;"><p class="text-sm text-red-600">

                                            </p></div>
                                    </div>
                                    <div class="col-span-6 sm:col-span-4"><label
                                            class="block font-medium text-sm text-gray-700" for="password_confirmation"><span>Confirm Password</span></label>
                                        <input class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               id="password_confirmation" type="password" autocomplete="new-password">
                                        <div class="mt-2" style="display: none;"><p class="text-sm text-red-600">

                                            </p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <div class="mr-3">
                                    <div class="text-sm text-gray-600" style="display: none;">
                                        Saved.
                                    </div>
                                </div>
                                <button type="submit"
                                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <div class="hidden sm:block">
                    <div class="py-8">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-3 md:gap-6 mt-10 sm:mt-0">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0"><h3 class="text-lg font-medium text-gray-900">
                                Les informations supplémentaires sur vous
                            </h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Afin de mieux vous orientez sur la plate-forme il nous est nécessaire de disposser de
                                suffisament d'information sur vous!
                            </p></div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg"><h3
                                class="text-lg font-medium text-gray-900">
                                You have not enabled two factor authentication.
                            </h3>
                            <div class="mt-3 max-w-xl text-sm text-gray-600"><p>
                                    When two factor authentication is enabled, you will be prompted for a secure, random
                                    token during authentication. You may retrieve this token from your phone's Google
                                    Authenticator application.
                                </p></div> <!---->
                            <div class="mt-5">
                                <div><span><span><button type="button"
                                                         class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150">
                        Enable
                    </button></span> <div class="v-portal" style="display: none;"></div></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block">
                <div class="py-8">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-3 md:gap-6 mt-10 sm:mt-0">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0"><h3 class="text-lg font-medium text-gray-900">
                            Votre école
                        </h3>
                        <p class="mt-1 text-sm text-gray-600">
                            bgrfacile vous offre la possibilité de retrouver des votres écoles si seulement celui si est
                            enregistrer et membre de bgrfacile.
                            Ainsi il vous sera donner plusieurs possibilité seulement possible lorque vous faités partie
                            d'une école.
                        </p></div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl text-sm text-gray-600">
                            If necessary, you may logout of all of your other browser sessions across all of your
                            devices. If you feel your account has been compromised, you should also update your
                            password.
                        </div>
                        <div class="mt-5 space-y-6">
                            <div class="flex items-center">
                                <div>
                                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                        <path
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm text-gray-600">
                                        Windows - Chrome
                                    </div>
                                    <div>
                                        <div class="text-xs text-gray-500">
                                            127.0.0.1,

                                            <span class="text-green-500 font-semibold">This device</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-5">
                            <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150">
                                Logout Other Browser Sessions
                            </button>
                            <div class="ml-3">
                                <div class="text-sm text-gray-600" style="display: none;">
                                    Done.
                                </div>
                            </div>
                        </div>
                        <div class="v-portal" style="display: none;"></div>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block">
                <div class="py-8">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-3 md:gap-6 mt-10 sm:mt-0">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0"><h3 class="text-lg font-medium text-gray-900">
                            Supprimer le compte
                        </h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Supprimez définitivement votre compte.
                        </p></div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl text-sm text-gray-600">
                            Une fois votre compte supprimé, toutes ses ressources et données seront définitivement
                            supprimées. Avant de supprimer votre compte, veuillez télécharger les données ou
                            informations que vous souhaitez conserver.
                        </div>
                        <div class="mt-5">
                            <button type="button"
                                    class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-600 transition ease-in-out duration-150">
                                supprimer le compte
                            </button>
                        </div>
                        <div class="v-portal" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
