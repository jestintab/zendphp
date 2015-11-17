<?php
$var = true ? '1' : false ? '2' : '3';
echo $var;
?>
<?php

$a = array(
  null => 'a',
  true => 'b',
  false => 'c',
  0 => 'd',
  51 => 'e',
  '' => 'f',
  "'" => 'g',
  " " => 'i',
);

echo  PHP_EOL . $a[''] . PHP_EOL;

echo  PHP_EOL . $a["'"] . PHP_EOL;

print_r($a);
foreach ($a as $o => $b){
	echo "$o : [". strlen($o) . "] -- >> $b" . PHP_EOL;
}
echo count($a), "\n";



$a = 1;

{
  $a = 2;
}
 
echo $a, "\n";

?>

<?php

$a = array(
    'a',
    0 => 'b',
    1 => 'c',
    'd'
);

print_r($a);

?>
