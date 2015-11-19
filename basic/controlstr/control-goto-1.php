	<?php
#Example #1 goto example
goto a;
echo "not print this line";
goto gc;
echo "top F Foo";
echo 'F Foo' . "\n";
echo "bottom F Foo";

a:
echo 'A Bar' . "\n";

echo "bottom F Foo" . "\n";

//goto gc;
ab:
echo 'Jump' . "\n"; 
echo 'Skip' . "\n";

gc:
echo 'G Bar' . "\n";
?>
