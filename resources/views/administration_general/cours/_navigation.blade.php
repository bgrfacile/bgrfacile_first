<div class="header">
    <div class="header-body">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="header-title text-truncate">
                    Les cours
                </h1>
            </div>
            <div class="col-auto">
                <!-- Navigation (button group) -->
                <div class="nav btn-group d-inline-flex" role="tablist">
                    <button class="btn btn-white active" id="companiesListTab" data-toggle="tab"
                            data-target="#companiesListPane" role="tab"
                            aria-controls="companiesListPane" aria-selected="true">
                        <span class="fe fe-list"></span>
                    </button>
                    <button class="btn btn-white" id="companiesCardsTab" data-toggle="tab"
                            data-target="#companiesCardsPane" role="tab"
                            aria-controls="companiesCardsPane" aria-selected="false">
                        <span class="fe fe-grid"></span>
                    </button>
                </div> <!-- / .nav -->

                <!-- Buttons -->
                <a href="{{ route('dashboardG.cours.create') }}" class="btn btn-primary ml-2">
                    <i class="fe fe-plus"></i>
                    Ajouter un cours
                </a>
            </div>
        </div>
        {{--navigation--}}
        <div class="row align-items-center">
            <div class="col">
                <ul class="nav nav-tabs nav-overflow header-tabs">
                    <li class="nav-item">
                        <a href="{{ route('dashboardG.cours.index') }}" class="nav-link text-nowrap active">
                            <i class="fe fe-cloud"></i>
                            En ligne <span class="badge badge-pill badge-soft-secondary">627</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboardG.cours.brouillants') }}" class="nav-link text-nowrap">
                            <i class="fe fe-cloud-off"></i>
                            Hors ligne <span class="badge badge-pill badge-soft-secondary">198</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboardG.cours.cycles') }}" class="nav-link text-nowrap">
                            <i class="fe fe-circle"></i>
                            Les cycles <span class="badge badge-pill badge-soft-secondary">198</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
