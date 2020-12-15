@extends('layouts.base')
@section('title')
    astuces
@endsection

@section('baniere')
    <div class="bg-gray-200">
        <div class="container  w-full md:w-3/4 mx-auto mb-2 md:mb-12 px-4">
            <div class="flex flex-wrap md:flex-no-wrap justify-center items-center py-10">
                <div class="w-full px-3">
                    <strong
                        class="uppercase text-xl font-bold text-gray-600">
                        Astuces
                    </strong>
                    <p
                        class="mb-8 text-md  text-gray-800">
                        bgrfacile est une communauté. Nos membres travaillés à offrir du contenu de qualité gratuitement
                        dans différents domaines que nous avons jugés utile.
                    </p>
                    <p>
                        <a
                            href="#"
                            class="mt-2 sm:mt-0 py-2 px-4 bg-transparent font-bold text-xl text-gray-900 rounded-md shadow hover:shadow-lg">
                            Faites des propositions
                        </a>
                    </p>

                </div>
                <div class="w-full px-3">
                    <div class="w-full h-72 rounded-lg">
                        <img
                            src="{{ asset('assets/images/dessin1.1.png') }}"
                            alt="garçon qui étudie"
                            class="w-full h-full object-cover">
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="bg-white">
        <div class="max-w-screen-xl mx-auto pt-8 pb-16 sm:pt-8 sm:pb-20 px-4 sm:px-6 lg:pt-8 lg:pb-28 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

                <a href="{{ route('astuces.audio') }}" class="block bg-white rounded-lg shadow-lg p-8 md:mx-4">
                    <div class="flex justify-between items-center">
                        <h4 class="text-xl font-bold">Astuces en audios</h4>
                        <img
                            src="{{ asset('assets/svg/Perldoc.svg') }}">
                    </div>

                    <p class="mt-4">
                        Apprenez en écoutant nos audio, ceci vous permettra d’apprendre en faisant votre sport, en
                        conduisant, ou en effectuant d’autres tâches où que vous soyez.
                    </p>
                </a>

                <a href="#" onclick="alert('Pas encore disponible')"  class="block bg-white rounded-lg shadow-lg p-8 md:mx-4">
                    <div class="flex justify-between items-center">
                        <h4 class="text-xl font-bold">Astuces de formules</h4>
                        <img src="https://cdn.perl.org/perlweb/images/icons/ic_highlight_docs.svg">
                    </div>
                    <p class="mt-4">
                        Dans chaque matière il existe des problèmes recuperant, des élements qui reviennent souvent.
                        Nous les avons classé pour vous. Reste plus à vous de consulté et utilisé à bonne usage.
                    </p>
                </a>

                <a href="#" onclick="alert('Pas encore disponible')" class="block bg-white rounded-lg shadow-lg p-8 md:mx-4">
                    <div class="flex justify-between items-center">
                        <h4 class="text-xl font-bold">Polycopies d'examens</h4>
                        <img src="{{ asset('assets/svg/pencil.svg') }}">
                    </div>
                    <p class="mt-4">
                        Nous avons récupéré et classé pour vous des polycopies de chaque examen d'état et le bonus c'est
                        qu'ils sont disponibles
                        au téléchargement.
                    </p>
                </a>

            </div>
        </div>
    </div>
@endsection


@section('script')
{{--    <script src="{{ asset('js/lottie-player.js') }}" defer></script>--}}
@endsection
