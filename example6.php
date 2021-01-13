<?php

/* hàm tính giai thừa 
4! = 4*3*2*1
nên chúng ta sẽ sử dụng for từ 1 -> n và nhân tất cả các số này lại sẽ có được giá trị của giai thừa
*/
function factorial($n) {
    $result = 1;
    for($i=1; $i<=$n; $i++) {
        $result *= $i; // $result = $result * $i
    }

    return $result;
}

// execute function
$number = 4;
$factorial = factorial($number);
echo "Giai thua cua $number! = $factorial";