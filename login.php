<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
?>

<html lang="en">
    <head>
        <title>Vacation - Free Bootstrap 4 Template by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">

        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">

        <link rel="stylesheet" href="css/aos.css">

        <link rel="stylesheet" href="css/ionicons.min.css">

        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">


        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
            .alert {
                padding: 20px;
                background-color: #f44336;
                color: white;
            }

            .closebtn {
                margin-left: 15px;
                color: white;
                font-weight: bold;
                float: right;
                font-size: 22px;
                line-height: 20px;
                cursor: pointer;
                transition: 0.3s;
            }

            .closebtn:hover {
                color: black;
            }
        </style>
    </head>
    <body>


        <!--Start nav-->
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a href="index.php"><img src="images/mlogo.jpg" width="140px" height="90px" style="margin-top: 6px; margin-bottom: 3px;" ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>

                <?php
                if (!isset($_SESSION['user_checked']) || $_SESSION["user_checked"] == "" || $_SESSION["user_checked"] == "false") {
//                    false
                    ?>
                    <div class="collapse navbar-collapse" id="ftco-nav">&emsp;
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100008094072993" target="_blank"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="destination.php" class="nav-link">Tour Packages</a></li>
                            <li class="nav-item active"><a href="login.php" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

                        </ul>
                    </div>
                    <?php
                } else {
//                    true
                    ?>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="destination.php" class="nav-link">Tour Packages</a></li>
                            <li class="nav-item active"><a href="login.php" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                            <li class="nav-item"><a href="home.php" class="nav-link">Admin</a></li>
                            <li class="nav-item cta"><a href="logout.php" class="nav-link">Log Out</a></li>
                        </ul>
                    </div>
                    <?php
                }
                ?>


            </div>
        </nav>
        <!-- END nav -->



        <div class="hero-wrap js-fullheight" style="background-image: url('images/beach.gif');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                    <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">

                        <div class="container">
                            <div class="login-box">
                                <div class="row">
                                    <div class="col-md-6 login-left">
                                        <h2 style="color: white">Login Here</h2>
                                        <form action="validation.php" method="POST">
                                            <div class="form-group">
                                                <label style="color: white">email</label>
                                                <input type="email" name="email" class="form-control" style="color: white" required />
                                            </div>
                                            <div class="form-group">
                                                <label style="color: white">Password</label>
                                                <input type="password" name="password" class="form-control" style="color: white" required />
                                            </div>
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </form>
                                        <?php
                                        if (isset($_SESSION['usernameorpasswordincorrect'])) {
                                            ?>
                                            <div class="alert">
                                                <span class="closebtn" onclick="this.parentElement.style.display = 'none';"></span>
                                                User Name or Password incorrect!
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>

                                    <div class="col-md-6 login-right">
                                        <h2 style="color: white">Regiter Here</h2>
                                        <form action="registration.php" method="POST">
                                            <div class="form-group">
                                                <label style="color: white">Username</label>
                                                <input type="text" name="username" class="form-control" style="color: white" required />
                                            </div>
                                            <div class="form-group">
                                                <label style="color: white">E-mail</label>
                                                <input type="email" name="email" class="form-control" style="color: white" required />
                                            </div>
                                            <div class="form-group">
                                                <label style="color: white">Password</label>
                                                <input type="password" name="password" class="form-control" style="color: white" required />
                                            </div>
                                            <button type="submit" class="btn btn-primary" >Register</button>
                                        </form>


                                        <?php
                                        if (isset($_SESSION['popupmsgalert'])) {
//                                           
                                            ?>
                                            <div class="alert">
                                                <span class="closebtn" onclick="this.parentElement.style.display = 'none';">&times;</span> 
                                                <strong>Sorry,</strong>  you can not create account!
                                            </div>
                                            <?php
                                        } else {
                                            
                                        }

                                        if (isset($_SESSION['alreadyregistered'])) {
//                                           
                                            ?>
                                            <div class="alert">
                                                <span class="closebtn" onclick="this.parentElement.style.display = 'none';">&times;</span> 
                                                <strong></strong>  already registered!
                                            </div>
                                            <?php
                                        }

                                        $pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && ($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' || $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache');
                                        if ($pageRefreshed) {
                                            unset($_SESSION['popupmsgalert']);
                                            unset($_SESSION['alreadyregistered']);
                                            unset($_SESSION['usernameorpasswordincorrect']);
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>











        <?php
        include 'footer.php';
        ?>



        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="js/google-map.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
