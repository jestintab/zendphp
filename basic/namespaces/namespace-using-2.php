<?php
#Example #2 global functions/constants fallback inside a namespace
namespace A\B\C;
const E_ERROR = 45;
function strlen($str)
{
    return \strlen($str) - 1;
}


echo E_ERROR, " AT LINE " , __LINE__, "\n"; // prints "45"

echo INI_ALL, " AT LINE " , __LINE__,  "\n"; // prints "7" - falls back to global INI_ALL

echo strlen('hello'), " AT LINE " , __LINE__,  "\n"; // prints "1"

if (is_array('hi')) { // prints "is not array"
    echo "is array", " AT LINE " .  __LINE__ . "\n";
} else {
    echo "is not array", " AT LINE " . __LINE__  . "\n";
}

?>
