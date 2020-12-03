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
            <div class="col-span-3 md:col-span-2 bg-gray-100">
                <div class="bg-white border rounded-lg w-full mb-8 p-8">
                    <div class="flex flex-col">
                        {{--                        items chapitre--}}
                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">
                            <div class="flex-1 flex flex-col">
                                <div>
                                    <span>Chapitre 1</span>
                                    <span class="font-black">LOUZOLO</span>
                                </div>
                                <p>Petit mot sur la lecture </p>
                            </div>
                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">
                                <audio id="myAudio" controls>
                                    <source
                                        src="{{ asset('assets/audios/chronique congolaise/Chronique Congolaise chap1.P1.mp3') }}"
                                        type="audio/mpeg">
                                    Votre navigateur ne supporte pas l'élément audio.
                                </audio>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center justify-center pb-3 border-b mb-4">
                            <div class="flex-1 flex flex-col">
                                <div>
                                    <span>Chapitre 2</span>
                                    <span class="font-black">----</span>
                                </div>
                                <p>Petit mot sur la lecture </p>
                            </div>
                            <div class="text-white p-2 rounded-full bg-gray-300 shadow-lg ml-0 md:ml-6">
                                <audio id="myAudio" controls>
                                    <source
                                        src="{{ asset('assets/audios/chronique congolaise/Chronique Congolaise chap1.P2.mp3') }}"
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
                        <h5 class="pb-3 font-bold text-2xl">Chromique Congolaise</h5>
                        <p class="pb-3">résumer sur le livre</p>
                        <p class="flex flex-col">
                            <span>Auteur : <strong>----</strong></span>
                            <span>Lecteur : <strong>----</strong></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
