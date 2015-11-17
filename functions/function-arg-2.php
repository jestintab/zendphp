<?php
#Example #3 Use of default parameters in functions
function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type.\n";
}
echo makecoffee(); //Making a cup of cappuccino.
echo makecoffee(null); //Making a cup of .
echo makecoffee("espresso"); //Making a cup of espresso.

?>
