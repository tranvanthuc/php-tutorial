<?php

class Calculator 
{

    // function được gọi khi object của class gọi một function bất kỳ
    // trong đó name là tên function, params là các tham số bạn truyền vào khi gọi function này
    public function __call($name, $params)
    {
        switch($name){
            case 'add':
                $this->addNumbers($params); break;
            case 'multiply':
                $this->multiplyNumbers($params); break;
            default: 
        }
    }

    private function addNumbers($params)
    {
        $numOfParams = count($params);
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

    private function multiplyNumbers($params)
    {
        $numOfParams = count($params);
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
// ở đây hàm __call sẽ được trigger, với $name là add và $params = array(10, 20)
$cal->add(10, 20); // output: 30
$cal->add(10, 20, 30); // output: 60

// ở đây hàm __call sẽ được trigger, với $name là multiply và $params = array(2, 5)
$cal->multiply(2, 5); // output: 10
$cal->multiply(2, 5, 4); // output: 40