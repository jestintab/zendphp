<?php
# Example #6 Changing Method Visibility
trait HelloWorld {
    public function sayHello($callFrom) {
        echo 'Hello World!' . " $callFrom \n\n";
    }
}

// Change visibility of sayHello
class MyClass1 {
    use HelloWorld { sayHello as protected; }
    
	public function sayHelloMC1(){
		echo $this->sayHello('MyClass1');
	}
}

// Alias method with changed visibility
// sayHello visibility not changed
class MyClass2 {
    use HelloWorld { sayHello as private myPrivateHello; }
        
	public function sayHelloMC2(){
		echo $this->myPrivateHello('MyClass2');
	}
}

$oM1 = new MyClass1();
echo $oM1->sayHelloMC1();

$oM2 = new MyClass2();
echo $oM2->sayHelloMC2();

?>
