<?php


$root = "http://localhost/e-travel";

require_once("../../../vendor/autoload.php");

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

$rooms = new rooms();
$rooms->setData($_GET);
$oneData= $rooms->view();



include('../header.php');
include ('../sidebar.php');

?>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
                <?php require_once ('../top_nav.php');?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                    Room->Room Details

                </h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Room Details </h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-list"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="trash_view.php">Trash List</a>
                                                </li>
                                                <li><a href="list_view.php">List View</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <section class="content invoice">

                                        <div class="row invoice-info">
                                            <div class="col-sm-12 invoice-col">
                                                <table id="example" class="table table-striped responsive-utilities jambo_table">
                                                    <thead>
                                                    <tr class="headings">
                                                        <th>Field name</th>
                                                        <th colspan="3">Field details</th>
                                                        </th>
                                                    </tr>
                                                    </thead>



                                                    <tbody>
                                                    <tr>
                                                        <td>Hotel name</td>
                                                        <td colspan="3"><?php echo $oneData->hotel_name; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hotel Location</td>
                                                        <td><?php echo $oneData->hotel_location; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Room Category</td>
                                                        <td><?php echo $oneData->room_category; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Room Number</td>
                                                        <td><?php echo $oneData->room_number; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Room Capability</td>
                                                        <td><?php echo $oneData->room_capability; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Room Price</td>
                                                        <td><?php echo $oneData->room_price; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Room Details</td>
                                                        <td><?php echo $oneData->room_details; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Room Added at</td>
                                                        <td><?php echo $oneData->time_of_adding; ?></td>
                                                    </tr>
                                                    <tr class=" last">
                                                        <td colspan="2">
                                                        <a href="edit.php?id=<?php echo $oneData->id;?>" class="btn btn-primary btn-xs">Edit</a>
                                                        <a href="delete.php?id=<?php echo $oneData->id;?>" class="btn btn-danger btn-xs">Delete</a>
                                                        <a href="trash.php?id=<?php echo $oneData->id;?>" class="btn btn-warning btn-xs">Trash</a>
                                                        </td>
                                                    </tr>

                                                    </tbody>


                                                </table>

                                            </div>
                                        </div>
                                    </section>
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