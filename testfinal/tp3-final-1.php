<?php

$a = 'hello';

$$a = 'world';

var_dump($a);


var_dump($hello);

var_dump($$a);

var_dump(${$a});


$aw = array(0,3,4,5,6);

var_dump($aw);

$ss = 'abc is my world';

echo strlen($ss) . PHP_EOL;


echo count($ss) . PHP_EOL;


echo strlen($aw) . PHP_EOL;
