<?php
#Example #1 self:: usage

class World { 
    public static function who() {
        echo "I am in : " . __CLASS__ . PHP_EOL;
    }
    
    public static function test() {
        self::who() . PHP_EOL;
    }
}

class Country extends World {
    
    public static function who() {
        echo "I am extended in : " . __CLASS__  . PHP_EOL;
    }
    
    
}
 
Country::test();
?> 