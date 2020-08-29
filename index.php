<?php

class Car {
    // properties
    public $name;
    public $color;

    // constructor with params
    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    // methods
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    function getColor() {
        return $this->color;
    }

    function setColor($color) {
        $this->color = $color;
    }
}

$audi = new Car("Audi", "Yellow");
echo $audi->getName(). "<br>";

$toyota = new Car("Toyota", "Red");
echo $toyota->getName() . "<br>";
