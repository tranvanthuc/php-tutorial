<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

// khởi tạo querybuilder để truy xuất DB
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
