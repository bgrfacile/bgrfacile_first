@extends('layouts.base')
@section('title')
    recherche
@endsection

@section('content')
    <div class="bg-gray-100 py-8">
        <div class="main">
            <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
                <!-- hero -->
                <div class="hero">
                    <!-- hero headline -->
                    <div class="hero-headline flex flex-col items-center justify-center pt-8 text-center">
                        {{--                            <h1 class=" font-bold text-3xl text-gray-900">Recherche sur l'ensemble du site</h1>--}}
                    </div>

                    <!-- image search box -->
                    <div class="box pt-6">
                        <div class="box-wrapper">
                            <form action="" method="get"
                                  class=" bg-white rounded flex items-center w-full p-3 shadow-sm border border-gray-200">
                                <button type="submit" class="outline-none focus:outline-none">
                                    <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </button>
                                <input type="search" name="q" value="<?= e($_GET['q'] ?? null) ?>"
                                       placeholder="entrer votre recherche"
                                       class="w-full pl-4 text-sm outline-none focus:outline-none bg-transparent">
                                {{--                                <div class="select">--}}
                                {{--                                    <select name="filtre"--}}
                                {{--                                            class="text-sm outline-none focus:outline-none bg-transparent">--}}
                                {{--                                        <option value="all" selected>Tout</option>--}}
                                {{--                                        <option value="cours">Cours</option>--}}
                                {{--                                        <option value="exercice">Exercice</option>--}}
                                {{--                                        <option value="corriger">Corriger</option>--}}
                                {{--                                        <option value="astuces">Astuces</option>--}}
                                {{--                                    </select>--}}
                                {{--                                </div>--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-screen-xl mx-auto pt-8 pb-16 sm:pt-8 sm:pb-20 px-4 sm:px-6 lg:pt-8 lg:pb-28 lg:px-8">

        <nav class="bg-gray-100 p-3 rounded font-sans w-full m-4 flex justify-between">
            @if($count_courses != null)
                <span>{{ $count_courses }} @if($count_courses>1) Résultats @else Résultat @endif</span>
            @elseif($count_courses === 0)
                <span>Aucune resultat pour votre recherche</span>
            @elseif($count_courses === null  )
                <span>Aucune recherche n'effectue</span>
            @endif
            <ol class="list-reset flex text-grey-dark">
                @if(Breadcrumbs::has())
                    @foreach (Breadcrumbs::current() as $crumbs)
                        @if ($crumbs->url() && !$loop->last)
                            <li class="breadcrumb-item text-blue font-bold">
                                <a href="{{ $crumbs->url() }}">
                                    {{ $crumbs->title() }}
                                </a>
                            </li>
                            <li><span class="mx-2">/</span></li>
                        @else
                            <li class="breadcrumb-item active">
                                {{ $crumbs->title() }}
                            </li>
                        @endif
                    @endforeach
                @endif
            </ol>
        </nav>

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
                            {{ Str::limit($course->description, 120, '...') }}
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
    </div>
@endsection
