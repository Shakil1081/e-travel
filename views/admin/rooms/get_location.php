<?php
//
//require_once("../../../vendor/autoload.php");
//use App\Hotels\Hotels;
//
//use App\Message\Message;
//
//$hotels = new Hotels();
//
//$hotels->setData($_POST);
//
//$hotels->getLocation();
//
//
//?>


<?php

require_once("../../../vendor/autoload.php");
use App\Message\Message;
use App\Hotels\Hotels;
use App\Utility\Utility;


$hotels = new Hotels();
$hotels->setData($_POST);
$allData = $hotels->getLocation();



foreach($allData as $singleData){
    ?>
    <option value="<?php echo $singleData->hotel_location ?>"><?php echo $singleData->hotel_location ?></option>
<?php
}
?>






