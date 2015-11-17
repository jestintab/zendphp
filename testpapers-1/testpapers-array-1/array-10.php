<?php
    function reducer($total, $eltx)
    {
        echo "{$total} : $eltx " . PHP_EOL; 
        return  $total + $eltx;
    }

    $arr = array(1, 2, 3); 
    echo array_reduce($arr, 'reducer', 3);
?>


<?php
//Example #1 array_reduce() example
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

function multiplication($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "sum")); // int(15)
var_dump(array_reduce($a, "multiplication", 10)); // int(1200), because: 10*1*2*3*4*5
var_dump(array_reduce($x, "sum", "No data to reduce")); // string(17) "No data to reduce"
?>


<?php
echo "" . PHP_EOL;

$a = array(1, 2, 3, 4, 5);

print_r($a);

 shuffle($a);

echo "" . PHP_EOL;

print_r($a);

?>


<?php
    function sortByLength($a, $b){
        
        
        $lenA = strlen($a);
        $lenB = strlen($b);
        //echo " $a , $b " . " $lenA : $lenB " . PHP_EOL;
        if ($lenA == $lenB) { return 0; } 
        return ($lenA < $lenB ? -1 : 1);
    }

    $values = array(
        'ccc',
        'a',
        'eeeeee',
        'dddd',
        'bb',
        'fffff'
    );

    usort($values, 'sortByLength');
    echo $values[5] . PHP_EOL;
?>

<?php
    function sortByOrder($a, $b){ 
        echo " $a , $b " . PHP_EOL;
        if ($a == $b) { return 0; } 
        return ($a < $b ? -1 : 1);
    }

    $values = array(9,8,2, -9, 25,1);

    usort($values, 'sortByOrder');
    print_r( $values) . PHP_EOL;
?>
