<?php

require('../vendor/autoload.php');
if(!isset($_SESSION)) {
    session_start();
}

use App\Rooms\RoomsOrder;
$rooms_order = new RoomsOrder();



/*
if(isset($_SESSION['existing_customer_order_pending'])) {

    $all_data = $_SESSION['existing_customer_order_pending'];
    if (count($all_data) > 0) {
		var_dump($all_data);
        //set user
        $rooms_order->setData($all_data);
        $rooms_order->setData($_SESSION['all_info']);
        $rooms_order->newOrder();

    }
	else
	{
		
	}
}
*/


//session_destroy();
include("header.php");





//mail function


include_once('../vendor/autoload.php');
$user_email = $_SESSION['all_info']['email'];

	$_POST['email_token'] = md5(uniqid(rand()));

	require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug  = 0;
	$mail->SMTPAuth   = true;
	$mail->SMTPSecure = "ssl";
	$mail->Host       = "smtp.gmail.com";
	$mail->Port       = 465;
	$mail->AddAddress($_SESSION['all_info']['email']);
	$mail->Username="bitm.php.136509@gmail.com";     //   your gmail id here
	$mail->Password="123456bitm";                   //       your gmail password
	$mail->SetFrom('bitm.php22@gmail.com','User Management');
	$mail->AddReplyTo("bitm.php22@gmail.com","User Management");
	$mail->Subject    = "Confirm order";
	$message =  "Thank you for your order:<br>
Your order id is


       $rooms_order->order_id;
       To see yor order.<br>
       <a href='http://localhost/e-travel/views/login.php'> login here </a>with<br>
       Username:$user_email <br>;

       ";
	$mail->MsgHTML($message);
	$mail->Send();

?>




<!--header-->
    <main>
    	<section class="tsp-title-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="tsp-title col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
                        <h1>SUCCESSFUL <span>Payment</span></h1>
                    </div><!-- div title head page -->
                    <div class="tsp-breadcumb col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
                        <ul>
                            <li><a href="payment-success.php#">Home</a></li>
                            <li>/</li>
                            <li><a href="payment-success.php#">Hotels</a></li>
                            <li>/</li>
                            <li><span>Successful Payment</span></li>
                        </ul>
                    </div><!-- div breadcrumb -->
                </div><!-- div row -->
            </div>
        </section>
        <section id="tsp_payment_success">
	<div class="container">
		<div class="row">
			<div class="tsp-box-content">
				<div class="tsp-img-success">
					<img src="../assets/images/succes-payment.jpg" alt="Image success payment">
				</div>
				<div class="tsp-content-payment">
					<h2>DEAR CUSTOMER,</h2>
					<p>
					   Thank you for Your order <span style="font-size: 40px; font-weight: bold; color: red"><?php echo $rooms_order->order_id; ?></span>
						 An email send to you with order details and your login info
                    </p>
                    <a href="../index.php" class="tsp-btn-site">go to home</a>
				</div>
			</div>
		</div><!-- row -->
	</div>
</section>

    </main>
    <footer>
	<!--start footer main-->
	<div class="tsp-footer-main">
		<div class="container">
			<div class="row">
				<!--Start Item footer main-->
				<div class="col-xs-12 col-sm-6 col-md-4 tsp-footer-option tsp-no-padding-left">
					<aside class="tsp-widget-footer">
						<h2>Suiren About</h2>
						<div class="tsp-content-item">
							<p>You love to travel, and we love to help make travel one of life’s greatest pleasures. That’s why millions of consumers search for and book a wide range of hotels, flights, car rentals, cruises, vacation packages and destination activities with us.</p>
							<ul class="tsp-social-footer hidden-xs">
								<li>
									<a href="payment-success.php#" title="Facebook"><i class="fa fa-facebook-square"></i></a>
								</li>
								<li>
									<a href="payment-success.php#" title="Twitter"><i class="fa fa-twitter-square"></i></a>
								</li>
								<li>
									<a href="payment-success.php#" title="Pinterest"><i class="fa fa-pinterest-square"></i></a>
								</li>
								<li>
									<a href="payment-success.php#" title="Google plus"><i class="fa fa-google-plus-square"></i></a>
								</li>
								<li>
									<a href="payment-success.php#" title="Tumblr"><i class="fa fa-tumblr-square"></i></a>
								</li>
								<li>
									<a href="payment-success.php#" title="Youtube"><i class="fa fa-youtube-square"></i></a>
								</li>
							</ul>
						</div>
					</aside>
				</div>
				<!--End item main footer-->
				<!--Start Item footer main-->
				<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-1 tsp-footer-option">
					<aside class="tsp-widget-footer">
						<h2>Contact Us</h2>
						<div class="tsp-content-item">
							<ul class="tsp-footer-address">
								<li>
									<i class="fa fa-map-marker"><span>Address:</span></i>
									<address>Themespond 15/6 Napoli Street Melbourne VIC 3000, Canada</address>
								</li>
								<li>
									<a href="payment-success.php#" target="_blank">
										<i class="fa fa-phone"><span>Phone:</span></i> +123 145 999 999
									</a>
								</li>
								<li>
									<a href="mailto:themespond@gmail.com" target="_blank">
										<i class="fa fa-envelope"><span>Email:</span></i> themespond@gmail.com
									</a>
								</li>
							</ul>
						</div>
					</aside>
				</div>
				<!--End item main footer-->
		
				<!--Start Item footer main-->
				<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-1 tsp-footer-option hidden-xs hidden-sm tsp-no-padding-right">
					<aside class="tsp-widget-footer">
						<h2>Flickr</h2>
						<div class="tsp-content-item">
							<ul class="tsp-image-instagram">
								<li>
									<a href="payment-success.php#"><img src="../assets/images/flickr-1.jpg" alt="Instagram 1"></a>
								</li>
								<li>
									<a href="payment-success.php#"><img src="../assets/images/flickr-2.jpg" alt="Instagram 2"></a>
								</li>
								<li>
									<a href="payment-success.php#"><img src="../assets/images/flickr-3.jpg" alt="Instagram 3"></a>
								</li>
								<li>
									<a href="payment-success.php#"><img src="../assets/images/flickr-4.jpg" alt="Instagram 4"></a>
								</li>
								<li>
									<a href="payment-success.php#"><img src="../assets/images/flickr-5.jpg" alt="Instagram 5"></a>
								</li>
								<li>
									<a href="payment-success.php#"><img src="../assets/images/flickr-6.jpg" alt="Instagram 6"></a>
								</li>
							</ul>
						</div>
					</aside>
				</div>
				<!--End item main footer-->
			</div><!--row-->
		</div><!--container-->
	</div>
	<!--end footer main-->
	<!--start footer bar-->
	<div class="tsp-footer-bar">
		<div class="container">
			<div class="row">
				<!--start box text copyright-->
				<div class="tsp-copyright col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
					<p>Copyright <span>&copy;</span> 2016 ThemePond.  All Rights Reserved</p>
				</div>
				<!--End box text copyright-->
				<!--Start box give news-->
				<div class="tsp-menu-footer col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
					<ul>
						<li><a href="payment-success.php#">Home</a></li>
						<li><a href="payment-success.php#">About</a></li>
						<li><a href="payment-success.php#">Hotels</a></li>
						<li><a href="payment-success.php#">Tours</a></li>
						<li><a href="payment-success.php#">Contacts</a></li>
					</ul>
				</div>
				<!--End box give news-->
				
			</div><!--row-->
		</div><!--container-->
	</div>
	<!--End footer bar-->
</footer>
</div>
<script src="../assets/js/vendors/jquery.min.js"></script>
<script src="../assets/js/vendors/modernizr.min.js"></script>
<script src="../assets/js/vendors/bootstrap.min.js"></script>
<script src="../assets/js/vendors/bootstrap-datepicker.min.js"></script>
<script src="../assets/js/vendors/owl.carousel.min.js"></script>
<script src="../assets/js/vendors/jquery.slicknav.min.js"></script>
<script src="../assets/js/common.js"></script>
</body>
</html>