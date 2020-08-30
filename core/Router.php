<?php

class Router
{
    protected $routes = [
        'GET' => [], // only routes for GET method 
        'POST' => [] // only routes for POST method 
    ];

    // load file routes.php vào để khởi tạo định tuyến
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    // set danh sách các định tuyến (URI) tương ứng với controller
    public function define($routes)
    {
        $this->routes = $routes;
    }

    // return controller tương úng với uri và method
    public function direct($uri, $method)
    {
        // kiểm tra URI và method của nó có trong danh sách định tuyến ko
        if (array_key_exists($uri, $this->routes[$method])) {
            // nếu có thì controller tương ứng với URI đó sẽ được thực thi
            return $this->routes[$method][$uri];
        }

        // nếu không trả về lỗi
        throw new Exception("No route defined!");
    }


    // routes with GET method
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    // routes with POST method
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
}
