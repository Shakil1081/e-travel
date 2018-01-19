<?php
include "views/header.php";



require_once("vendor/autoload.php");
use App\Message\Message;
use App\Hotels\Hotels;
use App\Utility\Utility;


$hotels = new Hotels();
$allData = $hotels->index();

?>
<!--header-->
    <main>
    	<section id="tsp_slider">
  	<div id="tsp_slider_main" class="carousel slide">
      	<!-- Dots slider -->

  		<div class="carousel-inner" role="listbox">
      		<div class="item active">
      			<div class="tsp-slider-phone hidden-md hidden-lg">
      				<div class="tsp-slide-zoom">
	      				<img src="assets/images/slider/slider-1.jpg" alt="Slider 1 Mobile">
	      			</div>
      			</div>
      			<div class="tsp-slider-lg hidden-sm hidden-xs">
              <div class="tsp-img-big">
                <img src="assets/images/slider/slider-1-bg.png" alt="Slider 1">
              </div>
	      			
	      			<div class="tsp-caption-slider">
                <div class="tsp-img-big-bg">
                  <img src="assets/images/slider/slider-1-bg.png" alt="Slider 1">
                </div>
                <div class="container">
                  <div class="row">
                    <div class="tsp-content">


                      <div class="tsp-fly" data-animation="animated bounceInRight">
                        <img src="assets/images/slider/fly.png" alt="icon plan">
                      </div>
                      <div class="tsp-bg-liberty">
                        <img src="assets/images/slider/slider-bg-liberty.jpg" alt="background statue of Liberty">
                      </div>
                      <div class="tsp-statue-of-Liberty" data-animation="animated fadeInUp">
                        <img src="assets/images/slider/statue-of-Liberty.png" alt="statue of Liberty">
                      </div>
                      <div class="tsp-zeppelins-small" data-animation="animated bounceInUp">
                        <img src="assets/images/slider/small-kkc.png" alt="zeppelins small">
                      </div>
                      <div class="tsp-zeppelins-big" data-animation="animated bounceInLeft">
                        <img src="assets/images/slider/big-kkc.png" alt="zeppelins Big">
                      </div>
                      <div class="tsp-bg-house">
                        <img src="assets/images/slider/slider-bg-house.jpg" alt="background House">
                      </div>
                      <div class="tsp-house-slider" data-animation="animated fadeInUp">
                        <img src="assets/images/slider/slider-house.png" alt="House slider">
                      </div>
                    </div><!-- content caption -->
	      					</div>
	      				</div>

	      			</div><!-- box caption slider -->
      			</div>
      		</div>
      		<div class="item">
      			<div class="tsp-slide-zoom">
      				<img src="assets/images/slider/slider-2.jpg" alt="Slider 2">
      			</div>
      		</div>
  		</div>
      	<!-- Nav btn next/prev slider -->
      <div class="tsp-nav-slider hidden-lg">
        <a class="left carousel-control" href="index.php#tsp_slider_main" role="button" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="index.php#tsp_slider_main" role="button" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    	<div class="tsp-search-home">
    		<section id="tsp_search_booking">
	<div class="container">
		<div class="row">
			<div class="tsp-search-booking">
				<form action="index.php#" name="formSearchHotel" class="form-inline">
					<div class="form-group">
						<label for="email">Type hotel name</label>
						<input type="email" class="form-control" id="email" placeholder="Hotel...." style="width: 100%;">
					</div>
				</form>
		</div><!-- div row -->
	</div>
</section>
    	</div>
  	</div>
</section>

        <section id="tsp_hot_tour">
    <div class="container">
        <div class="row">
            <div class="tsp-title-home">
                <h2>Most popular hotels </h2>
            </div>
            <div class="hot-tours-shortcode">
                <div class="owl-carousel owl-theme tsp-owl-carousel" data-item-lg="3" data-item-md="2" data-item-sm="1">
<!--					--><?php
//
//					$all_img_string = $single_hotels->hotel_pictures;
//					$arryImage = explode(",", $all_img_string);
//
//					//var_dump($arryImage);
//
//
//					foreach($arryImage as $single_image){
//
//
//						?>
<!---->
<!---->
<!--						<li><img src="../--><?php //echo $single_image; ?><!--" alt="--><?php // ?><!--"></li>-->
<!---->
<!---->
<!--					--><?php //} ?>

                    <?php foreach($allData as $singleData){

						$imgArray = explode(",",$singleData->hotel_pictures);

						shuffle($imgArray);
						?>


					<div class="item hot-tours-shortcode-item">
                        <img src="<?php echo $imgArray[0] ?>" alt="hot tour 1" height="320px">
                        <div class="info-summary">
                            <span class="name-add"><?php echo $singleData->hotel_name ?></span>
                        </div>
                        <div class="info-hidden">
                            <h4><strong><?php echo $singleData->hotel_name ?></strong></h4>
                            <div class="price"><h5>At <?php echo $singleData->hotel_location ?></h5></div>
                            <a href="views/hotel-details.php?id=<?php echo $singleData->id; ?>">View more...</a>
                        </div>
                    </div>
					<?php } ?>
                </div>
                <div class="all-offers">
                    <a href="views/hotel-list.php">All Hotels</a>
                </div>
            </div>
        </div>
    </div>
</section>
        <section id="tsp_our_services">
	<div class="container tsp-no-padding">
		<div class="tsp-title-home">
			<h2>Our Services</h2>
			<p>Choose a hotel. We will support you with booking airplane ticket and comfortable hotel room. We do believe you will have the best trips ever.</p>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="our-service-item">
					<h3>RESTAURANT</h3>
					<p>Our restaurant offer thousands of meals. Come and enjoy it!</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="our-service-item">
					<h3>ROOMS</h3>
					<p>Standard room, twin room, etc. All is available with us. </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="our-service-item">
					<h3>BAR</h3>
					<p>Having an unforgettable night on the top of 5-star hotels</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="our-service-item">
					<h3>GYM</h3>
					<p>Keeping fit with a team of professional instructors.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="our-service-item">
					<h3>SPA</h3>
					<p>Improve your mind, body and spirit, with therapeutic spa.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="our-service-item">
					<h3>CAR PARKING</h3>
					<p>Our hotel lot has parking for up to 200 cars without fee.</p>
				</div>
			</div>
		</div>
	</div>
</section>

        <section id="tsp_served">
	<div class="container">
		<div class="row">
			<div class="tsp-title-home">
				<h2>We Are Proud To Have Served</h2>
			</div>
			<div class="tsp-content-counter">
				<div class="tsp-countUp col-md-2 col-sm-4 col-xs-6 tsp-full-xs tsp-no-padding-left tsp-item-1">
				    <div class="tsp-box-counter">
				    	<i class="fa fa-suitcase"></i>
						<div class="tsp-count">
							<p class="tsp-number">123</p>
							<p class="tsp-section">Tour</p>
						</div>
				    </div>
				</div>
				<div class="tsp-countUp col-md-2 col-sm-4 col-xs-6 tsp-full-xs tsp-item-1">
					<div class="tsp-box-counter">
						<i class="fa fa-empire"></i>
						<div class="tsp-count">
							<p class="tsp-number">536</p>
							<p class="tsp-section">Holidays</p>
						</div>
					</div>
				</div>
				<div class="tsp-countUp col-md-2 col-sm-4 col-xs-6 tsp-full-xs tsp-item-1">
					<div class="tsp-box-counter">
						<i class="fa fa-empire"></i>
						<div class="tsp-count">
							<p class="tsp-number">439</p>
							<p class="tsp-section">Hotels</p>
						</div>
					</div>
				</div>
				<div class="tsp-countUp col-md-2 col-sm-4 col-xs-6 tsp-full-xs tsp-item-1">
					<div class="tsp-box-counter">
						<i class="fa fa-building-o"></i>
						<div class="tsp-count">
							<p class="tsp-number">296</p>
							<p class="tsp-section">Flights</p>
						</div>
					</div>
				</div>
				<div class="tsp-countUp col-md-2 col-sm-4 col-xs-6 tsp-full-xs tsp-item-1">
					<div class="tsp-box-counter">
						<i class="fa fa-birthday-cake"></i>
						<div class="tsp-count">
							<p class="tsp-number">439</p>
							<p class="tsp-section">Parties</p>
						</div>
					</div>
				</div>
				<div class="tsp-countUp col-md-2 col-sm-4 col-xs-6 tsp-full-xs tsp-no-padding-right tsp-item-1">
					<div class="tsp-box-counter">
						<i class="fa fa-smile-o"></i>
						<div class="tsp-count">
							<p class="tsp-number">2689</p>
							<p class="tsp-section">Happy customers</p>
						</div>
					</div>
				</div>
			</div><!-- dic box content served -->
		</div><!-- div row -->
	</div>
</section>
        <section id="tsp_our_blog_list_home" class="shortcode-our-blog-warpper">
    <div class="container">
    	<div class="row">
            <div class="tsp-title-home">
    		  <h2>Well decorated rooms</h2>
            </div>
    		<div class="owl-carousel owl-theme tsp-owl-carousel shortcode-our-blog" data-item-lg="2" data-item-md="2" data-item-sm="1">
                <?php


				use App\Rooms\Rooms;
				$rooms = new Rooms();

					$all_rooms = $rooms->index();

				foreach($all_rooms as $single_room){

					$imgArray = explode(",",$single_room->room_pictures);

					shuffle($imgArray);
					?>


					<div class="item our-blog-shortcode-item">
						<img src="<?php echo $imgArray[0] ?>" alt="Blog 1" style="max-height: 250px">
						<div class="info-summary-blog">
							<h3><a href="index.php#">At hotel <?php echo $single_room->hotel_name ?></a></h3>
							<p>
								<?php echo $single_room->room_details ?>
							</p>
							<div class="read-more"><a href="views/room-details.php?id=<?php echo $single_room->id ?>">Book now</a></div>
						</div>

					</div>

<?php } ?>

            </div>
    	</div>
    </div>
</section>

    </main>
   <?php include "views/footer.php"?>