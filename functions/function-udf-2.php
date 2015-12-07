<?php
$a = 0;
recursion1($a);
# Example #4 Recursive functions
function recursion1($a)
{
    if ($a < 50) {
        echo "$a\n";
        recursion1($a + 1);
    }
}
?>
<?php //recursion finocci
$a =44;

function recursion($a){
	if($a==0){
		return 0;
	}
	else if($a==1){
		return 1;

	}
	else{
		return recursion($a-1) + recursion($a-2);

	}
	for($i=0;$i<$a; $i--){
		echo recursion($a);
	}
}

?>