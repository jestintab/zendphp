<?php

/* Suppose that $var_array is an array returned from wddx_deserialize */

$size = "large";

$var_array = array( "color" => "blue",
                    "size"  => "medium",
                    "shape" => "sphere",
                    "_weight" => "99.987");

extract($var_array, EXTR_PREFIX_SAME, "wddx");

echo "$color, $size, $shape, $_weight, $wddx_size\n";

?>
