@extends('layouts.dashboardAdmin')
@section('title')
    Liste des astuces
@endsection

@section('contenue')
    <div class="card mb-3 overflow-hidden">
        <div class="card-header bg-light">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="mb-0" id="followers">Followers <span class="d-none d-sm-inline-block">(233)</span></h5>
                </div>
                <div class="col">
                    <form>
                        <div class="row g-0">
                            <div class="col"><input class="form-control form-control-sm" type="text"
                                                    placeholder="Search..."></div>
                            <div class="col d-md-block d-none"><select class="form-select form-select-sm ml-2"
                                                                       aria-label=".form-select-sm example">
                                    <option selected="selected">All followers</option>
                                    <option>Concert Choir</option>
                                    <option>Clubchem</option>
                                    <option>Chamber Music Society</option>
                                    <option>Alpha Chi Omega</option>
                                    <option>Alpine Ski Club</option>
                                    <option>Career Club</option>
                                    <option>Musical Club</option>
                                    <option>Asymptones</option>
                                    <option>Clubchem</option>
                                    <option>Brain Trust</option>
                                    <option>Other</option>
                                </select></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body bg-light p-0">
            <div class="row g-0 text-center fs--1">
                <div class="col-6 col-md-4">
                    <div class="bg-white p-3 h-100"><a href="pages/profile.html"><img
                                class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                src="assets/img/team/1.jpg" alt="" width="100"></a>
                        <h6 class="mb-1"><a href="pages/profile.html">Emilia Clarke</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Technext limited</a></p>
                        <div class="col">
                            <button class="btn btn-falcon-default rounded-pill mr-1 mb-1" type="button">Example
                            </button>
                            <button
                                class="btn btn-light btn-sm rounded-pill shadow-none d-inline-flex align-items-center fs--1 mr-1"
                                type="button">
                                <img class="cursor-pointer" src="assets/img/illustrations/calendar.svg" width="17"
                                     alt="">
                                <span class="ml-2 d-none d-md-inline-block">Event</span>
                            </button>
                            <button
                                class="btn btn-light btn-sm rounded-pill shadow-none d-inline-flex align-items-center fs--1 mr-1"
                                type="button">
                                <img class="cursor-pointer" src="assets/img/illustrations/location.svg" width="17"
                                     alt="">
                                <span class="ml-2 d-none d-md-inline-block text-nowrap">Check in</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="bg-white p-3 h-100"><a href="pages/profile.html"><img
                                class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                src="assets/img/team/2.jpg" alt="" width="100"></a>
                        <h6 class="mb-1"><a href="pages/profile.html">Kit Harington</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Harvard Korea Society</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="bg-white p-3 h-100"><a href="pages/profile.html"><img
                                class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                src="assets/img/team/3.jpg" alt="" width="100"></a>
                        <h6 class="mb-1"><a href="pages/profile.html">Sophie Turner</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Graduate Student Council</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="bg-white p-3 h-100"><a href="pages/profile.html"><img
                                class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                src="assets/img/team/4.jpg" alt="" width="100"></a>
                        <h6 class="mb-1"><a href="pages/profile.html">Peter Dinklage</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Art Club, MIT</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="bg-white p-3 h-100"><a href="pages/profile.html"><img
                                class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                src="assets/img/team/5.jpg" alt="" width="100"></a>
                        <h6 class="mb-1"><a href="pages/profile.html">Nikolaj Coster</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Archery Club, MIT</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="bg-white p-3 h-100"><a href="pages/profile.html"><img
                                class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                src="assets/img/team/6.jpg" alt="" width="100"></a>
                        <h6 class="mb-1"><a href="pages/profile.html">Isaac Hempstead</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Asymptones</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
