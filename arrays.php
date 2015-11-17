
<!-- 
ArrayObject
----------
The way objects are used in PHP 5, assigning them doesn’t copy them; it copies their location in a lookup table for later retrieval. This means that an object modified in one area of the application reflects those changes everywhere it has been passed; there is no need to do any extra work to ensure that code using your objects has those changes. Arrays, on the other hand, are copied on assignment, meaning that changes made in one component of the application will not be reflected in the original array, unless you passed the array by reference. But because ArrayObject behaves like an array while still following the rules of an object, it has a number of distinct advantages. 

there are a number of features that cannot be used with this object, including most of the array_* functions in the PHP library

-->
<?php 
$array = array('1' => 'one', '2' => 'two', '3' => 'three' , '4' => 'four');
$arrayobject = new ArrayObject($array);
echo "<pre>";
var_dump($arrayobject);

//output
object(ArrayObject)#1 (1) {
  ["storage":"ArrayObject":private]=>
  array(4) {
    [1]=>
    string(3) "one"
    [2]=>
    string(3) "two"
    [3]=>
    string(5) "three"
    [4]=>
    string(4) "four"
  }
}
?>


<?php

$array = array('1' => 'one', '2' => 'two', '3' => 'three', 'Four', '8' => 'Eight');
#$arrayobject = new ArrayObject($array, ArrayObject::ARRAY_AS_PROPS);
$arrayobject = new ArrayObject($array);
var_dump($arrayobject);

echo "\ngetIterator\n";
for($iterator = $arrayobject->getIterator(); $iterator->valid(); $iterator->next()) {
    echo $iterator->key() . ' => ' . $iterator->current() . "\n";
}
echo "[";
echo $iterator->count();
echo "]";

var_dump($arrayobject);

#echo $iterator->setFlags(6);
echo "[" . $iterator->getFlags() ."]";

?>

<!-- When setting ARRAY_AS_PROPS flags, it means that when you set properties (through the ->), will not be set on the object like you would expect with regular objects, but will be stored as internal elements. If this flag is NOT set, it will store the property onto the actual array-object or array-iterator, which is what you see in the code output from your example: the "prop => propdata" is not inside the storage:ArrayObject:private, which would have been the case if the ARRAY_AS_PROPS flag would have been set: -->
<?php 
$arrayobject = new ArrayObject($array);
$arrayobject->setFlags(ArrayIterator::ARRAY_AS_PROPS);

var_dump($arrayobject);

echo  $arrayobject->one;
?>
<!-- The STD_PROP_LIST tells us how to read, and ARRAY_AS_PROPS tells us how we to write those elements.  -->
<?php
// Array of available fruits
$fruits = array("lemons" => 1, "oranges" => 4, "bananas" => 5, "apples" => 10, 'f33' => 'stored 33');

$fruitsArrayObject = new ArrayObject($fruits);

// Try to use array key as property
var_dump($fruitsArrayObject->lemons);
// Set the flag so that the array keys can be used as properties of the ArrayObject
$fruitsArrayObject->setFlags(ArrayObject::ARRAY_AS_PROPS);
// Try it again
var_dump($fruitsArrayObject->lemons);

print ($fruitsArrayObject->f33);

echo "\n";

//OUTPUT
Notice: Undefined property: ArrayObject::$lemons in C:\xampp\htdocs\zendphp\arrays\arrayObject\exm2.php on line 8
NULL int(1)
 stored 33
?>


<?php
	
	#1 SplFixedArray usage example

// Initialize the array with a fixed length
$array = new SplFixedArray(5);

$array[1] = 2;
$array[4] = "foo";
echo "<pre>";
var_dump($array[0]); // NULL
var_dump($array[1]); // int(2)

var_dump($array["4"]); // string(3) "foo"

echo "\n Array Count defined : " . $array->count() . "\n"; //5

// Increase the size of the array to 10
$array->setSize(10);

// getting the array size
echo "\n getSize :" .$array->getSize() . "\n"; //10

$array[9] = "asdf";

echo "\n Array Count increase : " . $array->count() . "\n"; //10

// Shrink the array to a size of 2
$array->setSize(2);

echo "\n Array Count shrink : " . $array->count() . "\n"; //2

// The following lines throw a RuntimeException: Index invalid or out of range
try {
    var_dump($array["non-numeric"]);
} catch(RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}

try {
    var_dump($array[-1]);
} catch(RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}

try {
    var_dump($array[5]);
} catch(RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}
?>


?>