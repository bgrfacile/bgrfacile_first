<div class="header">
    <div class="header-body">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="header-title">
                    Les fiches
                </h1>
            </div>
            <div class="col-auto">
                <a href="#" class="btn btn-primary lift">
                    <i class="fe fe-plus"></i>
                    Nouvelle fiche
                </a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
                <!-- Nav -->
                <ul class="nav nav-tabs nav-overflow header-tabs">
                    <li class="nav-item">
                        <a href="#!" class="nav-link active">
                            Toutes <span class="badge badge-pill badge-soft-secondary">823</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboardG.fiches.audios') }}" class="nav-link">
                            <i class="fe fe-headphones"></i>
                            audios <span class="badge badge-pill badge-soft-secondary">24</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboardG.fiches.videos') }}" class="nav-link">
                            <i class="fe fe-video"></i>
                            vidéos <span class="badge badge-pill badge-soft-secondary">3</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboardG.fiches.ecrites') }}" class="nav-link">
                            <i class="fe fe-book-open"></i>
                            écrites <span class="badge badge-pill badge-soft-secondary">71</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboardG.fiches.matieres') }}" class="nav-link">
                            <i class="fe fe-book"></i>
                            matière <span class="badge badge-pill badge-soft-secondary">71</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
