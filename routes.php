<?php

// thiết lập các uri và method tương ứng với các controller xử lý

// GET method
$router->get('', 'controllers/home.controller.php');
$router->get('about', 'controllers/about.controller.php');
$router->get('contact', 'controllers/contact.controller.php');

// POST method
$router->post('add-todo', 'controllers/add-todo.controller.php');
