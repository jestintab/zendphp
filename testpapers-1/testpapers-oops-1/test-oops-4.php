<?php
class Object {
   function Object( $entity ) {
       $entity->name="John";
   }
}

class Entity {
     var $name = "Maria";
}
$entity = new Entity();

$obj = new Object( $entity );
print $entity->name . PHP_EOL; 
?>