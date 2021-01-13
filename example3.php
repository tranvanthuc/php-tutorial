<?php

function chuViTG($a, $b, $c) {
    return $a + $b + $c;
}

// execute function
$a = 4; 
$b = 5;
$c = 6;
$chuVi = chuViTG($a, $b, $c);
echo "Chu vi có các cạnh a = $a, b = $b, c = $c là $chuVi";