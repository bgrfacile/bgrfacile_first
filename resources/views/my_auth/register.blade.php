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
    <title>Register | bgrfacile.com</title>

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
                    <img class="mr-2" src="{{ asset('assets/images/BGRfacile3.png') }}" alt="logo de bgrfacile"
                         width="150"/>
                    {{--                    <span class="font-sans-serif font-weight-bolder fs-5 d-inline-block">falcon</span>--}}
                </a>
                <div class="card">
                    <div class="card-body p-4 p-sm-5">
                        <div class="row flex-between-center mb-2">
                            <div class="col-auto">
                                <h5>S'inscrire</h5>
                            </div>
                            <div class="col-auto fs--1 text-600"><span class="mb-0 undefined">Déjà un compte?</span>
                                <span><a href="{{ route('login') }}" class="text-blue-600">S'identifier</a></span>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input class="form-control" type="text" placeholder="Name"/>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="email" placeholder="Email address"/>
                            </div>
                            {{--                            <div class="row gx-3">--}}
                            <div class="mb-3">
                                <input class="form-control"
                                       type="password"
                                       placeholder="Password"/>
                            </div>
                            <div class="mb-3 ">
                                <input class="form-control"
                                       type="password"
                                       placeholder="Confirm Password"/>
                            </div>
                            {{--                            </div>--}}
                            <div class="form-check">
                                <input class="form-check-input"
                                       type="checkbox"
                                       id="basic-register-checkbox"
                                       required/>
                                <label class="form-label"
                                       for="basic-register-checkbox">
                                    J'accepte les <a href="{{ route('faq') }}" class="text-blue-600">conditions </a>et
                                    <a href="{{ route('faq') }}"
                                       class="text-blue-600">
                                        la politique de confidentialité</a>
                                </label>
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
</main>


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
