<?php

// biến $title truyền vào view để hiển thị title
$title = "Todos List";
$todos = $query->selectAll("todos");

require "views/home.view.php";
