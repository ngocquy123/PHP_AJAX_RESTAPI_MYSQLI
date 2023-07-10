<?php 
    $conn = new mysqli("localhost","root","","login-with-ajax") or die('Connect Database Failed');
    if($conn->error):
        return "Kết nối database thất bại". $conn->error;
    else:
        return false;
    endif;
?>