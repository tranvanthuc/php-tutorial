<?php

$array = [1, 2, 3, 4, 5, 6];

$sum = 0;
$count = 0;

foreach($array as $value) {
    $sum += $value;
    $count++;
}

$avg = $sum/$count;

echo "Trung bình cộng là " . $avg;

// run lệnh php -S localhost:80 exam3.php