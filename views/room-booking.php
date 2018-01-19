<?php
require('../vendor/autoload.php');
use App\Rooms\Rooms;
$rooms = new Rooms();

if(!empty($_GET)) {
	$rooms->setData($_GET);
	$single_room = $rooms->view();
}else{
	echo "No post selected";
	header("Location:hotel-room_list.php");
}


$all_img_string = $single_room->room_pictures;
$arryImage = explode(",", $all_img_string);

include("header.php");
?>

<!--header-->
    <main>
    	<section class="tsp-title-breadcrumb">
            <div class="container">
                <div class="row">
				<h2><?php echo !empty($new_users_msg)? $new_users_msg:''; ?></h2>
                    <div class="tsp-title col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
                        <h1>Hotels <span>Booking</span></h1>
                    </div><!-- div title head page -->
                    <div class="tsp-breadcumb col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
                        <ul>
                            <li><a href="room-booking.php#">Home</a></li>
                            <li>/</li>
                            <li><a href="room-booking.php#">Hotels</a></li>
                            <li>/</li>
                            <li><span>Booking</span></li>
                        </ul>
                    </div><!-- div breadcrumb -->
                </div><!-- div row -->
            </div>
        </section>
        <section id="tsp_booking_hotel">
	<div class="container">
		<div class="row">
			<div class="tsp-box-hotel-content">
				<div class="tsp-hotel-cart">
				    <h2>YOUR BOOKING DETAILS</h2>
					<div class="tsp-cart-item">
						<div class="tsp-img col-md-4 col-sm-4 col-xs-6 tsp-full-xs tsp-no-padding-left">
							<a href="room-booking.php#"><img src="../<?php shuffle($arryImage); echo $arryImage[0] ?>" alt="hotel booking 1"></a>
						</div>
						<form action="user_registration_second.php" name="formHotelBooking" method="post">
						<div class="tsp-content-hotel col-md-5 col-sm-5 col-xs-6 tsp-full-xs">
							<h3><a href="room-booking.php#"><?php echo $single_room->hotel_name; ?></a></h3>

							<div class="tsp-hotel-detail">
								<div class="tsp-detail-item">PRICE: TK.<span id="room_price"><?php echo $single_room->room_price; ?></span></div>

								<div class="tsp-detail-item tsp-dat">CHECKIN: <input type="date" name="checkin_date" placeholder="Select checkin date.." id="checkin_date"/></div>
								<div class="tsp-detail-item">ROOM(s): <input type="number" name="total_rooms" value="1" id="room_quentity" min="1"/></div>
								<div class="tsp-detail-item">STAY: <span> <input type="number" name="stay_days_hotel" value="1" id="stay_days_hotel" min="1"/></span></div>
								<div class="tsp-detail-item"><span>ROOM CATEGORY: </span><?php echo $single_room->room_category; ?><input type="hidden" name="room_category" value="<?php echo $single_room->room_category; ?>"/></div>
							</div>
						</div>
						<div class="tsp-to-price col-md-3 col-sm-3 col-xs-12 tsp-no-padding-right">
							<p class="tsp-price-cart"><span>Total: </span><span id="total_price" style="font-weight: bold"><?php echo $single_room->room_price; ?></span></p>
							<input type="hidden" id="total_price_hidden" value="<?php echo $single_room->room_price; ?>"  name="total_price"/>
						</div>
					</div>
				</div>
			</div>
			<div class="tsp-form-infomation">
					<div class="tsp-col-1 tsp-form-site col-md-6 col-sm-12 col-xs-12 tsp-full-xs tsp-no-padding-left">
						<h2>If You are new user. Please fill up it.</h2>
						<div class="tsp-content-info">
							<div class="form-group col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
								<label>First name</label>
								<input type="text" placeholder="Enter your first name..." name="first_name">
								<input type="hidden" value="<?php echo $single_room->id; ?>" name="room_id">
								<input type="hidden" value="<?php echo $single_room->hotel_name; ?>" name="hotel_name">
								<input type="hidden" value="<?php echo $single_room->hotel_location; ?>" name="hotel_location">
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
								<label>Last name</label>
								<input type="text" placeholder="Enter your last name..." name="last_name">
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
								<label>Email</label>
								<input type="text" placeholder="Enter your email.." name="email">
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
								<label>Phone</label>
								<input type="text" placeholder="Enter your phone number..." name="phone">
							</div>
							<div class="form-group tsp-group-address">
								<label>address</label>
								<input type="text" placeholder="Enter your address.." name="address" class="form-address">
							</div>
							<div class="form-group">
								<label>Country</label>
								<input type="text" placeholder="Enter your country.." name="country" value="Bangladesh" />
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
								<label>City</label>
								<input type="text" placeholder="Select your state" name="city">
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
								<label>Zip code</label>
								<input type="text" placeholder="Enter your zipcode.." name="zipcode">
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12">
								<label>Password</label>
								<input type="password" placeholder="Enter your password here..." name="password">
							</div>
						</div>
					</div>
					<div class="tsp-col-2 col-md-6 col-sm-12 col-xs-12 tsp-no-padding-right">
						<h2>Payment method</h2>
						<div class="tsp-content-info">
							<div class="tsp-method-payment">
								<div class="tsp-payment-item">
									<div class="form-group">
										<label>
											<input type="radio" name="methodPayment" checked="checked">
											Direct bank transfer
										</label>
										<span>Send money directly to our bank account in over 40 countries when you transfer money online with Western Union.</span>
									</div>
								</div>
								<div class="tsp-payment-item">
									<div class="form-group">
										<label>
											<input type="radio" name="methodPayment">
											Credit card
										</label>
										<div class="tsp-img-des">
											<img src="../assets/images/hotel/payment-visa.jpg" alt="payment visa image">
											<img src="../assets/images/hotel/payment-mastercard.jpg" alt="payment mastercard image">
											<img src="../assets/images/hotel/payment-paypal.jpg" alt="payment paypal image">
										</div>
									</div>
								</div>
								<div class="tsp-payment-item">
									<div class="form-group">
										<label>
											<input type="radio" name="methodPayment">
											Direct bank transfer
										</label>
										<div class="tsp-img-des">
											<img src="../assets/images/hotel/payment-paypal.jpg" alt="payment Paypal image">
										</div>
									</div>
								</div>
							</div>
							<button type="submit" name="booking" class="tsp-btn-site col-md-6 col-sm-12 col-xs-12 tsp-full-xs tsp-no-padding-right pull-right text-center">Pay and Book Now</button>
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
			$('#total_price_hidden').val(price*total*days);


		});

		$('.tsp-date').datepicker({
			//format: 'dd.mm.yyyy',
		});



	});

</script>
</body>
</html>