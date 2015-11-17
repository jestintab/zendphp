<?php

//print_r(spl_classes());


?>

<?php
$iterator = new ArrayIterator(array('recipe'=>'pancakes', 'egg', 'milk', 'flour'));
$itCnt = $iterator->count();
echo $itCnt . PHP_EOL;
 
$iterator->append("water");
$iterator->ksort();

while($iterator->valid()){
    echo "Key : ". $iterator->key() . ", Value: " .$iterator->current() . PHP_EOL; 
    $iterator->next();
}
if($iterator->offsetExists(9)){
    $iterator->seek(3);
}
else{
    $iterator->seek($itCnt);
    echo $iterator->offsetGet('recipe') . PHP_EOL;
}

echo "[$itCnt]" . PHP_EOL;

echo PHP_EOL . "Key : ". $iterator->key() . ", Value: " .$iterator->current() . PHP_EOL; 

var_dump(iterator_count($iterator));
?>
