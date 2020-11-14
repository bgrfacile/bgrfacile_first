@extends('layouts.front')

@section('baniere')
    @include('layouts.partials.baniere_profil')
@endsection

@section('content')
    <div class="flex container w-11/12 px-4 mx-auto min-h-screen mt-5">
        <div class="w-64 px-8 py-4 bg-gray-100 border-r overflow-auto">
            <nav class="mt-8">
                <div class="mt-2 -mx-3">
                    <a href="#"
                       class="flex justify-between items-center px-3 py-2 bg-gray-200 rounded-lg">
                        <span class="text-sm font-medium text-gray-900 ">
                            Tableau de bord
                        </span>
                    </a>
                    {{--                    <a href="#" class="flex justify-between items-center px-3 py-2 rounded-lg">--}}
                    {{--                        <span class="text-sm font-medium text-gray-700 ">--}}
                    {{--                            En ligne--}}
                    {{--                        </span>--}}
                    {{--                        <span class="text-xs font-semibold text-gray-700 ">22</span>--}}
                    {{--                    </a>--}}
                    {{--                    <a href="#" class="flex justify-between items-center px-3 py-2 rounded-lg">--}}
                    {{--                        <span class="text-sm font-medium text-gray-700 ">--}}
                    {{--                            Brouillant--}}
                    {{--                        </span>--}}
                    {{--                        <span class="text-xs font-semibold text-gray-700 ">12</span>--}}
                    {{--                    </a>--}}
                </div>
            </nav>
        </div>
        <div class="flex-1 min-w-0 bg-white flex flex-col">
            {{--            header--}}
            <div class="flex-shrink-0 border-b-2 border-gray-200">
                <header class="px-6">
                    <div class="flex justify-between items-center py-2">
                        <div class="flex">
                            <h2 class="text-2xl font-semibold text-gray-900 leading-tight">Tableau de bord</h2>
                        </div>
                        <div class="flex">
                            <a href="#"
                               class="ml-5 flex items-center pl-2 pr-4 py-3 text-sm font-medium text-white bg-blue-800 rounded hover:bg-blue-700">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">
                                    <path stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          d="M12 7v10m5-5H7"></path>
                                </svg>
                                <span class="ml-1">New exercice</span>

                            </a>
                        </div>
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
                            <th class="text-left p-3 px-5">Status</th>
                            <th></th>
                        </tr>
                            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                <td class="p-3 px-5">
                                    -
                                </td>
                                <td class="p-3 px-5">
                                    -
                                </td>
                                <td class="p-3 px-5">
                                    <select value="user.role" class="bg-transparent">
                                            <option value="0">
                                                En ligne
                                            </option>
                                            <option value="1">
                                                Hors ligne
                                            </option>
                                    </select>
                                </td>
                                <td class="p-3 px-5 flex justify-end">
                                    <a href="#"
                                       class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                        Modifier
                                    </a>
                                    <button type="button"
                                            class="mr-3 text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                        Supprimer
                                    </button>
                                    <button type="button"
                                            class="text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                        Voir
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        //sortable
        $(function () {
            $("#sortable").sortable({
                cancel: ".disable"
            });
            $("#sortable").disableSelection();
        });
    </script>
@endsection
