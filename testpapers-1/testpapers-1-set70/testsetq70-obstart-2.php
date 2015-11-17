<?php 
$aa = '';
for($i=1; $i<6; $i++){
    for($j=0; $j < $i; $j++){
        $aa .= "*";
    }
    $aa .=  "\n";
}
echo $aa;
echo "" . PHP_EOL;
?>
