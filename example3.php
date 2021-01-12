<?php

// hàm tìm ra ước chung lớn nhất của $a và $b
function UCLN($a, $b) {

    // điệu kiện thực thi vòng lặp while là $a và $b khác nhau, nếu chúng bằng nhau thì vòng lặp dừng
    while($a != $b) {
        if ($a > $b) {
            $a -= $b; //  $a = $a - $b;
        } else {
            $b -= $a; // $b = $b - $a;
        }
    }
    // ở đây return về $a hay $b đều được vì ở while trên khi nó dừng thì $a và $b bằng nhau
    return $a;
}

// hàm tìm ra bội số chung nhỏ nhất của $a và $b
function BCNN($a, $b) {
    return ($a * $b) / UCLN($a, $b);
}

// sử dụng function
$a = 9; $b = 12;
echo "Ước chung lớn nhất của $a và $b là " . UCLN($a, $b);
echo "<br>Bội chung nhỏ nhất của $a và $b là " . BCNN($a, $b);

/* Thực thi vòng while của UCLN
$a = 9; $b = 12;
vòng lặp 1: $a = 9; $b = 12; ở đây $a != $b và $a < $b
    $b = $b - $a = 12 - 9 = 3;
vòng lặp 2: $a = 9; $b = 3; ở đây $a != $b và $a > $b
    $a = $a - $b = 9 - 3 = 6
vòng lặp 3: $a = 6; $b = 3; ở đây $a != $b và $a > $b
    $a = $a - $b = 6 - 3 = 3
vòng lặp 4: $a = 3; $b = 3; ở đây $a == $b nên dừng vòng lặp, không thực thi đoạn code trong while
lúc này $a = $b = 3; và return về 3; đây là ước chung lớn nhất của 9 và 12
*/