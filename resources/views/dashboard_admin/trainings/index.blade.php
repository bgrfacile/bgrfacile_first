@extends('layouts.dashboardAdmin')

@section('title')
    cycle
@endsection

@section('contenue')
    <div class="card mb-3" id="customersTable"
         data-list='{"valueNames":["name","email","phone","address","joined"],"page":10,"pagination":true}'>
        <div class="card-header">
            <div class="row flex-between-center">
                <div class="col-4 col-sm-auto d-flex align-items-center pr-0">
                    <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">La liste des cycles</h5>
                </div>
                <div class="col-8 col-sm-auto text-right pl-2">
                    <div class="d-none" id="table-customers-actions">
                        <div class="d-flex">
                            <select class="form-select form-select-sm" aria-label="Bulk actions">
                                <option selected="">Bulk actions</option>
                                <option value="Refund">Refund</option>
                                <option value="Delete">Delete</option>
                                <option value="Archive">Archive</option>
                            </select>
                            <button class="btn btn-falcon-default btn-sm ml-2" type="button">Apply</button>
                        </div>
                    </div>
                    <div id="table-customers-replace-element">
                        <button class="btn btn-falcon-default btn-sm" type="button" data-toggle="modal"
                                data-target="#ajout-cycle">
                            <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                            <span class="d-none d-sm-inline-block ml-1">Cree un cycle</span>
                        </button>
                    </div>
                </div>

                {{--                    La modal--}}
                <div class="modal fade" id="ajout-cycle" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter un cycle</h5>
                                <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <form action="{{ route('training.store') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="p-4 pb-0">
                                        <div class="mb-3">
                                            <label class="col-form-label"
                                                   for="recipient-name">
                                                Nom du cycle:
                                            </label>
                                            <input name="name" class="form-control" id="recipient-name"
                                                   type="text">
                                        </div>
                                        <div class="mb-3">
                                            <label for="diplome" class="col-form-label">Diplome de fin d'étude:</label>
                                            <input name="diploma" class="form-control" id="diplome"
                                                   type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                                    </button>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-sm table-striped fs--1 mb-0">
                    <thead class="bg-200 text-900">
                    <tr>
                        <th>
                            <div class="form-check fs-0 mb-0 d-flex align-items-center">
                                <input class="form-check-input"
                                       id="checkbox-bulk-customers-select"
                                       type="checkbox"
                                       data-bulk-select='{"body":"table-customers-body","actions":"table-customers-actions","replacedElement":"table-customers-replace-element"}'/>
                            </div>
                        </th>
                        <th class="sort pr-1 align-middle white-space-nowrap" data-sort="name">Nom du cycle</th>
                        <th class="sort pr-1 align-middle white-space-nowrap" data-sort="email">diplome</th>
                        <th class="sort pr-1 align-middle white-space-nowrap" data-sort="email">date creation</th>
                        <th class="align-middle no-sort">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="list" id="table-customers-body">
                    @foreach($trainings as $training)
                        <tr class="btn-reveal-trigger">
                            <td class="align-middle py-2" style="width: 28px;">
                                <div class="form-check fs-0 mb-0 d-flex align-items-center">
                                    <input
                                        class="form-check-input" type="checkbox" id="customer-0"
                                        data-bulk-select-row="data-bulk-select-row"/>
                                </div>
                            </td>
                            <td class="name align-middle white-space-nowrap py-2">
                                <div>
                                    <div class="d-flex d-flex align-items-center">
                                        <div class="flex-1">
                                            <h5 class="mb-0 fs--1">
                                                <a href="{{ route('training.show',['training'=>$training->id]) }}">
                                                {{ $training->name }}
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="joined align-middle py-2">
                                {{ $training->diploma }}
                            </td>
                            <td class="joined align-middle py-2">
                                {{ \Carbon\Carbon::parse($training->created_at)->format('d M. Y')  }}
                            </td>
                            <td class="align-middle white-space-nowrap py-2 text-right">
                                <div class="dropdown font-sans-serif">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                                            type="button" id="customer-dropdown-0" data-toggle="dropdown"
                                            data-boundary="window" aria-haspopup="true" aria-expanded="false">
                                        <span class="fas fa-ellipsis-h fs--1"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right border py-0"
                                         aria-labelledby="customer-dropdown-0">
                                        <div class="bg-white py-2">
                                            <a class="dropdown-item"
                                               href="{{ route('training.show',['training'=>$training->id]) }}">
                                                <span class="far fa-share-square"></span> delai du cycle
                                            </a>
                                            <button class="dropdown-item" data-toggle="modal"
                                                    data-target="#modif-departement-{{ $training->id }}">
                                                <span class="far fa-edit fs--1"></span>
                                                Modifier du cycle
                                            </button>
                                            <form action="{{ route('training.destroy',['training'=>$training->id]) }}"
                                                  method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="dropdown-item text-danger">
                                                    <span class="far fa-trash-alt fs--1"></span>
                                                    Supprimer le cycle
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        {{--                    La modal edit--}}
                        <div class="modal fade" id="modif-departement-{{ $training->id }}" tabindex="-1" role="dialog"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un cycle</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('training.update',['training'=>$training->id]) }}"
                                          method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="modal-body">
                                            <div class="p-4 pb-0">
                                                <div class="mb-3">
                                                    <label class="col-form-label"
                                                           for="recipient-name">
                                                        Nom du cycle:
                                                    </label>
                                                    <input name="name" value="{{ $training->name }}"
                                                           class="form-control" id="recipient-name"
                                                           type="text">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Diplome:</label>
                                                    <input name="diploma" value="{{ $training->diploma }}"
                                                           class="form-control" id="recipient-name"
                                                           type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                                            </button>
                                            <button type="submit" class="btn btn-primary">Modification</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-center">
            <button class="btn btn-sm btn-falcon-default mr-1" type="button" title="Previous"
                    data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
            <ul class="pagination mb-0"></ul>
            <button class="btn btn-sm btn-falcon-default ml-1" type="button" title="Next" data-list-pagination="next">
                <span class="fas fa-chevron-right"></span></button>
        </div>
    </div>
@endsection
