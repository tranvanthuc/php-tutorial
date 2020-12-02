<?php

// hàm tính tổng các số từ n -> 1 lưu ý số n >= 1
function sum($n)
{
    // nếu n = 1 thì in ra 1 và return tổng là 1
    if ($n == 1) {
        echo 1;
        return 1;
    }

    /*
        nếu n khác 1 thì in ra n, 
        VD: 4, 3, 2, 1
        sau đó đệ quy, return về $n + sum($n-1)
        đệ quy sẽ dừng cho đến khi n = 1, thỏa mãn điều kiện if ở trên và dừng
    */
    echo "$n, ";
    return $n + sum($n-1);
}

// sử dụng function
$n = 10;
echo "<br>Tổng các số từ $n -> 1 là: " . sum($n);