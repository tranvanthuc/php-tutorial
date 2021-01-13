<?php

function chuViHV($a) {
    return $a*4;
}

// execute function
$canh = 5;
$chuVi = chuViHV($canh);
echo "Chu vi hình vuông có cạnh a = $canh là $chuVi";