<?php
header("Content-Type: application/json;charset=utf-8");

include "db.php";
if(isset($_GET['key'])){
    $key = mysqli_real_escape_string($conn,$_GET['key']);
    $stmt = $conn->prepare("SELECT * FROM api_token WHERE token = ?");
    $stmt->bind_param('s',$key);
    $stmt->execute();
    $checkRes = $stmt->get_result();
    if($checkRes->num_rows > 0 ){
       $checkRow = $checkRes->fetch_assoc();
       if($checkRow['status'] == 1){
        if($checkRow['hit_count'] >= $checkRow['hit_limit']){
            echo json_encode(['status'=>'true','data'=>'API hit limit exceed']);
            die();
        }else{
          $conn->query("UPDATE api_token set hit_count = hit_count + 1 where token = '$key'");
        }
           
        $sql = $conn->prepare("SELECT * FROM users");
        $sql->execute();
        $result = $sql->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $arr[]=$row;
            }
            echo json_encode(['status'=>'True','data'=>$arr,'result'=>'found']);
        }else{
            echo json_encode(['status'=>'true','data'=>'Không có dữ liệu trả về','result'=>'Không có gì']);
        }
        $sql->close();

       }else{
        echo json_encode(['status'=>'false','data'=>'Trạng thái key đang off']);
       }
       
    }else{
        echo json_encode(['status'=>'false','data'=>'Không tìm thấy API Key']);
    }
    $checkRes->close();
    
}else{
    echo json_encode(['status'=>'false','data'=>'Vui lòng nhập api key']);
}
// fomartCheck($result->fetch_all());
?>