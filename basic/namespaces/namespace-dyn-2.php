<?php
#Example #2 Dynamically accessing namespaced elements
namespace namespacename;
class classname
{
    function __construct()
    {
        echo "In namespace ", __METHOD__,"\n";
    }
}
function funcname()
{
    echo "In namespace " , __FUNCTION__,"\n";
}
const constname = "namespaced";

include 'namespace-dyn-1.php';

$a = 'classname';
$obj = new $a; // prints classname::__construct
$b = 'funcname';
$b(); // prints funcname
echo constant('constname'), "\n"; // prints global

/* note that if using double quotes, "\\namespacename\\classname" must be used */
$a = "\\namespacename\\classname";
$obj = new $a; // prints namespacename\classname::__construct

$a1 = '\namespacename\classname';
$obj = new $a1; // prints namespacename\classname::__construct

$a = 'namespacename\classname';
$obj = new $a; // also prints namespacename\classname::__construct
$b = 'namespacename\funcname';
$b(); // prints namespacename\funcname
$b = '\namespacename\funcname';
$b(); // also prints namespacename\funcname
echo constant('\namespacename\constname'), "\n"; // prints namespaced
echo constant('namespacename\constname'), "\n"; // also prints namespaced
?>
