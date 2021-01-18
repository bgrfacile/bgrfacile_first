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
{{--                    @foreach($courses as $course)--}}
{{--                        <section class="">--}}
{{--                            <div class="wrapper max-w-xs bg-gray-50 rounded-b-md shadow-lg overflow-hidden">--}}
{{--                                <div>--}}
{{--                                    <img src="{{ $course->image }}"--}}
{{--                                         class="object-fill w-full rounded-lg rounded-b-none md:h-56"--}}
{{--                                         alt=""/>--}}
{{--                                </div>--}}
{{--                                <div class="p-3 space-y-3">--}}
{{--                                    <h3 class="text-gray-700 font-semibold text-xl">--}}
{{--                                        {{ $course->name }}--}}
{{--                                    </h3>--}}
{{--                                    <p class="text-sm text-gray-900 leading-sm">--}}
{{--                                        {{ $course->description }}--}}
{{--                                    </p>--}}
{{--                                    <div class="flex items-center justify-between px-4 py-2 overflow-hidden">--}}
{{--                                        <div class="w-full flex flex-row items-center justify-between">--}}
{{--                                            --}}{{--                                            comment--}}
{{--                                            <div--}}
{{--                                                class="font-medium text-gray-400 flex flex-row items-center mr-2">--}}
{{--                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"--}}
{{--                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                                          stroke-width="2"--}}
{{--                                                          d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>--}}
{{--                                                </svg>--}}
{{--                                                <span>25</span>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            liker--}}
{{--                                            <a href="#" class="flex items-center justify-center text-gray-400">--}}
{{--                                                <i class="fas fa-thumbs-up mr-2"></i>--}}
{{--                                                <div class="">{{ $course->liker }}</div>--}}
{{--                                            </a>--}}
{{--                                            --}}{{--                                            favori--}}
{{--                                            <a href="#" class="text-gray-400">--}}
{{--                                                <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                     viewBox="0 0 212.045 212.045" fill="currentColor"--}}
{{--                                                     stroke="currentColor"--}}
{{--                                                     xml:space="preserve">--}}
{{--                                                    <path d="M167.871,0H44.84C34.82,0,26.022,8.243,26.022,18v182c0,3.266,0.909,5.988,2.374,8.091c1.752,2.514,4.573,3.955,7.598,3.954--}}
{{--                                                        c2.86,0,5.905-1.273,8.717-3.675l55.044-46.735c1.7-1.452,4.142-2.284,6.681-2.284c2.538,0,4.975,0.832,6.68,2.288l54.86,46.724--}}
{{--                                                        c2.822,2.409,5.657,3.683,8.512,3.683c4.828,0,9.534-3.724,9.534-12.045V18C186.022,8.243,177.891,0,167.871,0z"/>--}}
{{--                                                </svg>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <a href="{{ route('contenu.cours.show',['cour'=>$course->id]) }}"--}}
{{--                                   class="bg-blue-600 w-full flex justify-center py-2 text-white font-semibold transition duration-300 hover:bg-blue-500">--}}
{{--                                    lire--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </section>--}}
{{--                    @endforeach--}}
                </div>

                {{--            pagnination--}}
                {{--                <div class="flex justify-center">--}}
                {{--                    <div class="flex rounded-md mt-8">--}}
                {{--                        <a href="#"--}}
                {{--                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-blue-500 hover:text-white">--}}
                {{--                            <span>Previous</span>--}}
                {{--                        </a>--}}
                {{--                        <a href="#"--}}
                {{--                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>1</span></a>--}}
                {{--                        <a href="#"--}}
                {{--                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>2</span></a>--}}
                {{--                        <a href="#"--}}
                {{--                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>3</span></a>--}}
                {{--                        <a href="#"--}}
                {{--                           class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 rounded-r hover:bg-blue-500 hover:text-white"><span>Next</span></a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
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
