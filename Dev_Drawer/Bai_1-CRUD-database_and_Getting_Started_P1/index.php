<?php 
include "includes/function.php";
$allEmployees = selectAll();
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
    <?php include "theme/header.php" ?>
    <div class="container">
        <div class="row m-3">
            <div class="col-md-8">
                <h1> <i class="fa-solid fa-check"></i> Welcome To Quy Nguyen</h1>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($allEmployees as $value): ?>
                        <tr>
                            <td><?= $value['id']?></td>
                            <td><?= $value['fname']?></td>
                            <td><?= $value['lname']?></td>
                            <td><?= $value['phone']?></td>
                            <td class="text-right">
                                <a href="update.php?id=<?= $value['id'] ?>" class="btn btn-warning text-white"><i
                                        class="fa-regular fa-pen-to-square"></i></a>
                                <a href="delete.php?id=<?= $value['id'] ?>" class="btn btn-danger text-white"
                                    onClick="return confirm('Bạn có muôn xóa ?')"><i class="fa-light fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- Javascript -->
    <?php include("theme/footer-scripts.php") ?>
</body>

</html>