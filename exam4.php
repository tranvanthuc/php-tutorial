<?php

$toan = 10;
$ly = 8;
$hoa = 7;

$avg = ($toan + $ly + $hoa) / 3;
$avg = round($avg, 1);
echo "Diem trung binh  " . $avg . " -- ";

switch(true) {
    case $avg >= 8: 
        echo "Xep loai A"; break;
    case $avg < 8 && $avg >= 6:
        echo "Xep loai B"; break;
    case $avg < 6 && $avg >= 4:
        echo "Xep loai C"; break;
    default:
        echo "Thi lai";
}

// run lệnh php -S localhost:80 exam4.php