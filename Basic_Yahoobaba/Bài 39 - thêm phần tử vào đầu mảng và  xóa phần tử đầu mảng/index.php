<?php

// Hàm array_shift(array) xóa phần tử đầu mảng
// Hàm array_unshift(array,value) thêm phần tử đầu mảng
$fruit = ["orange", "banana", "grapes"];

// array_shift($fruit);
array_unshift($fruit,'heelo');
echo "<pre>";
print_r($fruit);
echo "</pre>";
?>