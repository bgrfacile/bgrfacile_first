@extends('layouts.dashboardAdmin')

@section('title')
    cree une categorie de book
@endsection

@section('contenue')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">categorie book</a></li>
                            <li class="breadcrumb-item active" aria-current="page">creation</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-auto">
                    f
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('dashboard.astuces.categoriebook.store') }}" method="post">
        @csrf

        <div class="card mb-3 mb-lg-0">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-md">
                        <h5 class="mb-2 mb-md-0">Créer une categorie</h5>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-falcon-default btn-sm mr-2" role="button">Enregistrer
                        </button>
                    </div>
                </div>
            </div>

            <div class="card-body bg-light">
                <div class="position-relative rounded border bg-white p-3">
                    <div class="row gx-2">
                        <div class="col-12">
                            <label class="form-label" for="field-name">Titre</label>
                            <input name="title" value="{{ old('title') }}" class="form-control form-control-sm @if($errors->has('title')) is-invalid @endif " id="field-name" type="text"
                                   placeholder="Titre (e.x. Livres audios)"/>
                            @if($errors->has('title'))
                                <span class="invalid-feedback">
			                        {{ $errors->first('title') }}
                                </span>
                            @endif
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="field-options">Description</label>
                            <textarea name="description"
                                      class="form-control form-control-sm @if($errors->has('description')) is-invalid @endif " id="field-options" rows="3"></textarea>
                            @if($errors->has('description'))
                                <span class="invalid-feedback">
			                        {{ $errors->first('description') }}
                                </span>
                            @endif
                            {{--                            <div class="form-text fs--1 text-warning">* Separate your options with comma</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')

@endsection
