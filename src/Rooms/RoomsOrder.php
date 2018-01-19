<?php

namespace App\Rooms;
use App\Database\Database as DB;
use PDO;
use PDOException;

class RoomsOrder extends DB
{

    public $id;
    public $checkin_date;
    public $total_rooms;
    public $stay_days_hotel;
    public $room_category;
    public $total_price;
    public $hotel_name;
    public $hotel_location;
    public $room_id;
    public $methodPayment;
    public $customer_details_id;
    public $order_id;


    public function setData($postVariable=NULL){
        if(array_key_exists("id",$postVariable)){
            $this->id=$postVariable['id'];
        }
        if(array_key_exists("customer_details_id",$postVariable)){
            $this->customer_details_id=$postVariable['customer_details_id'];
        }
        if(array_key_exists("checkin_date",$postVariable)){
            $this->checkin_date=$postVariable['checkin_date'];
        }
        if(array_key_exists("total_rooms",$postVariable)){
            $this->total_rooms=$postVariable['total_rooms'];
        }
        if(array_key_exists("stay_days_hotel",$postVariable)){
            $this->stay_days_hotel=$postVariable['stay_days_hotel'];
        }
        if(array_key_exists("room_category",$postVariable)){
            $this->room_category=$postVariable['room_category'];
        }
        if(array_key_exists("total_price",$postVariable)){
            $this->total_price=$postVariable['total_price'];
        }

        if(array_key_exists("hotel_name",$postVariable)){
            $this->hotel_name=$postVariable['hotel_name'];
        }

        if(array_key_exists("hotel_location",$postVariable)){
            $this->hotel_location=$postVariable['hotel_location'];
        }




    }

    public function newOrder($c_id){
		//var_dump($this); die();
		//echo $this->customer_details_id; die();
        try {

            $today =  date("Y-m-d H:i:s");

        $sql = "INSERT into customer_order_hotel(customer_details_id,hotel_name,hotel_location,room_category,arrival_time,day_of_stay,date_of_order,payment_type,total_room,total_price)
                                        VALUES (:customer_details_id,:hotel_name,:hotel_location,:room_category,:arrival_time,:day_of_stay,:date_of_order,:payment_type,:total_room,:total_price) ";
           $stm = $this->dbh->prepare($sql);
            $stm->bindParam(":customer_details_id", $c_id);
            $stm->bindParam(":hotel_name", $this->hotel_name);
            $stm->bindParam(":hotel_location", $this->hotel_location);
            $stm->bindParam(":room_category", $this->room_category);
            $stm->bindParam(":arrival_time", $this->checkin_date);
            $stm->bindParam(":day_of_stay", $this->stay_days_hotel);
            $stm->bindParam(":date_of_order", $today);
            $stm->bindParam(":payment_type", $this->methodPayment);
            $stm->bindParam(":total_room", $this->total_rooms);
            $stm->bindParam(":total_price", $this->total_price);
            $stm->execute();


            $this->order_id = $this->dbh->lastInsertId();
            // $this->row_count = $stm->rowCount();

        }catch (PDOException $em){
            echo $em->getMessage();
        }

    }

    /////////////////////////
    //start of index method///
    /////////////////////////


    public function index()
    {
        try {
            $sql = "SELECT * from customer_order_hotel  ORDER BY id DESC";
            $STH = $this->dbh->query($sql);
            $STH->setFetchMode(PDO::FETCH_OBJ);
            $arrAllData = $STH->fetchAll();
            return $arrAllData;
        }catch(PDOException $e){
            echo "Error:".$e->getMessage();
        }
    }

    public function indexPaginator($page=1,$itemsPerPage=3){

        $start = (($page-1) * $itemsPerPage);

        $sql = "SELECT * from customer_order_hotel  LIMIT $start,$itemsPerPage";

        $STH = $this->dbh->query($sql);

        $STH->setFetchMode(PDO::FETCH_OBJ);

        $arrSomeData  = $STH->fetchAll();
        return $arrSomeData;

    }// end of indexPaginator();

    /////////////////////////
    //start of view method///
    /////////////////////////

    public function viewForUsers(){
        $sql="SELECT * from customer_order_hotel WHERE `customer_details_id`=".$this->id;
        $STH=$this->dbh->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $arrOneData=$STH->fetchAll();
        return $arrOneData;
    }



}
