@extends('layouts.base')
@section('title')
    astuces audios
@endsection



@section('baniere')
    {{--    <div class="w-full h-36 bg-gray-200 bg-cover bg-center flex items-center justify-between px-4 md:px-36 mb-6">--}}
    {{--        <h2 class="text-3xl font-extrabold text-gray-900 text-center">--}}
    {{--            Des podcasts pour vous--}}
    {{--        </h2>--}}
    {{--    </div>--}}
@endsection

@section('content')
    <div class="container mx-auto px-8 py-8 lg:px-4">
        {{--        header--}}
        <div class="md:flex md:justify-between md:items-center">
            <div class="lg:w-2/3">
                <h1 class="text-2xl font-medium text-center mb-2 md:mb-0 md:text-left lg:text-3xl">
                    Astuces audio
                </h1>
                <p
                    class="text-sm text-blue-600  lg:mr-auto lg:w-2/3 mt-3">
                    Chaque contenue est fourni gratuitement par les membres de la communauté.
                </p>
            </div>
            <div class="lg:w-1/3 flex flex-col justify-center items-center">
                <div class="text-center ">
                <span class="mx-2 md:font-medium">
                    368 Livres
                </span>
                    <span class="text-grey">|</span>
                    <span class="mx-2 md:font-medium">
                    26 Cours
                </span>
                    <span class="text-grey">|</span>
                    <span class="mx-2 md:font-medium">
                    26 Autres
                </span>
                </div>
                <div>
                    <a href="#"
                       class="p-2 bg-white rounded text-sm shadow hover:shadow-lg">
                        proposer aussi votre contenue
                    </a>
                </div>
            </div>
        </div>

        {{--        grille --}}
        <div class="mx-auto container mt-8">
            <div class="flex flex-wrap pb-4 -mx-4">
                <div class="w-full px-4 mb-8 md:w-1/2 xl:w-1/3">
                    <a href="{{ route('astuces.audioread',['id'=>1]) }}"
                        title="chronique congolaise"
                        class="shadow hover:shadow-lg cursor-pointer">
                        <div class="rounded-lg text-purple flex flex-col h-full justify-between ">
                            <div class="bg-white flex flex-col flex-grow rounded-lg justify-between">
                                <div class="relative">
                                    <div class="inline-block w-full rounded-t-lg h-64 md:h-44 lg:h-48"
                                         {{--                                         style="background-image: url(&quot;https://vueschool.io/media/13867ba07d6eacdf868c78a340784a52/scoped-slots-course-not-transparent.jpg&quot;);"></div>--}}
{{--                                         style="background-image: url({{ asset('assets/images/couverture1.png') }});"></div>--}}
                                         style="background-image: url(https://fotomelia.com/wp-content/uploads/2016/03/photos-gratuites-libres-de-droits-118-1560x1170.jpg);"></div>
                                </div>
                                <div
                                    class="bg-white shadow rounded px-4 py-4 flex flex-col flex-1 justify-between md:px-6">
                                    <div>
                                        <h3 title=""
                                            class="text-xl leading-tight tracking-normal font-normal mb-4 text-navy-blue lg:text-2xl">
                                            Chronique Congolaise
                                        </h3>
                                        <div class="mb-3 flex items-center text-sm">
                                            <img src="{{ asset('assets/images/runtime.png') }}" width="20px" alt="temps"
                                                 class="mr-2">
                                            <span class="mt-1">30 min<span class="text-iron mx-2">|</span>1 livre</span>
                                        </div>
                                        <div class="mb-3 flex items-center text-sm text-navy-blue">
                                            {{--                                            <img--}}
                                            {{--                                                src="https://vueschool.io/img/next-lesson.png" width="20px" alt="date"--}}
                                            {{--                                                class="mr-2"> --}}
                                            <span class="mt-1">
                                            ecrit par
                                        <p class="text-sm leading-normal mb-3 mt-1">
                                            Learn how to master slots and scoped slots, to build flexible and reusable
                                            vue.js components.
                                        </p></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center"></div>
    </div>


    {{--    ancienne donné de la page--}}

{{--    <div class="min-h-screen text-gray-800">--}}
{{--        <div class="container mx-auto grid grid-cols-3 gap-4 px-6 mb-8">--}}
{{--            <div class="col-span-3 md:col-span-2">--}}
{{--                <div class="bg-white border rounded-lg w-full mb-8 p-8">--}}
{{--                    <h3 class="font-black text-2xl mb-6"><span class="text-red-600">Chapitre I</span> Un commerçant--}}
{{--                        failli--}}
{{--                    </h3>--}}
{{--                    <div class="flex flex-col">--}}
{{--                        --}}{{--                        items chapitre--}}
{{--                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">--}}
{{--                            <div class="flex-1 flex flex-col">--}}
{{--                                <div>--}}
{{--                                    <span>Partie 1</span>--}}
{{--                                    --}}{{--                                    <span class="font-black">Un commerçant failli</span>--}}
{{--                                </div>--}}
{{--                                <p></p>--}}
{{--                            </div>--}}
{{--                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">--}}
{{--                                <audio id="myAudio" controls>--}}
{{--                                    <source--}}
{{--                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P1.mp3') }}"--}}
{{--                                        type="audio/mpeg">--}}
{{--                                    Votre navigateur ne supporte pas l'élément audio.--}}
{{--                                </audio>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">--}}
{{--                            <div class="flex-1 flex flex-col">--}}
{{--                                <div>--}}
{{--                                    <span>Partie 2</span>--}}
{{--                                    --}}{{--                                    <span class="font-black">Un voyage pour rien</span>--}}
{{--                                </div>--}}
{{--                                <p></p>--}}
{{--                            </div>--}}
{{--                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">--}}
{{--                                <audio id="myAudio" controls>--}}
{{--                                    <source--}}
{{--                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P2.mp3') }}"--}}
{{--                                        type="audio/mpeg">--}}
{{--                                    Votre navigateur ne supporte pas l'élément audio.--}}
{{--                                </audio>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">--}}
{{--                            <div class="flex-1 flex flex-col">--}}
{{--                                <div>--}}
{{--                                    <span>Partie 3</span>--}}
{{--                                    --}}{{--                                    <span class="font-black">L'intégration</span>--}}
{{--                                </div>--}}
{{--                                <p></p>--}}
{{--                            </div>--}}
{{--                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">--}}
{{--                                <audio id="myAudio" controls>--}}
{{--                                    <source--}}
{{--                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P3.mp3') }}"--}}
{{--                                        type="audio/mpeg">--}}
{{--                                    Votre navigateur ne supporte pas l'élément audio.--}}
{{--                                </audio>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">--}}
{{--                            <div class="flex-1 flex flex-col">--}}
{{--                                <div>--}}
{{--                                    <span>Partie 4</span>--}}
{{--                                    --}}{{--                                    <span class="font-black">L'intégration</span>--}}
{{--                                </div>--}}
{{--                                <p></p>--}}
{{--                            </div>--}}
{{--                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">--}}
{{--                                <audio id="myAudio" controls>--}}
{{--                                    <source--}}
{{--                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P4.mp3') }}"--}}
{{--                                        type="audio/mpeg">--}}
{{--                                    Votre navigateur ne supporte pas l'élément audio.--}}
{{--                                </audio>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">--}}
{{--                            <div class="flex-1 flex flex-col">--}}
{{--                                <div>--}}
{{--                                    <span>Partie 5</span>--}}
{{--                                    --}}{{--                                    <span class="font-black">L'intégration</span>--}}
{{--                                </div>--}}
{{--                                <p></p>--}}
{{--                            </div>--}}
{{--                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">--}}
{{--                                <audio id="myAudio" controls>--}}
{{--                                    <source--}}
{{--                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P5.mp3') }}"--}}
{{--                                        type="audio/mpeg">--}}
{{--                                    Votre navigateur ne supporte pas l'élément audio.--}}
{{--                                </audio>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">--}}
{{--                            <div class="flex-1 flex flex-col">--}}
{{--                                <div>--}}
{{--                                    <span>Partie 6</span>--}}
{{--                                    --}}{{--                                    <span class="font-black">L'intégration</span>--}}
{{--                                </div>--}}
{{--                                <p></p>--}}
{{--                            </div>--}}
{{--                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">--}}
{{--                                <audio id="myAudio" controls>--}}
{{--                                    <source--}}
{{--                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P6.mp3') }}"--}}
{{--                                        type="audio/mpeg">--}}
{{--                                    Votre navigateur ne supporte pas l'élément audio.--}}
{{--                                </audio>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">--}}
{{--                            <div class="flex-1 flex flex-col">--}}
{{--                                <div>--}}
{{--                                    <span>Partie 7</span>--}}
{{--                                    --}}{{--                                    <span class="font-black">L'intégration</span>--}}
{{--                                </div>--}}
{{--                                <p></p>--}}
{{--                            </div>--}}
{{--                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">--}}
{{--                                <audio id="myAudio" controls>--}}
{{--                                    <source--}}
{{--                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P7.mp3') }}"--}}
{{--                                        type="audio/mpeg">--}}
{{--                                    Votre navigateur ne supporte pas l'élément audio.--}}
{{--                                </audio>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">--}}
{{--                            <div class="flex-1 flex flex-col">--}}
{{--                                <div>--}}
{{--                                    <span>Partie 8</span>--}}
{{--                                    --}}{{--                                    <span class="font-black">L'intégration</span>--}}
{{--                                </div>--}}
{{--                                <p></p>--}}
{{--                            </div>--}}
{{--                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">--}}
{{--                                <audio id="myAudio" controls>--}}
{{--                                    <source--}}
{{--                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P8.mp3') }}"--}}
{{--                                        type="audio/mpeg">--}}
{{--                                    Votre navigateur ne supporte pas l'élément audio.--}}
{{--                                </audio>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="bg-white border rounded-lg w-full mb-8 p-8">--}}
{{--                    <h3 class="font-black text-2xl mb-6"><span class="text-red-600">Chapitre II</span> Un voyage pour--}}
{{--                        rien--}}
{{--                    </h3>--}}
{{--                    <div class="flex flex-col">--}}
{{--                        --}}{{--                        items chapitre--}}
{{--                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">--}}
{{--                            <div class="flex-1 flex flex-col">--}}
{{--                                <div>--}}
{{--                                    <span>Partie 1</span>--}}
{{--                                    --}}{{--                                    <span class="font-black">Un commerçant failli</span>--}}
{{--                                </div>--}}
{{--                                <p></p>--}}
{{--                            </div>--}}
{{--                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">--}}
{{--                                <audio id="myAudio" controls>--}}
{{--                                    <source--}}
{{--                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap2-P1.mp3') }}"--}}
{{--                                        type="audio/mpeg">--}}
{{--                                    Votre navigateur ne supporte pas l'élément audio.--}}
{{--                                </audio>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">--}}
{{--                            <div class="flex-1 flex flex-col">--}}
{{--                                <div>--}}
{{--                                    <span>Partie 2</span>--}}
{{--                                    --}}{{--                                    <span class="font-black">Un voyage pour rien</span>--}}
{{--                                </div>--}}
{{--                                <p></p>--}}
{{--                            </div>--}}
{{--                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">--}}
{{--                                <audio id="myAudio" controls>--}}
{{--                                    <source--}}
{{--                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap2-P2.mp3') }}"--}}
{{--                                        type="audio/mpeg">--}}
{{--                                    Votre navigateur ne supporte pas l'élément audio.--}}
{{--                                </audio>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">--}}
{{--                            <div class="flex-1 flex flex-col">--}}
{{--                                <div>--}}
{{--                                    <span>Partie 3</span>--}}
{{--                                    --}}{{--                                    <span class="font-black">L'intégration</span>--}}
{{--                                </div>--}}
{{--                                <p></p>--}}
{{--                            </div>--}}
{{--                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">--}}
{{--                                <audio id="myAudio" controls>--}}
{{--                                    <source--}}
{{--                                        src="{{ asset('assets/audios/chronique congolaise/CCg-Chap2-P3.mp3') }}"--}}
{{--                                        type="audio/mpeg">--}}
{{--                                    Votre navigateur ne supporte pas l'élément audio.--}}
{{--                                </audio>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">--}}
{{--                            <div class="flex-1 flex flex-col">--}}
{{--                                <div>--}}
{{--                                    <span>Partie 4</span>--}}
{{--                                    --}}{{--                                    <span class="font-black">L'intégration</span>--}}
{{--                                </div>--}}
{{--                                <p></p>--}}
{{--                            </div>--}}
{{--                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">--}}
{{--                                <audio id="myAudio" controls>--}}
{{--                                    <source--}}
{{--                                        src="{{ asset('assets/audios/chronique congolaise/CCg-Chap2-P4.mp3') }}"--}}
{{--                                        type="audio/mpeg">--}}
{{--                                    Votre navigateur ne supporte pas l'élément audio.--}}
{{--                                </audio>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-span-3 md:col-span-1 bg-gray-100 ">--}}
{{--                <div class="flex flex-col">--}}
{{--                    <div class="w-full h-32">--}}
{{--                        <img--}}
{{--                            class="w-full h-full object-cover"--}}
{{--                            src="{{ asset('assets/images/couverture1.png') }}"--}}
{{--                            alt="couverture du livre chronique congolaise">--}}
{{--                    </div>--}}
{{--                    <div class="p-0 md:p-4">--}}
{{--                        <h5 class="pb-3 font-bold text-2xl">Chronique Congolaise</h5>--}}
{{--                        <p class="pb-3 text-justify">Le chroniqueur raconte le quotidien de l'histoire des hommes, le--}}
{{--                            temps vécu--}}
{{--                            lui-même, cela dont l'historien, en quête d'une intelligibilité plus abstraite, ne parle pas--}}
{{--                            : le fait divers, l'événement singulier, et, plus fugaces encore, ces riens, ces--}}
{{--                            impressions, tristes ou drôles, vagues ou inoubliables, dont une vie est faite, et qui--}}
{{--                            donnent à toute existence humaine, si modeste, si anonyme qu'elle soit, son irréductible--}}
{{--                            gravité. J. B. Tati Loutard, en cette douzaine de nouvelles - genre par excellence de la--}}
{{--                            litote - rend manifeste, par la maîtrise de la plus discrète et la plus juste des écritures,--}}
{{--                            une authentique sensibilité à ce qui constitue le pathétique de toute existence, qu'elle--}}
{{--                            soit celle du riche ou du pauvre, de l'accablé ou du puissant ; il apporte aussi, sur le--}}
{{--                            monde congolais, un document plein de tendresse et de lucidité.</p>--}}
{{--                        <p class="flex flex-col">--}}
{{--                            <span>Auteur : <strong>Jean Baptiste Tati-Loutard</strong></span>--}}
{{--                            <span>Type d'ouvrage : <strong>Nouvelles</strong></span>--}}
{{--                            <span>Lectrice : <strong>POUATHY stella exaucée victoire</strong></span>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

@section('script')
    <script src="{{ asset('js/lottie-player.js') }}" defer></script>
@endsection
