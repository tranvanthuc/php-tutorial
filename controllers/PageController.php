<?php

class PageController
{
    public $query;

    public function __construct()
    {
        $this->query = App::get('database');
    }

    public function home()
    {
        // biến $title truyền vào view để hiển thị title
        $title = "Todos List";
        $todos = $this->query->selectAll("todos");

        view("home", compact('title', 'todos'));
    }

    public function about()
    {
        $title = "About us";
        view("about", compact('title'));
    }

    public function contact()
    {
        $title = "Contact";
        view("contact", compact('title'));
    }

    public function addTodo()
    {
        // $query được khởi tạo trong file index.php
        // dùng để connect db và truy xuất db
        $this->query->insert('todos', [
            'name' => $_POST['name']
        ]);

        // redirect to Home page
        redirect("/");
    }
}
