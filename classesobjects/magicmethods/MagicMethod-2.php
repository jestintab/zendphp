<?php
//Example #2 Simple example
class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }
    
    public function getData(){
        return $this->foo;
    }
    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass('Hello');

echo $class->foo . "" . PHP_EOL;

echo $class . "" . PHP_EOL;

echo $class->getData() . PHP_EOL;
?>
