<?php 

require "./functions.php";

// xem function countItemsAppearInArray ở file functions.php

// execute function
$array = [1,2,3,4,2,1,5,2,5,1];
printArray($array);
$item = 5;
$count = countItemsAppearInArray($array, $item);
echo "<br>Item = $item xuat hien $count lan";