<?php

// thiết lập các uri tương ứng với các controller xử lý
$router->define([
    '' => 'controllers/home.controller.php',
    'about' => 'controllers/about.controller.php',
    'contact' => 'controllers/contact.controller.php',
]);
