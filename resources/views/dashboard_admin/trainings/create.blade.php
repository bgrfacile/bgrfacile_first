<h1>Creation d'une formation ou cycle</h1>
<form action="{{ route('trainings.store') }}" method="post">
    @csrf
    @method('post')
    <input name="name" type="text" placeholder="nom">
    <input name="diploma" type="text" placeholder="diplome">
    <button type="submit">valider</button>
</form>
