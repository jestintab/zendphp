<!-- Array basics -->
<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

print_r($array); //Array ( [foo] => bar [bar] => foo ) 

echo "<br/>\n";
// as of PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
print_r($array); //Array ( [foo] => bar [bar] => foo ) 
echo "<br/>\n";
?>

<!-- ArrayObject
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

<?php
#Example #7 Array dereferencing
function getArray() {
    return array(1, 2, 3, 5);
}

// on PHP 5.4
$secondElement = getArray()[1]; 

print "$secondElement \n\n"; //2

// previously
$tmp = getArray();
$secondElement = $tmp[1];

print "$secondElement \n\n Using {}"; //2 Using {}

$tmp = getArray();
print_r ($tmp{2}); //3
echo "\n\n Using []"; 
print "$tmp[2]\n\n";
//Using [] 3

// or
list(, , , $lastElement) = getArray();

print "$lastElement\n\n"; //5
?>


<?php
# array-5 To change a certain value, assign a new value to that element using its key. To remove a key/value pair, call the unset() function on it.

$arr = array(4 => 4, 5 => 1, 6 =>56, 12 => 2);

$arr[] = 56;    // This is the same as $arr[13] = 56;
                // at this point of the script

$arr["x"] = 42; // This adds a new element to
                // the array with key "x"

print_r($arr); //Array ( [4] => 4 [5] => 1 [6] => 56 [12] => 2 [13] => 56 [x] => 42 ) 
                
unset($arr[12]); // This removes the element from the array
print_r($arr); //Array ( [4] => 4 [5] => 1 [6] => 56 [13] => 56 [x] => 42 )

$arr[] = 13;    // This is the same as $arr[13] = 13;
echo "Line 18 ";
print_r($arr); // Array ( [4] => 4 [5] => 1 [6] => 56 [13] => 56 [x] => 42 [14] => 13 ) 
                
unset($arr[14]); // This removes the element from the array
print_r($arr); //Array ( [4] => 4 [5] => 1 [6] => 56 [13] => 56 [x] => 42 ) 

echo "Line 24 ";
$arr[] = 15;    // This is the same as $arr[13] = 15;
print_r($arr); //  Array ( [4] => 4 [5] => 1 [6] => 56 [13] => 56 [x] => 42 [15] => 15 ) 


unset($arr);    // This deletes the whole array

print_r($arr); //Notice: Undefined variable: arr in C:\xampp\htdocs\zendphp\basic\types\array-5.php on line 31


?>

<?php #Array errors
#More examples to demonstrate this behaviour:
// Show all errors including notice, warnings etc
error_reporting(E_ALL);

$arr = array('fruit' => 'apple', 'veggie' => 'carrot');

// Correct
print $arr['fruit'] . " Line " . __LINE__ ."\n";  // apple
print $arr['veggie'] . " Line " . __LINE__ ."\n"; // carrot

// Incorrect.  This works but also throws a PHP error of level E_NOTICE because
// of an undefined constant named fruit
// 
// Notice: Use of undefined constant fruit - assumed 'fruit' in...
print $arr[fruit] . " Line " . __LINE__ ."\n";    // apple

// This defines a constant to demonstrate what's going on.  The value 'veggie'
// is assigned to a constant named fruit.
define('fruit', 'veggie');
echo fruit . " Line " . __LINE__ ."\n"; //veggie
echo $arr[fruit] . " Line " . __LINE__ ."\n"; //carrot
// Notice the difference now
print $arr['fruit'] . " Line " . __LINE__ ."\n";  // apple
print $arr[fruit] . " Line " . __LINE__ ."\n";    // carrot

// The following is okay, as it's inside a string. Constants are not looked for
// within strings, so no E_NOTICE occurs here
print "Hello $arr[fruit]" . " Line " . __LINE__ ."\n";      // Hello apple

// With one exception: braces surrounding arrays within strings allows constants
// to be interpreted
print "Hello {$arr[fruit]}" . " Line " . __LINE__ ."\n";    // Hello carrot
print "Hello {$arr['fruit']}" . " Line " . __LINE__ ."\n";  // Hello apple

// This will not work, and will result in a parse error, such as:
// Parse error: parse error, expecting T_STRING' or T_VARIABLE' or T_NUM_STRING'
// This of course applies to using superglobals in strings as well
#print "Hello $arr['fruit']" . " Line " . __LINE__ ."\n";print "Hello $_GET['foo']" . " Line " . __LINE__ ."\n";

// Concatenation is another option
print "Hello " . $arr['fruit'] . " Line " . __LINE__ ."\n"; // Hello apple
?>

<?php
#Array do's and don'ts
// Show all errors
error_reporting(E_ALL);

$foo[bar] = 'enemy';  //Notice: Use of undefined constant bar - assumed 'bar' in
echo $foo[bar] . "\n\n"; //Notice: Use of undefined constant bar - assumed 'bar' in
//enemy

//correct way
$foo['bar'] = 'enemy';
echo $foo['bar'] . "\n\n"; //enemy

?>



<?php
#Array do's and don'ts
// Show all errors
error_reporting(E_ALL);

$colors = array('red', 'blue', 'green', 'yellow');

foreach ($colors as $color) {
    echo "Do you like $color?\n";
}
//Do you like red? Do you like blue? Do you like green? Do you like yellow? 
echo "\n\n";
// PHP 5
foreach ($colors as &$color) {
    $color = ucwords($color);
}
unset($color); /* ensure that following writes to $color will not modify the last array element */

print_r($colors); //Array ( [0] => Red [1] => Blue [2] => Green [3] => Yellow )
// if &color is not referenced (color) the output will be 
// Array ( [0] => red [1] => blue [2] => green [3] => yellow )

// Workaround for older versions
foreach ($colors as $key => $color) {
    $colors[$key] = strtoupper($color);
}

print_r($colors); // Array ( [0] => RED [1] => BLUE [2] => GREEN [3] => YELLOW )
echo "\n\n";
?>