<?php
if($_SERVER['REQUEST_METHOD'] === "POST"):
    if($_POST['email'] || $_POST['password']):
        session_start();
    include "database.php";
        $email = $_POST['email'];
        $password = MD5($_POST['password']);
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $stmt->bind_param('ss',$email,$password);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows === 1):
            while($row = $result->fetch_assoc()):
                $_SESSION['user'] = [];
                $_SESSION['user']['username'] = $row['username'];
                $_SESSION['user']['id'] = $row['id'];
                $_SESSION['user']['role'] = $row['role'];
            endwhile;
            echo 'success';
        else:
            echo 'có lỗi';
        endif;
        $stmt->close();

    else:
        echo ' lỗi';
    endif;
else:
    echo 'Dữ liệu được gửi không phải phương thức POST';
endif;

?>