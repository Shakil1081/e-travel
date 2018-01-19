<?php


if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['customer_details_id'])){
    header("location:http://localhost/e-travel");
}
$_GET['id']=$_SESSION['customer_details_id'];

require_once("../../vendor/autoload.php");
use App\rooms\roomsOrder;
use App\Users\Users;

$users = new Users();
$rooms = new roomsOrder();
$rooms->setData($_GET);
$users->setData($_GET);
$allData= $rooms->viewForUsers();
$user = $users->view();
$root = "http://localhost/e-travel";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Hotels</title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo $root ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo $root ?>/assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $root ?>/assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo $root ?>/assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo $root ?>/assets/css/icheck/flat/green.css" rel="stylesheet">


    <script src="<?php echo $root ?>/assets/js/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="<?php echo $root ?>/assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body class="nav-md">

<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="<?php echo $root ?>/index.php" class="site_title"><i class="fa fa-plane"></i> <span>E-Travel</span></a>
                </div>
                <div class="clearfix"></div>


                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_info customer_info">
                        <span>Welcome,</span>
                        <h2><?php echo $user->customer_first_name ?> <?php echo $user->customer_last_name ?></h2>
                        <a href="logout.php" class="btn btn-warning">Log Out</a>
                    </div>
                </div>
                <br />
<?php include ('sidebar.php');?>
<!-- /sidebar menu -->
</div>
</div>

<!-- top navigation -->
<?php include ('../admin/top_nav.php');?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Your Orders

                </h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
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
                                <div class="col-sm-12 col-md-12 invoice-col">
                                    <table id="example" class="table table-responsive table-striped  jambo_table" style="table-layout: fixed ; word-wrap: break-word;">
                                        <thead>
                                        <tr class="headings">
                                            <th>Order number </th>
                                            <th>Hotel </th>
                                            <th> Location</th>
                                            <th> Room Category</th>
                                            <th> Total Rooms</th>
                                            <th> Total Price</th>
                                            <th> Arrival Time</th>
                                            <th> Total staying days</th>
                                            <th> Time of order</th>
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                        $serial = 1;
                                        foreach($allData as $oneData){

                                            ?>

                                            <tr class="even pointer">

                                                <td class="a-center "><?php  echo $oneData->id?></td>
                                                <td class=" "><?php echo $oneData->hotel_name;?></td>
                                                <td class=" "><?php echo $oneData->hotel_location;?></td>
                                                <td class=" "><?php echo $oneData->room_category;?></td>
                                                <td class=" "><?php echo $oneData->total_room;?></td>
                                                <td class=" "><?php echo $oneData->total_price;?></td>
                                                <td class=" "><?php echo $oneData->arrival_time;?></td>
                                                <td class=" "><?php echo $oneData->day_of_stay;?></td>
                                                <td class=" "><?php echo $oneData->date_of_order;?></td>

                                            </tr>
                                            <?php
                                            $serial++;
                                        }
                                        ?>
                                        </tbody>


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

<script src="<?php echo $root ?>/assets/js/bootstrap.min.js"></script>

<!-- chart js -->
<script src="<?php echo $root ?>/assets/js/chartjs/chart.min.js"></script>
<!-- bootstrap progress js -->
<script src="<?php echo $root ?>/assets/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?php echo $root ?>/assets/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="<?php echo $root ?>/assets/js/icheck/icheck.min.js"></script>

<script src="<?php echo $root ?>/assets/js/custom.js"></script>

</body>

</html>