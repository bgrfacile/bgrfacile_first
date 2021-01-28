@extends('layouts.base')

@section('title')

@endsection


@section('content')
    <div class="w-10/12 mx-auto container py-10">
        {{--        <nav class="bg-gray-200 p-3 rounded font-sans w-full m-4">--}}
        {{--            <ol class="list-reset flex text-grey-dark">--}}
        {{--                <li><a href="#" class="text-blue font-bold">Home</a></li>--}}
        {{--                <li><span class="mx-2">/</span></li>--}}
        {{--                <li><a href="#" class="text-blue font-bold">Library</a></li>--}}
        {{--                <li><span class="mx-2">/</span></li>--}}
        {{--                <li>Data</li>--}}
        {{--            </ol>--}}
        {{--        </nav>--}}


        <div class="grid grid-flow-row grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 items-center">
            @foreach($courses as $course)
                <div class="bg-gray-50 shadow-lg overflow-hidden border-2 mx-auto" style="width: 300px">
                    <div class="h-56 overflow-hidden">
                        <img src="{{ $course->image_path }}"
                             class="object-fill w-full"
                             alt="{{ $course->name }}"/>
                    </div>
                    <div class="p-3 space-y-3">
                        <h3 class="text-gray-700 font-semibold text-xl">
                            {{ $course->name }}
                        </h3>
                        <hr>
                        <p class="text-sm text-gray-900 leading-sm">
                            {{ $course->description }}
                        </p>
                        <hr>
                        <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
                            <div class="w-full flex flex-row items-center justify-between">

                                <div
                                        class="font-medium text-gray-400 flex flex-row items-center mr-2">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                    </svg>
                                    <span>25</span>
                                </div>
                                <a href="#" class="flex items-center justify-center text-gray-400">
                                    <i class="fas fa-thumbs-up mr-2"></i>
                                    <div class="">0</div>
                                </a>
                                <a href="#" class="text-gray-400">
                                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 212.045 212.045" fill="currentColor"
                                         stroke="currentColor"
                                         xml:space="preserve">
                                        <path d="M167.871,0H44.84C34.82,0,26.022,8.243,26.022,18v182c0,3.266,0.909,5.988,2.374,8.091c1.752,2.514,4.573,3.955,7.598,3.954
                                         c2.86,0,5.905-1.273,8.717-3.675l55.044-46.735c1.7-1.452,4.142-2.284,6.681-2.284c2.538,0,4.975,0.832,6.68,2.288l54.86,46.724
                                         c2.822,2.409,5.657,3.683,8.512,3.683c4.828,0,9.534-3.724,9.534-12.045V18C186.022,8.243,177.891,0,167.871,0z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('contenu.cours.show',['cour'=>$course->id,'slug'=>$course->slug]) }}"
                       class="bg-blue-600 w-full flex justify-center py-2 text-white font-semibold transition duration-300 hover:bg-blue-500">
                        lire
                    </a>
                </div>
            @endforeach
        </div>

    </div>
@endsection