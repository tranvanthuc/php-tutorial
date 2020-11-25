<?php

// Starting session
session_start();

$name = 'username';
$value = 'thuctran';

$_SESSION[$name] = $value; // $_SESSION['username'] = 'thuctran';

echo "Set Session $name = $value thành công!";