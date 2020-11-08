@extends('layouts.front')

@section('baniere')
    @include('layouts.partials.baniere_profil')
@endsection

@section('content')
    <div class='py-10'>
        <div
            class="max-w-md mx-auto xl:max-w-5xl lg:max-w-5xl md:max-w-2xl bg-gray-200 max-h-screen shadow-2xl flex-row rounded">
            <div class="p-2 bg-gray-600 text-blue-900 rounded-t">
                <h5 class="text-white text-2xl capitalize">L'administration du site</h5>
            </div>
            <div class="p-2 w-full h-full overflow-y-auto">
                <p class="text-justify py-2">
                    Vous avez assez à cette page parceque vous êtes un administrateur avec les droits d'acccès nécessaire pour gérer le site.
                </p>
                <p class="text-center py-2">
                    <a
                        href="{{ route('dashboard.index') }}"
                        class="py-2 px-4 bg-blue-600 text-sm text-white rounded-md shadow-lg hover:underline">
                        acceder à l'administration
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
