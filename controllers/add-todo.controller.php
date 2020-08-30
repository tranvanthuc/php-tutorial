<?php

// $query được khởi tạo trong file index.php
// dùng để connect db và truy xuất db
$query->insert('todos', [
    'name' => $_POST['name']
]);

// redirect to Home page
header('Location: /');
