<?php 
$sNamesall = array('Dhananjay','Anupama','Arunjay','nandkumar');
$sNames = "Dhananjay Anupama Arunjay nandkumar";
$patt1 = '/[^an|?<name>]/';
		echo "match_all function";														
		preg_match_all($patt1, $sNames, $matches);
		print_r($matches);print_r('\n');
		
		echo "preg_grep function";
		$listarr1 = preg_grep($patt1, $sNamesall, 0);
		print_r($listarr1);print_r('\n');

		$subject = "abcdef";
		$pattern = '/^def/';
		preg_match($pattern, $subject, $matches);
		print_r($matches);print_r('\n');
?>
