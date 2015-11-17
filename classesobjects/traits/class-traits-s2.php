<?php
class World{
	public function sayHello(){
		echo "I m world class ";
	}
}

trait MyWorld{
	public function sayHello(){
		parent::sayHello();
		echo " in MyWorld trait called from MyWorldClass " . "\n";
	}
}

class MyWorldClass extends World{
	use MyWorld;
}

$oMWC = new MyWorldClass();
$oMWC->sayHello();

?>

