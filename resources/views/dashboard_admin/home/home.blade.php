@extends('layouts.dashboardAdmin')
@section('title')
    dashboard
@endsection
@section('contenue')
    <div class="row g-3">
        <div class="col-sm-6 col-md-4">
            <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(../assets/img/illustrations/corner-1.png);"></div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                    <h6>Customers<span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span></h6>
                    <div class="display-4 fs-4 mb-2 font-weight-normal font-sans-serif text-warning" data-countup='{"endValue":58.386,"decimalPlaces":2,"suffix":"k"}'>0</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="../e-commerce/customers.html">See all<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(../assets/img/illustrations/corner-2.png);"></div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                    <h6>Orders<span class="badge badge-soft-info rounded-pill ml-2">0.0%</span></h6>
                    <div class="display-4 fs-4 mb-2 font-weight-normal font-sans-serif text-info" data-countup='{"endValue":23.434,"decimalPlaces":2,"suffix":"k"}'>0</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="../e-commerce/orders.html">All orders<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(../assets/img/illustrations/corner-3.png);"></div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                    <h6>Revenue<span class="badge badge-soft-success rounded-pill ml-2">9.54%</span></h6>
                    <div class="display-4 fs-4 mb-2 font-weight-normal font-sans-serif" data-countup='{"endValue":43594,"prefix":"$"}'>0</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="../index.html">Statistics<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
