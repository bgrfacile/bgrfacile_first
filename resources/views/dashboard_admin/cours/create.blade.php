@extends('layouts.dashboardAdmin')

@section('title')
    creation d'un cours
@endsection

@section('contenue')
    <form action="{{ route('cours.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input name="user_id" type="hidden" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row flex-between-center">
                    <div class="col-md">
                        <h5 class="mb-2 mb-md-0">Créer cours</h5>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-falcon-default btn-sm mr-2" role="button">
                            Enregistrer
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-0">
            {{--        droite--}}
            <div class="col-lg-8 pr-lg-2">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Paramètre du cours</h5>
                    </div>
                    <div class="card-body bg-light">
                        <div class="row gx-2">
                            {{--                        cycle--}}
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="cycle">Cycle</label>
                                <select
                                    name="formation"
                                    id="cycle"
                                    class="linked-select form-select"
                                    data-target="#level"
                                    data-source="{{ route('contenu.level',['type'=>'formation','filter'=>'id']) }}">
                                    <option value="0">Sélectionner un cycle</option>
                                    @foreach($trainings as $training)
                                        <option value="{{$training->id}}">{{$training->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--                        level--}}
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="event-state">Niveau</label>
                                <select
                                    style="display: none"
                                    name="level"
                                    id="level"
                                    class="linked-select form-select"
                                    data-target="#subject"
                                    data-source="{{ route('contenu.level',['type'=>'level','filter'=>'id']) }}">
                                    <option value="0">Sélectionner un niveau</option>
                                </select>
                            </div>
                            {{--                        matiere--}}
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="event-country">matière</label>
                                <select
                                    style="display: none"
                                    name="subject_id"
                                    id="subject"
                                    class="border form-select"
                                    data-target="#subject"
                                    data-source="{{ route('contenu.level',['type'=>'subject','filter'=>'id']) }}">
                                    <option value="0">Sélectionner une matière</option>
                                </select>
                            </div>

                            <div class="col-12 min-vh-50">
                                <label class="form-label" for="contenue">Contenue du cours</label>
                                <textarea name="contenue" class="form-control tinymce" id="contenue"
                                          rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--        gauche--}}
            <div class="col-lg-4 pl-lg-2">
                <div class="sticky-sidebar">
                    <div class="card mb-3 mb-lg-0">
                        <div class="card-header">
                            <h5 class="mb-3">Autres details</h5>
                        </div>
                        <div class="card-body bg-light">
                            <div>
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="name">Nom du cours</label>
                                    <input name="name" class="form-control form-control-sm" id="name" type="text">
                                </div>
                            </div>
                            <div>
                                <label class="form-label" for="event-description">Image de couverture</label>
                                <div class="form-file form-file-lg">
                                    <input name="image" class="form-file-input" id="customFileLg" type="file"/>
                                    <label class="form-file-label" for="customFileLg">
                                        <span class="form-file-text">Choisir une image...</span>
                                        <span class="form-file-button">Browse</span>
                                    </label>
                                </div>
                            </div>
                            <div class="border-dashed-bottom my-3"></div>
                            <div class="col-12">
                                <label class="form-label" for="description">Description du cours</label>
                                <textarea name="description" class="form-control" id="description"
                                          rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script src="https://cdn.tiny.cloud/1/sxpjfz3gpsjci8uw1ppw8lzx2bnuijb4hr8d1j8uvppgfy8u/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'tinymce',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
    <script src="{{ asset('js/filter_courses.js') }}"></script>
@endsection
