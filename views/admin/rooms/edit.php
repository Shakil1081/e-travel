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

use App\rooms\rooms;

use App\Message\Message;

$rooms = new rooms();
$allData = $rooms->index();
$rooms->setData($_GET);
$oneData= $rooms->view();
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
                                rooms / Room / Add New
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

                                    <form class="form-horizontal form-label-left" novalidate method="post" action="update.php" enctype="multipart/form-data">

                                        <span class="section">Add New Room</span>
                                        <?php
                                       // echo Message::message();
                                        ?>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hotel_name">Hotel Name
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">

                                                <select name="hotel_name" class='form-control' id="hotel_name">
                                                <option value="">Select Hotel</option>
                                                    <?php


                                                    foreach($allData as $singleData){
                                                    if($oneData->hotel_name == $singleData->hotel_name){
                                                        $selected = "selected";
                                                    }else{
                                                    $selected = "";
                                                    }
                                                        echo "<option value='$singleData->hotel_name'  $selected>$singleData->hotel_name</option>";
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
                                                <option value="">Select Location</option>

                                                </select>


                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room_category">Room Category
                                            </label>
                                            Category: <br>
                                            <input type="radio" name="room_category" value="A" <?php echo ($oneData->room_category=="A")?"checked":"" ;?>>A
                                            <input type="radio" name="room_category" value="B" <?php echo ($oneData->room_category=="B")?"checked":"" ;?>>B
                                            <input type="radio" name="room_category" value="C" <?php echo ($oneData->room_category=="C")?"checked":"" ;?>>C
                                            <input type="radio" name="room_category" value="D" <?php echo ($oneData->room_category=="D")?"checked":"" ;?>>D
                                            <input type="radio" name="room_category" value="E" <?php echo ($oneData->room_category=="E")?"checked":"" ;?>>E
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room_number">Room Number
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name"  name="room_number"  type="text" placeholder="Enter your hotel room number" class="form-control col-md-7 col-xs-12" value="<?php echo $oneData->room_number; ?>" required="required">
                                           <input type="hidden" value="<?php  echo $oneData->id;  ?>" name="id">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room_capability">Room Capability
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name"  name="room_capability"  type="text" placeholder="Enter your room capability" value="<?php echo $oneData->room_capability; ?>" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room_price">Room Price
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name"  name="room_price"  type="number" value="<?php echo $oneData->room_price; ?>" class="form-control col-md-7 col-xs-12"  required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room_details">Room Details
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input name="time_of_adding"  type="hidden" value="<?php echo date("d-m-Y  g:i a"); ?>"/>

                                                <textarea input id="name"  name="room_details"  type="text"  class="form-control col-md-7 col-xs-12"  required="required"><?php echo $oneData->room_details; ?></textarea>
                                            </div>
                                        </div>


                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="picture"> Picture </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input  type="file" name="room_pictures[]" multiple>

                                                <p>
                                                <?php

					$all_img_string = $oneData->room_pictures;
					$arryImage = explode(",", $all_img_string);

					//var_dump($arryImage);


					foreach($arryImage as $single_image){
					?>


				    <li><img width="100" src="<?php echo $root; ?>/<?php echo $single_image; ?>" alt="<?php echo $single_image; ?>"></li>


					<?php } ?>
                                                </p>
</p>
                                            </div>

                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button id="send" type="submit" class="btn btn-success">Update</button>
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