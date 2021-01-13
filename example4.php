<?php

require "./functions.php";

// sử dụng hai hàm checkItemInArray và removeItemInArrayByIndex ở file functions.php

function checkAndDeleteItemInArray($array, $item) {

    // sử dụng 2 hàm đã làm ở các bài trước
    // đó là lý do tại sao bỏ 2 hàm này ở trong file functions để chúng require vào tránh trùng lặp code

    // tìm vị trí của item trong array
    $index = checkItemInArray($array, $item);

    // xóa phần tử ở vị trí index vừa được tìm được ở trên
    $newArray = removeItemInArrayByIndex($array, $index);

    return $newArray;
}

// execute function
$array = [4,1,2,3,5,7];
$item = 4;
printArray($array);

$newArray = checkAndDeleteItemInArray($array, $item);
echo "Delete Item = $item <br>";
printArray(($newArray));