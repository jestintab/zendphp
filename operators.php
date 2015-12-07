<?php
#Example #1 Associativity

$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
echo 'Line : ' . __LINE__ . ', ' . $a . "\n\n"; //Line : 5,4
// ternary operator associativity differs from C/C++
$a = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2
echo 'Line : ' . __LINE__ . ', ' . $a . "\n\n"; //2
$a = 1;
echo 'Line : ' . __LINE__ . ', ' . $a . "\n\n"; //1

$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5
echo 'Line : ' . __LINE__ . ', ' . $a . "\n\n";
?>
<?php
#Example #2 Undefined order of evaluation

$a = 1;
echo $a + $a++; // may print either 2 or 3
echo "\n\n";
$i = 1;
$array[$i] = $i++; // may set either index 1 or 2

echo "\n\n";
print_r($array); // Array ( [2] => 1 )
?>
<?php
#Elements of arrays are equal for the comparison if they have the same key and value.

#Example #1 Comparing arrays
$a = array(0=>"apple",  3=>"orange", 1=>"banana");
$b = array(1 => "banana", "0" => "apple", 3=> "orange");

var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)
?>
<?php
#Elements of arrays are equal for the comparison if they have the same key and value.

#Example #1 Comparing arrays
$a = array(0=>"apple",  1=>"banana", 3=>"orange");
$b = array("0" => "apple", 1 => "banana", 3=> "orange");
var_dump($a === $b); // bool(true)
?>
<?php
#Elements of arrays are equal for the comparison if they have the same key and value.

#Example #1 Comparing arrays
$a = array(0=>"apple",  "banana");
$b = array( 0 => "apple", "banana");

var_dump($a <> $b); // bool(false)
var_dump($a != $b); // bool(false)
var_dump($a !== $b); // bool(false)
?>
<?php
#Example #1 Assigning by reference

$a = 3;
$b = &$a; // $b is a reference to $a

print "$a\n"; // prints 3
print "$b\n"; // prints 3

$a = 4; // change $a

print "$a\n"; // prints 4
print "$b\n"; // prints 4 as well, since $b is a reference to $a, which has
              // been changed

$b = 6;
print "$a\n"; // prints 6
print "$b\n"; // prints 6 as well, since $b is a reference to $a, which has
              // been changed              
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
#Example #1 Using instanceof with classes
class MyClass{
}

class NotMyClass{
}

$a = new MyClass;

var_dump($a instanceof MyClass);//bool(true) 

var_dump($a instanceof NotMyClass);//bool(false) 
?>
<?php
#Example #2 Using instanceof with inherited classes
class ParentClass
{
}

class MyClass extends ParentClass
{
}

$a = new MyClass;

var_dump($a instanceof MyClass); //bool(true) 
var_dump($a instanceof ParentClass); //bool(true) 
?>
<?php
# Example #3 Using instanceof to check if object is not an instanceof a class
class MyClass
{
}

$a = new MyClass;
var_dump(!($a instanceof stdClass)); //bool(true)
?>
<?php
#Example #4 Using instanceof for class

interface MyInterface
{
}

class MyClass implements MyInterface
{
}

$a = new MyClass;

var_dump($a instanceof MyClass); //bool(true)
var_dump($a instanceof MyInterface); //bool(true)
?>
<?php
#Example #5 Using instanceof with other variables
interface MyInterface
{
}

class MyClass implements MyInterface
{
}

$a = new MyClass;
$b = new MyClass;
$e = new MyClass;
$c = 'MyClass';
$d = 'NotMyClass';

var_dump($a instanceof $b); // $b is an object of class MyClass bool(true) 
var_dump($a instanceof $c); // $c is a string 'MyClass' bool(true) 
var_dump($a instanceof $d); // $d is a string 'NotMyClass' bool(false) 
?>
