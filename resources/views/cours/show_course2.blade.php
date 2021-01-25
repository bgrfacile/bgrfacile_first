@extends('layouts.baseTemplate')

@section('contenue')
    <div class="container">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">
                                    <span class="fas fa-house-user"></span> Home
                                </a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $course->slug }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-auto">
                    <button class="btn btn-falcon-success btn-sm mb-2 mb-sm-0" type="button">
                        <span
                                class="fas fa-arrow-down mr-1"> </span>Download (.pdf)
                    </button>
                </div>
            </div>
        </div>
        {{--        header--}}
        <div class="card mb-3"><img class="card-img-top" src="../assets/img/generic/13.jpg" alt=""/>
            <div class="card-body">
                <div class="row justify-content-between align-items-center">
                    <div class="col">
                        <div class="d-flex">
                            {{--                            <div class="calendar mr-2"><span class="calendar-month">Dec</span><span--}}
                            {{--                                        class="calendar-day">31 </span></div>--}}
                            <div class="flex-1 fs--1">
                                <h5 class="fs-0">{{ $course->name }}</h5>
                                <p class="mb-0">écrit par <a href="#!">bgrfqcile</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto mt-4 mt-md-0">
                        <button class="btn btn-falcon-default btn-sm mr-2" type="button">
                            <span class="fas fa-heart text-danger mr-1"></span>
                        </button>
                        {{--                        <button disabled class="btn btn-falcon-default btn-sm mr-2" type="button">--}}
                        {{--                            <span>12</span> <span class="far fa-comment-alt mr-1"></span>--}}
                        {{--                        </button>--}}
                        <a href="#comment" class="btn btn-falcon-primary btn-sm px-4 px-sm-5">commenter</a>
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

                        <div class="googlemap min-vh-50 rounded-lg mt-5">

                        </div>
                    </div>
                </div>
            </div>
            {{--            droite--}}
            <div class="col-lg-4 pl-lg-2">
                <div class="sticky-sidebar">
                    <div class="card mb-3 fs--1">
                        <img class="card-img-top" src="{{ $course->image_path }}" alt="">
                        <div class="card-body">
                            <h6>Matières:</h6>
                            <p class="mb-1">
                                {{ $subject->name }}
                            </p>
                            <h6 class="mt-4">Niveau</h6>
                            <div class="mb-1">
                                {{ $level->name }}
                            </div>
                            <h6 class="mt-4">Cycle</h6>
                            <div class="mb-1">
                                {{ $cycle->name }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection