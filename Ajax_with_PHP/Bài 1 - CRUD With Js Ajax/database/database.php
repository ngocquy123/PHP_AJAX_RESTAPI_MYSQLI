<?php
 class Database{
    public $conn = '',$error ='';
    public function __construct(){
        $this->conn = new mysqli('localhost','ajaxphp','123','ajax-php') or die(' connect failer !');
        if($this->conn){
            return 1;
        }else{
            return false;
        }
    }
    
    public function __destruct()
    {
        if($this->conn){
            mysqli_close($this->conn);
        }
    }
 }

?>