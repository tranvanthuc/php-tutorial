<?php

// hàm sắp xếp mảng và in ra các phần tử của mảng
function printSortArray($array)
{
    /* 
    sử dụng hàm sort để sắp xếp các giá trị trong array
    hàm này sẽ tham chiếu đến biến $array, nên sau khi hàm này thực thi $array đã được sắp xếp lại
    và chúng ta sẽ dùng viến này để for
    */
    sort($array);
    $length = count($array);
    foreach($array as $index => $value) {
        // tương tự ở vd bài trước, sẽ in ra không có dấu , nếu là phần tử cuối cùng của array
        if ($index == $length - 1) { 
            echo $value;
        } else {
            echo "$value, ";
        }
    }
}

// sử dụng function
$arr = [15, 24, 10, 5, 9];
printSortArray($arr);