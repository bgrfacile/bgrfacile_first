@extends('layouts.dashboardAdmin')

@section('title') profil de  @endsection

@section('contenue')

    <div class="card mb-3">
        <div class="card-header position-relative min-vh-25 mb-7">
            <div class="bg-holder rounded-lg rounded-bottom-0" style="background-image:url({{ asset('dist/assets/img/generic/4.jpg') }});"></div>
            <!--/.bg-holder-->
            <div class="avatar avatar-5xl avatar-profile"><img class="rounded-circle img-thumbnail shadow-sm" src="{{ asset('dist/assets/img/team/2.jpg') }}" width="200" alt="" /></div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="mb-1"> {{ $user->name }}<span data-toggle="tooltip" data-placement="right" title="Verified"><small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small></span></h4>
                    <h5 class="fs-0 font-weight-normal">Senior Software Engineer at Technext Limited</h5>
                    <p class="text-500">New York, USA</p><button class="btn btn-falcon-primary btn-sm px-3" type="button">Following</button><button class="btn btn-falcon-default btn-sm px-3 ml-2" type="button">Message</button>
                    <div class="border-dashed-bottom my-4 d-lg-none"></div>
                </div>
                <div class="col pl-2 pl-lg-3">

                </div>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-lg-8 pr-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Intro</h5>
                </div>
                <div class="card-body text-justify">
                    <p class="mb-0 text-1000">Dedicated, passionate, and accomplished Full Stack Developer with 9+ years of progressive experience working as an Independent Contractor for Google and developing and growing my educational social network that helps others learn programming, web design, game development, networking.</p>
                    <div class="collapse show" id="profile-intro">
                        <p class="mt-3 text-1000">I’ve acquired a wide depth of knowledge and expertise in using my technical skills in programming, computer science, software development, and mobile app development to developing solutions to help organizations increase productivity, and accelerate business performance. </p>
                        <p class="text-1000">It’s great that we live in an age where we can share so much with technology but I’m but I’m ready for the next phase of my career, with a healthy balance between the virtual world and a workplace where I help others face-to-face.</p>
                        <p class="text-1000 mb-0">There’s always something new to learn, especially in IT-related fields. People like working with me because I can explain technology to everyone, from staff to executives who need me to tie together the details and the big picture. I can also implement the technologies that successful projects need.</p>
                    </div>
                </div>
                <div class="card-footer bg-light p-0 border-top"><button class="btn btn-link btn-block btn-intro-collapse" type="button" data-toggle="collapse" data-target="#profile-intro" aria-expanded="true" aria-controls="profile-intro">Show <span class="less">less<span class="fas fa-chevron-up ml-2 fs--2"></span></span><span class="full">full<span class="fas fa-chevron-down ml-2 fs--2"></span></span></button></div>
            </div>

        </div>
        <div class="col-lg-4 pl-lg-2">
            <div class="sticky-sidebar">
                <div class="card mb-3">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Experience</h5>
                    </div>
                    <div class="card-body fs--1">
                        <div class="d-flex"><a href="#!"> <img class="img-fluid" src="../assets/img/logos/g.png" alt="" width="56" /></a>
                            <div class="flex-1 position-relative pl-3">
                                <h6 class="fs-0 mb-0">Big Data Engineer<span data-toggle="tooltip" data-placement="top" title="Verified"><small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small></span></h6>
                                <p class="mb-1"> <a href="#!">Google</a></p>
                                <p class="text-1000 mb-0">Apr 2012 - Present &bull; 6 yrs 9 mos</p>
                                <p class="text-1000 mb-0">California, USA</p>
                                <div class="border-dashed-bottom my-3"></div>
                            </div>
                        </div>
                        <div class="d-flex"><a href="#!"> <img class="img-fluid" src="../assets/img/logos/apple.png" alt="" width="56" /></a>
                            <div class="flex-1 position-relative pl-3">
                                <h6 class="fs-0 mb-0">Software Engineer<span data-toggle="tooltip" data-placement="top" title="Verified"><small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small></span></h6>
                                <p class="mb-1"> <a href="#!">Apple</a></p>
                                <p class="text-1000 mb-0">Jan 2012 - Apr 2012 &bull; 4 mos</p>
                                <p class="text-1000 mb-0">California, USA</p>
                                <div class="border-dashed-bottom my-3"></div>
                            </div>
                        </div>
                        <div class="d-flex"><a href="#!"> <img class="img-fluid" src="../assets/img/logos/nike.png" alt="" width="56" /></a>
                            <div class="flex-1 position-relative pl-3">
                                <h6 class="fs-0 mb-0">Mobile App Developer<span data-toggle="tooltip" data-placement="top" title="Verified"><small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small></span></h6>
                                <p class="mb-1"> <a href="#!">Nike</a></p>
                                <p class="text-1000 mb-0">Jan 2011 - Apr 2012 &bull; 1 yr 4 mos</p>
                                <p class="text-1000 mb-0">Beaverton, USA</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header bg-light">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="mb-0" id="followers">Followers <span class="d-none d-sm-inline-block">(233)</span></h5>
                </div>
                <div class="col text-right"><a class="font-sans-serif" href="people.html">All Members</a></div>
            </div>
        </div>
        <div class="card-body bg-light p-0">
            <div class="row g-0 text-center fs--1">
                <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                    <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/1.jpg" alt="" width="100" /></a>
                        <h6 class="mb-1"><a href="profile.html">Emilia Clarke</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Technext limited</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                    <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/2.jpg" alt="" width="100" /></a>
                        <h6 class="mb-1"><a href="profile.html">Kit Harington</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Harvard Korea Society</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                    <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/3.jpg" alt="" width="100" /></a>
                        <h6 class="mb-1"><a href="profile.html">Sophie Turner</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Graduate Student Council</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                    <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/4.jpg" alt="" width="100" /></a>
                        <h6 class="mb-1"><a href="profile.html">Peter Dinklage</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Art Club, MIT</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                    <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/5.jpg" alt="" width="100" /></a>
                        <h6 class="mb-1"><a href="profile.html">Nikolaj Coster</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Archery Club, MIT</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                    <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/6.jpg" alt="" width="100" /></a>
                        <h6 class="mb-1"><a href="profile.html">Isaac Hempstead</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Asymptones</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                    <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/7.jpg" alt="" width="100" /></a>
                        <h6 class="mb-1"><a href="profile.html">Alfie Allen</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Brain Trust</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                    <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/8.jpg" alt="" width="100" /></a>
                        <h6 class="mb-1"><a href="profile.html">Iain Glen</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">GSAS Action Coalition</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                    <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/9.jpg" alt="" width="100" /></a>
                        <h6 class="mb-1"><a href="profile.html">Liam Cunningham</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Caving Club, MIT</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                    <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/10.jpg" alt="" width="100" /></a>
                        <h6 class="mb-1"><a href="profile.html">John Bradley</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Chess Club</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                    <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/11.jpg" alt="" width="100" /></a>
                        <h6 class="mb-1"><a href="profile.html">Rory McCann</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Chamber Music Society</a></p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                    <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/12.jpg" alt="" width="100" /></a>
                        <h6 class="mb-1"><a href="profile.html">Joe Dempsie</a></h6>
                        <p class="fs--2 mb-1"><a class="text-700" href="#!">Clubchem</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2020 &copy; <a href="https://themewagon.com/">Themewagon</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.0.0-alpha10</p>
            </div>
        </div>
    </footer>
    </div>
    <div class="modal fade modal-fixed-right modal-theme overflow-hidden" id="settings-modal" tabindex="-1" role="dialog" aria-labelledby="settings-modal-label" aria-hidden="true" data-options='{"autoShow":true,"autoShowDelay":3000,"showOnce":true}'>
        <div class="modal-dialog modal-dialog-vertical" role="document">
            <div class="modal-content border-0 vh-100 scrollbar">
                <div class="modal-header modal-header-settings">
                    <div class="z-index-1 py-1">
                        <h5 class="text-white" id="settings-modal-label"> <span class="fas fa-palette mr-2 fs-0"></span>Settings</h5>
                        <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
                    </div><button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-card">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-start"><img class="mr-2" src="../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                            <div class="flex-1">
                                <h5 class="fs-0">RTL Mode</h5>
                                <p class="fs--1 mb-0">Switch your language direction </p>
                            </div>
                        </div>
                        <div class="form-check form-switch"><input class="form-check-input ml-0" id="mode-rtl" type="checkbox" /></div>
                    </div>
                    <hr />
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-start"><img class="mr-2" src="../assets/img/icons/arrows-h.svg" width="20" alt="" />
                            <div class="flex-1">
                                <h5 class="fs-0">Fluid Layout</h5>
                                <p class="fs--1 mb-0">Toggle container layout system </p>
                            </div>
                        </div>
                        <div class="form-check form-switch"><input class="form-check-input ml-0" id="mode-fluid" type="checkbox" /></div>
                    </div>
                    <hr />
                    <div class="d-flex align-items-start"><img class="mr-2" src="../assets/img/icons/paragraph.svg" width="20" alt="" />
                        <div class="flex-1">
                            <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
                            <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                            <div class="form-check form-check-inline"><input class="form-check-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" checked="checked" /><label class="form-check-label" for="option-navbar-vertical">Vertical</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" id="option-navbar-top" type="radio" name="navbar" value="top" /><label class="form-check-label" for="option-navbar-top">Top</label></div>
                            <div class="form-check form-check-inline mr-0"><input class="form-check-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" /><label class="form-check-label" for="option-navbar-combo">Combo</label></div>
                        </div>
                    </div>
                    <hr />
                    <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
                    <p class="fs--1">Switch between styles for your vertical navbar </p>
                    <div class="btn-group btn-block btn-group-navbar-style">
                        <div class="row gx-2">
                            <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" /><label class="btn btn-block btn-navbar-style fs--1" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="../assets/img/generic/default.png" alt="" /><span class="label-text"> Transparent</span></label></div>
                            <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" /><label class="btn btn-block btn-navbar-style fs--1" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="../assets/img/generic/inverted.png" alt="" /><span class="label-text"> Inverted</span></label></div>
                            <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" /><label class="btn btn-block btn-navbar-style fs--1" for="navbar-style-card"> <img class="img-fluid img-prototype" src="../assets/img/generic/card.png" alt="" /><span class="label-text"> Card</span></label></div>
                            <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" /><label class="btn btn-block btn-navbar-style fs--1" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="../assets/img/generic/vibrant.png" alt="" /><span class="label-text"> Vibrant</span></label></div>
                        </div>
                    </div>
                    <div class="text-center mt-5"><img class="mb-4" src="../assets/img/illustrations/settings.png" alt="" width="120" />
                        <h5>Like What You See?</h5>
                        <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
        <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
                <div class="modal-header px-5 text-white position-relative modal-shape-header">
                    <div class="position-relative z-index-1">
                        <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                        <p class="fs--1 mb-0">Please create your free Falcon account</p>
                    </div><button class="btn-close btn-close-white position-absolute top-0 right-0 mt-2 mr-2" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-4 px-5">
                    <form>
                        <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input class="form-control" type="text" id="modal-auth-name" /></div>
                        <div class="mb-3"><label class="form-label" for="modal-auth-email">Email address</label><input class="form-control" type="email" id="modal-auth-email" /></div>
                        <div class="row gx-3">
                            <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-password">Password</label><input class="form-control" type="password" id="modal-auth-password" /></div>
                            <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-confirm-password">Confirm Password</label><input class="form-control" type="password" id="modal-auth-confirm-password" /></div>
                        </div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" /><label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                        <div class="mb-3"><button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Register</button></div>
                    </form>
                    <div class="position-relative mt-5">
                        <hr class="bg-300" />
                        <div class="position-absolute top-50 left-50 translate-middle px-3 bg-white font-sans-serif fs--1 text-500 text-nowrap">or register with</div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm btn-block" href="#"><span class="fab fa-google-plus-g mr-2" data-fa-transform="grow-8"></span> google</a></div>
                        <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm btn-block" href="#"><span class="fab fa-facebook-square mr-2" data-fa-transform="grow-8"></span> facebook</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
