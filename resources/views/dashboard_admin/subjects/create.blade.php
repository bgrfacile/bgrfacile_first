<h1>Creation d'une matiere</h1>
<form action="{{ route('subjects.store') }}" method="post">
    @csrf
    @method('post')
    <input name="name" type="text" placeholder="nom de la matiere">
    <button type="submit">valider</button>
</form>
