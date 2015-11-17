<?php
#Example #1 Accessing global classes, functions and constants from within a namespace

namespace Foo;

function strlen() {}
const INI_ALL = 3;
class Exception {}

$a = \strlen('hi33'); // calls global function strlen
$b = \INI_ALL; // accesses global constant INI_ALL
$c = new \Exception('error'); // instantiates global class Exception

echo $a ."\n\n";
echo $b ."\n\n";
?>
