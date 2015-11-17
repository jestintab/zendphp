<?php
# Example #7 Traits Composed from Traits
trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World!' . "\n\n";
    }
}

trait HelloWorld {
    use Hello, World;
}

class MyHelloWorld {
    use HelloWorld;
    public function sayHelloWorld(){
		echo $this->sayHello();
		echo $this->sayWorld();
	}
}

$o = new MyHelloWorld();
echo "From two function \n";
$o->sayHello();
$o->sayWorld();

echo "From one function \n";
$o->sayHelloWorld();
?>
