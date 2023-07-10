<?php 
 class Database{
    public $conn = '';
    public function __construct()
    {
        $this->conn = new mysqli('localhost','root','','ajax-jquery-php');
        if($this->conn){
            return true;
        }else{
            return false;
        }
    }
    // public function __destruct()
    // {
    //     if($this->conn){
    //         mysqli_close($this->conn);
    //     }else{
    //         return false;
    //     }
    // }
 }
?>