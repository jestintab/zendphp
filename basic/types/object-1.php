<?php
class foo{
    function do_foo(){
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo() ;//Doing foo.
echo "\n\n";
?>
