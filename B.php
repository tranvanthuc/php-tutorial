<?php

class B
{
    // thuộc tính $message của class B
    public $message = "This is class B";

    // hàm constructor
    public function __construct($msg)
    {
        $this->message = $msg;
    }

    // phương thức getMessage của class B
    public function getMessage()
    {
        return $this->message;
    }
}
