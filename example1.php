<?php

interface Shape
{
    function print();

    function getArea();

    function getPerimeter();
}

class Circle implements Shape
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
        return self::PI * pow($this->radius, 2);
    }

    function getPerimeter()
    {
        return 2 * self::PI * $this->radius;
    }
}

class Rectangle implements Shape
{
    protected $length;

    protected $width;

    function setLength($l)
    {
        $this->length = $l;
    }

    function setWidth($w)
    {
        $this->width = $w;
    }

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

class Square implements Shape
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

    function getArea()
    {
        return pow($this->edge, 2);
    }

    function getPerimeter()
    {
        return $this->edge * 4;
    }
}

class PrintShape
{
    private $shape;

    function setShape(Shape $shape)
    {
        $this->shape = $shape;
    }

    function printShapeInfo()
    {
        echo "<br>---------------------------------------";
        $this->shape->print();
    }

    function printArea()
    {
        echo "<br>Area: " . $this->shape->getArea();
    }

    function printPerimeter()
    {
        echo "<br>Perimeter: " . $this->shape->getPerimeter();
    }
}

$print = new PrintShape;

// circle
$radius = 10;
$circle = new Circle($radius);
$print->setShape($circle);
$print->printShapeInfo($circle);
$print->printArea();
$print->printPerimeter();

// rectangle
$length = 5;
$width = 2;
$rec = new Rectangle($length, $width);
$print->setShape($rec);
$print->printShapeInfo();
$print->printArea();
$print->printPerimeter();

// square
$edge = 5;
$square = new Square($edge);
$print->setShape($square);
$print->printShapeInfo();
$print->printArea();
$print->printPerimeter();
