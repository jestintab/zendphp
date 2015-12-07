<?php
	function counter() {
		static $count = 0;
		$count++;
		echo $count;
	}
	counter(); //1
	counter(); //2
	counter(); //3
?>
