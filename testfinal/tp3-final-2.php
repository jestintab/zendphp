<?php
//Example #1 Variable property example 

class foo {
    var $bar = 'I am bar.';
    var $arr = array('I am A.', 'I am B.', 'I am C.');
    var $r   = 'I am r.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo 'Line : ' . __LINE__ . $foo->$bar . "\n";
echo 'Line : ' . __LINE__ . $foo->$baz[1] . "\n";

$start = 'b';
$end   = 'ar';
echo 'Line : ' . __LINE__ . $foo->{$start . $end} . "\n";

$arr = 'arr';
echo 'Line : ' . __LINE__ .  $foo->$arr[1] . "\n";
echo 'Line : ' . __LINE__ .  $foo->{$arr}[1] . "\n";
?> 
