<?php

session_start(); 

$name = 'username';
$value = $_SESSION[$name];

echo "Get Session $name = $value success!";