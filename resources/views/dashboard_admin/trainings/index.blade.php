@extends('layouts.backend_admin')

@section('content')
<h1>La liste des formations ou cycle</h1>
<strong>
    <a href="{{ route('trainings.create') }}">
        ajouter une formations
    </a>
</strong>
<br>


<table class="table-auto">
    <thead>
    <tr>
        <th class="px-4 py-2">nom de la formation</th>
        <th class="px-4 py-2">Diplome</th>
        <th class="px-4 py-2">Views</th>
    </tr>
    </thead>
    <tbody>
    @foreach( $trainings as $training)
    <tr>
        <td class="border px-4 py-2">{{ $training->name }}</td>
        <td class="border px-4 py-2">{{ $training->diploma }}</td>
        <td class="border px-4 py-2">
            <button> ajouter</button>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
