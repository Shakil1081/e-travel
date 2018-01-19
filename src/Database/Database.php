<?php
namespace App\Database;
use PDO;
use PDOException;
class Database{
    public $dbh;
    public $host="localhost";
    public $dbname="e-travel";
    public $user="root";
    public $password="";

    public function __construct()
    {
        try {

            $this->dbh = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $error){
            echo $error->getMessage();
        }
    }

}
