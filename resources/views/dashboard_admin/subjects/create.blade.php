@extends('layouts.backend_admin')

@section('content')
    <h1>Creation d'une matiere</h1>

    <form action="{{ route('subjects.store') }}" method="post">
        @csrf
        @method('post')
        <select name="level">
            @foreach($levels as $level)
                <option value="{{ $level->id }}">{{ $level->name }}</option>
            @endforeach
        </select>
        <input name="name" type="text" placeholder="subject">
        <button type="submit">valider</button>
    </form>
@endsection
