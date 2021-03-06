<?php
#Example #4 Using non-scalar types as default values
function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL)
{
    $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
    return "Making a cup of ".join(", ", $types)." with $device.\n";
}
echo makecoffee(); //Making a cup of cappuccino with hands
echo makecoffee(array("cappuccinoooo", "lavazza"), "teapot"); // Making a cup of cappuccinoooo,
// lavazza with teapot
?>
