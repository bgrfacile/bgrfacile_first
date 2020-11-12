@extends('layouts.front')

@section('ressourceCSS')

@endsection

@section('baniere')
    @include('layouts.partials.baniere_profil')
@endsection

@section('content')
    <div class="flex container w-11/12 px-4 mx-auto min-h-screen mt-5">
        {{--        aside--}}
        <div class="w-64 px-8 py-4 bg-gray-100 border-r overflow-auto">
            <nav class="mt-8">
                <div class="mt-2 -mx-3">
                    <a href="#" class="flex justify-between items-center px-3 py-2 bg-gray-200 rounded-lg">
                        <span class="text-sm font-medium text-gray-900 ">
                            Cours
                        </span>
                        <span class="text-xs font-semibold text-gray-700 ">22</span>
                    </a>
                    <a href="#" class="flex justify-between items-center px-3 py-2 rounded-lg">
                                        <span class="text-sm font-medium text-gray-700 ">
                                            Exercices
                                        </span>
                        <span class="text-xs font-semibold text-gray-700 ">12</span>
                    </a>
                    <a
                        href="#"
                        class="flex justify-between items-center px-3 py-2 rounded-lg">
                        <span class="text-sm font-medium text-gray-700 ">
                            Corrigés
                        </span>
                        <span class="text-xs font-semibold text-gray-700 ">12</span>
                    </a>
                </div>
            </nav>
        </div>
        {{--        content main--}}
        <div class="flex-1 min-w-0 bg-white flex flex-col">
            {{--            header--}}
            <div class="flex-shrink-0 border-b-2 border-gray-200">
                <header class="px-6">
                    <div class="flex justify-between items-center py-2">
                        <div class="flex">
                            <h2 class="text-2xl font-semibold text-gray-900 leading-tight">
                                Listes des cours en favoris
                            </h2>
                        </div>
                        {{--                        <div class="flex">--}}
                        {{--                            <a href="{{ route('course.create') }}"--}}
                        {{--                               class="ml-5 flex items-center pl-2 pr-4 py-3 text-sm font-medium text-white bg-gray-800 rounded hover:bg-gray-700">--}}
                        {{--                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">--}}
                        {{--                                    <path stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
                        {{--                                          d="M12 7v10m5-5H7"></path>--}}
                        {{--                                </svg>--}}
                        {{--                                <span class="ml-1">New cours</span>--}}
                        {{--                            </a>--}}
                        {{--                        </div>--}}
                    </div>
                </header>
            </div>

            {{--            contenues--}}
            <div class="flex-1 overflow-auto">
                <div class="px-3 py-4 flex justify-center">
                    <table class="w-full text-md bg-white shadow-md rounded mb-4">
                        <tbody>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">Nom du cours</th>
                            <th class="text-left p-3 px-5">Matiere</th>
                            <th></th>
                        </tr>
                        @foreach($favories as $course)
                            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                <td class="p-3 px-5">
                                    {{ $course->name }}
                                </td>
                                <td class="p-3 px-5">
                                    {{ $course->subject_id }}
                                </td>
                                <td class="p-3 px-5 flex justify-end">
                                    <a href="#"
                                       class="mr-3 text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                        retirer
                                    </a>
                                    <button type="button"
                                            class="text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                        Voir
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
