<?php 
 class Setup {

    private $conn;
    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function createTables(){
        $messages = [];
        $messages[] = "[Setup Started] <br>";
        $messages[] = "[Setup Completed] <br>";
        return $messages;
    }
 }
?>