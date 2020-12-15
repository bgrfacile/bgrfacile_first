@extends('layouts.base')
@section('title')
    astuces audios
@endsection



@section('baniere')
    <section
        class="container w-full md:w-3/4 mx-auto mb-4 md:mb-2 mt-0 md:mt-10 md:mb-12 px-4 bg-gray-100 rounded-lg shadow">
        <div class="flex flex-wrap md:flex-no-wrap py-10">
            <div class="w-full px-3">
                <h1 class="mb-4 text-3xl font-bold text-gray-800 uppercase">
                    Les astuces audios de bgrfacile
                </h1>
                <p class="text-gray-800 leading-relaxed m-2">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <div class="w-full px-3">
                <div class="w-full h-72 rounded-lg">
                    <img
                        src="{{ asset('assets/images/genérateur audios.png') }}"
                        alt="genérateur de fichier audio"
                        class="w-full h-full object-cover">
                </div>

            </div>
        </div>
    </section>
@endsection

@section('content')
    {{--    Count--}}
    <section
        class="flex justify-content items-center container w-full md:w-3/4 mx-auto mb-2  md:mb-12 px-4 bg-gray-100 rounded-lg shadow">
        <div class="w-full py-10">
            <div class="flex flex-col justify-center items-center text-center">
                <div class="w-full mb-4">
                    <span class="mx-2 md:font-medium">368 Livres</span>
                    <span class="text-grey">|</span>
                    <span class="mx-2 md:font-medium">26 Cours</span>
                    <span class="text-grey">|</span>
                    <span class="mx-2 md:font-medium">26 Autres</span>
                </div>
                <div class="w-full">
                    <a href="#"
                       class="p-2 bg-black text-white rounded text-sm shadow hover:shadow-lg">
                        Proposer votre contenue audio
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{--Contenue--}}
    <section
        class="flex flex-col justify-content items-center container w-full md:w-3/4 mx-auto mb-2  md:mb-12 px-4 bg-gray-100 rounded-lg shadow">

        <header class="w-full my-5 text-center text-2xl font-bold text-gray-800 uppercase"
        ">
        liste des audios
        </header>

        <div class="grid grid-cols-4 gap-4">
            <div class="w-full py-2 pl-2 border-l-4  border-light-black font-bold">
                Chronique Congolaire
            </div>
            <div class="w-full py-2 flex">
                <svg class="px-1" xmlns="http://www.w3.org/2000/svg" width="22.989" height="22.989"
                     viewBox="0 0 22.989 22.989">
                    <path id="Tracé_412" data-name="Tracé 412"
                          d="M4.326,11.25a.856.856,0,0,1,.851-.862h5.205v-5.2h0a.865.865,0,1,1,1.73,0v6.056a.865.865,0,0,1-.865.865H5.176a.856.856,0,0,1-.85-.862m-2.6-.005a9.516,9.516,0,1,0,9.516-9.518,9.517,9.517,0,0,0-9.516,9.518M0,11.245A11.245,11.245,0,1,1,11.244,22.489,11.244,11.244,0,0,1,0,11.245"
                          transform="translate(0.25 0.25)" stroke="#fff" stroke-width="0.5"/>
                </svg>
                Duration: 6 hour
            </div>
            <div class="w-full py-2 flex">
                <svg class="px-1" xmlns="http://www.w3.org/2000/svg" width="22.899" height="23.754"
                     viewBox="0 0 22.899 23.754">
                    <path id="Tracé_413" data-name="Tracé 413"
                          d="M9.835,2.577q.073,0,.146,0h1.832V1a1.112,1.112,0,0,1,1.231-1h1.689a.986.986,0,0,1,1.088,1V2.576h6.869V1a.986.986,0,0,1,1.088-1h1.689a1.112,1.112,0,0,1,1.231,1V2.576h1.832A2.118,2.118,0,0,1,30.7,4.634q0,.073,0,.146V21.321a2.329,2.329,0,0,1-2.175,2.433H9.981a2.329,2.329,0,0,1-2.175-2.433V4.779A2.118,2.118,0,0,1,9.835,2.577Zm4.9-1.432H12.957V4.293h1.774Zm10.732,0H23.832V4.293h1.631ZM8.95,21.321a1.189,1.189,0,0,0,1.03,1.288H28.526a1.189,1.189,0,0,0,1.03-1.288V9.158H8.95V21.321Zm0-16.542V8.013H29.556V4.779a.973.973,0,0,0-1.03-1.059H26.694v.63a1.178,1.178,0,0,1-1.231,1.088H23.775a1.059,1.059,0,0,1-1.088-1.03q0-.029,0-.058v-.63H15.819v.63a1.059,1.059,0,0,1-1.03,1.088H13.043A1.178,1.178,0,0,1,11.812,4.35v-.63H9.981A.973.973,0,0,0,8.95,4.779Z"
                          transform="translate(-7.804)"/>
                </svg>
                Date: November 5
            </div>
            <div class="w-full py-2">
                <a href="{{ route('astuces.audioread',['id'=>1]) }}" class="flex">
                    <svg class="px-1" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29">
                        <g id="Groupe_845" data-name="Groupe 845" transform="translate(-0.456 -0.456)">
                            <circle id="Ellipse_211" data-name="Ellipse 211" cx="14.5" cy="14.5" r="14.5"
                                    transform="translate(0.456 0.456)"/>
                            <path id="play-button_3_" data-name="play-button(3)"
                                  d="M14.689,6.065,5.971.053A.3.3,0,0,0,5.5.3V12.324a.3.3,0,0,0,.471.247L14.689,6.56a.3.3,0,0,0,0-.495Z"
                                  transform="translate(6.465 8.547)" fill="#fff"/>
                        </g>
                    </svg>
                    Jouer l'audio
                </a>
            </div>
            <div class="w-full">
                Image
            </div>
            <div class="w-full col-span-3 h-24">
            <div class="w-full col-span-3 h-24">
                as opposed to using 'Content here, content here', making it look like readable English. Many desktop
                publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search
                for 'lorem ipsum' will uncover many web sites still in their infancy.
            </div>
        </div>
    </section>


{{--    <div class="container mx-auto px-8 py-8 lg:px-4">--}}
{{--        --}}{{--        grille --}}
{{--        <div class="mx-auto container mt-8">--}}
{{--            <div class="flex flex-wrap pb-4 -mx-4">--}}
{{--                <div class="w-full px-4 mb-8 md:w-1/2 xl:w-1/3">--}}
{{--                    <a href="{{ route('astuces.audioread',['id'=>1]) }}"--}}
{{--                       title="chronique congolaise"--}}
{{--                       class="shadow hover:shadow-lg cursor-pointer">--}}
{{--                        <div class="rounded-lg text-purple flex flex-col h-full justify-between ">--}}
{{--                            <div class="bg-white flex flex-col flex-grow rounded-lg justify-between">--}}
{{--                                <div class="relative">--}}
{{--                                    <div class="inline-block w-full rounded-t-lg h-64 md:h-44 lg:h-48"--}}
{{--                                         --}}{{--                                         style="background-image: url(&quot;https://vueschool.io/media/13867ba07d6eacdf868c78a340784a52/scoped-slots-course-not-transparent.jpg&quot;);"></div>--}}
{{--                                         --}}{{--                                         style="background-image: url({{ asset('assets/images/couverture1.png') }});"></div>--}}
{{--                                         style="background-image: url(https://fotomelia.com/wp-content/uploads/2016/03/photos-gratuites-libres-de-droits-118-1560x1170.jpg);"></div>--}}
{{--                                </div>--}}
{{--                                <div--}}
{{--                                    class="bg-white shadow rounded px-4 py-4 flex flex-col flex-1 justify-between md:px-6">--}}
{{--                                    <div>--}}
{{--                                        <h3 title=""--}}
{{--                                            class="text-xl leading-tight tracking-normal font-normal mb-4 text-navy-blue lg:text-2xl">--}}
{{--                                            Chronique Congolaise--}}
{{--                                        </h3>--}}
{{--                                        <div class="mb-3 flex items-center text-sm">--}}
{{--                                            <img src="{{ asset('assets/images/runtime.png') }}" width="20px" alt="temps"--}}
{{--                                                 class="mr-2">--}}
{{--                                            <span class="mt-1">30 min<span class="text-iron mx-2">|</span>1 livre</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3 flex items-center text-sm text-navy-blue">--}}
{{--                                            --}}{{--                                            <img--}}
{{--                                            --}}{{--                                                src="https://vueschool.io/img/next-lesson.png" width="20px" alt="date"--}}
{{--                                            --}}{{--                                                class="mr-2"> --}}
{{--                                            --}}{{--                                            <span class="mt-1">--}}
{{--                                            --}}{{--                                                ecrit par--}}
{{--                                            --}}{{--                                            </span>--}}
{{--                                            --}}{{--                                            <p class="text-sm leading-normal mb-3 mt-1">--}}
{{--                                            --}}{{--                                                Learn how to master slots and scoped slots, to build flexible and--}}
{{--                                            --}}{{--                                                reusable--}}
{{--                                            --}}{{--                                                vue.js components.--}}
{{--                                            --}}{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="flex flex-col items-center"></div>--}}
{{--    </div>--}}
@endsection

@section('script')
    <script src="{{ asset('js/lottie-player.js') }}" defer></script>
@endsection
