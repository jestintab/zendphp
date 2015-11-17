<?php
#Example #3 Calling a parent's method
class MyClass
{
    protected function myFunc() {
        echo "MyClass::myFunc() in parent \n";
    }
    
    protected function myFunc2() {
        echo "MyClass::myFunc2() in parent \n";
    }
}

class OtherClass extends MyClass
{
    // Override parent's definition
    public function myFunc()
    {
        // But still call the parent function
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
        $this->myFunc2();
    }
}

$class = new OtherClass();
$class->myFunc();

?>
