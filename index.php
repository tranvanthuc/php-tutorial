<?php

$name = 'username';

$value = 'thuctran';

$time = time() + 60*60;
// 2 minutes = 2*60
// 5 days = 5*24*60*60

$path = "/";

setcookie($name, $value, $time,  $path);

echo "Set cookie $name = $value thành công!";
