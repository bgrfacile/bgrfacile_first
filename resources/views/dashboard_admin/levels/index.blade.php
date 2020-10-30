@extends('layouts.backend_admin')

@section('content')
    <h1>Liste de tous les niveaux</h1>
    <strong>
        <a href="{{ route('levels.create') }}">
            ajouter un niveaux
        </a>
    </strong>
    <br>
    
    <table class="table-auto">
        <thead>
        <tr>
            <th class="px-4 py-2">nom du niveau</th>
            <th class="px-4 py-2">action</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $levels as $level)
            <tr>
                <td class="border px-4 py-2">{{ $level->name }}</td>
                <td class="border px-4 py-2">
                    <form method="POST" action="{{ route('levels.destroy',['level'=>$level->id]) }}">
                        @csrf
                        @method('delete')
                        <button class="text-success">
                            delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
