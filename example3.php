<?php  

// https://www.geeksforgeeks.org/removing-array-element-and-re-indexing-in-php/#:~:text=In%20order%20to%20remove%20an,indexes%20the%20array%20numerically%20automatically.
require "./functions.php";

// xem function removeItemInArrayByIndex ở file functions.php

// execute function
$array = [4,1,2,3,5,7];
$index = -1;
printArray($array);

$newArray = removeItemInArrayByIndex($array, $index);
echo "Delete index = $index <br>";
printArray(($newArray));