@extends('layouts.dashboardAdmin')

@section('title')
    Les cours
@endsection

@section('contenue')
    <div class="mb-3">
        <div class="">
            <div class="row">
                <div class="col-12 h-100">
                    <div class="overflow-hidden mt-4">
                        {{--tab--}}
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active pl-0" id="description-tab" data-toggle="tab"
                                   href="#tab-description" role="tab" aria-controls="tab-description"
                                   aria-selected="true">
                                    <span class="fas fa-check"></span>
                                    Cours en ligne
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 px-md-3" id="specifications-tab"
                                   data-toggle="tab" href="#tab-specifications" role="tab"
                                   aria-controls="tab-specifications" aria-selected="false">
                                    <span class="fas fa-times"></span>
                                    Cours brouillons
                                </a>
                            </li>
                        </ul>
                        {{--contenue--}}
                        <div class="tab-content" id="myTabContent">
                            {{--                            en ligne--}}
                            <div class="tab-pane fade show active" id="tab-description" role="tabpanel"
                                 aria-labelledby="description-tab">
                                <div class="mt-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card mb-3" id="recentPurchaseTable"
                                                 data-list='{"valueNames":["name","email","product","payment","amount"],"page":8,"pagination":true}'>
                                                <div class="card-header">
                                                    <div class="row flex-between-center">
                                                        <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                                                            <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">La liste des
                                                                cours</h5>
                                                        </div>
                                                        <div class="col-6 col-sm-auto ml-auto text-right pl-0">
                                                            <div id="table-purchases-replace-element">
                                                                <a href="{{ route('cours.create') }}"
                                                                   class="btn btn-falcon-default btn-sm"
                                                                   type="button">
                                                                    <span class="fas fa-plus"
                                                                          data-fa-transform="shrink-3 down-2"></span>
                                                                    <span
                                                                        class="d-none d-sm-inline-block ml-1">Nouveau</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body px-0 py-0">
                                                    <div class="table-responsive scrollbar">
                                                        <table class="table table-sm fs--1 mb-0">
                                                            <thead class="bg-200 text-900">
                                                            <tr>
                                                                <th class="sort pr-1 align-middle white-space-nowrap"
                                                                    data-sort="name">Nom du cours
                                                                </th>
                                                                <th class="sort pr-1 align-middle white-space-nowrap"
                                                                    data-sort="email">Auteur du cours
                                                                </th>
                                                                <th class="sort pr-1 align-middle white-space-nowrap"
                                                                    data-sort="product">Identité
                                                                </th>
                                                                <th class="sort pr-1 align-middle white-space-nowrap text-center"
                                                                    data-sort="payment">
                                                                    Change Etat
                                                                </th>
                                                                <th class="no-sort pr-1 align-middle data-table-row-action"></th>
                                                            </tr>
                                                            </thead>

                                                            <tbody class="list" id="table-purchase-body">
                                                            @foreach($courses_enligne as $course)
                                                                <tr class="btn-reveal-trigger">
                                                                    <th class="align-middle white-space-nowrap name">
                                                                        <a href="{{ route('contenu.cours.show',['cour'=>$course->courses_id]) }}"
                                                                           class="font-weight-bolder">
                                                                            {{ $course->courses_name }}
                                                                        </a>
                                                                    </th>
                                                                    <td class="align-middle white-space-nowrap email">
                                                                        <a href="{{ route('users.show',['user'=>$course->user_id]) }}">
                                                                            {{ $course->name }}
                                                                        </a>
                                                                    </td>
                                                                    <td style="max-width: 200px;overflow: hidden"
                                                                        class="align-middle white-space-nowrap product">
                                                                        math>3eme>college
                                                                    </td>
                                                                    <td class="align-middle text-center fs-0 white-space-nowrap payment">
                                                                        <button
                                                                            class="btn btn-falcon-success mr-1 mb-1"
                                                                            data-toggle="modal"
                                                                            data-target="#modif-statut-{{ $course->courses_id }}" type="button">
                                                                            @if($course->enligne == '1')
                                                                                Actif
                                                                            @elseif($course->enligne == '0')
                                                                                Inactif
                                                                            @endif

                                                                            <span class="ml-1 fas fa-check"
                                                                                  data-fa-transform="shrink-2"></span>
                                                                        </button>
                                                                        {{--                    La modal edit--}}
                                                                        <div class="modal fade" id="modif-statut-{{ $course->courses_id }}"
                                                                             tabindex="-1" role="dialog"
                                                                             aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="exampleModalLabel">
                                                                                            Change visibilite</h5>
                                                                                        <button type="button"
                                                                                                class="btn-close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close"></button>
                                                                                    </div>
                                                                                    <form
                                                                                        action="{{route('etat.cours',['cour'=>$course->courses_id])}}"
                                                                                        method="post">
                                                                                        @csrf
                                                                                        @method('put')
                                                                                        <div class="modal-body">
                                                                                            <div class="p-4 pb-0">

                                                                                                <div class="form-check">
                                                                                                    <input value="on"
                                                                                                           class="form-check-input"
                                                                                                           id="flexRadioDefault1"
                                                                                                           type="radio"
                                                                                                           name="etat"
                                                                                                           checked/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="flexRadioDefault1">en
                                                                                                        ligne</label>
                                                                                                </div>
                                                                                                <div class="form-check">
                                                                                                    <input value="off"
                                                                                                           class="form-check-input"
                                                                                                           id="flexRadioDefault2"
                                                                                                           type="radio"
                                                                                                           name="etat"/>
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="flexRadioDefault2">brouillon</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                    class="btn btn-secondary"
                                                                                                    data-dismiss="modal">
                                                                                                Fermer
                                                                                            </button>
                                                                                            <button type="submit"
                                                                                                    class="btn btn-primary">
                                                                                                accepter
                                                                                            </button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle white-space-nowrap">
                                                                        <div class="dropdown font-sans-serif">
                                                                            <button
                                                                                class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-right"
                                                                                type="button" id="dropdown0"
                                                                                data-toggle="dropdown"
                                                                                data-boundary="window"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                <span
                                                                                    class="fas fa-ellipsis-h fs--1"></span>
                                                                            </button>
                                                                            <div
                                                                                class="dropdown-menu dropdown-menu-right border py-2"
                                                                                aria-labelledby="dropdown0">
                                                                                <a class="dropdown-item" href="{{ route('contenu.cours.show',['cour'=>$course->courses_id]) }}">
                                                                                    Lire
                                                                                    le cours
                                                                                </a>
                                                                                <a class="dropdown-item" href="{{ route('cours.edit',['cour'=>$course->courses_id]) }}">
                                                                                    Modifier
                                                                                    ce cours
                                                                                </a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <form action="{{ route('cours.destroy',['cour'=>$course->courses_id]) }}" method="post">
                                                                                    @csrf
                                                                                    @method('delete')
                                                                                    <button type="submit"
                                                                                            class="dropdown-item text-danger">
                                                                                        Suprimer
                                                                                    </button>
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
                                                            <button class="btn btn-sm" type="button"
                                                                    data-list-pagination="prev">
                                                                <span>Previous</span>
                                                            </button>
                                                            <button class="btn btn-sm px-4 ml-2" type="button"
                                                                    data-list-pagination="next">
                                                                <span>Next</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                            en brouillon--}}
                            <div class="tab-pane fade" id="tab-specifications" role="tabpanel"
                                 aria-labelledby="specifications-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card mb-3" id="recentPurchaseTable"
                                             data-list='{"valueNames":["name","email","product","payment","amount"],"page":8,"pagination":true}'>
                                            <div class="card-header">
                                                <div class="row flex-between-center">
                                                    <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                                                        <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">La liste des
                                                            cours</h5>
                                                    </div>
                                                    <div class="col-6 col-sm-auto ml-auto text-right pl-0">
                                                        <div id="table-purchases-replace-element">
                                                            <a href="{{ route('cours.create') }}"
                                                               class="btn btn-falcon-default btn-sm"
                                                               type="button">
                                                                <span class="fas fa-plus"
                                                                      data-fa-transform="shrink-3 down-2"></span>
                                                                <span
                                                                    class="d-none d-sm-inline-block ml-1">Nouveau</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body px-0 py-0">
                                                <div class="table-responsive scrollbar">
                                                    <table class="table table-sm fs--1 mb-0">
                                                        <thead class="bg-200 text-900">
                                                        <tr>
                                                            <th class="sort pr-1 align-middle white-space-nowrap"
                                                                data-sort="name">Nom du cours
                                                            </th>
                                                            <th class="sort pr-1 align-middle white-space-nowrap"
                                                                data-sort="email">Auteur du cours
                                                            </th>
                                                            <th class="sort pr-1 align-middle white-space-nowrap"
                                                                data-sort="product">Identité
                                                            </th>
                                                            <th class="sort pr-1 align-middle white-space-nowrap text-center"
                                                                data-sort="payment">
                                                                Change Etat
                                                            </th>
                                                            <th class="no-sort pr-1 align-middle data-table-row-action"></th>
                                                        </tr>
                                                        </thead>

                                                        <tbody class="list" id="table-purchase-body">
                                                        @foreach($courses_brouiilon as $course)
                                                            <tr class="btn-reveal-trigger">
                                                                <th class="align-middle white-space-nowrap name">
                                                                    <a href="{{ route('contenu.cours.show',['cour'=>$course->id]) }}"
                                                                       class="font-weight-bolder">
                                                                        {{ $course->courses_name }}
                                                                    </a>
                                                                </th>
                                                                <td class="align-middle white-space-nowrap email">
                                                                    <a href="{{ route('users.show',['user'=>$course->user_id]) }}">
                                                                        {{ $course->name }}
                                                                    </a>
                                                                </td>
                                                                <td style="max-width: 200px;overflow: hidden"
                                                                    class="align-middle white-space-nowrap product">
                                                                    math>3eme>college
                                                                </td>
                                                                <td class="align-middle text-center fs-0 white-space-nowrap payment">
                                                                    @if($course->enligne == '1')
                                                                        <button
                                                                            class="btn btn-falcon-success mr-1 mb-1"
                                                                            data-toggle="modal"
                                                                            data-target="#modif-statut-{{ $course->courses_id }}" type="button">
                                                                            Actif
                                                                            <span class="ml-1 fas fa-check"
                                                                                  data-fa-transform="shrink-2"></span>
                                                                        </button>

                                                                    @elseif($course->enligne == '0')
                                                                        <button
                                                                            class="btn btn-falcon-danger mr-1 mb-1"
                                                                            data-toggle="modal"
                                                                            data-target="#modif-statut-{{ $course->courses_id }}" type="button">
                                                                            Inactif
                                                                            <span class="ml-1 fas fa-times"
                                                                                  data-fa-transform="shrink-2"></span>
                                                                        </button>
                                                                    @endif

                                                                    {{--                    La modal edit--}}
                                                                    <div class="modal fade" id="modif-statut-{{ $course->courses_id }}"
                                                                         tabindex="-1" role="dialog"
                                                                         aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalLabel">
                                                                                        Change visibilite</h5>
                                                                                    <button type="button"
                                                                                            class="btn-close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                </div>
                                                                                <form
                                                                                    action="{{route('etat.cours',['cour'=>$course->courses_id])}}"
                                                                                    method="post">
                                                                                    @csrf
                                                                                    @method('put')
                                                                                    <div class="modal-body">
                                                                                        <div class="p-4 pb-0">

                                                                                            <div class="form-check">
                                                                                                <input value="on"
                                                                                                       class="form-check-input"
                                                                                                       id="flexRadioDefault1"
                                                                                                       type="radio"
                                                                                                       name="etat"/>
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="flexRadioDefault1">en
                                                                                                    ligne</label>
                                                                                            </div>
                                                                                            <div class="form-check">
                                                                                                <input value="off"
                                                                                                       class="form-check-input"
                                                                                                       id="flexRadioDefault2"
                                                                                                       type="radio"
                                                                                                       name="etat"
                                                                                                       checked/>
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="flexRadioDefault2">brouillon</label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-dismiss="modal">
                                                                                            Fermer
                                                                                        </button>
                                                                                        <button type="submit"
                                                                                                class="btn btn-primary">
                                                                                            accepter
                                                                                        </button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="align-middle white-space-nowrap">
                                                                    <div class="dropdown font-sans-serif">
                                                                        <button
                                                                            class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-right"
                                                                            type="button" id="dropdown0"
                                                                            data-toggle="dropdown"
                                                                            data-boundary="window"
                                                                            aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                                <span
                                                                                    class="fas fa-ellipsis-h fs--1"></span>
                                                                        </button>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-right border py-2"
                                                                            aria-labelledby="dropdown0">
                                                                            <a class="dropdown-item" href="{{ route('contenu.cours.show',['cour'=>$course->courses_id]) }}">
                                                                                Lire
                                                                                le cours</a>
                                                                            <a class="dropdown-item" href="{{ route('cours.edit',['cour'=>$course->courses_id]) }}">Modifier
                                                                                ce cours</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <form action="{{ route('cours.destroy',['cour'=>$course->courses_id]) }}" method="post">
                                                                                @csrf
                                                                                @method('delete')
                                                                                <button type="submit"
                                                                                        class="dropdown-item text-danger">
                                                                                    Suprimer
                                                                                </button>
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
                                                        <button class="btn btn-sm" type="button"
                                                                data-list-pagination="prev">
                                                            <span>Previous</span>
                                                        </button>
                                                        <button class="btn btn-sm px-4 ml-2" type="button"
                                                                data-list-pagination="next">
                                                            <span>Next</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
