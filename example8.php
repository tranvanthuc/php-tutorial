<?php

require "./functions.php";

// hàm tính tổng các số chia hết cho 3 trong mảng
function sumNumbersDivide3InArray($array) {
    $sum = 0;
    foreach($array as $value) {
        // chia 3 dư 0 nghĩa là chia hết cho 3
        if ($value % 3 == 0) {
            echo "$value ";
            $sum += $value; // $sum = $sum + $value
        }
    }

    return $sum;
}

$array = [1,2,3,4,5,6,7,8,9];
printArray($array);
$sum = sumNumbersDivide3InArray($array);
echo "<br>Sum = $sum";