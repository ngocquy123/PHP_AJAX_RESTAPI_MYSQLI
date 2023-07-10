<?php
session_start();
if(!isset($_SESSION['user'])):
header('location:ajax-login.php');
elseif($_SESSION['user']['role'] === 1):
    header('location:index1.php');
endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Chào mừng <?= $_SESSION['user']['username'] ?> đến với trang quản trị </h2>
    <a href="logout.php">Đăng xuất</a>
</body>

</html>