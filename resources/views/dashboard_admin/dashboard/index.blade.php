@extends('layouts.dashboardAdmin')

@section('title')
    dashboard
@endsection

@section('contenue')
    <div class="row g-3">
        <div class="col-sm-6 col-md-4">
            <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url( {{ asset('dist/assets/img/illustrations/corner-1.png') }});"></div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                    <h6>Utilisateurs</h6>
                    <div class="display-4 fs-4 mb-2 font-weight-normal font-sans-serif text-warning" data-countup='{"endValue":58.386,"decimalPlaces":2,"suffix":"k"}'>
                        {{ $nbr_user }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url( {{asset('dist/assets/img/illustrations/corner-2.png') }});"></div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                    <h6>Podcasts</h6>
                    <div class="display-4 fs-4 mb-2 font-weight-normal font-sans-serif text-info" data-countup='{"endValue":23.434,"decimalPlaces":2,"suffix":"k"}'>
                        {{ $nbr_podcast }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url({{asset('dist/assets/img/illustrations/corner-3.png') }});"></div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                    <h6>Pistes</h6>
                    <div class="display-4 fs-4 mb-2 font-weight-normal font-sans-serif" data-countup='{"endValue":43594,"prefix":"$"}'>
                        {{ $nbr_piste }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
