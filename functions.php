<?php

// hàm kiểm tra phần tử có tồn tại trong mảng không
function checkItemInArray($array, $item) {
    $index = -1;

    // duyệt các phần tử mảng và kiểm tra có khớp với giá trị đưa vào hay không và gán lại vị trí index
    foreach($array as $key => $value) {
        if ($value == $item) {
            $index = $key;
            break;
        }
    }
    return $index;
}

// thêm một phần tử vào vị trí index mảng
function addItemIntoArraybyIndex($array, $item, $index) {
    $length = count($array); // đếm số phần tử của mảng hiện tại

    // kiểm tra index nhập vào đúng không
    if ($index < 0 || $index > $length) {
        return $array;
    }

    $newLength = $length + 1; 
    // length mới bằng $length cũ cộng thêm 1 vì ta muốn thêm một phần tử vào
    // i sẽ bắt đầu từ vị trí $lengthNew - 1

    // dùng vòng lặp di chuyển các phần tử ra sau một vị trí
    for($i=$newLength - 1; $i > $index; $i--) {
        $array[$i] = $array[$i-1]; // a[3] = a[2]
    }

    $array[$index] = $item;
    return $array;
}

// xóa một phần tử của mảng dựa vào index
function removeItemInArrayByIndex($array, $index) {
    $length = count($array);

    // kiểm tra nếu nhập index không đúng sẽ return về array
    if ($index < 0 || $index > $length) {
        return $array;
    }

    $newLength = $length - 1;
    // length mới bằng $length hiện tại trừ đi 1 vì ta muốn xóa 1 phần tử đi

    // dùng vòng lặp di chuyển các phần tử từ vị trí muốn xóa ra trước 1 vị trí
    for($i=$index; $i < $newLength; $i++) {
        $array[$i] = $array[$i+1];
    }

    // xóa phần tử cuối đi
    unset($array[$length-1]);

    return $array;
}

// tìm giá trị lớn nhất của mảng
function findMaxInArray($array) {
    $index = -1;

    // gán max là giá trị của phần tử đầu tiên của mảng
    $max = $array[0];
    foreach($array as $key => $item) {
        // nếu max nhỏ hơn phần tử item nghĩa là item có gia trị lớn nhất tại lúc đó, nên ta gán max bằng giá trị của item
        if ($max < $item) {
            $max = $item;
            $index = $key;
        }
    }

    return [$max, $index];
}


// đếm số lần xuất hiện của một số trong mảng
function countItemsAppearInArray($array, $item) {
    $count = 0;

    // duyệt các phần tử của mảng và kiểm tra nếu bằng với giá trị đưa vào thì tăng $count lên 1
    foreach($array as $value) {
        if($item == $value) {
            $count++;
        }
    }
    return $count;
}

// hàm tiện ích
function printArray($array) {
    if (empty($array)) {
        echo "Empty array";
    } else {
        echo "[" . implode(", ", $array)."]<br>";
    }
}

function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    // die();
}
