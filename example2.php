<?php

require "./functions.php";

// xem function addItemIntoArraybyIndex ở file functions.php

// execute function
$array = [4,1,2,3,5,7];
$item = 6;
$index = 3;
printArray($array);

$newArray = addItemIntoArraybyIndex($array, $item, $index);
echo "Item = $item, index = $index <br>";
printArray(($newArray));