<?php
include "database.php";
if(!empty($_POST['username']) || !empty($_POST['email']) || !empty($_POST['password'])):
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = MD5($_POST['password']);
    $stmt = $conn->prepare("INSERT INTO users(username,email,password) VALUES(?,?,?)");
    $stmt->bind_param('sss',$username,$email,$password);
    $result = $stmt->execute();
    if($result == 1):
        echo 'Đã thêm người dùng';
    else:
        echo 'Có lỗi xảy ra';
    endif;
    $stmt->close();
else:
    return false;
endif;
?>