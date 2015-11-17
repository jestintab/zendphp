<?php
#Example #1 Abstract class example

abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue($dd);
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {
		echo "--- in ";
		$dd = 'i m in ';
        print $this->getValue($dd) . "\n";
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue($dd) {
        return "ConcreteClass1 " . $dd . ' line 21 ';
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
    public function getValue($dd) {
        return "ConcreteClass2 " . $dd . ' line 32 ';
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') ."\n";

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') ."\n";

?>
