<?php
error_reporting(E_ALL | E_STRICT);
/* data actually came from POST */
/*$_POST = array(
    'product_id'    => 'libgd<script>',
    'component'     => '10',
    'versions'      => '2.0.33',
    'testscalar'    => array('2', '23', '10', '12'),
    'testarray'     => '2',
);
*/
 
$args = array(
    'product_id'   => FILTER_SANITIZE_ENCODED,
    'component'    => array('filter'    => FILTER_VALIDATE_INT, 
                            'options'   => array('min_range' => 1, 'max_range' => 10)
                           ), 
    'doesnotexist' => FILTER_VALIDATE_INT 
);

$myinputs = filter_input_array(INPUT_POST, $args);

var_dump($myinputs);
echo "\n";
?>
