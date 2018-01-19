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


use App\Message\Message;

//echo Message::getMessage();

                    include('../header.php');
                    include('../sidebar.php');
                    ?>
                    <!-- /menu prile quick info -->

                </div>
            </div>

            <!-- top navigation -->
            <?php require_once('../top_nav.php');?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                                Hotels / Add New
                            </h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <form class="form-horizontal form-label-left" novalidate method="post" action="store.php" enctype="multipart/form-data">

                                        <span class="section">Add New Hotel</span>
                                        <?php
                                       // echo Message::message();
                                        ?>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hotel_name">Name
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name"  name="hotel_name"  type="text" placeholder="Name of hotel..." class="form-control col-md-7 col-xs-12" data-validate-length-range="2" data-validate-words="1" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hotel_details">Details
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="name"  name="hotel_details" class="form-control col-md-7 col-xs-12"  required="required"> </textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hotel_address">Hotel Address
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name"  name="hotel_address"  type="text" placeholder="Enter hotel address" class="form-control col-md-7 col-xs-12" data-validate-length-range="2" data-validate-words="1" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hotel_location">Hotel Location
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name"  name="hotel_location"  type="text" placeholder="Enter your hotel location" class="form-control col-md-7 col-xs-12" data-validate-length-range="2" data-validate-words="1" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hotel_latitude">Hotel Latitude
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name"  name="hotel_latitude"  type="text" placeholder="Enter your hotel latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="2" data-validate-words="1" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hotel_longitude">Hotel Longitude
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name"  name="hotel_longitude"  type="text" placeholder="Enter your hotel longitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="2" data-validate-words="1" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hotel_contact_number">Contact Number
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">

                                                <input id="name"  name="hotel_contact_number"  type="text" placeholder="Enter your hotel contact number" class="form-control col-md-7 col-xs-12" data-validate-length-range="2" data-validate-words="1" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hotel_email">Email
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name"  name="hotel_email"  type="text" placeholder="Enter your hotel email" class="form-control col-md-7 col-xs-12" data-validate-length-range="2" data-validate-words="1" required="required">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="picture"> Picture </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input  type="file" name="hotel_pictures[]" accept="image/*" multiple >
                                            </div>

                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button id="send" type="submit" class="btn btn-success">Add</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

  <?php include '../footer.php' ?>