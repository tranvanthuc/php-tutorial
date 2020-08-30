<?php

abstract class ParentClass {
	// abstract method không có body
    abstract function showMessage();

	// method bình thường có body (non-abstract method)
    function sayHello() {
	// body
        echo "Hello<br>";
    }
}

class ChildClass extends ParentClass {
    // implement method showMessage
    function showMessage() {
        echo "Class Child<br>";
    }

    // override method sayHello của ParentClass
    function sayHello() {
        echo "Hi<br>";
    }
}

$child = new ChildClass();
$child->showMessage();
$child->sayHello();
