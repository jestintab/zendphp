<?php
    $array1 = array ('a' => 20, 30, 35);
    $array2 = array ('b' => 20, 35, 30);
    $array = array_intersect_assoc ($array1, $array2);
    print_r($array);
?>
<?php
    $array1 = array ('a' => 20, 530, 35);
    $array2 = array ('b' => 20, 35, 30);
    $array = array_intersect ($array1, $array2);
    print_r($array);
?>

