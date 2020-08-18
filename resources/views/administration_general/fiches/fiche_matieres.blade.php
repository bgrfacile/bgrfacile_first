@extends('layout_admin_G')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Header -->
            @include('administration_general/fiches/_navigation')
            <!-- Card -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-header-title">
                                    Listes des matieres
                                </h4>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-primary" href="#!">
                                    <i class="fe fe-plus"></i>
                                    ajouter un matiere
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img class="img-fluid" src="/assets_template/img/payment-methods/visa.svg"
                                             alt="..." style="max-width: 38px;">
                                    </div>
                                    <div class="col ml-n2">
                                        <h4 class="mb-1">
                                            Mathematiques
                                        </h4>
                                    </div>
                                    <div class="col-auto mr-n3">
                                        <span class="badge badge-light"> 12 fiches </span>
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
                                            Robotique
                                        </h4>
                                    </div>
                                    <div class="col-auto mr-n3">
                                        <span class="badge badge-light"> 45 fiches </span>
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
        </div> <!-- / .row -->
    </div>
@endsection
