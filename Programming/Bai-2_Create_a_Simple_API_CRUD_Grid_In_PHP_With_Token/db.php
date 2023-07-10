<?php
    $conn = new mysqli("localhost","root","","api_token_login");
    if($conn->connect_errno){
        echo "Kết nối thất bại vui lòng kiển tra lại".$conn->connect_error;
        exit();
    }
    function fomartCheck($arr){
        echo "<pre>";
        print_r($arr);
        echo"</pre>";
    }

?>