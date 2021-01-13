<?php

// Số nguyên tố là số lớn hơn 1 và chỉ chia hết chia hết cho 1 và chính nó
// hàm kiểm tra số nguyên tố và lưu ý n là số nguyên dương > 0
function checkPrimeNumber($n)
{
    // Nếu số đó nhỏ hơn 2 (nghĩa nếu nhỏ hơn hoặc bằng 1) thì không phải là số nguyên tố, lớn hơn 1 mới là số nguyên tố
    if ($n < 2) {
        return false;
    }

    /* 
    nếu n > 2 thì ta tiếp tục với vòng lặp for để kiểm tra n có chia hết cho bất kỳ số nào từ 2 -> số nhỏ hơn 1 nữa của nó
    VD n = 9 -> n/2 = 4; ta chỉ cần kiểm nha n không chia kết cho 2, 3, 4 -> n là số nguyên tố
    ở đây n chia hết cho 3 -> n = 9 không phải là số nguyên tố
    */ 
    // kiểm tra n có chia hết cho các số nhỏ hơn một phần 2 của nó
    for($i = 2; $i <= $n/2; $i++) {
        if ($n % $i == 0)
            return false;  
    }

    /* nếu vòng lặp for không return về false nghĩa là n không chia hết cho bất kỳ số nào nhỏ hơn một nửa của nó 
    nghĩa là n là số nguyên tố -> chúng ta return true
    */
    return true;
}

// sử dụng function
$n = 11; 
$boolCheck = checkPrimeNumber($n);
if ($boolCheck) {
    echo "$n là số nguyên tố";
} else {
    echo "$n không phải là số nguyên tố";
}

/* bài tập mở rộng
Viết function in ra màn hình các số nguyên tố nhỏ hơn n 
VD: n = 20 thì các số nguyên tố nhỏ hơn là 2, 3, 5, 7, 11, 13, 17, 19
Gợi ý sử dụng vòng lặp for và sử dụng hàm check ở trên để in các số nguyên tố thỏa mãn ra màn hình
*/
