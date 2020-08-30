<?php

// thiết lập các uri và method tương ứng với các controller xử lý

// GET method
$router->get('', 'PageController@home');
$router->get('about', 'PageController@about');
$router->get('contact', 'PageController@contact');
$router->get('delete-todo', 'PageController@deleteTodo');

// POST method
$router->post('add-todo', 'PageController@addTodo');
