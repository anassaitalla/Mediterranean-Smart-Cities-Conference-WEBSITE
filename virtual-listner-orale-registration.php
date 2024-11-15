<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>
        MSCC2024 - Conférence méditerranéenne sur les villes intelligentes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Flaticon css ======-->
    <!-- <link rel="stylesheet" href="assets/css/flaticon.css"> -->

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Animate css ======-->
    <!-- Removed -->
    <!-- <link rel="stylesheet" href="assets/css/animate.css"> -->

    <!--====== Slick css ======-->
    <!-- Removed -->
    <!-- <link rel="stylesheet" href="assets/css/slick.css"> -->

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area navbar-two sticky">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg">

                            <div class="d-flex align-items-center">
                                <a class="navbar-brand d-flex align-items-stretch" href="index.html">
                                    <img src="assets/images/logo.png" alt="Logo" id="logo">
                                </a>

                                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse sub-menu-bar collapse" id="navbarTwo" style="">
                                <div class="menu">
                                    <ul class="navbar-nav m-auto" id="">
                                        <li class="nav-item">
                                            <a class="page-scroll" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#aboutlink">About</a>
                                        </li>
                                        <li class="nav-item" id="topics">
                                            <a class="page-scroll" href="#topicslink">Topics</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#call-for-papers">CFP</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#keynote-speakers">Speakers</a>
                                        </li>
                                        <li class="nav-item" id="program">
                                            <a class="page-scroll" href="#program">Program</a>
                                        </li>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="commitee.html">Committees</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="exibition.html">Exhibition</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="hackaton.html">Hackathon</a>
                                        </li>
                                        <li class="lieuPhone nav-item d-block d-md-none">
                                            <div class="text-center" style="font-size: 20px;"><b>Venue</b></div>
                                            <a class="page-scroll" href="index.html">Conference Venue</a>
                                            <a class="page-scroll" href="accommodation.html">Accommodation</a>
                                            <a class="page-scroll" href="visa.php">Visa</a>
                                        </li>
                                        <li class="lieuPC nav-item d-none d-md-block">
                                            <div class="dropdown">
                                                <a class="page-scroll dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="index.html">Venue</a>
                                                <ul class="dropdown-menu" style="left: -60px;background-color: #EDEDED;" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" style="padding: 7px 10px; font-size: medium;" href="index.html">Conference Venue</a></li>
                                                    <li><a class="dropdown-item" style="padding: 7px 10px; font-size: medium;" href="accommodation.html">Accommodation</a></li>
                                                    <li><a class="dropdown-item" style="padding: 7px 10px; font-size: medium;" href="visa.php">Visa</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item" id="register">
                                            <a class="main-btn main-btn-2" href="registration.html" target="_blank">Registration</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>


                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn main-btn-2" href="registration.html" target="_blank">Registration</a>
                                <div class="flags d-flex justify-content-center">

                                </div>
                            </div>
                        </nav>
                        <!-- navbar -->

                    </div> <!-- row -->
                </div>
            </div> <!-- container -->
        </div>


    </header>

    <div class="container" id="" style="margin-top: 150px!important;">
        <?php

        if (isset($_SESSION['success_message'])) : ?>
            <div class="alert alert-success" id="successMessage">
                <?php echo $_SESSION['success_message']; ?>
            </div>
            <script>
                setTimeout(function() {
                    var successMessage = document.getElementById('successMessage');
                    successMessage.style.display = 'none';
                }, 5000); // Masque le message après 5 secondes
            </script>
            <?php
            // Efface le message de la session une fois affiché
            unset($_SESSION['success_message']);
            ?>
        <?php endif; ?>
        <?php if (isset($_SESSION['error_message'])) : ?>
            <div class="alert alert-danger" id="errorMessage">
                <?php echo $_SESSION['error_message']; ?>
            </div>
            <script>
                setTimeout(function() {
                    var errorMessage = document.getElementById('errorMessage');
                    errorMessage.style.display = 'none';
                }, 5000); // Masque le message après 5 secondes
            </script>
            <?php
            // Efface le message de la session une fois affiché
            unset($_SESSION['error_message']);
            ?>
        <?php endif; ?>
        <div class="">
            <h1 class="text-center mb-4 col-12">Registration</h1>
            <form style="border: 2px solid black;border-radius: 10px;padding: 20px;" action="registration.php" method="post">
                <div class="form-check" style="padding: 20px;text-align: center; ">
                    <legend>Please choose your registration type</legend>
                    <input class="form-check-input" type="radio" name="rd" id="rd1" checked>
                    <label class="form-check-label" for="rd1" style="margin-right: 30px;">
                        In-person Author
                    </label>

                    <input class="form-check-input" type="radio" name="rd" id="rd2">
                    <label class="form-check-label" for="rd2" style="margin-right: 30px;">
                        Virtual Author
                    </label>

                    <input class="form-check-input" type="radio" name="rd" id="rd3">
                    <label class="form-check-label" for="rd3">
                        Non-author
                    </label>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="prefixe">Prefix</label>
                        <select name="prefixe" id="prefixe" class="form-control">
                            <option value="prof dr.">Prof DR.</option>
                            <option value="dr.">DR.</option>
                            <option value="msc.">MSC.</option>
                            <option value="md.">MD.</option>
                            <option value="mrs.">MRS.</option>
                            <option value="ms.">Ms.</option>
                            <option value="mr.">MR.</option>
                            <option value="rev.">Rev.</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nom Complet">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6" id="articleTitleBlock">
                        <label for="articleTiltle">Article title</label>
                        <input type="text" class="form-control" id="articleTiltle" name="articleTiltle" placeholder="Article">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="mail">Email</label>
                        <input type="email" class="form-control" id="mail" name="mail" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Téléphone" required>
                    </div>
                    <div class="form-group col-md-6" id="passportBlock">
                        <label for="passport">Passport</label>
                        <input type="text" class="form-control" id="passport" name="passport" placeholder="Passport">
                        <small id="emailHelp" class="form-text text-muted">0 of 12 max characters.</small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control" id="Address" name="Address" placeholder="Address" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ville">City</label>
                        <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="pays">Country</label>
                        <select id="pays" name="pays" class="form-control">
                            <option selected>Select your Country</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
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
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
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
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
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
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
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
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
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
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                </div>
                <table>
                    <tr>
                        <td class="w-50">
                            <div class="form-row" id="inscriptionTypeBlock">
                                <div class="form-group w-100 pr-3">
                                    <label for="typeInscription">Registration Type </label>
                                    <select id="typeInscription" class="form-control w-200" name="typeInscription">
                                        <option selected>IEEE Member</option>
                                        <option>Non-member</option>
                                        <option>Student IEEE Member</option>
                                        <option>Student Non-member </option>
                                        <option>Industry Professional</option>

                                    </select>
                                </div>
                            </div>
                        </td class="w-50">
                        <td rowspan="2" class="d-none d-md-table-cell">
                            <h1 style="font-size: 33px;">Payment(for bank transfer)</h1>
                            <ul>
                                <li><b>- Bank : Banque Populaire</b></li>
                                <li><b>- Holder : ASS MOROCCAN ASS OF ELECTRICA</b></li>
                                <li><b>- RIB : 164 720 2121454879610003 75</b></li>
                                <li><b>- Code SWIFT : BCPOMAMC</b></li>
                                <li><b>- IBAN : MA64 - 164720212145487961000375</b></li>
                            </ul>
                            <hr>
                            <p>Please send a scan copy of payment receipt to :</p>
                            <p> <a href="mailto:abendahman@uae.ac.ma"><b> abendahman@uae.ac.ma</b></a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-row" id="extraPaperBlock">
                                <div class="form-group w-100 pr-3">
                                    <label for="FraisSup">Additional Fee for Extra Paper: 60,00 € </label>
                                    <select id="FraisSup" class="form-control w-200" name="FraisSup">
                                        <option selected>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    <tr class="d-block d-md-none">
                        <td colspan="2">
                            <h1>Payment(for bank transfer)</h1>
                            <ul>
                                <li><b>- Bank : Banque Populaire</b></li>
                                <li><b>- Holder : ASS MOROCCAN ASS OF ELECTRICA</b></li>
                                <li><b>- RIB : 164 720 2121454879610003 75</b></li>
                                <li><b>- Code SWIFT : BCPOMAMC</b></li>
                                <li><b>- IBAN : MA64 - 164720212145487961000375</b></li>
                            </ul>
                            <hr>
                            <p><strong style="color: #ff0000; font-size:large;"> Please send a scan copy of payment receipt to : </strong></p>
                            <p> <a href="mailto:abendahman@uae.ac.ma"><b> abendahman@uae.ac.ma</b></a></p>
                        </td>
                    </tr>
                    </tr>

                </table>





                <br>
                <div class="text-center"><button type="submit" class="main-btn main-btn-2" style="    padding-right: 40px;
    padding-left: 40px;
    font-size: 25px;">Submit</button></div>

            </form>
        </div>
    </div>



    <hr>

    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer-area bg_cover" style="background-image: url(assets/images/footer.jpg)">
        <div class="footer-widget">
            <div class="container">
                <div class="widget pt-2 pb-2">
                    <h3 class="text-center text-light">The Mediterranean Smart Cities Conference</h3>
                    <h4 class="text-center "><a class="text-light" style="text-decoration: none;" href="mailto:info@MSCC.org"><i class="bi bi-envelope-fill"></i> - info@MSCC.org</a></h4>
                    <div class="justify-content-center d-flex ">
                        <a href="https://www.facebook.com/profile.php?id=100046027077304" target="_blank" class="text-light p-3 h5"><i class="bi bi-facebook"></i></a>
                        <a href="" target="_blank" class="text-light p-3 h5"><i class="bi bi-twitter"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=2120669447481" target="_blank" class="text-light p-3 h5"><i class="bi bi-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/in/bendahmane-ahmed-02ab1127/" target="_blank" class="text-light p-3 h5"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div> <!-- widget -->
            </div> <!-- container -->
        </div> <!-- footer widget -->

        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p class="text">Droits d'auteur © - MSCC </p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- container -->
    </section>


    <!--====== FOOTER PART ENDS ======-->
    <script>
        function showblocks(stringsArray) {
            document.getElementById('passportBlock').style.display = 'block';
            document.getElementById('articleTitleBlock').style.display = 'block';
            document.getElementById('extraPaperBlock').style.display = 'block';

        }

        document.getElementById('rd1').addEventListener('change', function() {
            if (this.checked) {
                showblocks()
            }
        });
        document.getElementById('rd2').addEventListener('change', function() {
            if (this.checked) {
                showblocks()
                // document.getElementById('extraPaperBlock').style.display = 'none';
                document.getElementById('passportBlock').style.display = 'none';


            }
        });
        document.getElementById('rd3').addEventListener('change', function() {
            if (this.checked) {
                showblocks()
                document.getElementById('articleTitleBlock').style.display = 'none';

            }
        });
    </script>


    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!-- removed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--<script src="assets/js/popper.min.js"></script> -->

    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!-- removed -->
    <!-- <script src="assets/js/slick.min.js"></script> -->

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== Countdown js ======-->
    <script src="assets/js/jquery.countdown.min.js"></script>

    <!--====== wow js ======-->
    <!-- remove -->
    <!-- <script src="assets/js/wow.min.js"></script> -->


    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>