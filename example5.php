<?php

// hàm tính tổng các con số của một số truyền vào
function sumNumber($n)
{
    $sum = 0;
    while ($n > 0) {
        /*
        $sum = $sum + $n%10;
        trong đó $n%10 là kết quả chia dư
        VD: 14 -> 14%10 = 4
        sau khi chia dư xong thì ta chia n cho 10 
        */
        $sum += $n % 10;
        $n /= 10;
    }
    return $sum;
}

// sử dụng function
$number = 123; 
// Tổng các con số sẽ là 1 + 2 + 3 = 6
echo "Tổng các chữ số của $number là " . sumNumber($number);

/**
 * vòng lặp 1: n = 123 > 0 -> $sum = $sum + n%10 = 0 + 3 = 3; sau đó $n = $n/10 = 12;
 * vòng lặp 2: n = 12 > 0 -> $sum = $sum + n%10 = 3 + 2 = 5; sau đó $n = $n/10 = 1;
 * vòng lặp 3: n = 1 > 0 -> $sum = $sum + n%10 = 1 + 5 = 6; sau đó $n = $n/10 = 0;
 * vòng lặp 4: n = 0 > 0 sai -> dừng vòng lặp return $sum là 6;
 */