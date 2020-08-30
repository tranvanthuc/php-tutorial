<?php

require "A.php";

$b = new B("This is DI messsage");
$a = new A;

// gọi setB để set instance B vào thuộc tinh $b của class A
$a->setB($b);
$a->showMessage();
