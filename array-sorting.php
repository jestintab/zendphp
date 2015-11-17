<!-- 
1. asort()
Sort an associative array in ascending order, according to the value:
syntax: asort(array,sortingtype);
sortingtype	Optional. Specifies how to compare the array elements/items. Possible values:
	0 = SORT_REGULAR - Default. Compare items normally (don't change types)
	1 = SORT_NUMERIC - Compare items numerically
	2 = SORT_STRING - Compare items as strings
	3 = SORT_LOCALE_STRING - Compare items as strings, based on current locale
	4 = SORT_NATURAL - Compare items as strings using natural ordering
	5 = SORT_FLAG_CASE -

 -->
<?php 
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits); 
//or 
sort($fruits);

//Array ( [c] => apple [b] => banana [d] => lemon [a] => orange ) 

?>
<!--
2. arsort()
Sort an associative array in descending order, according to the value:
syntax: arsort(array,sortingtype);

sortingtype same as above.
!-->

<?php 
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
//or
rsort($fruits);

//Array ( [a] => orange [d] => lemon [b] => banana [c] => apple ) 
?>
<!-- 
3. ksort()
Sort an associative array in ascending order, according to the key: 
Syntax: ksort(array,sortingtype);

sortingtype same as above.
-->
<?php
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple", "j"=>"jackfruit");
ksort($fruits);
//Array ( [a] => orange [b] => banana [c] => apple [d] => lemon [j] => jackfruit )
?>
<!-- 
4.krsort()

Sort an associative array in descending order, according to the key:
Syntax: krsort(array,sortingtype)

sortingtype same as above.
 -->

 <?php 

$fruits =array("guave", "d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple", "j"=>"jackfruit", "pineapple");
krsort($fruits);
//Array ( [1] => pineapple [j] => jackfruit [d] => lemon [c] => apple [b] => banana [a] => orange [0] => guave )

?>
<!-- 5.sort() -->

<?php
$fruits = array("acpple", "lemon", "orange", "abpple", "banana", "apple");
sort($fruits, SORT_NUMERIC);
//Array ( [0] => banana [1] => apple [2] => abpple [3] => orange [4] => lemon [5] => acpple )

sort($fruits, SORT_STRING);
//Array ( [0] => abpple [1] => acpple [2] => apple [3] => banana [4] => lemon [5] => orange )

sort($fruits, SORT_NATURAL);
//Array ( [0] => abpple [1] => acpple [2] => apple [3] => banana [4] => lemon [5] => orange ) 

sort($fruits, SORT_REGULAR);
//Array ( [0] => abpple [1] => acpple [2] => apple [3] => banana [4] => lemon [5] => orange )

sort($fruits, SORT_NATURAL | SORT_FLAG_CASE); //case insensitive
//SORT_FLAG_CASE can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively
?>

<!-- 6. uasort() user-defined-sort -->
<?php
// Comparison function
function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

// Array to be sorted
$array = array('a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4);
print_r($array);

// Sort and print the resulting array
uasort($array, 'cmp');
?>