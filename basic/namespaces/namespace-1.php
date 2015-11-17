<?php
namespace appsmyth\sk; // see "Defining Namespaces" section

class MyClass {
}

function myfunction() {
}

const MYCONST = 99;
const MYCONST2 = 88.887;

$ff = 12.546;

$a = new MyClass;
$c = new \appsmyth\sk\MyClass; // see "Global Space" section

$a = strlen('hi'); // see "Using namespaces: fallback to global
                   // function/constant" section

$d1 = namespace\MYCONST2; // see "namespace operator and __NAMESPACE__  
 
$d2 = __NAMESPACE__ . '\MYCONST';

echo MYCONST . "\n\n";

echo $d1."\n\n"; // see "Namespaces and dynamic language features" section
echo constant($d2)."\n\n"; // see "Namespaces and dynamic language features" section

?>
