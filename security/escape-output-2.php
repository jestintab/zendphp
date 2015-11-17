<?php
$str = "A 'quote' is <b>bold</b> \"Darling\" here ";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);
echo "\n\n";
// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str, ENT_QUOTES);
echo "\n\n";
echo htmlentities($str, ENT_COMPAT);
?>
