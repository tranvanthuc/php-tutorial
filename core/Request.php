<?php

class Request
{
    // get URI của request được gửi lên
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], "/");
    }
}
