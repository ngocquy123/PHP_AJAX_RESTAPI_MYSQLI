<?php
    // $food = ['orange','banana','apple','grapes'];
// Đếm số lượng phần tử trong mảng sử dung count()
    // echo count($food);
// Đếm xem kích thước mảng sử dụng sizeof();
$food = [
    'fruits' => ['oranger','banana'],
    'veggie' => ['carrot','collard','haha'],
];
    echo count($food['veggie'],1);
?>