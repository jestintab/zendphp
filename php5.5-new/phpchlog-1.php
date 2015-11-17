<?php
    $binarydata = pack("nvc*", 0x1234, 0x5678, 65, 66);
    echo $binarydata . PHP_EOL;
    
    $unp = unpack("c2/n", $binarydata);
    
    print_r($unp) . PHP_EOL;
    
?>


<?php
$binarydata = "\x32\x42\x00\xa0";
$array = unpack("c2/n", $binarydata);
var_dump($array);
?>



<?php
$binarydata = "\x04\x00\xa0\x00";
$array = unpack("c2chars/nint", $binarydata);
print_r($array) . PHP_EOL;
?>
