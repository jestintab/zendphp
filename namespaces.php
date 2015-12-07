<?php
#Example #1 Declaring a single namespace
namespace MyProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }

?>
<html>
<?php
namespace MyProject; // fatal error - namespace must be the first statement in the script
?>
<?php

namespace MyProject; // fatal error - namespace must be the first statement in the script
?>
<?php
#Example #1 Declaring a single namespace
namespace MyProject;
const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }

namespace MyProjectAnother;
const CONNECT_OK = 44;
class Connection { /* ... */ }
function connect() { /* ... */  }

$ns1 =  \MyProject\CONNECT_OK;

$ns2 =  \MyProjectAnother\CONNECT_OK;

echo $ns1. "\n\n"; //1
echo $ns2. "\n\n"; //44
?>
<?php
#PHP Fatal error:  Cannot mix bracketed namespace declarations with unbracketed namespace declarations in /media/linux-on/certification/php5.5zendcertification/more/phpcert/basic/namespaces/namespace-dec-5.php on line 9
namespace MyProject1;
// PHP code for the MyProject1 namespace

namespace MyProject2;
// PHP code for the MyProject2 namespace

// Alternative syntax
namespace MyProject3 {
	// PHP code for the MyProject3 namespace
}
?>
<?php
#Example #1 importing/aliasing with the use operator
namespace foo;
use My\Full\Classname as Another;

// this is the same as use My\Full\NSname as NSname
use My\Full\NSname;

// importing a global class
use ArrayObject;

$obj = new namespace\Another; // instantiates object of class foo\Another
$obj = new Another; // instantiates object of class My\Full\Classname
NSname\subns\func(); // calls function My\Full\NSname\subns\func
$a = new ArrayObject(array(1)); // instantiates object of class ArrayObject
// without the "use ArrayObject" we would instantiate an object of class foo\ArrayObject
?>
<?php
#Example #2 importing/aliasing with the use operator, multiple use statements combined
use My\Full\Classname as Another, My\Full\NSname;

$obj = new Another; // instantiates object of class My\Full\Classname
NSname\subns\func(); // calls function My\Full\NSname\subns\func
?>
<?php
#Example #3 Importing and dynamic names
use My\Full\Classname as Another, My\Full\NSname;

$obj = new Another; // instantiates object of class My\Full\Classname
$a = 'Another';
$obj = new $a;      // instantiates object of class Another
?>
<?php
#Example #4 Importing and fully qualified names
use My\Full\Classname as Another, My\Full\NSname;

$obj = new Another; // instantiates object of class My\Full\Classname
$obj = new \Another; // instantiates object of class Another
$obj = new Another\thing; // instantiates object of class My\Full\Classname\thing
$obj = new \Another\thing; // instantiates object of class Another\thing
?>
