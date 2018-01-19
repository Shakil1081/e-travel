<?php

namespace App\ProfilePicture;

use App\Message\Message;
use App\Model\Database as DB;
use App\Utility\Utility;
use PDO;


class ProfilePicture extends DB
{
    public $id;
    public $name;
    public $profile_photo;


    public function __construct()
    {
        parent::__construct();
       /* if(!isset($_SESSION))
            session_start();*/
    }

    public function setData($postVaribaleData=NULL)
    {
        if(array_key_exists("id",$postVaribaleData))
        {
            $this->id = $postVaribaleData['id'];
        }
        if(array_key_exists("name",$postVaribaleData))
        {
            $this->name = $postVaribaleData['name'];
        }

        if(array_key_exists("profile_photo",$postVaribaleData))
        {
            $this->profile_photo = $postVaribaleData['profile_photo'];
        }



    }//end of set data
    public function store()
    {
        $arrData = array($this->name,$this->profile_photo);
        $sql = "INSERT into profile_picture(profile_name,profile_picture) VALUES (?,?)";
        $STH = $this->dbh->prepare($sql);
        $result = $STH->execute($arrData);

        /*if($result) {
            //Message::setMessage("Success!!Data has been inserted successfully ;)");
            Message::message("Success!!Data has been inserted successfully ;)");
        }
        else {
            //Message::setMessage("Failed!! Data has not been inserted successfully :(");
            Message::message("Failed!! Data has not been inserted successfully :(");
        }*/

        Utility::redirect('create.php');


    }

    public function index($fetchMode='ASSOC'){

        $STH = $this->dbh->query('SELECT * from profile_picture WHERE is_deleted = 0 ORDER BY profile_pic_id DESC');

        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode,'OBJ') > 0)
            $STH->setFetchMode(PDO::FETCH_OBJ);
        else
            $STH->setFetchMode(PDO::FETCH_ASSOC);

        $arrAllData  = $STH->fetchAll();
        return $arrAllData;


    }// end of index();

    public function view($fetchMode='ASSOC'){

        $sql = 'SELECT * from profile_picture where profile_pic_id='.$this->id;

        $STH = $this->dbh->query($sql);

        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode,'OBJ') > 0)
            $STH->setFetchMode(PDO::FETCH_OBJ);
        else
            $STH->setFetchMode(PDO::FETCH_ASSOC);

        $arrOneData  = $STH->fetch();
        return $arrOneData;


    }// end of view();
    public function update()
    {
        if($this->profile_photo)
        {
            $arrData = array($this->name,$this->profile_photo);
            $sql = "UPDATE profile_picture SET profile_name = ?,profile_picture = ? WHERE profile_pic_id = ".$this->id;
            $STH = $this->dbh->prepare($sql);
            $result = $STH->execute($arrData);

            /*if($result)
                //Message::setMessage("Success!!Data has been inserted successfully ;)");
                Message::message("Success!!Data has been inserted successfully ;)");
            else
                //Message::setMessage("Failed!! Data has not been inserted successfully :(");
                Message::message("Failed!! Data has not been inserted successfully :(");*/

            Utility::redirect('list_view.php');
        }
        else
        {
            $arrData = array($this->name);
            $sql = "UPDATE profile_picture SET profile_name = ? WHERE profile_pic_id = ".$this->id;
            $STH = $this->dbh->prepare($sql);
            $result = $STH->execute($arrData);

            /*if($result)
                //Message::setMessage("Success!!Data has been inserted successfully ;)");
                Message::message("Success!!Data has been inserted successfully ;)");
            else
                //Message::setMessage("Failed!! Data has not been inserted successfully :(");
                Message::message("Failed!! Data has not been inserted successfully :(");*/

            Utility::redirect('list_view.php');
        }


    }//end of update
    public function delete()
    {
        //$date = date('d/m/Y h:i:s');
        $sql = "delete from profile_picture WHERE profile_pic_id = ".$this->id;
        $STH = $this->dbh->prepare($sql);
        $STH->execute();

        /*if($result)
            //Message::setMessage("Success!!Data has been inserted successfully ;)");
            Message::message("Success!!Data has been inserted successfully ;)");
        else
            //Message::setMessage("Failed!! Data has not been inserted successfully :(");
            Message::message("Failed!! Data has not been inserted successfully :(");*/

        Utility::redirect('list_view.php');

    }//end of delete
    public function trash()
    {
        //$date = date('d/m/Y h:i:s');
        $sql = "UPDATE profile_picture SET is_deleted = 1 WHERE profile_pic_id = ".$this->id;
        $STH = $this->dbh->prepare($sql);
        $STH->execute();

        /*if($result)
            //Message::setMessage("Success!!Data has been inserted successfully ;)");
            Message::message("Success!!Data has been inserted successfully ;)");
        else
            //Message::setMessage("Failed!! Data has not been inserted successfully :(");
            Message::message("Failed!! Data has not been inserted successfully :(");*/

        Utility::redirect('list_view.php');

    }//end of trash

    public function trash_view($fetchMode='ASSOC'){

        $STH = $this->dbh->query('SELECT * from profile_picture WHERE is_deleted =1 ORDER BY profile_pic_id DESC');

        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode,'OBJ') > 0)
            $STH->setFetchMode(PDO::FETCH_OBJ);
        else
            $STH->setFetchMode(PDO::FETCH_ASSOC);

        $arrAllData  = $STH->fetchAll();
        return $arrAllData;


    }// end of trashview();
    public function recover()
    {
        //$date = date('d/m/Y h:i:s');
        $sql = "UPDATE profile_picture SET is_deleted = 0 WHERE profile_pic_id = ".$this->id;
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

    public function delete_from_trash()
    {
        //$date = date('d/m/Y h:i:s');
        $sql = "delete from profile_picture WHERE profile_pic_id = ".$this->id;
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

        $sql = "SELECT * from profile_picture  WHERE is_deleted = 0 LIMIT $start,$itemsPerPage";

        $STH = $this->dbh->query($sql);

        $STH->setFetchMode(PDO::FETCH_OBJ);

        $arrSomeData  = $STH->fetchAll();
        return $arrSomeData;

    }// end of indexPaginator();

    public function trashedPaginator($page=0,$itemsPerPage=3){

        $start = (($page-1) * $itemsPerPage);

        $sql = "SELECT * from profile_picture  WHERE is_deleted <> '0' LIMIT $start,$itemsPerPage";

        $STH = $this->dbh->query($sql);

        $STH->setFetchMode(PDO::FETCH_OBJ);

        $arrSomeData  = $STH->fetchAll();
        return $arrSomeData;

    }// end of trashedPaginator();

    public function search($requestArray){
        $sql = "";
        if(isset($requestArray['byName']))
            $sql = "SELECT * FROM `profile_picture` WHERE `is_deleted` ='0' AND `profile_name` LIKE '%".$requestArray['search']."%'";

        $STH  = $this->dbh->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $someData = $STH->fetchAll();

        return $someData;

    }// end of search()



    public function getAllKeywords()
    {
        $_allKeywords = array();
        $WordsArr = array();
        $sql = "SELECT * FROM `profile_picture` WHERE `is_deleted` ='0'";

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