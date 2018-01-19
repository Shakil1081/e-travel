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

$hotels = new Hotels();
//$_FILES
//if($_FILES['profile_photo']['name'])
//{
//    $file_name = time().$_FILES['profile_photo']['name'];
//    $temporary_location = $_FILES['profile_photo']['tmp_name'];
//
//    move_uploaded_file($temporary_location,'../../../picture/'.$file_name);
//
//    $_POST['profile_photo']=$file_name;
//}
$hotels->setData($_POST);
$hotels->update();