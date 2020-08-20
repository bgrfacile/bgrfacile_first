@extends('layout_admin_G')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Header -->
            @include('administration_general/fiches/_navigation')

            <!-- Tab content -->
                <div class="tab-content">
                    <!-- card line -->
                    <div class="tab-pane fade show active" id="companiesListPane" role="tabpanel"
                         aria-labelledby="companiesListTab">
                        <!-- Card -->
                        <div class="card"
                             data-list='{"valueNames": ["item-name", "item-industry", "item-location", "item-owner", "item-created"], "page": 10, "pagination": {"paginationClass": "list-pagination"}}'
                             id="companiesList">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <form>
                                            <div class="input-group input-group-flush">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text">
                                                    <i class="fe fe-search"></i>
                                                  </span>
                                                </div>
                                                <input class="list-search form-control" type="search"
                                                       placeholder="Search">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-auto mr-n3">
                                        <form>
                                            <select class="custom-select custom-select-sm form-control-flush"
                                                    data-toggle="select" data-options='{"minimumResultsForSearch": -1}'>
                                                <option value="5" selected>5 premieres page</option>
                                                <option value="10">10 premieres page</option>
                                                <option value="*">Toutes</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-white" type="button" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-sliders mr-1"></i>
                                                Filter
                                            </button>
                                            <form class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                                                <div class="card-header">
                                                    <h4 class="card-header-title">
                                                        Filtres
                                                    </h4>
                                                    <a href="#" class="btn btn-sm btn-link text-reset" type="reset">
                                                        <small>reset</small>
                                                    </a>

                                                </div>
                                                <div class="card-body">
                                                    <div class="list-group list-group-flush mt-n4 mb-4">
                                                        <div class="list-group-item">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <small>Cycle</small>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <select class="custom-select custom-select-sm"
                                                                            name="item-title" data-toggle="select"
                                                                            data-options='{"minimumResultsForSearch": -1}'>
                                                                        <option value="College">College</option>
                                                                        <option value="Lycee">Lycee</option>
                                                                        <option value="Polytechnique">Polytechnique
                                                                        </option>
                                                                        <option value="Owner">Lettre</option>
                                                                        <option value="Founder">chirlurgie</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <small>Matieres</small>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <select class="custom-select custom-select-sm"
                                                                            name="item-score" data-toggle="select"
                                                                            data-options='{"minimumResultsForSearch": -1}'>
                                                                        <option value="Mathematiques" selected>Mathematiques</option>
                                                                        <option value="physique">physique</option>
                                                                        <option value="chimie">chimie</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-block btn-primary" type="submit">
                                                        Appliquer le filtre
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-sm table-hover table-nowrap card-table">
                                    <thead>
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="list-checkbox-all custom-control-input"
                                                       id="listCheckboxAll">
                                                <label class="custom-control-label" for="listCheckboxAll"></label>
                                            </div>
                                        </th>
                                        <th>
                                            <a class="list-sort text-muted" data-sort="item-name" href="#">Name</a>
                                        </th>
                                        <th>
                                            <a class="list-sort text-muted" data-sort="item-industry"
                                               href="#">Industry</a>
                                        </th>
                                        <th>
                                            <a class="list-sort text-muted" data-sort="item-location"
                                               href="#">Location</a>
                                        </th>
                                        <th>
                                            <a class="list-sort text-muted" data-sort="item-owner" href="#">Owner</a>
                                        </th>
                                        <th colspan="2">
                                            <a class="list-sort text-muted" data-sort="item-created" href="#">Created
                                                at</a>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="list font-size-base">
                                    <tr>
                                        <td>

                                            <!-- Checkbox -->
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="list-checkbox custom-control-input"
                                                       id="listCheckboxOne">
                                                <label class="custom-control-label" for="listCheckboxOne"></label>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="avatar avatar-xs align-middle mr-2">
                                                <img class="avatar-img rounded-circle"
                                                     src="/assets_template/img/avatars/teams/team-logo-1.jpg" alt="...">
                                            </div>
                                            <a class="item-name text-reset" href="#">La force</a>
                                        </td>
                                        <td>
                                            <span class="item-industry">Web design</span>
                                        </td>
                                        <td>
                                            <span class="item-location">Los Angeles, CA</span>

                                        </td>
                                        <td class="item-phone">
                                            <div class="avatar avatar-xs align-middle mr-2">
                                                <img class="avatar-img rounded-circle"
                                                     src="/assets_template/img/avatars/profiles/avatar-1.jpg" alt="...">
                                            </div>
                                            <a class="item-owner text-reset" href="#">Dianna Smiley</a>
                                        </td>
                                        <td>
                                            <time class="item-created" datetime="2020-01-14">Jan 14, 2020</time>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="dropdown-ellipses dropdown-toggle" href="#" role="button"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">
                                                        <i class="fe fe-edit"></i>
                                                        Editer
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="fe fe-cloud-off"></i>
                                                        hors ligne
                                                    </a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                            <!-- Checkbox -->
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="list-checkbox custom-control-input"
                                                       id="listCheckboxTwo">
                                                <label class="custom-control-label" for="listCheckboxTwo"></label>
                                            </div>

                                        </td>
                                        <td>

                                            <!-- Avatar -->
                                            <div class="avatar avatar-xs align-middle mr-2">
                                                <img class="avatar-img rounded-circle"
                                                     src="assets/img/avatars/teams/team-logo-2.jpg" alt="...">
                                            </div>
                                            <a class="item-name text-reset" href="team-overview.html">Medium
                                                Corporation</a>

                                        </td>
                                        <td>

                                            <!-- Text -->
                                            <span class="item-industry">Publishing</span>

                                        </td>
                                        <td>

                                            <!-- Text -->
                                            <span class="item-location">San Francisco, CA</span>

                                        </td>
                                        <td class="item-phone">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-xs align-middle mr-2">
                                                <img class="avatar-img rounded-circle"
                                                     src="assets/img/avatars/profiles/avatar-2.jpg" alt="...">
                                            </div>
                                            <a class="item-owner text-reset" href="profile-posts.html">Ab Hadley</a>

                                        </td>
                                        <td>

                                            <!-- Badge -->
                                            <time class="item-created" datetime="2020-03-22">Mar 22, 2020</time>

                                        </td>
                                        <td class="text-right">

                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a class="dropdown-ellipses dropdown-toggle" href="#" role="button"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#!" class="dropdown-item">
                                                        Action
                                                    </a>
                                                    <a href="#!" class="dropdown-item">
                                                        Another action
                                                    </a>
                                                    <a href="#!" class="dropdown-item">
                                                        Something else here
                                                    </a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="card-footer d-flex justify-content-between">
                                <!-- Pagination (prev) -->
                                <ul class="list-pagination-prev pagination pagination-tabs card-pagination">
                                    <li class="page-item">
                                        <a class="page-link pl-0 pr-4 border-right" href="#">
                                            <i class="fe fe-arrow-left mr-1"></i> Prev
                                        </a>
                                    </li>
                                </ul>
                                <!-- Pagination -->
                                <ul class="list-pagination pagination pagination-tabs card-pagination"></ul>
                                <!-- Pagination (next) -->
                                <ul class="list-pagination-next pagination pagination-tabs card-pagination">
                                    <li class="page-item">
                                        <a class="page-link pl-4 pr-0 border-left" href="#">
                                            Next <i class="fe fe-arrow-right ml-1"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Alert -->
                                <div class="list-alert alert alert-dark alert-dismissible border fade" role="alert">
                                    <!-- Content -->
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <!-- Checkbox -->
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="cardAlertCheckbox" checked disabled>
                                                <label class="custom-control-label text-white"
                                                       for="cardAlertCheckbox"><span class="list-alert-count">0</span>
                                                    deal(s)</label>
                                            </div>
                                        </div>
                                        <div class="col-auto mr-n3">

                                            <!-- Button -->
                                            <button class="btn btn-sm btn-white-20">
                                                Edit
                                            </button>

                                            <!-- Button -->
                                            <button class="btn btn-sm btn-white-20">
                                                Delete
                                            </button>

                                        </div>
                                    </div> <!-- / .row -->

                                    <!-- Close -->
                                    <button type="button" class="list-alert-close close" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- card grid -->
                    <div class="tab-pane fade" id="companiesCardsPane" role="tabpanel"
                         aria-labelledby="companiesCardsTab">
                        <div data-list='{"valueNames": ["item-name", "item-industry", "item-location", "item-owner", "item-created"], "page": 9, "pagination": {"paginationClass": "list-pagination"}}'
                             id="companiesCards">
                            <!-- ENTETE -->
                            <div class="row align-items-center mb-4">
                                <div class="col">
                                    <form>
                                        <div class="input-group input-group-lg input-group-merge">
                                            <input class="list-search form-control form-control-prepended" type="search"
                                                   placeholder="Search">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <span class="fe fe-search"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-auto mr-n3">
                                    <form>
                                        <select class="custom-select custom-select-sm form-control-flush"
                                                data-toggle="select" data-options='{"minimumResultsForSearch": -1}'>
                                            <option value="1" selected>9 premieres pages</option>
                                            <option value="5">Toutes</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-white" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-sliders mr-1"></i>
                                            Filter
                                        </button>
                                        <form class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                                            <div class="card-header">
                                                <h4 class="card-header-title">
                                                    Filtres
                                                </h4>
                                                <a href="#" class="btn btn-sm btn-link text-reset" type="reset">
                                                    <small>reset</small>
                                                </a>

                                            </div>
                                            <div class="card-body">
                                                <div class="list-group list-group-flush mt-n4 mb-4">
                                                    <div class="list-group-item">
                                                        <div class="row">
                                                            <div class="col">
                                                                <small>Cycle</small>
                                                            </div>
                                                            <div class="col-auto">
                                                                <select class="custom-select custom-select-sm"
                                                                        name="item-title" data-toggle="select"
                                                                        data-options='{"minimumResultsForSearch": -1}'>
                                                                    <option value="College">College</option>
                                                                    <option value="Lycee">Lycee</option>
                                                                    <option value="Polytechnique">Polytechnique
                                                                    </option>
                                                                    <option value="Owner">Lettre</option>
                                                                    <option value="Founder">chirlurgie</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item">
                                                        <div class="row">
                                                            <div class="col">
                                                                <small>Matieres</small>
                                                            </div>
                                                            <div class="col-auto">
                                                                <select class="custom-select custom-select-sm"
                                                                        name="item-score" data-toggle="select"
                                                                        data-options='{"minimumResultsForSearch": -1}'>
                                                                    <option value="Mathematiques" selected>Mathematiques</option>
                                                                    <option value="physique">physique</option>
                                                                    <option value="chimie">chimie</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-block btn-primary" type="submit">
                                                    Appliquer le filtre
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="list row">
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="custom-control custom-control-circle custom-checkbox">
                                                        <i class="fe fe-message-square"></i> 12
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a href="#!" class="dropdown-ellipses dropdown-toggle"
                                                           role="button" data-toggle="dropdown" aria-haspopup="true"
                                                           aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#!" class="dropdown-item">
                                                                <i class="fe fe-edit"></i>
                                                                Editer
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                <i class="fe fe-cloud-off"></i>
                                                                hors ligne
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="avatar avatar-xl card-avatar">
                                                <img src="/assets_template/img/avatars/teams/team-logo-1.jpg"
                                                     class="avatar-img rounded" alt="...">
                                            </a>
                                            <div class="text-center mb-5">
                                                <h2 class="card-title">
                                                    <a class="item-name" href="team-overview.html">La force</a>
                                                </h2>
                                                <p class="small text-muted mb-0">
                                                    Publier par
                                                    <a href="#">
                                                        <small class="item-owner">Dianna Smiley</small>
                                                    </a>
                                                </p>
                                            </div>
                                            <hr class="card-divider mb-0">
                                            <div class="list-group list-group-flush mb-n3">
                                                <div class="list-group-item">
                                                    <div class="row">
                                                        <div class="col">
                                                            <small>Matiere</small>
                                                        </div>
                                                        <div class="col-auto">
                                                            <small>physique</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="row">
                                                        <div class="col">
                                                            <small>cycle</small>
                                                        </div>
                                                        <div class="col-auto">
                                                            <small>college</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- Header -->
                                            <div class="row align-items-center">
                                                <div class="col">

                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-control-circle custom-checkbox">
                                                        <input type="checkbox"
                                                               class="list-checkbox custom-control-input"
                                                               id="cardsCheckboxTwo">
                                                        <label class="custom-control-label"
                                                               for="cardsCheckboxTwo"></label>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a href="#!" class="dropdown-ellipses dropdown-toggle"
                                                           role="button" data-toggle="dropdown" aria-haspopup="true"
                                                           aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#!" class="dropdown-item">
                                                                Action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Another action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Something else here
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                            <!-- Image -->
                                            <a href="team-overview.html" class="avatar avatar-xl card-avatar">
                                                <img src="assets/img/avatars/teams/team-logo-2.jpg"
                                                     class="avatar-img rounded" alt="...">
                                            </a>

                                            <!-- Body -->
                                            <div class="text-center mb-5">

                                                <!-- Heading -->
                                                <h2 class="card-title">
                                                    <a class="item-name" href="team-overview.html">Medium
                                                        Corporation</a>
                                                </h2>

                                                <!-- Text -->
                                                <p class="small text-muted mb-0">
                                                    Medium is an online publishing platform developed by Evan Williams,
                                                    and launched in August 2012.
                                                </p>

                                            </div>

                                            <!-- Divider -->
                                            <hr class="card-divider mb-0">

                                            <!-- List group -->
                                            <div class="list-group list-group-flush mb-n3">
                                                <div class="list-group-item">
                                                    <div class="row">
                                                        <div class="col">

                                                            <!-- Text -->
                                                            <small>Contact</small>

                                                        </div>
                                                        <div class="col-auto">

                                                            <!-- Link -->
                                                            <a href="profile-posts.html">
                                                                <small class="item-owner">Ab Hadley</small>
                                                            </a>

                                                        </div>
                                                    </div> <!-- / .row -->
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="row">
                                                        <div class="col">

                                                            <!-- Text -->
                                                            <small>Industry</small>

                                                        </div>
                                                        <div class="col-auto">

                                                            <!-- Text -->
                                                            <small class="item-industry">Publishing</small>

                                                        </div>
                                                    </div> <!-- / .row -->
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="row no-gutters">
                                <!-- Pagination (prev) -->
                                <ul class="col list-pagination-prev pagination pagination-tabs justify-content-start">
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fe fe-arrow-left mr-1"></i> Prev
                                        </a>
                                    </li>
                                </ul>

                                <!-- Pagination -->
                                <ul class="col list-pagination pagination pagination-tabs justify-content-center"></ul>

                                <!-- Pagination (next) -->
                                <ul class="col list-pagination-next pagination pagination-tabs justify-content-end">
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            Next <i class="fe fe-arrow-right ml-1"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
