<?php
// Démarre la session pour utiliser les sessions
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>MSCC2024 - Mediterranean Smart Cities Conference</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


    <!--====== Bootstrap css ======-->
    <!-- Replace local Bootstrap CSS with CDN link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="../assets/css/flaticon.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="../assets/css/LineIcons.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="../assets/css/animate.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="../assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="../assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/hakathForm.css">

    <!--====== Font Awesome css ======-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <header class="header-area">

        <!--  -->
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
                            <div class="navbar-collapse sub-menu-bar collapse" id="navbarTwo">
                                <div class="menu">
                                    <ul class="navbar-nav m-auto" id="">
                                        <li class="nav-item">
                                            <a class="page-scroll" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="index.html">About</a>
                                        </li>
                                        <li class="nav-item" id="topics">
                                            <a class="page-scroll" href="index.html">Topics</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="index.html">CFP</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="index.html">Speakers</a>
                                        </li>
                                        <li class="nav-item" id="program">
                                            <a class="page-scroll" href="index.html">Program</a>
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
                            </div>
                        </nav>
                        <!-- navbar -->

                    </div> <!-- row -->
                </div>
            </div> <!-- container -->
        </div>

        <!--  -->

    </header>
    <div class="con">
        <!-- Affiche le message de succès (si présent dans la session) -->
        <?php if (isset($_SESSION['success_message'])) : ?>
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
        <h2>SMART CITY HACKATHON</h2>
        <h2>Project Submission Template</h2>
        <form action="submit_project.php" method="post" id="projectForm">
            <div class="form-group">
                <label for="ProjectTitle">Project Title</label>
                <input required type="text" class="form-control" id="ProjectTitle" name="ProjectTitle" placeholder="Enter your project title...">
            </div>
            <div class="form-group">
                <label for="TeamName">Team Name</label>
                <input required type="text" class="form-control" id="TeamName" name="TeamName" placeholder="Give a name to your team...">
            </div>

            <div class="form-group">
                <label for="TeamMember">Team Member (Full Name)</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="TeamMember" name="TeamMember" placeholder="Add you members">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary" onclick="addTeamMember()">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Team Members:</label>
                <ul id="team-members"></ul>
                <input required type="hidden" id="TeamMembers" name="TeamMembers" value="">
            </div>
            <div class="form-group">
                <label for="ExecutiveSummary">Executive Summary
                    <span class="info-icon" title="Provide a concise summary of your project, highlighting the problem addressed, your innovative solution, and key outcomes."></span>

                </label>
                <textarea class="form-control" id="ExecutiveSummary" name="ExecutiveSummary" rows="5" required required></textarea>
            </div>
            <div class="form-group">
                <label for="ProblemStatement">
                    Problem Statement
                    <span class="info-icon" title="Reiterate the specific smart city challenge you aimed to solve. Include any new insights or developments since your initial proposal."></span>
                </label>
                <textarea class="form-control" id="ProblemStatement" name="ProblemStatement" rows="5" required></textarea>
            </div>


            <div class="form-group">
                <label for="Objectives">Objectives (as per initial proposal)
                    <span class="info-icon" title="Outline the objectives you set at the beginning of the hackathon. Have these objectives been achieved, and if not, what progress has been made?"></span>

                </label>
                <textarea class="form-control" id="Objectives" name="Objectives" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="SolutionImplemented">Solution Implemented
                    <span class="info-icon" title="Detail the solution you implemented during the hackathon. Highlight the key features and functionalities of your project."></span>

                </label>
                <textarea class="form-control" id="SolutionImplemented" name="SolutionImplemented" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="Methodology">Methodology (as per initial proposal)
                    <span class="info-icon" title="Compare the planned methodology from your proposal with what was actually implemented. Describe any adjustments made during the hackathon."></span>

                </label>
                <textarea class="form-control" id="Methodology" name="Methodology" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="Outcomes">Outcomes (as per initial proposal)
                    <span class="info-icon" title="Report on the actual outcomes of your project compared to what you expected to achieve. Include any unexpected results or challenges faced."></span>

                </label>
                <textarea class="form-control" id="Outcomes" name="Outcomes" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="Challenges">Challenges (as per initial proposal)
                    <span class="info-icon" title="Reflect on the challenges you anticipated and outline how you addressed them during the hackathon."></span>

                </label>
                <textarea class="form-control" id="Challenges" name="Challenges" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="Collaboration">Collaboration
                    <span class="info-icon" title="Describe any collaborations or community engagement that took place during the development of your project. How did you involve local authorities, residents, or other stakeholders?"></span>

                </label>
                <textarea class="form-control" id="Collaboration" name="Collaboration" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="Sustainability">Sustainability
                    <span class="info-icon" title="Discuss how your project contributes to the long-term sustainability of the city. Consider economic, environmental, and social sustainability."></span>

                </label>
                <textarea class="form-control" id="Sustainability" name="Sustainability" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="ResourcesUtilized">Resources Utilized
                    <span class="info-icon" title="List the resources you utilized during the hackathon, including hardware, software, datasets, and any other materials."></span>

                </label>
                <textarea class="form-control" id="ResourcesUtilized" name="ResourcesUtilized" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="Timeline">Timeline (as per initial proposal)
                    <span class="info-icon" title="Evaluate your adherence to the proposed timeline. Highlight any deviations and the reasons behind them."></span>

                </label>
                <textarea class="form-control" id="Timeline" name="Timeline" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="Prototype">Demo/Prototype
                    <span class="info-icon" title="Include a demo or prototype of your project. Provide access to any online platforms or repositories where judges can interact with your solution."></span>

                </label>
                <textarea class="form-control" id="Prototype" name="Prototype" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="TeamSkills">Team Skills
                    <span class="info-icon" title="Reiterate the skills and expertise of your team members that were instrumental in the development of your project."></span>

                </label>
                <textarea class="form-control" id="TeamSkills" name="TeamSkills" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="Conclusion">Conclusion
                    <span class="info-icon" title="Summarize the key achievements of your project and its potential impact on creating smarter and more sustainable cities."></span>

                </label>
                <textarea class="form-control" id="Conclusion" name="Conclusion" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="NextSteps">Next Steps
                    <span class="info-icon" title="Outline your plans for further development and implementation beyond the hackathon."></span>

                </label>
                <textarea class="form-control" id="NextSteps" name="NextSteps" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="UserEmail">Your Email</label>
                <input required type="email" class="form-control" id="UserEmail" name="UserEmail" placeholder="write your email (format example@,,,,,.com)">
            </div>
            <div class="form-group">
                <label for="UserEmail">Your telephone number</label>
                <input type="tel" id="telephone" name="telephone" class="form-control" pattern="[0-9]{10}" placeholder="format: 0600000000" required>

            </div>
            <button type="submit" class="btn btn-submit btn-block">Submit</button>
        </form>
    </div>






    <hr>
    <section id="footer" class="footer-area bg_cover" style="background-image: url(../assets/images/footer.jpg)">
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
                            <p class="text">Copyright © - MSCC </p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- container -->
    </section>
    <!-- <script src="../Codes/Script.js"></script> -->
    <!-- <script src="../Codes/Comittes.js"></script> -->
    <!-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbarToggle = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');

            navbarToggle.addEventListener('click', function() {
                navbarCollapse.classList.toggle('show');
            });

        });
    </script> -->

    <script>
        function addTeamMember() {
            var teamMemberInput = document.getElementById('TeamMember');
            var teamMember = teamMemberInput.value.trim();

            if (teamMember !== '') {
                if (teamMember !== 'Remove') {
                    var teamMembersList = document.getElementById('team-members');
                    var listItem = document.createElement('li');
                    listItem.classList.add('team-member-item');

                    var textNode = document.createTextNode(teamMember);
                    listItem.appendChild(textNode);

                    var removeButton = document.createElement('button');
                    removeButton.appendChild(document.createTextNode('Remove'));
                    removeButton.classList.add('remove-btn');
                    removeButton.onclick = function() {
                        listItem.remove();
                    };
                    listItem.appendChild(removeButton);

                    teamMembersList.appendChild(listItem);

                    // Ajout du membre à une variable pour l'envoyer lors de la soumission du formulaire
                    var hiddenInput = document.getElementById('TeamMembers');
                    var currentMembers = hiddenInput.value.split(',');
                    currentMembers.push(teamMember);
                    hiddenInput.value = currentMembers.join(',');

                    teamMemberInput.value = '';
                }
            }
        }
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
</body>

</html>