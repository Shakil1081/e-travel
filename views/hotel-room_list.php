<?php
require('../vendor/autoload.php');
use App\Rooms\Rooms;
$rooms = new Rooms();


if(isset($_GET['hotel_name'])) {

	$rooms->setData($_GET);

	$all_rooms = $rooms->indexByHotelName();
}else{
	$all_rooms = $rooms->index();
}




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

            <section id="tsp_hotel_list" class="tsp-hotel-list">
	<div class="container">
		<div class="row">
			<div class="tsp-box-hotel-list" id="all_post">
				<!-- Start article of hotel -->



				<?php

				foreach($all_rooms as $single_room){



					$all_img_string = $single_room->room_pictures;
					$arryImage = explode(",", $all_img_string);
					?>



				<article class="col-md-6 col-sm-6 col-xs-6 tsp-full-xs tsp-hotel-item tsp-no-padding-left">
					<div class="tsp-around">
						<div class="tsp-image col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<a href="hotel-details.php?id=<?php echo $single_room->id; ?>"><img src="../<?php  shuffle($arryImage); echo $arryImage[0]; ?>" alt="Your Product Title Here"></a>

						</div>
						<div class="tsp-hotel-content col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<h2><a href="room-details.php?id=<?php echo $single_room->id; ?>"><?php echo $single_room->hotel_name; ?><small>  <?php echo $single_room->room_category; ?> Category</small></a></h2>


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

							<p><?php echo $single_room->room_details; ?></p>

							<p>Price per room TK.<?php echo $single_room->room_price; ?></p>
							<div class="tsp-action">
								<a href="room-booking.php?id=<?php echo $single_room->id; ?>"><i class="fa fa-ship"></i> Book now</a>
								<a href="room-details.php?id=<?php echo $single_room->id; ?>"><i class="fa fa-file-text-o"></i> View detail</a>
							</div>
						</div>
					</div>
				</article><!-- End Item -->

				<?php } ?>



			<!-- End article of hotel -->
			</div>
			<div class="tsp-btn-load-more col-xs-12 col-sm-12 col-md-12 tsp-no-padding">
				<button class="tsp-more-hotel" id="load_more">LOAD MORE HOTELS</button>
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
  <?php include "footer.php"; ?>