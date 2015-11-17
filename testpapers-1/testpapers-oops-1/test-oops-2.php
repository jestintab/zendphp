<?php
// static variable:
class Family{
    static $tree = "Grand Father";
    
    public function getTopTree(){ 
        //echo $this->tree . PHP_EOL;// PHP Notice:  Undefined property 
        echo self::$tree . " I am in line no. " . __LINE__ . PHP_EOL;
    }
}

$oFm = new Family();
$oFm->getTopTree();

echo Family::$tree . " I am in line no. " . __LINE__ . PHP_EOL;

echo "" . PHP_EOL;
?>

<?php
// static method:
class Family2{
    public $tree = "Grand Father";
    
    public static function getTopTree($va){
       echo " I am in line no. {$va}  " . __LINE__ . PHP_EOL;;
    }
}

class Child extends Family2{ 
   public function __construct() {
      echo self::getTopTree('31') . " I am in line no. " . __LINE__ . PHP_EOL;
   }
}

$oFm = new Child();
$oFm::getTopTree('99');

echo Child::getTopTree('200');// . " I am in line no. " . __LINE__ . PHP_EOL;

echo "" . PHP_EOL;



$oFm = new Family2();
$oFm::getTopTree('959');

echo Family2::getTopTree('2050');// . " I am in line no. " . __LINE__ . PHP_EOL;

echo "" . PHP_EOL;
?>
