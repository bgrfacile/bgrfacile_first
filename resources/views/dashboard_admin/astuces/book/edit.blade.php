@extends('layouts.dashboardAdmin')

@section('title')
    Modification de {{ $book->title }}
@endsection


@section('contenue')
    <form action="{{ route('books.update',['book'=>$book->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="card mb-3">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-md">
                        <h5 class="mb-2 mb-md-0">Modification du book : {{ $book->title }}</h5>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-falcon-default btn-sm mr-2" role="button">
                            Modifier
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body bg-light">
                <div class="row gx-2">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="titre">Titre du book</label>
                        <input name="title" value="{{ $book->title }}" class="form-control @if($errors->has('title')) is-invalid @endif "
                               id="titre" type="text" placeholder="titre"/>
                        @if($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="auteur">Auteur du book</label>
                        <input name="auteur" value="{{ $book->auteur }}" class="form-control @if($errors->has('auteur')) is-invalid @endif" id="auteur" type="text"
                               placeholder="auteur"/>
                        @if($errors->has('auteur'))
                            <div class="invalid-feedback">
                                {{ $errors->first('auteur') }}
                            </div>
                        @endif
                    </div>

                    <div class="col-12"><label class="form-label" for="event-description">Description</label>
                        <textarea name="resumer" class="form-control @if($errors->has('resumer')) is-invalid @endif" id="event-description"
                                  rows="6">{{ $book->resumer }}</textarea>
                        @if($errors->has('resumer'))
                            <div class="invalid-feedback">
                                {{ $errors->first('resumer') }}
                            </div>
                        @endif
                    </div>

                    <div class="col-12">
                        <div class="border-dashed-bottom my-3"></div>
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="time-zone">Type de book</label>
                        <select name="categorieBook" class="form-select" id="time-zone">
                            @foreach($categore_books as $categore_book)
                                <option value="{{ $categore_book->id }}" @if($book->categorie_book_id === $categore_book->id ) selected @endif>{{ $categore_book->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


@section('script')
@endsection
