@extends('layout_admin_G')

@section('content')
    <!-- HEADER -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h1 class="header-title">
                            Dashboard
                        </h1>
                    </div>
                    <div class="col-auto">
                        <a href="#!" class="btn btn-primary lift">
                            Creer un rapport
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CARDS -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl">
                <!-- Total des abonnements  -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted mb-2">
                                    Total abonnement
                                </h6>
                                <!-- fichres -->
                                <span class="h2 mb-0">$ 24,500</span>
                            </div>
                            <div class="col-auto">
                                <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>
                            </div>
                        </div>
                        <!-- / .row -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl">
                <!-- Nombres des ecoles -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted mb-2">
                                    établissements
                                </h6>
                                <span class="h2 mb-0">763</span>
                            </div>
                            <div class="col-auto">
                                <span class="h2 fe fe-briefcase text-muted mb-0"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl">
                <!-- Nombre de prof inscrit -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted mb-2">
                                    Professeurs inscrits
                                </h6>
                                <span class="h2 mb-0">35</span>
                            </div>
                            <div class="col-auto">
                                <span class="h2 fe fe-user text-muted mb-0"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl">
                <!-- Nombre des étudiants inscrit -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted mb-2">
                                    étudiants inscrits
                                </h6>
                                <span class="h2 mb-0">237</span>
                            </div>
                            <div class="col-auto">
                                <span class="h2 fe fe-users text-muted mb-0"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


