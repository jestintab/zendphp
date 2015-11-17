<?php
$iterator = new ArrayIterator(array('recipe'=>'pancakes', 'egg', 'milk', 'flour' => array('recipe'=>'pancakes', 'egg', 'milk', 'flour')));
$aa = iterator_to_array($iterator, true);

print_r($aa);

$bb =  iterator_to_array($iterator, false);

print_r($bb);
?>
