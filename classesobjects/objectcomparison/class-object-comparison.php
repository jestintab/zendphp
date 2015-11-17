<?php

class A {
    public $property;
    public function __construct($value) {
        $this->property = $value;
    }
}

$object1 = new A('Hello World');
$object2 = new A(0);

var_dump($object1 == $object2);

var_dump($object1 === $object2);
