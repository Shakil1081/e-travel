<?php

namespace App\Rooms;
use App\Utility\Utility;
use App\Database\Database as DB;
use PDOException;
use PDO;


class Rooms extends DB
{

    public $id;
    public $hotel_name;
    public $hotel_location;
    public $room_category;
    public $room_number;
    public $room_capability;
    public $room_price;
    public $room_details;
    public $room_pictures;
    public $hotel_index;


    /////////////////////////
    //start of set[] method///
    /////////////////////////
    public function setData($postVariable=NULL){
        if(array_key_exists("id",$postVariable)){
            $this->id=$postVariable['id'];
        }
        if(array_key_exists("hotel_name",$postVariable)){
            $this->hotel_name=$postVariable['hotel_name'];
        }
        if(array_key_exists("hotel_location",$postVariable)){
            $this->hotel_location=$postVariable['hotel_location'];
        }
        if(array_key_exists("room_category",$postVariable)){
            $this->room_category=$postVariable['room_category'];
        }
        if(array_key_exists("room_number",$postVariable)){
            $this->room_number=$postVariable['room_number'];
        }
        if(array_key_exists("room_capability",$postVariable)){
            $this->room_capability=$postVariable['room_capability'];
        }
        if(array_key_exists("room_price",$postVariable)){
            $this->room_price=$postVariable['room_price'];
        }
        if(array_key_exists("room_details",$postVariable)){
            $this->room_details=$postVariable['room_details'];
        }
        if(array_key_exists("room_pictures",$postVariable)){
            $this->room_pictures=$postVariable['room_pictures'];
        }
        if(array_key_exists("hotel_index",$postVariable)){
            $this->hotel_index=$postVariable['hotel_index'];
        }
    }


    /////////////////////////
    //start of index method///
    /////////////////////////

    public function index()
    {
        try {
            $sql = "SELECT * from rooms_of_hotel WHERE is_deleted='No' ORDER BY id DESC";
            $STH = $this->dbh->query($sql);
            $STH->setFetchMode(PDO::FETCH_OBJ);
            $arrAllData = $STH->fetchAll();
            return $arrAllData;
        }catch(PDOException $e){
            echo "Error:".$e->getMessage();
        }
    }
    /////////////////////////
    //start of view method///
    /////////////////////////

    public function view(){
        $sql="SELECT * from rooms_of_hotel WHERE id=".$this->id;
        $STH=$this->dbh->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $arrOneData=$STH->fetch();
        return $arrOneData;
    }

    /////////////////////////
    //start of index method///
    /////////////////////////

    public function indexByHotelName()
    {
        try {
            $sql = "SELECT * from rooms_of_hotel WHERE hotel_name='".$this->hotel_name."'";
            $STH = $this->dbh->query($sql);
            $STH->setFetchMode(PDO::FETCH_OBJ);
            $arrAllData = $STH->fetchAll();
            return $arrAllData;
        }catch(PDOException $e){
            echo "Error:".$e->getMessage();
        }
    }



    ///////////////////////////
    ////Start of store method/////
    //////////////////////////

    public function store(){
        try {

            $sql = "INSERT into rooms_of_hotel(
hotel_name,
hotel_location,
room_category,
room_number,
room_capability,
room_price,
room_details,
time_of_adding,
room_pictures
)
VALUES (
:hotel_name,
:hotel_location,
:room_category,
:room_number,
:room_capability,
:room_price,
:room_details,
:time_of_adding,
:room_pictures
) ";
            $stm = $this->dbh->prepare($sql);
            $stm->bindParam(":hotel_name", $this->hotel_name);
            $stm->bindParam(":hotel_location", $this->hotel_location);
            $stm->bindParam(":room_category", $this->room_category);
            $stm->bindParam(":room_number", $this->room_number);
            $stm->bindParam(":room_capability", $this->room_capability);
            $stm->bindParam(":room_price", $this->room_price);
            $stm->bindParam(":room_details", $this->room_details);
            $stm->bindParam(":time_of_adding", date("d-m-Y  g:i a"));
            $stm->bindParam(":room_pictures", $this->room_pictures);
            $stm->execute();
            echo "post added";
        }catch (PDOException $em){
            echo $em->getMessage();
        }

    }

///////////////////////////
    ////Start of update method/////
    //////////////////////////

    public function update(){
        try {

            $sql = "update  rooms_of_hotel set
hotel_name=:hotel_name,
hotel_location=:hotel_location,
room_category=:room_category,
room_number=:room_number,
room_capability=:room_capability,
room_price=:room_price,
room_details=:room_details,
time_of_last_update=:time_of_last_update,
room_pictures=:room_pictures WHERE id=".$this->id;
            $stm = $this->dbh->prepare($sql);
            $stm->bindParam(":hotel_name", $this->hotel_name);
            $stm->bindParam(":hotel_location", $this->hotel_location);
            $stm->bindParam(":room_category", $this->room_category);
            $stm->bindParam(":room_number", $this->room_number);
            $stm->bindParam(":room_capability", $this->room_capability);
            $stm->bindParam(":room_price", $this->room_price);
            $stm->bindParam(":room_details", $this->room_details);
            $stm->bindParam(":time_of_last_update", date("d-m-Y  g:i a"));
            $stm->bindParam(":room_pictures", $this->room_pictures);
            $stm->execute();
            echo "post Updated";
        }catch (PDOException $em){
            echo $em->getMessage();
        }

    }





    ///working for crud

    public function delete()
    {
//$date = date('d/m/Y h:i:s');
        $sql = "delete from rooms_of_hotel WHERE id = ".$this->id;
        $STH = $this->dbh->prepare($sql);
        $STH->execute();


        Utility::redirect('list_view.php');

    }//end of delete
    public function trash()
    {
//$date = date('d/m/Y h:i:s');
        $sql = "UPDATE rooms_of_hotel SET is_deleted = :is_deleted WHERE id = ".$this->id;
        $STH = $this->dbh->prepare($sql);
        $STH->bindParam(":is_deleted",  date("d-m-Y  g:i a"));
        $STH->execute();

        /*if($result)
        //Message::setMessage("Success!!Data has been inserted successfully ;)");
        Message::message("Success!!Data has been inserted successfully ;)");
        else
        //Message::setMessage("Failed!! Data has not been inserted successfully :(");
        Message::message("Failed!! Data has not been inserted successfully :(");*/

        Utility::redirect('list_view.php');

    }//end of trash

    public function trashed()
    {
        try {
            $sql = "SELECT * from rooms_of_hotel WHERE is_deleted <> 'No' ORDER BY id DESC";
            $STH = $this->dbh->query($sql);
            $STH->setFetchMode(PDO::FETCH_OBJ);
            $arrAllData = $STH->fetchAll();
            return $arrAllData;
        }catch(PDOException $e){
            echo "Error:".$e->getMessage();
        }
    }


    public function recover()
    {
//$date = date('d/m/Y h:i:s');
        $sql = "UPDATE rooms_of_hotel SET is_deleted = 'No' WHERE id = ".$this->id;
        $STH = $this->dbh->prepare($sql);
        $STH->execute();

        /*if($result)
        //Message::setMessage("Success!!Data has been inserted successfully ;)");
        Message::message("Success!!Data has been inserted successfully ;)");
        else
        //Message::setMessage("Failed!! Data has not been inserted successfully :(");
        Message::message("Failed!! Data has not been inserted successfully :(");*/

        Utility::redirect('trash_view.php');

    }//end of trash


    public function indexPaginator($page=1,$itemsPerPage=3){

        $start = (($page-1) * $itemsPerPage);

        $sql = "SELECT * from rooms_of_hotel  WHERE is_deleted = 0 LIMIT $start,$itemsPerPage";

        $STH = $this->dbh->query($sql);

        $STH->setFetchMode(PDO::FETCH_OBJ);

        $arrSomeData  = $STH->fetchAll();
        return $arrSomeData;

    }// end of indexPaginator();

    public function trashedPaginator($page=0,$itemsPerPage=3){

        $start = (($page-1) * $itemsPerPage);

        $sql = "SELECT * from rooms_of_hotel  WHERE is_deleted <> 'No' LIMIT $start,$itemsPerPage";

        $STH = $this->dbh->query($sql);

        $STH->setFetchMode(PDO::FETCH_OBJ);

        $arrSomeData  = $STH->fetchAll();
        return $arrSomeData;

    }// end of trashedPaginator();

    public function search($requestArray){
        $sql = "";
        if(isset($requestArray['byName']))
            $sql = "SELECT * FROM `rooms_of_hotel` WHERE `is_deleted` ='0' AND `profile_name` LIKE '%".$requestArray['search']."%'";

        $STH  = $this->dbh->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $someData = $STH->fetchAll();

        return $someData;

    }// end of search()



    public function getAllKeywords()
    {
        $_allKeywords = array();
        $WordsArr = array();
        $sql = "SELECT * FROM `rooms_of_hotel` WHERE `is_deleted` ='0'";

        $STH = $this->dbh->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);

// for each search field block start
        $allData= $STH->fetchAll();
        foreach ($allData as $oneData) {
            $_allKeywords[] = trim($oneData->profile_name);
        }

//$STH = $this->DBH->query($sql);
// $STH->setFetchMode(PDO::FETCH_OBJ);

        $allData= $STH->fetchAll();
        foreach ($allData as $oneData) {

            $eachString= strip_tags($oneData->profile_name);
            $eachString=trim( $eachString);
            $eachString= preg_replace( "/\r|\n/", " ", $eachString);
            $eachString= str_replace("&nbsp;","",  $eachString);
            $WordsArr = explode(" ", $eachString);

            foreach ($WordsArr as $eachWord){
                $_allKeywords[] = trim($eachWord);
            }
        }
// for each search field block end

        return array_unique($_allKeywords);


    }// get all keywords






}
//$ob = new Hotels();