<?php

require "A.php";

$b = new B("This is DI messsage");
$a = new A($b);

$a->showMessage();
