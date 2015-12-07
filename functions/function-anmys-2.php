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
$my_cart->getArray();
// Print the total with a 5% sales tax.
print $my_cart->getTotal(0.05) . "\n";
// The result is 54.29
?>
