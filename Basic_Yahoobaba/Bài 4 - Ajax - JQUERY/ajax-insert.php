<?php include "database.php" ?>
<?php

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    // $class = $_POST['class'];

    $stmt = $conn->prepare("insert into students(name,phone,email) value(?,?,?)");
    $stmt->bind_param("sss",$name,$phone,$email) or die('SQL Failed');
    $result = $stmt->execute();
    if($result){
        echo 1;
    }else{
        echo 0;
    }
?>