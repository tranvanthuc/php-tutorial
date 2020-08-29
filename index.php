<?php

class Fruit {
  public $name; // public properties
  protected $color;  // protected properties
  private $weight;  // private properties

  function setName($name) {  // a public function (default)
    $this->name = $name;
  }
  protected function setColor($color) { // a protected function
    $this->color = $color;
  }
  private function setWeight($weight) { // a private function
    $this->weight = $weight;
  }
}

$banana = new Fruit();
$banana->name = 'Banana'; // OK
$banana->color = 'Yellow'; // ERROR
$banana->weight = '300'; // ERROR

$banana->setName('Banana'); // OK
$banana->setColor('Yellow'); // ERROR
$banana->setWeight('300'); // ERROR
