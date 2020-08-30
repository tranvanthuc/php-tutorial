<?php

// biến $title truyền vào view để hiển thị title
$title = "Todos List";
$query = App::get('database');
$todos = $query->selectAll("todos");

require "views/home.view.php";
