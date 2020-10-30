<h1>liste des matieres</h1>

<strong>
    <a href="{{ route('subjects.create') }}">
        ajouter une matiere
    </a>
</strong>
<br>

<table class="table">
    <thead>
    <tr>
        <th scope="col">nom du niveau</th>
        <th scope="col">delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach( $subjects as $subject)
        <tr>
            <th scope="row">{{ $subject->name }}</th>
            <th scope="row">
                <form method="POST" action="{{ route('subjects.destroy',['subject'=>$subject->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-success">
                        delete
                    </button>
                </form>
            </th>
        </tr>
    @endforeach
    </tbody>
</table>

