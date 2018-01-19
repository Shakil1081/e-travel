<?php


if(!isset($_SESSION)) {
    session_start();
}
$root = "http://localhost/e-travel";


?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Code :: Yellow</title>
    <link href="https://fonts.googleapis.com/css?family=Patua+One%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRoboto+Slab:100,300,400,700Lato:100,100i,300,300i,400,400i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $root ?>/assets/css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $root ?>/assets/css/vendors/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?php echo $root ?>/assets/css/vendors/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $root ?>/assets/css/vendors/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $root ?>/assets/css/vendors/owl.theme.green.min.css">
    <link rel="stylesheet" href="<?php echo $root ?>/assets/css/vendors/animate.min.css">
    <link rel="stylesheet" href="<?php echo $root ?>/assets/css/vendors/slicknav.min.css">
    <link rel="stylesheet" href="<?php echo $root ?>/assets/css/common/main.css">
</head>
<style>
    .tsp-search-booking {
        margin-top: -200px;
        text-align: center;
    }
</style>
<body>
<!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="tsp-main">
    <header>
        <!--start header top bar-->
        <div class="tsp-header-bar hidden-xs hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="top-content">
                        <div class="tsp-account">

                            <?php if(isset($_SESSION['customer_details_id'])){?>
                            <a href="<?php echo $root ?>/views/user/logout.php">Logout<i class="fa fa-angle-down"></i></a>
                            <?php }else{ ?>
                            <a href="<?php echo $root ?>/views/registration.php" style="float:left; margin-right:10px;"> Registration <i class="fa fa-angle"></i></a>
                            <a href="<?php echo $root ?>/views/login.php">Log in <i class="fa fa-angle"></i></a>
                            <?php } ?>


                        </div>
                    </div>
                </div>
                <!--Row-->
            </div>
        </div>
        <!--end header top bar-->
        <!--start header main-->
        <div class="tsp-header-main">
            <div class="container">
                <div class="row">
                    <div class="tsp-logo col-md-3 col-sm-3 col-xs-3">
                        <a href="<?php echo $root ?>/index.php">
                            <img src="<?php echo $root ?>/assets/images/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div id="tsp_menu_cart_search" class="col-md-9 col-sm-9 col-xs-12">
                        <nav>
                            <ul id="menu">
                                <li>
                                    <a href="<?php echo $root ?>/index.php">Home</a>
                                </li>
                                <li><a href="<?php echo $root ?>/views/about-us.php">About</a></li>
                                <li>
                                    <a href="<?php echo $root ?>/views/hotel-list.php">Hotels</a>

                                </li>
                                <li>
                                    <a href="<?php echo $root ?>/views/hotel-room_list.php">Hotel Rooms</a>

                                </li>
                                <li><a href="<?php echo $root ?>/views/contact.php">Contact</a></li>
                            </ul>
                        </nav>

                    </div>
                    <!--div nav cart search-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--End header main-->
    </header>
