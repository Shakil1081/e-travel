<?php
if(!isset($_SESSION)){ session_start(); }

require_once("../vendor/autoload.php");
use App\Users\Users;
use App\Utility\Utility;

$objUsers = new Users();


$objUsers->setData($_POST);
$objUsers->newUser();

Utility::redirect('registration.php');