<?php
    $c = (int) 0xAF;
    echo $c . PHP_EOL;
    
    
    $a = 10 * 16 + 15;
    
    
    echo (177+254) % 1;
    
   @print_r(array_combine(array(1,2,3,6),array(4,5,6)));
    

$aa = array( 0 => 'book1.pdf', 1 => 'book11.pdf',  2 => 'book12.pdf',  3 => 'book2.pdf');
/*
natsort($aa); 

echo  PHP_EOL; 
print_r($aa);
Array
(
    [0] => book1.pdf
    [3] => book2.pdf
    [1] => book11.pdf
    [2] => book12.pdf
)

*/
/*
sort($aa);
print_r($aa);
Array
(
    [0] => book1.pdf
    [1] => book11.pdf
    [2] => book12.pdf
    [3] => book2.pdf
) */


/*
ksort($aa);
print_r($aa);
*/
/*
asort($aa);
print_r($aa);*/
?>

<?php
$name = array("d" => "Mark", "a" => "David", "b" => "Peter", "c" => "Martha");
$nameArrayObject = new ArrayObject($name);
$nameArrayObject->ksort();
 
foreach ($nameArrayObject as $key => $val) {
    echo "$key = $val\n";
}
 ?>

<?php
    $foofa = function ($x){
        return $x*$x;
    };
    
    $foo = create_function('$x', 'return $x*$x;');
    $bar = create_function("\$x", "return \$x*\$x;");
    echo $foo(10) . PHP_EOL;
    echo $bar(5). PHP_EOL;
    
    echo $foofa(3) . PHP_EOL;
    
?>
 
<?php
    $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
    $array2 = array("a" => "green", "yellow", "red");
    $result = array_diff_assoc($array1, $array2);
    print_r($result);
?>

<?php
$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));
?>

<?php
function a(&$a = 19)
{
 $a .= 1;
}
$b = 6;
a($b);
echo $b++ . PHP_EOL;

echo $b . PHP_EOL;
?>


<?php
$a = 'aa b cc dd '; 
$array = array("a" => "One","b" => "Two", "_c" => "Three", "me" => "Dhananjay");
extract($array);
echo "$a = $a; $b = $b; $_c = $_c; $me = $me" . PHP_EOL;
?> 

<?php
    $arr = array('age'=>33, 'rate' =>55, 'qty' =>2, "dhananjay", '32' => "Anupama");
    $arr1 = $arr;
    print_r($arr); 
    
    sort($arr);
    
    print_r($arr); 
    
    asort($arr1);
    
    print_r($arr1); 
?>