<?php
echo "I am in file __var-scope-1.php__ Variable scope \n\n";

include 'b.php';
$a = 1;


echo "[$a]" .  ' Line ' . __LINE__ .  "\n\n";
?>
