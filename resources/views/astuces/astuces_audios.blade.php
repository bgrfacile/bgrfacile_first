@extends('layouts.base')
@section('title')
    astuces audios | bgrfacile.com
@endsection

@section('baniere')
    <div class="w-full h-36 bg-gray-200 bg-cover bg-center flex items-center justify-between px-4 md:px-36 mb-6">
        <h2 class="text-3xl font-extrabold text-gray-900 text-center">
            Des potcast pour vous
        </h2>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
        <div>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_NsCkXA/music.json"
                           background="transparent" speed="1" class="h-24 w-24" loop
                           autoplay></lottie-player>
        </div>
    </div>
@endsection

@section('content')
    <div class="min-h-screen text-gray-800">
        <div class="container mx-auto grid grid-cols-3 gap-4 px-6 mb-8">
            <div class="col-span-3 md:col-span-2">
                <div class="bg-white border rounded-lg w-full mb-8 p-8">
                    <h3 class="font-black text-2xl"><span class="text-red-600">Chapitre I</span> Un commerçant failli
                    </h3>
                    <div class="flex flex-col">
                        {{--                        items chapitre--}}
                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">
                            <div class="flex-1 flex flex-col">
                                <div>
                                    <span>Partie 1</span>
                                    {{--                                    <span class="font-black">Un commerçant failli</span>--}}
                                </div>
                                <p></p>
                            </div>
                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">
                                <audio id="myAudio" controls>
                                    <source
                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P1.mp3') }}"
                                        type="audio/mpeg">
                                    Votre navigateur ne supporte pas l'élément audio.
                                </audio>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">
                            <div class="flex-1 flex flex-col">
                                <div>
                                    <span>Partie 2</span>
                                    {{--                                    <span class="font-black">Un voyage pour rien</span>--}}
                                </div>
                                <p></p>
                            </div>
                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">
                                <audio id="myAudio" controls>
                                    <source
                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P2.mp3') }}"
                                        type="audio/mpeg">
                                    Votre navigateur ne supporte pas l'élément audio.
                                </audio>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">
                            <div class="flex-1 flex flex-col">
                                <div>
                                    <span>Partie 3</span>
                                    {{--                                    <span class="font-black">L'intégration</span>--}}
                                </div>
                                <p></p>
                            </div>
                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">
                                <audio id="myAudio" controls>
                                    <source
                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P3.mp3') }}"
                                        type="audio/mpeg">
                                    Votre navigateur ne supporte pas l'élément audio.
                                </audio>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">
                            <div class="flex-1 flex flex-col">
                                <div>
                                    <span>Partie 4</span>
                                    {{--                                    <span class="font-black">L'intégration</span>--}}
                                </div>
                                <p></p>
                            </div>
                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">
                                <audio id="myAudio" controls>
                                    <source
                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P4.mp3') }}"
                                        type="audio/mpeg">
                                    Votre navigateur ne supporte pas l'élément audio.
                                </audio>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">
                            <div class="flex-1 flex flex-col">
                                <div>
                                    <span>Partie 5</span>
                                    {{--                                    <span class="font-black">L'intégration</span>--}}
                                </div>
                                <p></p>
                            </div>
                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">
                                <audio id="myAudio" controls>
                                    <source
                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P5.mp3') }}"
                                        type="audio/mpeg">
                                    Votre navigateur ne supporte pas l'élément audio.
                                </audio>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">
                            <div class="flex-1 flex flex-col">
                                <div>
                                    <span>Partie 6</span>
                                    {{--                                    <span class="font-black">L'intégration</span>--}}
                                </div>
                                <p></p>
                            </div>
                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">
                                <audio id="myAudio" controls>
                                    <source
                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P6.mp3') }}"
                                        type="audio/mpeg">
                                    Votre navigateur ne supporte pas l'élément audio.
                                </audio>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">
                            <div class="flex-1 flex flex-col">
                                <div>
                                    <span>Partie 7</span>
                                    {{--                                    <span class="font-black">L'intégration</span>--}}
                                </div>
                                <p></p>
                            </div>
                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">
                                <audio id="myAudio" controls>
                                    <source
                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P7.mp3') }}"
                                        type="audio/mpeg">
                                    Votre navigateur ne supporte pas l'élément audio.
                                </audio>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">
                            <div class="flex-1 flex flex-col">
                                <div>
                                    <span>Partie 8</span>
                                    {{--                                    <span class="font-black">L'intégration</span>--}}
                                </div>
                                <p></p>
                            </div>
                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">
                                <audio id="myAudio" controls>
                                    <source
                                        src="{{ asset('assets/audios/chronique congolaise/CCg-chap1-P8.mp3') }}"
                                        type="audio/mpeg">
                                    Votre navigateur ne supporte pas l'élément audio.
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-3 md:col-span-1 bg-gray-100 ">
                <div class="flex flex-col">
                    <div class="w-full h-32">
                        <img
                            class="w-full h-full object-cover"
                            src="https://miro.medium.com/max/5000/1*jFyawcsqoYctkTuZg6wQ1A.jpeg"
                            alt="couverture du livre chronique congolaise">
                    </div>
                    <div class="p-0 md:p-4">
                        <h5 class="pb-3 font-bold text-2xl">Chronique Congolaise</h5>
                        <p class="pb-3 text-justify">Le chroniqueur raconte le quotidien de l'histoire des hommes, le temps vécu
                            lui-même, cela dont l'historien, en quête d'une intelligibilité plus abstraite, ne parle pas
                            : le fait divers, l'événement singulier, et, plus fugaces encore, ces riens, ces
                            impressions, tristes ou drôles, vagues ou inoubliables, dont une vie est faite, et qui
                            donnent à toute existence humaine, si modeste, si anonyme qu'elle soit, son irréductible
                            gravité. J. B. Tati Loutard, en cette douzaine de nouvelles - genre par excellence de la
                            litote - rend manifeste, par la maîtrise de la plus discrète et la plus juste des écritures,
                            une authentique sensibilité à ce qui constitue le pathétique de toute existence, qu'elle
                            soit celle du riche ou du pauvre, de l'accablé ou du puissant ; il apporte aussi, sur le
                            monde congolais, un document plein de tendresse et de lucidité.</p>
                        <p class="flex flex-col">
                            <span>Auteur : <strong>Jean Baptiste Tati-Loutard</strong></span>
                            <span>Type d'ouvrage : <strong>Nouvelles</strong></span>
                            <span>Lectrice : <strong>POUATHY stella exaucée victoire</strong></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
