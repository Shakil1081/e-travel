<?php
require('../vendor/autoload.php');
use App\Rooms\RoomsOrder;
use App\Users\Users;

//$rooms = new Rooms();
$rooms_order = new RoomsOrder();
$users = new Users();


if(!isset($_SESSION)) {
	session_start();
}
//var_dump($_POST); die();

 $all_post_name = $_POST;

$_SESSION['all_info'] = $all_post_name;
if(isset($_POST['booking'])){
	//if(isset($_SESSION['email'])){
	if(!isset($_SESSION['customer_details_id'])){
		
		$users->setData($_POST);
		$users->newUser();
		$user_row = $users->lastUserView();
		if($user_row){
			$all['customer_details_id'] = $user_row->id;
			$_SESSION['existing_customer_order_pending'] = $all;
			$_SESSION['existing_customer_order_pending']['password'] = $_POST['password'];
			$rooms_order->setData($_SESSION);
			$rooms_order->setData($_POST);
			$rooms_order->setData($all);
			$rooms_order->newOrder($user_row->id);
			
			header("location:payment-success.php?success_with=new_user");
		}else{
			$_SESSION['new_users_msg'] = "Please fillup all fields Or login.";
			header("location:room-booking.php");
		}
	}elseif(isset($_SESSION['customer_details_id']))
	{
		$all = $_SESSION['all_info'];
		$all = $users->viewById($_SESSION['customer_details_id']);
		$all['customer_details_id'] = $_SESSION['customer_details_id'];
		$_SESSION['existing_customer_order_pending'] = $all;
		//var_dump($all); die();
		
		$rooms_order->setData($_SESSION);
		$rooms_order->setData($_POST);
		$rooms_order->setData($all);
		$rooms_order->newOrder($_SESSION['customer_details_id']);
		header("location:payment-success.php?success_with=new_user");
	}
}else{
	$_SESSION['new_users_msg'] = "Please fillup all fields Or login.";
	header("location:room-booking.php");
}
//var_dump($_SESSION['all_info']);


include("header.php");

?>


<!--header-->
    <main>
        <section id="tsp_booking_hotel">
	<div class="container">
		<div class="row">
			<div class="tsp-form-infomation">
				<form action="hotel_book_and_registration.php" name="user_registration_and_order" method="post">
					<div class="tsp-col-1 tsp-form-site col-md-6 col-sm-12 col-xs-12 ">
						<h2>Continue With Adding account</h2>
						<h4>Already have an account? <a href="login.php?order_pending=2">Login</a> to complete your order</h4>


						<div class="tsp-content-info">
							<div class="form-group col-md-12 col-sm-12 col-xs-12 ">
								<label>Email</label>
								<input type="text" placeholder="Enter your email.." name="email" value="<?php echo $_POST['email']; ?>">
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12">
								<label>Password</label>
								<input type="password" placeholder="Enter your password here..." name="password">
							</div>
							<button type="submit" class="tsp-btn-site col-md-12 col-sm-12 col-xs-12  text-center">Submit</button>

						</div>
					</div>

				</form>
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
									<a href="room-booking.php#" title="Facebook"><i class="fa fa-facebook-square"></i></a>
								</li>
								<li>
									<a href="room-booking.php#" title="Twitter"><i class="fa fa-twitter-square"></i></a>
								</li>
								<li>
									<a href="room-booking.php#" title="Pinterest"><i class="fa fa-pinterest-square"></i></a>
								</li>
								<li>
									<a href="room-booking.php#" title="Google plus"><i class="fa fa-google-plus-square"></i></a>
								</li>
								<li>
									<a href="room-booking.php#" title="Tumblr"><i class="fa fa-tumblr-square"></i></a>
								</li>
								<li>
									<a href="room-booking.php#" title="Youtube"><i class="fa fa-youtube-square"></i></a>
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
									<a href="room-booking.php#" target="_blank">
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
									<a href="room-booking.php#"><img src="../assets/images/flickr-1.jpg" alt="Instagram 1"></a>
								</li>
								<li>
									<a href="room-booking.php#"><img src="../assets/images/flickr-2.jpg" alt="Instagram 2"></a>
								</li>
								<li>
									<a href="room-booking.php#"><img src="../assets/images/flickr-3.jpg" alt="Instagram 3"></a>
								</li>
								<li>
									<a href="room-booking.php#"><img src="../assets/images/flickr-4.jpg" alt="Instagram 4"></a>
								</li>
								<li>
									<a href="room-booking.php#"><img src="../assets/images/flickr-5.jpg" alt="Instagram 5"></a>
								</li>
								<li>
									<a href="room-booking.php#"><img src="../assets/images/flickr-6.jpg" alt="Instagram 6"></a>
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
						<li><a href="room-booking.php#">Home</a></li>
						<li><a href="room-booking.php#">About</a></li>
						<li><a href="room-booking.php#">Hotels</a></li>
						<li><a href="room-booking.php#">Tours</a></li>
						<li><a href="room-booking.php#">Contacts</a></li>
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
<script src="../assets/js/vendors/jquery-ui.min.js"></script>

<script src="../assets/js/vendors/modernizr.min.js"></script>
<script src="../assets/js/vendors/bootstrap.min.js"></script>
<script src="../assets/js/vendors/bootstrap-datepicker.min.js"></script>
<script src="../assets/js/vendors/owl.carousel.min.js"></script>
<script src="../assets/js/vendors/jquery.slicknav.min.js"></script>
<script src="../assets/js/common.js"></script>


<script>
	$(document).ready(function() {



		$('#room_quentity, #stay_days_hotel').change(function(){
			var price = $('#room_price').text();
			var days = $('#stay_days_hotel').val();
			var total = $(this).val();
			$('#total_price').html(price*total*days);
		});

		$('.tsp-date').datepicker({
			//format: 'dd.mm.yyyy',
		});



	});

</script>
</body>
</html>