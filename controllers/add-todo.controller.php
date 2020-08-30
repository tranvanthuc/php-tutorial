<?php

// $query được khởi tạo trong file index.php
// dùng để connect db và truy xuất db
$query = App::get('database');
$query->insert('todos', [
    'name' => $_POST['name']
]);

// redirect to Home page
header('Location: /');
