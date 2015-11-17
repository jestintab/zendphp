<?php
#Example #3 Alternate Precedence Order Example
trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!' . "\n";
    }
}

class TheWorldIsNotEnough {
    use HelloWorld;
    public function sayHello() {
        echo 'Hello Universe!' . "\n";
    }
}

$o = new TheWorldIsNotEnough();
$o->sayHello();
?>
