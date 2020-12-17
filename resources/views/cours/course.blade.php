@extends('layouts.base')

@section('title')
    cours
@endsection

@section('baniere')

@endsection


@section('content')
    <div x-data="{ cartOpen: false , isOpen: false }" class="bg-white">
        <section class="my-8">
            <div class="container mx-auto px-6">
                {{--                formulaire de chargement--}}
                <div
                    class="flex flex-col md:flex-row text-gray-700 text-lg font-medium mb-4 p-2 border-2 border-dashed">
                    {{--                    cycle --}}
                    <div class="">
                        <select
                            name="formation"
                            id="cycle"
                            class="linked-select border p-2 rounded w-full sm:w-64"
                            data-target="#level"
                            data-source="{{ route('contenu.level',['type'=>'formation','filter'=>'id']) }}">
                            <option value="0">Sélectionner un cycle</option>
                            @foreach($trainings as $training)
                                <option value="{{$training->id}}">{{$training->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{--                    niveau--}}
                    <div class="pt-6 md:pt-0 md:pl-6">
                        <select
                            style="display: none"
                            name="level"
                            id="level"
                            class="linked-select border p-2 rounded w-full sm:w-64"
                            data-target="#subject"
                            data-source="{{ route('contenu.level',['type'=>'level','filter'=>'id']) }}">
                            <option value="0">Sélectionner un niveau</option>
                        </select>
                    </div>
                    {{--                    matiere--}}
                    <div class="pt-6 md:pt-0 md:pl-6">
                        <select
                            style="display: none"
                            name="subject"
                            id="subject"
                            class="border p-2 rounded w-full sm:w-64 "
                            data-target="#subject"
                            data-source="{{ route('contenu.level',['type'=>'subject','filter'=>'id']) }}">
                            <option value="0">Sélectionner une matière</option>
                        </select>
                    </div>
                </div>

                {{--                nombre de cours trouver--}}
                <div class="mt-3 text-xl text-gray-500 py-4">{{ $count_courses }} cours</div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @foreach($courses as $course)
                        {{--                        <div class="w-full max-w-sm mx-auto rounded-md transition-all duration-150 ">--}}
                        {{--                            <div--}}
                        {{--                                class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl">--}}
                        {{--                                <div class="md:flex-shrink-0">--}}
                        {{--                                    <img--}}
                        {{--                                        --}}{{--                                        src='https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'--}}
                        {{--                                        src="{{ $course->image }}"--}}
                        {{--                                        alt=""--}}
                        {{--                                        class="object-fill w-full rounded-lg rounded-b-none md:h-56">--}}
                        {{--                                </div>--}}
                        {{--                                <div class="flex items-center justify-between px-4 py-2 overflow-hidden">--}}
                        {{--                                    <div class="flex flex-row items-center justify-between">--}}
                        {{--                                        --}}{{--                                        vue--}}
                        {{--                                        --}}{{--                                        <div--}}
                        {{--                                        --}}{{--                                            class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">--}}
                        {{--                                        --}}{{--                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"--}}
                        {{--                                        --}}{{--                                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">--}}
                        {{--                                        --}}{{--                                                <path stroke-linecap="round" stroke-linejoin="round"--}}
                        {{--                                        --}}{{--                                                      stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>--}}
                        {{--                                        --}}{{--                                                <path stroke-linecap="round" stroke-linejoin="round"--}}
                        {{--                                        --}}{{--                                                      stroke-width="2"--}}
                        {{--                                        --}}{{--                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>--}}
                        {{--                                        --}}{{--                                            </svg>--}}
                        {{--                                        --}}{{--                                            <span>1.5k</span>--}}
                        {{--                                        --}}{{--                                        </div>--}}

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
                        {{--                                <div class="flex flex-wrap items-center p-1">--}}
                        {{--                                    <a href="{{ route('contenu.cours.show',['cour'=>$course->id]) }}"--}}
                        {{--                                       class="hover:underline">--}}
                        {{--                                        <h2 class="text-2xl font-bold text-gray-800">--}}
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

                        <section class="">
                            <div class="wrapper max-w-xs bg-gray-50 rounded-b-md shadow-lg overflow-hidden">
                                <div>
                                    {{--                                    <img src="https://cdn.pixabay.com/photo/2016/05/24/16/48/mountains-1412683_1280.png"--}}
                                    <img src="{{ $course->image }}"
                                         class="object-fill w-full rounded-lg rounded-b-none md:h-56"
                                         alt=""/>
                                </div>
                                <div class="p-3 space-y-3">
                                    <h3 class="text-gray-700 font-semibold text-xl">
                                        {{ $course->name }}
                                    </h3>
                                    <p class="text-sm text-gray-900 leading-sm">
                                        {{ $course->description }}
                                    </p>
                                    {{--                                    note--}}
                                    {{--                                    <p>--}}
                                    {{--                                      <span class="flex">--}}
                                    {{--                                         <svg--}}
                                    {{--                                             fill="currentColor"--}}
                                    {{--                                             viewBox="0 0 20 20"--}}
                                    {{--                                             class="h-5 text-teal-600">--}}
                                    {{--                                            <path--}}
                                    {{--                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"--}}
                                    {{--                                            ></path>--}}
                                    {{--                                         </svg>--}}
                                    {{--                                         <svg--}}
                                    {{--                                             fill="currentColor"--}}
                                    {{--                                             viewBox="0 0 20 20"--}}
                                    {{--                                             class="h-5 text-teal-600"--}}
                                    {{--                                         >--}}
                                    {{--                                            <path--}}
                                    {{--                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"--}}
                                    {{--                                            ></path>--}}
                                    {{--                                         </svg>--}}
                                    {{--                                         <svg--}}
                                    {{--                                             fill="currentColor"--}}
                                    {{--                                             viewBox="0 0 20 20"--}}
                                    {{--                                             class="h-5 text-teal-600"--}}
                                    {{--                                         >--}}
                                    {{--                                            <path--}}
                                    {{--                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"--}}
                                    {{--                                            ></path>--}}
                                    {{--                                         </svg>--}}
                                    {{--                                         <svg--}}
                                    {{--                                             fill="currentColor"--}}
                                    {{--                                             viewBox="0 0 20 20"--}}
                                    {{--                                             class="h-5 text-teal-600"--}}
                                    {{--                                         >--}}
                                    {{--                                            <path--}}
                                    {{--                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"--}}
                                    {{--                                            ></path>--}}
                                    {{--                                         </svg>--}}
                                    {{--                                         <svg--}}
                                    {{--                                             fill="currentColor"--}}
                                    {{--                                             viewBox="0 0 20 20"--}}
                                    {{--                                             class="h-5 text-gray-200"--}}
                                    {{--                                         >--}}
                                    {{--                                            <path--}}
                                    {{--                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"--}}
                                    {{--                                            ></path>--}}
                                    {{--                                         </svg>--}}
                                    {{--                                      </span>--}}
                                    {{--                                    </p>--}}
                                    <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
                                        <div class="w-full flex flex-row items-center justify-between">
                                            {{--                                            comment--}}
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
                                            {{--                                            liker--}}
                                            <a href="#" class="flex items-center justify-center text-gray-400">
                                                <i class="fas fa-thumbs-up mr-2"></i>
                                                <div class="">{{ $course->liker }}</div>
                                            </a>
                                            {{--                                            favori--}}
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
                                <a href="{{ route('contenu.cours.show',['cour'=>$course->id]) }}"
                                   class="bg-blue-600 w-full flex justify-center py-2 text-white font-semibold transition duration-300 hover:bg-blue-500">
                                    lire
                                </a>
                            </div>
                        </section>
                    @endforeach
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
<script>
    import Button from "../../js/Jetstream/Button";

    export default {
        components: {Button}
    }
</script>
