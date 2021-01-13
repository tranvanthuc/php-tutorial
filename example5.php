<?php

// hàm tính tổng các số từ 1 -> n
function sum($n) {
    $sum = 0;
    // duyệt từ 1 -> n và dùng biến $sum để cộng các giá trị của $i
    for($i=1; $i<=$n; $i++) {
        $sum = $sum + $i; //cách viết khác $sum += $i;
    }
    return $sum;
}

// sử dụng function
$n = 10;
echo "<br>Tổng các số từ 1 -> $n là: " . sum($n);