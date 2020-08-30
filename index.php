<?php

require "utils/functions.php";

require "core/bootstrap.php";

$query = $app['database'];

$router = Router::load("routes.php");

require $router->direct(Request::uri());
