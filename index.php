<?php

// interface Sinh vật
interface Creature
{
    // hàm dùng để lấy tên sinh vật
    public function getName();
}

// interface Động vật
interface Animal extends Creature
{
    // hàm dùng để lấy màu của động vật
    public function getColor();
}

// class Con bò
class Cow implements Animal, Creature
{
    public function getName()
    {
        return "Con Bò";
    }

    public function getColor()
    {
        return "nâu";
    }
}

$conbo = new Cow;
echo "<br>Tên: " . $conbo->getName();
echo "<br>Màu: " . $conbo->getColor();

