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
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
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