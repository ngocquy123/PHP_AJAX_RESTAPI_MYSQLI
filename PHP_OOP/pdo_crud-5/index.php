<?php
    include_once('includes/autoloader.inc.php');
    // include_once('classes/taikhoan.class.php');
    // include_once('classes/giohang.class.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    echo Nguoidung::all("Người Dùng")."<br>";
    echo Taikhoan::all("Tài Khoản")."<br>";
    echo Giohang::all("Giỏ Hàng")."<br>";

       
    ?>
</body>
</html>