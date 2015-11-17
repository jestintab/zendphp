<?php
# Example #3 Variable method example with static properties
class Foo
{
    static $variable = 'static property';
    static function Variable()
    {
        echo 'Method Variable called' . "\n\n";
    }
}

echo Foo::$variable ."\n\n"; // This prints 'static property'. It does need a $variable in this scope.
$variable = "Variable";
Foo::$variable();  // This calls $foo->Variable() reading $variable in this scope.

?>
