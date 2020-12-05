@extends('layouts.base')
@section('title')  astuces physique | bgrfacile.com @endsection

@section('content')
    <div class="min-h-screen">
        <h2 class="text-2xl font-bold text-center py-6">Les principales formules utilisées en physique</h2>
        <div class="container mx-auto">
            <table class="text-left w-full">
                <thead class="bg-black flex items-center text-white w-full">
                <tr class="flex w-full mb-4">
                    <th class="p-4 w-1/4">Description</th>
                    <th class="p-4 w-1/4">formule</th>
                    <th class="p-4 w-1/4">auteur</th>
                    <th class="p-4 w-1/4">niveau enseigner</th>
                </tr>
                </thead>
                <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;">
                <tr class="flex w-full mb-4">
                    <td class="p-4 w-1/4">
                        <strong>La Force</strong>
                        <p>
                            La force, symbole F, est une cause capable de provoquer un effet: un déplacement ou une déformation d'un corps.
                        </p>
                    </td>
                    <td class="p-4 w-1/4">F=m.a</td>
                    <td class="p-4 w-1/4">Newton</td>
                    <td class="p-4 w-1/4">Dès la 6eme</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
