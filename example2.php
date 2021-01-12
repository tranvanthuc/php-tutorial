<?php

// hàm tính tổng các số từ n -> 1 lưu ý số n >= 1
function sum($n) {
    $sum = 0;
    // duyệt từ 1 -> n và dùng biến $sum để cộng các giá trị của $i
    for($i=1; $i<=$n; $i++) {
        $sum = $sum + $i;
    }
    return $sum;
}

// sử dụng function
$n = 10;
echo "<br>Tổng các số từ $n -> 1 là: " . sum($n);