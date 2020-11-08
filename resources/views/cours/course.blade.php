@extends('layouts.front')

@section('baniere')

@endsection


@section('content')
    <div x-data="{ cartOpen: false , isOpen: false }" class="bg-white">
        <section class="my-8">
            <div class="container mx-auto px-6">
                {{--                formulaire de chargement--}}
                    <div class="text-gray-700 text-lg font-medium mb-4 p-2 border-2 border-dashed">
                        {{--                    cycle --}}
                        <select
                            name="formation"
                            id="cycle"
                            class="linked-select"
                            data-target="#level"
                            data-source="{{ route('contenu.level',['type'=>'formation','filter'=>'id']) }}">
                            <option value="0">Sélectionner un cycle</option>
                            @foreach($trainings as $training)
                                <option value="{{$training->id}}">{{$training->name}}</option>
                            @endforeach
                        </select>
                        {{--                    niveau--}}
                        <select
                            style="display: none"
                            name="level"
                            id="level"
                            class="linked-select"
                            data-target="#subject"
                            data-source="{{ route('contenu.level',['type'=>'level','filter'=>'id']) }}">
                            <option value="0">Sélectionner un niveau</option>
                        </select>
                        {{--                    matiere--}}
                        <select
                            style="display: none"
                            name="subject"
                            id="subject"
{{--                            class="linked-select"--}}
                            data-target="#subject"
{{--                            data-source="{{ route('contenu.level',['type'=>'level','filter'=>'id']) }}"--}}
                        >
                            <option value="0">Sélectionner un cours</option>
                        </select>
                        {{--                        <button --}}
                        {{--                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-2 border border-blue-500 hover:border-transparent rounded">--}}
                        {{--                            recharger--}}
                        {{--                        </button>--}}
                    </div>

                {{--                nombre de cours trouver--}}
                <span class="mt-3 text-xl text-gray-500">{{ $count_courses }} cours</span>

                {{--                container de cours--}}
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    {{--                    @foreach($courses as $course)--}}
                    {{--                        <div class="w-full max-w-sm mx-auto rounded-md transition-all duration-150 ">--}}
                    {{--                            <div--}}
                    {{--                                class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl">--}}
                    {{--                                <div class="md:flex-shrink-0">--}}
                    {{--                                    <img--}}
                    {{--                                        src='https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'--}}
                    {{--                                        alt=""--}}
                    {{--                                        class="object-fill w-full rounded-lg rounded-b-none md:h-56">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="flex items-center justify-between px-4 py-2 overflow-hidden">--}}
                    {{--                                        <span class="text-xs font-medium text-blue-600 uppercase">--}}
                    {{--                                         Notes--}}
                    {{--                                        </span>--}}
                    {{--                                    <div class="flex flex-row items-center">--}}
                    {{--                                        <div--}}
                    {{--                                            class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">--}}
                    {{--                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"--}}
                    {{--                                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">--}}
                    {{--                                                <path stroke-linecap="round" stroke-linejoin="round"--}}
                    {{--                                                      stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>--}}
                    {{--                                                <path stroke-linecap="round" stroke-linejoin="round"--}}
                    {{--                                                      stroke-width="2"--}}
                    {{--                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>--}}
                    {{--                                            </svg>--}}
                    {{--                                            <span>1.5k</span>--}}
                    {{--                                        </div>--}}

                    {{--                                        <div--}}
                    {{--                                            class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">--}}
                    {{--                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"--}}
                    {{--                                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">--}}
                    {{--                                                <path stroke-linecap="round" stroke-linejoin="round"--}}
                    {{--                                                      stroke-width="2"--}}
                    {{--                                                      d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>--}}
                    {{--                                            </svg>--}}
                    {{--                                            <span>25</span>--}}
                    {{--                                        </div>--}}

                    {{--                                        <div class="text-xs font-medium text-gray-500 flex flex-row items-center">--}}
                    {{--                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"--}}
                    {{--                                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">--}}
                    {{--                                                <path stroke-linecap="round" stroke-linejoin="round"--}}
                    {{--                                                      stroke-width="2"--}}
                    {{--                                                      d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>--}}
                    {{--                                            </svg>--}}
                    {{--                                            <span>6</span>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <hr class="border-gray-300">--}}
                    {{--                                <div class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">--}}
                    {{--                                    <a href="{{ route('contenu.cours.show',['cour'=>$course->id]) }}"--}}
                    {{--                                       class="hover:underline">--}}
                    {{--                                        <h2 class="text-3xl font-bold tracking-normal text-gray-800">--}}
                    {{--                                            {{ $course->name }}--}}
                    {{--                                        </h2>--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                                <hr class="border-gray-300">--}}
                    {{--                                <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify text-gray-700">--}}
                    {{--                                    {{ $course->description }}--}}
                    {{--                                </p>--}}
                    {{--                                <hr class="border-gray-300">--}}
                    {{--                                <section class="px-4 py-2 mt-2">--}}
                    {{--                                    <div class="flex items-center justify-between">--}}
                    {{--                                        <div class="flex overflow-hidden">--}}
                    {{--                                            <img class="inline-block h-6 w-6 rounded-full text-white shadow-solid"--}}
                    {{--                                                 src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"--}}
                    {{--                                                 alt="">--}}
                    {{--                                            <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid"--}}
                    {{--                                                 src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"--}}
                    {{--                                                 alt="">--}}
                    {{--                                            <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid"--}}
                    {{--                                                 src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"--}}
                    {{--                                                 alt="">--}}
                    {{--                                            <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid"--}}
                    {{--                                                 src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"--}}
                    {{--                                                 alt="">--}}
                    {{--                                        </div>--}}
                    {{--                                        <p class="mt-1 text-xs text-gray-600">9 minutes read</p>--}}
                    {{--                                    </div>--}}
                    {{--                                </section>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    @endforeach--}}
                </div>

                {{--            pagnination--}}
                <div class="flex justify-center">
                    <div class="flex rounded-md mt-8">
                        <a href="#"
                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-blue-500 hover:text-white">
                            <span>Previous</span>
                        </a>
                        <a href="#"
                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>1</span></a>
                        <a href="#"
                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>2</span></a>
                        <a href="#"
                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>3</span></a>
                        <a href="#"
                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 rounded-r hover:bg-blue-500 hover:text-white"><span>Next</span></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection


@section('script')
    <script src="{{ asset('js/filter_courses.js') }}"></script>
@endsection
