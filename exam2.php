<?php

$n = 10;
// bạn có thể thay đổi giá trị của $n

$sum = 0;

for($i = 1; $i <= $n; $i++) {
    $sum += $i;
}

echo "Tong tu 1 -> " . $n . " la " . $sum;

// run lệnh php -S localhost:80 exam2.php