<?php
#Example #2 Anonymous function variable assignment example
$greet = function($name, $age=99)
{
    printf("Hello %s\r\n", $name . ' ' . $age);
};

$greet('World'); //Hello World 99
$greet('PHP'); //Hello PHP 99
?>
<?php
#Example #3 Closures and scoping
// A basic shopping cart which contains a list of added products
// and the quantity of each product. Includes a method which
// calculates the total price of the items in the cart using a
// closure as a callback.
class Cart
{
    const PRICE_BUTTER  = 1.00;
    const PRICE_MILK    = 3.00;
    const PRICE_EGGS    = 6.95;

    protected $products = array();
    
    public function add($product, $quantity)
    {	
        $this->products[$product] = $quantity;       
    }
    public function getArray(){
        return print_r($this->products);
    }
    public function getQuantity($product)
    {
        return isset($this->products[$product]) ? $this->products[$product] :  FALSE;
    }
    
    public function getTotal($tax)
    {   
        $total = 0.00;
        $unit = '';
        $callback = function ($quantity, $product) use ($tax, &$total, &$unit) {
                $pricePerItem = constant(__CLASS__ . "::PRICE_" .  strtoupper($product));
                $total += ($pricePerItem * $quantity) * ($tax + 1.0);
                $unit = 'Rupees ';
            };
        
        array_walk($this->products, $callback);
        return $unit .round($total, 2);
    }
}

$my_cart = new Cart;
// Add some items to the cart
$my_cart->add('butter', 1);
$my_cart->add('milk', 3);
$my_cart->add('eggs', 6);
$my_cart->getArray(); //Array ( [butter] => 1 [milk] => 3 [eggs] => 6 ) 
// Print the total with a 5% sales tax.
print $my_cart->getTotal(0.05) . "\n";
// The result is 54.29
?>
<?php
#Example #2 Passing function parameters by reference
function add_some_extra(&$string)
{
    $string .= 'and something extra.'. "\n\n";
}
$str = "\n\n" . 'This is a string, ';
add_some_extra($str);
echo $str;    // outputs 'This is a string, and something extra.'
//if passed not by reference it will outputs 'This is a string' only.
?>
<?php
#Example #2 Passing function parameters by reference
function add_some_extra($string)
{
  return  $string .= 'and something extra.'. "\n\n";
}
$str = "\n\n" . 'This is a string, '; // outputs 'This is a string, and something extra.'
echo add_some_extra($str);
//echo $str;   
?>
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
<?php
#Example #5 Incorrect usage of default function arguments
function makeyogurt($type = "acidophilus", $flavour)
{
    return "Making a bowl of $type $flavour.\n";
}
 
echo makeyogurt("raspberry");   // won't work as expected --Warning: Missing argument 2 for makeyogurt(), called in 
//Notice: Undefined variable: flavour in
//Making a bowl of raspberry.

?>
<?php
#Example #3 Functions within functions

function foo() 
{
  function bar() 
  {
    echo "I don't exist until foo() is called.\n";
  }
}
/* We can't call bar() yet since it doesn't exist. */
foo();
/* Now we can call bar(), foo()'s processing has made it accessible. */
bar();
?>
<?php
$a = 0;
recursion1($a);
# Example #4 Recursive functions
function recursion1($a)
{
    if ($a < 50) {
        echo "$a\n";
        recursion1($a + 1);
    }
}
?>
<?php
# Example #1 Variable function example
function foo() {
    echo "In foo()<br />\n";
}

function bar($arg = '')
{
    echo "In bar(); argument was '$arg'.<br />\n";
}

// This is a wrapper function around echo
function echoit($string)
{
    echo $string;
}

$func = 'foo';
$func();        // This calls foo()

$func = 'bar';
$func('test');  // This calls bar()

$func = 'echoit';
$func('test');  // This calls echoit()
?>
