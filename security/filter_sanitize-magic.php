<?php
#Example
$var="Peter's here Null! This [" . NULL .']" I will come darling' ;
#$var=NULL;
var_dump(filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES));
?> 
