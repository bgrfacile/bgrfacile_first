@extends('layouts.backend_admin')

@section('content')
    dashbord admin
    <br>
    <a
        class="text-red-600 hover:underline"
        href="{{ route('trainings.index') }}">
        acceder aux formation
    </a>
    <br>
    <a
        class="text-red-600 hover:underline"
        href="{{ route('levels.index') }}">
        acceder aux niveaux
    </a>
    <br>
    <a
        class="text-red-600 hover:underline"
        href="{{ route('subjects.index') }}">
        acceder aux matieres
    </a>
@endsection
