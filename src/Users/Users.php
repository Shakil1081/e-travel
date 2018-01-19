<?php

namespace App\Users;
use App\Database\Database as DB;
use PDO;
use App\Message\Message;
use PDOException;

class Users extends DB
{

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $address;
    public $country;
    public $city;
    public $zipcode;
    public $password;

	public function __constructor()
	{
		if(!isset($_SESSION)) {
			session_start();
		}
	}
    public function setData($postVariable=NULL){
		
        if(array_key_exists("id",$postVariable)){
            $this->id=$postVariable['id'];
        }
        if(array_key_exists("first_name",$postVariable)){
            $this->first_name=$postVariable['first_name'];
        }
        if(array_key_exists("last_name",$postVariable)){
            $this->last_name=$postVariable['last_name'];
        }
        if(array_key_exists("email",$postVariable)){
            $this->email=$postVariable['email'];
        }
        if(array_key_exists("phone",$postVariable)){
            $this->phone=$postVariable['phone'];
        }
        if(array_key_exists("address",$postVariable)){
            $this->address=$postVariable['address'];
        }
        if(array_key_exists("country",$postVariable)){
            $this->country=$postVariable['country'];
        }
        if(array_key_exists("city",$postVariable)){
            $this->city=$postVariable['city'];
        }
        if(array_key_exists("zipcode",$postVariable)){
            $this->zipcode=$postVariable['zipcode'];
        }
        if(array_key_exists("password",$postVariable)){
            $this->password=$postVariable['password'];
        }
    }


    public function newUser(){
		
            date_default_timezone_set("GMT");

            $sql = "INSERT into customer_details (customer_first_name,customer_last_name,customer_contact_number,customer_email,customer_address,customer_country,customer_city,customer_zipcode,customer_password)
                                        VALUES (:customer_first_name,:customer_last_name,:customer_contact_number,:customer_email,:customer_address,:customer_country,:customer_city,:customer_zipcode,:customer_password)";
            $stm = $this->dbh->prepare($sql);
            $stm->bindParam(":customer_first_name", $this->first_name);
            $stm->bindParam(":customer_last_name", $this->last_name);
            $stm->bindParam(":customer_contact_number", $this->phone);
            $stm->bindParam(":customer_email", $this->email);
            $stm->bindParam(":customer_address", $this->address);
            $stm->bindParam(":customer_country", $this->country);
            $stm->bindParam(":customer_city", $this->city);
            $stm->bindParam(":customer_zipcode", $this->zipcode);
            $stm->bindParam(":customer_password", $this->password);
            //$stm->bindParam(":email_verified", 'yes');
            $result = $stm->execute();
            //$last_id = $this->dbh->lastInsertId();
			
			if($result){
				Message::message('You have successfully registered. Please Login!');
			}else{
				Message::message('Registration Failed!');
			}
            //echo $last_id;
            // $this->row_count = $stm->rowCount();

    }



    public function is_exist(){

        $query="SELECT * FROM `customer_details` WHERE `customer_details`.`customer_email` =:email";
        $result=$this->dbh->prepare($query);
        $result->execute(array(':email'=>$this->email));
        $count = $result->rowCount();
        if ($count > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function is_registered(){
        $query = "SELECT * FROM `customer_details` WHERE `customer_email`=:email AND `customer_password`=:password";
        $result=$this->dbh->prepare($query);
        $result->execute(array(':email'=>$this->email, ':password'=>$this->password));

        $count = $result->rowCount();
        if ($count > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
	
	public function check_registered()
	{
        $query = "SELECT * FROM `customer_details` WHERE `customer_email`=:email";
        $result=$this->dbh->prepare($query);
		$result->execute(array(':email'=>$_SESSION['email']));

        $count = $result->rowCount();
        if ($count > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function login(){
        //$query = "SELECT * FROM `customer_details` WHERE `email_verified`='" . 'Yes' . "' AND `customer_email`=:email  AND `password`=:password";
        $query = "SELECT * FROM `customer_details` WHERE  `customer_email`=:email  AND `customer_password`=:password";
        $result=$this->dbh->prepare($query);
        $result->execute(array(':email'=>$this->email, ':password'=>$this->password));
        $row=$result->fetch(PDO::FETCH_OBJ);

        return $row;
    }
    public function view(){
        $query="SELECT * FROM `customer_details` WHERE `id` =:id";
        $result=$this->dbh->prepare($query);
        $result->execute(array(':id'=>$this->id));
        $row=$result->fetch(PDO::FETCH_OBJ);
        return $row;
    }// end of view()
	
	public function viewById($id)
	{
		$query="SELECT * FROM `customer_details` WHERE `id` =:id";
        $result=$this->dbh->prepare($query);
        $result->execute(array(':id'=>$id));
        $row=$result->fetch(PDO::FETCH_ASSOC);
        return $row;
	}
    public function lastUserView(){
        $query="SELECT * FROM `customer_details` WHERE `customer_email` =:email";
        $result=$this->dbh->prepare($query);
        $result->execute(array(':email'=>$this->email));
        $row=$result->fetch(PDO::FETCH_OBJ);
        return $row;
    }// end of view()



    //authontication
    public function logged_in(){
        if ((array_key_exists('email', $_SESSION)) && (!empty($_SESSION['email']))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function log_out(){
        $_SESSION['email']="";
        return TRUE;
    }






}
