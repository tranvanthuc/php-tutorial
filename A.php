<?php

require "B.php";

class A
{
    // thuộc tính $b của class A
    public $b;

    // phương thức showMessage của class A
    public function showMessage()
    {
        $message = $this->b->getMessage();
        echo $message;
    }

    // thực hiện setter injection
    public function setB($bInstance)
    {
        $this->b = $bInstance;
    }
}
