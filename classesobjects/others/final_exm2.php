<?php
#Example #1 Final methods example
final class BaseClass {
 public function test() {
   echo "BaseClass::test() called\n";
 }
 
 final public function moreTesting() {
   echo "BaseClass::moreTesting() called\n";
 }
}

class ChildClass extends BaseClass { 
}
// Results in Fatal error: Cannot override final method BaseClass::moreTesting()
?> 