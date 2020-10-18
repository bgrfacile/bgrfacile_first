creation d'un contenue cours
<form action="{{ route('cours.store') }}" method="post">
    @csrf
    @method('post')
    <input name="name" type="text" placeholder="nom du cours"><br>
    <label for="desription">résumer</label>
    <textarea name="description" id="desription" cols="30" rows="10"></textarea><br>
    <label for="contenue">contenue</label>
    <textarea name="content" id="contenue" cols="30" rows="10"></textarea><br>
    <button type="submit">cree et publier le cours</button>
</form>
