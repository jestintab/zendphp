<?php
class foo {
    var $bar = 'I am bar.';
    var $arr = array('I am A.', 'I am B.', 'I am C.');
    var $r   = 'I am r.';
}

$foo = new foo();

$bar = 'bar';

$baz = array('foo', 'bar', 'baz', 'quux');

echo 'LINE : ' . __LINE__ . ' ' . $foo->$bar . "\n";

echo 'LINE : ' . __LINE__ . ' ' . $foo->$baz[1] . "\n";

$start = 'b';
$end   = 'ar';

echo 'LINE : ' . __LINE__ . ' ' . $foo->{$start . $end} . "\n";

$arr = 'arr';
echo 'LINE : ' . __LINE__ . ' ' . $foo->$arr[1] . "\n"; //accessing $arr variable
echo 'LINE : ' . __LINE__ . ' ' . $foo->{$arr}[1] . "\n"; //accessing $array

?>
