<?php
if(!isset($_SESSION)) {
	session_start();
}
require('../vendor/autoload.php');
use App\Users\Users;
$users = new Users();

//var_dump($_SESSION);

if(isset($_GET['order_pending']) && $_GET['order_pending']==1){
	$all = $_SESSION['existing_customer_order_pending'];
	//var_dump($all);

	$email_exist_msg = "Your email is already registered! Please login to complete your order";
	if(    isset($_POST) && !empty($_POST['email']) && !empty($_POST['password'])        ){
		$users->setData($_POST);
		$single_user_row = $users->is_registered();
		if($single_user_row) {
			$userInfo = $users->lastUserView();
			$user_id = $userInfo->id;
			$all['customer_details_id'] = $user_id;
		}

		$_SESSION['existing_customer_order_pending'] = $all;
		header("Location:payment-success.php?order_pending=1");
		//die();
	}else
	{
		echo'not post';
		die();
	}
}elseif(isset($_GET['order_pending']) && $_GET['order_pending']==2){
	$all = $_SESSION['all_info'];

	$email_exist_msg = "Your email is already registered! Please login to complete your order";
	if(isset($_POST) && !empty($_POST['email']) && !empty($_POST['password']))
	{
		$users->setData($_POST);
		$single_user_row = $users->is_registered();
		if($single_user_row) {
			$userInfo = $users->lastUserView();
			$user_id = $userInfo->id;
			$all['customer_details_id'] = $user_id;
		}

		$_SESSION['existing_customer_order_pending'] = $all;
		var_dump($all);
		header("Location:payment-success.php?order_pending=1");
	}
}


if(!isset($_GET['order_pending']) && isset($_POST) && !empty($_POST['email']) && !empty($_POST['password'])){
$users->setData($_POST);
	$single_user_row = $users->login();
	if(!$single_user_row){
		$email_exist_msg ="user not found";
	}else {
		session_start();
		$user_id = $single_user_row->id;
		$_SESSION['customer_details_id'] = $user_id;
		header("Location:user/index.php");
	}
}


include("header.php");
?>


<!--header-->
    <main>



        <section id="tsp_login_page" class="tsp-page-tpl">
	<div class="container">
		<div class="row">
			<div class="tsp-box-content tsp-page-acc">
				<div class="tsp-form-login col-sm-6 col-sm-offset-3 col-xs-12">
					<div class="col-lg-offset-1 col-md-offset-1">
						<?php if(isset($_SESSION['customer_details_id'])){?>
							<p>you are already loged in</p><a href="<?php echo $root ?>/views/user/index.php">View your order</a>
						<?php }else{ ?>
						<h2><?php echo !empty($email_exist_msg)? $email_exist_msg:'Login'; ?></h2>
						<form action="" name="formLogin" class="tsp-form-site" method="post">
							<div class="form-group">
								<input type="text" name="email" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="password" name="password" placeholder="Password">
							</div>
							<button type="submit" class="tsp-btn-site">login now</button><br>
							
						</form>
					</div><!-- div offset left -->
				</div>
			</div>
		</div><!-- div row -->
	</div>
</section>
		<?php } ?>
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
									<a href="login.php#" title="Facebook"><i class="fa fa-facebook-square"></i></a>
								</li>
								<li>
									<a href="login.php#" title="Twitter"><i class="fa fa-twitter-square"></i></a>
								</li>
								<li>
									<a href="login.php#" title="Pinterest"><i class="fa fa-pinterest-square"></i></a>
								</li>
								<li>
									<a href="login.php#" title="Google plus"><i class="fa fa-google-plus-square"></i></a>
								</li>
								<li>
									<a href="login.php#" title="Tumblr"><i class="fa fa-tumblr-square"></i></a>
								</li>
								<li>
									<a href="login.php#" title="Youtube"><i class="fa fa-youtube-square"></i></a>
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
									<a href="login.php#" target="_blank">
										<i class="fa fa-phone"><span>Phone:</span></i> +123 145 999 999
									</a>
								</li>
								<li>
									<a href="mailto:waziullahworld@gmail.com" target="_blank">
										<i class="fa fa-envelope"><span>Email:</span></i> Waziullah
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
									<a href="login.php#"><img src="../assets/images/flickr-1.jpg" alt="Instagram 1"></a>
								</li>
								<li>
									<a href="login.php#"><img src="../assets/images/flickr-2.jpg" alt="Instagram 2"></a>
								</li>
								<li>
									<a href="login.php#"><img src="../assets/images/flickr-3.jpg" alt="Instagram 3"></a>
								</li>
								<li>
									<a href="login.php#"><img src="../assets/images/flickr-4.jpg" alt="Instagram 4"></a>
								</li>
								<li>
									<a href="login.php#"><img src="../assets/images/flickr-5.jpg" alt="Instagram 5"></a>
								</li>
								<li>
									<a href="login.php#"><img src="../assets/images/flickr-6.jpg" alt="Instagram 6"></a>
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
<script src="../assets/js/vendors/jquery.min.js"></script>
<script src="../assets/js/vendors/modernizr.min.js"></script>
<script src="../assets/js/vendors/bootstrap.min.js"></script>
<script src="../assets/js/vendors/bootstrap-datepicker.min.js"></script>
<script src="../assets/js/vendors/owl.carousel.min.js"></script>
<script src="../assets/js/vendors/jquery.slicknav.min.js"></script>
<script src="../assets/js/common.js"></script>
</body>
</html>