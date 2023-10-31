<!DOCTYPE html>
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
                    ?>
                    <div class="collapse navbar-collapse" id="ftco-nav">&emsp;
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100008094072993" target="_blank"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
                            <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="destination.php" class="nav-link">Tour Packages</a></li>
                            <!--<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>-->
                            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

                        </ul>
                    </div>
                    <?php
                } else {
//                    true
                    ?>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
                            <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="destination.php" class="nav-link">Tour Packages</a></li>
                            <!--<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>-->
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

        <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg'); width: 100%; height: 10%;" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                    <div class="col-md-9 ftco-animate pb-5 text-center">
                        <h1 class="mb-3 bread">About Us</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section services-section bg-light">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
                        <br><br>
                        <h3 class="mb-4">Our Vision</h3>
                        <p>To be the best brand in tourism industry and the hospitality sector in Sri Lanka</p>
                        <br>
                        <h3 class="mb-4">Our Mission</h3>
                        <p>To give the best hospitality service to our clients. Understanding their needs and wants we don't want to just satisfy our clients, we want to make our clients delight and we want to give unforgettable memories in Sri Lanka to our clients.</p>
                        <br>
                        <p><a href="destination.php" class="btn btn-primary py-3 px-4">Search Tour Packages</a></p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block">
                                    <div class="icon"><span class="flaticon-paragliding"></span></div>
                                    <div class="media-body">
                                        <h3 class="heading mb-3">Activities</h3>
                                        <p>Book fun, fresh and exciting daytime and evening activities in and around the city</p>
                                    </div>
                                </div>      
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block">
                                    <div class="icon"><span class="flaticon-route"></span></div>
                                    <div class="media-body">
                                        <h3 class="heading mb-3">Travel Arrangements</h3>
                                        <p>Events tailor-made to suit the needs of your group, from accommodation and transfer to dinners and entertainment.</p>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block">
                                    <div class="icon"><span class="flaticon-tour-guide"></span></div>
                                    <div class="media-body">
                                        <h3 class="heading mb-3">Private Guide</h3>
                                        <p>With almost a decade of experience planning events in MLanka, you’re in safe hands with MLanka Tours</p>
                                    </div>
                                </div>      
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block">
                                    <div class="icon"><span class="flaticon-map"></span></div>
                                    <div class="media-body">
                                        <h3 class="heading mb-3">Location Manager</h3>
                                        <p>Dates, times, number of participants, budget… We work around your needs and ideas for create the event you want.</p>
                                    </div>
                                </div>      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-counter img" id="section-counter">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-6 d-flex">
                        <div class="img d-flex align-self-stretch" style="background-image:url(images/about.jpg);"></div>
                    </div>
                    <div class="col-md-6 pl-md-5 py-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h2 class="mb-4">It's time to start your adventure</h2>
                                <p>Welcome to MLanka Tours and thank you for visiting our website. We specialise in organising corporate events and team building activities in MLanka. From airport transfers and group accommodation to group activities and private dinners, MLanka Tours will make your experience seamless and unforgettable. We also organise bespoke holidays and private events, with a wide variety of activities available to suit every group and budget.


                                </p>
                            </div>
                        </div>
                        <!--                        <div class="row">
                                                    <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                                                        <div class="block-18 text-center mb-4">
                                                            <div class="text">
                                                                <strong class="number" data-number="300">0</strong>
                                                                <span>Successful Tours</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                                                        <div class="block-18 text-center mb-4">
                                                            <div class="text">
                                                                <strong class="number" data-number="24000">0</strong>
                                                                <span>Happy Tourist</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                                                        <div class="block-18 text-center mb-4">
                                                            <div class="text">
                                                                <strong class="number" data-number="200">0</strong>
                                                                <span>Place Explored</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_3.jpg);">
            <div class="container">
                <div class="row justify-content-center pb-4">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <h2 class="mb-4">Another Aspect</h2>
                    </div>
                </div>
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel ftco-owl">
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <p class="mb-4">Our goal and first priority at "4 wate" is to make safety for every journey. By being proactive in improving our crew through training and employing the safest drivers on the road, we adopted a safety first culture together as a team.</p>
                                        <div class="d-flex align-items-center">
                                            <a href="https://www.facebook.com/4-%E0%B7%80%E0%B6%A7%E0%B7%9A-921893808151957/" target="new"><div class="user-img" style="background-image: url(images/mlwate.jpg)"></div></a>
                                            <div class="pl-3">
                                                <a href="https://www.facebook.com/4-%E0%B7%80%E0%B6%A7%E0%B7%9A-921893808151957/" target="new"><p class="name">4 Wate Tour Agency</p></a>
                                                <!--<span class="position">Marketing Manager</span>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <p class="mb-4">"4 Wate Spices" is committed to provide pure organic Ceylon spices for the Consumers to enjoy a healthy life. Ceylon spices have special significant all over the world. We are driving our effort to introduce value added spices, special.</p>
                                        <div class="d-flex align-items-center">
                                            <a href="https://www.facebook.com/4-%E0%B7%80%E0%B6%A7%E0%B7%9A-Spices-113108860471762/?ref=br_rs" target="new"><div class="user-img" style="background-image: url(images/mlspice.jpg)"></div></a>
                                            <div class="pl-3">
                                                <a href="https://www.facebook.com/4-%E0%B7%80%E0%B6%A7%E0%B7%9A-Spices-113108860471762/?ref=br_rs" target="new"><p class="name">4 Wate Spices</p></a>
                                                <!--<span class="position">Marketing Manager</span>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <p class="mb-4">MLanka Travel (pvt) Ltd is happy to invite you on an unforgettable holiday in Sri Lanka, one of the most ancient and captivating countries countries in the world. If you are and avid traveller with a person for unique countries, breathtaking landscapes and palm fringed beaches, Sri Lanka holidays offer all this and more.</p>
                                        <div class="d-flex align-items-center">
                                            <a href="https://www.facebook.com/profile.php?id=100008094072993" target="new"><div class="user-img" style="background-image: url(images/ml.jpg)"></div></a>
                                            <div class="pl-3">
                                                <a href="https://www.facebook.com/profile.php?id=100008094072993" target="new"><p class="name">M Lanka Travels</p></a>
                                                <!--<span class="position">Marketing Manager</span>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



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