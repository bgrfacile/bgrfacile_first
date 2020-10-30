@extends('layouts.front')

@section('ressourceCSS')

@endsection

@section('baniere')
    @include('layouts.partials.baniere_profil')
@endsection

@section('content')
    <div class="container mx-auto flex">

        <div class="w-3/4 mx-16 py-6">
            <table class="table-fixed w-full">
                <thead>
                <tr>
                    <th class="w-1/2 px-4 py-2">nom cours</th>
                    <th class="w-1/4 px-4 py-2">voir</th>
                </tr>
                </thead>
                <tbody>
                @foreach($favories as $favori)
                    <tr>
                        <td class="border px-4 py-2">{{ $favori->name }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('cours.show',['cour'=>$favori->course_id]) }}">voir</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="w-1/4 py-6">
            aside
        </div>

    </div>
@endsection
