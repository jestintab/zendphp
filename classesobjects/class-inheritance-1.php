<?php
#Example #1 Inheritance Example
class foo
{
    public function printItem($string)
    {
        echo 'Foo: ' . $string . ', line no. ' . __LINE__ . PHP_EOL;
    }
    
    public function printPHP()
    {
        echo 'PHP is great.' . ', line no. ' . __LINE__ . PHP_EOL;
    }
}

class bar extends foo
{
    public function printItem($string, $string2)
    {
        echo 'Bar: ' . $string . ' Overloading ' .  $string2 . ', line no. ' . __LINE__ . PHP_EOL;
    }
}


$foo = new foo();
$bar = new bar();
$foo->printItem('baz'); // Output: 'Foo: baz'
$foo->printPHP();       // Output: 'PHP is great' 
$bar->printItem('baz', 'orverloading'); // Output: 'Bar: baz'
$bar->printPHP();       // Output: 'PHP is great'

?>
