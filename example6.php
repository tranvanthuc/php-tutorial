<?php

require "./functions.php";

// sử dụng hai hàm findMaxInArray ở file functions.php

// execute function
$array = [4,6,8,10,2,3,5,7];
list($max, $index) = findMaxInArray($array);
if ($index > 0) {
    echo "max = $max, index = $index";
}