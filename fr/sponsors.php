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
    <title>La Conférence des Villes Intelligentes Méditerranéennes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!--====== Flaticon css ======-->
    <!-- <link rel="stylesheet" href="../assets/css/flaticon.css"> -->

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="../assets/css/LineIcons.css">

    <!--====== Animate css ======-->
    <!-- Removed -->
    <!-- <link rel="stylesheet" href="../assets/css/animate.css"> -->

    <!--====== Slick css ======-->
    <!-- Removed -->
    <!-- <link rel="stylesheet" href="../assets/css/slick.css"> -->

    <!--====== Default css ======-->
    <link rel="stylesheet" href="../assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- icon -->
    <link rel="icon" type="image/png" href="../Imgaes/logofavicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

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
                                    <img src="../assets/images/logo.png" alt="Logo" id="logo">
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
                                            <a class="page-scroll" href="index.html">Lieu de la conférence</a>
                                            <a class="page-scroll" href="accommodation.html">Accommodation</a>
                                            <a class="page-scroll" href="visa.php">Visa</a>
                                        </li>
                                        <li class="lieuPC nav-item d-none d-md-block">
                                            <div class="dropdown">
                                                <a class="page-scroll dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="index.html">Venue</a>
                                                <ul class="dropdown-menu" style="left: -60px;background-color: #EDEDED;" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item page-scroll" style="padding: 7px 10px; font-size: medium;" href="index.html">Lieu de la conférence</a></li>
                                                    <li><a class="dropdown-item" style="padding: 7px 10px; font-size: medium;" href=" accommodation.html">Accommodation</a></li>
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
            <h1 class="text-center mb-4 col-12">BECOME A SPONSOR.</h1>
            <form style="border: 2px solid black;border-radius: 10px;padding: 20px;" action="sponsor_submit.php" method="post">
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="involved">How do you want to be involved? *
                        </label>
                        <select name="involved" id="involved" class="form-control">
                            <option value="Sponsorship">Sponsorship</option>
                            <option value="SessionPartneship">SessionPartneship</option>
                            <option value="Exhibition">Exhibition</option>
                            <option value="Smart Cities Index">Smart Cities Index</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Salutation">Salutation *
                        </label>
                        <select name="Salutation" id="Salutation" class="form-control">
                            <option value="prof dr.">Prof DR.</option>
                            <option value="dr.">DR.</option>
                            <option value="mrs.">MRS.</option>
                            <option value="ms.">Ms.</option>
                            <option value="mr.">MR.</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fullName">Full Name *</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" required>

                    </div>
                    <div class="form-group col-md-6">
                        <label for="mail">Email *</label>
                        <input type="email" class="form-control" id="mail" name="mail" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone">Mobile Number *</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile Number" required>
                    </div>
                    <div class="form-group col-md-6" id="passportBlock">
                        <label for="jobTitle">Job Title *</label>
                        <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Job Title" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">0 of 12 max characters.</small> -->
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="companyName">Company Name *</label>
                        <input type="text" class="form-control" id="companyName" name="companyName" placeholder="company Name" required>
                    </div>
                    <div class="form-group col-md-6" id="passportBlock">
                        <label for="CompanyMainActivity">Company Main Activity *</label>
                        <input type="text" class="form-control" id="CompanyMainActivity" name="CompanyMainActivity" placeholder="Company Main Activity" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">0 of 12 max characters.</small> -->
                    </div>
                    <div class="form-group col-md-6">
                        <label for="question">Enter your question/comment here</label>
                        <textarea class="form-control" id="question" name="question" style="width: 200%;"></textarea>
                    </div>
                </div>
                <br>
                <div class="text-center"><button type="submit" class="main-btn main-btn-2" style="padding-right: 40px;
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







    <!--====== jquery js ======-->
    <script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>

    <!--====== Slick js ======-->
    <script src="../assets/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/scrolling-nav.js"></script>

    <!--====== Countdown js ======-->
    <script src="../assets/js/jquery.countdown.min.js"></script>

    <!--====== wow js ======-->
    <script src="../assets/js/wow.min.js"></script>


    <!--====== Main js ======-->
    <script src="../assets/js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>