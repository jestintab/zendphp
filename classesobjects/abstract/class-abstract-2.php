<?php
#Example #2 Abstract class example
abstract class AbstractClass{
    // Our abstract method only needs to define the required arguments
    abstract protected function prefixName();
    
	public function getName(){
		echo "I n AbstractClass : getName()\n";
	}
	
	
}

class ConcreteClass extends AbstractClass{
	protected function prefixName(){
		
	}
	
	public function getName(){
		parent::getName();
		
		echo "I n Concrete : getName()\n";
	}
}

$oConcCl = new ConcreteClass();

$oConcCl->getName();
?>
