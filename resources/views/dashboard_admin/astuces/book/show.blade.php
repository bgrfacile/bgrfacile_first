@extends('layouts.dashboardAdmin')

@section('title')
    detail du book
@endsection


@section('contenue')
    {{--    header--}}
    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">{{ $book->title }}</h5>
                </div>
                <div class="col-auto">
                    <a href="{{ route('books.edit',['book'=>$book->id]) }}" class="btn btn-falcon-default btn-sm mr-2"
                       role="button">modifier le book</a>
                    {{--                    <button class="btn btn-falcon-primary btn-sm" role="button">Desactive le book</button>--}}
                </div>
            </div>
        </div>
    </div>

    {{--main--}}
    <div class="row g-0">
        {{--        scolling--}}
        <div class="col-lg-8 pr-lg-2">

            <div class="card mb-3" id="customersTable"
                 data-list='{"valueNames":["name","email","phone","address","joined"],"page":10,"pagination":true}'>
                <div class="card-header">
                    <div class="row flex-between-center">
                        <div class="col-4 col-sm-auto d-flex align-items-center pr-0">
                            <h5 class="mb-0">Pistes des podcasts</h5>
                        </div>

                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-sm table-striped fs--1 mb-0">
                            <thead class="bg-200 text-900">
                            <tr>
                                <th class="sort pr-1 align-middle white-space-nowrap" data-sort="name">Utilisateur</th>
                                <th class="sort pr-1 align-middle white-space-nowrap" data-sort="name">Piste</th>
                                <th class="sort pr-1 align-middle white-space-nowrap pl-5" data-sort="address"
                                    style="min-width: 200px;">Resumer
                                </th>
                                <th class="sort pr-1 align-middle white-space-nowrap" data-sort="joined">Date</th>
                                <th class="align-middle no-sort">action</th>
                            </tr>
                            </thead>
                            <tbody class="list" id="table-customers-body">
                            @foreach($pistes as $piste)
                                <tr class="btn-reveal-trigger">
                                    <td class="name align-middle white-space-nowrap py-2">
                                        <a href="#">
                                            <div class="d-flex d-flex align-items-center">
                                                <div class="flex-1">
                                                    <h5 class="mb-0 fs--1">{{ $piste['name'] }}</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="name align-middle white-space-nowrap py-2">
                                        <h5 class="mb-0 fs--1 text-info">{{ $piste['title'] }}</h5>
                                    </td>
                                    <td class="address align-middle white-space-nowrap pl-5 py-2">
                                        {{ $piste['description'] }}
                                    </td>
                                    <td class="joined align-middle py-2"> {{ \Carbon\Carbon::parse($piste['piste_create'])->format('d M. Y')}}</td>
                                    <td class="align-middle white-space-nowrap py-2 text-right">
                                        <button class="btn btn-light btn-sm py-0 mt-1 border shadow-none" type="button">
                                            <img src="{{ asset('dist/assets/img/icons/play.svg') }}" alt="" width="15">
                                            <span class="fs--1">play</span>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-center">
                    <button class="btn btn-sm btn-falcon-default mr-1" type="button" title="Previous"
                            data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                    <ul class="pagination mb-0"></ul>
                    <button class="btn btn-sm btn-falcon-default ml-1" type="button" title="Next"
                            data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
            </div>

            {{--            liste des participants--}}
            <div class="card">
                <div class="card-header bg-light">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="mb-0" id="followers">
                                Ils ont crée des podcasts
                                {{--                                Participant <span class="d-none d-sm-inline-block">(1)</span>--}}
                            </h5>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>
                <div class="card-body bg-light p-0">
                    <div class="row g-0 text-center fs--1">
                        @foreach($users as $user)
                            <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                <div class="bg-white p-3 h-100">
                                    <a href="#">
                                        <img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                             {{--                                             src="{{ asset('dist/assets/img/team/1.jpg') }}" alt="" width="100"/>--}}
                                             src="{{ $user->profile_photo_path }}" alt="{{ $user->name }}" width="100"/>
                                    </a>
                                    <h6 class="mb-1">
                                        <a href="{{ route('users.show',['user'=>$user->id]) }}">{{ $user->name }}</a>
                                    </h6>
                                    <p class="fs--2 mb-1">
                                        <span class="d-none d-sm-inline-block">(1)</span>
                                        <span class="text-700">Piste</span>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{--        fixed--}}
        <div class="col-lg-4 pl-lg-2">
            <div class="sticky-sidebar">
                <div class="card mb-3 mb-lg-0">
                    <div class="card-header">
                        <h5 class="mb-0">Detail sur: {{ $book->title }}</h5>
                    </div>
                    <div class="card-body bg-light">
                        <h6>Auteur</h6>
                        <small class="mb-3">{{ $book->auteur }}</small>
                        <div class="border-dashed-bottom my-3"></div>
                        <h6>Resumer</h6>
                        <small class="mb-3">{{ $book->resumer }}</small>
                        <div class="border-dashed-bottom my-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    footer--}}
    <div class="card mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">{{ $book->title }}</h5>
                </div>
                <div class="col-auto">
                    <a href="{{ route('books.edit',['book'=>$book->id]) }}" class="btn btn-falcon-default btn-sm mr-2"
                       role="button">
                        modifier le book
                    </a>
                </div>
            </div>
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
