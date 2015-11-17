<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo "<pre>"; 
echo "<pre>";
//Example #1 apc_inc() example
echo "Let's do something with success", PHP_EOL;

apc_store('anumber', 42);

echo apc_fetch('anumber'), PHP_EOL;

echo apc_inc('anumber'), PHP_EOL;
echo apc_inc('anumber', 10), PHP_EOL;
echo apc_inc('anumber', 10, $success), PHP_EOL;

var_dump($success);

echo "Now, let's fail", PHP_EOL, PHP_EOL;

apc_store('astring', 'foo');

$ret = apc_inc('astring', 1, $fail);

var_dump($ret);
var_dump($fail);


?>

<?php
echo "I am here <br/><br/>";
$oApcIt = new APCIterator('user', '/^[a-z]/'); 
echo "This total APC in mem: [" . $oApcIt->getTotalCount() . "]<br/><br/>";

echo "This total APC hits: [" . $oApcIt->getTotalHits() . "]<br/><br/>";

echo "This total size APC: [" . $oApcIt->getTotalSize() . "]<br/><br/>";

echo "WHILE ";
print_r($oApcIt); 
echo "<br/>";
foreach ($oApcIt as $counter) {
   // print_r($counter) . PHP_EOL;
    
    echo "$counter[key]: $counter[value]<br/>";
    
    //apc_dec($counter['key'], $counter['value']) . "<br/>";
}
?>
