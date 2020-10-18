modification du cours <strong>{{ $course->name }}</strong>
<form action="{{ route('cours.update',['cour'=>$course->id]) }}" method="post">
    @csrf
    @method('put')
    <input name="name" value="{{ $course->name }}" type="text" placeholder="nom du cours"><br>
    <label for="desription">résumer</label>
    <textarea name="description" id="desription" cols="30" rows="10">{{ $course->description }}</textarea><br>
    <label for="contenue">contenue</label>
    <textarea name="content" id="contenue" cols="30" rows="10">{{ $course->content }}</textarea><br>
   <button type="submit">modifier ce cours</button>
</form>
