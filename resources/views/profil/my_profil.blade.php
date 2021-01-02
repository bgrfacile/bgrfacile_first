@extends('layouts.base')

@section('title')
    Mon compte
@endsection

@section('baniere')
    @include('layouts.partials.baniere_profil')
@endsection

@section('content')
    <div class="py-10">
        <div class="flex justify-center flex-wrap">
            <div
                class="flex flex-col items-center p-8 bg-white shadow-lg rounded mx-8 mb-8 flex-1 mb-8 md:mb-0  md:w-1/3 sm:flex-initial">
                <img src="{{ auth()->user()->profile_photo_path }}" class="rounded-full h-32 w-32 " alt="">
                <h1 class="text-indigo-500 text-4xl my-4  ">{{ auth()->user()->name }}</h1>
                <p class=" text-justify px-8 mb-8  ">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores
                    molestias, molestiae ex autem dicta nulla blanditiis architecto
                    cumque repudiandae quam quia impedit rerum optio consectetur commodi
                    pariatur nam eveniet dolores!
                </p>
            </div>
            <div class="flex flex-col justify-between mx-8 md:mx-0 md:w-1/4 ">
                <div
                    class="flex flex-col bg-white rounded p-4 items-center shadow-lg border-r-8 border-red-400 mb-4 md:mb-auto">
                    <h2 class="font-bold">Matières préféres</h2>
                    <div class="flex  justify-between py-2 ">
                        <div class="pill bg-gray-400 rounded-full px-4 text-xs mr-2  py-1">
                            #Maths
                        </div>
                        <div class="pill bg-gray-400 rounded-full px-4 text-xs mr-2  py-1">
                            #Physque
                        </div>
                    </div>
                </div>
                <div class="flex flex-col bg-white rounded p-4 items-center shadow-lg border-r-8 border-red-400">
                    <h2 class="font-bold">Réseaux social</h2>

                    <div class="flex justify-between py-4">
                        <div class="pill bg-gray-400 rounded-full text-xs px-4 py-1 mr-2">
                            #Express
                        </div>
                        <div class="pill bg-gray-400 rounded-full text-xs px-4 py-1 mr-2">
                            #TailwindCSS
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
