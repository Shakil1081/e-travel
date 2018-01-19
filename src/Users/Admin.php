<?php


namespace App\Users;
use App\Database\Database as DB;
use PDO;
use PDOException;

class Admin extends DB{
    public $email;
    public $password;
    public $admin_email;


    public function setData($postVariable=NULL)
    {
        if (array_key_exists("email", $postVariable)) {
            $this->email = $postVariable['email'];
        }
        if (array_key_exists("password", $postVariable)) {
            $this->password = $postVariable['password'];
        }
        if (array_key_exists("admin_email", $postVariable)) {
            $this->admin_email = $postVariable['admin_email'];
        }

    }


    public function is_exist(){
        $query = "SELECT * FROM `admin_users` WHERE `user_email`=:email";
        $result=$this->dbh->prepare($query);
        $result->execute(array(':email'=>$this->email));

        $count = $result->rowCount();
        if ($count > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function is_admin(){
        $query = "SELECT * FROM `admin_users` WHERE `user_email`=:email AND `user_password`=:password";
        $result=$this->dbh->prepare($query);
        $result->execute(array(':email'=>$this->email, ':password'=>$this->password));

        $count = $result->rowCount();
        if ($count > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function is_loged_in(){
        $query = "SELECT * FROM `admin_users` WHERE `user_email`=:email";
        $result=$this->dbh->prepare($query);
        $result->execute(array(':email'=>$this->admin_email));

        $count = $result->rowCount();
        if ($count > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function admin_ifo(){
        $query = "SELECT * FROM `admin_users` WHERE `user_email`=:email";
        $result=$this->dbh->prepare($query);
        $result->execute(array(':email'=>$this->admin_email));

        $oneData = $result->fetch(PDO::FETCH_OBJ);

        return $oneData;

    }








}