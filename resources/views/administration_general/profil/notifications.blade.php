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
                        {{--header--}}
                        <div class="mb-3">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="avatar avatar-sm">
                                        <div
                                            class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                                            <i class="fe fe-mail"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col ml-n2">
                                    <p class="small mb-0">
                                        <strong>Launchday 1.4.0 update email sent</strong> Sent to all 1,851 subscribers
                                        over a 24 hour period
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{--contenue--}}
                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-4 order-lg-2">
                                            <div class="text-center">
                                                <img src="/assets_template/img/illustrations/happiness.svg" alt="..."
                                                     class="img-fluid mt-n5 mt-lg-0 mb-4 mr-md-n5"
                                                     style="max-width: 272px;">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-8 px-4 py-3 order-lg-1">
                                            <h2>
                                                Les informations sur votre notification
                                            </h2>
                                            <p class="text-muted">
                                                This is a true story and totally not made up. This is going to be better
                                                in the long run but
                                                for now this is the way it is.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            Toutes vos notifications
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <div
                                                class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                                                <i class="fe fe-mail"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Text -->
                                        <p class="small mb-0">
                                            <strong>Launchday 1.4.0 update email sent</strong> Sent to all 1,851
                                            subscribers
                                            over a 24 hour period
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <div
                                                class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                                                <i class="fe fe-archive"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Text -->
                                        <p class="small mb-0">
                                            <strong>New project "Goodkit" created</strong> Looks like there might be a
                                            new
                                            theme
                                            soon.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2h ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <div
                                                class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                                                <i class="fe fe-code"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Text -->
                                        <p class="small mb-0">
                                            <strong>Dashkit 1.5.0 was deployed.</strong> A successful to deploy to
                                            production
                                            was executed.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 mx-auto">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination pagination-lg">
                                        <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
