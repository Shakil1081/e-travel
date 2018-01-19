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
use App\Hotels\Hotels;
use App\Utility\Utility;


$hotels = new Hotels();
$allData = $hotels->trashed();

################## search  block 1 of 5 start ##################
if(isset($_REQUEST['search']) )$allData =  $hotels->search($_REQUEST);
$availableKeywords=$hotels->getAllKeywords();
$comma_separated_keywords= '"'.implode('","',$availableKeywords).'"';
################## search  block 1 of 5 end ##################

######################## pagination code block#1 of 2 start ######################################
$recordCount= count($allData);


if(isset($_REQUEST['Page']))   $page = $_REQUEST['Page'];
else if(isset($_SESSION['Page']))   $page = $_SESSION['Page'];
else   $page = 1;
$_SESSION['Page']= $page;

if(isset($_REQUEST['ItemsPerPage']))   $itemsPerPage = $_REQUEST['ItemsPerPage'];
else if(isset($_SESSION['ItemsPerPage']))   $itemsPerPage = $_SESSION['ItemsPerPage'];
else   $itemsPerPage = 3;
$_SESSION['ItemsPerPage']= $itemsPerPage;

$pages = ceil($recordCount/$itemsPerPage);
$someData = $hotels->trashedPaginator($page,$itemsPerPage);

$serial = (($page-1) * $itemsPerPage) +1;

####################### pagination code block#1 of 2 end #########################################

################## search  block 2 of 5 start ##################

if(isset($_REQUEST['search']) ) {
    $someData = $hotels->search($_REQUEST);
    $serial = 1;
}
################## search  block 2 of 5 end ##################

include('../header.php');
require_once ('../sidebar.php');?>
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
                    Hotels /
                    <small>
                        List View
                    </small>
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Hotel List</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a href="#"><i class="fa fa-chevron-up"></i></a>
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
                            <li><a href="#"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right" style="margin-top: 20px">
                            <form id="searchForm" action="list_view.php"  method="get">
                                <input type="text" class="form-control" value="" id="searchID" name="search" placeholder="Search" width="60" >

                                <input type="checkbox"  name="byName"   checked  >By Name
                                <input hidden type="submit" class="btn-primary" value="search">
                            </form>
                        </div>
                    </div>
                    <div class="x_content">

                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                            <thead>
                            <tr class="headings">
                                <th width="50">
                                    <input type="checkbox" class="tableflat">
                                </th>
                                <th width="50" >Hotel Id </th>
                                <th>Name </th>
                                <th> Location</th>
                                <th> Contact Number</th>
                                <th> Email Address</th>

                                <th class=" no-link last" align="center"><span class="nobr">Action</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            foreach($someData as $oneData){

                                ?>

                                <tr class="even pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="tableflat">
                                    </td>
                                    <td class="a-center "><?php echo $oneData->id;?></td>
                                    <td class=" "><?php echo $oneData->hotel_name;?></td>
                                    <td class=" "><?php echo $oneData->hotel_location;?></td>
                                    <td class=" "><?php echo $oneData->hotel_contact_number;?></td>
                                    <td class=" "><?php echo $oneData->hotel_email;?></td>

                                    </td>
                                    <td class=" last">
                                        <a href="view.php?id=<?php echo $oneData->id;?>" class="btn btn-success btn-xs">View</a>
                                        <a href="edit.php?id=<?php echo $oneData->id;?>" class="btn btn-primary btn-xs">Edit</a>
                                        <a href="delete.php?id=<?php echo $oneData->id;?>" class="btn btn-danger btn-xs">Delete</a>
                                        <a href="recover.php?id=<?php echo $oneData->id;?>" class="btn btn-warning btn-xs">Recover</a>
                                    </td>
                                </tr>
                                <?php

                            }
                            ?>
                            </tbody>

                        </table>
                        <div class="clearfix"></div>
                        <div class="col-md-7 col-sm-7 col-xs-12 pull-right">
                            <a href="pdf.php" class="btn btn-info btn-group-lg"><i class="fa fa-file-pdf-o"></i> Download as pdf</a>
                            <a href="xl.php" class="btn btn-success btn-group-lg"><i class="fa fa-file-excel-o"></i> Download as Excel</a>
                            <a href="email.php?list=1" class="btn btn-warning btn-group-lg"><i class="fa fa-inbox"></i> Email to a Friend</a>

                        </div>
                        <div class="clearfix"></div>
                        <!--  ######################## pagination code block#2 of 2 start ###################################### -->
                        <div align="center" class="container">
                            <ul class="pagination">

                                <?php
                                $pageMinusOne = $page - 1;
                                $pagePlusOne = $page + 1;
                                if($page>$pages)
                                {
                                    Utility::redirect("list_view.php?Page=$pages");
                                }
                                if($page>1)
                                {

                                    echo "<li><a href='?Page=$pageMinusOne'>" . "Previous" . "</a></li>";
                                }
                                for($i=1;$i<=$pages;$i++)
                                {
                                    if($i==$page) echo '<li class="active"><a href="">'. $i . '</a></li>';
                                    else  echo "<li><a href='?Page=$i'>". $i . '</a></li>';

                                }
                                if(!($page == $pages))
                                {

                                    echo "<li><a href='?Page=$pagePlusOne'>" . "Next" . "</a></li>";

                                }
                                ?>
                                <br>
                                <br>
                                <br>


                                <select  class="form-control"  name="ItemsPerPage" id="ItemsPerPage" onchange="javascript:location.href = this.value;" >
                                    <?php
                                    if($itemsPerPage==3 ) echo '<option value="?ItemsPerPage=3" selected >Show 3 Items Per Page</option>';
                                    else echo '<option  value="?ItemsPerPage=3">Show 3 Items Per Page</option>';

                                    if($itemsPerPage==4 )  echo '<option  value="?ItemsPerPage=4" selected >Show 4 Items Per Page</option>';
                                    else  echo '<option  value="?ItemsPerPage=4">Show 4 Items Per Page</option>';

                                    if($itemsPerPage==5 )  echo '<option  value="?ItemsPerPage=5" selected >Show 5 Items Per Page</option>';
                                    else echo '<option  value="?ItemsPerPage=5">Show 5 Items Per Page</option>';

                                    if($itemsPerPage==6 )  echo '<option  value="?ItemsPerPage=6"selected >Show 6 Items Per Page</option>';
                                    else echo '<option  value="?ItemsPerPage=6">Show 6 Items Per Page</option>';

                                    if($itemsPerPage==10 )   echo '<option  value="?ItemsPerPage=10"selected >Show 10 Items Per Page</option>';
                                    else echo '<option  value="?ItemsPerPage=10">Show 10 Items Per Page</option>';

                                    if($itemsPerPage==15 )  echo '<option  value="?ItemsPerPage=15"selected >Show 15 Items Per Page</option>';
                                    else    echo '<option  value="?ItemsPerPage=15">Show 15 Items Per Page</option>';
                                    ?>
                                </select>
                            </ul>
                        </div>
                        <!--  ######################## pagination code block#2 of 2 end ###################################### -->

                    </div>
                </div>
            </div>

            <br />
            <br />
            <br />

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
