<?php
$aSort = array('image_1.jpg','image_12.jpg',  'image_2.jpg', 'image_21.jpg', 'image_4.jpg', 'image_3.jpg',  'image_300.jpg',  'image_10.jpg',  'image_12.jpg');
sort($aSort);
print_r($aSort);


$aSort2 = array('image_1.jpg','image_12.jpg',  'image_2.jpg', 'image_21.jpg', 'image_4.jpg', 'image_3.jpg',  'image_300.jpg',  'image_10.jpg',  'image_12.jpg');
#$aSort2 = array('09', '8', '10', '009', '011', '0');
 
sort($aSort2, SORT_NATURAL);
print_r($aSort2);

die();
?>


<?php

$fruits = array(
    "Orange1", "orange2", "Orange3", "orange20"
);
sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

echo "\n\n";
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

?>
