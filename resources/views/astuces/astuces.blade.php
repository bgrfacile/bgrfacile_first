@extends('layouts.base')

@section('baniere')
    <div class="w-full bg-gray-200 bg-cover bg-center flex items-center justify-center h-full w-full"
         style="height:25rem; ">
        <h2 class="text-3xl font-extrabold text-gray-900 text-center">
            Nous vous avons concocté des astuces pour vous accompagner
        </h2>
    </div>
@endsection


@section('content')

    <div class="bg-white">
        <div class="max-w-screen-xl mx-auto pt-8 pb-16 sm:pt-8 sm:pb-20 px-4 sm:px-6 lg:pt-8 lg:pb-28 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

                <a href="#" class="block bg-white rounded-lg shadow-lg p-8 md:mx-4">
                    <div class="flex justify-between items-center">
                        <h4 class="text-xl font-bold">Astuces audios</h4>
                        <img
                            src="{{ asset('assets/svg/pencil.svg') }}">
                    </div>

                    <p class="mt-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s
                    </p>
                </a>

                <a href="#" class="block bg-white rounded-lg shadow-lg p-8 md:mx-4">
                    <div class="flex justify-between items-center">
                        <h4 class="text-xl font-bold">Astuces en fiches</h4>
                        <img src="https://cdn.perl.org/perlweb/images/icons/ic_highlight_docs.svg">
                    </div>
                    <p class="mt-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s
                    </p>
                </a>

                <a href="#" class="block bg-white rounded-lg shadow-lg p-8 md:mx-4">
                    <div class="flex justify-between items-center">
                        <h4 class="text-xl font-bold">Polycopies</h4>
                        <img src="{{ asset('assets/svg/pencil.svg') }}">
                    </div>
                    <p class="mt-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s
                    </p>
                </a>

            </div>
        </div>

        <div class="max-w-screen-xl mx-auto pt-8 pb-16 sm:pt-8 sm:pb-20 px-4 sm:px-6 lg:pt-8 lg:pb-28 lg:px-8">
            <h2 class="text-3xl leading-9 font-extrabold text-gray-900">
                Notions fréquentes
            </h2>
            <div class="mt-6 border-t-2 border-gray-100 pt-10">
                <dl class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <div>
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                En philosophie
                            </dt>
                            <dd class="mt-2">
                                <p class="text-base leading-6 text-gray-500">
                                    Une liste de question qui reviennent souvent en philosophie.
                                </p>
                            </dd>
                        </div>

                        <div class="mt-12">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                En mathématique
                            </dt>
                            <dd class="mt-2">
                                <p class="text-base leading-6 text-gray-500">
                                    Une sélection de formule recurente en mathématique.
                                </p>
                            </dd>
                        </div>

                        <div class="mt-12">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                En physique
                            </dt>
                            <dd class="mt-2">
                                <p class="text-base leading-6 text-gray-500">
                                    Les formules à connaitre absoluments.
                                </p>
                            </dd>
                        </div>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <div>
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Histoire
                            </dt>
                            <dd class="mt-2">
                                <p class="text-base leading-6 text-gray-500">
                                    Selèction de date à connaitre.
                                </p>
                            </dd>
                        </div>

                        <div class="mt-12">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Géographie
                            </dt>
                            <dd class="mt-2">
                                <p class="text-base leading-6 text-gray-500">
                                    Ce qu'il faut abolument connaitre.
                                </p>
                            </dd>
                        </div>

                        <div class="mt-12">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Chimie
                            </dt>
                            <dd class="mt-2">
                                <p class="text-base leading-6 text-gray-500">
                                    Ce que tout le monde doit savoir!
                                </p>
                            </dd>
                        </div>
                    </div>
                </dl>
            </div>
        </div>
    </div>

@endsection


@section('script')

@endsection
