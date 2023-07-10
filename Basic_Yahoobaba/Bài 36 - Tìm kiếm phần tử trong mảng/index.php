<?php
    $food = ['orange', 'banana', 'apple', 'grapes'];
//  Hàm in_array(value,array) tìm kiếm phần tử trong mảng
//  nếu có thì trả lại giá trị 1 ngược lại 0
    // echo in_array('orange',$food);

// Hàm array_search(value,array) tìm kiếm phần tử trong mảng
//  trả lại key phần tử đó đang đứng trong mảng
$food2 = ['a' => 'orange', 'b' => 'banana', 'c' => 'apple', 'd' => 'grapes'];
echo array_search('banana',$food2);
?>