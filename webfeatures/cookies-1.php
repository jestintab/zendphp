<?php
	setcookie('candidatename', 'dhananjay k sharma'); 
	setrawcookie('cookie_name', rawurlencode('Raw cookie dhananjay k sharma'), time()+60*60*24*365); 
	echo ' Cookie first : ' . $_COOKIE["first"];
	
	echo "<br/>";
	echo ' Cookie candidatename : ' . $_COOKIE["candidatename"];
	
	echo "<br/>";
	echo ' Raw Cookie candidatename : ' . $_COOKIE["cookie_name"];
	echo "<pre>";	
	print_r($_SERVER['HTTP_COOKIE']);
	echo "<br/>----------<br/>";
	print_r($_COOKIE);
	echo "<br/>----------<br/>";
	echo $_COOKIE['candidatename'];
	echo "<br/>----------<br/>";
	echo $_COOKIE['cookie_name'];
		
	echo "</pre>";
?>
