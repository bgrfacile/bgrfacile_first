@extends('layouts.baseTemplate')

@section('title')
    login
@endsection

@section('contenue')
    <div class="container-fluid">
        <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
        </script>
        <div class="row min-vh-100 bg-100">
            <div class="col-6 d-none d-lg-block position-relative">
                <div class="bg-holder"
                     style="background-image:url({{ asset('dist/assets/img/generic/14.jpg') }});background-position: 50% 20%;"></div>
                <!--/.bg-holder-->
            </div>
            <div class="col-sm-10 col-md-6 px-sm-0 align-self-center mx-auto py-5">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-9 col-xl-8 col-xxl-6">
                        <div class="card">
                            <div class="card-header bg-circle-shape text-center p-2"><a
                                    class="font-sans-serif font-weight-bolder fs-4 z-index-1 position-relative link-light"
                                    href="{{ route('home') }}">bgrfacile</a></div>
                            <div class="card-body p-4">
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                        <h3>Login</h3>
                                    </div>
                                    <div class="col-auto fs--1 text-600">
                                        <span><a href="{{ route('register') }}">Créer un compte</a></span></div>
                                </div>
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="split-login-email">
                                            Adresse e-mail
                                        </label>
                                        <input name="email" value="{{ old('email') }}"
                                               class="form-control @if($errors->has('email'))is-invalid @endif"
                                               id="split-login-email"
                                               type="email" placeholder="votre adresse e-mail" required/>
                                        @if($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label"
                                                   for="split-login-password">Mot de passe</label>
                                            <a class="fs--1" href="{{ route('password.request') }}">Mot de passe
                                                oublié?</a>
                                        </div>
                                        <input name="password" class="form-control @if($errors->has('password'))is-valid @endif" id="split-login-password"
                                               type="password" required autocomplete="current-password"/>
                                        @if($errors->has('password'))
                                            <div class="valid-feedback">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-check mb-0">
                                        <input name="remember" class="form-check-input" type="checkbox"
                                               id="split-checkbox"/>
                                        <label
                                            class="form-check-label" for="split-checkbox">Souviens-toi de moi</label>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">
                                            S'identifier
                                        </button>
                                    </div>
                                </form>
                                <div class="position-relative mt-4">
                                    <hr class="bg-300"/>
                                    <div
                                        class="position-absolute top-50 left-50 translate-middle px-3 bg-white font-sans-serif fs--1 text-500 text-nowrap">
                                        ou connectez-vous avec
                                    </div>
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col-sm-6">
                                        <a class="btn btn-outline-google-plus btn-sm btn-block"
                                           href="{{ route('login.google') }}">
                                            <span class="fab fa-google mr-2" data-fa-transform="grow-8"></span>
                                            google
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="btn btn-outline-dark btn-sm btn-block"
                                           href="{{ route('login.github') }}">
                                            <span class="fab fa-github mr-2" data-fa-transform="grow-8"></span>
                                            GitHub
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
