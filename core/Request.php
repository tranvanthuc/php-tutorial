<?php

namespace App\Core;

class Request
{
    public static function uri()
    {
        // /add-name?name=abc  -> add-name
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
            "/"
        );
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD']; // GET or POST 
    }
}
