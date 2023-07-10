<?php 
$mysqli = new mysqli("localhost",'root','','1_crud_php');
if($mysqli->connect_error){
    exit('Error connection to database');
}
?>