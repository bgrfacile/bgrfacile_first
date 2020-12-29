@extends('layouts.dashboardAdmin')

@section('title')
categorie book
@endsection

@section('contenue')

    <div class="card ">
        <div class="card-header d-flex flex-between-center bg-light py-2">
            <h6 class="mb-0">categorie book</h6>
            <a href="{{ route('dashboard.astuces.categoriebook.create') }}" class="btn btn-light border-300 btn-sm mr-1 text-600 shadow-none py-1 fs--1 font-sans-serif" type="button"
               data-toggle="tooltip" data-placement="auto" title="nouveau">
                <span class="far fa-plus-square"></span>
                cree un nouveau
            </a>
        </div>
        <div class="card-body pb-0">
            @foreach($categorieBooks as $categorieBook)
                <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="ml-3 flex-shrink-1 flex-grow-1">
                        {{--                    title--}}
                        <h6 class="mb-1"><span class="stretched-link text-900 font-weight-semi-bold">{{ $categorieBook->title }}</span>
                        </h6>
                        {{--                        description--}}
                        <div class="fs--1 font-weight-medium text-600" style="max-width: 65%">
                            {{ $categorieBook->description }}
                        </div>
                        {{--                        button action--}}
                        <div class="hover-actions right-0 top-50 translate-middle-y">
                            <form action="{{ route('dashboard.astuces.categoriebook.destroy',['categorieBook'=>$categorieBook->id]) }}" method="post">
                                @csrf
                                @method('delete')
                            <button type="submit" class="btn btn-light border-300 btn-sm mr-1 text-600 shadow-none" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Delete">
                                <img src="{{ asset('dist/assets/img/icons/trash.svg') }}" alt="" width="15"/>
                            </button>
                            </form>
                            <a href="{{ route('dashboard.astuces.categoriebook.edit',['categorieBook'=>$categorieBook->id]) }}" class="btn btn-light border-300 btn-sm mr-1 text-600 shadow-none" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Edit">
                                <img src="{{ asset('dist/assets/img/icons/edit-alt.svg') }}" alt="" width="15"/>
                            </a>
                        </div>
                    </div>
                </div>
                <hr class="bg-200"/>
            @endforeach
        </div>
    </div>
@endsection

@section('script')

@endsection
<script>
    import Button from "../../../../js/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>
