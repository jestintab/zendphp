<?php 
class MagicMethod{
    
   public function __call($name, $arguments) {
        echo "I am here __call : $name" . implode(', ', $arguments) . PHP_EOL;
    }
 
    public function __callStatic($name1, $arguments2) {
        echo "I am here __callStatic : $name1" . implode(', ', $arguments2) . PHP_EOL;
    }
}

$oMM = new MagicMethod();
 
$oMM->item("dhananjay", "anu", "kuhoo");

MagicMethod::staticItem("static dhananjay", "static anu", "static kuhoo");
 