


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

use App\Message\Message;

$hotels = new Hotels();
$allData = $hotels->index();
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
                                Hotels / Room / Add New
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

                                        <span class="section">Add New Room</span>
                                        <?php
                                       // echo Message::message();
                                        ?>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hotel_name">Hotel Name
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">

                                                <select name="hotel_name" class='form-control' id="hotel_name">
                                                    <?php
                                                    foreach($allData as $singleData){
                                                        echo "<option value='$singleData->hotel_name' >$singleData->hotel_name</option>";
                                                    }
                                                    ?>
                                                </select>
                                             </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hotel_location">Hotel Location
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">

                                                <select name="hotel_location" class='form-control' id="hotel_location">

                                                </select>


                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room_category">Room Category
                                            </label>
                                            Category: <br>
                                            <input type="radio" name="room_category" value="A">A
                                            <input type="radio" name="room_category" value="B">B
                                            <input type="radio" name="room_category" value="C">C
                                            <input type="radio" name="room_category" value="D">D
                                            <input type="radio" name="room_category" value="E">E
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room_number">Room Number
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name"  name="room_number"  type="text" placeholder="Enter your hotel room number" class="form-control col-md-7 col-xs-12" data-validate-length-range="2" data-validate-words="1" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room_capability">Room Capability
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name"  name="room_capability"  type="text" placeholder="Enter your room capability" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room_price">Room Price
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name"  name="room_price"  type="number" placeholder="Enter your room price" class="form-control col-md-7 col-xs-12"  required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room_details">Room Details
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input name="time_of_adding"  type="hidden" value="<?php echo date("d-m-Y  g:i a"); ?>"/>

                                                <textarea input id="name"  name="room_details"  type="text"  class="form-control col-md-7 col-xs-12"  required="required"></textarea>
                                            </div>
                                        </div>


                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="picture"> Picture </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input  type="file" name="room_pictures[]" multiple>
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

  <?php
    include "../footer.php";
    ?>