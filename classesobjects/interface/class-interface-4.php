<?php
# Example #4 Interfaces with constants

interface a
{
    const b = 'Interface constant';
}

// Prints: Interface constant
echo a::b . "\n";


// This will however not work because it's not allowed to 
// override constants.
class b implements a
{
    const g = 'Class constant';
    // if trying to override a constant in implemented class
    // Interface constantPHP Fatal error:  Cannot inherit previously-inherited or override constant b from interface a in /media/linux-on/certification/php5.5zendcertification/more/phpcert/classesobjs/class-interface-4.php on line 16
    
    public function getConstant(){
		echo a::b . ' in getConstant 22 ' . "\n";
	}
}

echo a::b . "\n";
echo b::g . "\n";

echo b::b . "\n";

$oB = new b();
$oB->getConstant();
?>
