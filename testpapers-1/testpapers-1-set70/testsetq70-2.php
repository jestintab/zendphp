<?php
class MyFamily {
    
   function construct() {
      echo "mmm";
   }
   
   function myFamily() {
      echo "M";
   } 
}

$m = new MyFamily();
$m->myFamily(); 
echo PHP_EOL;

?>
