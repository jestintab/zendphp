<?php
interface Family{
    public function getParentName();
}

interface Postal{
    public function getAddress();
}

class City{
    public function getCity(){
        
    }
}

class A {
    public $connDb = null;
    static $word = "hello";
    static function hello() {
        print static::$word;
    }
}

class B extends A implements Family, Postal{ 
    public function getParentName() {
        
    }

    public function getAddress() {
        
    }

    static $word = "bye";
}

B::hello();

echo "" . PHP_EOL;

//A::hello();

echo class_exists('A');
echo "" . PHP_EOL;

$oA = new A(); 
echo get_class($oA);
echo "" . PHP_EOL;

$oB = new B(); 
echo get_parent_class($oB);
echo "" . PHP_EOL;

$oB = new B(); 
echo is_subclass_of($oB, "A");
echo "" . PHP_EOL;
echo "[";
echo ($oA instanceof A);
echo "]";
echo "" . PHP_EOL;
?>

