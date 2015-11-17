<?php
// An example callback method
class MyClass {
    static function myCallbackMethod() {
        echo 'Hello World!';
    }
}
// An example callback function
function my_callback_function() {
    echo 'hello world!';
}

// Type 1: Simple callback
call_user_func('my_callback_function'); 
?>


<?php
function barber($type, $ext='')
{
    echo "You wanted a $type haircut, and $ext no problem\n";
}
call_user_func('barber', "mushroom"," massage");
call_user_func('barber', "shave");
?>
