<?php include "includes/function.php"; 
    if(isset($_POST['btnInsert'])):
        insert($_POST['fname'],$_POST['lname'],$_POST['phone']);
    endif;
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <h1> Insert</h1>
                <form action="" method="post">
                    <label for="">First Name</label>
                    <input type="text" name="fname" id="fname" value="" required>
                    <br>
                    <label for="">Last Name</label>
                    <input type="text" name="lname" id="lname" value="" required>
                    <br>
                    <label for="">Phone</label>
                    <input type="text" name="phone" id="phone" value="" required>
                    <br>
                    <button name="btnInsert" class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>

    <?php include("theme/footer-scripts.php") ?>
</body>

</html>