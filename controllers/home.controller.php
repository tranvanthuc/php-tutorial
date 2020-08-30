<?php

$todos = $query->selectAll("todos");

require "views/home.view.php";
