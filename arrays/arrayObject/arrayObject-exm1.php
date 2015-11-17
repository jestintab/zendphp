<?php
#Example #1 ArrayObject::__construct() example
$array = array('1' => 'one', '2' => 'two', '3' => 'three', array('9' => 'four'));
$oArrayObject = new ArrayObject($array, ArrayObject::ARRAY_AS_PROPS);
echo "<pre>";
var_dump($oArrayObject);
echo "\n\n";

print_r($oArrayObject);

echo "\n\n";

echo "Count: " .  $oArrayObject->count();

echo "\n\n";

echo "Append: ";
$aArrayTwo = array('99' => 'This is ninety nine', '79' => 'This is seventy nine');
echo "\n\n";
$oArrayObject->append($aArrayTwo);

$oArrayObject->append(array('85' => 'this is eighty five'));
echo "\n\n";

$oArrayObject['dasav'] = 'data as assignment variable';
print_r($oArrayObject);

echo "\n\n";
?>
