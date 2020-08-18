@extends('layout_admin_G')

@section('content')
    <!-- HEADER -->
    @include('administration_general/profil/_navigation')
    <!-- CONTENT -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center mb-4">
                            <div class="col">
                                <h4 class="mb-2">
                                    Contenues publiers
                                </h4>
                            </div>
                        </div>
                        <!-- Stats -->
                        <div class="row no-gutters border-top border-bottom">
                            <div class="col-6 py-4 text-center">
                                <h6 class="text-uppercase text-muted">
                                    Piblication
                                </h6>
                                <h2 class="mb-0">25</h2>
                            </div>
                            <div class="col-6 py-4 text-center border-left">
                                <h6 class="text-uppercase text-muted">
                                    J'aime
                                </h6>
                                <h2 class="mb-0">12.5k</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-0">
                                            Nom
                                        </h5>
                                    </div>
                                    <div class="col-auto">
                                        Dianna
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-0">
                                           Prenom
                                        </h5>
                                    </div>
                                    <div class="col-auto">
                                        Smiley
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-0">
                                            telephone
                                        </h5>
                                    </div>
                                    <div class="col-auto">
                                        <small class="text-muted">
                                            +242 06 6443279
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-0">
                                            Adresse
                                        </h5>
                                    </div>
                                    <div class="col-auto">
                                        Centre Ville
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
