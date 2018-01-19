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

use App\hotels\hotels;

$hotels = new hotels();
$hotels->setData($_GET);
$hotels->trash();

