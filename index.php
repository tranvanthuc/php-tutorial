<?php

require "vendor/autoload.php";

require "utils/functions.php";

require "core/bootstrap.php";

Router::load("routes.php")
    ->direct(Request::uri(), Request::method());
