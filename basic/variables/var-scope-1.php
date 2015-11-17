<?php
echo "I am in file __var-scope-1.php__ Variable scope \n\n";

$a = 1;

include 'b.php';

echo "[$a]" .  ' Line ' . __LINE__ .  "\n\n";
?>
