<h1>Creation d'un niveau ou cycle</h1>
<form action="{{ route('levels.store') }}" method="post">
    @csrf
    @method('post')
    <select name="training">
        @foreach($trainings as $training)
            <option value="{{ $training->id }}">{{ $training->name }}</option>
        @endforeach
    </select>
    <input name="name" type="text" placeholder="niveau">
    <button type="submit">valider</button>
</form>
