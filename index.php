<?php

// thông tin dùng để connect với DB thông qua PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydemo";

try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "select * from todos";
    $statement = $connection->prepare($sql);
    $statement->execute();

    // dùng hàm dd được viết trong functions.php đã được tạo ở các bài trước
    $todos = $statement->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

require "index.view.php";
