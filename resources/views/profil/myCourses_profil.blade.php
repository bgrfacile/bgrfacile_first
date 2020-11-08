@extends('layouts.front')

@section('baniere')
    @include('layouts.partials.baniere_profil')
@endsection


@section('content')
        <div class="container mx-auto flex">

            <div class="w-3/4 mx-16 py-6">
                liste de mes cours
                <table class="table-fixed w-full">
                    <thead>
                    <tr>
                        <th class="w-1/2 px-4 py-2">nom cours</th>
                        <th class="w-1/4 px-4 py-2">modifier</th>
                        <th class="w-1/4 px-4 py-2">voir</th>
                        <th class="w-1/4 px-4 py-2">supprimer</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($courses as $course)
                    <tr>
                        <td class="border px-4 py-2">{{ $course->name }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('cours.edit',['cour'=>$course->id]) }}">modifier</a>
                        </td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('cours.show',['cour'=>$course->id]) }}">voir</a>
                        </td>
                        <td class="border px-4 py-2">
                            <form method="POST" action="{{ route('cours.destroy',['cour'=>$course->id]) }}">
                                @csrf
                                @method('delete')
                                <button class="text-success">
                                    Déconnexion
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="w-1/4 py-6">
                <a href="{{ route('course.create') }}">cree un cour</a>
            </div>
        </div>
@endsection
