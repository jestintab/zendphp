<?php
#Example #3 Autoloading with exception handling for 5.3.0+
#This example throws an exception and demonstrates the try/catch block.
function __autoload($name) {
    
    echo "Want to load $name.\n";
    
    throw new Exception("Unable to load $name.");
    
}

try {
    $obj = new NonLoadableClass();
} catch (Exception $e) {
    echo $e->getMessage(), " here \n";
}
?>
