<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Deals | Your Own Shop</title>
    <link rel="icon" href="favicon.ico" type="image/ico">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/swiper.min.css">
    <link rel="stylesheet" href="./assets/css/slick-theme.css">
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/common.css">
    <link rel="stylesheet" href="./assets/css/style.min.css">
    <link rel="stylesheet" href="<?php echo $page_css; ?>">
</head>
<body>
    <!-- Header Start -->
    <header>
        <div class="top-header">
            <div class="container-xl d-flex">
                <marquee behavior="" direction="">Welcome to our Online Store!</marquee>
            </div>
        </div>
        <div class="header-middle">
            <div class="header-middle-inner">
                <div class="container-xl">
                    <div class="header-middle-top">
                        <div class="header-top-content">
                            <div class="header-middle-wrap d-flex justify-content-between align-items-center">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/img/logo.png" alt="wood logo"></a>
                                </div>
                                <div class="d-flex">
                                    <div class="call-us d-flex align-items-center py-1">
                                        <a href="">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <span class="customer-support">
                                            <span class="callus-span text-capitalize">call us</span>
                                            <span class="phone-no">+91 7987646987</span>
                                        </span>
                                    </div>
                                    <div class="shopping-cart d-flex align-items-center py-1">
                                        <a href="">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <span>
                                            <span class="callus-span text-capitalize">shopping cart</span>
                                            <span class="phone-no">$124,00/-</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex navbar-py-10 justify-content-between align-items-center">
                            <div class="logo d-lg-none">
                                <a href=""><img src="assets/img/logo.png" alt="wood logo"></a>
                            </div>
                            <nav class="nav">
                                <ul class="head-nav-ul">
                                    <li class="head-nav-li">
                                        <a href="index.php"  class="head-nav-link <?php echo $link1; ?>">home</a>
                                    </li>
                                    <li class="head-nav-li">
                                        <a href="about-us.php"  class="head-nav-link <?php echo $link2; ?>">about us</a>
                                    </li>
                                    <li class="head-nav-li">
                                        <a href="product-detail.php" class="head-nav-link <?php echo $link3; ?>">product detail</a>
                                    </li>
                                    <li class="head-nav-li">
                                        <a href="product-list.php" class="head-nav-link <?php echo $link4; ?>">product list</a>
                                    </li>
                                    <li class="head-nav-li">
                                        <a href="blog.php"  class="head-nav-link <?php echo $link5; ?>">blog</a>
                                    </li>
                                    <li class="head-nav-li">
                                        <a href="profile.php"  class="head-nav-link <?php echo $link6; ?>">profile</a>
                                    </li>
                                    <li class="head-nav-li">
                                        <a href="contact-us.php"  class="head-nav-link <?php echo $link7; ?>">contact us</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="svg-icons">
                                <ul class="d-flex">
                                    <li class="icon-li">
                                        <a href="">
                                            <a href="">
                                                <img src="./assets/img/icons/cart.svg" alt="svg shopping cart icon">
                                            </a>
                                        </a>
                                    </li>
                                    <li class="icon-li">
                                        <a href="">
                                            <img src="./assets/img/icons/user.svg" alt="svg user icon">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="burger" id="burger" onclick="toggle()">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->