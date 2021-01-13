<?php

function binhPhuong($a) {
    return $a*$a;
}

// execute function
$num = 10;
$bp = binhPhuong($num);
echo "Bình phương của $num là $bp";