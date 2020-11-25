<?php

$name = 'username';

$value = '';

$time = time() - 1;

$path = "/";

setcookie($name, $value, $time,  $path);

echo "Delete cookie $name thành công!";