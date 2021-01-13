<?php

require "./functions.php";

// xem function countItemsAppearInArray ở file functions.php

function removeExistItemInArray($array) {
    // tạo một mảng rỗng lưu trữ các phần tử không trùng
    $tempArray = [];

    // duyệt tất cả các phần tử trong mảng
    foreach($array as $item) {
        $count = countItemsAppearInArray($tempArray, $item);
        // đếm số lần xuất hiện của phần tử item đang duyệt trong mảng temp
        // nếu nó chưa có trong mảng temp thì ta thêm nó vào bằng hàm array_push
        if ($count == 0) {
            array_push($tempArray, $item);
        }
    }

    return $tempArray;
}

// execute function
$array = [1,2,3,4,2,1,5,2,5,1];
printArray($array);
$newArray = removeExistItemInArray($array);
printArray($newArray);