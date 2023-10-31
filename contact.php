<?php
session_start();
?>
<!DOCTYPE html>
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
            .map-container-4{
                overflow: visible;
                /*padding-bottom:56.25%;*/
                position:relative;
                height:0;
            }
            .map-container-3 iframe{
                left:0;
                top:0;
                height:100%;
                width:100%;
                position: absolute;
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
                            <!--<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>-->
                            <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>

                        </ul>
                    </div>
                    <?php
                } else {
//                    true
                    ?>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="destination.php" class="nav-link">Tour Packages</a></li>
                            <!--<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>-->
                            <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
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

        <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                    <div class="col-md-9 ftco-animate pb-5 text-center">
                        <h1 class="mb-3 bread">Contact Us</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i class="ion-ios-arrow-forward"></i></span></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-no-pb contact-section">
            <div class="container">
                <div class="row d-flex contact-info">
                    <div class="col-md-3 d-flex">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-map-signs"></span>
                            </div>
                            <h3 class="mb-2">Address</h3>
                            <p>27/4 Lumbini Avenue Mount Laviniya, Colombo - Sri Lanka</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-phone2"></span>
                            </div>
                            <h3 class="mb-2">Contact Number</h3>
                            <p>Hotline: +94 77 47 47 676</p>
                            <p>Mobile:  +94 76 04 81 175</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-paper-plane"></span>
                            </div>
                            <h3 class="mb-2">Email Address</h3>
                            <p>tours@mlankatravel.xyz</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-globe"></span>
                            </div>
                            <h3 class="mb-2">Website</h3>
                            <p><a href="#">mlankatravel.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section contact-section">
            <div class="container">
                <div class="row block-9">
                    <div class="col-md-6 order-md-last d-flex">
                        <form action="#" class="bg-light p-5 contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>

                    </div>

                    <div class="col-md-6 d-flex">
                        <!--                                                <div id="map" class="bg-white">
                                                                            
                                                                            
                                                                        </div>-->

                        <div id="map-container-google-3" class="z-depth-1-half map-container-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.543660688084!2d79.87161981409507!3d6.825218721477359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b27fadc1ee7%3A0x7e43e570b67680c9!2s27%20Lumbini%20Ave%2C%20Dehiwala-Mount%20Lavinia!5e0!3m2!1sen!2slk!4v1599072162219!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </section>

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