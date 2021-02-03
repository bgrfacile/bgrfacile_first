@extends('layouts.baseTemplate')

@section('title')
    {{ $course->name }}
@endsection

@section('contenue')
    <div class="container">
        {{--        breancrud--}}
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
                    {{--                    <button class="btn btn-falcon-success btn-sm mb-2 mb-sm-0" type="button">--}}
                    {{--                        <span class="fas fa-arrow-down mr-1"> </span>Download (.pdf)--}}
                    {{--                    </button>--}}
                </div>
            </div>
        </div>
        {{--        header--}}
        <div class="card mb-3">
            <div class="card-body">
                <div class="row justify-content-between align-items-center">
                    <div class="col">
                        <div class="d-flex">
                            <div class="flex-1 fs--1">
                                <h1>{{ $course->name }}</h1>
                                <p class="mb-0">écrit par <a href="#">bgrfacile</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto mt-4 mt-md-0">
                        <button class="btn btn-falcon-default btn-sm mr-2" type="button">
                            <span class="fas fa-heart text-danger mr-1"></span>
                        </button>
                        <a href="#comment" class="btn btn-falcon-primary btn-sm px-4 px-sm-5">commenter</a>
                    </div>
                </div>
            </div>
        </div>
        {{--        body--}}
        <div class="row g-0">
            {{--            gauche--}}
            <div class="col-lg-8 pr-lg-2">
                <div class="card mb-3 ">
                    <div class="card-header bg-light">
                        <h5 class="mb-0" id="rights">Cours</h5>
                    </div>
                    <div class="card-body min-vh-50" id="app_cours">
                        {!! $course->contenue !!}

                    </div>
                </div>
                {{--                card commentaire--}}
                <div class="card mb-3">
                    <div class="card-header bg-light">
                        <h5 class="mb-0" id="liability">Commentaires</h5>
                    </div>
                    <div class="card-body">
                        <div class="card-footer bg-light pt-0">
                            <div class="border-bottom border-200 fs--1 py-3">
                                <a class="text-700" href="#!">34 Comments</a>
                            </div>
                            <form class="d-flex align-items-center border-top border-200 pt-3">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="{{ asset('dist/assets/img/team/3.jpg') }}" alt=""/>
                                </div>
                                <input class="form-control rounded-pill ml-2 fs--1" type="text"
                                       placeholder="ecrire un commentaire..."/>
                            </form>
                            <div class="d-flex mt-3">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="assets/img/team/4.jpg" alt=""/>
                                </div>
                                <div class="flex-1 ml-2 fs--1">
                                    <p class="mb-1 bg-200 rounded-lg p-2">
                                        <a class="font-weight-semi-bold"
                                           href="pages/profile.html">
                                            Rowan Atkinson
                                        </a>
                                        She starred as Jane Porter in The Tanya Vanderpoel in Whiskey Tango Foxtrot
                                        (2016) and as
                                        DC comics villain Harley Quinn in Suicide Squad (2016), for which she was
                                        nominated for a Teen Choice Award, and many other awards.
                                    </p>
                                    <div class="px-2">
                                         23min
                                    </div>
                                </div>
                            </div>
                            <a class="fs--1 text-700 d-inline-block mt-2" href="#!">Load more comments (2 of 34)</a>
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

@section('script')
    <script src="{{ asset('dist/vendors/anchorjs/anchor.min.js') }}"></script>
    <script>
        // anchors.options = {
        //     placement: 'left'
        // };
        anchors.add('#app_cours h2');

        const titles = document.querySelectorAll('#app_cours h2');
        titles.forEach((title) => {
            title.setAttribute("data-anchor", "data-anchor");
            title.setAttribute("class", "pl-3");
        });
        const p = document.querySelectorAll('#app_cours p');
        p.forEach((para) => {
            para.setAttribute("class", "mb-0 pl-3");
        });
    </script>
@endsection