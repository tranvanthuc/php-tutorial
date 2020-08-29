<?php
/**
 * Define ParentClass
 * Đây là class cha, class sẽ được các class khác thừa kế
 */
class ParentClass
{
    // các thuộc tính được khởi tạo tùy theo access modifier
    public $public = 'Public'; // có thể truy cập ở tất cả mọi nơi
    protected $protected = 'Protected'; // được truy cập trong subclass
    private $private = 'Private'; // truy cập trong chính class khai báo nó

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
        echo "<hr>";
    }
}

/**
 * Define SubClass
 * Đây là class con, class nhận được các properties và method từ class cha
 */
class SubClass extends ParentClass
{
    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$object = new SubClass();
$object->printHello(); // Shows Public, Protected, Undefined
