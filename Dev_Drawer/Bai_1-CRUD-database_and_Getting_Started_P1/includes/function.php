<?php 
 require_once "db.php";

//  format arrays
function formatcode($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";    
}
// select Sstatement
function selectAll(){
    global $mysqli;
    $data = [];
    $stmt = $mysqli->prepare('SELECT * FROM employees');
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 0) echo "Chưa có dữ liệu";
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $stmt->close();
    return $data;
}
// select single statement
function selectSingle($id = null){
    global $mysqli;
    $stmt = $mysqli->prepare('SELECT * FROM employees WHERE id = ?');
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 0) echo "Chưa có dữ liệu";
    $row = $result->fetch_assoc();
    $stmt->close();
    return $row;
}
// Insert Statement
function insert($fname = null,$lname = null,$phone = null){
    global $mysqli;
    $stmt = $mysqli->prepare("INSERT INTO employees(fname,lname,phone) VALUES(?,?,?)");
    $stmt->bind_param("sss",$fname,$lname,$phone);
    $stmt->execute();
    $stmt->close();
    header('Location:update.php?id='.$mysqli->insert_id);
}
// Update Statement
function update($fname = null,$lname = null,$phone = null,$id){
    global $mysqli;
    $stmt = $mysqli->prepare("UPDATE employees SET fname = ?,lname = ?,phone = ? WHERE id = ?");
    $stmt->bind_param("sssi",$fname,$lname,$phone,$id);
    $stmt->execute();
    if($stmt->num_rows() === 0) echo "Không tìm thấy cột cần update";
    $stmt->close();
}
// Delete Statement
function delete($id){
    global $mysqli;
    $stmt = $mysqli->prepare("DELETE FROM employees WHERE id = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
    header("Location:./");
}
?>