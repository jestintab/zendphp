<?php 
#Example #1 Callback function examples

// An example callback function
function my_callback_function() {
    echo 'Function hello world!' . "\n\n";
}

// An example callback method
class MyClass {
    static function myCallbackMethod() {
        echo 'Method Hello World!' . "\n\n";
    }
}

// Type 1: Simple callback
echo 'Type 1' . "\n";
call_user_func('my_callback_function'); 

// Type 2: Static class method call
echo 'Type 2' . "\n";
call_user_func(array('MyClass', 'myCallbackMethod')); 

// Type 3: Object method call
echo 'Type 3' . "\n";
$obj = new MyClass();
call_user_func(array($obj, 'myCallbackMethod'));

// Type 4: Static class method call (As of PHP 5.2.3)
echo 'Type 4' . "\n";
call_user_func('MyClass::myCallbackMethod');

// Type 5: Relative static class method call (As of PHP 5.3.0)
class A {
    public static function who() {
        echo "A\n";
    }
}

class B extends A {
    public static function who() {
        echo "B\n";
    }
}

call_user_func(array('B', 'parent::who')); // A
call_user_func(array('B', 'who')); // B
call_user_func('B::who'); // B
?>
