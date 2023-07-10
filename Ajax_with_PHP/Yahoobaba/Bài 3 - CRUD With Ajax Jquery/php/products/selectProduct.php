<?php include "../config.php" ?>
<?php 
    $db = new Database();
    $sql = "select * from product where status = 0";
    $result = $db->conn->query($sql);
    if($result->num_rows  > 0){
        $row = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($row);
        
    }else{
        echo json_encode(['message','Bạn chưa thêm sản phẩm !']);
    }
    
?>