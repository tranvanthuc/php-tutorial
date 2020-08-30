<?php

$app = [];

$app['config'] = require 'config.php';

// khởi tạo querybuilder để truy xuất DB
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
