<?php

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function view($name, $data = [])
{
    extract($data);
    require "views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: {$path}");
}
