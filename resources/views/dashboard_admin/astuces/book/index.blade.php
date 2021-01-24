@extends('layouts.dashboardAdmin')

@section('title')
    les books
@endsection


@section('contenue')
    <div class="row">
        <div class="col-12">
            <div class="card mb-3" id="recentPurchaseTable"
                 data-list='{"valueNames":["name","email","product","payment","amount"],"page":8,"pagination":true}'>
                <div class="card-header">
                    <div class="row flex-between-center">
                        <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                            <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Listes des books</h5>
                        </div>
                        <div class="col-6 col-sm-auto ml-auto text-right pl-0">
{{--                            <div class="d-none" id="table-purchases-actions">--}}
{{--                                <div class="d-flex"><select class="form-select form-select-sm"--}}
{{--                                                            aria-label="Bulk actions">--}}
{{--                                        <option selected="">Bulk actions</option>--}}
{{--                                        <option value="Refund">Refund</option>--}}
{{--                                        <option value="Delete">Delete</option>--}}
{{--                                        <option value="Archive">Archive</option>--}}
{{--                                    </select>--}}
{{--                                    <button class="btn btn-falcon-default btn-sm ml-2" type="button">Apply</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div id="table-purchases-replace-element">
                                <a href="{{ route('books.create') }}" class="btn btn-falcon-default btn-sm" type="button">
                                    <span class="fas fa-plus"
                                          data-fa-transform="shrink-3 down-2"></span>
                                    <span
                                        class="d-none d-sm-inline-block ml-1">Nouveau</span>
                                </a>
                                <button class="btn btn-falcon-default btn-sm" type="button">
                                    <span
                                        class="fas fa-external-link-alt"
                                        data-fa-transform="shrink-3 down-2"></span>
                                    <span
                                        class="d-none d-sm-inline-block ml-1">Exporter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body px-0 py-0">
                    <div class="table-responsive scrollbar">
                        <table class="table table-sm fs--1 mb-0">
                            <thead class="bg-200 text-900">
                            <tr>
                                <th>
                                    <div class="form-check mb-0 d-flex align-items-center">
                                        <input
                                            class="form-check-input" id="checkbox-bulk-purchases-select" type="checkbox"
                                            data-bulk-select='{"body":"table-purchase-body","actions":"table-purchases-actions","replacedElement":"table-purchases-replace-element"}'/>
                                    </div>
                                </th>
                                <th class="sort pr-1 align-middle white-space-nowrap" data-sort="name">Titre</th>
                                <th class="sort pr-1 align-middle white-space-nowrap" data-sort="email">Auteur</th>
                                <th class="sort pr-1 align-middle white-space-nowrap" data-sort="product">Resumer</th>
                                <th class="sort pr-1 align-middle white-space-nowrap text-center" data-sort="payment">
                                    Status
                                </th>
                                <th class="sort pr-1 align-middle white-space-nowrap text-right" data-sort="amount">
                                    Categorie
                                </th>
                                <th class="no-sort pr-1 align-middle data-table-row-action"></th>
                            </tr>
                            </thead>

                            <tbody class="list" id="table-purchase-body">
                            @foreach($books as $book)
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0 d-flex align-items-center">
                                        <input
                                            class="form-check-input" type="checkbox" id="recent-purchase-0"
                                            data-bulk-select-row="data-bulk-select-row"/>
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name">
                                    <a href="{{ route('books.show',['book'=>$book->book_id]) }}" class="font-weight-bolder">{{ $book->book_title }}</a>
                                </th>
                                <td class="align-middle white-space-nowrap email">{{ $book->auteur }}</td>
                                <td style="max-width: 200px;overflow: hidden" class="align-middle white-space-nowrap product">
                                    {{ $book->resumer }}
                                </td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment">
                                    <span
                                        class="badge badge rounded-pill badge-soft-success">
                                        Actif
                                        <span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                    </span>
                                </td>
                                <td class="align-middle text-right amount font-weight-bolder">{{ $book->categorie_book_title }}</td>
                                <td class="align-middle white-space-nowrap">
                                    <div class="dropdown font-sans-serif">
                                        <button
                                            class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-right"
                                            type="button" id="dropdown0" data-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span class="fas fa-ellipsis-h fs--1"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right border py-2"
                                             aria-labelledby="dropdown0">
                                            <a class="dropdown-item" href="{{ route('books.show',['book'=>$book->book_id]) }}">Voir</a>
                                            <a class="dropdown-item" href="{{ route('books.edit',['book'=>$book->book_id]) }}">Modifier</a>
                                            <div class="dropdown-divider"></div>
                                            <form action="{{ route('books.destroy',['book'=>$book->book_id]) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="dropdown-item text-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="pagination d-none"></div>
                        <div class="col">
                        </div>
                        <div class="col-auto d-flex">
                            <button class="btn btn-sm" type="button" data-list-pagination="prev">
                                <span>Previous</span>
                            </button>
                            <button class="btn btn-sm px-4 ml-2" type="button" data-list-pagination="next">
                                <span>Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
@endsection
