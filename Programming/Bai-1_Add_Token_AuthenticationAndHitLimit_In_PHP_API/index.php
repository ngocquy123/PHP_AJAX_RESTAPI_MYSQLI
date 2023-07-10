<?php 
    $url = "http://localhost:88/php/Programming/Bai-1_Add_Token_AuthenticationAndHitLimit_In_PHP_API/datajson.php?key=123123123adsad";
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    if(isset($result['status'])){
        if($result['status']==true){
            if(isset($result['result'])){
                if($result["result"]== true){
                    ?>
<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach($result['data'] as $list){ 
            echo "<tr>
            <td>".$list['id']."</td>
            <td>".$list['name']."</td>
            <td>".$list['email']."</td>
            </tr>";
            
        }
            ?>


    </tbody>
</table>
<?php 
                }
            }else{
                echo $result['data'];
            }
            
        }else{
            echo $result['data'];
        }
    }else{
        echo "API Không hoạt động";
    }
?>