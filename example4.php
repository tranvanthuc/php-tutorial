<?php

// hàm đếm số từ trong một chuỗi string
function countNumberOfString($string)
{
    echo "Các từ của string <b>'$string'</b> là: <br>";
    /* hàm explode sẽ trả về một array sau khi cắt chuỗi string dựa theo param đầu tiên được truyền vào " "
    trong vd của chúng ta là dấu cách 
    */
    $array = explode(" ", $string);
    
    // hàm count đếm số phần tử của array
    $length = count($array); 
    /*  index thứ tự của phần tử sẽ có giá trị bắt đầu từ 0
        value là giá trị của phần tử
    */
    foreach ($array as $index => $value) { 
        echo "$value<br>";
    }
    return $length;
}

// sử dụng function
$str = "Chào mừng mọi người đã đến với khóa học PHP Core";
$length = countNumberOfString($str);
echo "<br>Có $length từ trong string trên";