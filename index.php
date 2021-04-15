<?php
session_start();
$user='';
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'] ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Merch Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="css/landing/bootstrap.min.css">
    <link rel="stylesheet" href="css/landing/magnific-popup.css">
    <link rel="stylesheet" href="css/landing/jquery-ui.css">
    <link rel="stylesheet" href="css/landing/owl.carousel.min.css">
    <link rel="stylesheet" href="css/landing/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/landing/aos.css">
    <link rel="stylesheet" href="css/landing/style.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body style="margin: 15px">

<div class="site-wrap">
    <header class="site-navbar" role="banner">
        <nav class="navbar navbar-expand-md navbar-light bg-light" style="margin-bottom:10px; ">
            <!--    <a class="navbar-brand" href="#">Navbar</a>-->
            <a class="navbar-brand" href="#">
                <!--suppress CheckImageSize -->
                <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Merch-Store
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="public/creators.php">Discover Creators</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="seller/signup.php">Become a Creator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="public/products.php">Products</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <a class="nav-item">
                        <a class="nav-link avatar dropdown-toggle" id="navbar-dropdown" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
                            <!--suppress CheckImageSize -->
                            <?php
                            if(isset($_SESSION['username'])){ $user = $_SESSION['username'];  ?>
                            <img src="images/user-logo.png" height="30" class="rounded-circle z-depth-0" alt="avatar">Hi, <?php echo $user; ?>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-secondary">
                                <a class="dropdown-item" href="#">Account</a>
                                <a class="dropdown-item" href="public/logout.php">Logout</a>
                            </div>
                        <?php
                        }else{ ?>
                            <!--suppress CheckImageSize -->
                            <img src="images/user-logo.png" height="30" class="rounded-circle z-depth-0" alt="avatar">Login
                        </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-secondary">
                                <a class="dropdown-item" href="public/login.php">Log In</a>
                            </div>
                        <?php }
                        ?>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <!--suppress CheckImageSize -->
                            <img src="images/search.png" alt="" height="30">Search
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="public/cart.php">
                            <!--suppress CheckImageSize -->
                            <img src="images/cart.png" alt="" height="30">Cart(0)
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <div class="site-blocks-cover" style="background-image: url(images/Dani.jpg);" data-aos="fade">
        <div class="container">
            <div class="row align-items-start align-items-md-center justify-content-end">
                <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                    <h1 class="mb-2">Finding Your Perfect Merch From Your Favourite Creator</h1>
                    <div class="intro-text text-center text-md-left">
                        <p class="mb-4"> Support Your Favourite Creator </p>
                        <p>
                            <a href="public/products.php" class="btn btn-sm btn-primary">Shop Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-truck"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Free Shipping</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-refresh2"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Free Returns</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-help"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Customer Support</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section block-3 site-blocks-2 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>Featured Creators</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="nonloop-block-3 owl-carousel">
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img src="images/creator1.jpg" alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="#">Youtube Creator</a></h3>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img src="images/creator1.jpg" alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="#">Instagram Influencer</a></h3>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img src="images/creator1.jpg" alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="#">Podcast Creator</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img src="images/creator1.jpg" alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="#">Facebook Creator</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img src="images/creator1.jpg" alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="#">Tiktok Creator</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section block-8">
        <div class="container">
            <div class="row justify-content-center  mb-5">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>Big Sale!</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-7 mb-5">
                    <a href="#"><img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
                </div>
                <div class="col-md-12 col-lg-5 text-center pl-md-5">
                    <h2><a href="#">50% less in all items</a></h2>
                    <p class="post-meta mb-4">By <a href="#">Marius</a> <span class="block-8-sep">&bullet;</span> April 12, 2021</p>
                    <p><a href="public/products.php" class="btn btn-primary btn-sm">Shop Now</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/landing/jquery-3.3.1.min.js"></script>
<script src="js/landing/jquery-ui.js"></script>
<script src="js/landing/popper.min.js"></script>
<script src="js/landing/bootstrap.min.js"></script>
<script src="js/landing/owl.carousel.min.js"></script>
<script src="js/landing/jquery.magnific-popup.min.js"></script>
<script src="js/landing/aos.js"></script>

<script src="js/landing/main.js"></script>

</body>
</html>