<?php
require('../vendor/autoload.php');
use App\Rooms\Rooms;
use App\Message\Message;
$rooms = new Rooms();



if(!isset($_SESSION)) {
	session_start();
}


include("header.php");

?>


<!--header-->
    <main>
        <section id="tsp_booking_hotel">
	<div class="container">
		<div class="row">
			<div class="tsp-form-infomation">
			<?php
			//if(Message::message() != ""){
				echo "<div class='alert alert-success'>";
                echo Message::message();
				echo '</div>';
			//}
            ?>
				<form action="registrationStore.php" method="post">
					<div class="tsp-col-1 tsp-form-site col-md-6 col-sm-12 col-xs-12 ">
						<h2>Continue With Adding account</h2>
						<h4>Already have an account? <a href="login.php">Login</a> to complete your order</h4>


						<div class="tsp-content-info">
							<div class="form-group col-md-12 col-sm-12 col-xs-12 ">
								<label>First Name</label>
								<input type="text" placeholder="Enter your first name.." name="first_name" required="">
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 ">
								<label>Last Name</label>
								<input type="text" placeholder="Enter your last name.." name="last_name">
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 ">
								<label> Contact Number</label>
								<input type="text" placeholder="Enter your Contact Number.." name="phone" required="">
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 ">
								<label>Email</label>
								<input type="text" placeholder="Enter your email.." name="email" required="">
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 ">
								<label> Address </label>
								<textarea name="address">Address here...</textarea>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 ">
								<label> City</label>
								<input type="text" placeholder="Enter your City..." name="city">
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 ">
								<label> Zip Code</label>
								<input type="text" placeholder="Enter your Zip Code..." name="zipcode">
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 ">
								<label> Country</label>
								<input type="text" placeholder="Enter your country..." name="country">
							</div>
							
							<div class="form-group col-md-12 col-sm-12 col-xs-12">
								<label>Password</label>
								<input type="password" placeholder="Enter your password here..." name="password" required="">
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