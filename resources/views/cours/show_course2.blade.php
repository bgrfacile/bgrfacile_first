@extends('layouts.baseTemplate')

@section('contenue')
    <div class="container">
        {{--        header--}}
        <div class="card mb-3"><img class="card-img-top" src="../assets/img/generic/13.jpg" alt=""/>
            <div class="card-body">
                <div class="row justify-content-between align-items-center">
                    <div class="col">
                        <div class="d-flex">
                            <div class="calendar mr-2"><span class="calendar-month">Dec</span><span
                                        class="calendar-day">31 </span></div>
                            <div class="flex-1 fs--1">
                                <h5 class="fs-0">FREE New Year's Eve Midnight Harbor Fireworks</h5>
                                <p class="mb-0">by <a href="#!">Boston Harbor Now</a></p><span
                                        class="fs-0 text-warning font-weight-semi-bold">$49.99 – $89.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto mt-4 mt-md-0">
                        <button class="btn btn-falcon-default btn-sm mr-2" type="button"><span
                                    class="fas fa-heart text-danger mr-1"></span>235
                        </button>
                        <button class="btn btn-falcon-default btn-sm mr-2" type="button"><span
                                    class="fas fa-share-alt mr-1"></span>Share
                        </button>
                        <button class="btn btn-falcon-primary btn-sm px-4 px-sm-5" type="button">Register</button>
                    </div>
                </div>
            </div>
        </div>
        {{--        body--}}
        <div class="row g-0">
            {{--            gauche--}}
            <div class="col-lg-8 pr-lg-2">
                <div class="card mb-3 mb-lg-0">
                    <div class="card-body">
                        {!! $course->contenue !!}
                        <h5 class="fs-0 mt-5 mb-2">Tags</h5><a
                                class="badge border link-secondary mr-1 text-decoration-none" href="#!">Things To Do In
                            Brooklyn, NY</a><a class="badge border link-secondary mr-1 text-decoration-none" href="#!">Party</a><a
                                class="badge border link-secondary mr-1 text-decoration-none" href="#!">Music</a>
                        <h5 class="fs-0 mt-5 mb-2">Share with friends</h5>
                        <div class="icon-group"><a class="icon-item text-facebook" href="#!"><span
                                        class="fab fa-facebook-f"></span></a><a class="icon-item text-twitter"
                                                                                href="#!"><span
                                        class="fab fa-twitter"></span></a><a class="icon-item text-google-plus"
                                                                             href="#!"><span
                                        class="fab fa-google-plus-g"></span></a><a class="icon-item text-linkedin"
                                                                                   href="#!"><span
                                        class="fab fa-linkedin-in"></span></a><a class="icon-item text-700"
                                                                                 href="#!"><span
                                        class="fab fa-medium-m"></span></a></div>
                        <div class="googlemap min-vh-50 rounded-lg mt-5" id="view-map"
                             data-latlng="23.8383608,90.3680554" data-scrollwheel="false"
                             data-icon="../assets/img/icons/map-marker.png" data-zoom="17" data-theme="Default">
                            <div class="marker-content pb-3">
                                <h5>Eiffel Tower</h5>
                                <p>Gustave Eiffel's iconic, wrought-iron 1889 tower,<br/> with steps and elevators to
                                    observation decks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--            droite--}}
            <div class="col-lg-4 pl-lg-2">
                <div class="sticky-sidebar">
                    <div class="card mb-3 fs--1">
                        <div class="card-body">
                            <h6>Date And Time</h6>
                            <p class="mb-1">Mon, Dec 31, 2018, 11:59 PM – <br/>Tue, Jan 1, 2019, 12:19 AM EST</p><a
                                    href="#!">Add to Calendar</a>
                            <h6 class="mt-4">Location</h6>
                            <div class="mb-1">Boston Harborwalk<br/>Christopher Columbus Park<br/>Boston, MA 02109<br/>United
                                States
                            </div>
                            <a href="#view-map">View Map</a>
                            <h6 class="mt-4">Refund Policy</h6>
                            <p class="fs--1 mb-0">No Refunds</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection