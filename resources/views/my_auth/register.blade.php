@extends('layouts.baseTemplate')

@section('title')
    creation de compte
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
                     style="background-image:url({{ asset('dist/assets/img/generic/19.jpg') }});"></div>
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
                                        <h3>S'inscrire</h3>
                                    </div>
                                    <div class="col-auto fs--1 text-600">
                                        <span class="mb-0 font-weight-semi-bold">Déjà utilisateur?</span>
                                        <span><a href="{{ route('login') }}">S'identifier</a></span>
                                    </div>
                                </div>
                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="split-name">Nom</label>
                                        <input name="name" value="{{ old('name') }}"
                                               class="form-control @if($errors->has('name'))is-invalid @endif"
                                               type="text" id="split-name"/>
                                        @if($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="split-email">Adresse e-mail</label>
                                        <input name="email" value="{{ old('email') }}"
                                               class="form-control @if($errors->has('email'))is-invalid @endif"
                                               type="email"
                                               id="split-email"/>
                                        @if($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row gx-3">
                                        <div class="mb-3 col-sm-12">
                                            <label class="form-label" for="split-password">Mot de passe</label>
                                            <input name="password"
                                                   class="form-control @if($errors->has('password'))is-invalid @endif"
                                                   type="password" id="split-password"/>
                                            @if($errors->has('password'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('password') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <label class="form-label"
                                                   for="split-confirm-password">Confirmez mot de passe</label>
                                            <input name="password_confirmation"
                                                   class="form-control "
                                                   type="password"
                                                   id="split-confirm-password"/>

                                        </div>
                                    </div>
                                    conditions et la politique de confidentialité
                                    <div class="form-check">
                                        <input name="condition"
                                               class="form-check-input @if($errors->has('condition'))is-invalid @endif"
                                               type="checkbox"
                                               id="cover-register-checkbox"/>
                                        <label class="form-label" for="cover-register-checkbox">J'accepte les <a
                                                href="#!">conditions </a>et
                                            <a href="#!">la politique de confidentialité</a>
                                        </label>
                                        @if($errors->has('condition'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('condition') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">
                                            S'inscrire
                                        </button>
                                    </div>
                                </form>
                                <div class="position-relative mt-4">
                                    <hr class="bg-300"/>
                                    <div
                                        class="position-absolute top-50 left-50 translate-middle px-3 bg-white font-sans-serif fs--1 text-500 text-nowrap">
                                        ou inscrivez-vous avec
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
                                        <a class="btn btn-outline-primary btn-sm btn-block"
                                           href="{{ route('login.facebook') }}">
                                            <span class="fab fa-facebook mr-2" data-fa-transform="grow-8"></span>
                                            Facebook
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
