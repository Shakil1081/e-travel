<?php

if(!isset($_SESSION)){
	session_start();
}
require('../../vendor/autoload.php');
use App\Users\Admin;
$admin = new Admin();


$error_msg ="";
if( !empty($_POST['email']) && !empty($_POST['password'])){


	$admin->setData($_POST);


	if($admin->is_exist()) {

		if ($admin->is_admin()) {
			$_SESSION['admin_email'] = $admin->email;
			header("location:index.php");

		} else {
			$error_msg = "incorrect password";
		}
	}else{
		$error_msg = "user not found";
	}
}






?>



<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Waziullah : Hotel Management System</title>
    <link href="https://fonts.googleapis.com/css?family=Patua+One%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRoboto+Slab:100,300,400,700Lato:100,100i,300,300i,400,400i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/vendors/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../../assets/css/vendors/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/vendors/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/vendors/owl.theme.green.min.css">
    <link rel="stylesheet" href="../../assets/css/vendors/animate.min.css">
    <link rel="stylesheet" href="../../assets/css/vendors/slicknav.min.css">
    <link rel="stylesheet" href="../../assets/css/common/main.css">
</head>
<body>
<!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="tsp-main">

<!--header-->
    <main>

        <section id="tsp_login_page" class="tsp-page-tpl">
	<div class="container">
		<div class="row">
			<div class="tsp-box-content tsp-page-acc">
				<div class="tsp-form-login col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3 tsp-full-xs tsp-no-padding-right">
					<div class="col-lg-offset-1 col-md-offset-1">
						<img src="../../assets/images/logo.png" alt="code yellow" width="300px" style="margin: 0 auto">
						<div class="alert">
							<h1>
							<?php
							echo (!empty($error_msg))?$error_msg:""

							?>
							</h1>

						</div>
						<h2>Login</h2>
						<form action="login.php" name="formLogin" class="tsp-form-site" method="post">
							<div class="form-group">
								<input type="text" name="email" placeholder="Username" required>
							</div>
							<div class="form-group">
								<input type="password" name="password" placeholder="Password" required>
							</div>
							<button type="submit" class="tsp-btn-site">login now</button>
						</form>
					</div>
					
					<!-- div offset left -->
				</div>
			</div>
		</div><!-- div row -->
	</div>
</section>
        <div style="margin-bottom: 300px"; ></div>
    </main>
    <footer>
	<!--&lt;!&ndash;start footer main&ndash;&gt;-->
	<!--<div class="tsp-footer-main">-->
		<!--<div class="container">-->
			<!--<div class="row">-->
				<!--&lt;!&ndash;Start Item footer main&ndash;&gt;-->
				<!--<div class="col-xs-12 col-sm-6 col-md-4 tsp-footer-option tsp-no-padding-left">-->
					<!--<aside class="tsp-widget-footer">-->
						<!--<h2>Suiren About</h2>-->
						<!--<div class="tsp-content-item">-->
							<!--<p>You love to travel, and we love to help make travel one of life’s greatest pleasures. That’s why millions of consumers search for and book a wide range of hotels, flights, car rentals, cruises, vacation packages and destination activities with us.</p>-->
							<!--<ul class="tsp-social-footer hidden-xs">-->
								<!--<li>-->
									<!--<a href="login.html#" title="Facebook"><i class="fa fa-facebook-square"></i></a>-->
								<!--</li>-->
								<!--<li>-->
									<!--<a href="login.html#" title="Twitter"><i class="fa fa-twitter-square"></i></a>-->
								<!--</li>-->
								<!--<li>-->
									<!--<a href="login.html#" title="Pinterest"><i class="fa fa-pinterest-square"></i></a>-->
								<!--</li>-->
								<!--<li>-->
									<!--<a href="login.html#" title="Google plus"><i class="fa fa-google-plus-square"></i></a>-->
								<!--</li>-->
								<!--<li>-->
									<!--<a href="login.html#" title="Tumblr"><i class="fa fa-tumblr-square"></i></a>-->
								<!--</li>-->
								<!--<li>-->
									<!--<a href="login.html#" title="Youtube"><i class="fa fa-youtube-square"></i></a>-->
								<!--</li>-->
							<!--</ul>-->
						<!--</div>-->
					<!--</aside>-->
				<!--</div>-->
				<!--&lt;!&ndash;End item main footer&ndash;&gt;-->
				<!--&lt;!&ndash;Start Item footer main&ndash;&gt;-->
				<!--<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-1 tsp-footer-option">-->
					<!--<aside class="tsp-widget-footer">-->
						<!--<h2>Contact Us</h2>-->
						<!--<div class="tsp-content-item">-->
							<!--<ul class="tsp-footer-address">-->
								<!--<li>-->
									<!--<i class="fa fa-map-marker"><span>Address:</span></i>-->
									<!--<address>Themespond 15/6 Napoli Street Melbourne VIC 3000, Canada</address>-->
								<!--</li>-->
								<!--<li>-->
									<!--<a href="login.html#" target="_blank">-->
										<!--<i class="fa fa-phone"><span>Phone:</span></i> +123 145 999 999-->
									<!--</a>-->
								<!--</li>-->
								<!--<li>-->
									<!--<a href="mailto:themespond@gmail.com" target="_blank">-->
										<!--<i class="fa fa-envelope"><span>Email:</span></i> themespond@gmail.com-->
									<!--</a>-->
								<!--</li>-->
							<!--</ul>-->
						<!--</div>-->
					<!--</aside>-->
				<!--</div>-->
				<!--&lt;!&ndash;End item main footer&ndash;&gt;-->
		<!---->
				<!--&lt;!&ndash;Start Item footer main&ndash;&gt;-->
				<!--<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-1 tsp-footer-option hidden-xs hidden-sm tsp-no-padding-right">-->
					<!--<aside class="tsp-widget-footer">-->
						<!--<h2>Flickr</h2>-->
						<!--<div class="tsp-content-item">-->
							<!--<ul class="tsp-image-instagram">-->
								<!--<li>-->
									<!--<a href="login.html#"><img src="../../assets/images/flickr-1.jpg" alt="Instagram 1"></a>-->
								<!--</li>-->
								<!--<li>-->
									<!--<a href="login.html#"><img src="../../assets/images/flickr-2.jpg" alt="Instagram 2"></a>-->
								<!--</li>-->
								<!--<li>-->
									<!--<a href="login.html#"><img src="../../assets/images/flickr-3.jpg" alt="Instagram 3"></a>-->
								<!--</li>-->
								<!--<li>-->
									<!--<a href="login.html#"><img src="../../assets/images/flickr-4.jpg" alt="Instagram 4"></a>-->
								<!--</li>-->
								<!--<li>-->
									<!--<a href="login.html#"><img src="../../assets/images/flickr-5.jpg" alt="Instagram 5"></a>-->
								<!--</li>-->
								<!--<li>-->
									<!--<a href="login.html#"><img src="../../assets/images/flickr-6.jpg" alt="Instagram 6"></a>-->
								<!--</li>-->
							<!--</ul>-->
						<!--</div>-->
					<!--</aside>-->
				<!--</div>-->
				<!--&lt;!&ndash;End item main footer&ndash;&gt;-->
			<!--</div>&lt;!&ndash;row&ndash;&gt;-->
		<!--</div>&lt;!&ndash;container&ndash;&gt;-->
	<!--</div>-->
	<!--end footer main-->
	<!--start footer bar-->
	<div class="tsp-footer-bar">
		<div class="container">
			<div class="row">
				<!--start box text copyright-->
				<div class="tsp-copyright col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
					<p>Copyright <span>&copy;</span> 2017 Waziullah.  All Rights Reserved</p>
				</div>
				<!--End box text copyright-->
				<!--Start box give news-->
				<div class="tsp-menu-footer col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
					<ul>
						<li><a href="login.php#">Home</a></li>
						<li><a href="login.php#">About</a></li>
						<li><a href="login.php#">Hotels</a></li>
						<li><a href="login.php#">Tours</a></li>
						<li><a href="login.php#">Contacts</a></li>
					</ul>
				</div>
				<!--End box give news-->
				
			</div><!--row-->
		</div><!--container-->
	</div>
	<!--End footer bar-->
</footer>
</div>
<script src="../../assets/js/vendors/jquery.min.js"></script>
<script src="../../assets/js/vendors/modernizr.min.js"></script>
<script src="../../assets/js/vendors/bootstrap.min.js"></script>
<script src="../../assets/js/vendors/bootstrap-datepicker.min.js"></script>
<script src="../../assets/js/vendors/owl.carousel.min.js"></script>
<script src="../../assets/js/vendors/jquery.slicknav.min.js"></script>
<script src="../../assets/js/common.js"></script>
</body>
</html>