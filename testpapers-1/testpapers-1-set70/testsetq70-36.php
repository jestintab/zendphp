
<?php
$x = 1;
function print_conditional() {
   static $x;
   echo $x . ' Line : ' . __LINE__ . PHP_EOL;
   
   if($x++ == 1)
      echo "many";
   echo "good";
   echo "things";
   echo $x . ' Line : ' . __LINE__ . PHP_EOL;

   return $x;
}
echo $x . ' Line : ' . __LINE__ . PHP_EOL;

print_conditional();
$x++;
echo $x . ' Line : ' . __LINE__ . PHP_EOL;

print_conditional();
print_conditional();
print_conditional();
echo $x . ' Line : ' . __LINE__ . PHP_EOL;
   
echo "" . PHP_EOL;

?>
