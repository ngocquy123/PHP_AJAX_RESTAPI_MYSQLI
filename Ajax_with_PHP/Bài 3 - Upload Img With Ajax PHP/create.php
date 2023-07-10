<?php
header('Content-Type: application/json; charset=utf-8');
// include "database.php";
$json = file_get_contents('php://input');
$data = json_decode($json);
print_r($data);
?>