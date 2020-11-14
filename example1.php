<?php

class Calculator 
{
    public function add()
    {
        $numOfParams = func_num_args(); // số params truyền vào
        $params = func_get_args(); // giá trị của các param
        switch ($numOfParams) {
            case 2: 
                $result = $params[0] + $params[1]; 
                break;
            case 3: 
                $result = $params[0] + $params[1] + $params[2];
                break;
        }

        echo $result . "<br>";
    }

    public function multiply()
    {
        $numOfParams = func_num_args();
        $params = func_get_args();
        switch ($numOfParams) {
            case 2: 
                $result = $params[0] * $params[1]; 
                break;
            case 3: 
                $result = $params[0] * $params[1] * $params[2];
                break;
        }

        echo $result . "<br>";
    }
}

$cal = new Calculator;
$cal->add(10, 20); // output: 30
$cal->add(10, 20, 30); // output: 60

$cal->multiply(2, 5); // output: 10
$cal->multiply(2, 5, 4); // output: 40