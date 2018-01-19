<?php


namespace App\Hotels;
use App\Database\Database as DB;
use App\Utility\Utility;
use PDOException;
use PDO;


class Hotels extends DB
{

    public $id;
    public $hotel_name;
    public $hotel_details;
    public $hotel_address;
    public $hotel_location;
    public $hotel_latitude;
    public $hotel_longitude;
    public $hotel_pictures;
    public $hotel_contact_number;
    public $hotel_email;
    public $hotel_add_time;
    public $get_location;



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

        if(array_key_exists("hotel_details",$postVariable)){
            $this->hotel_details=$postVariable['hotel_details'];
        }
        if(array_key_exists("hotel_address",$postVariable)){
            $this->hotel_address=$postVariable['hotel_address'];
        }

        if(array_key_exists("hotel_location",$postVariable)){
            $this->hotel_location=$postVariable['hotel_location'];
        }

        if(array_key_exists("hotel_latitude",$postVariable)){
            $this->hotel_latitude=$postVariable['hotel_latitude'];
        }

        if(array_key_exists("hotel_longitude",$postVariable)){
            $this->hotel_longitude=$postVariable['hotel_longitude'];
        }

        if(array_key_exists("hotel_pictures",$postVariable)){
            $this->hotel_pictures=$postVariable['hotel_pictures'];
        }

        if(array_key_exists("hotel_contact_number",$postVariable)){
            $this->hotel_contact_number=$postVariable['hotel_contact_number'];
        }

        if(array_key_exists("hotel_email",$postVariable)){
            $this->hotel_email=$postVariable['hotel_email'];
        }

        if(array_key_exists("hotel_add_time",$postVariable)){
            $this->hotel_add_time=$postVariable['hotel_add_time'];
        }
        if(array_key_exists("get_location",$postVariable)){
            $this->get_location=$postVariable['get_location'];
        }


    }

    /////////////////////////
    //start of index method///
    /////////////////////////

    public function index()
    {
        try {
            $sql = "SELECT * from list_of_hotel WHERE is_deleted='No' ORDER BY id DESC";
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
        $sql="SELECT * from list_of_hotel WHERE id=".$this->id;
        $STH=$this->dbh->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $arrOneData=$STH->fetch();
        return $arrOneData;
    }
    ///////////////////////////
    ////Start of store method/////
    //////////////////////////

    public function store(){
        try {

            $sql = "INSERT into list_of_hotel(hotel_name,hotel_details,hotel_address,hotel_location,hotel_latitude,hotel_longitude,hotel_pictures,hotel_contact_number,hotel_email,hotel_add_time)
                                        VALUES (:hotel_name,:hotel_details,:hotel_address,:hotel_location,:hotel_latitude,:hotel_longitude,
                                        :hotel_pictures,:hotel_contact_number,:hotel_email,:hotel_add_time) ";
            $stm = $this->dbh->prepare($sql);
            $stm->bindParam(":hotel_name", $this->hotel_name);
            $stm->bindParam(":hotel_details", $this->hotel_details);
            $stm->bindParam(":hotel_address", $this->hotel_address);
            $stm->bindParam(":hotel_location", $this->hotel_location);
            $stm->bindParam(":hotel_latitude", $this->hotel_latitude);
            $stm->bindParam(":hotel_longitude", $this->hotel_longitude);
            $stm->bindParam(":hotel_pictures", $this->hotel_pictures);
            $stm->bindParam(":hotel_contact_number", $this->hotel_contact_number);
            $stm->bindParam(":hotel_email", $this->hotel_email);
            $stm->bindParam(":hotel_add_time",  date("d-m-Y  g:i a"));
            $stm->execute();

        }catch (PDOException $em){
            echo $em->getMessage();
        }

    }

    ///////////////////////////
    ////Start of store method/////all comes from booktitle class
    //////////////////////////
    public function update(){
        try {

            $sql = "Update list_of_hotel set hotel_name=:hotel_name,hotel_details=:hotel_details,hotel_address=:hotel_address,hotel_location=:hotel_location,hotel_latitude=:hotel_latitude,hotel_longitude=:hotel_longitude,hotel_pictures=:hotel_pictures,hotel_contact_number=:hotel_contact_number,hotel_email=:hotel_email,hotel_update_time=:hotel_add_time WHERE id=".$this->id;
            $stm = $this->dbh->prepare($sql);
            $stm->bindParam(":hotel_name", $this->hotel_name);
            $stm->bindParam(":hotel_details", $this->hotel_details);
            $stm->bindParam(":hotel_address", $this->hotel_address);
            $stm->bindParam(":hotel_location", $this->hotel_location);
            $stm->bindParam(":hotel_latitude", $this->hotel_latitude);
            $stm->bindParam(":hotel_longitude", $this->hotel_longitude);
            $stm->bindParam(":hotel_pictures", $this->hotel_pictures);
            $stm->bindParam(":hotel_contact_number", $this->hotel_contact_number);
            $stm->bindParam(":hotel_email", $this->hotel_email);
            $stm->bindParam(":hotel_add_time",  date("d-m-Y  g:i a"));
            $stm->execute();
            echo "post updated successfuly";

            header("refresh:1;url=list_view.php");

        }catch (PDOException $em){
            echo $em->getMessage();
        }

    }


    public function delete()
    {
//$date = date('d/m/Y h:i:s');
        $sql = "delete from list_of_hotel WHERE id = ".$this->id;
        $STH = $this->dbh->prepare($sql);
        $STH->execute();


        Utility::redirect('list_view.php');

    }//end of delete
    public function trash()
    {
//$date = date('d/m/Y h:i:s');
        $sql = "UPDATE list_of_hotel SET is_deleted = :is_deleted WHERE id = ".$this->id;
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


    public function recover()
    {
//$date = date('d/m/Y h:i:s');
        $sql = "UPDATE list_of_hotel SET is_deleted = 'No' WHERE id = ".$this->id;
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

        $sql = "SELECT * from list_of_hotel  WHERE is_deleted = 'No' LIMIT $start,$itemsPerPage";

        $STH = $this->dbh->query($sql);

        $STH->setFetchMode(PDO::FETCH_OBJ);

        $arrSomeData  = $STH->fetchAll();
        return $arrSomeData;

    }// end of indexPaginator();




    public function trashed()
    {
        try {
            $sql = "SELECT * from list_of_hotel WHERE is_deleted <> 'No' ORDER BY id DESC";
            $STH = $this->dbh->query($sql);
            $STH->setFetchMode(PDO::FETCH_OBJ);
            $arrAllData = $STH->fetchAll();
            return $arrAllData;
        }catch(PDOException $e){
            echo "Error:".$e->getMessage();
        }
    }


    public function trashedPaginator($page=1,$itemsPerPage=3){

        $start = (($page-1) * $itemsPerPage);

        $sql = "SELECT * from list_of_hotel  WHERE is_deleted <> 'No' LIMIT $start,$itemsPerPage";

        $STH = $this->dbh->query($sql);

        $STH->setFetchMode(PDO::FETCH_OBJ);

        $arrSomeData  = $STH->fetchAll();
        return $arrSomeData;

    }// end of indexPaginator();


    public function search($requestArray){
        $sql = "";
        if(isset($requestArray['byName']))
            $sql = "SELECT * FROM `list_of_hotel` WHERE `is_deleted` ='0' AND `profile_name` LIKE '%".$requestArray['search']."%'";

        $STH  = $this->dbh->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $someData = $STH->fetchAll();

        return $someData;

    }// end of search()



    public function getAllKeywords()
    {
        $_allKeywords = array();
        $WordsArr = array();
        $sql = "SELECT * FROM `list_of_hotel` WHERE `is_deleted` ='0'";

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


    /////////////////////////
    //start of index method///
    /////////////////////////



    public function getLocation()
    {
        try {
            $sql = "SELECT * from list_of_hotel WHERE hotel_name='".$this->get_location."'";
            $STH = $this->dbh->query($sql);
            $STH->setFetchMode(PDO::FETCH_OBJ);
            $arrAllData = $STH->fetchAll();
            return $arrAllData;
        }catch(PDOException $e){
            echo "Error:".$e->getMessage();
        }
    }

}
//$ob = new Hotels();