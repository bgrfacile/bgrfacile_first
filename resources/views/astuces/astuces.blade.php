@extends('layouts.base')
@section('title')
    astuces
@endsection

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

                <a href="{{ route('astuces.audio') }}" class="block bg-white rounded-lg shadow-lg p-8 md:mx-4">
                    <div class="flex justify-between items-center">
                        <h4 class="text-xl font-bold">Astuces en audios</h4>
                        <img
                            src="{{ asset('assets/svg/Perldoc.svg') }}">
                    </div>

                    <p class="mt-4">
                        Apprenez de nouvelle chose en écoutant nos audios, ceci vous permettra d’apprendre en faisant
                        votre sport, en conduisant, ou en effectuant d’autres tâches où que vous soyez.
                    </p>
                </a>

                <a href="{{ route('astuces.fiche') }}" class="block bg-white rounded-lg shadow-lg p-8 md:mx-4">
                    <div class="flex justify-between items-center">
                        <h4 class="text-xl font-bold">Astuces en fichier</h4>
                        <img src="https://cdn.perl.org/perlweb/images/icons/ic_highlight_docs.svg">
                    </div>
                    <p class="mt-4">
                        Certains fichiers sont très utiles pour certains domaines. C'est pourquoi nous proposants ces
                        fichiers.
                    </p>
                </a>

                <a href="#" class="block bg-white rounded-lg shadow-lg p-8 md:mx-4">
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

        <div class="max-w-screen-xl mx-auto pt-8 pb-16 sm:pt-8 sm:pb-20 px-4 sm:px-6 lg:pt-8 lg:pb-28 lg:px-8">
            <h2 class="text-3xl leading-9 font-extrabold text-gray-900">
                Des astuces populaires
            </h2>
            <p>
                Dans chaque matière il existe des problèmes recuperant, des élements qui reviennent souvent. Nous les
                avons classé pour vous. Reste plus à vous de consulté et utilisé à bonne usage.
            </p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                {{--                mathematique--}}
                <div class="w-full py-6 md:p-6">
                    <a href="{{ route('astuces.maths') }}">
                        <div class="shadow-md hover:shadow-xl mx-auto rounded">
                            <figure class="border-b">
                                <script
                                    src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_nIhxTu.json"
                                               background="#fff" speed="1" loop autoplay></lottie-player>
                                <figcaption class="bg-black text-white font-semibold px-4">
                                    En mathématique
                                </figcaption>
                            </figure>
                            <div class="p-4 ml-auto">
                                <p class="text-sm text-gray-900 font-black">
                                    Des formules recurentes, des théorèmes populaires et d'autres astuces.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                {{--                chimie--}}
                <div class="w-full py-6 md:p-6">
                    <a href="{{ route('astuces.chimie') }}">
                        <div class="shadow-md hover:shadow-xl mx-auto rounded">
                            <figure class="border-b">
                                <script
                                    src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_nIhxTu.json"
                                               background="#fff" speed="1" loop autoplay></lottie-player>
                                <figcaption class="bg-black text-white font-semibold px-4">
                                    En chimie
                                </figcaption>
                            </figure>
                            <div class="p-4 ml-auto">
                                <p class="text-sm text-gray-900 font-black">
                                    Des notions à absolument connaitre en chimie.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                {{--                chimie--}}
                <div class="w-full py-6 md:p-6">
                    <a href="{{ route('astuces.physique') }}">
                        <div class="shadow-md hover:shadow-xl mx-auto rounded">
                            <figure class="border-b">
                                <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_nIhxTu.json"
                                               background="#fff" speed="1" loop autoplay></lottie-player>
                                <figcaption class="bg-black text-white font-semibold px-4">
                                    En Physique
                                </figcaption>
                            </figure>
                            <div class="p-4 ml-auto">
                                <p class="text-sm text-gray-900 font-black">
                                    Des formules physique et leur explication.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="{{ asset('js/lottie-player.js') }}" defer></script>
@endsection
