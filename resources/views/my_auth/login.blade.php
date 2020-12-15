<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Connexion | bgrfacile.com</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/bgr.ico') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('dist/assets/js/config.navbar-vertical.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('dist/assets/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl"/>
    <link href="{{ asset('dist/assets/css/theme.min.css') }}" rel="stylesheet" id="style-default"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            linkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            linkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>
<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    <div class="container" data-layout="container">
        <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
        </script>
        <div class="row flex-center min-vh-100 py-6">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <a class="d-flex flex-center mb-4" href="{{ route('home') }}">
                    <img class="mr-2" src="{{ asset('assets/images/BGRfacile3.png') }}" alt="logo de bgrfacile" width="150"/>
                    {{--                    <span class="font-sans-serif font-weight-bolder fs-5 d-inline-block">falcon</span>--}}
                </a>
                <div class="card">
                    <div class="card-body p-4 p-sm-5">
                        <div class="row flex-between-center mb-2">
                            <div class="col-auto">
                                <h5>S'identifier</h5>
                            </div>
                            <div class="col-auto fs--1 text-600"><span class="mb-0 undefined">ou</span>
                                <span>
                                    <a href="{{ route('register') }}" class="text-blue-600"> créer un compte</a>
                                </span>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <input
                                    name="email"
                                    class="form-control  @if($errors->has('email')) is-invalid @endif "
                                    type="email"
                                    placeholder="Email address"
                                    value="{{ old('email') }}"
                                    autofocus="autofocus"/>
                                @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="relative mb-3" x-data="{ show: true }">
                                <input
                                    name="password"
                                    class="form-control @if($errors->has('password')) is-invalid @endif"
                                    required="required"
                                    {{--                                    type="password" --}}
                                    :type="show ? 'password' : 'text'"
                                    autocomplete="new-password"
                                    placeholder="Password"/>
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">

                                    <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                         :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                                         viewbox="0 0 576 512">
                                        <path fill="currentColor"
                                              d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                        </path>
                                    </svg>

                                    <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                         :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                                         viewbox="0 0 640 512">
                                        <path fill="currentColor"
                                              d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                        </path>
                                    </svg>

                                </div>
                                @if($errors->has('password'))
                                    <div
                                        class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                            <div class="row flex-between-center">
                                <div class="col-auto">
                                    <div class="form-check mb-0">
                                        <input
                                            name="remember"
                                            class="form-check-input"
                                            type="checkbox"
                                            id="basic-checkbox"/>
                                        <label class="form-check-label" for="basic-checkbox">Souviens-toi de moi</label>
                                    </div>
                                </div>
                                    <div class="col-auto">
                                        <a class="fs--1" href="{{ route('password.reset') }}">
                                            Mot de passe oublié?
                                        </a>
                                    </div>
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
                                    <span class="fab fa-google-plus-g mr-2" data-fa-transform="grow-8"></span>
                                    google
                                </a></div>
                            <div class="col-sm-6">
                                <a class="btn btn-outline-dark btn-sm btn-block" href="{{ route('login.github') }}">
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
</main><!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->


<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="{{ asset('dist/vendors/popper/popper.min.js') }}"></script>
<script src="{{ asset('dist/vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/vendors/is/is.min.js') }}"></script>
<script src="{{ asset('dist/vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('dist/vendors/lodash/lodash.min.js') }}"></script>
{{--<script src="../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>--}}
<script src="{{ asset('dist/vendors/list.js/list.min.js') }}"></script>
<script src="{{ asset('dist/assets/js/theme.js') }}"></script>
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">
</body>
</html>
