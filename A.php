<?php

require "B.php";

class A
{
    // thuộc tính $b của class A
    public $b;

    public function __construct($bInstance)
    {
        $this->b = $bInstance;
    }

    // phương thức showMessage của class A
    public function showMessage()
    {
        $message = $this->b->getMessage();
        echo $message;
    }
}
