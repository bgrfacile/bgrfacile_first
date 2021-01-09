@extends('layouts.base')

@section('title')
    Mon compte
@endsection

@section('baniere')
    @include('layouts.partials.baniere_profil')
@endsection

@section('content')
    <div class="py-10">
        <div class="grid col-span-1 md:flex items-center mt-10 justify-center">

            <div class="md:mr-4">
                <img class="md:w-40" src="https://i.imgur.com/xUbzfdw.png" alt="">
            </div>
            <div class="md:border-l-2 pl-4 p-2 col-span-2 text-justify md:w-1/2 mt-10 md:mt-0">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ex urna, lobortis nec venenatis sed, fringilla at nibh.
                </p>
                <p class="mt-4">
                    Fusce auctor gravida dui, ut tristique nisi aliquam quis. Maecenas id ligula ac dui mollis tempor. Sed vitae ex eros. Proin nisl felis, consectetur sed elit sed, vestibulum ultrices nibh.
                </p>
            </div>
        </div>
        <div class="grid col-span-1 md:flex items-center justify-center mt-20">
            <div>
                <div class="md:flex items-center mb-4">
                    <div class="flex items-center md:mr-8 mb-4 md:mb-0">
                        <svg class="svg-inline--fa fa-envelope-open-text fa-w-16 fa-2x mr-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope-open-text" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M176 216h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16zm-16 80c0 8.84 7.16 16 16 16h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16zm96 121.13c-16.42 0-32.84-5.06-46.86-15.19L0 250.86V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V250.86L302.86 401.94c-14.02 10.12-30.44 15.19-46.86 15.19zm237.61-254.18c-8.85-6.94-17.24-13.47-29.61-22.81V96c0-26.51-21.49-48-48-48h-77.55c-3.04-2.2-5.87-4.26-9.04-6.56C312.6 29.17 279.2-.35 256 0c-23.2-.35-56.59 29.17-73.41 41.44-3.17 2.3-6 4.36-9.04 6.56H96c-26.51 0-48 21.49-48 48v44.14c-12.37 9.33-20.76 15.87-29.61 22.81A47.995 47.995 0 0 0 0 200.72v10.65l96 69.35V96h320v184.72l96-69.35v-10.65c0-14.74-6.78-28.67-18.39-37.77z"></path></svg><!-- <i class="fas fa-envelope-open-text fa-2x mr-2"></i> Font Awesome fontawesome.com -->
                        <p>matias@icodeart.cl</p>
                    </div>

                    <div class="flex items-center">
                        <svg class="svg-inline--fa fa-github fa-w-16 fa-2x mr-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg><!-- <i class="fab fa-github fa-2x mr-2"></i> Font Awesome fontawesome.com -->
                        <p><b>github.com/</b>mkdirmatias</p>
                    </div>
                </div>

                <div class="md:flex items-center">
                    <div class="flex items-center md:mr-7">
                        <svg class="svg-inline--fa fa-phone-alt fa-w-16 fa-2x mr-2 mb-4 md:mb-0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg><!-- <i class="fas fa-phone-alt fa-2x mr-2 mb-4 md:mb-0"></i> Font Awesome fontawesome.com -->
                        <p>+5 6 9 3 2 6 8 8 8 2 4 </p>
                    </div>

                    <div class="flex items-center">
                        <svg class="svg-inline--fa fa-globe fa-w-16 fa-2x mr-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="globe" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path></svg><!-- <i class="fas fa-globe fa-2x mr-2"></i> Font Awesome fontawesome.com -->
                        <p> icodeart.cl</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center md:ml-12 pt-10 md:pt-0">
                <div class="md:flex">
                    <div class="flex items-center mb-4 md:mb-0">
                        <p class="font-bold mr-2 p-2 border rounded-full">ES</p>
                        <p>NATIVO</p>
                    </div>

                    <div class="flex items-center md:ml-10">
                        <p class="font-bold mr-2 p-2 border rounded-full">EN</p>
                        <p>BÁSICO</p>
                    </div>
                </div>
            </div>
        </div>

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
