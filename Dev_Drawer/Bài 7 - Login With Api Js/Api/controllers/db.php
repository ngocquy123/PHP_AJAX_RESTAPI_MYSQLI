<?php
    class DB{
        private $host = "localhost";
        private $username = 'root';
        private $password = '';
        private $database_name = 'sampleapi';

        public $conn;

        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new mysqli($this->host,$this->username,$this->password,$this->database_name);
                
            }catch(Exception $e){
                echo "Không thể kết nối đến dữ liệu: ".$e->getMessage();
            }
            return $this->conn;
        }
    }
?>