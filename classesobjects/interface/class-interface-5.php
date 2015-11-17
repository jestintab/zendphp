<?php
# Example #5 Interfaces with same method name not giving error why?

interface TestInterface
{
    public function testMethod();
}

interface TestInterface2
{
    public function testMethod();
}

class TestClass implements TestInterface, TestInterface2
{
	const PIA_VAL = 3.214;
	public function testMethod(){
		echo self::PIA_VAL;
	}
}

$oTC = new TestClass();

$oTC->testMethod();
