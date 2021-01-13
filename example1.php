<?php

require "./functions.php";

// xem function checkItemInArray ở file functions.php

// execute function
$array = [4,1,3,5,7];
printArray($array);
$item = 10;
$index = checkItemInArray($array, $item);

if ($index != -1) {
    echo "$item ton tai trong mang voi index = $index";
} else {
    echo "Khong ton tai $item trong mang";
}