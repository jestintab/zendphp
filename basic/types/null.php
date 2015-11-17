<?php
$obj = (object) 'ciao';
echo $obj->scalar;  // outputs 'ciao'
echo "\n\n";

$obj = (object) 12548;
echo gettype($obj);
echo "\n\n";

echo $obj->scalar;  // outputs '12548'
echo "\n\n";

$aArr = ['age' => 26, 'name' => 'dhanajay', 'address' => ['add1' => 'address 1', 'add2' => 'address 2'] ];
print_r($aArr);
$object2 = (object) $aArr;

print_r($object2);
echo "\n\n";


$aArr2 = (array) $object2;

print_r($aArr2);
echo "\n\n";


echo $object2->age;
echo "\n\n";

echo $object2->address['add1'];
echo "\n\n";

?>
