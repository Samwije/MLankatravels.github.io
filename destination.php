<?php
session_start();

include './dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vacation - Free Bootstrap 4 Template by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            .checked {
                color: orange;
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
                            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                            <li class="nav-item active"><a href="destination.php" class="nav-link">Tour Packages</a></li>
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
                            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                            <li class="nav-item active"><a href="destination.php" class="nav-link">Tour Packages</a></li>
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

        <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                    <div class="col-md-9 ftco-animate pb-5 text-center">
                        <h1 class="mb-3 bread">Places to Travel</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center pb-4">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h2 class="mb-4">Best Place Destination</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 ftco-animate">
                        <div class="project-destination">
                            <a href="#" class="img" style="background-image: url(images/place-1.jpg);">
                                <div class="text">
                                    <h3>Pinnawala</h3>
                                    <span>8 Tours</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <div class="project-destination">
                            <a href="#" class="img" style="background-image: url(images/place-2.jpg);">
                                <div class="text">
                                    <h3>Colombo</h3>
                                    <span>2 Tours</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <div class="project-destination">
                            <a href="#" class="img" style="background-image: url(images/place-3.jpg);">
                                <div class="text">
                                    <h3>Kandy</h3>
                                    <span>5 Tours</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <div class="project-destination">
                            <a href="#" class="img" style="background-image: url(images/place-4.jpg);">
                                <div class="text">
                                    <h3>Nuwara-Eliya</h3>
                                    <span>5 Tours</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-no-pb ftco-no-pt">
            <div class="container">

            </div>
        </section>


        <section class="ftco-section ftco-no-pt">
            <div class="container">
                <div class="row justify-content-center pb-4">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h2 class="mb-4">Tour Destination</h2>
                    </div>
                </div>
                <h2 class="mb-4">WildLife Tours</h2>
                <div class="row">
                    <div class="col-md-4 ftco-animate">
                        <?php
                        $s = "select * from wildlife";
                        $result = mysqli_query($con, $s);
                        $numberofrow = mysqli_num_rows($result);
                        ?>
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/d_big5in6days.png);"></a>
                            <div class="text p-4">
                                <?php
                                if ($numberofrow == 1) {
                                    while ($ro = mysqli_fetch_array($result)) {
                                        $startfrom = $ro['startfrom'];
                                        ?>
                                        <span class="price">$<?php print $startfrom; ?>/person</span>

                                        <?php
                                    }
                                }
                                ?>
                                <span class="days">5 Nights 6 Days Tour</span>
                                <h3><a href="#">BIG 5 IN 6 DAYS</a></h3>
                                <?php
                                if ($numberofrow == 1) {
                                    $result = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <p class="location"><span class="ion-ios-map"></span>&emsp;Valid until&emsp;&emsp;<?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?>         </p>
                                        <?php
                                    }
                                }
                                ?>
                                <ul>
                                    <li><span class="flaticon-sun-umbrella"></span></li>
                                    <li><span class="flaticon-route"></span></li>
                                    <li><span class="flaticon-king-size"></span></li>
                                    <li><button type="button" data-toggle="modal" data-target="#wildlifebiginfivedays" class="btn btn-warning" style="background-color: #f9ab30">More Details</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <?php
                        $s = "select * from chasetojungle";
                        $result = mysqli_query($con, $s);
                        $numberofrow = mysqli_num_rows($result);
                        ?>
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/d_chaseintojungle.png);"></a>
                            <div class="text p-4">
                                <?php
                                if ($numberofrow == 1) {
                                    while ($ro = mysqli_fetch_array($result)) {
                                        $startfrom = $ro['startfrom'];
                                        ?>
                                        <span class="price">$<?php print $startfrom; ?>/person</span>

                                        <?php
                                    }
                                }
                                ?>
                                <span class="days">6 Nights 7 Days Tour</span>
                                <h3><a href="#">CHASE TO JUNGLE</a></h3>
                                <?php
                                if ($numberofrow == 1) {
                                    $result = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <p class="location"><span class="ion-ios-map"></span>&emsp;Valid until&emsp;&emsp;<?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?>         </p>
                                        <?php
                                    }
                                }
                                ?>
                                <ul>
                                    <li><span class="flaticon-sun-umbrella"></span></li>
                                    <li><span class="flaticon-route"></span></li>
                                    <li><span class="flaticon-king-size"></span></li>
                                    <li><button type="button" data-toggle="modal" data-target="#wildlifechasetojungle" class="btn btn-warning" style="background-color: #f9ab30">More Details</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <?php
                        $s = "select * from chasetojungle";
                        $result = mysqli_query($con, $s);
                        $numberofrow = mysqli_num_rows($result);
                        ?>
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/d_exploredeepjungle.png);"></a>
                            <div class="text p-4">
                                <?php
                                if ($numberofrow == 1) {
                                    while ($ro = mysqli_fetch_array($result)) {
                                        $startfrom = $ro['startfrom'];
                                        ?>
                                        <span class="price">$<?php print $startfrom; ?>/person</span>

                                        <?php
                                    }
                                }
                                ?>
                                <span class="days">4 Nights 5 Days Tour</span>
                                <h3><a href="#">EXPLORE DEEP JUNGLE</a></h3>
                                <?php
                                if ($numberofrow == 1) {
                                    $result = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <p class="location"><span class="ion-ios-map"></span>&emsp;Valid until&emsp;&emsp;<?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?>         </p>
                                        <?php
                                    }
                                }
                                ?>
                                <ul>
                                    <li><span class="flaticon-sun-umbrella"></span></li>
                                    <li><span class="flaticon-route"></span></li>
                                    <li><span class="flaticon-king-size"></span></li>
                                    <li><button type="button" data-toggle="modal" data-target="#wildlifeexploredeepjungle" class="btn btn-warning" style="background-color: #f9ab30">More Details</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="mb-4">Halal Tours</h2>
                <div class="row">
                    <div class="col-md-4 ftco-animate">
                        <?php
                        $s = "select * from mistyhils";
                        $result = mysqli_query($con, $s);
                        $numberofrow = mysqli_num_rows($result);
                        ?>
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/d_mistyhilsandsandybeach.png);"></a>
                            <div class="text p-4">
                                <?php
                                if ($numberofrow == 1) {
                                    while ($ro = mysqli_fetch_array($result)) {
                                        $startfrom = $ro['startfrom'];
                                        ?>
                                        <span class="price">$<?php print $startfrom; ?>/person</span>

                                        <?php
                                    }
                                }
                                ?>
                                <span class="days">4 Nights 5 Days Tour</span>
                                <h5><a href="#" ><p style="color: black;">MISTY HILLS & SANDY BEACHES</p></a></h5>
                                <?php
                                if ($numberofrow == 1) {
                                    $result = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <p class="location"><span class="ion-ios-map"></span>&emsp;Valid until&emsp;&emsp;<?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?>         </p>
                                        <?php
                                    }
                                }
                                ?>
                                <ul>
                                    <li><span class="flaticon-sun-umbrella"></span></li>
                                    <li><span class="flaticon-route"></span></li>
                                    <li><span class="flaticon-king-size"></span></li>
                                    <li><button type="button" data-toggle="modal" data-target="#halalmistyhils" class="btn btn-warning" style="background-color: #f9ab30">More Details</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <?php
                        $s = "select * from familytour";
                        $result = mysqli_query($con, $s);
                        $numberofrow = mysqli_num_rows($result);
                        ?>
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/d_familytour.png);"></a>
                            <div class="text p-4">
                                <?php
                                if ($numberofrow == 1) {
                                    while ($ro = mysqli_fetch_array($result)) {
                                        $startfrom = $ro['startfrom'];
                                        ?>
                                        <span class="price">$<?php print $startfrom; ?>/person</span>

                                        <?php
                                    }
                                }
                                ?>
                                <span class="days">6 Nights 7 Days Tour</span>
                                <h3><a href="#">FAMILY TOUR</a></h3>
                                <?php
                                if ($numberofrow == 1) {
                                    $result = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <p class="location"><span class="ion-ios-map"></span>&emsp;Valid until&emsp;&emsp;<?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?>         </p>
                                        <?php
                                    }
                                }
                                ?>
                                <ul>
                                    <li><span class="flaticon-sun-umbrella"></span></li>
                                    <li><span class="flaticon-route"></span></li>
                                    <li><span class="flaticon-king-size"></span></li>
                                    <li><button type="button" data-toggle="modal" data-target="#halalfamilytour" class="btn btn-warning" style="background-color: #f9ab30">More Details</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <?php
                        $s = "select * from teacounty";
                        $result = mysqli_query($con, $s);
                        $numberofrow = mysqli_num_rows($result);
                        ?>
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/d_teacounty.png);"></a>
                            <div class="text p-4">
                                <?php
                                if ($numberofrow == 1) {
                                    while ($ro = mysqli_fetch_array($result)) {
                                        $startfrom = $ro['startfrom'];
                                        ?>
                                        <span class="price">$<?php print $startfrom; ?>/person</span>

                                        <?php
                                    }
                                }
                                ?>
                                <span class="days">7 Nights 8 Days Tour</span>
                                <h3><a href="#">TEA COUNTY</a></h3>
                                <?php
                                if ($numberofrow == 1) {
                                    $result = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <p class="location"><span class="ion-ios-map"></span>&emsp;Valid until&emsp;&emsp;<?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?>         </p>
                                        <?php
                                    }
                                }
                                ?>
                                <ul>
                                    <li><span class="flaticon-sun-umbrella"></span></li>
                                    <li><span class="flaticon-route"></span></li>
                                    <li><span class="flaticon-king-size"></span></li>
                                    <li><button type="button" data-toggle="modal" data-target="#halalteacounty" class="btn btn-warning" style="background-color: #f9ab30">More Details</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="mb-4">Honeymoon Tours</h2>
                <div class="row">
                    <div class="col-md-4 ftco-animate">
                        <?php
                        $s = "select * from romanticholiday";
                        $result = mysqli_query($con, $s);
                        $numberofrow = mysqli_num_rows($result);
                        ?>
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/d_romanticholiday.png);"></a>
                            <div class="text p-4">
                                <?php
                                if ($numberofrow == 1) {
                                    while ($ro = mysqli_fetch_array($result)) {
                                        $startfrom = $ro['startfrom'];
                                        ?>
                                        <span class="price">$<?php print $startfrom; ?>/person</span>

                                        <?php
                                    }
                                }
                                ?>
                                <span class="days">4 Nights 5 Days Tour</span>
                                <h3><a href="#">ROMANTIC HOLIDAY</a></h3>
                                <?php
                                if ($numberofrow == 1) {
                                    $result = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <p class="location"><span class="ion-ios-map"></span>&emsp;Valid until&emsp;&emsp;<?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?>         </p>
                                        <?php
                                    }
                                }
                                ?>
                                <ul>
                                    <li><span class="flaticon-sun-umbrella"></span></li>
                                    <li><span class="flaticon-route"></span></li>
                                    <li><span class="flaticon-king-size"></span></li>
                                    <li><button type="button" data-toggle="modal" data-target="#honeymoonromanticholiday" class="btn btn-warning" style="background-color: #f9ab30">More Details</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <?php
                        $s = "select * from romanticgateway";
                        $result = mysqli_query($con, $s);
                        $numberofrow = mysqli_num_rows($result);
                        ?>
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/d_romanticgateway.png);"></a>
                            <div class="text p-4">
                                <?php
                                if ($numberofrow == 1) {
                                    while ($ro = mysqli_fetch_array($result)) {
                                        $startfrom = $ro['startfrom'];
                                        ?>
                                        <span class="price">$<?php print $startfrom; ?>/person</span>

                                        <?php
                                    }
                                }
                                ?>
                                <span class="days">5 Nights 6 Days Tour</span>
                                <h3><a href="#">ROMANTIC GETAWAY</a></h3>
                                <?php
                                if ($numberofrow == 1) {
                                    $result = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <p class="location"><span class="ion-ios-map"></span>&emsp;Valid until&emsp;&emsp;<?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?>         </p>
                                        <?php
                                    }
                                }
                                ?>
                                <ul>
                                    <li><span class="flaticon-sun-umbrella"></span></li>
                                    <li><span class="flaticon-route"></span></li>
                                    <li><span class="flaticon-king-size"></span></li>
                                    <li><button type="button" data-toggle="modal" data-target="#honeymoonromanticgateway" class="btn btn-warning" style="background-color: #f9ab30">More Details</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <?php
                        $s = "select * from feelthelove";
                        $result = mysqli_query($con, $s);
                        $numberofrow = mysqli_num_rows($result);
                        ?>
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/d_feelthelove.png);"></a>
                            <div class="text p-4">
                                <?php
                                if ($numberofrow == 1) {
                                    while ($ro = mysqli_fetch_array($result)) {
                                        $startfrom = $ro['startfrom'];
                                        ?>
                                        <span class="price">$<?php print $startfrom; ?>/person</span>

                                        <?php
                                    }
                                }
                                ?>
                                <span class="days">7 Nights 8 Days Tour</span>
                                <h3><a href="#">FEEL THE LOVE</a></h3>
                                <?php
                                if ($numberofrow == 1) {
                                    $result = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <p class="location"><span class="ion-ios-map"></span>&emsp;Valid until&emsp;&emsp;<?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?>         </p>
                                        <?php
                                    }
                                }
                                ?>
                                <ul>
                                    <li><span class="flaticon-sun-umbrella"></span></li>
                                    <li><span class="flaticon-route"></span></li>
                                    <li><span class="flaticon-king-size"></span></li>
                                    <li><button type="button" data-toggle="modal" data-target="#honeymoonfeelthelove" class="btn btn-warning" style="background-color: #f9ab30">More Details</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="mb-4">Special Tours</h2>
                <div class="row">
                    <div class="col-md-4 ftco-animate">
                        <?php
                        $s = "select * from luxuryholiday";
                        $result = mysqli_query($con, $s);
                        $numberofrow = mysqli_num_rows($result);
                        ?>
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/d_luxuryholiday.png);"></a>
                            <div class="text p-4">
                                <?php
                                if ($numberofrow == 1) {
                                    while ($ro = mysqli_fetch_array($result)) {
                                        $startfrom = $ro['startfrom'];
                                        ?>
                                        <span class="price">$<?php print $startfrom; ?>/person</span>

                                        <?php
                                    }
                                }
                                ?>
                                <span class="days">4 Nights 5 Days Tour</span>
                                <h3><a href="#">LUXURY HOLIDAY</a></h3>
                                <?php
                                if ($numberofrow == 1) {
                                    $result = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <p class="location"><span class="ion-ios-map"></span>&emsp;Valid until&emsp;&emsp;<?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?>         </p>
                                        <?php
                                    }
                                }
                                ?>
                                <ul>
                                    <li><span class="flaticon-sun-umbrella"></span></li>
                                    <li><span class="flaticon-route"></span></li>
                                    <li><span class="flaticon-king-size"></span></li>
                                    <li><button type="button" data-toggle="modal" data-target="#specialluxuryholiday" class="btn btn-warning" style="background-color: #f9ab30">More Details</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <?php
                        $s = "select * from buddhisttour";
                        $result = mysqli_query($con, $s);
                        $numberofrow = mysqli_num_rows($result);
                        ?>
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/d_buddhisttour.png);"></a>
                            <div class="text p-4">
                                <?php
                                if ($numberofrow == 1) {
                                    while ($ro = mysqli_fetch_array($result)) {
                                        $startfrom = $ro['startfrom'];
                                        ?>
                                        <span class="price">$<?php print $startfrom; ?>/person</span>

                                        <?php
                                    }
                                }
                                ?>
                                <span class="days">7 Nights 8 Days Tour</span>
                                <h3><a href="#">BUDDHIST TOUR</a></h3>
                                <?php
                                if ($numberofrow == 1) {
                                    $result = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <p class="location"><span class="ion-ios-map"></span>&emsp;Valid until&emsp;&emsp;<?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?>         </p>
                                        <?php
                                    }
                                }
                                ?>
                                <ul>
                                    <li><span class="flaticon-sun-umbrella"></span></li>
                                    <li><span class="flaticon-route"></span></li>
                                    <li><span class="flaticon-king-size"></span></li>
                                    <li><button type="button" data-toggle="modal" data-target="#specialbuddhisttour" class="btn btn-warning" style="background-color: #f9ab30">More Details</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <?php
                        $s = "select * from casinonightlife";
                        $result = mysqli_query($con, $s);
                        $numberofrow = mysqli_num_rows($result);
                        ?>
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/d_casinonight.png);"></a>
                            <div class="text p-4">
                                <?php
                                if ($numberofrow == 1) {
                                    while ($ro = mysqli_fetch_array($result)) {
                                        $startfrom = $ro['startfrom'];
                                        ?>
                                        <span class="price">$<?php print $startfrom; ?>/person</span>

                                        <?php
                                    }
                                }
                                ?>
                                <span class="days">2 Nights 3 Days Tour</span>
                                <h3><a href="#">CASINO & NIGHTLIFE</a></h3>
                                <?php
                                if ($numberofrow == 1) {
                                    $result = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <p class="location"><span class="ion-ios-map"></span>&emsp;Valid until&emsp;&emsp;<?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?>         </p>
                                        <?php
                                    }
                                }
                                ?>
                                <ul>
                                    <li><span class="flaticon-sun-umbrella"></span></li>
                                    <li><span class="flaticon-route"></span></li>
                                    <li><span class="flaticon-king-size"></span></li>
                                    <li><button type="button" data-toggle="modal" data-target="#specialcasinonightlife" class="btn btn-warning" style="background-color: #f9ab30">More Details</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <?php
                        $s = "select * from allinclusivetour";
                        $result = mysqli_query($con, $s);
                        $numberofrow = mysqli_num_rows($result);
                        ?>
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/d_allinclusive.png);"></a>
                            <div class="text p-4">
                                <?php
                                if ($numberofrow == 1) {
                                    while ($ro = mysqli_fetch_array($result)) {
                                        $startfrom = $ro['startfrom'];
                                        ?>
                                        <span class="price">$<?php print $startfrom; ?>/person</span>

                                        <?php
                                    }
                                }
                                ?>
                                <span class="days">3 Nights 4 Days Tour</span>
                                <h3><a href="#">ALL INCLUSIVE TOUR</a></h3>
                                <?php
                                if ($numberofrow == 1) {
                                    $result = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <p class="location"><span class="ion-ios-map"></span>&emsp;Valid until&emsp;&emsp;<?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?>         </p>
                                        <?php
                                    }
                                }
                                ?>
                                <ul>
                                    <li><span class="flaticon-sun-umbrella"></span></li>
                                    <li><span class="flaticon-route"></span></li>
                                    <li><span class="flaticon-king-size"></span></li>
                                    <li><button type="button" data-toggle="modal" data-target="#speciallinclusivetour" class="btn btn-warning" style="background-color: #f9ab30">More Details</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--//////////////////////////////////////////////Halal Tours////////////////////////////////////////////////////////////////-->
        <!--Halal mistyhils start-->
        <form>
            <?php
            $s = "select * from mistyhils";
            $resmistyhils = mysqli_query($con, $s);
            $mhnumrow = mysqli_num_rows($resmistyhils);
            ?>
            <div class="modal fade text-body" id="halalmistyhils" tabindex="2" role="dialog" aria-labelledby="exampleModalLongTitlel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content container">
                        <div class="modal-header row justify-content-sm-start">
                            <div class="col-md-12">
                                <h5 class="modal-title" id="exampleModalLongTitle"><b>MISTY HILLS & SANDY BEACHES</b></h5>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">

                                <!--<div class="modal-body">-->

                                <label>04 Night and 05 Days</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            </div>

                            <div class="col-md-12">
                                <?php
                                if ($mhnumrow == 1) {
                                    while ($ro = mysqli_fetch_array($resmistyhils)) {
                                        $stfrmistyhils = $ro['startfrom'];
                                        ?>
                                        <label style="margin-left: 400px;">Starting From USD <?php print $stfrmistyhils; ?> Per Person</label>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <label style="margin-left: 400px;">Starting From USD 000 Per Person</label>
                                    <?php
                                }
                                ?>
                                <br>

                            </div>
                        </div>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">
                                <label for="email"><b>Day 1</b></label>&emsp;&emsp;&emsp;
                            </div>
                            <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                <label for="email">Airport (Arrival) – Pinnawala - Kandy<br>Our representative will warmly welcome & assist you upon arrival & drive you to Kandy.
                                    Check-in to the Hotel and Overnight stay at Hotel in Kandy.
                                    <br>Activities :&emsp;Peradeniya Botanical Garden, Kandy Lake, Gem Museum, <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Spice Garden</label>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">
                                <label for="email"><b>Day 2</b></label>&emsp;&emsp;&emsp;
                            </div>
                            <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                <label for="email">AKandy – Nuwaraeliya<br>After Breakfast check - out from the hotel and head to Nuwaraeliya the Little England.
                                    On the way witness Waterfalls and a tea factory where you can taste an authentic cup of Ceylon tea.
                                    Arrive in Nuwaraeliya and check – in to the hotel.Overnight stay at Hotel in Nuwaraeliya.
                                    <br>Activities :&emsp;Hakgala Botanical Garden, Ramboda Water Fall, Gregory Lake, <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Tea Factory, Tea Plantations</label>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">
                                <label for="email"><b>Day 3</b></label>&emsp;&emsp;&emsp;
                            </div>
                            <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                <label for="email">Nuwaraeliya – Kithulagala - Bentota<br>After Breakfast check - out from the hotel and head to Bentota.
                                    En-route visit the Kithulgala White Water Rafting. check - in to your hotel and relax..
                                    <br>Overnight stay at Hotel in Bentota.
                                    <br>Activities :&emsp;White Water Rafting</label>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">
                                <label for="email"><b>Day 4</b></label>&emsp;&emsp;&emsp;
                            </div>
                            <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                <label for="email">Bentota - Colombo<br>After Breakfast check - out from the hotel and head to Colombo. commence a guided city 
                                    tour of Bentota. Visit Madu River Safari & Turtle Hatchery.<br>Overnight stay at Hotel in Colombo.
                                    <br>Activities :&emsp;</label>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">
                                <label for="email"><b>Day 5</b></label>&emsp;&emsp;&emsp;
                            </div>
                            <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                <label for="email">Colombo – Airport (Departure)<br>Enjoy your breakfast. Catch your departure flight. Leave the island with memorable experiences.
                                    Overnight stay at Hotel in Colombo.
                                    <br>Activities :&emsp;</label>
                            </div>
                        </div>
                        <br>

                        <center>
                            <caption>
                                <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                            </caption>
                        </center>
                        <center>
                            <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                <tr>
                                    <th colspan="6"></th>

                                </tr>
                                <tr>
                                    <th>2 Passenger</th>
                                    <th>3 Passenger</th>
                                    <th>3 - 6 Passenger</th>
                                    <th>7 - 9 Passenger</th>
                                    <th>10 - 15 Passenger</th>
                                </tr>
                                <?php
                                if ($mhnumrow == 1) {
                                    $resmistyhils = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($resmistyhils)) {
                                        ?>
                                        <tr>
                                            <td>$<?php print $row['pax2x']; ?> Per Person</td>
                                            <td>$<?php print $row['pax3x']; ?> Per Person</td>
                                            <td>$<?php print $row['pax46x']; ?> Per Person</td>
                                            <td>$<?php print $row['pax79x']; ?> Per Person</td>
                                            <td>$<?php print $row['pax1015x']; ?> Per Person</td>
                                        </tr>

                                    </table><br>
                                    <span style="margin-left: 300px;">Rait Valid until <?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?></span>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td>$000 Per Person</td>
                                    <td>$000 Per Person</td>
                                    <td>$000 Per Person</td>
                                    <td>$000 Per Person</td>
                                    <td>$000 Per Person</td>
                                </tr>

                                </table><br>
                                <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>

                                <?php
                            }
                            ?>
                        </center>
                        <br>
                        <center>
                            <caption>
                                <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                            </caption>
                        </center>

                        <center>
                            <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                <tr>
                                    <th colspan="6"></th>

                                </tr>
                                <tr>
                                    <th>2 Passenger</th>
                                    <th>3 Passenger</th>
                                    <th>3 - 6 Passenger</th>
                                    <th>7 - 9 Passenger</th>
                                    <th>10 - 15 Passenger</th>
                                </tr>
                                <?php
                                if ($mhnumrow == 1) {
                                    $resmistyhils = mysqli_query($con, $s);
                                    while ($row = mysqli_fetch_array($resmistyhils)) {
                                        ?>
                                        <tr>
                                            <td>$<?php print $row['pax2y']; ?> Per Person</td>
                                            <td>$<?php print $row['pax3y']; ?> Per Person</td>
                                            <td>$<?php print $row['pax46y']; ?> Per Person</td>
                                            <td>$<?php print $row['pax79y']; ?> Per Person</td>
                                            <td>$<?php print $row['pax1015y']; ?> Per Person</td>
                                        </tr>

                                    </table><br>
                                    <span style="margin-left: 300px;">Rait Valid until <?php print $row['datey']; ?>.<?php print $row['monthy']; ?>.<?php print $row['yeary']; ?></span>
                                    <?php
                                }
                            } else {
                                ?>

                                <tr>
                                    <td>$000 Per Person</td>
                                    <td>$000 Per Person</td>
                                    <td>$000 Per Person</td>
                                    <td>$000 Per Person</td>
                                    <td>$000 Per Person</td>
                                </tr>

                                </table><br>
                                <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>
                                <?php
                            }
                            ?>
                        </center>
                        <br>

                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">
                                <label for="email"><b>Inclusions</b></label>&emsp;&emsp;
                            </div>
                            <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                <label for="email">3* or 4* Hotel Accommodation on Bed & Breakfast basis<br>
                                    04 Breakfast at the Hotels<br>
                                    Halal Meals<br>
                                    Transport AC Luxury Vehicle with English Speaking Chauffer<br>
                                    Sightseeing as per the Itinerary<br>
                                    Minimum 02 Person travel together<br>
                                    All Taxes</label>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">
                                <label for="email"><b>Exclusions</b></label>&emsp;&emsp;
                            </div>
                            <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                <label for="email">Lunch & Dinner<br>
                                    Casino Transfers<br>
                                    Airfare Charges<br>
                                    VISA<br>
                                    Bank Charges<br>
                                    All Entrance Charges</label>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </form>
        <!--Halal mistyhils end-->


        <!--Family Tours start-->


        <form action="savefamilytours.php" method="POST">
            <?php
            $s = "select * from familytour";
            $resfamilytours = mysqli_query($con, $s);
            $fmnumrow = mysqli_num_rows($resfamilytours);
            ?>
            <div class="modal fade text-body" id="halalfamilytour" tabindex="2" role="dialog" aria-labelledby="exampleModalLongTitlel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content container">
                        <div class="modal-header row justify-content-sm-start">
                            <div class="col-md-12">
                                <h5 class="modal-title" id="exampleModalLongTitle"><b>FAMILY TOURS</b></h5>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">

                                <!--<div class="modal-body">-->

                                <label>06 Night and 07 Days</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            </div>

                            <div class="col-md-12">
                                <?php
                                if ($fmnumrow == 1) {
                                    while ($ro = mysqli_fetch_array($resfamilytours)) {
                                        $stfrfamilytour = $ro['startfrom'];
                                        ?>
                                        <label style="margin-left: 400px;">Starting From USD <?php print $stfrfamilytour; ?> Per Person</label>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <label style="margin-left: 400px;">Starting From USD 000 Per Person</label>
                                    <?php
                                }
                                ?>
                                <br>

                            </div>
                        </div>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">
                                <label for="email"><b>Day 1</b></label>&emsp;&emsp;&emsp;
                            </div>
                            <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                <label for="email">Airport (Arrival) – Pinnawala - Sigiriya<br>Our representative will warmly welcome & assist you upon arrival & drive you to Sigiriya.
                                    <br>Check-in to the Hotel and Overnight stay at Hotel in Sigiriya.
                                    <br>Activities :&emsp;Pinnawala Elephant Orphanage</label>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">
                                <label for="email"><b>Day 2</b></label>&emsp;&emsp;&emsp;
                            </div>
                            <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                <label for="email">Sigiriya<br>Breakfast at the Hotel. Relax and Leisure at the hotel.
                                    <br>Overnight stay at Hotel in Sigiriya.
                                    <br>Activities :&emsp;Minneriya National Park</label>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">
                                <label for="email"><b>Day 3</b></label>&emsp;&emsp;&emsp;
                            </div>
                            <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                <label for="email">Sigiriya - Kandy<br>After Breakfast check - out from the hotel and head to Kandy.
                                    En-route visit the Mathale Spice Garden. check - in to your hotel and relax.
                                    <br>Overnight stay at Hotel in Kandy
                                    <br>Activities :&emsp;Spice Garden, Peradeniya Botanical Garden</label>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">
                                <label for="email"><b>Day 4</b></label>&emsp;&emsp;&emsp;
                            </div>
                            <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                <label for="email">Kandy – Nuwaraeliya<br>After Breakfast check - out from the hotel and head to Nuwaraeliya the Little England.
                                    On the way witness Waterfalls and a tea factory where you can taste an authentic cup of Ceylon tea. Arrive in Nuwaraeliya and check – in to the hotel.
                                    <br>Overnight stay at Hotel in Nuwaraeliya
                                    <br>Activities :&emsp;Hakgala Botanical Garden, Ramboda Water Fall, Gregory Lake,<br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; Tea Factory, Tea Plantations</label>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">
                                <label for="email"><b>Day 5</b></label>&emsp;&emsp;&emsp;
                            </div>
                            <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                <label for="email">Nuwaraeliya – Kithulagala - Bentota<br>After Breakfast check - out from the hotel and head to Bentota. En-route visit the Kithulgala White Water Rafting.
                                    check - in to your hotel and relax..
                                    <br>Overnight stay at Hotel in Bentota
                                    <br>Activities :&emsp;White Water Rafting</label>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">
                                <label for="email"><b>Day 6</b></label>&emsp;&emsp;&emsp;
                            </div>
                            <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                <label for="email">Bentota - Colombo<br>After Breakfast check - out from the hotel and head to Colombo.commence a guided city tour of Bentota.
                                    Visit Madu River Safari & Turtle Hatchery.
                                    <br>Overnight stay at Hotel in Colombo
                                    <br>Activities :&emsp;Madu River Safari , Turtle Hatchery</label>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-sm-start">
                            <div class="col-md-12">
                                <label for="email"><b>Day 7</b></label>&emsp;&emsp;&emsp;
                            </div>
                            <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                <label for="email">Colombo – Airport (Departure)<br>Enjoy your breakfast. Catch your departure flight.
                                    Leave the island with memorable experiences.

                                    </div>
                                    </div>
                                    <br>

                                    <center>
                                        <caption>
                                            <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                        </caption>
                                    </center>
                                    <center>
                                        <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                            <tr>
                                                <th colspan="6"></th>

                                            </tr>
                                            <tr>
                                                <th>2 Passenger</th>
                                                <th>3 Passenger</th>
                                                <th>4 - 6 Passenger</th>
                                                <th>7 - 9 Passenger</th>
                                                <th>10 - 15 Passenger</th>
                                            </tr>

                                            <?php
                                            if ($fmnumrow == 1) {
                                                $resfamilytours = mysqli_query($con, $s);
                                                while ($row = mysqli_fetch_array($resfamilytours)) {
                                                    ?>
                                                    <tr>
                                                        <td>$<?php print $row['pax2x']; ?> Per Person</td>
                                                        <td>$<?php print $row['pax3x']; ?> Per Person</td>
                                                        <td>$<?php print $row['pax46x']; ?> Per Person</td>
                                                        <td>$<?php print $row['pax79x']; ?> Per Person</td>
                                                        <td>$<?php print $row['pax1015x']; ?> Per Person</td>
                                                    </tr>
                                                </table><br>
                                                <span style="margin-left: 300px;">Rait Valid until <?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?></span>

                                                <?php
                                            }
                                        } else {
                                            ?>

                                            <tr>
                                                <td>$000 Per Person</td>
                                                <td>$000 Per Person</td>
                                                <td>$000 Per Person</td>
                                                <td>$000 Per Person</td>
                                                <td>$000 Per Person</td>
                                            </tr>
                                            </table><br>
                                            <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>

                                            <?php
                                        }
                                        ?>




                                    </center>
                                    <br>
                                    <center>
                                        <caption>
                                            <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                        </caption>
                                    </center>

                                    <center>
                                        <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                            <tr>
                                                <th colspan="6"></th>

                                            </tr>
                                            <tr>
                                                <th>2 Passenger</th>
                                                <th>3 Passenger</th>
                                                <th>4 - 6 Passenger</th>
                                                <th>7 - 9 Passenger</th>
                                                <th>10 - 15 Passenger</th>
                                            </tr>
                                            <?php
                                            if ($fmnumrow == 1) {
                                                $resfamilytours = mysqli_query($con, $s);
                                                while ($row = mysqli_fetch_array($resfamilytours)) {
                                                    ?>
                                                    <tr>
                                                        <td>$<?php print $row['pax2y']; ?> Per Person</td>
                                                        <td>$<?php print $row['pax3y']; ?> Per Person</td>
                                                        <td>$<?php print $row['pax46y']; ?> Per Person</td>
                                                        <td>$<?php print $row['pax79y']; ?> Per Person</td>
                                                        <td>$<?php print $row['pax1015y']; ?> Per Person</td>
                                                    </tr>

                                                </table><br>
                                                <span style="margin-left: 300px;">Rait Valid until <?php print $row['datey']; ?>.<?php print $row['monthy']; ?>.<?php print $row['yeary'] ?></span>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td>$000 Per Person</td>
                                                <td>$000 Per Person</td>
                                                <td>$000 Per Person</td>
                                                <td>$000 Per Person</td>
                                                <td>$000 Per Person</td>
                                            </tr>

                                            </table><br>
                                            <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>


                                            <?php
                                        }
                                        ?>
                                    </center>
                                    <br>

                                    <div class="row justify-content-sm-start">
                                        <div class="col-md-12">
                                            <label for="email"><b>Inclusions</b></label>&emsp;&emsp;
                                        </div>
                                        <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                            <label for="email">3* or 4* Hotel Accommodation on Bed & Breakfast basis<br>
                                                06 Breakfast at the Hotels<br>
                                                Halal Meals<br>
                                                Transport AC Luxury Vehicle with English Speaking Chauffer<br>
                                                Sightseeing as per the Itinerary<br>
                                                Minimum 02 Person travel together<br>
                                                All Taxes</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row justify-content-sm-start">
                                        <div class="col-md-12">
                                            <label for="email"><b>Exclusions</b></label>&emsp;&emsp;
                                        </div>
                                        <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                            <label for="email">Lunch & Dinner<br>
                                                Casino Transfers<br>
                                                Airfare Charges<br>
                                                VISA<br>
                                                Bank Charges<br>
                                                All Entrance Charges</label>
                                        </div>
                                    </div>
                                    <br>
                                    <!--</div>-->

                                    </div>
                                    </div>
                                    </div>
                                    </form>

                                    <!--Family Tours End-->

                                    <!--Tea county Tours start-->


                                    <form action="saveteacounty.php" method="POST">
                                        <?php
                                        $s = "select * from teacounty";
                                        $result = mysqli_query($con, $s);
                                        $numberofrow = mysqli_num_rows($result);
                                        ?>
                                        <div class="modal fade text-body" id="halalteacounty" tabindex="2" role="dialog" aria-labelledby="exampleModalLongTitlel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content container">
                                                    <div class="modal-header row justify-content-sm-start">
                                                        <div class="col-md-12">
                                                            <h5 class="modal-title" id="exampleModalLongTitle"><b>Tea County</b></h5>
                                                        </div>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="row justify-content-sm-start">
                                                        <div class="col-md-12">

                                                            <!--<div class="modal-body">-->

                                                            <label>07 Night and 08 Days</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                        </div>

                                                        <div class="col-md-12">
                                                            <?php
                                                            if ($numberofrow == 1) {
                                                                while ($ro = mysqli_fetch_array($result)) {
                                                                    $startfrom = $ro['startfrom'];
                                                                    ?>
                                                                    <label style="margin-left: 400px;">Starting From USD <?php print $startfrom; ?> Per Person</label>
                                                                    <?php
                                                                }
                                                            } else {
                                                                ?>
                                                                <label style="margin-left: 400px;">Starting From USD 000 Per Person</label>
                                                                <?php
                                                            }
                                                            ?>
                                                            <br>

                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-sm-start">
                                                        <div class="col-md-12">
                                                            <label for="email"><b>Day 1</b></label>&emsp;&emsp;&emsp;
                                                        </div>
                                                        <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                            <label for="email">Airport (Arrival) – Pinnawala - Kandy<br>Our representative will warmly welcome & assist you upon arrival & drive you to Kandy.
                                                                <br>Check-in to the Hotel
                                                                <br>Overnight stay at Hotel in Sigiriya
                                                                <br>Activities :&emsp;Peradeniya Botanical Garden, Kandy Lake, Gem Museum,
                                                                <br>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;Spice Garden</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row justify-content-sm-start">
                                                        <div class="col-md-12">
                                                            <label for="email"><b>Day 2</b></label>&emsp;&emsp;&emsp;
                                                        </div>
                                                        <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                            <label for="email">Kandy – Nuwaraeliya<br>After Breakfast check - out from the hotel and head to Nuwaraeliya the Little England.
                                                                On the way witness Waterfalls and a tea factory where you can taste an authentic cup of Ceylon tea.
                                                                Arrive in Nuwaraeliya and check – in to the hotel & Relax.
                                                                <br>Overnight stay at Hotel in Nuwaraeliya
                                                                <br>Activities :&emsp;Ramboda Water Fall, Tea Plantation, Tea Factory visit</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row justify-content-sm-start">
                                                        <div class="col-md-12">
                                                            <label for="email"><b>Day 3</b></label>&emsp;&emsp;&emsp;
                                                        </div>
                                                        <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                            <label for="email">Nuwaraeliya<br>Enjoy your breakfast and commence a guided city tour of Nuwaraeliya.
                                                                Visit Race course, Golf Course, Gregory Lake boat ride, Strawberry farm, Ambewela farm are the major attractions of the Little England.
                                                                In the evening return to your luxurious stay and relax.
                                                                <br>Overnight stay at Hotel in Nuwaraeliya
                                                                <br>Activities :&emsp;Hakkgala Botanical Garden, Gregory Lake, Ambewela Farm,
                                                                <br>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;Horton Plains</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row justify-content-sm-start">
                                                        <div class="col-md-12">
                                                            <label for="email"><b>Day 4</b></label>&emsp;&emsp;&emsp;
                                                        </div>
                                                        <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                            <label for="email">Nuwaraeliya<br>Breakfast at the Hotel. Relax and Leisure at the hotel
                                                                <br>Overnight stay at Hotel in Nuwaraeliya

                                                                </div>
                                                                </div>
                                                                <br>
                                                                <div class="row justify-content-sm-start">
                                                                    <div class="col-md-12">
                                                                        <label for="email"><b>Day 5</b></label>&emsp;&emsp;&emsp;
                                                                    </div>
                                                                    <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                        <label for="email">Nuwaraeliya - Yala<br>After Breakfast check - out from the hotel and leave to Yala.
                                                                            Arrive Yala and check in to your Luxurious stay. In the Evening a Jeep safari in Yala National Park 
                                                                            where you can have a great chance to go into the forest and witness Wildlife's.
                                                                            Sloth bear and Sri Lanka leopard are the rarest animals you will find in Yala.
                                                                            Return to your Luxurious stay and relax.
                                                                            <br>Overnight stay at Hotel in Yala
                                                                            <br>Activities :&emsp;Yala National Park</label>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row justify-content-sm-start">
                                                                    <div class="col-md-12">
                                                                        <label for="email"><b>Day 6</b></label>&emsp;&emsp;&emsp;
                                                                    </div>
                                                                    <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                        <label for="email">Yala – Galle - Bentota<br>After breakfast Check – out from the hotel and leave to Bentota via Galle.
                                                                            On the way visit Galle fort, Lighthouse, Dutch Museum, and Turtle Hatchery.
                                                                            Arrive in Bentota and check - in to your luxurious hotel. Relax and Leisure at the hotel.
                                                                            <br>Overnight stay at Hotel in Bentota
                                                                            <br>Activities :&emsp;Galle Fort, Dutch Museum, Turtle Hatchery</label>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row justify-content-sm-start">
                                                                    <div class="col-md-12">
                                                                        <label for="email"><b>Day 7</b></label>&emsp;&emsp;&emsp;
                                                                    </div>
                                                                    <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                        <label for="email">Bentota<br>Enjoy your breakfast and after commence a mangrove boat safari in Madu river.
                                                                            Relax the whole day on the sandy beach and options for Water Sports.
                                                                            <br>Overnight stay at Hotel in Bentota
                                                                            <br>Activities :&emsp;Madu River Safari, Water sports</label>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row justify-content-sm-start">
                                                                    <div class="col-md-12">
                                                                        <label for="email"><b>Day 8</b></label>&emsp;&emsp;&emsp;
                                                                    </div>
                                                                    <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                        <label for="email">Bentota – Airport (Departure)<br>Enjoy your breakfast.
                                                                            Catch your departure flight. Leave the island with memorable experiences.

                                                                            </div>
                                                                            </div>
                                                                            <br>

                                                                            <center>
                                                                                <caption>
                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                </caption>
                                                                            </center>
                                                                            <center>
                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                    <tr>
                                                                                        <th colspan="6"></th>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>2 Passenger</th>
                                                                                        <th>3 Passenger</th>
                                                                                        <th>4 - 6 Passenger</th>
                                                                                        <th>7 - 9 Passenger</th>
                                                                                        <th>10 - 15 Passenger</th>
                                                                                    </tr>

                                                                                    <?php
                                                                                    if ($numberofrow == 1) {
                                                                                        $result = mysqli_query($con, $s);
                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                            ?>
                                                                                            <tr>
                                                                                                <td>$<?php print $row['pax2x']; ?> Per Person</td>
                                                                                                <td>$<?php print $row['pax3x']; ?> Per Person</td>
                                                                                                <td>$<?php print $row['pax46x']; ?> Per Person</td>
                                                                                                <td>$<?php print $row['pax79x']; ?> Per Person</td>
                                                                                                <td>$<?php print $row['pax1015x']; ?> Per Person</td>
                                                                                            </tr>
                                                                                        </table><br>
                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?></span>

                                                                                        <?php
                                                                                    }
                                                                                } else {
                                                                                    ?>

                                                                                    <tr>
                                                                                        <td>$000 Per Person</td>
                                                                                        <td>$000 Per Person</td>
                                                                                        <td>$000 Per Person</td>
                                                                                        <td>$000 Per Person</td>
                                                                                        <td>$000 Per Person</td>
                                                                                    </tr>
                                                                                    </table><br>
                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>

                                                                                    <?php
                                                                                }
                                                                                ?>




                                                                            </center>
                                                                            <br>
                                                                            <center>
                                                                                <caption>
                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                </caption>
                                                                            </center>

                                                                            <center>
                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                    <tr>
                                                                                        <th colspan="6"></th>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>2 Passenger</th>
                                                                                        <th>3 Passenger</th>
                                                                                        <th>4 - 6 Passenger</th>
                                                                                        <th>7 - 9 Passenger</th>
                                                                                        <th>10 - 15 Passenger</th>
                                                                                    </tr>
                                                                                    <?php
                                                                                    if ($numberofrow == 1) {
                                                                                        $result = mysqli_query($con, $s);
                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                            ?>
                                                                                            <tr>
                                                                                                <td>$<?php print $row['pax2y']; ?> Per Person</td>
                                                                                                <td>$<?php print $row['pax3y']; ?> Per Person</td>
                                                                                                <td>$<?php print $row['pax46y']; ?> Per Person</td>
                                                                                                <td>$<?php print $row['pax79y']; ?> Per Person</td>
                                                                                                <td>$<?php print $row['pax1015y']; ?> Per Person</td>
                                                                                            </tr>

                                                                                        </table><br>
                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datey']; ?>.<?php print $row['monthy']; ?>.<?php print $row['yeary'] ?></span>
                                                                                        <?php
                                                                                    }
                                                                                } else {
                                                                                    ?>
                                                                                    <tr>
                                                                                        <td>$000 Per Person</td>
                                                                                        <td>$000 Per Person</td>
                                                                                        <td>$000 Per Person</td>
                                                                                        <td>$000 Per Person</td>
                                                                                        <td>$000 Per Person</td>
                                                                                    </tr>

                                                                                    </table><br>
                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>


                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                            </center>
                                                                            <br>

                                                                            <div class="row justify-content-sm-start">
                                                                                <div class="col-md-12">
                                                                                    <label for="email"><b>Inclusions</b></label>&emsp;&emsp;
                                                                                </div>
                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                    <label for="email">3* or 4* Hotel Accommodation on Bed & Breakfast basis<br>
                                                                                        07 Breakfast at the Hotels<br>
                                                                                        Halal Meals<br>
                                                                                        Transport AC Luxury Vehicle with English Speaking Chauffer<br>
                                                                                        Sightseeing as per the Itinerary<br>
                                                                                        Minimum 02 Person travel together<br>
                                                                                        All Taxes</label>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="row justify-content-sm-start">
                                                                                <div class="col-md-12">
                                                                                    <label for="email"><b>Exclusions</b></label>&emsp;&emsp;
                                                                                </div>
                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                    <label for="email">Lunch & Dinner<br>
                                                                                        Casino Transfers<br>
                                                                                        Airfare Charges<br>
                                                                                        VISA<br>
                                                                                        Bank Charges<br>
                                                                                        All Entrance Charges</label>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <!--</div>-->

                                                                            </div>
                                                                            </div>
                                                                            </div>
                                                                            </form>

                                                                            <!--Tea county Tours End-->


                                                                            <!--//////////////////////////////////////////////Halal Tours END////////////////////////////////////////////////////////////////-->


                                                                            <!--//////////////////////////////////////////////Wild Life Tours Start////////////////////////////////////////////////////////////////-->

                                                                            <!--BIG 5 IN 6 DAYS Tours start-->


                                                                            <form action="savewildlifetours.php" method="POST">
                                                                                <?php
                                                                                $s = "select * from wildlife";
                                                                                $result = mysqli_query($con, $s);
                                                                                $numberofrow = mysqli_num_rows($result);
                                                                                ?>
                                                                                <div class="modal fade text-body" id="wildlifebiginfivedays" tabindex="2" role="dialog" aria-labelledby="exampleModalLongTitlel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                        <div class="modal-content container">
                                                                                            <div class="modal-header row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <h5 class="modal-title" id="exampleModalLongTitle"><b>BIG 5 IN 6 DAYS</b></h5>
                                                                                                </div>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">

                                                                                                    <!--<div class="modal-body">-->

                                                                                                    <label>05 Night and 06 Days</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                </div>

                                                                                                <div class="col-md-12">
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        while ($ro = mysqli_fetch_array($result)) {
                                                                                                            $startfrom = $ro['startfrom'];
                                                                                                            ?>
                                                                                                            <label style="margin-left: 400px;">Starting From USD <?php print $startfrom; ?> Per Person</label>
                                                                                                            <?php
                                                                                                        }
                                                                                                    } else {
                                                                                                        ?>
                                                                                                        <label style="margin-left: 400px;">Starting From USD 000 Per Person</label>
                                                                                                        <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                    <br>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 1</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Airport (Arrival) – Bentota<br>Our representative will warmly welcome & assist you upon arrival & drive you to Bentota.
                                                                                                        <br>Check-in to the Hotel
                                                                                                        <br>Overnight stay at Hotel in Bentota
                                                                                                        <br>Activities :&emsp;Beach, Water sports, Madu River Boat Safari</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 2</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Bentota – Mirissa<br>Enjoy your breakfast and after commence a Whale Watching and other Sightseeing in Mirissa.
                                                                                                        <br>Overnight stay at Hotel in Mirissa
                                                                                                        <br>Activities :&emsp;Whale Watching Safari</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 3</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Mirissa - Yala<br>After Breakfast check - out from the hotel and head to Yala.
                                                                                                        <br>Overnight stay at Hotel in Yala
                                                                                                        <br>Activities :&emsp;Yala National Park Safari</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 4</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Yala – Udawalawe - Yala<br>Enjoy your breakfast and transfer to Udawalawe day Excursion.
                                                                                                        <br>Overnight stay at Hotel in Yala
                                                                                                        <br>Activities :&emsp;Udawalawe National park Safari</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 5</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Yala – Colombo<br>After Breakfast check - out from the hotel and head to Colombo.

                                                                                                        <br>Overnight stay at Hotel in Colombo </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>

                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 6</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Colombo – Airport (Departure)<br>Enjoy your breakfast.
                                                                                                        Catch your departure flight. Leave the island with memorable experiences.</label>

                                                                                                </div>
                                                                                            </div>
                                                                                            <br>

                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>
                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>2 Passenger</th>
                                                                                                        <th>3 Passenger</th>
                                                                                                        <th>4 - 6 Passenger</th>
                                                                                                        <th>7 - 9 Passenger</th>
                                                                                                        <th>10 - 15 Passenger</th>
                                                                                                    </tr>

                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['pax2x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax3x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax46x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax79x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax1015x']; ?> Per Person</td>
                                                                                                            </tr>
                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?></span>

                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>

                                                                                                    <tr>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                    </tr>
                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>

                                                                                                    <?php
                                                                                                }
                                                                                                ?>




                                                                                            </center>
                                                                                            <br>
                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>

                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>2 Passenger</th>
                                                                                                        <th>3 Passenger</th>
                                                                                                        <th>4 - 6 Passenger</th>
                                                                                                        <th>7 - 9 Passenger</th>
                                                                                                        <th>10 - 15 Passenger</th>
                                                                                                    </tr>
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['pax2y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax3y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax46y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax79y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax1015y']; ?> Per Person</td>
                                                                                                            </tr>

                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datey']; ?>.<?php print $row['monthy']; ?>.<?php print $row['yeary'] ?></span>
                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>
                                                                                                    <tr>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                    </tr>

                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>


                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                            </center>
                                                                                            <br>

                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Inclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">3* or 4* Hotel Accommodation on Bed & Breakfast basis<br>
                                                                                                        05 Breakfast at the Hotels<br>
                                                                                                        Halal Meals<br>
                                                                                                        Transport AC Luxury Vehicle with English/Tamil Speaking Chauffer<br>
                                                                                                        Sightseeing as per the Itinerary<br>
                                                                                                        Minimum 02 Person travel together<br>
                                                                                                        All Taxes</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Exclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">Lunch & Dinner<br>
                                                                                                        Casino Transfers<br>
                                                                                                        Airfare Charges<br>
                                                                                                        VISA<br>
                                                                                                        Bank Charges<br>
                                                                                                        All Entrance Charges</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <!--</div>-->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>

                                                                            <!--BIG 5 IN 6 DAYS Tours End-->


                                                                            <!--Chase To Jungle Tours start-->


                                                                            <form action="savechasetojungle.php" method="POST">
                                                                                <?php
                                                                                $s = "select * from chasetojungle";
                                                                                $result = mysqli_query($con, $s);
                                                                                $numberofrow = mysqli_num_rows($result);
                                                                                ?>
                                                                                <div class="modal fade text-body" id="wildlifechasetojungle" tabindex="2" role="dialog" aria-labelledby="exampleModalLongTitlel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                        <div class="modal-content container">
                                                                                            <div class="modal-header row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <h5 class="modal-title" id="exampleModalLongTitle"><b>CHASE TO JUNGLE</b></h5>
                                                                                                </div>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">

                                                                                                    <!--<div class="modal-body">-->

                                                                                                    <label>06 Night and 07 Days</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                </div>

                                                                                                <div class="col-md-12">
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        while ($ro = mysqli_fetch_array($result)) {
                                                                                                            $startfrom = $ro['startfrom'];
                                                                                                            ?>
                                                                                                            <label style="margin-left: 400px;">Starting From USD <?php print $startfrom; ?> Per Person</label>
                                                                                                            <?php
                                                                                                        }
                                                                                                    } else {
                                                                                                        ?>
                                                                                                        <label style="margin-left: 400px;">Starting From USD 000 Per Person</label>
                                                                                                        <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                    <br>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 1</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Airport (Arrival) – Colombo<br>Our representative will warmly welcome & assist you upon arrival & drive you to Colombo.
                                                                                                        <br>Check-in to the Hotel
                                                                                                        <br>Overnight stay at Hotel in Colombo</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 2</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Colombo – Pinnawala - Sigiriya<br>After Breakfast check - out from the hotel and head to Sigiriya.
                                                                                                        On the way visit the Pinnawala Elephant orphanage where you can take wonderful photographs with the largest mammal in Land.
                                                                                                        check - in to your luxurious hotel and relax.
                                                                                                        In the evening take a guided city tour of Sigiriya where you can visit Sigiriya Rock Fortress.
                                                                                                        Arrive in Sigiriya and check – in to the hotel & Relax.
                                                                                                        <br>Overnight stay at Hotel in Sigiriya
                                                                                                        <br>Activities :&emsp;Pinnawala Elephant Orphanage, Sigiriya Rock Fortress,
                                                                                                        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;Dhambulla Cave</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 3</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Sigiriya – Minneriya - Sigiriya<br>Enjoy your breakfast and Transfer to Minneriya National Park to begin your Wildlife experience.
                                                                                                        <br>Overnight stay at Hotel in Sigiriya
                                                                                                        <br>Activities :&emsp;Minneriya National Park Safari</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 4</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Sigiriya – Wilpattu - Sigiriya<br>Enjoy your breakfast and Transfer to Wilpattu National Park to begin your Wildlife experience.
                                                                                                        Enjoy a day in Wilpattu National Park tailored to suit your interests.
                                                                                                        Search for the elusive leopards and endangered sloth bears or enjoy a specialized birding trip - let us know your interests and we will tailor your activities to suit.
                                                                                                        Safaris of course include sundowners in a special location as the sun sets over the jungle.
                                                                                                        <br>Overnight stay at Hotel in Sigiriya
                                                                                                        <br>Activities :&emsp;Wilpattu National park Safari</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 5</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Sigiriya - Kandy<br>After Breakfast check - out from the hotel and head to Kandy. check - in to your luxurious hotel and relax.
                                                                                                        In the evening take a guided city tour of Kandy where you can visit Kandy Temple.

                                                                                                        <br>Overnight stay at Hotel in Kandy 
                                                                                                        <br>Activities :&emsp;Temple of Tooth, Cultural Show</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>

                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 6</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Kandy - Bentota<br>After breakfast Check – out from the hotel and leave to Bentota.
                                                                                                        Arrive in Bentota and check - in to your luxurious hotel.
                                                                                                        Relax and Leisure at the hotel.
                                                                                                        <br>Overnight stay at Hotel in Bentota</label>

                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 7</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Bentota – Airport (Departure)<br>Enjoy your breakfast.
                                                                                                        Catch your departure flight. Leave the island with memorable experiences.</label>

                                                                                                </div>
                                                                                            </div>
                                                                                            <br>

                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>
                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>2 Passenger</th>
                                                                                                        <th>3 Passenger</th>
                                                                                                        <th>4 - 6 Passenger</th>
                                                                                                        <th>7 - 9 Passenger</th>
                                                                                                        <th>10 - 15 Passenger</th>
                                                                                                    </tr>

                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['pax2x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax3x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax46x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax79x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax1015x']; ?> Per Person</td>
                                                                                                            </tr>
                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?></span>

                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>

                                                                                                    <tr>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                    </tr>
                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>

                                                                                                    <?php
                                                                                                }
                                                                                                ?>




                                                                                            </center>
                                                                                            <br>
                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>

                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>2 Passenger</th>
                                                                                                        <th>3 Passenger</th>
                                                                                                        <th>4 - 6 Passenger</th>
                                                                                                        <th>7 - 9 Passenger</th>
                                                                                                        <th>10 - 15 Passenger</th>
                                                                                                    </tr>
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['pax2y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax3y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax46y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax79y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax1015y']; ?> Per Person</td>
                                                                                                            </tr>

                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datey']; ?>.<?php print $row['monthy']; ?>.<?php print $row['yeary'] ?></span>
                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>
                                                                                                    <tr>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                    </tr>

                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>


                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                            </center>
                                                                                            <br>

                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Inclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">3* or 4* Hotel Accommodation on Bed & Breakfast basis<br>
                                                                                                        06 Breakfast at the Hotels<br>
                                                                                                        Transport AC Luxury Vehicle with English/Tamil Speaking Chauffer<br>
                                                                                                        Sightseeing as per the Itinerary<br>
                                                                                                        Minimum 02 Person travel together<br>
                                                                                                        All Taxes</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Exclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">Lunch & Dinner<br>
                                                                                                        Casino Transfers<br>
                                                                                                        Airfare Charges<br>
                                                                                                        VISA<br>
                                                                                                        Bank Charges<br>
                                                                                                        All Entrance Charges</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <!--</div>-->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>

                                                                            <!--Chase To Jungle Tours End-->

                                                                            <!--Explore Deep Jungle Tours start-->


                                                                            <form action="saveexploredeepjungle.php" method="POST">
                                                                                <?php
                                                                                $s = "select * from exploredeepjungle";
                                                                                $result = mysqli_query($con, $s);
                                                                                $numberofrow = mysqli_num_rows($result);
                                                                                ?>
                                                                                <div class="modal fade text-body" id="wildlifeexploredeepjungle" tabindex="2" role="dialog" aria-labelledby="exampleModalLongTitlel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                        <div class="modal-content container">
                                                                                            <div class="modal-header row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <h5 class="modal-title" id="exampleModalLongTitle"><b>EXPLORE DEEP JUNGLE</b></h5>
                                                                                                </div>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">

                                                                                                    <!--<div class="modal-body">-->

                                                                                                    <label>04 Night and 05 Days</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                </div>

                                                                                                <div class="col-md-12">
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        while ($ro = mysqli_fetch_array($result)) {
                                                                                                            $startfrom = $ro['startfrom'];
                                                                                                            ?>
                                                                                                            <label style="margin-left: 400px;">Starting From USD <?php print $startfrom; ?> Per Person</label>
                                                                                                            <?php
                                                                                                        }
                                                                                                    } else {
                                                                                                        ?>
                                                                                                        <label style="margin-left: 400px;">Starting From USD 000 Per Person</label>
                                                                                                        <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                    <br>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 1</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Airport (Arrival) – Udawalawe<br>Our representative will warmly welcome & assist you upon arrival & drive you to Udawalawe.
                                                                                                        <br>Check-in to the Hotel
                                                                                                        <br>Overnight stay at Hotel in Udawalawe</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 2</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Udawalawe<br>After Breakfast at the hotel and head to Udalawe National Park
                                                                                                        for the Jeep Safari where you can take wonderful photographs of the Wild Life and come back to the Udawalawa Hotel.
                                                                                                        <br>Overnight stay at Hotel in Udawalawe
                                                                                                        <br>Activities :&emsp;Udawalawe National Park</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 3</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Udawalawe - Yala<br>After Breakfast check - out from the hotel and head to Yala.
                                                                                                        En-route visit the Yala National Park for the Jeep Safari where you can take wonderful photographs of the Wild Life.
                                                                                                        check - in to your hotel and relax..
                                                                                                        <br>Overnight stay at Hotel in Yala
                                                                                                        <br>Activities :&emsp;Yala National Park Safari</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 4</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Yala – Bentota<br>After Breakfast check - out from the hotel and head to Bentota.
                                                                                                        Commence a guided city tour of Bentota. Visit Madu River Safari & Turtle Hatchery.
                                                                                                        In the evening return to your luxurious stay and relax.
                                                                                                        <br>Overnight stay at Hotel in Bentota
                                                                                                        <br>Activities :&emsp;Madu River Safari , Turtle Hatchery</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>


                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 5</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Bentota – Airport (Departure)<br>Enjoy your breakfast.
                                                                                                        Catch your departure flight. Leave the island with memorable experiences.</label>

                                                                                                </div>
                                                                                            </div>
                                                                                            <br>

                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>
                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>2 Passenger</th>
                                                                                                        <th>3 Passenger</th>
                                                                                                        <th>4 - 6 Passenger</th>
                                                                                                        <th>7 - 9 Passenger</th>
                                                                                                        <th>10 - 15 Passenger</th>
                                                                                                    </tr>

                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['pax2x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax3x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax46x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax79x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax1015x']; ?> Per Person</td>
                                                                                                            </tr>
                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?></span>

                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>

                                                                                                    <tr>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                    </tr>
                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>

                                                                                                    <?php
                                                                                                }
                                                                                                ?>




                                                                                            </center>
                                                                                            <br>
                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>

                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>2 Passenger</th>
                                                                                                        <th>3 Passenger</th>
                                                                                                        <th>4 - 6 Passenger</th>
                                                                                                        <th>7 - 9 Passenger</th>
                                                                                                        <th>10 - 15 Passenger</th>
                                                                                                    </tr>
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['pax2y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax3y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax46y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax79y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax1015y']; ?> Per Person</td>
                                                                                                            </tr>

                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datey']; ?>.<?php print $row['monthy']; ?>.<?php print $row['yeary'] ?></span>
                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>
                                                                                                    <tr>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                    </tr>

                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>


                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                            </center>
                                                                                            <br>

                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Inclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">3* or 4* Hotel Accommodation on Bed & Breakfast basis<br>
                                                                                                        04 Breakfast at the Hotels<br>
                                                                                                        Transport AC Luxury Vehicle with English/Tamil Speaking Chauffer<br>
                                                                                                        Sightseeing as per the Itinerary<br>
                                                                                                        Minimum 02 Person travel together<br>
                                                                                                        All Taxes</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Exclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">Lunch & Dinner<br>
                                                                                                        Casino Transfers<br>
                                                                                                        Airfare Charges<br>
                                                                                                        VISA<br>
                                                                                                        Bank Charges<br>
                                                                                                        All Entrance Charges</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <!--</div>-->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>

                                                                            <!--Explore Deep Jungle Tours End-->

                                                                            <!--//////////////////////////////////////////////Wild Life Tours End////////////////////////////////////////////////////////////////-->


                                                                            <!--//////////////////////////////////////////////Special Tours Start////////////////////////////////////////////////////////////////-->

                                                                            <!--Luxury Tours start-->


                                                                            <form action="saveluxuryholiday.php" method="POST">
                                                                                <?php
                                                                                $s = "select * from luxuryholiday";
                                                                                $result = mysqli_query($con, $s);
                                                                                $numberofrow = mysqli_num_rows($result);
                                                                                ?>
                                                                                <div class="modal fade text-body" id="specialluxuryholiday" tabindex="2" role="dialog" aria-labelledby="exampleModalLongTitlel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                        <div class="modal-content container">
                                                                                            <div class="modal-header row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <h5 class="modal-title" id="exampleModalLongTitle"><b>LUXURY HOLIDAY</b></h5>
                                                                                                </div>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">

                                                                                                    <!--<div class="modal-body">-->

                                                                                                    <label>04 Night and 05 Days</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                </div>

                                                                                                <div class="col-md-12">
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        while ($ro = mysqli_fetch_array($result)) {
                                                                                                            $startfrom = $ro['startfrom'];
                                                                                                            ?>
                                                                                                            <label style="margin-left: 400px;">Starting From USD <?php print $startfrom; ?> Per Person</label>
                                                                                                            <?php
                                                                                                        }
                                                                                                    } else {
                                                                                                        ?>
                                                                                                        <label style="margin-left: 400px;">Starting From USD 000 Per Person</label>
                                                                                                        <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                    <br>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 1</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Airport (Arrival) – Pinnawala - Kandy<br>Our representative will warmly welcome & assist you upon arrival & drive you to Kandy.
                                                                                                        <br>Check-in to the Hotel
                                                                                                        <br>Overnight stay at Hotel in Kandy
                                                                                                        <br>Activities :&emsp;Peradeniya Botanical Garden, Kandy Lake, Gem Museum,
                                                                                                        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Spice Garden</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 2</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Kandy – Nuwaraeliya<br>After Breakfast check - out from the hotel and head to Nuwaraeliya the Little England.
                                                                                                        On the way witness Waterfalls and a tea factory where you can taste an authentic cup of Ceylon tea.
                                                                                                        Arrive in Nuwaraeliya and check – in to the hotel.
                                                                                                        <br>Overnight stay at Hotel in Nuwaraeliya
                                                                                                        <br>Activities :&emsp;Hakgala Botanical Garden, Ramboda Water Fall, Hanuman Temple,
                                                                                                        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Seetha Amman Temple, Gregory Lake, Tea Factory, Tea Plantations</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 3</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Nuwaraeliya – Kithulagala - Bentota<br>After Breakfast check - out from the hotel and head to Bentota.
                                                                                                        En-route visit the Kithulgala White Water Rafting. check - in to your hotel and relax..
                                                                                                        <br>Overnight stay at Hotel in Bentota
                                                                                                        <br>Activities :&emsp;White Water Rafting</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 4</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Bentota - Colombo<br>After Breakfast check - out from the hotel and head to Colombo.
                                                                                                        Commence a guided city tour of Bentota. Visit Madu River Safari & Turtle Hatchery.
                                                                                                        <br>Overnight stay at Hotel in Colombo
                                                                                                        <br>Activities :&emsp;Madu River Safari , Turtle Hatchery</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>


                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 5</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Colombo – Airport (Departure)<br>Enjoy your breakfast.
                                                                                                        Catch your departure flight. Leave the island with memorable experiences.</label>

                                                                                                </div>
                                                                                            </div>
                                                                                            <br>

                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>
                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>2 Passenger</th>
                                                                                                        <th>3 Passenger</th>
                                                                                                        <th>4 - 6 Passenger</th>
                                                                                                        <th>7 - 9 Passenger</th>
                                                                                                        <th>10 - 15 Passenger</th>
                                                                                                    </tr>

                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['pax2x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax3x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax46x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax79x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax1015x']; ?> Per Person</td>
                                                                                                            </tr>
                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?></span>

                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>

                                                                                                    <tr>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                    </tr>
                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>

                                                                                                    <?php
                                                                                                }
                                                                                                ?>




                                                                                            </center>
                                                                                            <br>


                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Inclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">5* Luxury Hotel Accommodation on Bed & Breakfast basis<br>
                                                                                                        04 Breakfast at the Hotels<br>
                                                                                                        Transport AC Luxury Vehicle with English Speaking Chauffer<br>
                                                                                                        Sightseeing as per the Itinerary<br>
                                                                                                        Minimum 02 Person travel together<br>
                                                                                                        All Taxes</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Exclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">Lunch & Dinner<br>
                                                                                                        Casino Transfers<br>
                                                                                                        Airfare Charges<br>
                                                                                                        VISA<br>
                                                                                                        Bank Charges<br>
                                                                                                        All Entrance Charges</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <!--</div>-->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>

                                                                            <!--Luxury Tours End-->

                                                                            <!--Buddhist Tours start-->


                                                                            <form action="savebuddhisttour.php" method="POST">
                                                                                <?php
                                                                                $s = "select * from buddhisttour";
                                                                                $result = mysqli_query($con, $s);
                                                                                $numberofrow = mysqli_num_rows($result);
                                                                                ?>
                                                                                <div class="modal fade text-body" id="specialbuddhisttour" tabindex="2" role="dialog" aria-labelledby="exampleModalLongTitlel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                        <div class="modal-content container">
                                                                                            <div class="modal-header row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <h5 class="modal-title" id="exampleModalLongTitle"><b>BUDDHIST TOUR</b></h5>
                                                                                                </div>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">

                                                                                                    <!--<div class="modal-body">-->

                                                                                                    <label>07 Night and 08 Days</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                </div>

                                                                                                <div class="col-md-12">
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        while ($ro = mysqli_fetch_array($result)) {
                                                                                                            $startfrom = $ro['startfrom'];
                                                                                                            ?>
                                                                                                            <label style="margin-left: 400px;">Starting From USD <?php print $startfrom; ?> Per Person</label>
                                                                                                            <?php
                                                                                                        }
                                                                                                    } else {
                                                                                                        ?>
                                                                                                        <label style="margin-left: 400px;">Starting From USD 000 Per Person</label>
                                                                                                        <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                    <br>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 1</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Airport (Arrival) – Anuradhapura<br>Our representative will warmly welcome & assist you upon arrival & drive you to Anuradhapura.
                                                                                                        <br>Check-in to the Hotel
                                                                                                        <br>Overnight stay at Hotel in Anuradhapura</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 2</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Anuradhapura<br>Breakfast at the Hotel & visit Anuradhapura City Tour.
                                                                                                        <br>Overnight stay at Hotel in Anuradhapura
                                                                                                        <br>Activities :&emsp;Anuradhapura Atamasthanaya, Mihinthle</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 3</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Anuradhapura – Polonnaruwa -Sigiriya<br>After breakfast commence guided city tour of the sacred
                                                                                                        city Polonnaruwa where you can explore historical buddhist temples, monasteries and tanks as this
                                                                                                        historical city was the prosperity of ancient Sri Lanka.
                                                                                                        <br>Overnight Stay at Hotel in Sigiriya
                                                                                                        <br>Activities :&emsp;Polonnaruwa Ancient City</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 4</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Sigiriya<br>Enjoy your breakfast and commence a guided city tour of Sigiriya.
                                                                                                        Visit Sigiriya Rock Fortress & Dhambulla Cave Temple. In the evening return to your luxurious stay and relax.
                                                                                                        <br>Overnight stay at Hotel in Sigiriya
                                                                                                        <br>Activities :&emsp;Sigiriya Rock Fortress, Dhambulla Cave Temple</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 5</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Sigiriya - Kandy<br>After Breakfast check - out from the hotel and leave to Kandy.
                                                                                                        On the way visit Dambulla Cave Temple and visit Spice Garden in Matale where you can smell and
                                                                                                        taste the authentic essences of Sri Lanka while having herbal relaxation on your head to shoulder
                                                                                                        <br>Overnight stay at Hotel in Kandy </label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 6</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Kandy<br>Enjoy your breakfast and commence a guided city tour of Kandy.
                                                                                                        Visit the Temple of the tooth relic and take blessings from a Buddhist monk, Royal botanical garden, Gem Museum.
                                                                                                        In the evening witness the glamorous Cultural show.
                                                                                                        <br>Overnight stay at Hotel in Kandy
                                                                                                        <br>Activities :&emsp;Temple of Tooth, Cultural Show</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 7</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Kandy - Colombo<br>After breakfast check - out from the hotel visit Elephant Orphanage while heading to the colombo.
                                                                                                        Pinnawala Elephant orphanage where you can take wonderful photographs with the largest mammal in Land.
                                                                                                        In the Evening commence a guided city tour City tour of colombo.
                                                                                                        <br>Overnight stay at Hotel in Colombo
                                                                                                        <br>Activities :&emsp;Pinnawala Elephant Orphanage, Gangarama Temple, ODEL, One Galle Face</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 8</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Colombo – Airport (Departure)<br>Enjoy your breakfast.
                                                                                                        Catch your departure flight. Leave the island with memorable experiences.</label>

                                                                                                </div>
                                                                                            </div>
                                                                                            <br>

                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>
                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>2 Passenger</th>
                                                                                                        <th>3 Passenger</th>
                                                                                                        <th>4 - 6 Passenger</th>
                                                                                                        <th>7 - 9 Passenger</th>
                                                                                                        <th>10 - 15 Passenger</th>
                                                                                                    </tr>

                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['pax2x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax3x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax46x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax79x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax1015x']; ?> Per Person</td>
                                                                                                            </tr>
                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?></span>

                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>

                                                                                                    <tr>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                    </tr>
                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>

                                                                                                    <?php
                                                                                                }
                                                                                                ?>




                                                                                            </center>
                                                                                            <br>
                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>

                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>2 Passenger</th>
                                                                                                        <th>3 Passenger</th>
                                                                                                        <th>4 - 6 Passenger</th>
                                                                                                        <th>7 - 9 Passenger</th>
                                                                                                        <th>10 - 15 Passenger</th>
                                                                                                    </tr>
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['pax2y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax3y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax46y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax79y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax1015y']; ?> Per Person</td>
                                                                                                            </tr>

                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datey']; ?>.<?php print $row['monthy']; ?>.<?php print $row['yeary'] ?></span>
                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>
                                                                                                    <tr>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                    </tr>

                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>


                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                            </center>
                                                                                            <br>

                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Inclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">3*,4* Luxury Hotel Accommodation on Bed & Breakfast basis<br>
                                                                                                        07 Breakfast at the Hotels<br>
                                                                                                        Transport AC Luxury Vehicle with English Speaking Chauffer<br>
                                                                                                        Sightseeing as per the Itinerary<br>
                                                                                                        Minimum 02 Person travel together<br>
                                                                                                        All Taxes</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Exclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">Lunch & Dinner<br>
                                                                                                        Casino Transfers<br>
                                                                                                        Airfare Charges<br>
                                                                                                        VISA<br>
                                                                                                        Bank Charges<br>
                                                                                                        All Entrance Charges</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <!--</div>-->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>

                                                                            <!--Buddhist Tours End-->

                                                                            <!--Casino Night Life Tours start-->


                                                                            <form action="savecasinonightlife.php" method="POST">
                                                                                <?php
                                                                                $s = "select * from casinonightlife";
                                                                                $result = mysqli_query($con, $s);
                                                                                $numberofrow = mysqli_num_rows($result);
                                                                                ?>
                                                                                <div class="modal fade text-body" id="specialcasinonightlife" tabindex="2" role="dialog" aria-labelledby="exampleModalLongTitlel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                        <div class="modal-content container">
                                                                                            <div class="modal-header row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <h5 class="modal-title" id="exampleModalLongTitle"><b>CASINO & NIGHTLIFE</b></h5>
                                                                                                </div>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">

                                                                                                    <!--<div class="modal-body">-->

                                                                                                    <label>02 Night and 03 Days</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                </div>

                                                                                                <div class="col-md-12">
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        while ($ro = mysqli_fetch_array($result)) {
                                                                                                            $startfrom = $ro['startfrom'];
                                                                                                            ?>
                                                                                                            <label style="margin-left: 400px;">Starting From USD <?php print $startfrom; ?> Per Person</label>
                                                                                                            <?php
                                                                                                        }
                                                                                                    } else {
                                                                                                        ?>
                                                                                                        <label style="margin-left: 400px;">Starting From USD 000 Per Person</label>
                                                                                                        <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                    <br>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 1</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Airport (Arrival) – Colombo<br>Our representative will warmly welcome & assist you upon arrival & drive you to Colombo.
                                                                                                        <br>Check-in to the Hotel
                                                                                                        <br>Overnight stay at Hotel in Colombo
                                                                                                        <br>Activities :&emsp;Casino, Nightlife, Pub, Restaurants</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 2</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Colombo<br>Breakfast at the Hotel.
                                                                                                        <br>Overnight stay at Hotel in Colombo
                                                                                                        <br>Activities :&emsp;Casino, Nightlife, Pub, Restaurants</label>
                                                                                                </div>
                                                                                            </div>

                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 3</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Colombo – Airport (Departure)<br>Enjoy your breakfast.
                                                                                                        Catch your departure flight. Leave the island with memorable experiences.</label>

                                                                                                </div>
                                                                                            </div>
                                                                                            <br>

                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>
                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>2 Passenger</th>
                                                                                                        <th>3 Passenger</th>
                                                                                                        <th>4 - 6 Passenger</th>
                                                                                                        <th>7 - 9 Passenger</th>
                                                                                                        <th>10 - 15 Passenger</th>
                                                                                                    </tr>

                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['pax2x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax3x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax46x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax79x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax1015x']; ?> Per Person</td>
                                                                                                            </tr>
                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?></span>

                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>

                                                                                                    <tr>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                    </tr>
                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>

                                                                                                    <?php
                                                                                                }
                                                                                                ?>




                                                                                            </center>
                                                                                            <br>
                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>

                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>2 Passenger</th>
                                                                                                        <th>3 Passenger</th>
                                                                                                        <th>4 - 6 Passenger</th>
                                                                                                        <th>7 - 9 Passenger</th>
                                                                                                        <th>10 - 15 Passenger</th>
                                                                                                    </tr>
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['pax2y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax3y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax46y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax79y']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax1015y']; ?> Per Person</td>
                                                                                                            </tr>

                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datey']; ?>.<?php print $row['monthy']; ?>.<?php print $row['yeary'] ?></span>
                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>
                                                                                                    <tr>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                    </tr>

                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>


                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                            </center>
                                                                                            <br>
                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>

                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>2 Passenger</th>
                                                                                                        <th>3 Passenger</th>
                                                                                                        <th>4 - 6 Passenger</th>
                                                                                                        <th>7 - 9 Passenger</th>
                                                                                                        <th>10 - 15 Passenger</th>
                                                                                                    </tr>
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['pax2z']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax3z']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax46z']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax79z']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax1015z']; ?> Per Person</td>
                                                                                                            </tr>

                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datez']; ?>.<?php print $row['monthz']; ?>.<?php print $row['yearz'] ?></span>
                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>
                                                                                                    <tr>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                    </tr>

                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>


                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                            </center>
                                                                                            <br>

                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Inclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">3*,4*,5* Luxury Hotel Accommodation on Bed & Breakfast basis<br>
                                                                                                        02 Breakfast at the Hotels<br>
                                                                                                        Transport AC Luxury Vehicle with English Speaking Chauffer<br>
                                                                                                        Sightseeing as per the Itinerary<br>
                                                                                                        Minimum 02 Person travel together<br>
                                                                                                        All Taxes</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Exclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">Lunch & Dinner<br>
                                                                                                        Casino Transfers<br>
                                                                                                        Airfare Charges<br>
                                                                                                        VISA<br>
                                                                                                        Bank Charges<br>
                                                                                                        All Entrance Charges</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <!--</div>-->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>

                                                                            <!--Casino Night Life Tours End-->

                                                                            <!--All Inclusive Tours start-->


                                                                            <form action="saveallinclusivetour.php" method="POST">
                                                                                <?php
                                                                                $s = "select * from allinclusivetour";
                                                                                $result = mysqli_query($con, $s);
                                                                                $numberofrow = mysqli_num_rows($result);
                                                                                ?>
                                                                                <div class="modal fade text-body" id="speciallinclusivetour" tabindex="2" role="dialog" aria-labelledby="exampleModalLongTitlel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                        <div class="modal-content container">
                                                                                            <div class="modal-header row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <h5 class="modal-title" id="exampleModalLongTitle"><b>ALL INCLUSIVE TOUR</b></h5>
                                                                                                </div>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">

                                                                                                    <!--<div class="modal-body">-->

                                                                                                    <label>03 Night and 04 Days</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                </div>

                                                                                                <div class="col-md-12">
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        while ($ro = mysqli_fetch_array($result)) {
                                                                                                            $startfrom = $ro['startfrom'];
                                                                                                            ?>
                                                                                                            <label style="margin-left: 400px;">Starting From USD <?php print $startfrom; ?> Per Person</label>
                                                                                                            <?php
                                                                                                        }
                                                                                                    } else {
                                                                                                        ?>
                                                                                                        <label style="margin-left: 400px;">Starting From USD 000 Per Person</label>
                                                                                                        <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                    <br>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 1</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Airport (Arrival) – Ahungalla<br>Our representative will warmly welcome & assist you upon arrival & drive you to RIU Ahungalla.
                                                                                                        <br>Check-in to the Hotel
                                                                                                        <br>Overnight stay at Hotel in RIU Ahungalla </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 2</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Ahungalla<br>Breakfast, Lunch, Dinner at Hotel.
                                                                                                        <br>Overnight stay at Hotel in RIU Ahungalla </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 3</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Ahungalla<br>Breakfast, Lunch, Dinner at Hotel.
                                                                                                        <br>Overnight stay at Hotel in RIU Ahungalla </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 4</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Ahungalla – Airport (Departure)<br>Enjoy your breakfast.
                                                                                                        Catch your departure flight. Leave the island with memorable experiences.</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>



                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa  checked">RIU Ahungalla</span></pre>
                                                                                                </caption>
                                                                                            </center>
                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>2 Passenger</th>
                                                                                                        <th>3 Passenger</th>
                                                                                                        <th>4 - 6 Passenger</th>
                                                                                                        <th>7 - 9 Passenger</th>
                                                                                                        <th>10 - 15 Passenger</th>
                                                                                                    </tr>

                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['pax2x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax3x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax46x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax79x']; ?> Per Person</td>
                                                                                                                <td>$<?php print $row['pax1015x']; ?> Per Person</td>
                                                                                                            </tr>
                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 300px;">Rait Valid until <?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?></span>

                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>

                                                                                                    <tr>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                        <td>$000 Per Person</td>
                                                                                                    </tr>
                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 300px;">Rait Valid until 00.November.0000</span>

                                                                                                    <?php
                                                                                                }
                                                                                                ?>




                                                                                            </center>
                                                                                            <br>


                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Inclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">RIU Ahungalla Hotel Accommodation on All Inclusive basis<br>
                                                                                                        03 Breakfast, 03 Dinners, 03 Lunch,<br>
                                                                                                        Unlimited Liquor, Snack, Tea, Coffee<br>
                                                                                                        Suite Room<br>
                                                                                                        Transport AC Luxury Vehicle with English Speaking Chauffer<br>
                                                                                                        Sightseeing as per the Itinerary<br>
                                                                                                        Minimum 02 Person travel together<br>
                                                                                                        All Taxes</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Exclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">Casino Transfers<br>
                                                                                                        Casino Coupons<br>
                                                                                                        Airfare Charges<br>
                                                                                                        VISA<br>
                                                                                                        Bank Charges<br>
                                                                                                        All Entrance Charges</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <!--</div>-->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>

                                                                            <!--All Inclusive Tours End-->

                                                                            <!--//////////////////////////////////////////////Special Tours End////////////////////////////////////////////////////////////////-->


                                                                            <!--//////////////////////////////////////////////Honeymoon Tours Started////////////////////////////////////////////////////////////////-->

                                                                            <!--Romantic Holiday Tours start-->


                                                                            <form action="saveromanticholiday.php" method="POST">
                                                                                <?php
                                                                                $s = "select * from romanticholiday";
                                                                                $result = mysqli_query($con, $s);
                                                                                $numberofrow = mysqli_num_rows($result);
                                                                                ?>
                                                                                <div class="modal fade text-body" id="honeymoonromanticholiday" tabindex="2" role="dialog" aria-labelledby="exampleModalLongTitlel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                        <div class="modal-content container">
                                                                                            <div class="modal-header row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <h5 class="modal-title" id="exampleModalLongTitle"><b>ROMANTIC HOLIDAY</b></h5>
                                                                                                </div>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">

                                                                                                    <!--<div class="modal-body">-->

                                                                                                    <label>04 Night and 05 Days</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                </div>

                                                                                                <div class="col-md-12">
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        while ($ro = mysqli_fetch_array($result)) {
                                                                                                            $startfrom = $ro['startfrom'];
                                                                                                            ?>
                                                                                                            <label style="margin-left: 400px;">Starting From USD <?php print $startfrom; ?> Per Person</label>
                                                                                                            <?php
                                                                                                        }
                                                                                                    } else {
                                                                                                        ?>
                                                                                                        <label style="margin-left: 400px;">Starting From USD 000 Per Person</label>
                                                                                                        <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                    <br>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 1</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Airport (Arrival) – Pinnawala - Kandy<br>Our representative will warmly welcome & assist you upon arrival & drive you to Kandy.
                                                                                                        <br>Check-in to the Hotel
                                                                                                        <br>Overnight stay at Hotel in Kandy
                                                                                                        <br>Activities :&emsp;Peradeniya Botanical Garden, Kandy Lake, Gem Museum,
                                                                                                        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Spice Garden</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 2</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Kandy – Nuwaraeliya<br>After Breakfast check - out from the hotel and head to Nuwaraeliya the Little England.
                                                                                                        On the way witness Waterfalls and a tea factory where you can taste an authentic cup of Ceylon tea.
                                                                                                        Arrive in Nuwaraeliya and check – in to the hotel
                                                                                                        <br>Overnight stay at Hotel in Nuwaraeliya
                                                                                                        <br>Activities :&emsp;Hakgala Botanical Garden, Ramboda Water Fall, Hanuman Temple,
                                                                                                        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Seetha Amman Temple, Gregory Lake, Tea Factory, Tea Plantations</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 3</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Nuwaraeliya<br>Breakfast at the Hotel. Relax and Leisure at the hotel
                                                                                                        <br>Overnight stay at Hotel in Nuwaraeliya </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 4</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Nuwaraeliya - Bentota<br>After breakfast Check – out from the hotel and leave to Bentota via Kithulgala.
                                                                                                        On the way visit White Water Rafting. Arrive in Bentota and check - in to your luxurious hotel.
                                                                                                        Relax and Leisure at the hotel
                                                                                                        <br>Overnight stay at Hotel in Bentota
                                                                                                        <br>Activities :&emsp;Galle Fort, Dutch Museum, Turtle Hatchery, White Water Raftingh</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 5</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Bentota – Airport (Departure)<br>Enjoy your breakfast.
                                                                                                        Catch your departure flight. Leave the island with memorable experiences.</label>
                                                                                                </div>

                                                                                            </div>

                                                                                            <br>

                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>
                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>COUPLE</th>

                                                                                                    </tr>

                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['couplex']; ?> for Couple</td>
                                                                                                            </tr>
                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 000px;">Rait Valid until <?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?></span>

                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>

                                                                                                    <tr>
                                                                                                        <td>$000 for Couple</td>
                                                                                                    </tr>
                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 00px;">Rait Valid until 00.November.0000</span>

                                                                                                    <?php
                                                                                                }
                                                                                                ?>




                                                                                            </center>
                                                                                            <br><br><br>
                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>

                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>COUPLE</th>

                                                                                                    </tr>
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['coupley']; ?> for Couple</td>
                                                                                                            </tr>

                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 00px;">Rait Valid until <?php print $row['datey']; ?>.<?php print $row['monthy']; ?>.<?php print $row['yeary'] ?></span>
                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>
                                                                                                    <tr>
                                                                                                        <td>$000 for Couple</td>
                                                                                                    </tr>

                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 00px;">Rait Valid until 00.November.0000</span>


                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                            </center>
                                                                                            <br>

                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Inclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">3*,4* Luxury Hotel Accommodation on Bed & Breakfast basis<br>
                                                                                                        04 Breakfast at the Hotels<br>
                                                                                                        Transport AC Luxury Car with English Speaking Chauffer<br>
                                                                                                        Sightseeing as per the Itinerary<br>
                                                                                                        Honeymoon Amenities<br>
                                                                                                        On Arrival Honeymoon Gift<br>
                                                                                                        All Taxes</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Exclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">Lunch & Dinner<br>
                                                                                                        Casino Transfers<br>
                                                                                                        Airfare Charges<br>
                                                                                                        VISA<br>
                                                                                                        Bank Charges<br>
                                                                                                        All Entrance Charges</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <!--</div>-->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>

                                                                            <!--Romantic Holiday Tours End-->

                                                                            <!--Romantic Gateway Tours start-->


                                                                            <form action="saveromanticgateway.php" method="POST">
                                                                                <?php
                                                                                $s = "select * from romanticgateway";
                                                                                $result = mysqli_query($con, $s);
                                                                                $numberofrow = mysqli_num_rows($result);
                                                                                ?>
                                                                                <div class="modal fade text-body" id="honeymoonromanticgateway" tabindex="2" role="dialog" aria-labelledby="exampleModalLongTitlel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                        <div class="modal-content container">
                                                                                            <div class="modal-header row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <h5 class="modal-title" id="exampleModalLongTitle"><b>ROMANTIC GETAWAY</b></h5>
                                                                                                </div>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">

                                                                                                    <!--<div class="modal-body">-->

                                                                                                    <label>05 Night and 06 Days</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                </div>

                                                                                                <div class="col-md-12">
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        while ($ro = mysqli_fetch_array($result)) {
                                                                                                            $startfrom = $ro['startfrom'];
                                                                                                            ?>
                                                                                                            <label style="margin-left: 400px;">Starting From USD <?php print $startfrom; ?> Per Person</label>
                                                                                                            <?php
                                                                                                        }
                                                                                                    } else {
                                                                                                        ?>
                                                                                                        <label style="margin-left: 400px;">Starting From USD 000 Per Person</label>
                                                                                                        <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                    <br>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 1</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Airport (Arrival) – Pinnawala - Sigiriya<br>Our representative will warmly welcome & assist you upon arrival & drive you to Sigiriya.
                                                                                                        <br>Check-in to the Hotel
                                                                                                        <br>Overnight stay at Hotel in Sigiriya</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 2</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Sigiriya<br>Enjoy your breakfast and commence a guided city tour of Sigiriya.
                                                                                                        Visit Sigiriya Rock Fortress, Minneriya National Park.
                                                                                                        In the evening return to your luxurious stay and relax.
                                                                                                        <br>Overnight stay at Hotel in Sigiriya
                                                                                                        <br>Activities :&emsp;Sigiriya Rock Fortress, Dhambulla Cave Temple,
                                                                                                        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Minneriya National Park Safari</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 3</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Sigiriya - Kandy<br>After Breakfast check - out from the hotel and head to Kandy.
                                                                                                        En-route visit the Mathale Spice Garden. check - in to your hotel and relax.
                                                                                                        <br>Overnight stay at Hotel in Kandy 
                                                                                                        <br>Activities :&emsp;Spice Garden, Peradeniya Botanical Garden</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 4</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Kandy – Nuwaraeliya<br>After Breakfast check - out from the hotel and head to Nuwaraeliya the Little England.
                                                                                                        On the way witness Waterfalls and a tea factory where you can taste an authentic cup of Ceylon tea. Arrive in Nuwaraeliya and check – in to the hotel
                                                                                                        <br>Overnight stay at Hotel in Nuwaraeliya
                                                                                                        <br>Activities :&emsp;Hakgala Botanical Garden, Ramboda Water Fall, Hanuman Temple,
                                                                                                        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Seetha Amman Temple, Gregory Lake, Tea Factory, Tea Plantations</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 5</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Nuwaraeliya - Bentota<br>After breakfast Check – out from the hotel and leave to Bentota via Kithulgala. On the way visit White Water Rafting.
                                                                                                        Arrive in Bentota and check - in to your luxurious hotel. Relax and Leisure at the hotel
                                                                                                        <br>Overnight stay at Hotel in Bentota
                                                                                                        <br>Activities :&emsp;Turtle Hatchery, White Water Raftingh</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 6</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Bentota – Airport (Departure)<br>Enjoy your breakfast.
                                                                                                        Catch your departure flight. Leave the island with memorable experiences.</label>
                                                                                                </div>

                                                                                            </div>

                                                                                            <br>

                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>
                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>COUPLE</th>

                                                                                                    </tr>

                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['couplex']; ?> for Couple</td>
                                                                                                            </tr>
                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 000px;">Rait Valid until <?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?></span>

                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>

                                                                                                    <tr>
                                                                                                        <td>$000 for Couple</td>
                                                                                                    </tr>
                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 00px;">Rait Valid until 00.November.0000</span>

                                                                                                    <?php
                                                                                                }
                                                                                                ?>




                                                                                            </center>
                                                                                            <br><br><br>
                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>

                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>COUPLE</th>

                                                                                                    </tr>
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['coupley']; ?> for Couple</td>
                                                                                                            </tr>

                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 00px;">Rait Valid until <?php print $row['datey']; ?>.<?php print $row['monthy']; ?>.<?php print $row['yeary'] ?></span>
                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>
                                                                                                    <tr>
                                                                                                        <td>$000 for Couple</td>
                                                                                                    </tr>

                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 00px;">Rait Valid until 00.November.0000</span>


                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                            </center>
                                                                                            <br>

                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Inclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">3* or 4* Hotel Accommodation on Bed & Breakfast basis<br>
                                                                                                        05 Breakfast at the Hotels<br>
                                                                                                        Transport AC Luxury Car with English Speaking Chauffer<br>
                                                                                                        Sightseeing as per the Itinerary<br>
                                                                                                        Honeymoon Amenities<br>
                                                                                                        On Arrival Honeymoon Gift<br>
                                                                                                        All Taxes</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Exclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">Lunch & Dinner<br>
                                                                                                        Casino Transfers<br>
                                                                                                        Airfare Charges<br>
                                                                                                        VISA<br>
                                                                                                        Bank Charges<br>
                                                                                                        All Entrance Charges</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <!--</div>-->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>

                                                                            <!--Romantic Gateway Tours End-->

                                                                            <!--Feel The Love Tours start-->


                                                                            <form action="savefeelthelove.php" method="POST">
                                                                                <?php
                                                                                $s = "select * from feelthelove";
                                                                                $result = mysqli_query($con, $s);
                                                                                $numberofrow = mysqli_num_rows($result);
                                                                                ?>
                                                                                <div class="modal fade text-body" id="honeymoonfeelthelove" tabindex="2" role="dialog" aria-labelledby="exampleModalLongTitlel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                        <div class="modal-content container">
                                                                                            <div class="modal-header row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <h5 class="modal-title" id="exampleModalLongTitle"><b>FEEL THE LOVE</b></h5>
                                                                                                </div>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">

                                                                                                    <!--<div class="modal-body">-->

                                                                                                    <label>07 Night and 08 Days</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                </div>

                                                                                                <div class="col-md-12">
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        while ($ro = mysqli_fetch_array($result)) {
                                                                                                            $startfrom = $ro['startfrom'];
                                                                                                            ?>
                                                                                                            <label style="margin-left: 400px;">Starting From USD <?php print $startfrom; ?> Per Person</label>
                                                                                                            <?php
                                                                                                        }
                                                                                                    } else {
                                                                                                        ?>
                                                                                                        <label style="margin-left: 400px;">Starting From USD 000 Per Person</label>
                                                                                                        <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                    <br>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 1</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Airport (Arrival) – Pinnawala - Sigiriya<br>Our representative will warmly welcome & assist you upon arrival & drive you to Sigiriya.
                                                                                                        <br>Check-in to the Hotel
                                                                                                        <br>Overnight stay at Hotel in Sigiriya</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 2</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Sigiriya<br>Enjoy your breakfast and commence a guided city tour of Sigiriya.
                                                                                                        Visit Sigiriya Rock Fortress, Minneriya National Park.
                                                                                                        In the evening return to your luxurious stay and relax.
                                                                                                        <br>Overnight stay at Hotel in Sigiriya
                                                                                                        <br>Activities :&emsp;Sigiriya Rock Fortress, Dhambulla Cave Temple,
                                                                                                        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Minneriya National Park Safari</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 3</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Sigiriya - Kandy<br>After Breakfast check - out from the hotel and head to Kandy.
                                                                                                        En-route visit the Mathale Spice Garden. check - in to your hotel and relax.
                                                                                                        <br>Overnight stay at Hotel in Kandy 
                                                                                                        <br>Activities :&emsp;Spice Garden, Peradeniya Botanical Garden</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 4</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Kandy – Nuwaraeliya<br>After Breakfast check - out from the hotel and head to Nuwaraeliya the Little England.
                                                                                                        On the way witness Waterfalls and a tea factory where you can taste an authentic cup of Ceylon tea.
                                                                                                        Arrive in Nuwaraeliya and check – in to the hotel
                                                                                                        <br>Overnight stay at Hotel in Nuwaraeliya
                                                                                                        <br>Activities :&emsp;Hakgala Botanical Garden, Ramboda Water Fall, Hanuman Temple,
                                                                                                        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Seetha Amman Temple, Gregory Lake, Tea Factory, Tea Plantations</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 5</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Nuwaraeliya - Bentota<br>After breakfast Check – out from the hotel and leave to Bentota via Kithulgala. On the way visit White Water Rafting.
                                                                                                        Arrive in Bentota and check - in to your luxurious hotel. Relax and Leisure at the hotel
                                                                                                        <br>Overnight stay at Hotel in Bentota
                                                                                                        <br>Activities :&emsp;Turtle Hatchery, White Water Raftingh</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 6</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Bentota<br>Breakfast at the Hotel & relax at the Beach
                                                                                                        <br>Overnight stay at Hotel in Bentota</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 7</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Bentota - Colombo<br>After Breakfast check - out from the hotel and head to Colombo.
                                                                                                        visit Colombo Sightseeing. check - in to your hotel and relax.
                                                                                                        <br>Overnight stay at Hotel in Colombo
                                                                                                        <br>Activities :&emsp;BMICH, Casino, Night Clubs, Pubs, Gangarama Temple, ODEL</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Day 8</b></label>&emsp;&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-10" style="margin-left: 90px; margin-top: -30px;">
                                                                                                    <label for="email">Colombo – Airport (Departure)<br>Enjoy your breakfast.
                                                                                                        Catch your departure flight. Leave the island with memorable experiences.</label>
                                                                                                </div>

                                                                                            </div>

                                                                                            <br>

                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>
                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>COUPLE</th>

                                                                                                    </tr>

                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['couplex']; ?> for Couple</td>
                                                                                                            </tr>
                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 000px;">Rait Valid until <?php print $row['datex']; ?>.<?php print $row['monthx']; ?>.<?php print $row['yearx']; ?></span>

                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>

                                                                                                    <tr>
                                                                                                        <td>$000 for Couple</td>
                                                                                                    </tr>
                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 00px;">Rait Valid until 00.November.0000</span>

                                                                                                    <?php
                                                                                                }
                                                                                                ?>




                                                                                            </center>
                                                                                            <br><br><br>
                                                                                            <center>
                                                                                                <caption>
                                                                                                    <pre><span class="fa fa-star checked rating"></span><span class="fa fa-star checked rating"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star">&emsp;Hotels</span></pre>
                                                                                                </caption>
                                                                                            </center>

                                                                                            <center>
                                                                                                <table border="3" style="border-color: #f9ab30; border-style: groove;">

                                                                                                    <tr>
                                                                                                        <th colspan="6"></th>

                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th>COUPLE</th>

                                                                                                    </tr>
                                                                                                    <?php
                                                                                                    if ($numberofrow == 1) {
                                                                                                        $result = mysqli_query($con, $s);
                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>$<?php print $row['coupley']; ?> for Couple</td>
                                                                                                            </tr>

                                                                                                        </table><br>
                                                                                                        <span style="margin-left: 00px;">Rait Valid until <?php print $row['datey']; ?>.<?php print $row['monthy']; ?>.<?php print $row['yeary'] ?></span>
                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>
                                                                                                    <tr>
                                                                                                        <td>$000 for Couple</td>
                                                                                                    </tr>

                                                                                                    </table><br>
                                                                                                    <span style="margin-left: 00px;">Rait Valid until 00.November.0000</span>


                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                            </center>
                                                                                            <br>

                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Inclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">3* or 4* Hotel Accommodation on Bed & Breakfast basis<br>
                                                                                                        07 Breakfast at the Hotels<br>
                                                                                                        Transport AC Luxury Car with English Speaking Chauffer<br>
                                                                                                        Sightseeing as per the Itinerary<br>
                                                                                                        Honeymoon Amenities<br>
                                                                                                        On Arrival Honeymoon Gift<br>
                                                                                                        All Taxes</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row justify-content-sm-start">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="email"><b>Exclusions</b></label>&emsp;&emsp;
                                                                                                </div>
                                                                                                <div class="col-md-11" style="margin-left: 130px; margin-top: -30px;">
                                                                                                    <label for="email">Lunch & Dinner<br>
                                                                                                        Casino Transfers<br>
                                                                                                        Airfare Charges<br>
                                                                                                        VISA<br>
                                                                                                        Bank Charges<br>
                                                                                                        All Entrance Charges</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <!--</div>-->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>

                                                                            <!--Feel The Love Tours End-->

                                                                            <!--//////////////////////////////////////////////Honeymoon Tours End////////////////////////////////////////////////////////////////-->



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