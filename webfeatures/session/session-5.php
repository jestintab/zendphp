<?php
    session_start();

    $_SESSION['product'] = "alovera juice";
    $_SESSION['price'] = '500'; 

    $sEncode = session_encode();

    echo $sEncode . PHP_EOL;
    print "<pre>";
    print_r($_SESSION);
    print "</pre>";
    $_SESSION['product'] = "alovera juice with orange";
    $_SESSION['price'] = '650'; 

    print "SESSION Array:" . PHP_EOL ;
    print "<pre>";
    print_r($_SESSION);
    print "</pre>";
    session_decode($sEncode);
    
    echo $sEncode . PHP_EOL;
    
?>
