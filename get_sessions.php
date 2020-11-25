<?php

session_start(); 

print_r($_SESSION);

$name = 'username';
$value = $_SESSION[$name];

echo "Get Session $name = $value !";