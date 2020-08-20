@extends('layout_admin_G')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Header -->
            @include('administration_general/cours/_navigation')
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-header-title">
                                            Listes des cycles
                                        </h4>
                                    </div>
                                    <div class="col-auto">
                                        <a class="btn btn-sm btn-primary" href="{{ route('dashboardG.cours.create') }}">
                                            <i class="fe fe-plus"></i>
                                            ajouter un cycle
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <img class="img-fluid" src="/assets_template/img/illustrations/lost.svg"
                                                     alt="..." style="max-width: 38px;">
                                            </div>
                                            <div class="col ml-n2">
                                                <h4 class="mb-1">
                                                    College
                                                </h4>
                                            </div>
                                            <div class="col-auto mr-n3">
                                                <span class="badge badge-light"> bepc </span>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Dropdown -->
                                                <div class="dropdown">
                                                    <a class="dropdown-ellipses dropdown-toggle" href="#" role="button"
                                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#!">
                                                            <i class="fe fe-edit"></i>
                                                            Modifier
                                                        </a>
                                                        <a class="dropdown-item" href="#!">
                                                            <i class="fe fe-delete"></i>
                                                            Supprimer
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <img class="img-fluid" src="/assets_template/img/payment-methods/mastercard.svg" alt="..."
                                                     style="max-width: 38px;">
                                            </div>
                                            <div class="col ml-n2">
                                                <h4 class="mb-1">
                                                    Lycee
                                                </h4>
                                            </div>
                                            <div class="col-auto mr-n3">
                                                <span class="badge badge-light"> baccaloreat </span>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Dropdown -->
                                                <div class="dropdown">
                                                    <a class="dropdown-ellipses dropdown-toggle" href="#" role="button"
                                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#!">
                                                            <i class="fe fe-edit"></i>
                                                            Modifier
                                                        </a>
                                                        <a class="dropdown-item" href="#!">
                                                            <i class="fe fe-delete"></i>
                                                            supprimer
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex flex-column">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
