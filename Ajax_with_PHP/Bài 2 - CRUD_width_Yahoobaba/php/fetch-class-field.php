<?php
header('Content-Type: application/json; charset=utf-8');
    include 'config.php';

    $sql = "SELECT * FROM class";
    $result = $conn->query($sql) or die('Truy vấn thất bại');
    $output = [];
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $output[] = $row;
        }
    }else{
        return false;
    }
    mysqli_close($conn);

    echo json_encode($output);
?>