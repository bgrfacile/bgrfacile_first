@extends('layouts.base')

@section('title')
    cours
@endsection

@section('baniere')

@endsection


@section('content')
    <section class="py-8 container w-10/12 mx-auto">
        {{--        title--}}
        <div class="text-center">
            <div class="text-2xl text-secondary font-bold flex-1" id="typed-strings">
                <p>Bienvenue dans la section cours</p>
                <p class="text-center">
                    Selectionner
                    <strong class="text-blue-400">Un cycle</strong> >
                    <strong class="text-green-400">Un niveau</strong> >
                    <strong class="text-red-400">Une matiere</strong>
                    et recharger
                </p>
            </div>
            <span id="typed" class="text-2xl text-secondary font-bold flex-1"></span>
        </div>
        {{--        filtre--}}
        <div>
            <section class="mt-3">
                {{--                formulaire de chargement--}}
                <form action="{{ route('cours.view') }}" method="post"
                      class="flex flex-col md:flex-col text-gray-700 text-lg font-medium mb-4 p-2 border-4 border-dashed">
                    @csrf
                    <div>
                        {{--                    cycle --}}
                        <select
                                name="formation"
                                id="cycle"
                                class="linked-select border p-2 rounded w-full mb-4"
                                data-target="#level"
                                data-source="{{ route('contenu.level',['type'=>'formation','filter'=>'id']) }}">
                            <option value="0">Sélectionner un cycle</option>
                            @foreach($trainings as $training)
                                <option value="{{$training->id}}">{{$training->name}}</option>
                            @endforeach
                        </select>
                        {{--                    niveau--}}
                        <div>
                            <select
                                    style="display: none"
                                    name="level"
                                    id="level"
                                    class="linked-select border p-2 rounded  w-full mb-4"
                                    data-target="#subject"
                                    data-source="{{ route('contenu.level',['type'=>'level','filter'=>'id']) }}">
                                <option value="0">Sélectionner un niveau</option>
                            </select>
                        </div>
                        {{--                    matiere--}}
                        <div>
                            <select
                                    style="display: none"
                                    name="subject"
                                    id="subject"
                                    class="border p-2 rounded w-full mb-4 subject_charge"
                                    data-target="#subject"
                                    data-source="{{ route('contenu.level',['type'=>'subject','filter'=>'id']) }}">
                                <option value="0">Sélectionner une matière</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit"
                            id="btn_hiden"
                            class="hidden rounded bg-blue-600 w-full flex justify-center py-2 text-white font-semibold transition duration-300 hover:bg-blue-500">
                        recharger
                    </button>
                </form>
            </section>
        </div>

        <h2 class="text-2xl text-secondary font-bold flex-1 my-8 pb-2 border-b">
            <span>Les Derniers cours mis en ligne sur le site</span>
        </h2>
        {{--        <div class="grid grid-flow-row grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 items-center">--}}
        {{--            <div class="flex flex-wrap items-stretch">--}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach($courses as $course)
                <div class=" flex flex-col shadow-lg overflow-hidden border-2 mx-auto mb-4" style="width: 300px">
                    <div class="h-56 overflow-hidden">
                        <img src="{{ $course->image_path }}"
                             class="object-fill w-full"
                             alt="{{ $course->name }}"/>
                    </div>
                    <div class="p-3 space-y-3 flex-1 flex flex-col">
                        <h3 class="text-gray-700 font-semibold text-xl">
                            {{ $course->name }}
                        </h3>
                        <hr>
                        <p class="text-sm text-gray-900 leading-sm flex-1">
                            {{ Str::limit($course->description, 20, ' (...)') }}
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
                                <form class="mb-0 flex" action="{{ route('course.like') }}" id="form_js" method="post">
                                    @csrf
                                    <input type="hidden" id="course_id_js" value="{{ $course->id }}">
                                    <button type="submit" class="flex items-center justify-center text-gray-400">
                                        <i class="fas fa-thumbs-up mr-2"></i>
                                    </button>
                                    <div id="count_js" class="">{{ $course->likes->count() }}</div>
                                </form>
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
    </section>
@endsection


@section('script')
    <script src="{{ asset('js/filter_courses.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script>
        let typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            strings: ['First ^1000 sentence.', 'Second sentence.']
        });
    </script>

    <script>
        const subject_charge = document.querySelector('.subject_charge');
        const btn_hiden = document.querySelector('#btn_hiden');
        subject_charge.addEventListener('change', function (e) {
            if (subject_charge.value !== "0") {
                btn_hiden.style.display = 'flex';
            } else {
                btn_hiden.style.display = 'none';
            }

        });
    </script>

    <script>


    </script>
@endsection