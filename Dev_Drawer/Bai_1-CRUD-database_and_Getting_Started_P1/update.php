<?php include "includes/function.php"; 
    if(isset($_POST['btnUpdate'])):
        update($_POST['fname'],$_POST['lname'],$_POST['phone'],$_POST['id']);
    endif;
    $user = (isset($_GET['id'])) ? selectSingle($_GET['id']) : false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("theme/header-script.php")?>
</head>

<body>
    <?php if($user != false) : ?>
    <h1> Update</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $user['id']?>">
        <label for="">First Name</label>
        <input type="text" name="fname" id="fname" value="<?= $user["fname"] ?>">
        <br>
        <label for="">Last Name</label>
        <input type="text" name="lname" id="lname" value="<?= $user["lname"] ?>">
        <br>
        <label for="">Phone</label>
        <input type="text" name="phone" id="phone" value="<?= $user["phone"] ?>">
        <br>
        <button name="btnUpdate">Sửa</button>
    </form>
    <?php else: ?>
    <h1>Người dùng không tồn tại</h1>
    <?php  endif;?>

    <?php include("theme/footer-scripts.php") ?>
</body>

</html>