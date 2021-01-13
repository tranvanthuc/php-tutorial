<?php

require "./functions.php";

// hàm tìm giá trị nhỏ nhất trong mảng
function findMinInArray($array) {
    $index = -1;
    // gán giá trị min là phần tử đầu tiên của mảng
    $min = $array[0];

    // duyệt các phần tử mảng và so sánh với giá trị min
    foreach($array as $key => $item) {
        // nếu min lớn phần tử item thì nghĩa là item nhỏ hơn min, 
        // nên cần gán lại min có giá trị mới là phần tử item hiện tại đang duyệt
        if ($min > $item) {
            $min = $item;
            $index = $key;
        }
    }

    return [$min, $index];
}

// execute function
$array = [4,6,8,10,2,3,5,7];
printArray($array);
list($min, $index) = findMinInArray($array);
if ($index > 0) {
    echo "Min = $min, index = $index";
}