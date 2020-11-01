@extends('layouts.front')

@section('baniere')
    @include('layouts.partials.baniere_profil')
@endsection

@section('content')
    <div class="mx-0 md:mx-16">
        <div class="container mx-auto pt-8">
            {{--            cv--}}

            <div
                class="min-h-screen">
                <div class="px-2 md:px-0">
                    <div class="flex flex-wrap -mx-2 -mb-4">
                        {{--                        gauche--}}
                        <div class="w-full mb-4 md:w-1/3 px-8">
                            <div class="relative mt-8 mb-4">
                                <img
                                    class="absolute mx-auto rounded-full h-24 w-24 flex items-center justify-center"
                                    src="{{ auth()->user()->profile_photo_path }}"
                                    alt="{{ auth()->user()->name }}"
                                    style="left: 50%;transform: translate(-50%, -50%);">
                                <div class="bg-teal-500 rounded-lg">
                                    <div class="text-center py-8">
                                        <h3 class="font-sans text-2xl font-bold mt-4 mb-2">
                                            {{ auth()->user()->name }}
                                        </h3>
                                        <p class="text-white text-base">
                                            étudiant
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-teal-500">
                                    Information Personnelle
                                </h4>
                                <div class="mb-3">
                                    <p class="font-bold">Domicile</p>
                                    <p class="text-gray-500">Centre-Ville</p>
                                </div>
                                <div class="mb-3">
                                    <p class="font-bold">Téléphone</p>
                                    <p class="text-gray-500">+242 06-123-24-13</p>
                                </div>
                                <div class="mb-3">
                                    <p class="font-bold">Email</p>
                                    <p class="text-gray-500">@mail.com</p>
                                </div>
                                <div class="mb-3">
                                    <p class="font-bold">Linkedin</p>
                                    <p class="text-gray-500">@johnDoe</p>
                                </div>
                            </div>
                        </div>
                        {{--                        center--}}
                        <div class="w-full mb-4 md:w-1/3 px-8">
                            <div class="mt-8 flex flex-col">
                                <div class="p-4 mb-4 shadow rounded-lg bg-gray-100">
                                    <h4 class="font-bold text-teal-500 mb-2">Sur vous</h4>
                                    <p class="text-gray-500">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took
                                    </p>
                                </div>
                                <div class="p-4 mb-4 shadow rounded-lg bg-gray-100">
                                    <div>
                                        <h4 class="font-bold text-teal-500 mb-2">Educational Training</h4>
                                        <p class="font-bold mb-2">Milchuer College</p>
                                        <p class="text-gray-800 mb-2">Master of Science in computer Science</p>
                                        <ul class="list-disc ml-4 mb-4">
                                            <li>making it look like readable English.</li>
                                            <li>many web sites still in their infancy. Various</li>
                                            <li>and a search for 'lorem ipsum' will uncover</li>
                                        </ul>
                                    </div>

                                    <div>
                                        <h4 class="font-bold text-teal-500 mb-2">Educational Training</h4>
                                        <p class="font-bold mb-2">Milchuer College</p>
                                        <p class="text-gray-800 mb-2">Master of Science in computer Science</p>
                                        <ul class="list-disc ml-4 mb-4">
                                            <li>making it look like readable English.</li>
                                            <li>many web sites still in their infancy. Various</li>
                                            <li>and a search for 'lorem ipsum' will uncover</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{--                        droite--}}
                        <div class="w-full mb-4 md:w-1/3 px-8">
                            <div class="mt-8 flex flex-col">
                                <div class="p-4 mb-4 shadow rounded-lg bg-gray-100">
                                    <div>
                                        <h4 class="font-bold text-teal-500 mb-2">Educational Training</h4>
                                        <p class="font-bold mb-2">Milchuer College</p>
                                        <p class="text-gray-800 mb-2">Master of Science in computer Science</p>
                                        <ul class="list-disc ml-4 mb-4">
                                            <li>making it look like readable English.</li>
                                            <li>many web sites still in their infancy. Various</li>
                                            <li>and a search for 'lorem ipsum' will uncover</li>
                                        </ul>
                                    </div>

                                    <div>
                                        <h4 class="font-bold text-teal-500 mb-2">Educational Training</h4>
                                        <p class="font-bold mb-2">Milchuer College</p>
                                        <p class="text-gray-800 mb-2">Master of Science in computer Science</p>
                                        <ul class="list-disc ml-4 mb-4">
                                            <li>making it look like readable English.</li>
                                            <li>many web sites still in their infancy. Various</li>
                                            <li>and a search for 'lorem ipsum' will uncover</li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="p-4 mb-4 shadow rounded-lg bg-gray-100">
                                    <h4 class="font-bold text-teal-500 mb-2">Sur vous</h4>
                                    <p class="text-gray-500">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
