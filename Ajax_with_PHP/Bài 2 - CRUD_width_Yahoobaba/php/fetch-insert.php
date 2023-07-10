<?php
   header('Content-Type: application/json; charset=utf-8');
   header('Access-Control-Allow-Origin: *');

   include 'config.php';
   $input = file_get_contents('php://input');
   $data = json_decode($input,true);
    if(empty($data)):
        echo json_encode(['messenger'=>"Hiện tại chưa có dữ liệu gửi đến"]);
    else:
        $firstname = $data['fname'];
        $lastname = $data['lname'];
        $class = $data['class'];
        $city = $data['city'];
        if($firstname == "" || $lastname == "" || $class == ""||$city ==""):
                echo json_encode(['status'=>0,'messenger'=>"Vui lòng điền dữ liệu vào tất cả các trường"]);
        else:
                $stmt = $conn->prepare("INSERT INTO student(first_name,last_name,city,class) VALUES(?,?,?,?)");
                $stmt->bind_param('sssi',$firstname,$lastname,$city,$class);
                $result = $stmt->execute();
                $stmt->close();
                if($result == 1):
                    echo json_encode(['insert'=>'success','status'=>'1',"messenger"=>"Đã thêm dữ liệu"]);
                else:
                    echo json_encode(['status'=>'0','messenger'=>"Bị dính lỗi quần què"]);
                endif;
               
        endif;
    endif;
   
?>