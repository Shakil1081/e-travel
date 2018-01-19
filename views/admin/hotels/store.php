<?php

require_once("../../../vendor/autoload.php");



$root = "http://localhost/e-travel";
if(!isset($_SESSION)){
    session_start();

}
use App\Users\Admin;
$admin = new Admin();

$admin->setData($_SESSION);
if(!$admin->is_loged_in()){
    header("Location:$root");
}else{
    $admin_data = $admin->admin_ifo();
}


use App\Hotels\Hotels;

//
$add_new_hotel = new Hotels();


//$file_name = time().$_FILES['hotel_pictures']['name'];
//$temporary_location = $_FILES['hotel_pictures']['tmp_name'];
//
//move_uploaded_file($temporary_location,'../../../picture/'.$file_name);
//
//$_POST['hotel_pictures']=$file_name;




//$add_new_hotel->setData($_POST);
//$add_new_hotel->store();


$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$max_file_size = 1024*10000; //100 kb
$path = "../../../assets/images/hotels/"; // Upload directory
$savePath = "assets/images/hotels/";
$count = 0;

$imgArray = array();

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
    // Loop $_FILES to exeicute all files
    foreach ($_FILES['hotel_pictures']['name'] as $f => $name) {


                if(move_uploaded_file($_FILES["hotel_pictures"]["tmp_name"][$f], $path.$name)) {
                    $count++; // Number of successfully uploaded file
                    $imgArray[] = $savePath . $name;
                }

        }
}




$_POST['hotel_pictures'] = implode(",",$imgArray);



$add_new_hotel->setData($_POST);
$add_new_hotel->store();