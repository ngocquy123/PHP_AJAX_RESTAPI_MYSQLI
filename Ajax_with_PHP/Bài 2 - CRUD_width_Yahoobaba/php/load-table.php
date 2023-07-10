<?php
header('Content-Type: application/json; charset=utf-8');
    include 'config.php';

    $sql = "select hs.id,hs.first_name,hs.last_name,hs.city,cl.name
    from student hs join class cl on cl.id = hs.class";
    $result = $conn->query($sql) or die('Truy Vấn Thât Bại');
    $output = [];
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $output[] = $row;
        }
    }else{
        $output['empty'] = ['empty'];
    }
    mysqli_close($conn);

    echo json_encode($output);
?>