<?php
    function cleanArray($arr)
    {
        $functions = array();

        array_push($functions, 'array_filter', 'array_unique'); 

        $ret = $arr;
        
        print_r($functions) . PHP_EOL;
        
        foreach ($functions as $func) {
            //print_r($func) . PHP_EOL;
            $ret = $func($ret);
        }

        return $ret;
    }

    $values = array(
        15, '', 0, 25, 'hello', 15
    );
    
    print_r($values) . PHP_EOL;
    
    foreach (cleanArray($values) as $v) {
        echo $v . PHP_EOL;
    }
?>

