<?php

// Starting session
session_start();
 
$name = 'username';
// Removing session data
if(isset($_SESSION[$name])){
    unset($_SESSION[$name]);
    echo "Delete session $name thành công!";
}


// remove all session variables
// session_unset();

// destroy the session
// session_destroy();