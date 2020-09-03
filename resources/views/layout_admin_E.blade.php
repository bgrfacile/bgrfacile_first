<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="Administration generale de bgrfacile.com"/>

    <!-- Title -->
    <title>bgrfacile | administration generale</title>

    <!-- Libs CSS -->
    <link rel="stylesheet" href="/assets_template/fonts/feather/feather.css"/>
    <link rel="stylesheet" href="/assets_template/libs/flatpickr/dist/flatpickr.min.css"/>
    <link rel="stylesheet" href="/assets_template/libs/quill/dist/quill.core.css"/>
    <link rel="stylesheet" href="/assets_template/libs/highlightjs/styles/vs2015.css"/>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/assets_template/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="/assets_template/css/theme-dark.min.css" id="stylesheetDark">
    <style>
        body {
            display: none;
        }
    </style>
</head>

<body>
{{--liste des modals--}}
<!-- Modal: Activity -->
<div class="modal fade" id="sidebarModalActivity" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Title -->
                <h4 class="modal-title">
                    Notifications
                </h4>

                <!-- Navs -->
                <ul class="nav nav-tabs nav-tabs-sm modal-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#modalActivityAction">Action</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#modalActivityUser">User</a>
                    </li>
                </ul>

            </div>
            <div class="modal-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="modalActivityAction">

                        <!-- List group -->
                        <div class="list-group list-group-flush list-group-activity my-n3">
                            <a class="list-group-item text-reset" href="#!">
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

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Launchday 1.4.0 update email sent
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Sent to all 1,851 subscribers over a 24 hour period
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
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

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            New project "Goodkit" created
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Looks like there might be a new theme soon.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2h ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
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

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Dashkit 1.5.0 was deployed.
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            A successful to deploy to production was executed.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <div
                                                class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                                                <i class="fe fe-git-branch"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            "Update Dependencies" branch was created.
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            This branch was created off of the "master" branch.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
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

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Launchday 1.4.0 update email sent
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Sent to all 1,851 subscribers over a 24 hour period
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
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

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            New project "Goodkit" created
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Looks like there might be a new theme soon.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2h ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
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

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Dashkit 1.5.0 was deployed.
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            A successful to deploy to production was executed.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <div
                                                class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                                                <i class="fe fe-git-branch"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            "Update Dependencies" branch was created.
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            This branch was created off of the "master" branch.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
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

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Launchday 1.4.0 update email sent
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Sent to all 1,851 subscribers over a 24 hour period
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
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

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            New project "Goodkit" created
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Looks like there might be a new theme soon.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2h ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
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

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Dashkit 1.5.0 was deployed.
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            A successful to deploy to production was executed.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <div
                                                class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                                                <i class="fe fe-git-branch"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            "Update Dependencies" branch was created.
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            This branch was created off of the "master" branch.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="modalActivityUser">

                        <!-- List group -->
                        <div class="list-group list-group-flush list-group-activity my-n3">
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-online">
                                            <img class="avatar-img rounded-circle"
                                                 src="assets/img/avatars/profiles/avatar-1.jpg" alt="..."/>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Dianna Smiley
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Uploaded the files "Launchday Logo" and "New Design".
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-online">
                                            <img class="avatar-img rounded-circle"
                                                 src="assets/img/avatars/profiles/avatar-2.jpg" alt="..."/>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Ab Hadley
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Shared the "Why Dashkit?" post with 124 subscribers.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            1h ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-offline">
                                            <img class="avatar-img rounded-circle"
                                                 src="assets/img/avatars/profiles/avatar-3.jpg" alt="..."/>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Adolfo Hess
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Exported sales data from Launchday's subscriber data.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            3h ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-online">
                                            <img class="avatar-img rounded-circle"
                                                 src="assets/img/avatars/profiles/avatar-1.jpg" alt="..."/>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Dianna Smiley
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Uploaded the files "Launchday Logo" and "New Design".
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-online">
                                            <img class="avatar-img rounded-circle"
                                                 src="assets/img/avatars/profiles/avatar-2.jpg" alt="..."/>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Ab Hadley
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Shared the "Why Dashkit?" post with 124 subscribers.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            1h ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-offline">
                                            <img class="avatar-img rounded-circle"
                                                 src="assets/img/avatars/profiles/avatar-3.jpg" alt="..."/>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Adolfo Hess
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Exported sales data from Launchday's subscriber data.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            3h ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-online">
                                            <img class="avatar-img rounded-circle"
                                                 src="assets/img/avatars/profiles/avatar-1.jpg" alt="..."/>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Dianna Smiley
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Uploaded the files "Launchday Logo" and "New Design".
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-online">
                                            <img class="avatar-img rounded-circle"
                                                 src="assets/img/avatars/profiles/avatar-2.jpg" alt="..."/>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Ab Hadley
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Shared the "Why Dashkit?" post with 124 subscribers.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            1h ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-offline">
                                            <img class="avatar-img rounded-circle"
                                                 src="assets/img/avatars/profiles/avatar-3.jpg" alt="..."/>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Adolfo Hess
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Exported sales data from Launchday's subscriber data.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            3h ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-online">
                                            <img class="avatar-img rounded-circle"
                                                 src="assets/img/avatars/profiles/avatar-1.jpg" alt="..."/>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Dianna Smiley
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Uploaded the files "Launchday Logo" and "New Design".
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-online">
                                            <img class="avatar-img rounded-circle"
                                                 src="assets/img/avatars/profiles/avatar-2.jpg" alt="..."/>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Ab Hadley
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Shared the "Why Dashkit?" post with 124 subscribers.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            1h ago
                                        </small>

                                    </div>
                                </div>
                                <!-- / .row -->
                            </a>
                            <a class="list-group-item text-reset" href="#!">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm avatar-offline">
                                            <img class="avatar-img rounded-circle"
                                                 src="assets/img/avatars/profiles/avatar-3.jpg" alt="..."/>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Adolfo Hess
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Exported sales data from Launchday's subscriber data.
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            3h ago
                                        </small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- NAVIGATION -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md " id="sidebar">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse"
                aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--  logo -->
        <a class="navbar-brand" href="{{route('dashboardG.dashboard')}}">
            <img src="/assets_template/logo.png" class="navbar-brand-img
          mx-auto" alt="...">
        </a>
        <!-- version mobile de la naviguation -->
        <div class="navbar-user d-md-none">
            <!-- profil user -->
            <div class="dropdown">
                <!-- Toggle -->
                <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="/assets_template/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle"
                             alt="...">
                    </div>
                </a>
                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                    <a href="#" class="dropdown-item">Profil</a>
                    <a href="#" class="dropdown-item">paramètres</a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">Se déconnecter</a>
                </div>
            </div>
        </div>
        <!-- Collapse menu burger -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <ul class="navbar-nav">
                {{--                Dashboards--}}
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarDashboards" data-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="fe fe-home"></i> Dashboards
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('dashboardG.dashboard')}}" class="nav-link active">
                                    Site
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('dashboardG.users')}}" class="nav-link ">
                                    Utilisateurs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('dashboardG.ecole')}}" class="nav-link ">
                                    Ecoles
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{--                Fiches--}}
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('dashboardG.fiches.index')}}">
                        <i class="fe fe-file-text"></i> Fiches
                    </a>
                </li>
                {{--                cours--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboardG.cours.index')}}">
                        <i class="fe fe-book"></i> Cours
                    </a>
                </li>
                {{--                Exercice et solution--}}
                <li class="nav-item">
                    <a class="nav-link " href="{{route('dashboardG.es.index')}}">
                        <i class="fe fe-send"></i> Exercices et solutions
                    </a>
                </li>
                {{--                ecoles--}}
                <li class="nav-item">
                    <a class="nav-link " href="{{route('dashboardG.ecoles.index')}}">
                        <i class="fe fe-circle"></i> Ecoles
                    </a>
                </li>
                {{--                Utilisateurs--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboardG.utilisateurs.index') }}">
                        <i class="fe fe-users"></i> Utilisateurs
                    </a>
                </li>
                {{--                Notifications--}}
                <li class="nav-item d-md-none">
                    <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                        <span class="fe fe-bell"></span> Notifications
                    </a>
                </li>
            </ul>
            <!-- Divider -->
            <hr class="navbar-divider my-3">
            {{--            entete nouvelle section --}}
            <h6 class="navbar-heading">
                Information personnelle
            </h6>
            {{--            info supplementaire--}}
            <ul class="navbar-nav mb-md-4">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <i class="fe fe-user"></i> profil
                    </a>
                </li>
            </ul>
            {{--            Pousser le contenu vers le bas--}}
            <div class="mt-auto"></div>
            {{--            profil en ecran meduim --}}
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">
            </div>
        </div>
    </div>
</nav>
{{--pas utiliser--}}
<nav class="navbar navbar-vertical navbar-vertical-sm fixed-left navbar-expand-md " id="sidebarSmall"
     style="display: none"></nav>
<nav class="navbar navbar-expand-lg " id="topnav" style="display: none"></nav>

{{--contenue principale--}}
<div class="main-content">
    {{--    navbartop--}}
    <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
        <div class="container-fluid">
            <!-- Form -->
            <form class="form-inline mr-4 d-none d-md-flex">
            </form>
            <!-- User -->
            <div class="navbar-user">
                <!-- Dropdown -->
                <div class="dropdown mr-4 d-none d-md-flex">
                    <!-- Toggle -->
                    <a href="#" class="navbar-user-link" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                            <span class="icon active">
                                <i class="fe fe-bell"></i>
                            </span>
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                        <div class="card-header">
                            <!-- Title -->
                            <h5 class="card-header-title">
                                Notifications
                            </h5>
                            <!-- Link -->
                            <a href="#!" class="small">
                                Voir tout
                            </a>

                        </div>
                        <!-- / .card-header -->
                        <div class="card-body">
                            <!-- List group -->
                            <div class="list-group list-group-flush list-group-activity my-n3">
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="/assets_template/img/avatars/profiles/avatar-1.jpg" alt="..."
                                                     class="avatar-img rounded-circle"/>
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo
                                                Hess, and 3 others.
                                            </div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div>
                                    <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="/assets_template/img/avatars/profiles/avatar-2.jpg" alt="..."
                                                     class="avatar-img rounded-circle"/>
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Ab Hadley</strong> reacted to your post with a 😍
                                            </div>

                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>

                                        </div>
                                    </div>
                                    <!-- / .row -->
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- / .dropdown-menu -->
                </div>
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle photo user -->
                    <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="/assets_template/img/avatars/profiles/avatar-1.jpg" alt="..."
                             class="avatar-img rounded-circle"/>
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Profil</a>
                        <a href="#" class="dropdown-item">paramètres</a>
                        <hr class="dropdown-divider"/>
                        <a href="#" class="dropdown-item">Se déconnecter</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- / .main-content -->

<!-- JAVASCRIPT
    ================================================== -->
<!-- Libs JS -->
<script src="/assets_template/libs/jquery/dist/jquery.min.js"></script>
<script src="/assets_template/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets_template/libs/%40shopify/draggable/lib/es5/draggable.bundle.legacy.js"></script>
<script src="/assets_template/libs/autosize/dist/autosize.min.js"></script>
<script src="/assets_template/libs/chart.js/dist/Chart.min.js"></script>
<script src="/assets_template/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="/assets_template/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="/assets_template/libs/highlightjs/highlight.pack.min.js"></script>
<script src="/assets_template/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
<script src="/assets_template/libs/list.js/dist/list.min.js"></script>
<script src="/assets_template/libs/quill/dist/quill.min.js"></script>
<script src="/assets_template/libs/select2/dist/js/select2.full.min.js"></script>
<script src="/assets_template/libs/chart.js/Chart.extension.js"></script>

<!-- Theme JS -->
<script src="/assets_template/js/theme.min.js"></script>
<script src="/assets_template/js/dashkit.min.js"></script>


</body>

<!-- Mirrored from dashkit.goodthemes.co/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jul 2020 12:10:03 GMT -->

</html>