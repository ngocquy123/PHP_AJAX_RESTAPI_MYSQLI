<?php
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    include 'config.php';
    
   $id =  $_GET['id'];
   $check = $conn->query("SELECT * FROM student where id = $id");
   if($check):
    $stmt = $conn->prepare("DELETE FROM student WHERE id = ?");
    $stmt->bind_param('i',$id);
    $result = $stmt->execute();
    $stmt->close();
    if($result):
        echo json_encode(['status'=>1,'messenger'=>'Đã xóa dữ liệu']);
    else:
        echo json_encode(['status'=>0,'messenger'=>'Có lỗi xảy ra']);
    endif;
   else:
    echo json_encode(['messenger'=>"Không tìm thấy dữ liệu"]);
endif;
   
?>