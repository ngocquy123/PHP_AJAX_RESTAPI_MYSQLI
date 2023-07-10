<?php include "includes/function.php"; 
    $user = (isset($_GET['id'])) ? delete($_GET['id']) : exit();
?>