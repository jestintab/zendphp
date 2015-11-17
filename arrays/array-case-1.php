<?php
#Example #1 array_change_key_case() example
	$input_array = array("FirSt" => 1, "SecOnd" => 4);
	ECHO 'CASE_UPPER' . "<BR/>";
	print_r(array_change_key_case($input_array, CASE_UPPER));
	
	ECHO  "<BR/><BR/>" . ' CASE_lower' . "<BR/>";
	print_r(array_change_key_case($input_array, CASE_LOWER));
	
?>