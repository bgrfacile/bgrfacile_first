@extends('layouts.base')
@section('title')
    astuces
@endsection

@section('baniere')
    <div class="bg-gray-200">
        <div class="container  w-full md:w-3/4 mx-auto mb-2 md:mb-12 px-4">
            <div class="flex flex-wrap md:flex-no-wrap justify-center items-center py-10">
                <div class="w-full px-3">
                    <h5
                            class="mb-8 text-md  text-gray-800">
                        <strong>Les astuces dans bgrfacile</strong> sont l'ensemble des raccourcies que proposent la
                        communauté
                        bgrfacile.Chaque utilisateurs à la possibilité de faire sa proposition de raccourcis, pour cela
                       il suffit de nous écrit à l'adresse <strong class="font-bold">contact@bgrfacile.com</strong>
                    </h5>
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
    <div>
        <div class="container-podcast">
            <div class="at-section">
                <div class="at-section__title">ASTUCES</div>
            </div>
            <div class="at-grid" data-column="3">
                {{--                podcast--}}
                <div class="at-column">
                    <div class="at-user">
                        <div class="at-user__avatar">
                            <img src="{{ asset('assets/svg/Perldoc.svg') }}"/>
                        </div>
                        <div class="at-user__name">Des Podcasts</div>
                        <div class="at-user__title" style="line-height: 1.3rem">
                            Apprenez en écoutant nos audio, ceci vous permettra d’apprendre en faisant votre sport, en
                            conduisant, ou en effectuant d’autres tâches où que vous soyez.
                        </div>
                        <ul class="at-social">
                            <a href="#"
                               class="border-2 border-blue-500 rounded-lg font-bold text-blue-500 px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white mr-6">
                                Visiter
                            </a>
                        </ul>
                    </div>
                </div>

                {{--                formules--}}
                <div class="at-column">
                    <div class="at-user">
                        <div class="at-user__avatar">
                            <img src="https://cdn.perl.org/perlweb/images/icons/ic_highlight_docs.svg"/>
                        </div>
                        <div class="at-user__name">Des Formules</div>
                        <div class="at-user__title">
                            Dans chaque matière il existe des problèmes qui se repètent.
                            Nous les avons regrouper pour vous 😁.
                        </div>
                        <ul class="at-social">
                            <a href=""
                               class="border-2 border-blue-500 rounded-lg font-bold text-blue-500 px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white mr-6">
                                Visiter
                            </a>
                        </ul>
                    </div>
                </div>
                {{--                polycopies--}}
                <div class="at-column">
                    <div class="at-user">
                        <div class="at-user__avatar">
                            <img src="{{ asset('assets/svg/pencil.svg') }}"/>
                        </div>
                        <div class="at-user__name">Des polycopies</div>
                        <div class="at-user__title">
                            Nous avons récupéré et classé pour vous des polycopies.
                        </div>
                        <ul class="at-social">
                            <a href=""
                               class="border-2 border-blue-500 rounded-lg font-bold text-blue-500 px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white mr-6">
                                Visiter
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .at-section__title {
            margin: 0 0 70px;
            color: #000;
            font-family: "Roboto", sans-serif;
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 2.625rem;
            text-align: center;
        }

        .at-grid {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            background: #FFF;
            border: 1px solid #E2E9ED;
        }

        .at-grid[data-column="1"] .at-column {
            width: 100%;
            max-width: 100%;
            min-width: 100%;
            flex-basis: 100%;
        }

        .at-grid[data-column="2"] .at-column {
            width: 50%;
            max-width: 50%;
            min-width: 50%;
            flex-basis: 50%;
        }

        .at-grid[data-column="3"] .at-column {
            width: 33.3333333333%;
            max-width: 33.3333333333%;
            min-width: 33.3333333333%;
            flex-basis: 33.3333333333%;
        }

        .at-grid[data-column="4"] .at-column {
            width: 25%;
            max-width: 25%;
            min-width: 25%;
            flex-basis: 25%;
        }

        .at-grid[data-column="5"] .at-column {
            width: 20%;
            max-width: 20%;
            min-width: 20%;
            flex-basis: 20%;
        }

        .at-grid[data-column="6"] .at-column {
            width: 16.6666666667%;
            max-width: 16.6666666667%;
            min-width: 16.6666666667%;
            flex-basis: 16.6666666667%;
        }

        .at-grid[data-column="7"] .at-column {
            width: 14.2857142857%;
            max-width: 14.2857142857%;
            min-width: 14.2857142857%;
            flex-basis: 14.2857142857%;
        }

        .at-grid[data-column="8"] .at-column {
            width: 12.5%;
            max-width: 12.5%;
            min-width: 12.5%;
            flex-basis: 12.5%;
        }

        .at-grid[data-column="9"] .at-column {
            width: 11.1111111111%;
            max-width: 11.1111111111%;
            min-width: 11.1111111111%;
            flex-basis: 11.1111111111%;
        }

        .at-column {
            z-index: 0;
            position: relative;
            background: #FFF;
            box-shadow: 0 0 0 1px #E2E9ED;
            padding: 10px;
            box-sizing: border-box;
            transition: box-shadow 0.2s ease, transform 0.2s ease, z-index 0s 0.2s ease;
        }

        .at-column:before {
            content: "";
            display: block;
            padding-top: 100%;
        }

        .at-column:hover {
            z-index: 1;
            box-shadow: 0 8px 50px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
            transition: box-shadow 0.2s ease, transform 0.2s ease, z-index 0s 0s ease;
        }

        .at-column:hover .at-social {
            margin: 16px 0 0;
            opacity: 1;
        }

        @media (max-width: 800px) {
            .at-column {
                width: 50% !important;
                max-width: 50% !important;
                min-width: 50% !important;
                flex-basis: 50% !important;
            }
        }

        @media (max-width: 600px) {
            .at-column {
                width: 100% !important;
                max-width: 100% !important;
                min-width: 100% !important;
                flex-basis: 100% !important;
            }
        }

        .at-user {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            transform: translate(0, -50%);
            text-align: center;
        }

        .at-user__avatar {
            width: 98px;
            height: 98px;
            border-radius: 100%;
            margin: 0 auto 20px;
            overflow: hidden;
        }

        .at-user__avatar img {
            display: block;
            width: 100%;
            max-width: 100%;
        }

        .at-user__name {
            color: #313435;
            font-family: "Roboto", sans-serif;
            font-size: 1.5rem;
            font-weight: 500;
            line-height: 2.625rem;
        }

        .at-user__title {
            color: #6F808A;
            font-family: "Roboto", sans-serif;
            font-size: 0.875rem;
            line-height: 1.3rem;
        }

        .at-social {
            margin: 0 0 -18px;
            opacity: 0;
            transition: margin 0.2s ease, opacity 0.2s ease;
        }

        .at-social__item {
            display: inline-block;
            margin: 0 10px;
        }

        .at-social__item a {
            display: block;
        }

        .at-social__item svg {
            fill: #515F65;
            display: block;
            height: 18px;
            transition: fill 0.2s ease;
        }

        .at-social__item svg:hover {
            fill: #788D96;
        }

        body {
            background: #FFF;
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .container-podcast {
            max-width: 1170px;
            width: 100%;
            margin: 10px auto;
            padding: 0 20px;
            box-sizing: border-box;
            transform-origin: top center;
            transform: scale(0.8);
        }
    </style>
@endsection


@section('script')
    {{--    <script src="{{ asset('js/lottie-player.js') }}" defer></script>--}}
@endsection
