<?php
require('../vendor/autoload.php');
use App\Hotels\Hotels;
$hotels = new Hotels();




if(!empty($_GET)) {
	$hotels->setData($_GET);
	$single_hotels = $hotels->view();
}else{
	echo "No post selected";
	header("Location:hotel-list.php");
}


include("header.php");

?>

<!--header-->
    <main>
    	<div id="tsp_hotel_detail" class="tsp-box-hotel-content">
            <section class="tsp-title-breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="tsp-title col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
                            <h1><span>Hotel <?php echo $single_hotels->hotel_name ?></span></h1>
                            <div class="tsp-description">
								<p><i class="fa fa-map-marker"></i> <?php echo $single_hotels->hotel_address; ?></p>
								<p><i class="fa fa-phone"></i> <?php echo $single_hotels->hotel_contact_number; ?></p>
								<p><i class="fa fa-envelope"></i> <?php echo $single_hotels->hotel_email; ?></p>
                               <!-- <div class="tsp-star-rating">
                                    <span class="tsp-hotel-rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                        <i class="fa fa-star-o"></i>
                                </div>-->
                            </div>
                        </div><!-- div title head page -->
                        <!--<div class="tsp-breadcumb tsp-breadcrumb-description col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
                            <ul>
                                <li><a href="hotel-detail.html#">Home</a></li>
                                <li>/</li>
                                <li><a href="hotel-detail.html#">Hotels</a></li>
                                <li>/</li>
                                <li><span>Detail</span></li>
                            </ul>
                        </div><!-- div breadcrumb -->
                    </div><!-- div row -->
                </div>
            </section>
            <div class="tsp-page-tpl tsp-hotel-detail-tpl">
        		<section class="tsp-hotel-slide">
	<div class="container">
		<div class="row">
			<div class="tsp-box-slideshow">
				<ul class="pgwSlider owl-carousel owl-theme">



					<?php

					$all_img_string = $single_hotels->hotel_pictures;
					$arryImage = explode(",", $all_img_string);

					//var_dump($arryImage);


					foreach($arryImage as $single_image){


					?>


				    <li><img src="../<?php echo $single_image; ?>" alt="<?php  ?>"></li>


					<?php } ?>
				</ul>
				<div class="tsp-nav-slide-show">
					<div class="tsp-pre"><i class="fa fa-caret-up"></i></div>
					<div class="tsp-next"><i class="fa fa-caret-down"></i></div>
				</div>
				<div class="tsp-price-hotel-item col-md-3 col-sm-3 col-xs-12">
					<a href="hotel-room_list.php?hotel_id=<?php echo $single_hotels->id ?>"><button>BOOK NOW</button></a>
				</div>
			</div>
		</div><!--row-->
	</div>
</section>

				<section class="tsp-nav-hotel-detail">
					<div class="container">
						<h2>All abouts the hotels</h2>
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="hotel-details.php#home">ABOUT THE HOTEL</a></li>
							<li><a data-toggle="tab" href="hotel-details.php#menu1">AVAILABILITY</a></li>
							<li><a data-toggle="tab" href="hotel-details.php#menu2">RELATED HOTELS</a></li>
							<li><a data-toggle="tab" href="hotel-details.php#menu3">LOCATION</a></li>
						</ul>

						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">
								<div class="container">
									<div class="row">
										<div class="tsp-content-hotel-detail tsp-box-hotel-content">
											<h2>ABOUT THE HOTEL</h2>
											<div class="tsp-content">
												<?php echo $single_hotels->hotel_details; ?></div>
										</div>
									</div>
								</div></div>
							<div id="menu1" class="tab-pane fade">
								<section id="availability">
									<div class="container">
										<div class="row">
											<div class="tsp-content-hotel-detail tsp-content tsp-box-hotel-content">
												<div class="tsp-description-service">
													<div class="tsp-service-hotel col-md-3 col-sm-6 col-xs-6 tsp-full-xs tsp-no-padding-left">
														<ul>
															<li><i class="fa fa-car"></i> Free Parking</li>
															<li><i class="fa fa-cutlery"></i> Free Breakfast</li>
															<li><i class="fa fa-bus"></i> Free Tour</li>
															<li><i class="fa fa-child"></i> Swimming pool</li>
														</ul>
													</div>
													<div class="tsp-service-hotel col-md-3 col-sm-6 col-xs-6 tsp-full-xs">
														<ul>
															<li><i class="fa fa-car"></i> Free Parking</li>
															<li><i class="fa fa-cutlery"></i> Free Breakfast</li>
															<li><i class="fa fa-bus"></i> Free Tour</li>
															<li><i class="fa fa-child"></i> Swimming pool</li>
														</ul>
													</div>
													<div class="tsp-service-hotel col-md-3 col-sm-6 col-xs-6 tsp-full-xs">
														<ul>
															<li><i class="fa fa-car"></i> Free Parking</li>
															<li><i class="fa fa-cutlery"></i> Free Breakfast</li>
															<li><i class="fa fa-bus"></i> Free Tour</li>
															<li><i class="fa fa-child"></i> Swimming pool</li>
														</ul>
													</div>
													<div class="tsp-service-hotel col-md-3 col-sm-6 col-xs-6 tsp-full-xs tsp-no-padding-right">
														<ul>
															<li><i class="fa fa-car"></i> Free Parking</li>
															<li><i class="fa fa-cutlery"></i> Free Breakfast</li>
															<li><i class="fa fa-bus"></i> Free Tour</li>
															<li><i class="fa fa-child"></i> Swimming pool</li>
														</ul>
													</div>
												</div>
											</div>
										</div><!--row-->
									</div>
								</section>

							</div>
							<div id="menu2" class="tab-pane fade">
								<div class="container">
									<div class="row">
										<div class="tsp-box-hotel-content">
											<h2>RELATED HOTELS</h2>
											<div class="tsp-hotel-relate tsp-grid-hotel">
												<article class="col-md-4 col-sm-4 col-xs-6 tsp-full-xs tsp-hotel-item">
													<div class="tsp-image">
														<div class="tsp-img">
															<a href="hotel-detail.html#"><img src="../assets/images/hotel/relate-hotel-1.jpg" alt="HOTEL DELUXE AURINA"></a>
														</div>
														<div class="tsp-hotel-hover">
															<a href="hotel-detail.html#"><button>BOOK NOW</button></a>
														</div>
													</div>
													<div class="tsp-hotel-content">
														<h2><a href="hotel-detail.html#">HOTEL DELUXE AURINA</a></h2>
														<div class="tsp-price-rate">
															<div class="tsp-price col-md-6 col-sm-6 col-xs-6">
																<strong>$110</strong><span> per night</span>
															</div>
															<div class="tsp-star-rating col-md-6 col-sm-6 col-xs-6">
									<span class="tsp-hotel-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
																<i class="fa fa-star"></i>
															</div>
														</div>
														<p>Pack your bags - it’s time to embark on a getaway. Whether you’re craving a solo retreat or promising your family a vacation to remember, book one of the best hotel here. You’ll certainly have unforgettable memory here.</p>
													</div>
												</article><!-- End Item -->
												<article class="col-md-4 col-sm-4 col-xs-6 tsp-full-xs tsp-hotel-item">
													<div class="tsp-image">
														<div class="tsp-img">
															<a href="hotel-detail.html#"><img src="../assets/images/hotel/relate-hotel-2.jpg" alt="PRINCIPE HOTEL DA MITA"></a>
														</div>
														<div class="tsp-hotel-hover">
															<a href="hotel-detail.html#"><button>BOOK NOW</button></a>
														</div>
													</div>
													<div class="tsp-hotel-content">
														<h2><a href="hotel-detail.html#">PRINCIPE HOTEL DA MITA</a></h2>
														<div class="tsp-price-rate">
															<div class="tsp-price col-md-6 col-sm-6 col-xs-6">
																<strong>$110</strong><span> per night</span>
															</div>
															<div class="tsp-star-rating col-md-6 col-sm-6 col-xs-6">
									<span class="tsp-hotel-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
																<i class="fa fa-star"></i>
															</div>
														</div>
														<p>Pack your bags - it’s time to embark on a getaway. Whether you’re craving a solo retreat or promising your family a vacation to remember, book one of the best hotel here. You’ll certainly have unforgettable memory here.</p>
													</div>
												</article><!-- End Item -->
												<article class="col-md-4 col-sm-4 col-xs-6 tsp-full-xs tsp-hotel-item">
													<div class="tsp-image">
														<div class="tsp-img">
															<a href="hotel-detail.html#"><img src="../assets/images/hotel/relate-hotel-3.jpg" alt="SAMANDARO QUADRO"></a>
														</div>
														<div class="tsp-hotel-hover">
															<a href="hotel-detail.html#"><button>BOOK NOW</button></a>
														</div>
													</div>
													<div class="tsp-hotel-content">
														<h2><a href="hotel-detail.html#">SAMANDARO QUADRO</a></h2>
														<div class="tsp-price-rate">
															<div class="tsp-price col-md-6 col-sm-6 col-xs-6">
																<strong>$110</strong><span> per night</span>
															</div>
															<div class="tsp-star-rating col-md-6 col-sm-6 col-xs-6">
									<span class="tsp-hotel-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
																<i class="fa fa-star"></i>
															</div>
														</div>
														<p>Pack your bags - it’s time to embark on a getaway. Whether you’re craving a solo retreat or promising your family a vacation to remember, book one of the best hotel here. You’ll certainly have unforgettable memory here.</p>
													</div>
												</article><!-- End Item -->
											</div>
										</div>
									</div><!--row-->
								</div>


							</div>
							<div id="menu3" class="tab-pane fade">


							</div>
						</div>
					</div>

				</section>




				<section id="location">
					<div class="container">
						<div class="row">
							<div class="tsp-box-hotel-content">
								<h2>LOCATION</h2>
								<div class="tsp-map-horizontal">
									<div id="tsp_map" data-lat="<?php echo $single_hotels->hotel_latitude; ?>" data-lng="<?php echo $single_hotels->hotel_longitude; ?>">
									</div>
								</div><!--Map contact-->
							</div>
						</div><!--row-->
					</div>
				</section>

            <section id="tsp_subcribe_news">
	<div class="container">
		<div class="row">
			<div class="tsp-content-subscribe">
				<div class="tsp-text-subscibe col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
					<h2>Get the latest offers</h2>
					<p>Subscribe to our newsletter to receive news & updates.</p>
				</div>
				<div class="ts-form-subscibe col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
					<form action="hotel-detail.html#" name="formSubscibe">
						<i class="fa fa-envelope-o"></i>
						<input type="email" name="yourEmail" placeholder="Your email here">
						<button type="submit">Discovery now</button>
					</form>
				</div>
			</div>
		</div><!-- Div row -->
	</div>
</section>
    	</div>
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
									<a href="hotel-detail.html#" title="Facebook"><i class="fa fa-facebook-square"></i></a>
								</li>
								<li>
									<a href="hotel-detail.html#" title="Twitter"><i class="fa fa-twitter-square"></i></a>
								</li>
								<li>
									<a href="hotel-detail.html#" title="Pinterest"><i class="fa fa-pinterest-square"></i></a>
								</li>
								<li>
									<a href="hotel-detail.html#" title="Google plus"><i class="fa fa-google-plus-square"></i></a>
								</li>
								<li>
									<a href="hotel-detail.html#" title="Tumblr"><i class="fa fa-tumblr-square"></i></a>
								</li>
								<li>
									<a href="hotel-detail.html#" title="Youtube"><i class="fa fa-youtube-square"></i></a>
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
									<a href="hotel-detail.html#" target="_blank">
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
									<a href="hotel-detail.html#"><img src="../assets/images/flickr-1.jpg" alt="Instagram 1"></a>
								</li>
								<li>
									<a href="hotel-detail.html#"><img src="../assets/images/flickr-2.jpg" alt="Instagram 2"></a>
								</li>
								<li>
									<a href="hotel-detail.html#"><img src="../assets/images/flickr-3.jpg" alt="Instagram 3"></a>
								</li>
								<li>
									<a href="hotel-detail.html#"><img src="../assets/images/flickr-4.jpg" alt="Instagram 4"></a>
								</li>
								<li>
									<a href="hotel-detail.html#"><img src="../assets/images/flickr-5.jpg" alt="Instagram 5"></a>
								</li>
								<li>
									<a href="hotel-detail.html#"><img src="../assets/images/flickr-6.jpg" alt="Instagram 6"></a>
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
						<li><a href="hotel-detail.html#">Home</a></li>
						<li><a href="hotel-detail.html#">About</a></li>
						<li><a href="hotel-detail.html#">Hotels</a></li>
						<li><a href="hotel-detail.html#">Tours</a></li>
						<li><a href="hotel-detail.html#">Contacts</a></li>
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
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBFGfXl6ta7ZL0_MXQnIXyNGcR2mql8PBA&libraries=places"></script>
<script src="../assets/js/vendors/gmap3.min.js"></script>
<script src="../assets/js/shortcodes/map-boxed.js"></script>
<script src="../assets/js/vendors/pgwslide.min.js"></script>
<script src="../assets/js/common/slide-show.js"></script>
</body>
</html>