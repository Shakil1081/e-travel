<?php
require('../vendor/autoload.php');
use App\Hotels\Hotels;
$hotels = new Hotels();

$all_hotels = $hotels->index();

include("header.php");
?>


<!--header-->
    <main>
        <section class="tsp-title-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="tsp-title col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
                        <h1>Hotels <span>view</span></h1>
                    </div><!-- div title head page -->
                    <div class="tsp-breadcumb col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
                        <ul>
                            <li><a href="hotel-list.html#">Home</a></li>
                            <li>/</li>
                            <li><span>Hotels</span></li>
                        </ul>
                    </div><!-- div breadcrumb -->
                </div><!-- div row -->
            </div>
        </section>
        <div class="tsp-page-tpl">
        	<section class="tsp-search-hotel">

</section>
            <section id="tsp_hotel_list" class="tsp-hotel-list">
	<div class="container">
		<div class="row">
			<div class="tsp-box-hotel-list">
				<!-- Start article of hotel -->



				<?php

				foreach($all_hotels as $single_hotel){



					$all_img_string = $single_hotel->hotel_pictures;
					$arryImage = explode(",", $all_img_string);


					?>



				<article class="col-md-6 col-sm-6 col-xs-6 tsp-full-xs tsp-hotel-item tsp-no-padding-left">
					<div class="tsp-around">
						<div class="tsp-image col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<a href="hotel-details.php?id=<?php echo $single_hotel->id; ?>"><img src="../<?php echo $arryImage[0]; ?>" alt="Your Product Title Here"></a>
						</div>
						<div class="tsp-hotel-content col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<h2><a href="hotel-details.php?id=<?php echo $single_hotel->id; ?>"><?php echo $single_hotel->hotel_name; ?></a></h2>
<!--							<div class="tsp-price">$589</div>-->
							<!--<div class="tsp-star-rating">
								<span class="tsp-hotel-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
							</div>-->

							<p><?php echo $single_hotel->hotel_details; ?></p>
							<div class="tsp-action">
								<a href="hotel-room_list.php?hotel_name=<?php echo $single_hotel->hotel_name; ?>"><i class="fa fa-ship"></i> Book now</a>
								<a href="hotel-details.php?id=<?php echo $single_hotel->id; ?>"><i class="fa fa-file-text-o"></i> View detail</a>
							</div>
						</div>
					</div>
				</article><!-- End Item -->

				<?php } ?>



			<!-- End article of hotel -->
			</div>
			<div class="tsp-btn-load-more col-xs-12 col-sm-12 col-md-12 tsp-no-padding">
				<button class="tsp-more-hotel">LOAD MORE HOTELS</button>
			</div>
		</div>
	</div>
</section>
        </div>
        <section id="tsp_subcribe_news">
	<div class="container">
		<div class="row">
			<div class="tsp-content-subscribe">
				<div class="tsp-text-subscibe col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
					<h2>Get the latest offers</h2>
					<p>Subscribe to our newsletter to receive news & updates.</p>
				</div>
				<div class="ts-form-subscibe col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
					<form action="hotel-list.html#" name="formSubscibe">
						<i class="fa fa-envelope-o"></i>
						<input type="email" name="yourEmail" placeholder="Your email here">
						<button type="submit">Discovery now</button>
					</form>
				</div>
			</div>
		</div><!-- Div row -->
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
									<a href="hotel-list.html#" title="Facebook"><i class="fa fa-facebook-square"></i></a>
								</li>
								<li>
									<a href="hotel-list.html#" title="Twitter"><i class="fa fa-twitter-square"></i></a>
								</li>
								<li>
									<a href="hotel-list.html#" title="Pinterest"><i class="fa fa-pinterest-square"></i></a>
								</li>
								<li>
									<a href="hotel-list.html#" title="Google plus"><i class="fa fa-google-plus-square"></i></a>
								</li>
								<li>
									<a href="hotel-list.html#" title="Tumblr"><i class="fa fa-tumblr-square"></i></a>
								</li>
								<li>
									<a href="hotel-list.html#" title="Youtube"><i class="fa fa-youtube-square"></i></a>
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
									<a href="hotel-list.html#" target="_blank">
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
									<a href="hotel-list.html#"><img src="../assets/images/flickr-1.jpg" alt="Instagram 1"></a>
								</li>
								<li>
									<a href="hotel-list.html#"><img src="../assets/images/flickr-2.jpg" alt="Instagram 2"></a>
								</li>
								<li>
									<a href="hotel-list.html#"><img src="../assets/images/flickr-3.jpg" alt="Instagram 3"></a>
								</li>
								<li>
									<a href="hotel-list.html#"><img src="../assets/images/flickr-4.jpg" alt="Instagram 4"></a>
								</li>
								<li>
									<a href="hotel-list.html#"><img src="../assets/images/flickr-5.jpg" alt="Instagram 5"></a>
								</li>
								<li>
									<a href="hotel-list.html#"><img src="../assets/images/flickr-6.jpg" alt="Instagram 6"></a>
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
						<li><a href="hotel-list.html#">Home</a></li>
						<li><a href="hotel-list.html#">About</a></li>
						<li><a href="hotel-list.html#">Hotels</a></li>
						<li><a href="hotel-list.html#">Tours</a></li>
						<li><a href="hotel-list.html#">Contacts</a></li>
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