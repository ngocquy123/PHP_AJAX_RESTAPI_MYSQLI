<?php include "database.php" ?>
<?php
   
    $sql ="select * from students";
    $result = $conn->query($sql) or die('Có lỗi xảy ra !');   
    $output = "";
    if($result->num_rows > 0){
        $output = "<table class='table table-striped'>
        <thead>
            <tr>
                <th scope='col'>STT</th>
                <th scope='col'>Họ Và Tên</th>
                <th scope='col'>Số Điện Thoại</th>
                <th scope='col'>Email</th>
                <th scope='col'>Class</th>
                <th scope='col'>Hành Động</th>
            </tr>
        </thead>
        <tbody> ";
        while($row = $result->fetch_assoc()){
            $output .= " 
            <tr>
            <th scope='row'>".$row["id"]."</th>
            <td>".$row['name']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['email']."</td>
            <td>".$row['class']."</td>
            <td>
            <button class='btn btn-warning text-white' data-edit='$row[id]'>Sửa</button>
            <button class='btn btn-danger text-white' data-delete='$row[id]'>Xóa</button>
            </td>
            </tr>";
        }
           $output .= "</tbody> </table>";
           mysqli_close($conn);
           echo $output;
    }else{
        return "Bạn chưa thêm dữ liệu";
    }
    // if($)

?>