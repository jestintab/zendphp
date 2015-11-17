<?php
	function counter() {
		static $count = 0;
		$count++;
		echo $count;
	}
	counter();
	counter();
	counter();
?>
