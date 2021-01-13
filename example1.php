<?php

// hàm tính chu vi sẽ có 2 tham số là 2 cạnh của HCN
function chuViHCN($a, $b) {
    // trả về chu vi với công thức (a+b)*2
    return ($a+$b)*2;
}

// execute function 
$canhA = 3;
$canhB = 5;
$chuVi = chuViHCN($canhA, $canhB);
// sử dụng echo để hiển thị message ra màn hình
echo "Canh A = $canhA, Canh B = $canhB co chu vi la $chuVi";