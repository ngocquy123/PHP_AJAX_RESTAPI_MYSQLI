<?php 
header('Content-Type: application/json; charset=utf-8');

include "db.php";

if(isset($_GET['token'])):
    $token = $conn->real_escape_string($_GET['token']);
    $checkToken = $conn->prepare("SELECT * FROM api_token WHERE token = ?");
    $checkToken->bind_param('s',$token);
    $checkToken->execute();
    $result = $checkToken->get_result();
     if($result->num_rows > 0){
        $checkTokenRow = $result->fetch_assoc();
        if($checkTokenRow['status'] == 1):
            $sqlRes = $conn->query("SELECT * FROM users");
            if($sqlRes->num_rows > 0):
                $data = [];
                while($row = $sqlRes->fetch_assoc()):
                    $data[] = $row;
                endwhile;
                $status = "true";
                $code = "4";
            endif;
        else: 
            $status = "true";
            $data = "API key đã bị tắt";
            $code = "3";
        endif;
     }else{
        $status = "true";
        $data = "Vui lòng tạo API Token";
        $code = "2";
     }
     $result->close();
else:
    $status = "true";
    $data = " Vui lòng nhập API Token";
    $code = "1";

endif;

echo json_encode(['status'=>$status,'data'=>$data,'code'=>$code]);

?>