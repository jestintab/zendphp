<?php 
ob_start(); 
for($i=1; $i<6; $i++){
    for($j=0; $j < $i; $j++){
        echo "*";
    }
    echo "\n";
}
$aa = ob_get_contents();
ob_end_clean();
$bb = ob_get_contents();
echo $aa;

echo "bb  : {$bb}" . PHP_EOL;
 
?>
