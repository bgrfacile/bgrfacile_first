<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">


<!-- Mirrored from prium.github.io/falcon/v3.0.0-alpha10/authentication/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Dec 2020 14:29:04 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title> creation école | bgrfacile.com</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    {{--    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dist/assets/img/favicons/apple-touch-icon.png') }}">--}}
    {{--    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dist/assets/img/favicons/favicon-32x32.png') }}">--}}
    {{--    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dist/assets/img/favicons/favicon-16x16.png.png') }}">--}}
    {{--    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dist/assets/img/favicons/favicon.ico') }}">--}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/bgr.ico') }}">
    {{--    <link rel="manifest" href="../assets/img/favicons/manifest.json">--}}
    {{--    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">--}}
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('dist/assets/js/config.navbar-vertical.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('dist/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('dist/vendors/dropzone/dropzone.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/assets/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl"/>
    <link href="{{ asset('dist/assets/css/theme.min.css') }}" rel="stylesheet" id="style-default"/>
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
        <div class="row justify-content-center pt-6">
            <div class="col-sm-10 col-lg-7 col-xxl-5">
                <a class="d-flex flex-center mb-4" href="/">
                    <img class="mr-2"
                         src="{{ asset('assets/images/BGRLOGO2.png') }}"
                         alt=""
                         width="45"/>
                    <span
                        class="font-sans-serif font-weight-bolder fs-4 d-inline-block">
                        bgrfacile
                    </span>
                </a>
                <div class="card theme-wizard mb-5">
                    <div class="card-header bg-light pt-3 pb-2">
                        <ul class="nav justify-content-between nav-wizard">
                            <li class="nav-item"><a class="nav-link active font-weight-semi-bold"
                                                    href="#bootstrap-wizard-tab1" data-toggle="tab"><span
                                        class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                                class="far fa-building"></span></span></span><span
                                        class="d-none d-md-block mt-1 fs--1">Info</span></a></li>

                            <li class="nav-item"><a class="nav-link font-weight-semi-bold" href="#bootstrap-wizard-tab2"
                                                    data-toggle="tab"><span class="nav-item-circle-parent"><span
                                            class="nav-item-circle"><span
                                                class="fas fa-users"></span></span></span><span
                                        class="d-none d-md-block mt-1 fs--1">élèves</span></a></li>

                            <li class="nav-item"><a class="nav-link font-weight-semi-bold" href="#bootstrap-wizard-tab3"
                                                    data-toggle="tab"><span class="nav-item-circle-parent"><span
                                            class="nav-item-circle"><span
                                                class="fas fa-dollar-sign"></span></span></span><span
                                        class="d-none d-md-block mt-1 fs--1">Billing</span></a></li>

                            <li class="nav-item"><a class="nav-link font-weight-semi-bold" href="#bootstrap-wizard-tab4"
                                                    data-toggle="tab"><span class="nav-item-circle-parent"><span
                                            class="nav-item-circle"><span class="fas fa-thumbs-up"></span></span></span><span
                                        class="d-none d-md-block mt-1 fs--1">Done</span></a></li>
                        </ul>
                    </div>
                    <div class="card-body py-4" id="wizard-controller">
                        <div class="tab-content">
                            <div class="tab-pane active px-sm-3 px-md-5" id="bootstrap-wizard-tab1">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label" for="wizard-name">Nom de la structure</label>
                                        <input
                                            class="form-control" type="text" name="name" placeholder="John Smith"
                                            id="wizard-name"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="wizard-name">Type de structure</label>

                                        <select class="form-select form-select-lg mb-3"
                                                aria-label=".form-select-lg example">
                                            <option selected="">Choisir le type</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="wizard-name">Téléphone</label>
                                        <input
                                            class="form-control" type="tel" name="phone" placeholder="+242 ..."
                                            id="wizard-name"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="wizard-email">Email*</label>
                                        <input
                                            class="form-control" type="email" name="email" placeholder="Email address"
                                            required="required" id="wizard-email"/>
                                    </div>

{{--                                    <div class="row g-2">--}}
{{--                                        <div class="col-6">--}}
{{--                                            <div class="mb-3">--}}
{{--                                                <label class="form-label"--}}
{{--                                                       for="wizard-password">--}}
{{--                                                    Password*</label>--}}
{{--                                                <input--}}
{{--                                                    class="form-control" type="password" name="password"--}}
{{--                                                    placeholder="Password" required="required" id="wizard-password"/>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-6">--}}
{{--                                            <div class="mb-3">--}}
{{--                                                <label class="form-label" for="wizard-confirm-password">--}}
{{--                                                    Confirm Password*--}}
{{--                                                </label>--}}
{{--                                                <input class="form-control" type="password"--}}
{{--                                                       name="confirmPassword"--}}
{{--                                                       placeholder="Confirm Password"--}}
{{--                                                       id="wizard-confirm-password"/>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" id="wizard-checkbox"--}}
{{--                                               type="checkbox" name="terms" required="required"--}}
{{--                                               checked="checked"/>--}}
{{--                                        <label class="form-check-label"--}}
{{--                                               for="wizard-checkbox">I--}}
{{--                                            accept the <a href="#!">terms </a>and <a href="#!">privacy--}}
{{--                                                policy</a></label>--}}
{{--                                    </div>--}}
                                </form>
                            </div>
                            <div class="tab-pane px-sm-3 px-md-5" id="bootstrap-wizard-tab2">
                                <form>
                                    <div class="mb-3">
                                        <div class="row" data-dropzone="data-dropzone"
                                             data-options='{"maxFiles":1,"data":[{"name":"avatar.png","size":"54kb","url":"../assets/img/team"}]}'>
                                            <div class="fallback"><input type="file" name="file"/></div>
                                            <div class="col-md-auto">
                                                <div class="dz-preview dz-preview-single">
                                                    <div
                                                        class="dz-preview-cover d-flex align-items-center justify-content-center mb-3 mb-md-0">
                                                        <div class="avatar avatar-4xl"><img class="rounded-circle"
                                                                                            src="...html" alt="..."
                                                                                            data-dz-thumbnail="data-dz-thumbnail"/>
                                                        </div>
                                                        <div class="dz-progress"><span class="dz-upload"
                                                                                       data-dz-uploadprogress=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="dz-message dropzone-area px-2 py-3"
                                                     data-dz-message="data-dz-message">
                                                    <div class="text-center"><img class="mr-2"
                                                                                  src="../assets/img/icons/cloud-upload.svg"
                                                                                  width="25" alt=""/>Upload your profile
                                                        picture<p class="mb-0 fs--1 text-400">Upload a 300x300 jpg image
                                                            with <br/>a maximum size of 400KB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3"><label class="form-label" for="gender">Gender</label><select
                                            class="form-select" id="gender" name="gender">
                                            <option value="">Select your gender ...</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select></div>
                                    <div class="mb-3"><label class="form-label" for="wizard-phone">Phone</label><input
                                            class="form-control" type="text" name="phone" placeholder="Phone"
                                            id="wizard-phone"/></div>
                                    <div class="mb-3"><label class="form-label" for="wizard-datepicker">Date of
                                            Birth</label><input class="form-control datetimepicker"
                                                                id="wizard-datepicker" type="text" placeholder="d/m/y"
                                                                data-options='{"dateFormat":"d/m/y"}'/></div>
                                    <div class="mb-3"><label class="form-label"
                                                             for="wizard-address">Address</label><textarea
                                            class="form-control" rows="4" id="wizard-address"></textarea></div>
                                </form>
                            </div>
                            <div class="tab-pane px-sm-3 px-md-5" id="bootstrap-wizard-tab3">
                                <form class="form-validation">
                                    <div class="row g-2">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="card-number">Card
                                                    Number</label><input class="form-control" id="card-number"
                                                                         placeholder="XXXX XXXX XXXX XXXX" type="text"/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="card-name">Name on
                                                    Card</label><input class="form-control" id="card-name"
                                                                       placeholder="John Doe" name="cardName"
                                                                       type="text"/></div>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <div class="mb-3"><label class="form-label" for="card-holder-country">Country</label><select
                                                    class="form-select" id="card-holder-country"
                                                    name="customSelectCountry">
                                                    <option value="">Select your country ...</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina
                                                    </option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean
                                                        Territory
                                                    </option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic
                                                    </option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                    </option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo, the Democratic Republic of the">Congo, the
                                                        Democratic Republic of the
                                                    </option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                    <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                        (Malvinas)
                                                    </option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="France Metropolitan">France Metropolitan</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern
                                                        Territories
                                                    </option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard and Mc Donald Islands">Heard and Mc Donald
                                                        Islands
                                                    </option>
                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                                        State)
                                                    </option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran (Islamic Republic of)">Iran (Islamic Republic
                                                        of)
                                                    </option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of">Korea,
                                                        Democratic People's Republic of
                                                    </option>
                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao, People's Democratic Republic">Lao, People's
                                                        Democratic Republic
                                                    </option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                    </option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">
                                                        Macedonia, The Former Yugoslav Republic of
                                                    </option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">Micronesia,
                                                        Federated States of
                                                    </option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands
                                                    </option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and
                                                        the Grenadines
                                                    </option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia (Slovak Republic)">Slovakia (Slovak
                                                        Republic)
                                                    </option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia and the South Sandwich Islands">South
                                                        Georgia and the South Sandwich Islands
                                                    </option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="St. Helena">St. Helena</option>
                                                    <option value="St. Pierre and Miquelon">St. Pierre and Miquelon
                                                    </option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan
                                                        Mayen Islands
                                                    </option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="Taiwan, Province of China">Taiwan, Province of
                                                        China
                                                    </option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United
                                                        Republic of
                                                    </option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                                    </option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States
                                                        Minor Outlying Islands
                                                    </option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Virgin Islands (British)">Virgin Islands (British)
                                                    </option>
                                                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                    <option value="Wallis and Futuna Islands">Wallis and Futuna
                                                        Islands
                                                    </option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Yugoslavia">Yugoslavia</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select></div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3"><label class="form-label" for="card-holder-zip-code">Zip
                                                    Code</label><input class="form-control" id="card-holder-zip-code"
                                                                       placeholder="1234" name="zipCode" type="text"/>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group mb-0"><label class="form-label" for="card-exp-date">Exp
                                                    Date</label><input class="form-control" id="card-exp-date"
                                                                       placeholder="15/2024" name="expDate"
                                                                       type="text"/></div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group mb-0"><label class="form-label"
                                                                                for="card-cvv">CVV</label><span
                                                    class="ml-1" data-toggle="tooltip" data-placement="top"
                                                    title="Card verification value"><span
                                                        class="fa fa-question-circle"></span></span><input
                                                    class="form-control" id="card-cvv" placeholder="123" name="cvv"
                                                    maxlength="3" pattern="[0-9]{3}" type="text"/></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane text-center px-sm-3 px-md-5" id="bootstrap-wizard-tab4">
                                <div class="wizard-lottie-wrapper">
                                    <div class="lottie wizard-lottie mx-auto my-3"
                                         data-options='{"path":"../assets/img/animated-icons/celebration.json"}'></div>
                                </div>
                                <h4 class="mb-1">Your account is all set!</h4>
                                <p>Now you can access to your account</p><a class="btn btn-primary px-5 my-3"
                                                                            href="wizard.html">Start Over</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="px-sm-3 px-md-5">
                            <ul class="pager wizard list-inline mb-0">
                                <li class="previous">
                                    <button class="btn btn-link pl-0" type="button"><span
                                            class="fas fa-chevron-left mr-2" data-fa-transform="shrink-3"></span>Prev
                                    </button>
                                </li>
                                <li class="next"><a class="btn btn-primary px-5 px-sm-6" href="#!">Next<span
                                            class="fas fa-chevron-right ml-2" data-fa-transform="shrink-3"> </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px">
                    <div class="modal-content position-relative p-5">
                        <div class="d-flex align-items-center">
                            <div class="lottie mr-3"
                                 data-options='{"path":"../assets/img/animated-icons/warning-light.json"}'></div>
                            <div class="flex-1">
                                <button class="btn btn-link text-danger position-absolute top-0 right-0 mt-2 mr-2"
                                        data-dismiss="modal"><span class="fas fa-times"></span></button>
                                <p class="mb-0">You don't have access to the link. Please try again.</p>
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
<script src="{{ asset('dist/vendors/anchorjs/anchor.min.js') }}"></script>
<script src="{{ asset('dist/vendors/is/is.min.js') }}"></script>
<script src="{{ asset('dist/assets/js/flatpickr.js') }}"></script>
<script src="{{ asset('dist/vendors/dropzone/dropzone.min.js') }}"></script>
<script src="{{ asset('dist/vendors/lottie/lottie.min.js') }}"></script>
<script src="{{ asset('dist/vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('dist/vendors/lodash/lodash.min.js') }}"></script>
<script src="../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
<script src="{{ asset('dist/vendors/list.js/list.min.js') }}"></script>
<script src="{{ asset('dist/assets/js/theme.js') }}"></script>
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">
</body>
</html>


{{--    <form>--}}
{{--        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">--}}
{{--            --}}{{--            Présentation de la page--}}
{{--            <div class="text-center lg:w-2/3 lg:mx-auto w-full py-">--}}
{{--                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium	 text-black font-mono">--}}
{{--                    Formulaire de création d'une école en ligne.--}}
{{--                </h1>--}}
{{--                <p class=" mb-8 font-normal">--}}
{{--                    Il est obligatoire de remplir toutes les informations demandées.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="hidden sm:block">--}}
{{--                <div class="py-8">--}}
{{--                    <div class="border-t border-gray-200"></div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            --}}{{--            information de base renseigner l'identité de votre écolex    --}}
{{--            <div class="md:grid md:grid-cols-3 md:gap-6 ">--}}
{{--                --}}{{--                gauche--}}
{{--                <div class="md:col-span-1">--}}
{{--                    <div class="px-4 sm:px-0">--}}
{{--                        <h3 class="title-font sm:text-3xl text-2xl mb-4 font-medium	 text-black font-mono">--}}
{{--                            Informations générales sur l'école--}}
{{--                        </h3>--}}
{{--                        <p class="mt-1 text-sm text-gray-600">--}}
{{--                            Les informations renseigner ici seront visibles sur la page de votre école.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                --}}{{--                droite--}}
{{--                <div class="mt-5 md:mt-0 md:col-span-2">--}}
{{--                    <div class="shadow overflow-hidden sm:rounded-md">--}}
{{--                        <div class="px-4 py-5 bg-white sm:p-6">--}}
{{--                            <div class="grid grid-cols-6 gap-6">--}}
{{--                                --}}{{--                                nom de la structure--}}
{{--                                <div class="col-span-6 sm:col-span-4">--}}
{{--                                    <label--}}
{{--                                        class="block font-medium text-sm text-gray-700"--}}
{{--                                        for="nom"><span>Nom de la structure</span>--}}
{{--                                    </label>--}}
{{--                                    <input class="form-input rounded-md shadow-sm mt-1 block w-full" id="nom"--}}
{{--                                           type="text" autocomplete="nom">--}}
{{--                                    <div class="mt-2" style="display: none;">--}}
{{--                                        <p class="text-sm text-red-600">--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                --}}{{--                               taille de la structure--}}
{{--                                <div class="col-span-6 sm:col-span-4">--}}
{{--                                    <select--}}
{{--                                        name="level"--}}
{{--                                        id="level"--}}
{{--                                        class="border p-2 rounded w-full w-full">--}}
{{--                                        <option value="0">Taille de la structure</option>--}}
{{--                                        <option value="1">200-300</option>--}}
{{--                                        <option value="1">300-400</option>--}}
{{--                                        <option value="1">500-600</option>--}}
{{--                                        <option value="1">600-700</option>--}}
{{--                                    </select>--}}
{{--                                    <div class="mt-2" style="display: none;">--}}
{{--                                        <p class="text-sm text-red-600">--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-span-6 sm:col-span-4">--}}
{{--                                    <label--}}
{{--                                        class="block font-medium text-sm text-gray-700">--}}
{{--                                        <span>Logo de la structure</span>--}}
{{--                                    </label>--}}
{{--                                    <div class="mt-2 h-16 w-16">--}}
{{--                                        <img class="w-full" src="https://ui-avatars.com/api/?name=benaja"--}}
{{--                                             alt="">--}}
{{--                                    </div>--}}

{{--                                    <button type="button"--}}
{{--                                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2">--}}
{{--                                        Selectionner une image--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}{{--                        bordure du bas--}}
{{--                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="hidden sm:block">--}}
{{--                <div class="py-8">--}}
{{--                    <div class="border-t border-gray-200"></div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            --}}{{--            information de base renseigner l'identité de votre écolex    --}}
{{--            <div class="md:grid md:grid-cols-3 md:gap-6 ">--}}
{{--                --}}{{--                gauche--}}
{{--                <div class="md:col-span-1">--}}
{{--                    <div class="px-4 sm:px-0">--}}
{{--                        <h3 class="title-font sm:text-3xl text-2xl mb-4 font-medium	 text-black font-mono">--}}
{{--                            Informations supplémentaire--}}
{{--                        </h3>--}}
{{--                        <p class="mt-1 text-sm text-gray-600">--}}
{{--                            Les informations renseignées ici serviront à la gestion et la prise en charge de l'administration de la structure.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                --}}{{--                droite--}}
{{--                <div class="mt-5 md:mt-0 md:col-span-2">--}}
{{--                    <div class="shadow overflow-hidden sm:rounded-md">--}}
{{--                        <div class="px-4 py-5 min-h-56 bg-white sm:p-6">--}}
{{--                            <div class="grid grid-cols-6 gap-6">--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}{{--                        bordure du bas--}}
{{--                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="hidden sm:block">--}}
{{--                <div class="py-8">--}}
{{--                    <div class="border-t border-gray-200"></div>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--    </form>--}}
{{--    <div class="intro-y box py-10 sm:py-20 mt-5">--}}
{{--        <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20">--}}
{{--            <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">--}}
{{--                <button class="w-10 h-10 rounded-full button text-white bg-theme-1">1</button>--}}
{{--                <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Create New Account</div>--}}
{{--            </div>--}}
{{--            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">--}}
{{--                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200 dark:bg-dark-1">2</button>--}}
{{--                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Setup Your Profile</div>--}}
{{--            </div>--}}
{{--            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">--}}
{{--                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200 dark:bg-dark-1">3</button>--}}
{{--                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Setup Your Business Details</div>--}}
{{--            </div>--}}
{{--            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">--}}
{{--                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200 dark:bg-dark-1">4</button>--}}
{{--                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Setup Billing Account</div>--}}
{{--            </div>--}}
{{--            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">--}}
{{--                <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200 dark:bg-dark-1">5</button>--}}
{{--                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Finalize your purchase</div>--}}
{{--            </div>--}}
{{--            <div class="wizard__line hidden lg:block w-2/3 bg-gray-200 dark:bg-dark-1 absolute mt-5"></div>--}}
{{--        </div>--}}
{{--        <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">--}}
{{--            <div class="font-medium text-base">Profile Settings</div>--}}
{{--            <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">--}}
{{--                <div class="intro-y col-span-12 sm:col-span-6">--}}
{{--                    <div class="mb-2">From</div>--}}
{{--                    <input type="text" class="input w-full border flex-1" placeholder="example@gmail.com">--}}
{{--                </div>--}}
{{--                <div class="intro-y col-span-12 sm:col-span-6">--}}
{{--                    <div class="mb-2">To</div>--}}
{{--                    <input type="text" class="input w-full border flex-1" placeholder="example@gmail.com">--}}
{{--                </div>--}}
{{--                <div class="intro-y col-span-12 sm:col-span-6">--}}
{{--                    <div class="mb-2">Subject</div>--}}
{{--                    <input type="text" class="input w-full border flex-1" placeholder="Important Meeting">--}}
{{--                </div>--}}
{{--                <div class="intro-y col-span-12 sm:col-span-6">--}}
{{--                    <div class="mb-2">Has the Words</div>--}}
{{--                    <input type="text" class="input w-full border flex-1" placeholder="Job, Work, Documentation">--}}
{{--                </div>--}}
{{--                <div class="intro-y col-span-12 sm:col-span-6">--}}
{{--                    <div class="mb-2">Doesn't Have</div>--}}
{{--                    <input type="text" class="input w-full border flex-1" placeholder="Job, Work, Documentation">--}}
{{--                </div>--}}
{{--                <div class="intro-y col-span-12 sm:col-span-6">--}}
{{--                    <div class="mb-2">Size</div>--}}
{{--                    <select class="input w-full border flex-1">--}}
{{--                        <option>10</option>--}}
{{--                        <option>25</option>--}}
{{--                        <option>35</option>--}}
{{--                        <option>50</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">--}}
{{--                    <button class="button w-24 justify-center block bg-gray-200 text-gray-600 dark:bg-dark-1 dark:text-gray-300">Previous</button>--}}
{{--                    <button class="button w-24 justify-center block bg-theme-1 text-white ml-2">Next</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
