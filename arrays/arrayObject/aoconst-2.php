<?php                                                     
                                                          
$a = new ArrayObject(array(), ArrayObject::STD_PROP_LIST);
    $a['arr'] = 'array data';
	$a['arr2'] = 'this modified';
    $a->prop = 'prop data';                               
	$a->prop444 = 'dddd ';
$b = new ArrayObject();                                   
    $b['arr'] = 'array data';        
	$b['arr3'] = 'modified 3';                     
    $b->prop = 'prop data';                               
	$b->ddd = 'fdakf nadfjn ';
                                                          
// ArrayObject Object                                     
// (                                                      
//      [prop] => prop data                               
// )     
echo "<pre>";                                                 
print_r($a);                                              
                                                          
// ArrayObject Object                                     
// (                                                      
//      [arr] => array data                               
// )                                                      
print_r($b);                                              
                                                          
?>
