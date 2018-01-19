<?php
require('../vendor/autoload.php');
if(!isset($_SESSION)) {
    session_start();
}
$ar1 = $_SESSION['all_info'];
$ar2 = $_POST;
$all = array_merge($ar1,$ar2);

//var_dump($all);


use App\Users\Users;

use App\Rooms\RoomsOrder;
$rooms_order = new RoomsOrder();
$users = new Users();




if(!empty($all)) {
    //set user

    $users->setData($all);
	$test = $users->is_registered();
	
	//var_dump($test);
	//die();

     if($users->is_registered()==1){
        
		//var_dump($all);
		//die();
		//$users->newUser();
		//$user_row = $users->lastUserView();
        //$all['customer_details_id'] = $user_row->id;
		$userInfo = $users->lastUserView();
		$user_id = $userInfo->id;
		$all['customer_details_id'] = $user_id;
		$_SESSION['existing_customer_order_pending'] = $all;
		header("Location:payment-success.php?order_pending=1");
        //header("location:login.php?order_pending=1");
    }else{
        $users->newUser();
        $user_row = $users->lastUserView();
        $all['customer_details_id'] = $user_row->id;
        $rooms_order->setData($all);
        //$rooms_order->newOrder();
        $_SESSION['existing_customer_order_pending'] = $all;
        header("location:payment-success.php?success_with=new_user");
    }
}





