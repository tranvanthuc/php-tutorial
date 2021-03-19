<?php

abstract class Shape 
{
    use PrintShape;

    abstract function print();

    abstract function getArea();

    abstract function getPerimeter();
}

class Circle extends Shape
{
    private $radius;

    const PI = 3.14;

    function __construct($r)
    {
        $this->radius = $r;
    }

    function print()
    {
        echo "<br>Circle: radius = $this->radius";
    }

    function getArea()
    {
        return self::PI * pow($this->radius, 2) ;
    }

    function getPerimeter()
    {
        return 2 * self::PI * $this->radius;
    }
}

class Rectangle extends Shape
{
    private $length;

    private $width;

    function __construct($l, $w)
    {
        $this->length = $l;
        $this->width = $w;
    }

    function print()
    {
        echo "<br>Rectangle: length = $this->length, width = $this->width";
    }

    function getArea()
    {
        return $this->length * $this->width;
    }

    function getPerimeter()
    {
        return ($this->length + $this->width) * 2;
    }
}

class Square extends Rectangle
{
    private $edge;

    function __construct($e)
    {
        $this->edge = $e;
    }

    function print()
    {
        echo "<br>Square: edge = $this->edge";
    }

    // overrite getArea cua Rectangle
    function getArea()
    {
        return pow($this->edge, 2);
    }

    // overrite getPerimeter cua Rectangle
    function getPerimeter()
    {
        return $this->edge * 4;
    }
}

trait PrintShape
{
    function printShapeInfo() {
        echo "<br>---------------------------------------";
        $this->print();
    }

    function printArea()
    {
        echo "<br>Area: " . $this->getArea();
    }
    
    function printPerimeter()
    {
        echo "<br>Perimeter: " . $this->getPerimeter();
    }
}



// circle
$radius = 10;
$circle = new Circle($radius);
$circle->printShapeInfo();
$circle->printArea();
$circle->printPerimeter();

// rectangle
$length = 5;
$width = 2;
$rec = new Rectangle($length, $width);
$rec->printShapeInfo();
$rec->printArea();
$rec->printPerimeter();

// square
$edge = 5;
$square = new Square($edge);
$square->printShapeInfo();
$square->printArea();
$square->printPerimeter();
