<?php
#Example #1 Dynamically accessing elements
class classname
{
    function __construct()
    {
        echo "Line no. 7 ", __METHOD__,"\n";
    }
    
    public function newFunction(){
		echo "Line no. 11 ", __METHOD__ , "\n";
		echo "Line no. 12 ", __FUNCTION__ , "\n";
	}
}
function funcname()
{
    echo "Line no. 17 ", __FUNCTION__,"\n";
}
const constname = "global";

$a = 'classname';
$obj = new $a; // prints classname::__construct

$b = 'funcname';
$b(); // prints funcname

$c = 'newFunction';

$obj->$c();

echo constant('constname'), "\n"; // prints global
?>
