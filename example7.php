<?php

require "./functions.php";

// hàm tính trung bình cộng các số chẵn trong mảng
function averageEvenInArray($array) {
    $sum = 0;
    $count = 0;
    foreach($array as $value) {
        // kiểm tra nếu chia dư bằng 0 nghĩa là chia hết cho 2
        if ($value % 2 == 0) {
            echo "$value ,";
            $sum += $value;
            $count++;
        }
    }

    echo "<br>Sum = $sum, count = $count";
    return $sum/$count;
}

// execute function
$array = [1,2,3,4,5,6,7,8];
printArray($array);
$avg = averageEvenInArray($array);

echo "<br>Avg = $avg";