<?php

class Router
{
    protected $routes;

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

    // return controller tương úng với uri
    public function direct($uri)
    {
        // kiểm tra URI có trong danh sách định tuyến ko
        // nếu có thì controller tương ứng với URI đó sẽ được thực thi
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        // nếu không trả về lỗi
        throw new Exception("No route defined!");
    }
}
