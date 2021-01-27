@extends('layouts.base')
@section('title')
    About
@endsection

@section('ressourceCSS')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <style>
        blockquote {
            position: relative;
        }

        blockquote p:first-of-type:before {
            content: '\201c';
            position: absolute;
            left: -.5em;
        }

        blockquote p:last-of-type:after {
            content: '\201d';
            position: absolute;
        }
    </style>
@endsection

@section('baniere')
    <div class="flex flex-col justify-between items-center bg-gray-500 overflow-hidden text-white"
         style='min-height: 374px;background: center / cover no-repeat url("{{ asset('assets/images/bg_about_header.jpg') }}")'>
        <div>
            <h3 class="my-5 pt-5 font-semibold text-4xl">Qui sommes-nous ?</h3>
        </div>
        <div class="py-3 bg-black w-full opacity-25 text-white">
            <h4 class="text-2xl text-center h-12">une communauté de</h4>
            <div class="grid grid-cols-2 divide-x divide-gray-400 mx-auto max-w-6xl">
                <div class="{{--px-10 mx-5--}} text-center flex flex-col">
                    <strong class="text-xl md:text-4xl count">-</strong>
                    <p class="font-bold text-base md:text-xl text-gray-800">professeurs</p>
                </div>

                <div class="{{--px-10 mx-5--}} text-center flex flex-col">
                    <strong class="text-xl md:text-4xl count">{{ $userCount }}</strong>
                    <p class="font-bold text-base md:text-xl text-gray-800">étudiant</p>
                </div>

                {{--                <div class="--}}{{--px-10 mx-5--}}{{-- text-center flex flex-col">--}}
                {{--                    <strong class="text-xl md:text-4xl count">12.828.959</strong>--}}
                {{--                    <p class="font-bold text-base md:text-xl text-gray-800">école</p>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
@endsection

@section('content')
    {{--    parler de bgrfacile--}}
    <div class="mx-auto max-w-3xl pt-16 pb-6 text-center">

        <nav class="bg-gray-200 p-3 rounded font-sans w-full m-4">
            <ol class="list-reset flex text-grey-dark">
                @if(Breadcrumbs::has())
                    @foreach (Breadcrumbs::current() as $crumbs)
                        @if ($crumbs->url() && !$loop->last)
                            <li class="breadcrumb-item text-blue font-bold">
                                <a href="{{ $crumbs->url() }}">
                                    {{ $crumbs->title() }}
                                </a>
                            </li>
                            <li><span class="mx-2">/</span></li>
                        @else
                            <li class="breadcrumb-item active">
                                {{ $crumbs->title() }}
                            </li>
                        @endif
                    @endforeach
                @endif
            </ol>
        </nav>

        <p class="text-gray-800 text-xl">
            Bgrfacile est un site web, mais aussi une application mobile qui permet de promouvoir l’éducation et
            l’apprentissage dans le milieu scolaire. Il donne la possibilité aux élèves et étudiants de faire des
            recherches ciblées en ligne et d’avoir tout le contenu possible en fonction du programme établi par le
            Ministère en place. Ce site web permet non seulement de lire mais aussi de télécharger les cours, les
            exercices et leurs corrections faites par les Professeurs qualifiés et agrées par l’état.
        </p>
    </div>

    {{--une image illustration de l'équipe bgrfacile--}}
    <div class="w-full overflow-hidden" style="height: 543px;filter: grayscale(80%);">
        <img
            class="w-full"
            src="{{ asset('assets/images/banniere_bgrfacile.jpeg') }}"
            alt="">
    </div>

    {{--historique de bgrfcile--}}
    {{--    <div class="mx-auto max-w-4xl py-16 px-8">--}}
    {{--        <h3 class="mb-7 text-2xl font-bold text-center">L'histoire de bgrfacile</h3>--}}
    {{--    </div>--}}

    {{--presentation de l'équipe--}}
    <div class="bg-gray-100">
        <div class="mx-auto max-w-4xl py-16 text-gray-700">
            <h3 class="my-7 text-2xl font-bold text-left border-b pb-2">L'équipe</h3>
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">
                    <div class="px-5 py-12 text-center">
                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">
                            <img src="{{ asset('assets/images/benaja.jpg') }}" alt="profile image"
                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                        </div>
                        <h5 class="mt-4 mb-1 text-xl font-medium">Bénaja BENDO</h5>
                        <span class="text-sm text-gray-500 font-medium uppercase">full stack Dev</span>
                    </div>
                </div>

                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">
                    <div class="px-5 py-12 text-center">
                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">
                            <img src="{{ asset('assets/images/styve.jpg') }}" alt="profile image"
                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                        </div>
                        <h5 class="mt-4 mb-1 text-xl font-medium">Styve LIOUMBA</h5>
                        <span class="text-sm text-gray-500 font-medium uppercase">android full Stack</span>
                    </div>
                </div>

                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">
                    <div class="px-5 py-12 text-center">
                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">
                            <img src="{{ asset('assets/images/stella.jpeg') }}" alt="profile image"
                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                        </div>
                        <h5 class="mt-4 mb-1 text-xl font-medium">Stella POUATHY</h5>
                        <span class="text-sm text-gray-500 font-medium uppercase">Rédactrice-lectrice</span>
                    </div>
                </div>

{{--                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">--}}
{{--                    <div class="px-5 py-12 text-center">--}}
{{--                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">--}}
{{--                            <img src="//via.placeholder.com/100/eee" alt="profile image"--}}
{{--                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">--}}
{{--                        </div>--}}
{{--                        <h5 class="mt-4 mb-1 text-xl font-medium">Ken</h5>--}}
{{--                        <span class="text-sm text-gray-500 font-medium uppercase">full web and android code</span>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">--}}
{{--                    <div class="px-5 py-12 text-center">--}}
{{--                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">--}}
{{--                            <img src="//via.placeholder.com/100/eee" alt="profile image"--}}
{{--                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">--}}
{{--                        </div>--}}
{{--                        <h5 class="mt-4 mb-1 text-xl font-medium">Chanel</h5>--}}
{{--                        <span class="text-sm text-gray-500 font-medium uppercase">full web and full redactor</span>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">--}}
{{--                    <div class="px-5 py-12 text-center">--}}
{{--                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">--}}
{{--                            <img src="//via.placeholder.com/100/eee" alt="profile image"--}}
{{--                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">--}}
{{--                        </div>--}}
{{--                        <h5 class="mt-4 mb-1 text-xl font-medium">Belinda</h5>--}}
{{--                        <span class="text-sm text-gray-500 font-medium uppercase">full redactor</span>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">--}}
{{--                    <div class="px-5 py-12 text-center">--}}
{{--                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">--}}
{{--                            <img src="//via.placeholder.com/100/eee" alt="profile image"--}}
{{--                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">--}}
{{--                        </div>--}}
{{--                        <h5 class="mt-4 mb-1 text-xl font-medium">yannick</h5>--}}
{{--                        <span class="text-sm text-gray-500 font-medium uppercase">full management</span>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="w-64 bg-white border border-solid max-w-sm mx-auto">--}}
{{--                    <div class="px-5 py-12 text-center">--}}
{{--                        <div class="w-24 h-24 rounded-full mx-auto overflow-hidden">--}}
{{--                            <img src="//via.placeholder.com/100/eee" alt="profile image"--}}
{{--                                 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">--}}
{{--                        </div>--}}
{{--                        <h5 class="mt-4 mb-1 text-xl font-medium">jessica</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>

        </div>
    </div>

@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $('.single-item').slick({
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>
@endsection

